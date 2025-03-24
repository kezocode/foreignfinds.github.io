<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreign Finds</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
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

                <div class="flex w-1/3 justify-center space-x-6">
                    <a class="font-[Montserrat] text-lg text-white hover:text-black"
                        href="{{ route('places') }}">Places</a>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black" href="{{ route('food') }}">Food</a>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black" href="{{ route('fun') }}">Fun</a>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black"
                        href="{{ route('history') }}">History</a>
                    <a class="font-[Montserrat] text-lg text-white hover:text-black"
                        href="{{ route('travel-calculator') }}">Travel Calculator</a>

                </div>

                <div class="flex w-1/3 justify-end">
                    <a class="font-[Montserrat] text-lg text-white hover:text-black"
                        href="{{ route('contact') }}">Contact</a>
                </div>

            </div>
        </div>
    </nav>

    {{ $slot }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.0/flowbite.min.js"></script>
    @vite('resources/js/script.js')
    @vite('resources/js/travel-calculator.js')
    <x-footer>

    </x-footer>
</body>

</html>
