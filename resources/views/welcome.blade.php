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
                <div class="left-side-nav">
                    <div class="p-5">
                        <sidebar-nav />
                    </div>
                </div>

                {{-- Start Main Content --}}
                <div class="w-full bg-gray-200 mt-12 pt-10 pb-10 overflow-auto">
                    <div class="container mx-auto lg:flex md:flex">
                        <div class="gray-card lg:w-1/3 md:w-1/3">
                            <div class="card-header">
                                <p>MTD Income</p>
                            </div>
                            <div class="card-body">
                                <h1>$100.00</h1>
                            </div>
                        </div>
                        <div class="gray-card lg:w-1/3 md:w-1/3">
                            <div class="card-header">
                                <p>YTD Income</p>
                            </div>
                            <div class="card-body">
                                <h1>$100.00</h1>
                            </div>
                        </div>
                        <div class="gray-card lg:w-1/3 md:w-1/3">
                            <div class="card-header">
                                <p>Session Balance</p>
                            </div>
                            <div class="card-body">
                                <h1>$100.00</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container mx-auto lg:flex md:flex">
                        <div class="gray-card lg:w-full md:w-full">
                            <div class="card-header">
                                <p>Income Chart</p>
                            </div>
                            <div class="card-body">
                                <income-chart />
                            </div>
                        </div>
                    </div>
                    <div class="container mx-auto lg:flex md:flex">
                        <div class="gray-card lg:w-full md:w-full">
                            <div class="card-header">
                                <p>Calendar</p>
                            </div>
                            <div class="card-body">
                                <calendar />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Main Content --}}
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
