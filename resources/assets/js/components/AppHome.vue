<template>
   <div>
       <toolbar></toolbar>
       
       <router-view></router-view>
       <footers></footers>
       
   </div>
</template>

<script>
import toolbar from './Toolbar';
import footers from './Footer';
import login from './login/Login';
import Publishersignup from './login/PublisherSignup';
import ActualPublisherSingUp from './login/pubSignup/ActualPublisherSingUp';
import advertisersignup from './login/advertiser/AdvertiserSignup';

export default {
    components:{toolbar,  footers, login, Publishersignup, ActualPublisherSingUp, advertisersignup},
    
}
</script>

<style>

</style>