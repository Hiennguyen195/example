@props(['active' => false, 'type' => 'a'])
<!-- Dùng class binding của Blade (Laravel 9+) -->
<!--@php
$classes = \Illuminate\Support\Arr::toCssClasses([
    'rounded-md px-3 py-2 text-sm font-medium',
    'bg-gray-900 text-white' => $active,
    'text-gray-300 hover:bg-white/5 hover:text-white' => ! $active,
]);
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> -->

<!--- Cách khác --->
<!-- @props(['active' => false]) -->

<a {{ $attributes->merge(['class' => $active ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium']) }}>
    {{ $slot }}
</a>

<!-- @if ($type === 'a')
    <a {{ $attributes->merge(['class' => $active ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium']) }}>
    {{ $slot }}
    </a>
@elseif ($type === 'button')
    <btn {{ $attributes->merge(['class' => $active ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium' : 'text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium']) }}>
    {{ $slot }}
    </btn>
@endif -->