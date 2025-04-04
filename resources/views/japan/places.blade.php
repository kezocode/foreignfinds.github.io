<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">
                {{ __('places.where_visit') }}
            </h1>
        </div>
    </header>

    <div class="relative h-56 overflow-hidden rounded-lg">
        <img class="block h-full w-full object-cover" src="/img/osaka-scenery.png" alt="Osaka Japan Scenery">
    </div>

    <main>
        <div class="mx-auto max-w-7xl px-4 pt-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                {{ __('places.opening') }}

            </p>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-6">
        {{-- kyoto section --}}
        <x-city-info name="{{ __('places.kyoto') }}" image="../img/kyoto-scenery-c.png"
            famousFor="{{ __('places.kyoto_famous') }}" cuisine="{{ __('places.kyoto_cuisine') }}"
            population="{{ __('places.kyoto_population') }}">
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://nijo-jocastle.city.kyoto.lg.jp/?lang=en">{{ __('places.nijo') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.kyotorailwaymuseum.jp/en/">{{ __('places.railway') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://sankan.kunaicho.go.jp/english/guide/sento.html">{{ __('places.sento') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.japan.travel/en/spot/1174/">{{ __('places.nishiki') }}</a></li>
        </x-city-info>

        {{-- tokyo section --}}
        <x-city-info name="{{ __('places.tokyo') }}" image="../img/tokyo-c.png"
            famousFor="{{ __('places.tokyo_famous') }}" cuisine="{{ __('places.tokyo_cuisine') }}"
            population="{{ __('places.tokyo_population') }}">
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.gotokyo.org/en/destinations/central-tokyo/akihabara/index.html">{{ __('places.akihabara') }}</a>
            </li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.tsukiji.or.jp/english/">{{ __('places.tsukiji') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.gotokyo.org/en/spot/24/index.html">{{ __('places.korakuen') }}</a>
            </li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://sankan.kunaicho.go.jp/english/guide/koukyo.html">{{ __('places.imperial') }}</a>
            </li>
        </x-city-info>

        {{-- osaka section --}}
        <x-city-info name="{{ __('places.osaka') }}" image="../img/osaka-c.png"
            famousFor="{{ __('places.osaka_famous') }}" cuisine="{{ __('places.osaka_cuisine') }}"
            population="{{ __('places.osaka_population') }}">
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.usj.co.jp/web/en/us">{{ __('places.universal') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.japan-guide.com/e/e4001.html">{{ __('places.minami') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.japan-guide.com/e/e4004.html">{{ __('places.aquarium') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://osaka-info.jp/en/discover-kansai/osaka-castle/">{{ __('places.osaka_castle') }}</a>
            </li>
        </x-city-info>

        {{-- kanazawa section --}}
        <x-city-info name="{{ __('places.kanazawa') }}" image="../img/station.png"
            famousFor="{{ __('places.kanazawa_famous') }}" cuisine="{{ __('places.kanazawa_cuisine') }}"
            population="{{ __('places.kanazawa_population') }}">
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://visitkanazawa.jp/en/spot/detail_10106.html">{{ __('places.kenrokuen') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://visitkanazawa.jp/en/spot/detail_50022.html">{{ __('places.ninjadera') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://visitkanazawa.jp/en/spot/detail_10212.html">{{ __('places.higashi') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://visitkanazawa.jp/en/spot/detail_10030.html">{{ __('places.omicho') }}</a></li>
        </x-city-info>

        {{-- hokkaido section --}}
        <x-city-info name="{{ __('places.hokkaido') }}" image="../img/hokkaido.png"
            famousFor="{{ __('places.hokkaido_famous') }}" cuisine="{{ __('places.hokkaido_cuisine') }}"
            population="{{ __('places.hokkaido_population') }}">
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.sapporobeer.jp/english/brewery/s_museum/">{{ __('places.sapporo_beer') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.japan-guide.com/e/e6826.html">{{ __('places.furano') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.visit-hokkaido.jp/en/spot/detail_10040.html">{{ __('places.otaru') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.tripadvisor.com/Attraction_Review-g319103-d780529-Reviews-Asahiyama_Zoo-Asahikawa_Hokkaido.html">{{ __('places.ashiyama') }}</a></li>
        </x-city-info>

        {{-- okinawa section --}}
        <x-city-info name="{{ __('places.okinawa') }}" image="../img/okinawa.png"
            famousFor="{{ __('places.okinawa_famous') }}" cuisine="{{ __('places.okinawa_cuisine') }}"
            population="{{ __('places.okinawa_population') }}">
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.japan.travel/en/spot/581/">{{ __('places.churaumi') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.tripadvisor.com/Attraction_Review-g298224-d1373593-Reviews-Shurijo_Castle-Naha_Okinawa_Prefecture_Kyushu.html">{{ __('places.shurijo') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://www.japan-guide.com/e/e7114.html">{{ __('places.kokusai') }}</a></li>
            <li><a class="font-[Montserrat] text-lg text-red-600 hover:text-red-800"
                    href="https://blue-cave.okinawa/">{{ __('places.blue_cave') }}</a></li>
        </x-city-info>

        </div>
    </div>
    </main>
    <div class="mx-auto mb-6 max-w-7xl px-4 py-4">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            {{ __('places.closing') }}
        </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
