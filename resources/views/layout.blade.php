<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--Scripts-->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <title>Laravel | @yield('title')</title>
    </head>
    <body>

        <div id="app" class="h-screen d-flex flex-column">
            <header>
                @include('partials.nav')
                @include('partials.session-status')
            </header>

            <main class="my-auto py-5">
                <div class="container">
                    @yield('content')
                </div>
            </main>

            <footer class="mx-auto text-black-50">
                <p class="">
                    {{ config('app.name') }} | Copyright {{ date('Y') }}
                </p>
            </footer>
        </div>

    </body>
</html>
