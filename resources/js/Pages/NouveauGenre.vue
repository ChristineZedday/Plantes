<script>
import MonLayout from '@/Layouts/MonLayout.vue';
import { Head } from "@inertiajs/inertia-vue3";

import { useForm } from "@inertiajs/inertia-vue3";

 export default {
	components: {
	MonLayout,
	
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

<template>
	<MonLayout>
	<template v-slot:main>
	<Head title="Ajouter un genre" />
	
		<form @submit.prevent="submit">
          <div>
			<label for="nom">Nom latin</label>
			<input v-model="form.nom" name="nom" type="text"/>
		  </div>
		  <div>
			<label for="vernaculaire">Nom vernaculaire</label>
			<input v-model="form.vernaculaire" name="vernaculaire" type="text"/>
		  </div>   
		  <div>
			<label for="famille">Famille</label>
			<input v-model="form.famille" name="famille" type="text"/>
		  </div>   
		  <button type = "submit">
                                Valider
                            </button>
                           
        </form>
	</template>
</MonLayout>
</template>
