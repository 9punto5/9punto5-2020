<template>
    <div class="relative dropdown">
        <div @click.prevent="isOpen = !isOpen">
            <slot name="trigger"></slot>
        </div>
        <div v-show="isOpen" :style="{ width }" class="bg-n5_purple_lighter absolute mt-2 px-4 py-3 text-white font-bold shadow-lg">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Dropdown',
        props: {
            width: { default: 'auto' },
            align: { default: 'left' }
        },
        data() {
            return {
                isOpen: false
            }
        },
        watch: {
            isOpen(isOpen) {
                if (isOpen) {
                    document.addEventListener('click', this.closeIfClickedOutside);
                }
            }
        },
        methods: {
            closeIfClickedOutside(event) {
                if (! event.target.closest('.dropdown')) {
                    this.isOpen = false;
                    document.removeEventListener('click', this.closeIfClickedOutside);
                }
            }
        }
    }
</script>
