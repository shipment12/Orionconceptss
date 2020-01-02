<template>
<div>
  <br><br><br><br>
   <v-parallax
    height="300"
    src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
  >
  <v-row
      align="center"
      justify="center"
    >
      <v-col class="text-center" cols="12">
        <h1 >Advertiser Signup</h1>
       <h2><a href="#" target="_blank">SIGNUP</a></h2>
      </v-col>
    </v-row>
  </v-parallax>
  
  <div id="breadcrumbs">

    <v-breadcrumbs :items="items" large></v-breadcrumbs>
  </div>


  <div class="column col-md-8 col-sm-8 col-xs-12">
                       
            <p>We have the technical capacity and market expertise to find the most profitable destination for your traffic, while making the route safe and efficient. Our team of managers has the answers to any optimization puzzles coming up in your marketing campaigns</p>
           <router-link to ='/actualpublishersingup'>
             <h4><a href="#" >SIGNUP</a></h4>
           </router-link>
  </div>
</div>


    
</template>

<script>
export default {
     data: () => ({
      items: [
        {
          text: 'Home',
          disabled: false,
          href: '/',
        },
        {
          text: 'Advertiser',
          disabled: true,
          
        },
       
      ],
    }),
}
</script>

<style scoped>
a{
  color:brown
}

p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

#breadcrumbs{
  background-color: lightgrey;
}

contact-section .column {
    position: relative;
    margin-bottom: 30px;
}

@media (min-width: 992px){
  .col-md-8 {
    width: 66.66666667%;
}
}




</style>