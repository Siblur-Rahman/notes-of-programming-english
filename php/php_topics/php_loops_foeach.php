
<!-- common_header -->

<?php include('../../common_header.php') ?>
<style>
   .loop_active_6{
      background: #BB2966;
      color: white !important;
   }
   .loop_active{
      background: #786363;
   }
   .loop_block{
    display: block !important;
 }
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>
   <!-- Main Code -->
   <div id="main">
  
   <h1>PHP Foreach Loop</h1> <br>
   <h4>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</h4>

   <pre class="code_p">
   Syntax
      foreach ($array as $value) {
      code to be executed;
      }

      Example
      $colors = array("red", "green", "blue", "yellow");

      foreach ($colors as $value) {
      echo "$value <br>";
      }

      <h2>Code from freedoomIt class-30 Video(00:27:30)</h2> <br>
      
      $saason= array("Summer", "Winter", "Spring", "Autumn");

         //Access array foreach
         foreach($saason as $arr){
            echo "Saason is : $arr <br>";
         };
   </pre>

     
<!-- footer -->

<?php include('../../footer.php') ?>