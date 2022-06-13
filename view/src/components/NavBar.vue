<template>
    <nav class="nav_principale">
        <img src="../assets/logo.svg" alt="">
        <div class="nav_items" v-if="isLoggedIn">
        <router-link to="/">Home</router-link>   
        <router-link to="/CreneauPage">CreneauPage</router-link> 
        <router-link to="/AllAp">My Appointment</router-link> 
        </div>
        <!-- <div class="nav_signin">
        <button class="btn" type="submit">Sign In</button>
        </div> -->
        <div class="collapse navbar-collapse">
            
            <ul class="ml-auto navbar-nav" id="humberger">
            <li class="liste" v-if="isLoggedIn"> 
            <router-link to="/home" @click="logout()" class="btn"> Logout   </router-link>
            </li>
            <li class="liste" v-else> 
            <router-link to="/loging" class="btn"> Login  </router-link>
            </li>
        </ul>
        </div>
    </nav>
    <section class="nav_secondaire">
      <div id="mySidenav" class="sidenav">
  <a id="closeBtn" href="#" class="close">×</a>
      <img src="../assets/logo.svg" alt="">
  <ul v-if="isLoggedIn">
        <li><router-link to="/">Home</router-link>  </li> 
        <li><router-link to="/CreneauPage">CreneauPage</router-link> </li>
        <li><router-link to="/AllAp">My Appointment</router-link> </li>
  </ul>
          <div class="collapse navbar-collapse">
            
            <ul class="ml-auto navbar-nav" id="humberger">
            <li class="liste" v-if="isLoggedIn"> 
            <a href="/home" @click="logout()" class="btn"> Logout   </a>
            </li>
            <li class="liste" v-else> 
            <router-link to="/loging" class="btn"> Login  </router-link>
            </li>
        </ul>
        </div>
</div>

<a href="#" id="openBtn">
  <span class="burger-icon">
    <span></span>
    <span></span>
    <span></span>
  </span>
</a>
    </section>
</template>


<script>
export default {
    name: 'NavBar',
    data() {
      return {
        isLoggedIn: localStorage.getItem('id') ?true : false
      }
    },
    beforecreated() {
      this.isLoggedIn = localStorage.getItem('id') ? true : false
    },
    
methods:{
  logout(){
    localStorage.removeItem('id')
                console.log(typeof localStorage['id']);
                if(!localStorage['id']){
                this.ifLogin=false;
    }
    // console.log(this.ifLogin)
    this.$router.push('/')
  },

},
    mounted(){
var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}

    }
}
</script>

<style>
/* Sidenav menu */
img{
  width: 20%;
}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: -250px;
  background-color: #e8e8e8;
  padding-top: 60px;
  transition: left 0.5s ease;
}

/* Sidenav menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #111;
}

.sidenav ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

/* Active class */
.sidenav.active {
  left: 0;
}

/* Close btn */
.sidenav .close {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

/* Icône burger */
.burger-icon span {
  display: block;
  width: 35px;
  height: 5px;
  background-color: black;
  margin: 6px 0;
}


</style>