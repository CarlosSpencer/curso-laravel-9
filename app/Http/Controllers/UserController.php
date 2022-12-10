<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->search);
        //$users = User::where('name', 'LIKE', "%{$request->search}%")->get(); // primeira forma de fazer um filtro
        //dd($users);

        $search = $request->search;
        $users = User::where(function ($query) use ($search) {
            if($search){
                $query->where('email', $search);
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
        })->get();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        //$user = User::where('id', '=', $id)->first();   >>>> Forma de buscar um unico usuario
        if (!$user = User::find($id)) //
            return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        
        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$user = User::find($id)) //
            return redirect()->route('users.index');

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        
        if (!$user = User::find($id)) //
            return redirect()->route('users.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        
        $user->update($data);
        
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        //$user = User::where('id', '=', $id)->first();   >>>> Forma de buscar um unico usuario
        if (!$user = User::find($id)) //
            return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index');
    }
}
