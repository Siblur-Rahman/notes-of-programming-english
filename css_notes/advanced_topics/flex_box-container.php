
<style>
.active_flexbox, .active_flexbox-container{
   <?php include'../../active_1.php'?>
   }
   .flex-container{
      background: blue;
      width: 90%;
      display: flex;
   }
   .flex-container div{
      width: 15%;
      margin: 10px;
      padding: 30px;
      background: white;
   }
   .exam-1{
      flex-direction: column;
   }
   .exam-2{
      flex-direction: column-reverse;
   }
   .exam-{
      flex-direction: ;
   }
</style>
<!-- css topics header -->
<?php include'./css_advanced_topics_header.php'?>
<div id="second-navbar">
   <a href="./flex_box-container.php" class="active_flexbox-container">CSS Flexbox & Flex Container</a>
   <a href="./Flex-Items.php" class="active_flex-items">CSS Flex Items</a>
   <a href="./Flex-responsive.php" class="active_Flex-responsive">CSS Flex Responsive</a>
</div>

<div id="main_content"><!-- Start Main Content -->

<h2>CSS Flexbox<span><a href="https://www.w3schools.com/css/css3_flexbox.asp" target="_blank"> Details</a></span></h2>
<div class="mark">The Flexible Box Layout Module, makes it easier to design flexible responsive layout structure without using float or positioning.</div>
   <h2>Flexbox Elements</h2>
   <h4>To start using the Flexbox model, you need to first define a flex container.:</h4>
   <div class="flex-container exam">
      <div>div-1</div>
      <div>div-2</div>
      <div>div-3</div>
   </div>
<h2>The flex container properties are:</h2>
   <p class="accordion">flex-direction</p>
   <div class="panel">
    <?php include'../css_properties/flex-direction.php'?>

      <!-- <div class="flex-container exam1">
         <div>div-1</div>
         <div>div-2</div>
         <div>div-3</div>
      </div> -->
   </div>
   
   <p class="accordion">flex-wrap</p>
   <div class="panel">
      <?php include'../css_properties/flex-wrap.php'?>
   </div>
   
   <p class="accordion">flex-flow</p>
   <div class="panel">
      <?php include'../css_properties/flex-flow.php'?>
      
   </div>
   
   <p class="accordion">justify content</p>
   <div class="panel">
      <?php include'../css_properties/justify_content.php'?>
  
   </div>

   <p class="accordion">align-items</p>
   <div class="panel">
      <?php include'../css_properties/align-items.php'?>
   
   </div>

   <p class="accordion">align-content</p>
   <div class="panel">
      <?php include'../css_properties/align-content.php'?>
   
   </div>
<button class="accordion">pocodor BD</button>
<div class="panel">
   <button><a href="">Click Me to Watch on youtube</a></button>
<video src="../../all_notes_videos/css/CSS Flexbox - CSS3 Tutorial For Beginners - Part 36.mp4" controls width="90%"></video>
</div>
 <!-- <p class="accordion"><span class="itc">Example:-1</span>The <span class="itc">column;</span> value stacks the flex items vertically (from top to bottom):</p>

 <p class="accordion"><span class="itc">example-2 :</span> The <span class="itc">column-reverse</span> value stacks the flex items vertically (but from bottom to top):</p>
 <p class="accordion">The <span class="itc">row</span> value stacks the flex items horizontally (from left to right):></p>
 <p class="accordion"><span class="itc">example- :</span><span class="itc"></span></p>
 <p class="accordion"><span class="itc">example- :</span><span class="itc"></span></p>

 <p class="accordion"><span class="itc">example- :</span><span class="itc"></span></p> -->
</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
