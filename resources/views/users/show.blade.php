@extends('layouts.app')

@section('content')

@section('title', 'Listagem do Usuario')

<h1 class="text-2xl font-semibold leading-tigh py-2">Listagem do usuário {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="bg-red-500 hover:bg-red-400 px-3 py-2 rounded-lg text-center">Deletar</button>
</form>

@endsection