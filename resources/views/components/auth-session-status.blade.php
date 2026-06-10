@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-["Space_Mono"] font-bold text-sm text-[#008000] border-[3px] border-[#008000] p-3 uppercase']) }}>
        > {{ $status }}
    </div>
@endif