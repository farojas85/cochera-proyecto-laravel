
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('content-header',require('./components/views/ContentHeader').default)

const app = new Vue({
    el: '#wrapper',
});
