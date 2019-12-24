<template>
<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
   <div class="container-fluid">
  <a class="navbar-brand" href="#">Orion Concepts</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Advertiser</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Publisher</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
<v-spacer></v-spacer>
       <li class="nav-item" push-left>
        <a class="nav-link" href="#">Login</a>
      </li>
     
     
    </ul>
    
  </div>
  </div>
</nav>
</template>

<script>
export default {
  mounted(){
        window.addEventListener('scroll', function(){
            let menuArea = document.getElementById('app');

            if(window.pageYOffset > 0){
                menuArea.classList.add('cus-nav');
                
            }else{
                menuArea.classList.remove('cus-nav')
            }
        })
        
    }
    
}
</script>

<style scoped>

#app.cus-nav nav{
    background: #070606;

}

#app.cus-nav a{
    color: rgb(229, 241, 234);
    
}

.navbar-nav a{
    font-family: poppins;
    font-size: 18px;
    text-transform: uppercase;
    font-weight:bold;
    
}

.navbar-light .navbar-brand{
    color: brown;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 2px;
}

navbar-light .navbar-nav .action > .nav-link, .navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .navbar-link.show, .navbar-light .navbar-nav .show > .nav-link {
    color: brown;
}

.navbar-light .navbar-nav .nav-link{
    color: brown
}
.navbar-nav{
    text-align: center;
}
.nav-link{
    padding: .2rem 1rem;
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
    color: rgb(236, 8, 8) !important;
}
.navbar-light:hover{
  color: rgb(26, 51, 63) !important;
}
.w-100{
    height: 100vh;
}

@media only screen and (max-width:767px){
    .navbar-nav.ml-auto{
        background: rgba(0,0,0,0.5)
    }
    .navbar-toggler{
        padding: 1px 5px;
        font-size: 18px;
        line-height: 0.3;
        background: #fff
    }
}



</style>