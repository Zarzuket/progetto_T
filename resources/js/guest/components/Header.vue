<template>
    <header>
        <div class="nav">
            <ul>
				<li><router-link :to="{ name: 'Home' }">Home</router-link></li>
				<li><router-link :to="{ name: 'Scoperta' }">Scoperta</router-link></li>
				<li><router-link :to="{ name: 'Ricerca' }">Ricerca</router-link></li>
				<!-- <li><router-link :to="{ name: 'single-category' }">Ricerca</router-link></li> -->
				<li><router-link :to="{ name: 'about' }">Chi Sono</router-link></li>
            </ul>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style lang="scss" scoped>
	header {
		background-color: rgb(4, 60, 82);
		padding: 1.875rem 0;
		.nav {
			display: flex;
			justify-content: center;
			align-items: center;
			ul {
				display: flex;
				li {
					list-style: none;
					a {
						color: #5affb2;
						text-decoration: none;
						text-transform: uppercase;
						padding: 0px 40px;
					&:hover{
						-webkit-transition: color ease-in-out 600ms;
    					color: red;
					}
					}
				}
			}
		}
	}
</style>