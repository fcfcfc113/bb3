<template>
    <div>
        <h2>Chi tiết sản phẩm ITEM</h2>
        <ul>
            <li class="item" v-for="product in products" :key="product.id">
                {{ product.name }} - {{ product.price }} VNĐ
            </li>
        </ul>
    </div>

</template>

<script>
export default {
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
.item {
    color: rgb(75, 231, 28);
}
</style>
