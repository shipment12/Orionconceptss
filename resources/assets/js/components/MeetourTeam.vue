<template>

    <div>
        <hr>

         <div id="teams" class="teams">
         <div class="container">
             <h2>Meet Our Team</h2><span class="colorborder"></span> <br>
            
             <p>Our hard working and dedicated teams</p>
             <div class="row">
                 <div class="col-lg-4 col-md-4"> 
                   
                    <div class="packages">
                      <v-hover v-slot:default="{ hover }">
    <v-card
      class="mx-auto"
      color="grey lighten-4"
      max-width="600"
    >
      <v-img
        :aspect-ratio="16/9"
        src="https://cdn.vuetifyjs.com/images/cards/kitchen.png"
      >
        <v-expand-transition>
          <div
            v-if="hover"
            class="d-flex transition-fast-in-fast-out orange darken-2 v-card--reveal display-3 white--text"
            style="height: 100%;"
          >
          <a href="#">  <i  class="fa fa-facebook" aria-hidden="true"></i></a>
          </div>
        </v-expand-transition>
      </v-img>
    
      <v-card-text class="pt-6" style="position: relative;" >   
       
        <div class="font-weight-light grey--text title mb-2">Mr Chikezie</div>
        <h3 class="display-1 font-weight-light orange--text mb-2">Business Development Manager</h3>
        <div class="font-weight-light title mb-2"> chikezie@kenzo.com </div>

      </v-card-text>
    </v-card>
  </v-hover>
                    </div>
                 </div>

                  <div class="col-lg-4 col-md-4"> 
                   
                    <div class="packages">
                        <v-hover v-slot:default="{ hover }">
    <v-card
      class="mx-auto"
      color="grey lighten-4"
      max-width="600"
    >
      <v-img
        :aspect-ratio="16/9"
        src="https://cdn.vuetifyjs.com/images/cards/kitchen.png"
      >
        <v-expand-transition>
          <div
            v-if="hover"
            class="d-flex transition-fast-in-fast-out orange darken-2 v-card--reveal display-3 white--text"
            style="height: 100%;"
          >
            <a href="#">  <i  class="fa fa-facebook" aria-hidden="true"></i></a>
            
            
          </div>
        </v-expand-transition>
      </v-img>
    
      <v-card-text class="pt-6" style="position: relative;" >   
       
        <div class="font-weight-light grey--text title mb-2">Mr Chikezie</div>
        <h3 class="display-1 font-weight-light orange--text mb-2">Business Development Manager</h3>
        <div class="font-weight-light title mb-2"> chikezie@kenzo.com </div>

      </v-card-text>
    </v-card>
  </v-hover>
                    </div>
                 </div>

                  <div class="col-lg-4 col-md-4"> 
                   
                    <div class="packages">
                        <v-hover v-slot:default="{ hover }">
    <v-card
      class="mx-auto"
      color="grey lighten-4"
      max-width="600"
    >
      <v-img
        :aspect-ratio="16/9"
        src="https://cdn.vuetifyjs.com/images/cards/kitchen.png"
      >
        <v-expand-transition>
          <div
            v-if="hover"
            class="d-flex transition-fast-in-fast-out orange darken-2 v-card--reveal display-3 white--text"
            style="height: 100%;"
          >
             <a href="#">  <i  class="fa fa-facebook" aria-hidden="true"></i></a>
          </div>
        </v-expand-transition>
      </v-img>
    
      <v-card-text class="pt-6" style="position: relative;" >   
       
        <div class="font-weight-light grey--text title mb-2">Mr Chikezie</div>
        <h3 class="display-1 font-weight-light orange--text mb-2">Business Development Manager</h3>
        <div class="font-weight-light title mb-2"> chikezie@kenzo.com </div>

      </v-card-text>
    </v-card>
  </v-hover>
                    </div>
                 </div>

                  
                 
                
             </div>
         </div>
     </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>

.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: .8;
  position: absolute;
  width: 100%;
}

.teams p{
    text-align: center
}

.teams {
    text-align: center
}


.colorborder {
    background: #ccc none repeat scroll 0 0;
    display: block;
    height: 1px;
    position: relative;
    width: 200px;
    margin: 2px auto;
}

.colorborder::after {
    background: #ce1318 none repeat scroll 0 0;
    content: "";
    display: inline-block;
    height: 3px;
    left: 50%;
    position: absolute;
    transform: translate(-50%);
    width: 60px;
    top: -1px;
}
</style>

