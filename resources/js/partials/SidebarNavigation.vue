<template>
<transition name="slide-fade">
    <div class="left-side-nav" v-if="toggleLeftSidebar">
        <div class="p-5">
            <ul class="text-white text-xs font-light -ml-5 -mr-5">
                <router-link @click.native="parentClicked(index, route)" :to="route" tag="li" class="p-2 cursor-pointer pl-6" active-class="parent-active" v-for="(route, index) in routes" :key="index">
                    <i :class="route.icon+' float-left mr-3 w-3 pt-1 leading-loose'"></i> 
                    {{ route.title }}
                    <i v-if="route.children && !openedItems[index]" class="fas fa-caret-right pt-1 pl-5"></i>
                    <i v-if="route.children && openedItems[index]" class="fas fa-caret-down pt-1 pl-5"></i>
                    <transition name="slide-fade">
                    <ul class="pt-2" v-if="openedItems[index]">
                        <router-link @click.native.stop :to="child" tag="li" class="p-1 pl-6" active-class="child-active" v-for="(child, index) in route.children" :key="index">- {{ child.title }}</router-link>
                    </ul>
                    </transition>
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
            selected: null,
            openedItems: {},
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
    },
    methods: {
        parentClicked(index, item) {
            if (index != this.selected) {
                this.openedItems = {}
            }

            if (item.children != null) {
                this.selected = index
                this.openedItems[index] = !this.openedItems[index]
                this.$forceUpdate()
            }
        },
    }
}
</script>