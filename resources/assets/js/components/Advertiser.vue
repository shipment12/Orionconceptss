<template>
   <div> 
       
       
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

     </div>
   
</template>

<script>
export default {
    
}
</script>

<style scoped>

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
</style>