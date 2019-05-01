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
            
            <!-- max-height="460px" -->

               <img class="img-responsive " border="0" width="100%"  alt="<?=$sliderImage["img_name"]; ?>" src="<?=IMAGES.$sliderImage["img_path"]; ?>"/>
                
                
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
<div class="divider-grey"></div>

<section class="container-fluid color1 col-xs-12">
    
    <section class="container text-justify">
   
    <h1 class="title-h1">
        <?=$pageC[0]["title"]?>:
        </h1>
    
    <div class="page-content">
        
        <?=$pageC[0]["context"]?>
        
    </div>
   
</section>
    
</section>

