@props(['employer', 'width' => 90])

<img class="rounded" src="{{ asset($employer->logo) }}" alt="job-logo" width="{{ $width }}">
