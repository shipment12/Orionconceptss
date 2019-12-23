<template>
<div>
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

</div>
   
</template>

<script>
export default {
    
}
</script>

<style scoped>

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
}

</style>