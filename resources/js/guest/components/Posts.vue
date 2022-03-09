<template>
    <section>
        <div class="container">
			<div class="posts">
				<PostCard v-for="post in posts" :key="post.id" :data="post"/>
			</div>
		</div>
    </section>
</template>

<script>
    import PostCard from './PostCard.vue';
    export default {
        name: 'Posts',
        components:{
            PostCard
        },
        data() {
            return {
                posts: [],
            }
        },
    mounted(){
        axios.get("/api/posts")
        .then((response) => {
            this.posts = response.data.data;
            console.log(response);
        })
        .catch((error) => {
            console.log(error);
        })
    }
    }
</script>
<style lang="scss" scoped>
    section {
    padding: 1.875rem;
	}
	.posts {
		display: flex;
		flex-wrap: wrap;
        
		margin: auto -5px;
		> * {
			width: 30rem;
			margin: 10px 5px;
		}
	}
</style>

