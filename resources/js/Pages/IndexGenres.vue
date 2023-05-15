<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import NavLink from '../Components/NavLink.vue';
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
		<tbody v-for="genre in genres">
			<tr>
				<td>{{ genre.id }}</td>
				<td>{{ genre.nom }}</td>
				<td>{{ genre.vernaculaire }}</td>
				<td>{{ genre.famille }}</td>
			</tr>

		</tbody>

	</table>

</template>