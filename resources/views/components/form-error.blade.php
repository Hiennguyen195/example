@props(['name'])

@error($name)
    <p class="mt-1 text-xs text-red-500 font-semibold italic">{{ $message }}</p>
@enderror