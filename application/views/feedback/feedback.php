<section class="container-fluid color1 col-xs-12">
    
    <!-- <img class="img-responsive " border="0" width="100%" height="460px" alt="<?=$ima[0]["img_name"]; ?>" src="<?=IMAGES.$ima[0]["img_path"]; ?>"/> -->
    
    <section class="container text-justify">
        
         <h1  class="title-h1" ><?=$content[0]["title"] ?>:</h1>
        
        <div class="page-content">
             <?=$content[0]["context"] ?>
             
        </div>
        
        <div class="" >
            
             <!-- style="" -->
                 <a aria-label="Leave feedeback" id="fbackButton" href="<?php echo URL; ?>feedback/feedbackform" class="btn btn-lg col-lg-2 margin-bottom fast-mot-button col-xs-12">
                Leave us feedeback
                </a>
            
            
             <a aria-label="Google feedeback" href="https://www.google.co.uk/?gfe_rd=cr&ei=ZdLNVYqKNciq8we-sJjwDQ&gws_rd=ssl#q=fast+mot&lrd=0x48761ce66154d98b:0xaf4c835c34eaa6a6,1" 
             class="btn btn-lg col-lg-2 margin-bottom fast-mot-button col-xs-12" target="_blank">
                GOOGLE feedeback
                </a>
        </div>
        
       
               
    </section>

    
<div class="divider-grey"></div>   
  
  <section id="feedbacksection" class="">
      
     	<?php
     	
     	    foreach($reviews AS $review):?>
     	    <div class="">
     	    <section class="box col-lg-3 col-md-4 col-sm-6 col-xs-12">
 
     	            
     	              <div id="" class="polaroid">

                <h2><?php echo ucfirst($review['name']) ?> said:</h2>
                
                <article><?php echo strip_tags(html_entity_decode($review['feedback'])) ?></article>
                
              <h3>On<time> <?php echo date('dS F Y', strtotime( $review['time'])) ?></time></h3>  
              
              <!-- . " @ ". date('H:i:s', strtotime( $review['time'])) -->
                </div>
     	       
     	       
     	    </section>
     	    
     	    </div>
     	   
     	    
     	    <?php endforeach; ?>
          
      
       <!-- <?php var_dump($reviews);
      ?> -->
 
  </section>
    
</section>
