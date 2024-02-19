<?php

namespace App\Http\Controllers;

use App\Models\List_task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Task_list_Controller extends Controller
{
    public function __invoke()
    {
        return view('index');
    }

    public function registrarTarea(Request $request)
    {

        $task = new List_task([
            'titulo' => $request->input('titulo'),
        ]);
        $task->save();
        return redirect()->route('index')->with('correcto', "La tarea se registró correctamente");
    }

    public function mostrarTarea()
    {
        $tasks = List_task::all();
        return view('index')->with('tasks', $tasks);
    }

    public function eliminarTarea(List_task $task)
    {
        $task ->delete();
        return redirect()->route('index')->with('correcto', "La tarea se elimino correctamente");
    }

    public function editarTarea(List_task $task)
    {
        return view('editar', compact('task'));
    }

    public function actualizarTarea(Request $request, List_task $task)
    {
        $task -> update($request -> all());
        return redirect()->route('index', $task -> id);
    }
}
