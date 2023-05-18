<script>


import MonLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import NavLink from '../Components/NavLink.vue';


export default {
  props: ['genres'],
  components: {
	MonLayout,
	NavLink
  }
 
}


</script>
<style>
table {
	width: 90%;
}
th {
	height: 50px;
	}
th, td {
  padding: 10px;
  text-align: left;
}
</style>




<template>
	<MonLayout>
	<template v-slot:main>	

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
	</MonLayout>
</template>