<!DOCTYPE html>
<html lang="en" x-data>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- htmx might require the selfRequestsOnly set to false in templates -->
        <meta name="htmx-config" content='{"selfRequestsOnly":false}' />

        <title>@yield('title')</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/src/main.ts'])
        @else
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <script defer src="{{ asset('js/app.js') }}"></script>
        @endif
    </head>

    <body class="flex justify-center">
        <div id="container" class="w-[1440px]">

            @yield('modals')

            @include('components.navbar.navbar')
            {{-- <x-navbar.navbar /> --}}

            @yield('content')

        </div>

    </body>

</html>
