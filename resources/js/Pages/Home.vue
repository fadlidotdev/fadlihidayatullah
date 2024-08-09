<script setup>
import Section from "@/Components/Section.vue";
import SomeText from "@/Components/SomeText.vue";
import ArticleCard from "@/Components/ArticleCard.vue";
import Nav from "@/Shared/Nav.vue";

defineProps({
    name: String,
    techstacks: Array
})

</script>

<template>
    <Nav/>

    <Section title="About Me">
        <h1 class='text-2xl'>Hello, my name is {{ name }}.</h1>

        <SomeText>
            <p>
                Saya seorang Suami, Ayah dari satu jagoan laki-laki, software developer, konten kreator, dan co-founder
                dari
                <a href="" target="_blank"
                   class='font-bold transition-colors duration-300 hover:text-brand'>GVLLabs</a>.
            </p>

            <p>
                Saya sangat menyukai Laravel, ekosistem, dan komunitasnya. Berikut Techstack favorit yang saya gunakan,
                <ul class='pl-4 list-disc list-inside'>
                    <li v-for="stack in techstacks" :key="stack">
                        {{ stack }}
                    </li>
                </ul>
            </p>
        </SomeText>
    </Section>

    <Section title="Content">
        <h2 class="text-xl font-semibold">Everything I've written</h2>

        <div class='mt-2'>
            <p>2024</p>
        </div>
        <ul class='mt-1 space-y-3'>
            <li>
                <ArticleCard title='File-based Routing in Inertia'/>
            </li>
            <li>
                <ArticleCard title='My VSCode Setup 2024 for Laravel'/>
            </li>
        </ul>
    </Section>
</template>

<style scoped>

</style>
