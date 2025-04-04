<div class="mx-auto my-8 max-w-7xl pl-24">
    <div class="mb-6 flex flex-row items-start">
        <!-- Image Section -->
        <div class="relative h-72 w-72">
            <img class="h-full w-full rounded-lg object-cover shadow-lg" src="{{ $image }}"
                alt="{{ $name }}">
            <span
                class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-4xl font-semibold text-white">
                {{ $name }}
            </span>
        </div>

        <!-- Table Section -->
        <div class="ml-8">
            <table class="h-72 border-collapse border-b border-gray-300">
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2 font-[Montserrat] font-semibold">{{ __('food.common_ingredients') }}</td>
                        <td class="px-4 py-2 font-[Montserrat]">{{ $commonIngredients }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2 font-[Montserrat] font-semibold">{{ __('food.famous_places') }}</td>
                        <td class="px-4 py-2 font-[Montserrat]">{{ $famousPlaces }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2 font-[Montserrat] font-semibold">{{ __('food.average_price') }}</td>
                        <td class="px-4 py-2 font-[Montserrat]">{{ $averagePrice }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2 font-[Montserrat] font-semibold">{{ __('food.more') }}</td>
                        <td class="px-4 py-2 font-[Montserrat]">{{ $slot }}</td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
