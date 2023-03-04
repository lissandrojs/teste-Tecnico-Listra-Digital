
require('./bootstrap');
import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue').default;

Vue.component('search-vehicle-component', require('./components/SearchVehicleComponent.vue').default);
Vue.component('vehicle-create-component', require('./components/vehicle/VehicleCreateComponent.vue').default);


const app = new Vue({
    el:'#app'
});
