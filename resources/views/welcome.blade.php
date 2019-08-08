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
        <div class="flex flex-col h-screen bg-gray-200">
            {{-- Start Top Navbar --}}
            <div class="top-navbar">
                <a href="" class="logo">The Essential Studio Manager</a>
                <div class="flex justify-between p-3 text-sm">
                    <div class="px-4">
                        <a href="" class="gray-pill">Administrator</a>
                    </div>
                    <div class="px-4 mt-1">
                        <i class="fa fa-bell text-xl"></i>
                        <span class="absolute pr-1 pl-1 -mt-8 ml-2 bg-gray-600 rounded-full text-xs text-white">0</span>
                    </div>
                    <div class="-mt-1 px-4">
                        <img class="w-8 rounded-full" src="{{ asset('images/jon.png') }}">
                    </div>
                    <div>
                        <a href="">Jonathon Ringeisen <i class="fas fa-caret-down"></i></a>
                    </div>
                </div>
            </div>
            {{-- End Top Navbar --}}

            <div class="flex h-full">
                {{-- Start Left Side Nav --}}
                <div class="left-side-nav">
                    <div class="p-5">
                        <ul class="text-white text-xs font-light">
                            <li class="p-2"><i class="fa fa-user float-left mr-3 w-3 pt-1 leading-loose"></i> Dashboard</li>
                            <li class="p-2"><i class="fa fa-unlock-alt float-left mr-3 w-3 pt-1 leading-loose"></i> Admin</li>
                            <li class="p-2"><i class="fa fa-briefcase float-left mr-3 w-3 pt-1 leading-loose"></i> Business <i class="fas fa-caret-right float-right pt-1"></i></li>
                            <li class="p-2"><i class="fa fa-money-bill-alt float-left mr-3 w-3 pt-1 leading-loose"></i> Finances <i class="fas fa-caret-right float-right pt-1"></i></li>
                            <li class="p-2"><i class="fa fa-users float-left mr-3 w-3 pt-1 leading-loose"></i> Clients <i class="fas fa-caret-right float-right pt-1"></i></li>
                            <li class="p-2"><i class="fa fa-list float-left mr-3 w-3 pt-1 leading-loose"></i> Sessions <i class="fas fa-caret-right float-right pt-1"></i></li>
                            <li class="p-2"><i class="fa fa-wrench float-left mr-3 w-3 pt-1 leading-loose"></i> Customize <i class="fas fa-caret-right float-right pt-1"></i></li>
                            <li class="p-2"><i class="fa fa-cog float-left mr-3 w-3 pt-1 leading-loose"></i> Account <i class="fas fa-caret-right float-right pt-1"></i></li>
                            <li class="p-2"><i class="fa fa-archive float-left mr-3 w-3 pt-1 leading-loose"></i> Archived Data <i class="fas fa-caret-right float-right pt-1"></i></li>
                            <li class="p-2"><i class="fa fa-chart-bar float-left mr-3 w-3 pt-1 leading-loose"></i> Reports <i class="fas fa-caret-right float-right pt-1"></i></li>
                            <li class="p-2"><i class="fa fa-download float-left mr-3 w-3 pt-1 leading-loose"></i> Freebies <i class="fas fa-caret-right float-right pt-1"></i></li>
                        </ul>
                    </div>
                </div>
                {{-- End Right Side Nav --}}

                {{-- Start Main Content --}}
                <div class="w-full bg-gray-200 mt-12 pt-10 pb-10 overflow-auto" id="app">
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
