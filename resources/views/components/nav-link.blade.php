@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-6 h-full border-b-[5px] border-black font-["Archivo_Black"] text-sm uppercase tracking-wider bg-black text-white transition-none'
            : 'inline-flex items-center px-6 h-full font-["Archivo_Black"] text-sm uppercase tracking-wider text-black hover:bg-black hover:text-white transition-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>