<x-layout>
    <header class="shadow-md">
        <div class="mx-auto max-w-7xl px-6 py-8 text-center">
            <h1 class="font-[Montserrat] text-4xl font-semibold tracking-wide">
                {{ __('travel.japan_travel') }}
            </h1>
        </div>
    </header>

    <main class="mx-auto max-w-4xl p-8 bg-white shadow-lg rounded-lg mt-8 mb-8">
        <!-- Number of People & Trip Duration -->
        <div class="mb-6 grid grid-cols-2 gap-4">
            <!-- Number of People -->
            <div>
                <label class="block font-semibold mb-2 font-[Montserrat]">{{ __('travel.people') }}</label>
                <div class="flex items-center border rounded-lg overflow-hidden">
                    <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300" onclick="adjustValue('peopleCount', -1)">-</button>
                    <input type="number" id="peopleCount" value="1" min="1" class="w-full text-center border-none focus:ring-0 font-[Montserrat]">
                    <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300" onclick="adjustValue('peopleCount', 1)">+</button>
                </div>
            </div>
            <!-- Trip Duration -->
            <div>
                <label class="block font-semibold mb-2 font-[Montserrat]">{{ __('travel.duration') }}</label>
                <div class="flex items-center border rounded-lg overflow-hidden">
                    <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300" onclick="adjustValue('tripDuration', -1)">-</button>
                    <input type="number" id="tripDuration" value="7" min="1" class="font-[Montserrat] w-full text-center border-none focus:ring-0">
                    <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300" onclick="adjustValue('tripDuration', 1)">+</button>
                </div>
            </div>
        </div>

        <!-- Select Destinations -->
    <div class="mb-6 p-4 border rounded-lg bg-gray-50">
        <h2 class="text-xl font-semibold text-gray-800">{{ __('travel.destinations') }}</h2>
        <div id="destinationOptions" class="grid grid-cols-3 gap-4 mt-3">
            @foreach([
                'tokyo', 'osaka', 'kyoto', 'hokkaido', 'okinawa', 'ishikawa'
            ] as $destination)
                <label class="flex items-center space-x-2">
                    <input type="checkbox" value="{{ $destination }}"
                        data-en="{{ __('travel.'.$destination) }}"
                        data-ja="{{ __('travel.'.$destination) }}"
                        class="destination-checkbox accent-blue-600">
                    <span class="text-gray-700">{{ __('travel.'.$destination) }}</span>
                </label>
            @endforeach
        </div>
    </div>

        <!-- Transportation Costs -->
        <div class="mb-6 p-4 border rounded-lg bg-gray-50 font-[Montserrat]">
            <h2 class="text-xl font-semibold text-gray-700">{{ __('travel.transport') }}</h2>
            <div id="transportOptions" class="grid grid-cols-1 gap-4 mt-3 text-gray-700">
                <!-- Placeholder for dynamically added transportation sections -->
            </div>
        </div>


        <!-- Average Hotel Cost -->
        <div class="mb-6 p-4 border rounded-lg bg-gray-50 font-[Montserrat]">
            <h2 class="text-xl font-semibold text-gray-800">{{ __('travel.average_hotel') }}</h2>
            <div id="hotelOptions" class="grid grid-cols-2 gap-4 mt-3">
                @foreach([
                    '5000' => __('travel.capsule'),
                '10000' => __('travel.average'),
                '20000' => __('travel.business'),
                '30000' => __('travel.luxury')
                ] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="hotel-checkbox accent-blue-600" value="{{ $value }}">
                        <span class="text-gray-700">{{ $label }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Food Selection -->
        <div class="mb-6 p-4 border rounded-lg bg-gray-50 font-[Montserrat]">
            <h2 class="text-xl font-semibold text-gray-800">{{ __('travel.food_options') }}</h2>
            <div id="foodOptions" class="grid grid-cols-4 gap-4 mt-3">
                @foreach([
                    '1000' => __('travel.ramen'),
                    '1500' => __('travel.sushi'),
                    '10000' => __('travel.kaiseki'),
                    '700' => __('travel.udon'),
                    '1200' => __('travel.tempura'),
                    '2500' => __('travel.yakitori'),
                    '2000' => __('travel.sashimi'),
                    '300' => __('travel.takoyaki'),
                ] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" value="{{ $value }}" class="accent-blue-600">
                        <span class="text-gray-700">{{ $label }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Shopping Selection -->
        <div class="mb-6 p-4 border rounded-lg bg-gray-50 font-[Montserrat]">
            <h2 class="text-xl font-semibold text-gray-800">{{ __('travel.shopping_options') }}</h2>
            <div id="shoppingOptions" class="grid grid-cols-2 gap-4 mt-3">
                @foreach([
                    '5000' => __('travel.light_shopper'),
                    '10000' => __('travel.average_shopper'),
                    '20000' => __('travel.heavy_shopper'),
                    '30000' => __('travel.unstoppable_shopper'),
                ] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" value="{{ $value }}" class="accent-blue-600">
                        <span class="text-gray-700">{{ $label }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Total Cost -->
        <div class="mt-6 p-6 bg-blue-100 text-blue-800 font-bold text-center text-2xl rounded-lg shadow-md font-[Montserrat]">
            <span id="totalCost">{{ __('travel.js_total_cost') }}</span>
        </div>

        <!-- Per Person Cost -->
        <div class="mt-4 p-6 bg-green-100 text-green-800 font-bold text-center text-2xl rounded-lg shadow-md font-[Montserrat]">
            <span id="perPersonCost">{{ __('travel.js_per_person') }}</span>
        </div>
    </main>

    <x-contact-footer></x-contact-footer>
</x-layout>
