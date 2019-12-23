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
    // onMounted(){
    //     var wholePage = Dom.getElementbytag('div')
    //     on
    // }
}
</script>

<style>

</style>