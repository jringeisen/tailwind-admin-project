<template>
    <div>
        <div class="container mx-auto lg:flex md:flex">
            <div class="gray-card w-full xl:w-1/2">
                <div class="card-header">
                    <p>Alerts</p>
                </div>
                <div class="card-body p-3">
                    <div class="blue-alert" role="alert">
                        This is a blue alert!
                    </div>
                    <div class="gray-alert" role="alert">
                        This is a gray alert!
                    </div>
                    <div class="green-alert" role="alert">
                        This is a green alert!
                    </div>
                    <div class="red-alert" role="alert">
                        This is a red alert!
                    </div>
                    <div class="yellow-alert" role="alert">
                        This is a <a href="" class="alert-link">yellow</a> alert with an alert-link class.
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