window.axios = require('axios');

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

new Vue({
  el: '#app',
});