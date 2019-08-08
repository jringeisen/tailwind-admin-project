<template>
    <div>
        <full-calendar :config="config"></full-calendar>
    </div>
</template>

<script>
export default {
    data () {
        return {
            config: {
                defaultView: 'month'
            }
        }
    }
}
</script>
