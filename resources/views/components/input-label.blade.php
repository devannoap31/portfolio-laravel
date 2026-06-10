@props(['value'])
<label {{ $attributes->merge(['class' => 'block font-["Archivo_Black"] text-black text-sm uppercase tracking-widest mb-2']) }}>
    {{ $value ?? $slot }}
</label>