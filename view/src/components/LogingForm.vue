<template>
<div>
<NavBar/>
<section>
        <form class="form" v-on:submit.prevent="login()">

            <div class="form_title">
              <h2 class="text-center ">Enter your Id to Make an Appointment</h2>
            </div>
            <div class="form">
              <h3>Happy to see you</h3>
                <div class="form_info">
              <label for="name">Your Id</label>
              <input type="text" placeholder="enter your id.." v-model="id">

              <div class="forme_button">
                <button button class="btn" type="submit">Get Login</button>
              </div>
                </div>
            </div>

        </form>
</section>
</div>
</template>

<script>
import NavBar from '../components/NavBar.vue'

import axios from 'axios';
export default {
    name: 'LoginForm',
    components: {
    NavBar,
  },
data()
  {
      return{
        id : ''
      }

  },
      methods :{
        login()
        {
          const formData= new FormData();
          formData.append('id',this.id);
          axios.post('http://localhost/GestionRendez-vous/MVC/clientController/getClient/',formData)
          .then(response => {
            console.log(response.data);
            if(response.data.length > 0)
            {
              this.$router.push('/CreneauPage');
              localStorage.setItem('id',this.id);
            }
            else
            {
              alert('id not found');
            }
          })
        }
    }

}



























// data()
//   {
//       return{
//         id : ''
//       }

//   },
//       methods :{
//         login()
//         {
//           const formData= new FormData();
//           formData.append('id',this.id);
//           axios.post('http://localhost/GestionRendez-vous/MVC/clientController/getClient/',formData)
//           .then(response => {
//             console.log(response.data);
//             if(response.data.length > 0)
//             {
//               this.$router.push('/CreneauPage');
//               localStorage.setItem('id',this.id);
//             }
//             else
//             {
//               alert('id not found');
//             }
//           })
//         }
//     }
</script>      
// 