<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
const name = "Vue Js es la hostia";
const emer = "color: rgb(6 95 70);";
const arCol = ["blue", "red", "peru"];
const flag = false;
</script>
<!-- 
    //Todo esto es el template por defecto
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboardooooo
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
-->
<template>
    <AppLayout  title="Dashboard">
        <div>
            <div class="m-3 p-2">
                <h1>Hola, {{name.toUpperCase()}}</h1>
                <h2 :style="`color: ${arCol[2]}`">Zi, es color esmeralda</h2>
                <h2>{{ flag ? "Estoy vivo": "Estoy morido" }}</h2>
                <h2 v-if="flag">Estoy vivo</h2>
                <h2 v-else>Estoy morido</h2>
            </div>
        </div>
    </AppLayout>
</template>

<style>
h1{
    color: rebeccapurple;
}
</style>