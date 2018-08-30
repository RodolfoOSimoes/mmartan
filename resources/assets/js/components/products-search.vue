<template>
    <div class="products-search">
    	<div class="products-search__header">
    		<h1 class="products-search__title">{{ search.filter || emptyFilterLabel }}</h1>
    	</div>
    	<div class="products-search__body">
    		<div class="products-search__container">
                <products-list
                    :products.sync="search.products"
                    :total.sync="search.total"
                    :page.sync="search.page"
                    :count.sync="search.count"></products-list>
            </div>
    	</div>
    </div>
</template>

<script>

    let ProductsService = require('../services/products-service.js').default;

    export default {

        data: function() {
            return {
                search: {
                    filter: '',
                    total: 0,
                    page: 0,
                    count: 10,
                    products: []
                },
                emptyFilterLabel: 'Todos os produtos'
            }
        },
        methods: {
            load: function() {
                let request = ProductsService.search(this.search.filter, this.search.page, this.search.perpage);

                request.then((response) => {
                    response = response.data;

                    if ('success' === response.status) {
                        this.setLoadedData(response);
                    }
                });
            },
            setLoadedData: function(data) {
                this.search.filter = data.filter;
                this.search.page = data.pagination.page;
                this.search.count = data.pagination.count;
                this.search.total = data.pagination.total;
                this.search.products = data.data;
            }
        },
        components: {
            'products-list': require('./products-list.vue')
        },
        created: function() {
            this.load();
        }
    }
</script>

<style lang="scss">

    @import "../../sass/core/variables";
    @import "../../sass/modules/container";

	.products-search {}

	.products-search__header {
        @extend .container-fluid;
        background-color: $background-color-1;
    }

	.products-search__title {
        display: block;
        padding-top: 18px;
        padding-bottom: 18px;
        font-weight: 100;
        color: $color-1;
        font-size: 28px;
        line-height: 1.5;
        text-align: left;
    }

	.products-search__body {}

    .products-search__container {
        @extend .container;
    }

    @media #{$media-md} {
        .products-search__title {
            padding-top: 22px;
            padding-bottom: 22px;
            font-size: 34px;
        }
    }

</style>