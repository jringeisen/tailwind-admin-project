<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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

        <script src="{{ mix('/js/manifest.js') }}"></script>
        <script src="{{ mix('/js/vendor.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
