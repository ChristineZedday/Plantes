<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head } from "@inertiajs/inertia-vue3";

import { useForm } from "@inertiajs/inertia-vue3";

 export default {
	components: {
	AuthenticatedLayout,
	
	
  },

    setup() {		
		const form =  useForm({
        	nom: '',
        	vernaculaire: '',
        	famille: '',
    }),
	submit = () => {
    form.post(route('genre.store'));
};
	return {
	form, 
	}
	}
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
	<Head title="Ajouter un genre" />
	
		<form @submit.prevent="form.post(route('genre.store'))">
          <div class="partform">
			<label for="nom" class="partform">Nom latin</label>
			<input v-model="form.nom" name="nom" type="text"/>
		  </div>
		  <div class="partform">
			<label for="vernaculaire" class="partform">Nom vernaculaire</label>
			<input v-model="form.vernaculaire" name="vernaculaire" type="text"/>
		  </div>   
		  <div class="partform">
			<label for="famille" class="partform">Famille</label>
			<input v-model="form.famille" name="famille" type="text"/>
		  </div> 
		  
		  <button type = "submit" class="partform">
                      Valider          
                            </button>
                           
        </form>
	</template>
</AuthenticatedLayout>
</template>
