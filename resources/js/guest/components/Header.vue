<template>
    <header>
        <div class="container">
            <ul>
                <li><a href="#">LINK</a></li>
                <li><a href="#">LINK</a></li>
                <li><a href="#">LINK</a></li>
                <li><a href="#">LINK</a></li>
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
		background-color: rgb(170, 224, 245);
		padding: 1.875rem 0;
		.container {
			display: flex;
			justify-content: space-between;
			align-items: center;
			ul {
				display: flex;
				li {
					list-style: none;
					a {
						color: #fff;
						text-decoration: none;
						text-transform: uppercase;
					}
					&:not(:last-child) {
						margin-right: 20px;
					}
				}
			}
		}
	}
</style>