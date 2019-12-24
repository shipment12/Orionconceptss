<template>
   <div>
       <toolbar></toolbar>
       <carousel></carousel>
       <ourcompany></ourcompany>
       <advertiser></advertiser>
       <meetourteam></meetourteam>
       <login></login>
       <footers></footers>
       
   </div>
</template>

<script>
import toolbar from './Toolbar';
import carousel from './Carousel';
import ourcompany from './Ourcompany';
import advertiser from './Advertiser';
import meetourteam from './MeetourTeam';
import login from './login/Login';
import footers from './Footer';

export default {
    components:{toolbar,  carousel, ourcompany, advertiser, meetourteam, footers, login},
    
}
</script>

<style>

</style>