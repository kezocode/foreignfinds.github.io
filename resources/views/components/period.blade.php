@props(['title', 'events'])

<div class="mb-8 flex flex-col items-start rounded-lg bg-gray-100 p-6 shadow-md">
    {{-- Title Section --}}
    <h1 class="mb-4 border-l-4 border-blue-500 pl-4 font-[Montserrat] text-3xl font-bold text-gray-900">
        {{ $title }}
    </h1>

    {{-- Events Section --}}
    <div class="w-full rounded-lg bg-white p-4 shadow-sm">
        <ul class="list-inside list-disc space-y-2 text-lg text-gray-700">
            @foreach ($events as $event)
                <li class="font-[Playfair Display]">{{ $event }}</li>
            @endforeach
        </ul>
    </div>
</div>
