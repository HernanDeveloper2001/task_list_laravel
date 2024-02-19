@props(['placeholder', 'titulo', 'value'])

<input 
    type="text" 
    name="{{$titulo}}"
    class="text-gray-600 outline-none rounded w-full border-2 p-2 focus:border-blue-500 text-2xl"
    placeholder="{{$placeholder}}"
    value="{{$value ?? null}}" />
