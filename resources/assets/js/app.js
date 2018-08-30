
window.Vue = require('vue');


const application = new Vue({
    el: '#application',
    data: {
    	currency: 'R$',
    	currencyCode: 'BRL'
    },
    components: {
    	'page-index': require('./pages/index.vue'),
    	'template-header': require('./components/template-header.vue')
    }
});