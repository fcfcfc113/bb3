<template>
    <div>
        <h2>Danh sách sản phẩm</h2>
        <ul>
            <li v-for="product in products" :key="product.id">
                {{ product.name }} - {{ product.price }} VNĐ
            </li>
        </ul>
        <ProductDetail />

    </div>
</template>

<script>
import ProductDetail from "./ProductDetail.vue";

export default {
    components: {
        ProductDetail
    },
    data() {
        return {
            products: []
        };
    },
    mounted() {
        fetch("/products")
            .then(response => response.json())
            .then(data => {
                this.products = data;
            });
    }
};
</script>

<style>
li {
    color: red;
}
</style>
