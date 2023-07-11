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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
              <div class="py-12 w-full">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" bg-neutral-300 overflow-hidden shadow-sm sm:rounded-lg p-2">
                        <div class="flex p-2">
                            <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Ir a Menú Principal</a>
                        </div>
                        <div class="flex flex-col">
                            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 flex flex-col justify-center">
                                <div class="p-3 m-2 bg-slate-600 rounded-md text-center text-cyan-100 hover:bg-amber-300 hover:text-slate-600">Ir a Kardex</div>
                                <div class="p-3 m-2 bg-slate-600 rounded-md text-center text-cyan-100 hover:bg-amber-300 hover:text-slate-600">Ir a Lista de alumnos</div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </main>
        </div>
    </body>
</html>