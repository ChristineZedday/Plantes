<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import NavLink from '../Components/NavLink.vue';



export default {
  props: ['genre'],
  components: {
    AuthenticatedLayout,
	NavLink,
},
}
</script>
<template>
	<AuthenticatedLayout>
		<template v-slot:main>
			<h1>Genre: {{ genre.nom }} </h1>
			<h2>Nom vernaculaire: {{ genre.vernaculaire }}</h2>
			<h2>Famille: {{ genre.famille }}</h2>
			<NavLink :href="route('genre.edit')" >
                            Ajouter un genre
                        </NavLink>
		</template>
	</AuthenticatedLayout>
</template>