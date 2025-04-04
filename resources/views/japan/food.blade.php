<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">
                {{ __('food.what_eat') }}</h1>
        </div>
    </header>

    <div class="relative h-56 overflow-hidden rounded-lg">
        <img class="block h-full w-full object-cover" src="/img/street-food.png" alt="Street Food">
    </div>

    <main>
        <div class="mx-auto max-w-7xl px-4 pt-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                {{ __('food.opening') }}
            </p>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-6">

            {{-- sushi section --}}
            <x-food-info name="{{ __('food.sushi') }}" image="../img/sushi.png"
                commonIngredients="{{ __('food.sushi_common') }}" famousPlaces="{{ __('food.sushi_famous') }}"
                averagePrice="{{ __('food.sushi_price') }}">
                <p>
                    {{ __('food.sushi_description') }}
                </p>
            </x-food-info>

            {{-- udon section --}}
            <x-food-info name="{{ __('food.udon') }}" image="../img/udon.png"
                commonIngredients="{{ __('food.udon_common') }}" famousPlaces="{{ __('food.udon_famous') }}"
                averagePrice="{{ __('food.udon_price') }}">
                <p>
                    {{ __('food.udon_description') }}
                </p>
            </x-food-info>

            {{-- tempura section --}}
            <x-food-info name="{{ __('food.tempura') }}" image="../img/tempura.png"
                commonIngredients="{{ __('food.tempura_common') }}" famousPlaces="{{ __('food.tempura_famous') }}"
                averagePrice="{{ __('food.tempura_price') }}">
                <p>
                    {{ __('food.tempura_description') }}
                </p>
            </x-food-info>

            {{-- yakitori section --}}
            <x-food-info name="{{ __('food.yakitori') }}" image="../img/yakitori.png"
                commonIngredients="{{ __('food.yakitori_common') }}" famousPlaces="{{ __('food.yakitori_famous') }}"
                averagePrice="{{ __('food.yakitori_price') }}">
                <p>
                    {{ __('food.yakitori_description') }}
                </p>
            </x-food-info>

            {{-- sashimi section --}}
            <x-food-info name="{{ __('food.sashimi') }}" image="../img/sashimi.png"
                commonIngredients="{{ __('food.sashimi_common') }}" famousPlaces="{{ __('food.sashimi_famous') }}"
                averagePrice="{{ __('food.sashimi_price') }}">
                <p>
                    {{ __('food.sashimi_description') }}
                </p>
            </x-food-info>

            {{-- ramen section --}}
            <x-food-info name="{{ __('food.ramen') }}" image="../img/ramen.png"
                commonIngredients="{{ __('food.ramen_common') }}" famousPlaces="{{ __('food.ramen_famous') }}"
                averagePrice="{{ __('food.ramen_price') }}">
                <p>
                    {{ __('food.ramen_description') }}
                </p>
            </x-food-info>

            {{-- takoyaki section --}}
            <x-food-info name="{{ __('food.takoyaki') }}" image="../img/takoyaki.png"
                commonIngredients="{{ __('food.takoyaki_common') }}" famousPlaces="{{ __('food.takoyaki_famous') }}"
                averagePrice="{{ __('food.takoyaki_price') }}">
                <p>
                    {{ __('food.takoyaki_description') }}
                </p>
            </x-food-info>

            {{-- kaiseki section --}}
            <x-food-info name="{{ __('food.kaiseki') }}" image="../img/kaiseki.png"
                commonIngredients="{{ __('food.kaiseki_common') }}" famousPlaces="{{ __('food.kaiseki_famous') }}"
                averagePrice="{{ __('food.kaiseki_price') }}">
                <p>
                    {{ __('food.kaiseki_description') }}
                </p>
            </x-food-info>

        </div>
    </main>
    <div class="mx-auto mb-4 max-w-7xl px-4 py-6">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            {{ __('food.closure') }}
        </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
