<template>
    <div class="container">
        <div class="post">
            <p>Mi chiamo Davide Bajo ho 29 anni e ho creato questo piccolo blog di post sulla medicina.
                ho molte passioni tra cui gli sport e l'amicizia.
            </p>
        </div>
    </div>
</template>


<script>
    export default {
        name: "About"
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
        width: 50%;
        align-items: center;
        margin: auto;
        margin-top: 1.25rem;
	}
</style>