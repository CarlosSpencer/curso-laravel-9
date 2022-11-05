@extends('layouts.app')

@section('title', 'Listagem dos Usuarios')
    

@section('content')

<h1>Listagem dos usuários
    (<a href="{{ route('users.create') }}">+</a>)
</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }}
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a> <!-- usar quando se tem aénas 1 usuario cadastrado no banco -->
            <!-- usar quando array de dados, mais de 1 no banco-->
            <!-- <a href="{{ route('users.show', [ 'id' => $user->id ]) }}">Detalhes</a> --> 
        </li>
    @endforeach
</ul>
    
@endsection