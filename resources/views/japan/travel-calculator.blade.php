<x-layout>
    <header class="bg-gradient-to-r from-blue-500 to-purple-500 shadow-md">
        <div class="mx-auto max-w-7xl px-6 py-8 text-center text-white">
            <h1 class="font-[Montserrat] text-4xl font-bold tracking-wide">
                Japan Travel Budget Calculator
            </h1>
        </div>
    </header>

    <main class="mx-auto max-w-4xl p-8 bg-white shadow-lg rounded-lg mt-8 mb-8">
        <!-- Number of People & Trip Duration -->
        <div class="mb-6 grid grid-cols-2 gap-4">
            <!-- Number of People -->
            <div>
                <label class="block font-semibold mb-2 font-[Montserrat]">Number of People</label>
                <div class="flex items-center border rounded-lg overflow-hidden">
                    <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300" onclick="adjustValue('peopleCount', -1)">-</button>
                    <input type="number" id="peopleCount" value="1" min="1" class="w-full text-center border-none focus:ring-0 font-[Montserrat]">
                    <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300" onclick="adjustValue('peopleCount', 1)">+</button>
                </div>
            </div>
            <!-- Trip Duration -->
            <div>
                <label class="block font-semibold mb-2 font-[Montserrat]">Trip Duration (days)</label>
                <div class="flex items-center border rounded-lg overflow-hidden">
                    <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300" onclick="adjustValue('tripDuration', -1)">-</button>
                    <input type="number" id="tripDuration" value="7" min="1" class="font-[Montserrat] w-full text-center border-none focus:ring-0">
                    <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300" onclick="adjustValue('tripDuration', 1)">+</button>
                </div>
            </div>
        </div>

        <!-- Select Destinations -->
        <div class="mb-6 p-4 border rounded-lg bg-gray-50">
            <h2 class="text-xl font-semibold text-gray-800 font-[Montserrat]">Select Destinations</h2>
            <div id="destinationOptions" class="grid grid-cols-3 gap-4 mt-3 font-[Montserrat]">
                @foreach(['Tokyo', 'Osaka', 'Kyoto', 'Hokkaido', 'Okinawa', 'Ishikawa'] as $destination)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" value="{{ $destination }}" class="accent-blue-600">
                        <span class="text-gray-700">{{ $destination }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Transportation Costs -->
        <div class="mb-6 p-4 border rounded-lg bg-gray-50 font-[Montserrat]">
            <h2 class="text-xl font-semibold text-gray-700">Select Transportation Options</h2>
            <div id="transportOptions" class="grid grid-cols-1 gap-4 mt-3 text-gray-700">
                <!-- Placeholder for dynamically added transportation sections -->
            </div>
        </div>


        <!-- Average Hotel Cost -->
        <div class="mb-6 p-4 border rounded-lg bg-gray-50 font-[Montserrat]">
            <h2 class="text-xl font-semibold text-gray-800">Average Hotel Cost</h2>
            <div id="hotelOptions" class="grid grid-cols-2 gap-4 mt-3">
                @foreach([
                    '5000' => 'Capsule Hotel (¥5,000 Per Day)',
                    '10000' => 'Average Hotel (¥10,000 Per Day)',
                    '20000' => 'Business Hotel (¥20,000 Per Day)',
                    '30000' => 'Luxury Hotel (¥30,000 Per Day)'
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
            <h2 class="text-xl font-semibold text-gray-800">Select Food Options</h2>
            <div id="foodOptions" class="grid grid-cols-4 gap-4 mt-3">
                @foreach([
                    '1000' => 'Ramen (¥1,000)',
                    '1500' => 'Sushi (¥1,500)',
                    '10000' => 'Kaiseki (¥10,000)',
                    '700' => 'Udon (¥700)',
                    '1200' => 'Tempura (¥1,200)',
                    '2500' => 'Yakitori (¥2,500)',
                    '2000' => 'Sashimi (¥2,000)',
                    '300' => 'Takoyaki (¥300)',
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
            <h2 class="text-xl font-semibold text-gray-800">Select Shopping Options</h2>
            <div id="shoppingOptions" class="grid grid-cols-2 gap-4 mt-3">
                @foreach([
                    '5000' => 'Light Shopper (¥5,000 Per Day)',
                    '10000' => 'Average Shopper (¥10,000 Per Day)',
                    '20000' => 'Heavy Shopper (¥20,000 Per Day)',
                    '30000' => 'Unstoppable Shopper (¥30,000 Per Day)'
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
            <span id="totalCost">Total Estimated Cost: ¥0</span>
        </div>

        <!-- Per Person Cost -->
        <div class="mt-4 p-6 bg-green-100 text-green-800 font-bold text-center text-2xl rounded-lg shadow-md font-[Montserrat]">
            <span id="perPersonCost">Per Person Cost: ¥0</span>
        </div>
    </main>

    <x-contact-footer></x-contact-footer>
</x-layout>
