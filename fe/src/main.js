import Vue from 'vue'
import axios from 'axios'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import App from './App'
import router from './router'

Vue.config.productionTip = false
Vue.use(ElementUI)

axios.defaults.timeout = 30000
axios.interceptors.response.use(({ data }) => {
	if (data.code > 0) Vue.prototype.$message.error(data.msg)
	return data
}, error => {
	Vue.prototype.$message.error('mainError')
	return Promise.reject(error)
})
Vue.prototype.$http = axios

new Vue({
	router,
	render: h => h(App)
}).$mount('#app')
