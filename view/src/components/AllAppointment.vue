<template>
<div>
<NavBar/>
<section class="rend_parent" v-for="a in this.app" :key="a">
    <div class="rend" >
        <ul class="rend_itemes">
            <li>Nom : </li>
            <li>Prenom :</li>
            <li>Date :</li>
            <li>Heure :</li>
        </ul>
        <ul class="rend_itemes_info">
            <li>{{a.nom}}</li>
            <li>{{a.prenom}}</li>
            <li>{{a.date}}</li>
            <li>{{a.time}}</li>
        </ul>
    </div>
    <form action="" >
            <button button @click=" (a.id)" class="btn" type="submit">Cancel</button>
    </form>
    </section>
    </div>
</template>

<script>
import NavBar from '../components/NavBar.vue'

import axios from "axios";
export default {
    name: "AllAp",
    components: {
    NavBar,
  },
    data()
    {
        return{
            app : [],
            // nom : '',
            // prenom : '',
            // date : '',
            // time : '',
        }
    },

    methods:{
        async deleteApp(id){
            await  axios.delete(`http://localhost/GestionRendez-vous/MVC/AppointmentController/deleteApp/${id}`)
        .then(response=>{
            console.log(response.data);
        });
            this.$router.go();
        }
    },

   async mounted() {

        await axios.get(`http://localhost/GestionRendez-vous/MVC/AppointmentController/getAll/${localStorage["id"]}`)
        .then(response => {
            const data = response.data;
            this.app = data;
            console.log(this.app);
        });


        },
}
    
    
</script>