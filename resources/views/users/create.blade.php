@extends('layouts.app')

@section('title', 'Novo Usuário')
    
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Usuário</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="POST">
    <!-- {{ csrf_token() }} caso queira consultar o token para o metodo post -->
    @csrf <!-- obrigatorio para metodo post para evitar ataques CSRF -->

    @include('users._partials.form')
   
</form>

@endsection