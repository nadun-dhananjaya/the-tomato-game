<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="max-w-full max-h-screen h-screen w-full  min-w-[320px]  font-landrina-solid">
    <img class="h-full w-full fixed  top-0 left-0 bottom-0 right-0" src={{ asset('assets/images/background.png') }} />
    <img src={{ asset('assets/images/grass.png') }} class="fixed w-full max-h-96 bottom-0 left-0 object-cover" />
    <img src={{ asset('assets/images/branch.png') }} class="fixed top-0 left-0 w-96" />
    <img src={{ asset('assets/images/star.png') }} class="fixed top-0 hidden md:block right-0 w-72" />

    <main class="z-50 relative overflow-y-auto  min-h-screen h-full">
        @yield('slot')
    </main>
    @livewireScripts
</body>

</html>
