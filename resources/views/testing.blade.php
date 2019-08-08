<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://kit.fontawesome.com/6229d48325.js"></script>
    </head>
    <body>
        <div class="flex">
            <div class="flex justify-between w-full h-12 bg-white absolute">
                <a href="" class="p-3 text-sm">The Essential Studio Manager</a>
                <div class="flex p-3 text-sm">
                    <div class="px-4">
                        <a href="" class="gray-pill">Administrator</a>
                    </div>
                    <div>
                        <a href="">Jonathon Ringeisen</a>
                    </div>
                </div>
            </div>

            <aside class="w-56 h-screen mt-12 bg-gray-700">
                <div class="mt-4 p-5">
                    <ul class="text-white text-sm font-light">
                        <li class="p-1"><i class="fa fa-user pr-2"></i> Dashboard</li>
                        <li class="p-1"><i class="fa fa-briefcase pr-2"></i> Business</li>
                    </ul>
                </div>
            </aside>

            <main class="main-content">
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
            </main>
        </div>
        <footer class="flex w-full bg-gray-900 p-3 text-white text-light">
            <p>@copyright 2017-2019 All Rights Reserved</p>
        </footer>
    </body>
</html>
