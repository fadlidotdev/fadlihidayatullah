<script setup>
defineProps({
    title: String,
})
</script>

<template>
    <div>
        <div class='font-medium uppercase tracking-wider text-brand/85'>{{ title }}</div>

        <slot/>
    </div>
</template>

<style scoped>

</style>
