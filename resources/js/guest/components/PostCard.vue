<template>
	<div class="post">
		<div>
			<router-link :to="{ name: 'single-post', params: { slug: data.slug } }"><h3>{{data.title}}</h3></router-link>
		</div>
		<div>
			<p>{{data.preview}}</p>
			
			<div class="info">
				<p>#{{data.category.name}} #{{data.user.name}} </p>
				<img src="" alt="">
				<small><router-link :to="{ name: 'single-post', params: { slug: data.slug } }">Leggi tutto l'articolo</router-link></small>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'PostCard',
		props: {
			data: Object,
		},
	}
</script>

<style lang="scss" scoped>
	.post {
		background-color: rgb(243, 237, 237);
		border-radius: 10px;
		border: 1px solid black;
		padding: 10px;
		// max-height: 400px;
		overflow:hidden;
		display: flex;
		flex-direction: column;
		&_description {
			margin-bottom: .625rem;
		}
	}
	a{
		text-decoration: none;
		h3 {
			color: black;
			margin-bottom: .625rem;
			text-transform: uppercase;
		&:hover{
			-webkit-transition: color ease-in-out 600ms;
			color: rgba(212, 175, 55, 0.9);
		}
	}
	}
</style>