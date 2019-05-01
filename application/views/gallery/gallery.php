<section class="container-fluid color1">
    
    <section class="container margin-top-lg ">
   
    <!-- <h1 class="title-h1"><?=$pageC[0]["title"]?>:</h1> -->
    <?php
   foreach ($galleryImages As $images):?>

               <a  class="col-lg-3 col-xs-12 col-sm-12 thumbnail hvr-grow gallPolaroid" rel="group"  style="border-radius: 0px; border: none; background-color: initial; margin-bottom: 0px; "href="<?=IMAGES.$images["img_path"]?>"title="<?=$images["img_name"]?>">

                    <img class="img-responsive gallleryThumbs" src="<?=IMAGES.$images["img_path"] ?>" alt"<?=$images["img_name"]?>" />
               </a>

                    <?php endforeach; ?>
        
    </div>
   
</section>
</section>