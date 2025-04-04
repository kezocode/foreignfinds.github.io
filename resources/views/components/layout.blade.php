<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreign Finds</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

</head>

<body class="h-full pt-16">
    <nav class="fixed left-0 right-0 top-0 z-50 w-full bg-red-600 shadow-md">
        <div class="mx-auto px-8">
            <div class="flex h-16 items-center">

                <div class="w-1/3">
                    <a class="font-[Montserrat] text-3xl text-white hover:text-black" href="/">Foreign Finds</a>
                </div>

                <div class="flex w-1/3 justify-center space-x-4">
                    <a class="font-[Montserrat] text-lg text-white hover:text-black
                        {{ request()->routeIs('places') ? 'text-black' : '' }}"
                        href="{{ route('places') }}">{{ __('layout.places') }}</a>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black
                        {{ request()->routeIs('food') ? 'text-black' : '' }}"
                        href="{{ route('food') }}">{{ __('layout.food') }}</a>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black
                        {{ request()->routeIs('fun') ? 'text-black' : '' }}"
                        href="{{ route('fun') }}">{{ __('layout.fun') }}</a>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black
                        {{ request()->routeIs('history') ? 'text-black' : '' }}"
                        href="{{ route('history') }}">{{ __('layout.history') }}</a>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black
                        {{ request()->routeIs('travel-calculator') ? 'text-black' : '' }}"
                        href="{{ route('travel-calculator') }}">{{ __('layout.travel_calculator') }}</a>
                </div>

                <div class="flex w-1/3 justify-end">
                    <div class="align-center flex">
                        <a href="{{ route('locale', 'en') }}"><x-flag-country-us class="mr-4 h-8 w-8" /></a>
                        <a href="{{ route('locale', 'ja') }}"><x-flag-country-jp class="mr-4 h-8 w-8" /></a>
                    </div>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black
                        {{ request()->routeIs('contact') ? 'text-black' : '' }}"
                        href="{{ route('contact') }}">{{ __('layout.contact') }}</a>
                </div>

            </div>
        </div>
    </nav>

    {{ $slot }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.0/flowbite.min.js"></script>
    @vite('resources/js/travel-calculator.js')
    @vite('resources/js/script.js')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        // Passing the entire translations object to JavaScript
        window.translations = @json(trans('travel'));

        // Log the translations to verify
        console.log(window.translations); // Check if translations are correctly passed

        const totalDisplay = document.getElementById("totalCost");
        const perPersonDisplay = document.getElementById("perPersonCost");

        // Initialize translation messages
        const jsSelectTwoMessage = window.translations.jsSelectTwo;
        const jsTotalCostMessage = window.translations.jsTotalCost;
        const jsPerPersonMessage = window.translations.jsPerPerson;

        // If translations are missing or undefined, provide a fallback message.
        if (!jsSelectTwoMessage) {
            console.error('Translation for jsSelectTwo is missing!');
        }
        if (!jsTotalCostMessage) {
            console.error('Translation for jsTotalCost is missing!');
        }
        if (!jsPerPersonMessage) {
            console.error('Translation for jsPerPerson is missing!');
        }
        });
    </script>

    <x-footer>

    </x-footer>
</body>

</html>
