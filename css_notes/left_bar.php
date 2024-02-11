<style>
   .css_active{
      <?php include'../../active_1.php'?>
   }
   .block_button{
      display: block;
      width: 100%;
   }
</style>
<div id="left_bar">
   <h5 class="all-center100">CSS Notes</h5>
      <ul>
         <!-- CSS Topics -->
      <?php include'../css_topics/css_topics_left_bar.php'?>

         <!-- CSS Advanced Topics -->
      <?php include'../advanced_topics/css_advanced_topics_left_bar.php'?>

         <!-- CSS Function -->
         <li ><a href="../function/css-function.php" class="function_active">CSS Function</a></li>
         <!-- CSS Properties -->
         <li ><a href="../properties/css_properties.php" class="properties_active">CSS Properties</a></li>
         <!-- CSS grid -->
         <?php include'../transforms/css_transforms_left_bar.php'?>
         <!-- CSS grid -->
         <?php include'../grid/css_grid_left_bar.php'?>
         <!-- CSS responsive -->
         <?php include'../responsive/css_responsive_left_bar.php'?>
         <!-- Some Created Components -->
         <li class="active_components"><a href="../components_own_created/index.php">Some Created Components</a></li>
         <!-- Some Created Class -->
      <li class="some_class_active"><a href="../created _classes_by_me/created_classes.php">Some Created Classes</a></li>
      <li><a href="https://www.youtube.com/playlist?list=PL_XxuZqN0xVBPhR5bjBIKyBjTo8pK99gN" target="_blank">Web Design Master Class with Nayem</a></li> 
         <!-- 
            <li class="_active"><a href="">Topic</a></li>
            <ul class=" navbar-nav topics_dropdown">                  
                     <li class="_active_1"><a href="">1.</a></li>
                     <li class="_active_2"><a href="">2.</a></li>
            </ul> 
         -->
      </ul>
</div>