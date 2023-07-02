<template>
    <h1>Holi, {{ name }}</h1>
    <p>Aquí usaremos:</p>
    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>
<script>
    export default {
        props: {
            name: String,
            frameworks: Array,
        },
    };
</script>