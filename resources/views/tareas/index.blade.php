@extends('layouts.app')

@section('title', 'Lista de Tareas')

@section('content')
    <h1>Lista de Tareas</h1>
    <a href="{{ route('tareas.create') }}" class="btn btn-primary mb-3">Nueva tarea</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Título</th>
            <th>Completada</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tareas as $tarea)
            <tr>
                <td>{{ $tarea->titulo }}</td>
                <td>{{ $tarea->completada ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta tarea?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

