
<!-- common_header -->

<?php include('../../common_header.php') ?>
<style>
      .array_active_1{
      background: #BB2966;
      color: white !important;
   }
     .array_active{
      background: #786363;
   }
   .array_block{
    display: block !important;
 }
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>
   <!--Start Main Code -->
   <div id="main">
      <h1>PHP Array</h1>
      <h4>An array stores multiple values in one single variable.</h4>
      <h3>What is an Array?</h3>
      <h4>An array is a special variable, which can hold more than one value at a time.
      </h4>

      <pre class="code_p">
         Example
            $cars = array("Volvo", "BMW", "Toyota"); 
               echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
               echo "<br>";
               var_dump($cars);
      </pre>
   </div>
   <!--End Main Code -->
<!-- footer -->

<?php include('../../footer.php') ?>