<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import NavLink from '../Components/NavLink.vue';
</script>


<template>
	  <Head title="Genres" />
<NavLink :href="route('dashboard')" :active="route().current('dashboard')">Dashboard</NavLink>

	<div>Ici viendra la table des genres et familles</div>

</template>