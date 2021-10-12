window.axios = require('axios');

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);

new Vue({
  el: '#app',
});