@extends('layouts.app')

@section('title', 'Listagem dos Usuarios')
    

@section('content')

<h1 class="text-2xl font-bold leading-tigh py-2 m-10">
    Listagem dos usuários
    <a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{ route('users.index') }}" method="get" class="m-10">
    <input type="text" name="search" id="Pesquisar" placeholder="Pesquisar..." class="rounded shadow w-300 p-2 bg-gray-300">
    <button class="text-white font-semibold bg-purple-500 hover:bg-purple-400 focus:shadow px-3 py-2 rounded-lg">Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded m-10">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-200 text-left">
                NOME
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-200 text-left">
                E-MAIL
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-200 text-center">
                EDITAR
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-200 text-center">
                DETALHES
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-200 text-center">
                COMENTÁRIOS
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td class="p-5 border-b border-gray-300 text-left">{{ $user->name }}</td>
            <td class="p-5 border-b border-gray-300 text-left">{{ $user->email }}</td>
            <td class="text-center border-b border-gray-300">
                <a class="bg-orange-300 hover:bg-orange-200 px-6 py-2 rounded-full" href="{{ route('users.edit', $user->id) }}">Editar</a>
            </td>
            <td class="text-center border-b border-gray-300">
                <a  class="bg-green-300 hover:bg-green-200 px-6 py-2 rounded-full text-center" href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </td>
            <td class="text-center border-b border-gray-300">
                <a  class="bg-blue-300 hover:bg-blue-200 px-6 py-2 rounded-full text-center" href="{{ route('comments.index', $user->id) }}">Comentários (0)</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- Antes da estilização 
<ul class="bg-gray-100">
    @foreach ($users as $user)
        <li class="columns-4 px-10 py-5 w-full">
            <p class="w-auto">{{ $user->name }}</p>
            <p class="w-auto">{{ $user->email }}</p>
            <a class="bg-orange-500 hover:bg-orange-400 px-3 py-2 rounded-lg" href="{{ route('users.edit', $user->id) }}">Editar</a>
            <a class="bg-green-500 hover:bg-green-400 px-3 py-2 rounded-lg" href="{{ route('users.show', $user->id) }}">Detalhes</a> <!-- usar quando se tem aénas 1 usuario cadastrado no banco -->
            <!-- usar quando array de dados, mais de 1 no banco-->
            <!-- <a href="{{ route('users.show', [ 'id' => $user->id ]) }}">Detalhes</a> --> 
            
        </li>
    @endforeach
</ul>
--}}
    
@endsection