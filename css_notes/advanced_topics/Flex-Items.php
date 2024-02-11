
<style>
.active_flexbox, .active_flex-items{
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
</style>
<!-- css topics header -->
<?php include'./css_advanced_topics_header.php'?>
<!-- Second Navbar -->
<div id="second-navbar">
   <a href="./flex_box-container.php" class="active_flexbox-container">CSS Flexbox & Flex Container</a>
   <a href="./Flex-Items.php" class="active_flex-items">CSS Flex Items</a>
   <a href="./Flex-responsive.php" class="active_Flex-responsive">CSS Flex Responsive</a>
</div>

<div id="main_content"><!-- Start Main Content -->

<h2>CSS Flex Items<span><a href="https://www.w3schools.com/css/css3_flexbox_items.asp" target="_blank"> Details</a></span></h2>
<h2>Child Elements (Items)</h2>
<h4>The direct child elements of a flex container automatically becomes flexible (flex) items.</h4>
<div class="flex-container exam">
      <div>div-1</div>
      <div>div-2</div>
      <div>div-3</div>
   </div>
   <h2>The flex item properties are:</h2>

      <p class="accordion">order: number|initial|inherit;</p>
      <div class="panel">
         <?php include'../css_properties/order.php'?>
      </div>
      <p class="accordion">flex-grow</p>
            <div class="panel">
         <?php include'../css_properties/flex-flow.php'?>
      </div>
      <p class="accordion">flex-shrink</p>
            <div class="panel">
         <?php include'../css_properties/flex-shrink.php'?>
      </div>
      <p class="accordion">flex-basis</p>
            <div class="panel">
         <?php include'../css_properties/flex-basis.php'?>
      </div>
      <p class="accordion">flex</p>
            <div class="panel">
         <?php include'../css_properties/flex.php'?>
      </div>
      <p class="accordion">align-self</p>
            <div class="panel">
         <?php include'../css_properties/align-self.php'?>
      </div>

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
