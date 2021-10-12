window.axios = require('axios');

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

new Vue({
  el: '#app',
});