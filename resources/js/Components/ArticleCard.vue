<script setup>
defineProps({
    title: String,

})
</script>

<template>
    <div class='group relative overflow-hidden rounded-md bg-stone-800 p-2.5 transition-colors duration-200'>
        <div class='relative z-10'>
            <h2 class='font-semibold'>
                <a href="">{{ title }}</a>
            </h2>
            <p class='text-sm text-stone-400'>
                4.2k views &middot; 2 mins read.
            </p>
        </div>
        <span aria-hidden="true"
              class='absolute inset-0 z-[1] -translate-x-full bg-stone-700 transition-transform duration-200 group-hover:translate-x-0'></span>

    </div>
</template>

<style scoped>

</style>
