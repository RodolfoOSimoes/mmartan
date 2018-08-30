<template>
    <header class="header">
        <div class="header__container">
            <div class="header__content">
                <a href="/" class="header__logo">
                    <img :src="logo.url" class="header__logo__image" :alt="logo.alt" :title="logo.title" />
                </a>
                <div class="header__search">
                    <search-input></search-input>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        data: function() {
            return {
                logo: {
                    url: '/img/logo.png',
                    alt: 'MMartan',
                    title: 'MMartan'
                }
            }
        },
        components: {
            'search-input': require('./search-input.vue')
        }
    }
</script>

<style>

    .header {
        position: relative;
        box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.3);
        background-color: #FFFFFF;
    }

    .header__container {
        padding: 0 30px;
    }

    .header__content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 62px;
        
    }

    .header__logo {

    }

</style>