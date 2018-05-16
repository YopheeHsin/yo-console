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
				.then(function () {

				})
				.catch(function () {

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
