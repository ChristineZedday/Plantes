<script>


import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import NavLink from '../Components/NavLink.vue';


export default {
  props: ['genres'],
 
}


</script>




<template>
	  <Head title="Genres" />
<NavLink :href="route('dashboard')" :active="route().current('dashboard')">Dashboard</NavLink>

	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Nom latin</th>
				<th>Nom vernaculaire</th>
				<th>Famille</th>
			</tr>


		</thead>
		<tbody>
			<tr v-for="genre in genres" v-bind:key = "genre.id">
				<td>{{ genre.id }}</td>
				<td>{{ genre.nom }}</td>
				<td>{{ genre.vernaculaire }}</td>
				<td>{{ genre.famille }}</td>
			</tr>

		</tbody>

	</table>

</template>