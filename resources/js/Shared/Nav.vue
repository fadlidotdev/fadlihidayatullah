<script setup>
import {Link} from '@inertiajs/vue3'
</script>

<template>
    <nav class="mb-7">
        <ul class="flex gap-x-6 font-semibold underline">
            <li>
                <Link href="/">Home</Link>
            </li>
            <li>
                <Link href="/contents">Content</Link>
            </li>
            <li>
                <Link href="/projects">Projects</Link>
            </li>
            <li>
                <Link href="/now">Now</Link>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
