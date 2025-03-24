<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">How much does it
                cost?
            </h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                Trying to figure out how much you need to save to come to Japan can be stressful. With this calculator,
                you can feel at ease!
            </p>
        </div>

        <div class="mx-auto mb-8 max-w-2xl rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-center font-[Montserrat] text-2xl font-semibold">Japan Travel Budget Calculator</h2>

            <form class="space-y-4" id="budgetForm">
                @csrf

                <input id="calculateRoute" type="hidden" value="{{ url('/travel-calculator/calculate') }}">

                <div>
                    <label class="block font-[Montserrat] font-medium">Number of People</label>
                    <input class="w-full rounded border p-2 font-[playfair-display]" id="people" name="people_count"
                        type="number" value="1" min="1">
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">Trip Duration (days)</label>
                    <input class="w-full rounded border p-2 font-[playfair-display]" id="tripDays" name="trip_days"
                        type="number" value="7" min="1">
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">Accommodation Type</label>
                    <select class="w-full rounded border p-2 font-[playfair-display]" id="accommodation"
                        name="accommodation">
                        <option value="50">Hostel ($50/day)</option>
                        <option value="100">Business Hotel ($100/day)</option>
                        <option value="200">Luxury Hotel ($200/day)</option>
                    </select>
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">Food Budget</label>
                    <select class="w-full rounded border p-2 font-[playfair-display]" id="food" name="food">
                        <option value="20">Budget ($20/day)</option>
                        <option value="50">Average ($50/day)</option>
                        <option value="100">Luxury ($100/day)</option>
                    </select>
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">Transport Budget</label>
                    <select class="w-full rounded border p-2 font-[playfair-display]" id="transport" name="transport">
                        <option value="10">Walking/Local ($10/day)</option>
                        <option value="30">City Transport ($30/day)</option>
                        <option value="50">JR Pass ($50/day)</option>
                    </select>
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">Other Expenses (Shopping, Attractions,
                        etc.)</label>
                    <p class="mb-1 font-[playfair-display] text-sm text-gray-700">
                        Travelers on average spend $200 per day shopping.
                    </p>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                        <input class="w-full rounded border p-2 pl-7 font-[playfair-display]" id="otherExpenses"
                            name="other_expenses" type="number" value="100" min="0">
                    </div>
                </div>

                <button class="w-full rounded-lg bg-red-600 p-3 font-[Montserrat] font-semibold text-white"
                    id="calculateBtn" type="button">
                    Calculate Budget
                </button>
            </form>

            <div class="mt-6 text-center text-lg font-semibold" id="result"></div>
        </div>

        <x-contact-footer>
        </x-contact-footer>

</x-layout>
