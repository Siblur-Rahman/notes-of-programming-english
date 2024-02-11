
<!-- common_header -->

<style>
      .array_active_2{
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
<?php include('./php_topics_header.php') ?>
<!-- start main content -->
      <h1>PHP Indexed Arrays</h1>
      <h4>
      There are two ways to create indexed arrays:

      The index can be assigned automatically (index always starts at 0), like this:
       <br>
       </h4>
      <pre class="code_p">

      $cars = array("Volvo", "BMW", "Toyota");

      <p class="text-danger">or the index can be assigned manually:</p>

         $cars[0] = "Volvo";
         $cars[1] = "BMW";
         $cars[2] = "Toyota";
         
         Example
         $cars = array("Volvo", "BMW", "Toyota"); 
         echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
      </pre>
      <h2>Loop Through an Indexed Array</h2>
      <h4>To loop through and print all the values of an indexed array, you could use a for loop, like this:</h4>

      <pre class="code_p">
      Example
            
            $cars = array("Volvo", "BMW", "Toyota");
            $arrlength = count($cars);

            for($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "&lt;br&gt;";
            }

      </pre>

   <!--End Main Content -->
<!--common footer -->

<?php include('../../common_footer.php') ?>