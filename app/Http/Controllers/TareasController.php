<?php

namespace App\Http\Controllers;


use App\Models\Tareas;
use Illuminate\Http\Request;
//use App\Models\Tarea;


class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tareas::all();
        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Tareas::create($request->all());

        return redirect()->route('tareas.index')->with('success', 'Tarea creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Buscar la tarea con el ID correspondiente
        $tarea = Tareas::findOrFail($id);

        // Pasar la tarea específica a la vista (como lo pediste)
        return view('tareas.edit', compact('tarea'));


//        return view('tareas.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        // Buscar la tarea específica por su ID
        $tarea = Tareas::findOrFail($id);

        // Actualizar los datos de la tarea
        $tarea->update([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'completada' => $request->has('completada') // Si 'completada' está presente, se marcará como true
        ]);

        // Redirigir a la lista de tareas con un mensaje de éxito
        return redirect()->route('tareas.index')->with('success', 'Tarea actualizada.');

//        $request->validate([
//            'titulo' => 'required|string|max:255',
//            'descripcion' => 'nullable|string',
//        ]);
//
//        $tareas->update([
//            'titulo' => $request->titulo,
//            'descripcion' => $request->descripcion,
//            'completada' => $request->has('completada')
//        ]);
//
//        return redirect()->route('tareas.index')->with('success', 'Tarea actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tareas $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index')->with('success', 'Tarea eliminada.');
    }
}
