<template>
    <div class="search-input" :class="{'search-input--active':active}">
        <a class="search-input__button search-input__button--search" v-on:click="search"><img src="/img/icon-search.png"></a>
        <input class="search-input__input" v-model="filter" v-on:focus="focus" v-on:keyup.13="apply" type="text">
        <a class="search-input__button search-input__button--close" v-on:click="clear"><img src="/img/icon-close.png"></a>
    </div>
</template>

<script>
    export default {
        props: {
            changeHeaderMode: {
                type: Function,
                default: function() {}
            }
        },
        data: function() {
            return {
                active: false,
                filter: ''
            }
        },
        methods: {
            clear: function() {
                this.active = false;
                this.filter = '';
                this.changeHeaderMode('default');
                this.apply();
            },
            search: function() {
                if (this.active) {
                    this.apply();
                } else {
                    this.changeHeaderMode('search');
                    this.active = true;
                    this.filter = '';
                }
            },
            focus: function() {
                this.changeHeaderMode('search');
                this.active = true;
                this.filter = '';
            },
            apply: function() {
                let filter = this.filter;
                this.$root.$emit('search', filter);
            }
        }
    }
</script>

<style lang="scss">

    @import '../../sass/core/variables';

    .search-input {
        position: relative;
        display: block;
        height: 30px;
        padding: 0 12px 0 60px;
        max-width: 100%;
        border: 1px solid $input-border-color-1;
        border-radius: 15px;
        background-color: $input-background-color-1;

        &.search-input--active {
            padding-right: 60px;
        }
    }

    .search-input__button {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 28px;
        width: 28px;
        height: 28px;
        position: absolute;
        top: 0;
        z-index: 1;
        text-align: center;
        cursor: pointer;

        > img {
            display: table-cell;
            vertical-align: middle;
        }

        &.search-input__button--search {
            left: 16px;
        }

        &.search-input__button--close {
            right: 16px;
            display: none;
        }
    }

    .search-input--active .search-input__button.search-input__button--close {
        display: flex;
    }

    .search-input__input {
        display: block;
        border: none;
        height: 28px;
        width: 20px;
        background-color: #FFFFFF;
        outline: none!important;
        box-shadow: none!important;
        font-size: 14px;
        line-height: 28px;
        font-weight: 400;
        color: $color-3;
        max-width: 100%;
    }

    .search-input--active .search-input__input {
        width: 1000px;
    }

    @media #{$media-md} {
        .search-input--active .search-input__input {
            max-width: 220px;
        }
    }

</style>