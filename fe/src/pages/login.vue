<template>
	<el-button type="text">{{ username }}</el-button>
</template>

<script>
export default {
	data() {
		return {
			username: 'user'
		}
	},
	methods: {
		getList() {
			this.$http.get('/api/1.php')
				/* eslint-disable */
				.then(dt => {
					this.username = dt.msg
				})
				.catch(error => {
					this.username = 'loginError'
				})
		}
	},
	mounted() {
		this.getList()
	}
}
</script>

<style lang="less">
h1 {
	color: #f0f0f0;
}
</style>
