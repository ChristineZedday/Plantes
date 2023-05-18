<script>

import NavLink from '@/Components/NavLink.vue';

import { defineComponent } from "vue";

export default defineComponent({
    name: "MonLayout",
});



</script>
<template>
	<v-layout>
	    <!-- Navigation Links -->
		<v-header class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
            </NavLink>
            <NavLink :href="route('genres')" :active="route('genres')">
                                    Genres
            </NavLink>
            <NavLink :href="route('genre.create')" :active="route('genre.create')">
                                    Ajouter un genre
            </NavLink>
           
        </v-header>
		<v-main><slot name="main">Ici ma page, SVP!</slot></v-main>
	</v-layout>	
</template>