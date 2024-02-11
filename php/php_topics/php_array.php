
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

   <!--Start Main Code -->
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
     
   <!--End Main Content Div on footer -->
<!-- footer -->

<?php include('../../common_footer.php') ?>