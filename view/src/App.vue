<template>
  <nav>
    <img src="./assets/logo.svg" alt="">
    <div class="nav_items">
    <router-link to="/">Home</router-link>   
    <router-link to="/about">About</router-link> 
    <router-link to="/">Contact</router-link> 
    </div>
    <div class="nav_signin">
      <button class="btn" type="submit">Sign In</button>
    </div>
  </nav>
  <router-view/>
</template>

<style lang="scss">

  @import './assets/css/style.css';


</style>
