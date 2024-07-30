@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex flex-1 flex-col">
        <a class="self-start text-sm text-gray-400" href="#">Laracasts</a>
        <h3 class="duration-400 mt-3 text-xl font-bold transition-colors group-hover:text-blue-600">Video Producer</h3>
        <p class="mt-auto text-sm text-gray-400">Full Time - From $60,000</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :tag={{ $tag }} size="small" />
        @endforeach
    </div>
</x-panel>
