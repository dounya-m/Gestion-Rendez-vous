<template>
<section>
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
</section>
</template>

<script>
export default {
    name: 'LoginForm',
}
</script>