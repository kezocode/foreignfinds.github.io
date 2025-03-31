<div class="mx-auto my-8 max-w-7xl pl-24">
    <div class="mb-6 flex flex-row items-start">
        <!-- Image Section -->
        <div class="relative h-72 w-72">
            <img class="h-full w-full rounded-lg object-cover shadow-lg" src="{{ $image }}"
                alt="{{ $name }}">
            <span
                class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                {{ $name }}
            </span>
        </div>

        <!-- Table Section -->
        <div class="ml-8">
            <table class="h-72 border-collapse border-b border-gray-300">
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2 font-[Montserrat] font-semibold">{{ __('places.famous_for') }}</td>
                        <td class="px-4 py-2">{{ $famousFor }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2 font-[Montserrat] font-semibold">{{ __('places.regional_cuisine') }}</td>
                        <td class="px-4 py-2">{{ $cuisine }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2 font-[Montserrat] font-semibold">{{ __('places.population') }}</td>
                        <td class="px-4 py-2">{{ $population }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2 font-[Montserrat] font-semibold">{{ __('places.top_attractions') }}</td>
                        <td class="px-4 py-2">
                            <ul class="list-disc space-y-1 pl-5 text-gray-700">
                                {{ $slot }}
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
