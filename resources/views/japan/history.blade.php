<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">History of Japan
            </h1>
        </div>
    </header>

    <main class="mx-auto max-w-xl">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                Japan has an endless amount of rich history, important to understand to truly enjoy the culture.
            </p>
        </div>
        {{-- jomon --}}
        <x-period title="Jomon Period (- 300 BC)" :events="['The early Japanese were mainly gatherers, hunters and fishers.']" />

        {{-- yayoi --}}
        <x-period title="Yayoi Period (300 BC - 250 AD)" :events="[
            ' The spread of rice farming leads to the development of more complex social hierarchies and
                                                                                    larger settlements. Hundreds of small countries emerge and start to unify into larger countries.',
        ]" />

        {{-- kofun --}}
        <x-period title="Kofun Period (250 - 538)" :events="[
            'Japan is for the first time more or less united. Large tombs (kofun) were built for the deceased
                                                                            leaders.',
        ]" />

        {{-- asuka --}}
        <x-period title="Asuka Period (538 - 710)" :events="[
            '538/552 Introduction of Buddhism.',
            '604 Prince Shotokus Constitution of seventeen articles is promulgated.',
            '645 The Taika reform is introduced. The Fujiwara era starts.',
        ]" />

        {{-- nara --}}
        <x-period title="Nara Period (710 - 784)" :events="['710 Nara becomes the first permanent capital.', '784 The capital moves to Nagaoka.']" />

        {{-- heian --}}
        <x-period title="Heian Period (794 - 1185)" :events="[
            '794 The capital moves to Heian (Kyoto).',
            '1016 Fujiwara Michinaga becomes regent, marking the peak of Fujiwara power.',
            '1159 The Taira clan under Taira Kiyomori takes over the power after the Heiji war.',
            '1175 The Buddhist Jodo sect (Pure land sect) is introduced.',
            '1180-85 In the Gempei War, the Minamoto clan puts an end to Taira supremacy.',
        ]" />

        {{-- kamakura --}}
        <x-period title="Kamakura Period (1192 - 1333)" :events="[
            '1191 The Zen sect is introduced.',
            '1192 Minamoto Yoritomo is appointed shogun and establishes the Kamakura government in Kamakura.',
            '1221 The Jokyu Disturbance ends a struggle between Kamakura and Kyoto, resulting in the supremacy of
                                                                            the Hojo regents in Kamakura.',
            '1232 A legal code, the Joei Shikimoku, is promulgated.',
            '1274 and 1281 The Mongols try to invade Japan twice, but fail mainly because of bad weather
                                                                            conditions.',
            '1333 The Kamakura government falls.',
        ]" />

        {{-- muromachi --}}
        <x-period title="Muromachi Period (1338 - 1573)" :events="[
            '1334 Kemmu Restoration: the emperor restores power over Japan.',
            '1336 Ashikaga Takauji captures Kyoto.' .
            '1337 The emperor flees and establishes the Southern court in Yoshino.',
            '1338 Takauji establishes the Muromachi government and a second emperor in Kyoto (Northern court).',
            '1392 Unification of the Southern and Northern courts.',
            '1467-1477 Onin war.',
            '1542 Portuguese introduce firearms and Christianity to Japan.',
            '1568 Nobunaga enters Kyoto.',
            '1573 The Muromachi government falls.',
        ]" />

        {{-- azuchi --}}
        <x-period title="Azuchi-Momoyama Period (1573 - 1603)" :events="[
            '1575 The Takeda clan is defeated in the battle of Nagashino.',
            '1582 Nobunaga is murdered and succeeded by Toyotomi Hideyoshi.',
            '1588 Hideyoshi confiscates the weapons of farmers and religious institutions in the \'Sword Hunt\'.',
            '1590 Japan is reunited after the fall of Odawara (Hojo).',
            '1592-98 Unsuccessful invasion of Korea.',
            '1598 Death of Hideyoshi.',
            '1600 Tokugawa Ieyasu defeats his rivals in the battle of Sekigahara.',
        ]" />

        {{-- edo --}}
        <x-period title="Edo Period (1603 - 1868)" :events="[
            '1603 Ieyasu is appointed shogun and establishes the Tokugawa government in Edo (Tokyo).',
            '1639 Isolation of Japan from the rest of the world except for strictly regulated trade with China,
                                             Korea, the Netherlands, the Ryukyu Kingdom and the Ainu.',
            '1688-1703 Genroku era: popular culture flourishes.',
            '1792 The Russians unsuccessfully try to establish trade relations with Japan.',
            '1854 Commodore Matthew Perry forces the Japanese government to open a limited number of ports for
                                            trade.',
        ]" />

        {{-- meiji --}}
        <x-period title="Meiji Period (1868 - 1912)" :events="[
            '1868 Meiji Restoration.',
            '1868 The capital moves to Tokyo.',
            '1872 First railway line between Tokyo and Yokohama.',
            '1889 The Meiji Constitution is promulgated.',
            '1894-95 Sino-Japanese War.',
            '1904-05 Russo-Japanese War.',
            '1910 Annexation of Korea.',
            '1912 Death of Emperor Meiji.',
        ]" />

        {{-- taisho --}}
        <x-period title="Taisho Period (1912 - 1926)" :events="[
            '1914-18 Japan joins allied forces in WW1.',
            '1923 The Great Kanto Earthquake devastates Tokyo and Yokohama.',
        ]" />

        {{-- showa --}}
        <x-period title="Showa Period (1926 - 1989)" :events="[
            ' 1931 Manchurian Incident.',
            '1937 Second Sino-Japanese War starts.',
            '1941 Pacific War starts.',
            '1945 Japan surrenders after atomic bombs are dropped over Hiroshima and Nagasaki.',
            '1946 The new constitution is promulgated.',
            '1952 The Allied Occupation of Japan ends.',
            '1956 Japan becomes member of the UN.',
            '1972 Normalization of relations with China.',
            '1973 Oil crisis.',
        ]" />

        {{-- heisei --}}
        <x-period title="Heisei Period (1989 - 2019)" :events="[
            '1992 Burst of the Bubble Economy.',
            '1995 The Great Hanshin Earthquake hits Kobe.',
            '1995 Sarin Gas attack in the Tokyo subway by Aum sect.',
            '2011 The Great East Japan Earthquake hits the Tohoku Region.',
        ]" />

        </div>
    </main>
    <div class="mx-auto mb-6 max-w-7xl px-4 py-6">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            Now that you know the extensive history of Japan, you can appreciate Japan for all it's worth!
        </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
