
<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

 export default {
	props: {
		genre: Object,
	},

	setup(props) {	
		
		const form =  useForm({
        	id: props.genre?.id,
        	nom: props.genre?.nom,
        	vernaculaire: props.genre?.vernaculaire,
        	famille: props.genre?.famille
    });
	
	function submit() {
      Inertia.put(route("genre.update",form.id), form);
    }

	return {form, submit};
	
	},

	components: {
	AuthenticatedLayout,
	
	
  },
  

 }
</script>

<style>
form {
	text-align: center;
	padding: 50px;
	margin: 50px;

}
.partform {
	padding: 25px;
	margin: 25px;
}

 
</style>

<template>
	<AuthenticatedLayout>
	<template v-slot:main>
	<Head title="Modifier un genre" />
	
		<form @submit.prevent="form.put(route('genre.update',form.id))">
          <div class="partform">
			<label for="nom" class="partform">Nom latin </label>
			<input v-model="form.nom" name="nom" type="text" />
		  </div>
		  <div class="partform">
			<label for="vernaculaire" class="partform">Nom vernaculaire</label>
			<input v-model="form.vernaculaire" name="vernaculaire" type="text" />
		  </div>   
		  <div class="partform">
			<label for="famille" class="partform">Famille</label>
			<input v-model="form.famille" name="famille" type="text" />
		  </div> 
		  
		  <button type = "submit" class="partform">
                      Valider          
                            </button>
                           
        </form>
	</template>
</AuthenticatedLayout>
</template>
