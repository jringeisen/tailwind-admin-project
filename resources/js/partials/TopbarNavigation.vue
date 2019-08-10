<template>
    <div class="flex justify-between w-full">
        <a href="" class="logo">The Essential Studio Manager</a>
        <div class="flex p-3 text-sm">
            <div class="px-4">
                <a href="" class="gray-pill">Administrator</a>
            </div>
            <div class="px-4 mt-1">
                <i class="fa fa-bell text-xl"></i>
                <span class="absolute pr-1 pl-1 -mt-8 ml-2 bg-gray-600 rounded-full text-xs text-white">0</span>
            </div>
            <div class="-mt-1 px-4">
                <img class="w-8 rounded-full" src="images/jon.png">
            </div>
            <div>
                <ul>
                    <li class="cursor-pointer" @click.prevent="toggle = !toggle">Jonathon Ringeisen <i :class="{'fa fa-caret-down':toggle, 'fa fa-caret-right':!toggle}"></i></li>
                    <transition name="slide-fade">
                    <ul class="bg-white px-3 shadow-lg mt-4" v-if="toggle">
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
            toggle: false
        }
    }
}
</script>