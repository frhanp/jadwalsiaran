@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-2 px-3 py-2 rounded-lg font-medium 
               bg-blue-100 text-blue-700 shadow-sm'
            : 'flex items-center gap-2 px-3 py-2 rounded-lg font-medium text-gray-600 
               hover:bg-blue-50 hover:text-blue-600 
               transition-colors duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
