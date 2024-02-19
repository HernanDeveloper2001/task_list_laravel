@extends('layouts.plantilla')

@section('content')
    <article class="w-full h-screen bg-gray-400 flex flex-col p-12 ">
        <x-title>
            Actualiza la tarea
        </x-title>
        <x-form action="{{ route('actualizar.tarea', $task) }}" method="post">
            @csrf
            @method('put')
            <div class="w-4/5">
                <x-label>
                    Actualizar tarea
                    <x-input placeholder="Actualizar tareas" titulo="titulo" value="{{ old('titulo', $task->titulo) }}" />
                </x-label>
            </div>
            <div class="items-end flex w-auto">
                <x-button info="editar">
                    Editar
                </x-button>
            </div>
        </x-form>
        <a class="my-6 self-center w-16 p-1 text-center text-yellow-900 bg-yellow-200 border-2 border-yellow-500 rounded"
            href="{{ route('index') }}">Atras</a>
    </article>
@endsection()
