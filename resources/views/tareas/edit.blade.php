@extends('layouts.app')

@section('title', 'Editar Tarea')

@section('content')
    <h1>Editar Tarea</h1>

    <form method="POST" action="{{ route('tareas.update', $tarea) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $tarea->titulo }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3">{{ $tarea->descripcion }}</textarea>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="completada" class="form-check-input" value="1" {{ $tarea->completada ? 'checked' : '' }}>
            <label class="form-check-label">¿Completada?</label>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
