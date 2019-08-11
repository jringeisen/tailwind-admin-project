<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://kit.fontawesome.com/6229d48325.js"></script>
    </head>
    <body>
        <div class="flex flex-col h-screen bg-gray-200" id="app">
            <div class="top-navbar">
                <topbar-nav />
            </div>

            <div class="flex h-full">
                <sidebar-nav></sidebar-nav>

                {{-- Start Main Content --}}
                <div class="w-full bg-gray-200 mt-12 pt-10 pb-10 overflow-auto">
                    <router-view></router-view>
                </div>
                {{-- End Main Content --}}
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
