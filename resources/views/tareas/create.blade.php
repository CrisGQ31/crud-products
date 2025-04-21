@extends('layouts.app')

@section('title', 'Crear Tarea')

@section('content')
    <h1>Crear Tarea</h1>

    <form method="POST" action="{{ route('tareas.store') }}">
        @csrf

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
