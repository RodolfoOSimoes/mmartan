<template>
    <header class="header" :class="{'header--search':search}">
        <div class="header__container">
            <div class="header__content">
                <a href="/" class="header__logo">
                    <img :src="logo.url" class="header__logo__image" :alt="logo.alt" :title="logo.title" />
                </a>
                <div class="header__search">
                    <search-input :change-header-mode.sync="changeMode"></search-input>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        data: function() {
            return {
                search: false,
                logo: {
                    url: '/img/logo.png',
                    alt: 'MMartan',
                    title: 'MMartan'
                }
            }
        },
        components: {
            'search-input': require('./search-input.vue')
        },
        methods: {
            changeMode: function(mode) {
                if ('search' === mode) {
                    this.search = true;
                } else if ('default' == mode) {
                    this.search = false;
                }
            }
        }
    }
</script>

<style lang="scss">

    @import "../../sass/core/variables";
    @import "../../sass/modules/container";

    .header {
        position: relative;
        box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.3);
        background-color: #FFFFFF;
    }

    .header__container {
        @extend .container-fluid;
    }

    .header__content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 62px;
    }

    .header__search {
        max-width: 100%;
    }

    @media #{$media-xs-down} {
        .header--search .header__logo {
            display: none;
        }
    }

</style>