<template>
    <div class="products-list">
    	<div class="products-list__header">
    		<h3 class="products-list__title">{{ total }} Produtos encontrados</h3>
    	</div>
    	<div class="products-list__list">
            <div v-for="product in products" class="products-list__item">
                <div class="products-list__item__content">
                    <div class="products-list__item__image">
                        <div v-for="productImage in product.images" class="products-list__item__image__item" :style="{'background-image': 'url(' + productImage.url + ')'}"></div>
                    </div>
                    <div class="products-list__item__info">
                        <h4 class="products-list__item__info__name">{{ product.name }}</h4>
                        <label class="products-list__item__info__categories"><span v-for="productCategory in product.categories">{{ productCategory.name }}</span></label>
                    </div>
                    <div class="products-list__item__price">
                        <p class="products-list__item__price__info">
                            <span class="products-list__item__price__info__old"><span>{{ $root.currency }}</span><span>{{ formatMoney(product.old_price) }}</span></span><span class="products-list__item__price__info__by">&nbsp;por&nbsp;</span><span class="products-list__item__price__info__cur"><span>{{ $root.currency }}</span><span>{{ formatMoney(product.price) }}</span></span>
                        </p>
                    </div>
                </div>
            </div>
    	</div>
        <div class="products-list__footer">
            <div class="products-list__footer__content">
            </div>
        </div>
    </div>
</template>

<script>

    let { moneyFormatBRL } = require('../helpers/string.js').default;

    export default {
        props: {
            products: {
                type: Array,
                default: []
            },
            total: {
                type: Number,
                default: 0
            },
            page: {
                type: Number,
                default: 0
            },
            count: {
                type: Number,
                default: 0
            }            
        },
        data: function() {
            return {};
        },
        methods: {
            formatMoney: function(value) {
                return moneyFormatBRL(value);
            }
        }
    }
</script>

<style lang="scss">

    @import "../../sass/core/variables";

	.products-list {}

	.products-list__header {
        padding-top: 20px;
        padding-bottom: 20px;
    }

	.products-list__title {
        display: table;
        font-weight: 400;
        color: $color-2;
        font-size: 16px;
        line-height: 1.5;
        text-align: left;
        text-transform: uppercase;
        border-bottom: 2px solid $border-color-1;
    }
    
    .products-list__list {}

    .products-list__item {
        border-left: 1px solid $border-color-2;
        border-right: 1px solid $border-color-2;
        border-top: 1px solid $border-color-2;
        cursor: pointer;
        transition: background-color 0.4s ease;

        &:last-child {
            border-bottom: 1px solid $border-color-2;
        }

        &:hover {
            transition: background-color 0.4s ease;
            background-color: $background-color-2;
        }
    }

    .products-list__item__content {
        padding: 12px 20px;
    }

    .products-list__item__image {
        display: flex;
        justify-content: center;
        text-align: center;
        margin-left: -5px;
        margin-right: -5px;
    }

    .products-list__item__image__item {
        width: 80px;
        height: 80px;
        margin-left: 5px;
        margin-right: 5px;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .products-list__item__info {
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 8px;
    }

    .products-list__item__info__name {
        display: block;
        font-size: 16px;
        font-weight: 600;
        color: $color-5;
        line-height: 1.5;
        text-align: center;
    }

    .products-list__item__info__categories {
        display: block;
        font-size: 14px;
        line-height: 1.5;
        text-align: center;

        > span {
            display: inline-block;
            vertical-align: middle;
            position: relative;
            padding-left: 17px;
            padding-right: 6px;
            font-size: 14px;
            font-weight: 400;
            color: $color-3;
            line-height: 1;

            &:before {
                content: '';
                position: absolute;
                width: 2px;
                height: 2px;
                background-color: rgba($border-color-3, 0.7);
                top: 0;
                bottom: 0;
                left: 9px;
                margin: auto 0;
            }

            &:after {
                content: '';
                position: absolute;
                width: 2px;
                height: 10px;
                background-color: rgba($border-color-3, 0.7);
                top: 0;
                bottom: 0;
                left: 0;
                margin: auto 0;
            }

            &:first-child {
                padding-left: 0;
                &:before,
                &:after {
                    content: none;
                    display: none;
                }
            }
        }
    }

    .products-list__item__price {
        padding-top: 8px;
    }

    .products-list__item__price__info {
        display: block;
        text-align: center;
        font-size: 16px;
        color: $color-3;
        line-height: 1.5;
        font-weight: 400;
    }

    .products-list__item__price__info__old {
        text-decoration: line-through;
    }

    .products-list__item__price__info__by {}

    .products-list__item__price__info__cur {
        color: $color-4;
    }


    .products-list__footer {
        padding-top: 30px;

    }

    .products-list__footer__content {
         padding-top: 32px;
        border-top: 1px solid $border-color-2;
    }

    @media #{$media-md} {
        .products-list__header {
            padding-top: 27px;
            padding-bottom: 27px;
        }
    }

    @media #{$media-lg} {

        .products-list__list {}

        .products-list__item {}

        .products-list__item__content {
            display: flex;
            align-items: center;
            padding: 4px 20px;
        }

        .products-list__item__image {
            display: flex;
            text-align: flex-start;
        }

        .products-list__item__image__item {}

        .products-list__item__info {
            flex: 1;
            padding-left: 30px;
            padding-right: 15px;
            padding-top: 0;
        }

        .products-list__item__info__name {
            text-align: left;
        }

        .products-list__item__info__categories {
            text-align: left;
        }

        .products-list__item__price {
            padding-top: 0;
        }

        .products-list__item__price__info {}

        .products-list__item__price__info__old {}

        .products-list__item__price__info__by {}

        .products-list__item__price__info__cur {}

    }

</style>