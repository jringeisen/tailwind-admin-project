<template>
    <div>
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
</template>

<script>
export default {
    
}
</script>