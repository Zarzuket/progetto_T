<template>
	<div v-if="post" class="container">
		<div class="post">
			<h2>{{post.title}}</h2>
			<h5>Autore: <span class="autore">{{post['user'].name}}</span></h5>
			<h5>Categoria: <span class="categoria">{{post['category'].name}}</span></h5>
			<em>{{post.description}}</em>
		</div>
	</div>
</template>

<script>
export default {
	name: 'SinglePost',
	data() {
		return {
			post: null,
			posts:[]
		}
	},
	mounted() {
		axios.get(`/api/posts/${this.$route.params.slug}`)
		.then((response) => {
			// handle success
			if( response.data.success ) {
				this.post = response.data.data;
				console.log(response)
			} else {
				// redirect 404
				this.$router.push({name: 'not-found'});
			}
		})
		.catch( (error) => {
			// handle error
			console.log(error);
		});
    }
}
</script>

<style lang="scss" scoped>
	.post {
		background-color: rgb(243, 237, 237);
		border-radius: 10px;
		border: 1px solid black;
		padding: 10px;
		margin-top: 5rem;
		h2{
			color: rgb(177, 152, 12);
		}
	}
	.autore{
		color: red;
	}
	.categoria{
		color: green;
	}
</style>