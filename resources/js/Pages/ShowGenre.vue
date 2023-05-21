<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';



export default {
  props: ['genre'],
  components: {
    AuthenticatedLayout,
},
}
</script>
<template>
	<AuthenticatedLayout>
		<template v-slot:main>
			<h1>Genre: {{ genre.nom }} </h1>
			<h2>Nom vernaculaire: {{ genre.vernaculaire }}</h2>
			<h2>Famille: {{ genre.famille }}</h2>
		</template>
	</AuthenticatedLayout>
</template>