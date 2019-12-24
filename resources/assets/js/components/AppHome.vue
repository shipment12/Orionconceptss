<template>
   <div>
       <toolbar></toolbar>
       <carousel></carousel>
       <ourcompany></ourcompany>
       <advertiser></advertiser>
       <meetourteam></meetourteam>
       <footers></footers>
       
   </div>
</template>

<script>
import toolbar from './Toolbar';
import carousel from './Carousel';
import ourcompany from './Ourcompany';
import advertiser from './Advertiser';
import meetourteam from './MeetourTeam';
import footers from './Footer';

export default {
    components:{toolbar,  carousel, ourcompany, advertiser, meetourteam, footers},
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

<style>
#app.cus-nav{
    background: #262626;

}

#app.cus-nav a{
    color: #fff;
    
}
</style>