@props(['messages'])
@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-[#FF0000] font-["Space_Mono"] text-sm font-bold space-y-1 mt-2']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif