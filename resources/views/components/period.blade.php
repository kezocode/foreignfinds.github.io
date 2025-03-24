@props(['title', 'events'])

<div class="mb-6 flex flex-col items-center justify-center space-y-8 sm:flex-row sm:space-x-8 sm:space-y-0">
    <div class="relative mx-4 inline-block">
        <h1 class="flex items-center justify-center rounded-lg font-[Montserrat] text-3xl font-semibold text-black">
            {{ $title }} </h1>
        @foreach ($events as $event)
            <li class="font-[playfair-display] text-xl text-gray-700">{{ $event }}</li>
        @endforeach
    </div>
</div>
