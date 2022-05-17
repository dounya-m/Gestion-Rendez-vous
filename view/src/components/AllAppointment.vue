<template>
    <div>
        <p>{{}}</p>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "AllAp",
    data()
    {
        return{
            app : [],
            nom : '',
            prenom : '',
            date : '',
            time : '',
        }
    },
    mounted() {
        axios.get('http://localhost/GestionRendez-vous/MVC/AppointmentController/getAll/')
        .then(function (response) {
            this.app = response.data
        }.bind(this)) //You need to put .bind(this) to keep the scoped variable
        .catch(function (error) {
            console.log(error);
        });
    }

}
</script>