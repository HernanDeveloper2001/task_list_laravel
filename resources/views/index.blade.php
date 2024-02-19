@extends('layouts.plantilla')

@section('content')
    <div class="w-full h-screen bg-gray-400 flex flex-col p-12 ">
        <x-title>
            Esta es tu lista de tareas
        </x-title>

        <x-form action="{{ route('index') }}" method="POST">
            @csrf
            <div class="w-4/5">
                <x-label>
                    Ingresa una tarea
                    <x-input placeholder="Ingresa una tarea" titulo="titulo" />
                </x-label>
            </div>
            <div class="items-end flex w-auto">
                <x-button info="registrar">
                    Enviar
                </x-button>
            </div>
        </x-form>

        <x-list-task>
            @if (isset($tasks))
                @foreach ($tasks as $task)
                    <div
                        class="items-center flex flex-wrap w-full relative border-gray-600 border-2 my-2 p-2 rounded bg-gray-300 text-gray-700">
                        <p class="w-auto text-left">{{ $task->titulo }}</p>

                        <div class="flex gap-2 w-auto absolute right-0 mr-2">
                            <a href="{{ route('editar.task', $task) }}"
                                class="p-1 rounded border-2 text-center bg-green-100 border-green-500 text-green-700">
                                Editar
                                <a>
                                    <form action="{{ route('delete.task', ['task' => $task->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <x-button info="eliminar"
                                            class="p-1 rounded border-2 text-center bg-red-100 border-red-500 text-red-700">
                                            Eliminar
                                        </x-button>
                                    </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </x-list-task>

    </div>
@endsection()
