<template>
    <ul class="text-white text-xs font-light">
        <li class="p-2 cursor-pointer" v-for="(item, index) in menu.parent" :key="index">
            <span @click.prevent="item.show = !item.show" class="hover:font-medium">
                <i :class="item.icon+' float-left mr-3 w-3 pt-1 leading-loose'"></i> 
                {{ item.name }} 
                <i v-if="item.child && !item.show" class="fas fa-caret-right float-right pt-1"></i>
                <i v-if="item.child && item.show" class="fas fa-caret-down float-right pt-1"></i>
            </span>
            <ul class="ml-6" v-if="item.child && item.show">
                <li class="p-1 hover:font-medium" v-for="(child, index) in item.child" :key="index">- {{ child }}</li>
            </ul>
        </li>
    </ul>
</template>

<script>
export default {
    data () {
        return {
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
    }
}
</script>