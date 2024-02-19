@props(['action', 'method'])

<form class="mx-auto border-2 flex flex-wrap self-center border-gray-600 rounded w-2/4 p-6 gap-4 justify-between"
    action="{{ $action }}" method="{{ $method }}">

    {{ $slot }}

</form>
