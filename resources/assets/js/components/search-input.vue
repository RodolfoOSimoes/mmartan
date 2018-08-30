<template>
    <div class="search-input">
        <a class="search-input__button search-input__button--search"><img src="/img/icon-search.png"></a>
        <input class="search-input__input" type="text">
        <a class="search-input__button search-input__button--close"><img src="/img/icon-close.png"></a>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {}
        }
    }
</script>

<style lang="scss">

    @import '../../sass/core/variables';

    .search-input {
        position: relative;
        display: block;
        height: 30px;
        border: 1px solid $input-border-color-1;
        border-radius: 15px;
        background-color: $input-background-color-1;

    }

    .search-input__button {
        display: table;
        width: 28px;
        height: 28px;
        position: absolute;
        top: 0;
        text-align: center;

        > img {
            display: table-cell;
        }
    }

    .search-input__button--search {}

    .search-input__button--close {}

    .search-input__input {}

</style>