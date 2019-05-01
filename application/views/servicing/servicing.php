<section class="container-fliud">
    
    <section id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        
        <!-- style="height: 460px; width: 100%" -->

        


        <!-- Wrapper for Slides -->
        <div class="carousel-inner" >
            <!-- role="listbox" -->

            <? $i = 1;
               
               

            foreach ($ima as $sliderImage):?>

            <div   class="<?
            if ($i == 1) {
                echo "item active";
            } else {
                echo "item";
            }
            ?>">

               <img class="img-responsive " border="0" width="100%" alt="<?=$sliderImage["img_name"]; ?>" src="<?=IMAGES . $sliderImage["img_path"]; ?>"/>
                
                
                <div class="carousel-caption hidden-xs">
                    <h2><?=$sliderImage["img_description"] ?></h2>
                </div>

                <? $i++; ?>
            </div>

            <? endforeach ?>

        </div>

         <!--Controls -->
       
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </section>
    
</section>

<!-- End of carousel
 -->
<div class="divider-grey"></div>

<!-- Service  Page Content Begins -->
<section class="container-fluid color1 padding-bottom-lg col-xs-12">
    
    <section class="container text-justify">
   
    <h1 class="title-h1"><?=$pageC[0]["title"] ?>:</h1>
    
    <article class="page-content">
        <?=$pageC[0]["context"] ?>
        
    </article>
    
    </section>
    
    
    <!-- Service Type List Begins -->
    <section class="container text-white">
        <!-- Basic Service Content Begins -->
        <div id="basicHolder" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            
            <span id="" class="btn btn-lg fast-mot-button btn-radius services-buttons">
<?= ucwords($serviceType[0]["service_name"]) . " from as little as: £" . ($serviceType[0]["service_cost"]) ?>
</span>
            
            <aside id="basic" class=" padding-md bg-black ">
        <!-- width48 -->
        <h2><?= ucwords($serviceType[0]["service_name"]) . " includes:" ?></h2>
         <h3>Checked Items</h3>
       <ul class="">
       <?php foreach ($basicChecklist as $basicList):?>
           <li><?=$basicList["item_name"] ?></li>
           <?php endforeach ?>
   </ul>
   
         <h3>Replaced Items</h3>
         
         <ul class="">
       <?php foreach ($basicRep as $replacedItem):?>
           <li><?=$replacedItem["item_name"] ?></li>
           <?php endforeach ?>
   </ul>

    </aside>
            
        </div>

            <!-- Basic Service Content Ends -->
            
            
            
                    <!-- Full Service Content Begins -->
                    
                    <div id="fullHolder" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        
                        <span class=" btn btn-lg fast-mot-button btn-radius services-buttons">
<?= ucwords($serviceType[1]["service_name"]) . " from as little as: £" . ($serviceType[1]["service_cost"]) ?>
</span>
                        
                        <aside id="full" class=" padding-lg bg-black">
        <h2><?= ucwords($serviceType[1]["service_name"]) . " includes:" ?></h2>
       <h3>Checked Items</h3>
       <ul class="">
       <?php foreach ($fullChecklist as $fullList):?>
           <li><?=$fullList["item_name"] ?></li>
           <?php endforeach ?>
   </ul>
   
    <h3>Replaced Items</h3>
    
    <ul>
        <?php foreach ($fullRep as $fullList):?>
           <li><?=$fullList["item_name"] ?></li>
           <?php endforeach ?>
        
    </ul>
   </aside>
                        
                    </div>
                    
                      
                    
                    
                    <!-- Full Service Content Ends -->
        
    </section>
    
        <!-- Service Type List Ends -->

</section>

<!-- Service  Page Content Ends -->
