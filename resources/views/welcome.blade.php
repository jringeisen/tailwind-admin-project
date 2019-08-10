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
                    <div class="container mx-auto xl:flex">
                        <div class="gray-card w-full xl:w-1/2">
                            <div class="card-header">
                                <p>Calendar</p>
                            </div>
                            <div class="card-body">
                                <calendar />
                            </div>
                        </div>
                        <div class="gray-card w-full xl:w-1/2">
                            <div class="card-header">
                                <p>Upcoming Sessions</p>
                            </div>
                            <div class="card-body">
                                <div class="overflow-x-scroll w-full block">
                                    <table class="table">
                                        <tbody style="height: 359px">
                                            <tr class="hover:shadow cursor-pointer">
                                                <td class="p-4">Session with Jon</td>
                                                <td class="p-4">August 13, 2019 5:30 PM</td>
                                                <td class="p-4">Newborn</td>
                                                <td class="p-4">$400.00</td>
                                                <td class="p-4"><a href="" class="gray-pill">Paid In Full</a></td>
                                            </tr>
                                            <tr class="hover:shadow cursor-pointer">
                                                <td class="p-4">Session with Jon</td>
                                                <td class="p-4">August 13, 2019 5:30 PM</td>
                                                <td class="p-4">Newborn</td>
                                                <td class="p-4">$400.00</td>
                                                <td class="p-4"><a href="" class="gray-pill">Paid In Full</a></td>
                                            </tr>
                                            <tr class="hover:shadow cursor-pointer">
                                                <td class="p-4">Session with Jon</td>
                                                <td class="p-4">August 13, 2019 5:30 PM</td>
                                                <td class="p-4">Newborn</td>
                                                <td class="p-4">$400.00</td>
                                                <td class="p-4"><a href="" class="gray-pill">Paid In Full</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
