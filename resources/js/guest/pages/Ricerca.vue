<template>
    <div>
	    <Posts/>
    </div>
</template>

<script>
import Posts from '../components/Posts';
	export default {
		name: 'Home',
		components: {
			Posts
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