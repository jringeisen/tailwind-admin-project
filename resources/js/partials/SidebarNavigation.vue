<template>
<transition name="slide-fade">
    <div class="left-side-nav" v-if="toggleLeftSidebar">
        <div class="p-5">
            <ul class="text-white text-xs font-light">
                <li class="p-2 cursor-pointer hover:bg-gray-800" :class="{ 'bg-gray-800': item.show }" v-for="(item, index) in menu.parent" :key="index">
                    <div @click.prevent="item.show = !item.show" class="hover:font-medium">
                        <i :class="item.icon+' float-left mr-3 w-3 pt-1 leading-loose'"></i> 
                        {{ item.name }} 
                        <i v-if="item.child && !item.show" class="fas fa-caret-right float-right pt-1"></i>
                        <i v-if="item.child && item.show" class="fas fa-caret-down float-right pt-1"></i>
                    </div>
                    <transition name="slide-fade">
                    <ul class="ml-6" v-if="item.child && item.show">
                        <li class="p-1 hover:font-medium" v-for="(child, index) in item.child" :key="index">- {{ child }}</li>
                    </ul>
                    </transition>
                </li>
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
            menu: {
                parent: [
                    {
                        name: 'Dashboard',
                        icon: 'fa fa-user',
                        show: false
                    },
                    {
                        name: 'Admin',
                        icon: 'fa fa-unlock-alt',
                        show: false
                    },
                    {
                        name: 'Business',
                        icon: 'fa fa-briefcase',
                        show: false,
                        child: [
                            'Mileage',
                            'Packages',
                            'Events'
                        ]
                    },
                    {
                        name: 'Finances',
                        icon: 'fa fa-money-bill-alt',
                        show: false,
                        child: [
                            'Incomes',
                            'Expenses'
                        ]
                    },
                    {
                        name: 'Clients',
                        icon: 'fa fa-users',
                        show: false,
                        child: [
                            'View Clients',
                            'Potential Clients'
                        ]
                    }
                ]
            }
        }
    },
    mounted () {
        this.$root.$on('toggleLeftSidebar', data => {
            this.toggleLeftSidebar = !this.toggleLeftSidebar
        });
    }
}
</script>