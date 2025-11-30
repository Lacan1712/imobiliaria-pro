@props(['label', 'href', 'active'])

@php
$isActive = request()->is($active);
@endphp

<a href="{{ $href }}"
   class="{{ $isActive 
        ? 'flex items-center gap-3 px-3 py-2 rounded-lg bg-purple-600 text-white shadow-sm hover:bg-purple-700'
        : 'flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 hover:bg-gray-100'
    }}"
>
    <span>{{ $label }}</span>
</a>
