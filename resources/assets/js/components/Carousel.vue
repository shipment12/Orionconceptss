<template>
    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/6.jpg" class="d-block w-100" alt="...">
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
        <img src="img/8.jpg" class="d-block w-100" alt="...">
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
</div>
</template>

<script>
export default {
    
}
</script>

<style>
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


</style>