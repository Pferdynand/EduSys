<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
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
        <h1>Hola, Vue JS</h1>
    </AppLayout>
</template>

<style>
h1{
    color: rebeccapurple;
}
</style>