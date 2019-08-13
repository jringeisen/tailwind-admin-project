<template>
    <div>        
        <div class="container mx-auto xl:flex">
            <div class="gray-card w-full">
                <div class="card-header">
                    <p>Date Time Picker</p>
                </div>
                <div class="card-body p-4">
                    <div class="w-1/2">
                        <label class="text-xs">Date Time Picker</label>
                        <flat-pickr v-model="date1" :config="config"></flat-pickr>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</template>

<script>
import 'flatpickr/dist/flatpickr.css';
export default {
    data () {
        return {
            date1: new Date(),
            config: {
                altInput: false,
                dateFormat: 'Y-m-d H:i',
                enableTime: true
            }
        }
    }
}
</script>