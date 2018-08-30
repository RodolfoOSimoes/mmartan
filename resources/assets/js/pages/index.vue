<template>
    <div class="page page--index">
        <products-search></products-search>
    </div>
</template>

<script>
    export default {
        components: {
            'products-search': require('../components/products-search.vue')
        }
    }
</script>