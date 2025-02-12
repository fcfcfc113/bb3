<template>
    <div>
        <h1>Hello from Vue.js!</h1>
        <ProductList />
    </div>
</template>

<script>
import ProductList from './products/ProductList.vue';

export default {
    components: {
        ProductList
    }
};
</script>
