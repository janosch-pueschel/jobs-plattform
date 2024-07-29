@php
    $defaultStyle =
        'group rounded-xl border border-transparent bg-white/5 p-4 transition-colors duration-300 hover:border-blue-400';
@endphp

<div {{ $attributes(['class' => $defaultStyle]) }}>
    {{ $slot }}
</div>
