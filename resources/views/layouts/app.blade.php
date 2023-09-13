<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .container {
                max-width: 600px;
            }
            a:hover {
                color: #f0cf6a;
            }
            /* Gradient Background */
            body {
            margin:0;
            }
            .wrapper {
                width: auto;
                height: auto;
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
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div style="background-image: url('appdata/background.png'); background-repeat: no-repeat; background-size: cover;">
                @include('layouts.navigation')
    
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="shadow">
                        <div class="text-center flex items-center justify-center h-screen max-w-7xl mx-auto py-4 px-3 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
            </div>
            
            <!-- Page Content -->
                <main >
                    {{ $slot }}
                </main>
        </div>
    </body>
</html>
