<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">
                {{ __('fun.what_do') }}</h1>
        </div>
    </header>

    <div class="relative h-56 overflow-hidden rounded-lg">
        <img class="block h-full w-full object-cover" src="/img/sanrio.png" alt="Sanrio Theme Park">
    </div>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                {{ __('fun.opening') }}
            </p>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-8">
            {{-- tokyo disney sea section --}}
            <x-fun-info name="{{ __('fun.disneysea') }}" image="../img/disneysea.png"
                location="{{ __('fun.disney_location') }}" description="{{ __('fun.disneysea_description') }}"
                averagePrice="{{ __('fun.disney_price') }}">
                <p>
                    {{ __('fun.disney_time') }}
                </p>
            </x-fun-info>
            <br>
            {{-- fuji-q section --}}
            <x-fun-info name="{{ __('fun.fujiq') }}" image="../img/fujiq.png" location="{{ __('fun.fujiq_location') }}"
                description="{{ __('fun.fujiq_description') }}" averagePrice="{{ __('fun.fujiq_price') }}">
                <p>
                    {{ __('fun.fujiq_time') }}
                </p>
            </x-fun-info>

            <br>
            {{-- paragliding section --}}
            <x-fun-info name="{{ __('fun.paragliding') }}" image="../img/paragliding.png"
                location="{{ __('fun.paragliding_location') }}" description="{{ __('fun.paragliding_description') }}"
                averagePrice="{{ __('fun.paragliding_price') }}">
                <p>
                    {{ __('fun.paragliding_time') }}
                </p>
            </x-fun-info>
            <br>
            {{-- maid cafe section --}}
            <x-fun-info name="{{ __('fun.maidcafe') }}" image="../img/maidcafe.png"
                location="{{ __('fun.maidcafe_location') }}" description="{{ __('fun.maidcafe_description') }}"
                averagePrice="{{ __('fun.maidcafe_price') }}">
                <p>
                    {{ __('fun.maidcafe_time') }}
                </p>
            </x-fun-info>
            <br>
            {{-- festival section --}}
            <x-fun-info name="{{ __('fun.festival') }}" image="../img/festivals.png"
                location="{{ __('fun.festival_location') }}" description="{{ __('fun.festival_description') }}"
                averagePrice="{{ __('fun.festival_price') }}">
                <p>
                    {{ __('fun.festival_time') }}
                </p>
            </x-fun-info>
            <br>
        </div>
    </main>

    <div class="mx-auto mb-6 max-w-7xl px-4 py-6">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            {{ __('fun.closure') }}
        </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
