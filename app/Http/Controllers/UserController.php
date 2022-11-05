<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        //dd($users);

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        //$user = User::where('id', '=', $id)->first();   >>>> Forma de buscar um unico usuario
        if (!$user = User::find($id)) //
            return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }
}
