@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-4 pe-4 py-3 border-l-8 border-black bg-black text-white font-["Archivo_Black"] text-base uppercase tracking-wider transition-none'
            : 'block w-full ps-4 pe-4 py-3 border-l-8 border-transparent text-black font-["Archivo_Black"] text-base uppercase tracking-wider hover:bg-black hover:text-white transition-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>