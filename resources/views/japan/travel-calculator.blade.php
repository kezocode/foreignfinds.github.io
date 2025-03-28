<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">
                {{ __('travel.how_cost') }}
            </h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                {{ __('travel.opening') }}
            </p>
        </div>

        <div class="mx-auto mb-8 max-w-2xl rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-center font-[Montserrat] text-2xl font-semibold">{{ __('travel.budget_calculator') }}
            </h2>

            <form class="space-y-4" id="budgetForm">
                @csrf

                <input id="calculateRoute" type="hidden" value="{{ url('/travel-calculator/calculate') }}">

                <div>
                    <label class="block font-[Montserrat] font-medium">{{ __('travel.people') }}</label>
                    <input class="w-full rounded border p-2 font-[playfair-display]" id="people" name="people_count"
                        type="number" value="1" min="1">
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">{{ __('travel.duration') }}</label>
                    <input class="w-full rounded border p-2 font-[playfair-display]" id="tripDays" name="trip_days"
                        type="number" value="7" min="1">
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">{{ __('travel.accommodation') }}</label>
                    <select class="w-full rounded border p-2 font-[playfair-display]" id="accommodation"
                        name="accommodation">
                        <option value="50">{{ __('travel.hostel') }}</option>
                        <option value="100">{{ __('travel.business') }}</option>
                        <option value="200">{{ __('travel.luxury_hotel') }}</option>
                    </select>
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">{{ __('travel.food_budget') }}</label>
                    <select class="w-full rounded border p-2 font-[playfair-display]" id="food" name="food">
                        <option value="20">{{ __('travel.budget') }}</option>
                        <option value="50">{{ __('travel.average') }}</option>
                        <option value="100">{{ __('travel.luxury_food') }}</option>
                    </select>
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">{{ __('travel.transport_budget') }}</label>
                    <select class="w-full rounded border p-2 font-[playfair-display]" id="transport" name="transport">
                        <option value="10">{{ __('travel.walking') }}</option>
                        <option value="30">{{ __('travel.city') }}</option>
                        <option value="50">{{ __('travel.jr') }}</option>
                    </select>
                </div>

                <div>
                    <label class="block font-[Montserrat] font-medium">{{ __('travel.other_expenses') }}</label>
                    <p class="mb-1 font-[playfair-display] text-sm text-gray-700">
                        {{ __('travel.on_average') }}
                    </p>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                        <input class="w-full rounded border p-2 pl-7 font-[playfair-display]" id="otherExpenses"
                            name="other_expenses" type="number" value="100" min="0">
                    </div>
                </div>

                <button class="w-full rounded-lg bg-red-600 p-3 font-[Montserrat] font-semibold text-white"
                    id="calculateBtn" type="button">
                    {{ __('travel.calculate_budget') }}
                </button>
            </form>

            <div class="mt-6 text-center text-lg font-semibold" id="result"></div>
        </div>
        <script>
            const totalBudgetText = @json(__('travel.total_budget'));
        </script>
        <x-contact-footer>
        </x-contact-footer>

</x-layout>
