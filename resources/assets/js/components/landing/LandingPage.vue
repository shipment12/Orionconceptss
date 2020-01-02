<template>
<!--Carousel-->

     <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/6.jpg"  alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated rubberBand delay-1s">First slide label</h5>
          <p  class="animated slideInUp delay-0s">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          <p class="animated slideInUp delay-0s"><a href="#"> More Info</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/5.jpg" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated  slideInRight delay-1s">Second slide label</h5>
          <p class="animated  slideInLeft delay-1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="animated  slideInUp delay-1s"><a href="#"> More Info</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/8.jpg" >
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated rollIn delay-1s">Third slide label</h5>
          <p class="animated  rollIn delay-1s">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          <p class="animated  slideInUp delay-1s"><a href="#"> More Info</a></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




<!--OUR COMPANY-->


     <!-- services -->

     <div id="services" class="services">
         <div class="container">
             <h2>About Our Company</h2>
             <p>At Orion Concept, we employ various channels and modern technology in <br> 
                a network environment to provide outstanding media solutions to <br> advertising
                needs and promotions.</p>
             <div class="row">
                 <div class="col-lg-3 col-md-3"> 
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                     <h4>Certified Company</h4>
                     <p>We are a certified company with legal grounds to do business.</p>
                 </div>
                 <div class="col-lg-3 col-md-3">
                     <i class="fa fa-coffee"></i> 
                     <h4>2 Years Experienced</h4>
                     <p>At Orion concepts we are two years hands-on experienced.</p>
                     
                </div>
                 <div class="col-lg-3 col-md-3">
                      <i class="fa fa-slideshare"></i>
                     <h4>Inovative Work</h4>
                     <p>At orion we are inovative in our approach with different strategic methods.</p>
                 </div>
                 <div class="col-lg-3 col-md-3">
                     <i class="fa fa-university" aria-hidden="true"></i>
                     <h4>Consultancy</h4>
                     <p>We offer consultancy services advice to our clients</p>
                 </div>
             </div>
         </div>
     </div>


                                          <!--ADVERTISER-->

     <div id="advertisers" class="advertisers">
         <div class="container">
             <h2>Advertisers</h2><span class="colorborder"></span> <br>
             
             <div class="row">
                 <div class="col-lg-6 col-md-3"> 
                   
                    <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Zero tolerance for fraud. </p>
                     <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Promotional materials and result based strategies for high ROI.</p>
                      <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Dedicated and experienced publishers with proven result to bring about campaign success. </p>
                       <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Active account Managers to ensure quality assurance. </p>
                       <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Updated and accurate data statistics and report system. </p>
                 </div>
                 <div class="col-lg-6 col-md-3">
                    <img src="https://www.digitalconceptz.com/assets/images/free.jpg" alt="" class="img-responsive" width="400px" height="300px">
                     
                </div>
                
             </div>
         </div>
     </div>




   <!-- MEET OUR TEAM -->


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


/* Carousel */

.carousel-item{
    height: 100vh;
    min-height: 300px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    background-size: cover; 
}

.carousel-caption{
    bottom: 220px;
}

.carousel-caption h5{
    font-size:45px;
    text-transform:uppercase;
    letter-spacing:2px;
    margin-top:25px;
    font-family:morienda;
}

.carousel-caption p{
    width:60%;
    margin: auto;
    font-size: 18px;
    line-height: 1.9;
    font-family: poppins;
}

.carousel-caption a{
    text-transform: uppercase;
    background:#262626;
    padding: 10px 30px;
   display:inline-block;
    color: #fff;
    margin-top: 15px;
}




/* OUR COMPANY */

.services{
    padding:80px 0 80px;
    text-align: center;
}

.services h1,
.services h4{
    color: #4c4c4c;
    margin:20px 0 20px;
}
.services p{
    color: #737373;
    font-size: 14px;
    
}

.services i{
    height:80px;
    width: 80px;
    font-size:30px;
    padding: 25px;
    border-radius: 50%;
    background-color: #6699cc;
    color: #fff;

}
@media (max-width:768px) {
    .services{
        padding: 30px;
    }

    .carousel-item{
    height: 100vh;
    min-height: 300px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    background-size: cover; 
}
}





/* ADVERTISER */

.advertisers {
    padding:20px 0 20px;
    text-align: center
}
.advertisers h1,
.advertisers h4{
    color: #4c4c4c;
     margin:20px 0 20px;
    
}



.advertisers p{
    color: #737373;
    font-size: 14px;
    text-align:left
}

.advertisers .description{
    text-align:center
}

.advertisers i{
    height:30px;
    width: 30px;
    font-size:30px;
    

    color: rgb(231, 5, 5);

}

.colorborder {
    background: #ccc none repeat scroll 0 0;
    display: block;
    height: 1px;
    position: relative;
    width: 200px;
    margin: 0px auto;
    margin-top: 0px;
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




/* MEET OUR TEAM */

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