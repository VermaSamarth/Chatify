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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        body {
            margin:0;
            }
            .wrapper {
                width: 100%;
                height: 100%;
                position: absolute;
                background: linear-gradient(45deg,#F17C58, #E94584, #24AADB , #27DBB1,#FFDC18, #FF3706);
                background-size: 600% 100%;
                animation: gradient 16s linear infinite;
                animation-direction: alternate;
            }
            @keyframes gradient {
                0% {background-position: 0%}
                100% {background-position: 100%}
            }
    </style>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
    
            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow"  style="background-image: url('appdata/background.png'); background-repeat: no-repeat; background-size: cover;">
                    <div class="text-center flex items-center justify-center h-screen max-w-7xl mx-auto py-4 px-3 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <!-- Page Content -->
            {{-- <div class='wrapper'> --}}
                <main >
                    {{ $slot }}
                </main>
            {{-- </div> --}}
        </div>
    </body>
</html>
