@props(['info'])

@php
    switch ($info) {
        case 'registrar':
            $clases = 'bg-blue-100 border-blue-500 text-blue-700';
            break;

        case 'editar':
            $clases = 'bg-green-100 border-green-500 text-green-700';
            break;

        case 'eliminar':
            $clases = 'bg-red-100 border-red-500 text-red-700';
            break;

        default:
            $clases = 'bg-yellow-100 border-yellow-500 text-yellow-700';
            break;
    }
@endphp


<button class="text-2xl {{ $clases }} p-1 rounded border-2 text-center">
    {{ $slot }}
</button>
