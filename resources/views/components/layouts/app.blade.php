<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'The Tomato Game' }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="max-w-full max-h-screen h-screen w-full  min-w-[320px]  font-landrina-solid">
    <img class="fixed top-0 bottom-0 left-0 right-0 w-full h-full" src={{ asset('assets/images/background.png') }} />
    <img src={{ asset('assets/images/grass.png') }} class="fixed bottom-0 left-0 object-cover w-full max-h-96" />
    <img src={{ asset('assets/images/branch.png') }} class="fixed top-0 left-0 w-96" />
    <img src={{ asset('assets/images/star.png') }} class="fixed top-0 right-0 hidden md:block w-72" />

    <main class="relative z-50 h-full min-h-screen overflow-y-auto">
        @yield('slot')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('scripts')
    @livewireScripts
</body>

</html>
