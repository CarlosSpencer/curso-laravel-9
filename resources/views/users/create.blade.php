@extends('layouts.app')

@section('title', 'Novo Usuário')
    
@section('content')

<h1>Novo Usuário</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.store') }}" method="POST">
    <!-- {{ csrf_token() }} caso queira consultar o token para o metodo post -->
    @csrf <!-- obrigatorio para metodo post para evitar ataques CSRF -->
    <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="E-mail:" value="{{ old('email') }}"">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">Enviar</button>
</form>

@endsection