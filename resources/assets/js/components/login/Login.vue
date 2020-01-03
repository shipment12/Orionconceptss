<template>
<div>
<br> <br> <br> <br>

  <v-card
    class="mx-auto"
    max-width="300"
  >
    

    <v-card-subtitle class="pb-0" justify="center"> <h2> Orion Concepts  </h2></v-card-subtitle>

    <v-card-text class="text--primary">
      <div id="app">
  <v-app id="inspire">
    <form @submit.prevent="login">
     
      <v-text-field
      
        label="E-mail"
        required
        v-model="form.email"
      ></v-text-field>
      <v-text-field
            
            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
            
            :type="show1 ? 'text' : 'password'"
            name="input-10-1"
            label="Normal with hint text"
            hint="At least 8 characters"
            v-model="form.password"
            counter
            @click:append="show1 = !show1"
          ></v-text-field>

           <button type="submit" id="login-button" class="btn btn-primary btn-block btn-flat">Login</button> <hr>
      <v-checkbox

      
       
        
        label="Remember me"
        required
       
      ></v-checkbox>

   <div class="form-group pull-right">
         <a class="text-center" href="/index.php?r=site%2Frequest-password-reset">Forgot Password?</a>                      
   </div>
   <hr>

   <div class="text-center" id="signup-btn">

       <router-link to='/advertiser'>
    <v-btn
      class="ma-2"
      
      color="success"
     
    >
      Advertiser
      <template v-slot:loader>
        <span>Loading...</span>
      </template>
    </v-btn>
       </router-link>

<router-link to='/publisher'>
    <v-btn
      class="ma-2"
     
      color="info"
     
    >Publisher 
      <template v-slot:loader>
        <span class="custom-loader">
          <v-icon light>cached</v-icon>
        </span>
      </template>
    </v-btn>
    </router-link>

   </div>

    </form>
  </v-app>
</div>
    </v-card-text>

    
  </v-card>
<br>
  <hr>
</div>

    
</template>

<script>
export default {
     data () {
      return {
        show1: false,
        show2: true,
        show3: false,
        show4: false,
        password: 'Password',
        rules: {
          required: value => !!value || 'Required.',
          min: v => v.length >= 8 || 'Min 8 characters',
          emailMatch: () => ('The email and password you entered don\'t match'),
        },

        form:{
          email:null,
          password:null
        },

        login(){
          axios.post('/api/auth/login', this.form)
          .then(res=>console.log(res.data))
          .catch(error=>console.log(error.response.data))
        }
      }
    },
    
}
</script>

<style scoped>
h2{
    text-justify: center;
}

#signup-btn{
  display: flex;
}
</style>