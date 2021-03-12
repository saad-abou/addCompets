import Vue from 'vue'
import Vuetify from 'vuetify/lib'
import '@fortawesome/fontawesome-free/css/all.css'  // Ensure you are using css-loader

Vue.use(Vuetify)

const opts = {}

export default new Vuetify(opts)

Vue.use(Vuetify, {
    iconfont: 'fa'
   })
