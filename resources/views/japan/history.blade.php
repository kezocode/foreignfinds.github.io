<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">
                {{ __('history.history') }}
            </h1>
        </div>
    </header>

    <main class="mx-auto max-w-xl">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                {{ __('history.opening') }}
            </p>
        </div>
        {{-- jomon --}}
        <x-period title="{{ __('history.jomon') }}" :events="[__('history.jomon_event1')]" />

        {{-- yayoi --}}
        <x-period title="{{ __('history.yayoi') }}" :events="[__('history.yayoi_event1')]" />

        {{-- kofun --}}
        <x-period title="{{ __('history.kofun') }}" :events="[__('history.kofun_event1')]" />

        {{-- asuka --}}
        <x-period title="{{ __('history.asuka') }}" :events="[__('history.asuka_event1'), __('history.asuka_event2'), __('history.asuka_event3')]" />

        {{-- nara --}}
        <x-period title="{{ __('history.nara') }}" :events="[__('history.nara_event1'), __('history.nara_event2')]" />

        {{-- heian --}}
        <x-period title="{{ __('history.heian') }}" :events="[
            __('history.heian_event1'),
            __('history.heian_event2'),
            __('history.heian_event3'),
            __('history.heian_event4'),
            __('history.heian_event5'),
        ]" />

        {{-- kamakura --}}
        <x-period title="{{ __('history.kamakura') }}" :events="[
            __('history.kamakura_event1'),
            __('history.kamakura_event2'),
            __('history.kamakura_event3'),
            __('history.kamakura_event4'),
            __('history.kamakura_event5'),
            __('history.kamakura_event6'),
        ]" />

        {{-- muromachi --}}
        <x-period title="{{ __('history.muromachi') }}" :events="[
            __('history.muromachi_event1'),
            __('history.muromachi_event2'),
            __('history.muromachi_event3'),
            __('history.muromachi_event4'),
            __('history.muromachi_event5'),
            __('history.muromachi_event6'),
            __('history.muromachi_event7'),
            __('history.muromachi_event8'),
            __('history.muromachi_event9'),
        ]" />

        {{-- azuchi --}}
        <x-period title="{{ __('history.azuchi') }}" :events="[
            __('history.azuchi_event1'),
            __('history.azuchi_event2'),
            __('history.azuchi_event3'),
            __('history.azuchi_event4'),
            __('history.azuchi_event5'),
            __('history.azuchi_event6'),
            __('history.azuchi_event7'),
        ]" />

        {{-- edo --}}
        <x-period title="{{ __('history.edo') }}" :events="[
            __('history.edo_event1'),
            __('history.edo_event2'),
            __('history.edo_event3'),
            __('history.edo_event4'),
            __('history.edo_event5'),
        ]" />

        {{-- meiji --}}
        <x-period title="{{ __('history.meiji') }}" :events="[
            __('history.meiji_event1'),
            __('history.meiji_event2'),
            __('history.meiji_event3'),
            __('history.meiji_event4'),
            __('history.meiji_event5'),
            __('history.meiji_event6'),
            __('history.meiji_event7'),
            __('history.meiji_event8'),
        ]" />

        {{-- taisho --}}
        <x-period title="{{ __('history.taisho') }}" :events="[__('history.taisho_event1'), __('history.taisho_event2')]" />

        {{-- showa --}}
        <x-period title="{{ __('history.showa') }}" :events="[
            __('history.showa_event1'),
            __('history.showa_event2'),
            __('history.showa_event3'),
            __('history.showa_event4'),
            __('history.showa_event5'),
            __('history.showa_event6'),
            __('history.showa_event7'),
            __('history.showa_event8'),
            __('history.showa_event9'),
        ]" />

        {{-- heisei --}}
        <x-period title="{{ __('history.heisei') }}" :events="[
            __('history.heisei_event1'),
            __('history.heisei_event2'),
            __('history.heisei_event3'),
            __('history.heisei_event4'),
        ]" />

        </div>
    </main>
    <div class="mx-auto mb-6 max-w-7xl px-4 py-6">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            {{ __('history.closure') }} </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
