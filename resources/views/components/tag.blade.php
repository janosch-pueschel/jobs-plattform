@props(['size' => 'base'])

@php
    $defaultStyle = 'rounded-xl bg-white/10 font-bold transition-colors duration-300 hover:bg-white/25';

    if ($size === 'base') {
        $defaultStyle .= ' px-5 py-1 text-sm';
    } elseif ($size === 'small') {
        $defaultStyle .= ' px-3 py-1 text-2xs';
    }
@endphp

<a class="{{ $defaultStyle }}" href="#">{{ $slot }}</a>
