<section class="color1">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <section class="container">
        
         <h1  class="title-h1" >Feedback Confirmation:</h1>

    </section>
    
    <section class="container text-center text-lg">
        <div class="polaroid-big padding-xlg">
                     <p class="">
        <?= $outcome[0];?>
        
        <?= $outcome[1];?>
        
       </p>
       
       
       <?= $outcome[3]?>
       
       <span id="counter" class="alert text-md">
        <?= $outcome[2]?>
        </span>
        <span class="text-md">seconds</span>
        
        <div class="clearfix">
            
            <button class="btn btn-lg margin-top-lg fast-mot-button">
            <a class="" href="<? echo URL;?>"> Return to Fast Mot</a>
            <!-- <i class="padding-left-md fa fa-caret-right fa-2x"></i> -->
        </button>
        </div>
        </div>
  
        
    </section>

    </div>
</section>


<script type="text/javascript">
    
    
    function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)===3) {
        //local
        // location.href = "http://localhost:8888/FastMotGarrage/feedback";
        
        //testing remote
         // location.href = "http://fastmot.perfectcode.co.uk/feedback";
         
         //live
         location.href = "http://fastmot.com/feedback";
         
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
    
}
setInterval(function(){ countdown(); },1000);
    
    
</script>