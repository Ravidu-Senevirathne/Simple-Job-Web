@php
    $classes =
        'p-4 bg-white/5 rounded-xl flex border border-transparent hover:border-blue-800 group transition-colors duration-600';
@endphp


<div {{ $attributes(['class' => $classes]) }}>

    {{ $slot }}
</div>
