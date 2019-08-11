<template>
    <div>
        <div class="container mx-auto lg:flex md:flex">
            <div class="gray-card w-full xl:w-1/2">
                <div class="card-header">
                    <p>Alerts</p>
                </div>
                <div class="card-body p-3">
                    <div class="alert blue-alert" role="alert">
                        This is a blue alert!
                    </div>
                    <div class="alert gray-alert" role="alert">
                        This is a gray alert!
                    </div>
                    <div class="alert green-alert" role="alert">
                        This is a green alert!
                    </div>
                    <div class="alert red-alert" role="alert">
                        This is a red alert!
                    </div>
                    <div class="alert yellow-alert" role="alert">
                        This is a <a href="" class="alert-link">yellow</a> alert with an alert-link class.
                    </div>
                </div>
            </div>
            <div class="gray-card w-full xl:w-1/2">
                <div class="card-header">
                    <p>Labels</p>
                </div>
                <div class="card-body p-3">
                    <div class="container mb-2">
                        <span class="label blue-label rounded-full">Blue Label</span>
                        <span class="label gray-label rounded-full">Gray Label</span>
                        <span class="label green-label rounded-full">Green Label</span>
                        <span class="label red-label rounded-full">Red Label</span>
                        <span class="label yellow-label rounded-full">Yellow Label</span>
                    </div>
                    <div class="container">
                        <span class="label blue-label">Blue Label</span>
                        <span class="label gray-label">Gray Label</span>
                        <span class="label green-label">Green Label</span>
                        <span class="label red-label">Red Label</span>
                        <span class="label yellow-label">Yellow Label</span>
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