
<template>
<div>
    <NavBar/>

    <div class="app">
        <section>
            <h1 class="">Appointments</h1>
        </section>
    <form form class="form" @submit.prevent="Addapp">
                <section class="app_items">
                <div class="app_items_chiled">
                <input id="dt" type="date" v-model="date" name="date" class="form-control" placeholder="Date" required>

                <select name="time" id="time" v-model="time" required>
                    <option value="" disabled selected hidden>Choose the time that suits you</option>
                    <option value="09:00">09:00</option>
                    <option value="09:30">09:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                </select>
                </div>
                <div class="app_items_button">
                    <button class="" type="submit">let's reserve </button>
                </div>
            </section>
    </form>
    </div>
</div>


</template>

<script>
import NavBar from '../components/NavBar.vue'

import axios from "axios";
// import AllAp from "../components/AllAppointment.vue";
// import { VueDatePicker } from '@mathieustan/vue-datepicker';
import '@mathieustan/vue-datepicker/dist/vue-datepicker.min.css';

export default {
    name: 'CreneauPage',
    components: {
    NavBar,
  },
data()
    {
        return{
        date : '',
        time : '',
        id_client : '',
        }
    },
mounted() {
    var date = new Date();
        var tdate = date.getDate();
        var tmonth = date.getMonth() +1;
        if(tdate < 10){
            tdate = '0' + tdate ;
        }
        if(tmonth < 10){
            tmonth = '0' + tmonth;
        }
        var year = date.getUTCFullYear();
        var maxMont = 0 + +tmonth + +1;
        var tomorrow = tdate + 1;
        if(maxMont < 10){
            maxMont = '0' + maxMont;
        }
        var minDate = year + '-' + tmonth + '-' + tomorrow;
        var maxDate = year + '-' + maxMont + '-' + tdate;
        document.getElementById('dt').setAttribute('min', minDate);
        document.getElementById('dt').setAttribute('max', maxDate);
        console.log(maxDate);

},
    methods :{
         Addapp(){
        axios.post("http://localhost/GestionRendez-vous/MVC/AppointmentController/addApp",{
            date: this.date,
            time: this.time,
            id_client: (localStorage.id),
            // mounted() {
            // if(localStorage.id) this.id_client = localStorage.id;
            // },
            
            })
        .then((response) => {
                const data = response.data;
                this.app.push(data);
                this.date = "";
                this.time = "";
                this.id_client = (localStorage.id);
        }).then(() => {
            this.$router.go();
        });

        }
    }
    } 

</script>
