
<style>
.active_11{
   <?php include'../../active_1.php'?>
   }
   .gallery1 div, .gallery2 img{
      border: 3px solid white;
      width: 33.33%;
      text-align: center;
   }
   .gallery1 div:nth-child(1) img{
      opacity: 0.2;
   }
   .gallery1 div:nth-child(2) img{
      opacity: 0.5;
   }
   .gallery1 div:nth-child(3) img{
      opacity: 1.0;
   }
   .gallery2 img{
      opacity: 0.5;
   }
   .gallery2 img:hover {
      opacity: 1.0;
   }
</style>
<!-- css topics header -->
<?php include'./css_topics_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2 class="center">CSS Opacity / Transparency<span><a href="https://www.w3schools.com/css/css_image_transparency.asp" target="_blank"> Details</a></span></h2>
   <p>The <span class="itc">opacity</span> property specifies the opacity/transparency of an element.</p>
   <div class="gallery1 flex">
      <div>
      <img src="./images/011.opacity.jpg" alt="">
      <p>opacity 0.2</p>
      </div>
      <div>
      <img src="./images/011.opacity.jpg" alt="">
      <p>opacity 0.5</p>
      </div>
      <div>
      <img src="./images/011.opacity.jpg" alt="">
      <p>opacity 1.0</p>
      </div>
   </div>
   <br><br><br>
   <h3>Transparent Hover Effect</h3>
   <p>The <span class="itc">opacity</span>  property is often used together with the <span class="itc">:hover</span>  selector to change the opacity on mouse-over:</p>
   <div class="gallery2 flex">
      <img src="./images/011.opacity.jpg" alt="">
      <img src="./images/011.opacity.jpg" alt="">
      <img src="./images/011.opacity.jpg" alt="">
   </div>

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
