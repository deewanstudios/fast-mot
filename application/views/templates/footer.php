 <div class="push"></div>
</section>
        <!-- Content Section Ends Here -->

</section>
    <!-- Wrapper Section Ends -->


            <!-- Footer Section Starts Here -->
<div class="divider-red"></div>
        <section class="container-fluid bg-black footer text-white  ">

            <section class="container col-xs-12">
             <!-- begining of footer column 1 -->
            <div class="col-lg-4 ">

            <h5><span class="green-color">Contact Us</span> </h5>
            <p>2-6 Lamb Lane<br>
                Hackney<br>
               London, E8 3PL<br>
               tel  : 020 8986 6040<br>
            </p>

            </div>
             <!-- end of footer column 1 -->

            <!-- begining of footer column 2 -->
             <div class="col-lg-4 hidden-xs">

            <h5>Quick Links</h5>
            <ul class="list-unstyled">
                 <? foreach ($navy AS $links):?>

    <li class="" style="display: inline-block; width: 49%;">
         <!-- border: 1px solid white; -->
    <a class="" href="<?=URL . urlencode(strtolower($links["name"]));?>"><?=strtoupper($links["name"]);?>

    </a>
    </li>

<?endforeach?>
            </ul>

            </div>
              <!-- end of footer column 2 -->


             <div class="col-lg-4 hidden-xs">
                <h5>Useful Links</h5>
            <ul class="list-unstyled">
                <li><a target="_blank" href="http://www.direct.gov.uk/en/Motoring/OwningAVehicle/Mot/DG_4022109">MOT Info</a></li>
                <!-- <li><a href="http://www.direct.gov.uk/en/Motoring/OwningAVehicle/Mot/DG_10020539">Check your current MOT status</a></li> -->
                <li><a target="_blank" href="https://www.vehicleenquiry.service.gov.uk">Check your current MOT status</a></li>
                <li><a target="_blank" href="http://www.dft.gov.uk/vosa/">VOSA</a></li>
                <li><a target="_blank" href="http://www.askmid.com/"> Vehicle insurance check </a> </li>
            </ul>
            </div>


        </section>

        <!-- Footer Section Ends Here -->
    </section>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyL2GGGBo7v7-dn7qQBKVQ9wek_NFUBYg"
  type="text/javascript"></script>


    <script src="<?php echo URL; ?>js/jquery-1.12.0.min.js"></script>
    <script src="<?php echo URL; ?>tinymce/tinymce.min.js"></script>
    <script src="<?php echo URL; ?>fancybox/fancybox.js"></script>




    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL . BR; ?>";
    </script>

    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>js/bootstrap.js"></script>
     <script src="<?php echo URL; ?>js/main.js"></script>
     <script type="text/javascript" src="<?php echo URL; ?>js/google-map.js"></script>
     <script type="text/javascript" src="<?php echo URL; ?>js/masonry.pkgd.js"></script>
     <script type="text/javascript" src="<?php echo URL; ?>js/imagesloaded.pkgd.js"></script>
     <script type="text/javascript" src="<?php echo URL; ?>js/masonry.js"></script>




</body>
</html>
