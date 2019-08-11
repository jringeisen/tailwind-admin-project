<template>
    <div class="flex justify-between w-full">
        <div class="flex">
            <span @click.prevent="sidebarEvent"><i class="fas fa-bars mt-4 ml-3"></i></span>
            <a href="" class="logo">The Essential Studio Manager</a>
        </div>
        <div class="flex p-3 text-sm">
            <div class="px-4 hidden xl:block lg:block md:block">
                <span class="label gray-label rounded-full">Administrator</span>
            </div>
            <div class="px-4 mt-1" v-click-outside="clickedOutsideBell">
                <i class="fa fa-bell text-xl cursor-pointer" @click.prevent="toggleBell = !toggleBell"></i>
                <span class="absolute pr-1 pl-1 -mt-8 ml-2 bg-gray-600 rounded-full text-xs text-white">0</span>
                <ul class="absolute w-64 -ml-56 xl:-ml-24 lg:-ml-24 md:-ml-24">
                    <transition name="slide-fade">
                    <ul class="bg-white px-3 shadow-lg mt-3" v-if="toggleBell">
                        <li class="-mx-3 px-3 pt-3 pb-1 text-center">
                            <div class="alert gray-alert text-center" role="alert">
                                -- Empty --
                            </div>
                        </li>
                    </ul>
                    </transition>
                </ul>
            </div>
            <div class="-mt-1 px-4 hidden xl:block lg:block md:block">
                <img class="w-8 rounded-full" src="images/jon.png">
            </div>
            <div>
                <ul v-click-outside="clickedOutsideName">
                    <li class="cursor-pointer hidden xl:block lg:block md:block" @click.prevent="toggleName = !toggleName">Jonathon Ringeisen <i class="w-1" :class="{'fa fa-caret-down':toggleName, 'fa fa-caret-right':!toggleName}"></i></li>
                    <li class="cursor-pointer all xl:hidden lg:hidden md:hidden"><i class="fa fa-sign-out-alt text-xl mt-1"></i></li>
                    <transition name="slide-fade">
                    <ul class="bg-white px-3 shadow-lg mt-4" v-if="toggleName">
                        <li class="p-1 hover:bg-gray-300 -mx-3 px-3"><i class="fa fa-cog"></i> Settings</li>
                        <li class="p-1 hover:bg-gray-300 -mx-3 px-3 border-t"><i class="fa fa-sign-out-alt"></i> Logout</li>
                    </ul>
                    </transition>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            toggleName: false,
            toggleBell: false,
        }
    },
    methods: {
        clickedOutsideName () {
            this.toggleName = false;
        },
        clickedOutsideBell () {
            this.toggleBell = false;
        },
        sidebarEvent () {
            this.$root.$emit('toggleLeftSidebar');
        }
    }
}
</script>