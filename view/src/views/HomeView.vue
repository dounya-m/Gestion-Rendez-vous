
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

            <form class="form" action="">
            <div class="form_title">
              <h2 class="text-center ">Enter your information to make an appointment</h2>
            </div>
            <div class="form">
              <h3>who are you</h3>
                <div class="form_info">
              <label for="name">Your name</label>
              <input type="text" placeholder="enter your name..">
              <label for="name">Your first name</label>
              <input type="text" placeholder="enter your firstname">


              <label for="name">Age:</label>
              <input type="number" placeholder="enter your age">

              <label for="name">Date:</label>
              <input type="date" placeholder="">

              <label for="name">Email:</label>
              <input type="email" placeholder="email..">

              <label for="phone">Phone number:</label>
              <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="phone number">
              <div class="forme_button">
                <button>Sign Up Now</button>
                <button>Get Login</button>

              </div>
                </div>

            </div>

        </form>

    <HelloWorld msg="Welcome to Your Vue.js App"/>
    </section>
</template>


<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
export default {
  name: 'HomeView',
  components: {
    HelloWorld
  }
}
</script>


