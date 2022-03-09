<template>
	<section>
		<div class="container">
			<h2>{{category.name}}</h2>
			<h3>Lista post associati</h3>
			<div>
				<PostCard v-for="post in category.posts" :key="post.id" :data="post"/>
			</div>
		</div>
	</section>
</template>

<script>
import PostCard from '../components/PostCard';
export default {
	name: 'SingleCategory',
	components: {
		PostCard
	},
	data() {
		return {
			category: null,
		}
	},
	mounted() {
		axios.get(`/api/categories/${this.$route.params.slug}`)
		.then((response) => {
			this.category = response.data.data;
			console.log(response);
		})
		.catch( (error) => {
			console.log(error);
		})
	}
}
</script>