
<template>
    <div class="app">
        <section>
            <h1 class="">Appointments</h1>
        </section>
    <form form class="form" @submit.prevent="Addapp">
                <section class="app_items">
                <div class="app_items_chiled">
                <input id="dt" type="date" v-model="date" name="date" class="form-control" placeholder="Date" required>

                <select name="time" id="time" v-model="time">
                    <option value="">Choose the time that suits you</option>
                    <option value="9h00">9h00</option>
                    <option value="9h30">9h30</option>
                    <option value="10h00">10h00</option>
                    <option value="10h30">10h30</option>
                    <option value="11h00">11h00</option>
                    <option value="11h30">11h30</option>
                    <option value="12h00">12h00</option>
                    <option value="12h30">12h30</option>
                    <option value="13h00">13h00</option>
                    <option value="13h30">13h30</option>
                </select>
                </div>
                <div class="app_items_button">
                    <button class="" type="submit">let's reserve </button>
                </div>
            </section>

    </form>
    </div>
</template>

<script>
import axios from "axios";
// import { VueDatePicker } from '@mathieustan/vue-datepicker';
import '@mathieustan/vue-datepicker/dist/vue-datepicker.min.css';

export default {
    name: 'CreneauPage',

        data()
    {
        return{
        date : '',
        time : '',
        id_client : '',
        }
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
        });
            {
                this.$router.push('/AllAp');
            }
        }
    }
}
        // var date = new Date();
        // var tdate = date.getDate();
        // var tmonth = date.getMonth() +1;
        // if(tdate < 10){
        //     tdate = '0' + tdate ;
        // }
        // if(tmonth < 10){
        //     tmonth = '0' + tmonth;
        // }
        // var year = date.getUTCFullYear();
        // var maxMont = 0 + +tmonth + +1;
        // var tomorrow = tdate + 1;
        // if(maxMont < 10){
        //     maxMont = '0' + maxMont;
        // }
        // var minDate = year + '-' + tmonth + '-' + tomorrow;
        // var maxDate = year + '-' + maxMont + '-' + tdate;
        // document.getElementById('current_date').setAttribute('min', minDate);
        // document.getElementById('current_date').setAttribute('max', maxDate);
        // console.log(maxDate);
</script>
