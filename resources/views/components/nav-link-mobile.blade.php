@props(['active' => false, 'type' => 'a'])
<a {{ $attributes->merge(['class' => $active ? 'block bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium' : 'block text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium']) }}>
    {{ $slot }}
</a>

<!-- có thêm attribute 'block' sẽ khiến tab xếp thành cột với nhau trong một div -->