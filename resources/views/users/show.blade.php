@extends('layouts.app')

@section('content')

@section('title', 'Listagem do Usuario')

<h1>Listagem do usuário {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

@endsection