
require('./bootstrap');
import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue').default;

Vue.component('search-vehicle-component', require('./components/SearchVehicleComponent.vue').default);
Vue.component('vehicle-create-component', require('./components/vehicle/VehicleCreateComponent.vue').default);
Vue.component('header-component', require('./components/header/HeaderComponent.vue').default);
Vue.component('footer-component', require('./components/footer/FooterComponent.vue').default);
Vue.component('more-info-vehicle',require('./components/moreinfovehicle/MoreInfoVehicleComponent.vue').default);

const app = new Vue({
    el:'#app'
});
