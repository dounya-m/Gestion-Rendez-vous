
<template>
  <section class="home">
    <div class="header">
      <h1>Dental Care<br>For a Healthy Smile</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur</p>
    </div>
    <div class="body">
      <h2>Our Quakufied Teams is Ready To Help You !</h2>
        <div class="body_items">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur quas vel sint commodi repudiandae consequuntur Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur</p>
      <img src="../assets/images/doctor.webp" alt="">
        </div>
    </div>

            <form class="form" v-on:submit.prevent="Add()">
            <div class="form_title">
              <h2 class="text-center ">Enter your information to make an appointment</h2>
            </div>
            <div class="form">
              <h3>who are you</h3>
                <div class="form_info">
              <label for="name">Your last name</label>
              <input type="text" placeholder="enter your name.." v-model="nom">
              <label for="name">Your first name</label>
              <input type="text" placeholder="enter your firstname" v-model="prenom">


              <label for="name">Age:</label>
              <input type="number" placeholder="enter your age" v-model="age">

              <label for="name">Date:</label>
              <input type="date" placeholder="" v-model="date">

              <label for="name">Email:</label>
              <input type="email" placeholder="email.." v-model="email">

              <label for="phone">Phone number:</label>
              <input type="tel" id="phone" name="phone" v-model="phone" placeholder="phone number">
              <div class="forme_button">
                <button button class="btn" type="submit">Sign Up Now</button>
                <button button class="btn" type="submit">Get Login</button>

              </div>
                </div>

            </div>

        </form>

    <HelloWorld msg="Welcome to Your Vue.js App"/>
    </section>
</template>


<script>
// @ is an alias to /src

// import FooterProject from 'components/FooterProject.vue'

// import FooterProject from '@/components/FooterProject.vue'

import axios from "axios";
export default {
  name: 'HomeView',
  data()
  {
    return{
      nom : '',
      prenom : '',
      age : '',
      date : '',
      email : '',
      phone : ''
    }
  },
  // components: {
  //   HelloWorld
  // },
      methods :{
        Add(){
        axios.post("http://localhost/GestionRendez-vous/MVC/clientController/addClient/",JSON.stringify({"nom": this.nom,
    "prenom": this.prenom,
    "age":this.age,
    "email": this.email,
    "date": this.date,
    "phone": this.phone}))
        .then(Response=>{
            console.log(Response.status);
            console.log(Response.data);
        })
        }
    }
}
</script>


