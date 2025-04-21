<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
    <h2>Iniciar sesión</h2>

    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Iniciar sesión</button>
    </form>
@endsection
