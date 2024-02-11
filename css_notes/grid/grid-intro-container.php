
<style>
.active_intro{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- css topics header -->
<?php include'./css_grid_header.php'?>

<div id="main_content"><!-- Start Main Content -->

<h2>CSS Grid Layout Module<span><a href="https://www.w3schools.com/css/css_grid.asp" target="_blank"> Details</a></span></h2>
<button class="accordion">Learn with Shumit</button>
<div class="panel">
<a href="https://youtu.be/kEFIdXzQXYw?si=veK-iwlLZx6ioP9w" target="_blank">Click ME to Watch on Youtube</a>
<video src="../../all_notes_videos/css/CSS Grid complete Bangla (বাংলা) Tutorial - যেমন খুশি তেমন layout বানাও.mp4" controls width="90%"></video>
</div>
<button class="accordion">Pocodor BD</button>
<div class="panel">
<a href="" target="_blank">Click ME to Watch on Youtube</a>
<video src="../../all_notes_videos/css/CSS Grid - CSS3 Tutorial For Beginners - Part 37.mp4" controls width="90%"></video>
</div>
<h2>CSS Grid Container<span><a href="https://www.w3schools.com/css/css_grid_container.asp" target="_blank"> Details</a></span></h2>
<div class="mark">
   <p>To make an HTML element behave as a grid container, you have to set the display property to <span class="itc">grid</span> or <span class="itc">inline-grid</span>.</p>

   <p>Grid containers consist of grid items, placed inside <span class="itc">columns</span>  and <span class="itc">rows</span> .</p>
</div>
<div>
   <?php include'../css_properties/grid-template-columns.php'?>
   <?php include'../css_properties/grid-template-rows.php'?>
   <?php include'../css_properties/justify_content.php'?>
   <?php include'../css_properties/align-content.php'?>
</div>
      

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
