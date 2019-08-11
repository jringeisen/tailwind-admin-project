<template>
<transition name="slide-fade">
    <div class="left-side-nav" v-if="toggleLeftSidebar">
        <div class="p-5">
            <ul class="text-white text-xs font-light -ml-5 -mr-5">
                <router-link :to="route" tag="li" class="p-2 cursor-pointer pl-6" active-class="active" v-for="(route, index) in routes" :key="index">
                    <i :class="route.icon+' float-left mr-3 w-3 pt-1 leading-loose'"></i> 
                    {{ route.title }} 
                </router-link>
            </ul>
        </div>
    </div>
</transition>
</template>

<script>
export default {
    data () {
        return {
            toggleLeftSidebar: true,
        }
    },
    computed: {
        routes: function () {
            var routes = [];
            for (var i in this.$router.options.routes) {
                if (!this.$router.options.routes.hasOwnProperty(i)){
                    continue
                }
                var route = this.$router.options.routes[i];
                if(route.hasOwnProperty('title')) {
                    routes.push(route);
                }
            }
            return routes;
        }
    },
    mounted () {
        this.$root.$on('toggleLeftSidebar', data => {
            this.toggleLeftSidebar = !this.toggleLeftSidebar
        });
    }
}
</script>