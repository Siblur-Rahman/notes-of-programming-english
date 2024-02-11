
<!-- common_header -->

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
<?php include('./php_topics_header.php') ?>
<!-- Start main Content -->
      <h1>PHP Multidimensional Arrays</h1>
      <br>
      <h4>We can store the data from the table above in a two-dimensional array, like this:</h4>

<pre class="code_p">
   Example
      $cars = array (
      array("Volvo",22,18),
      array("BMW",15,13),
      array("Saab",5,2),
      array("Land Rover",17,15)
      );

</pre>

<pre class="code_p">
<h2>Code from freedoomIt class-30 Video(00:27:30)</h2> <br>
   $employee = array(
               "Name" => "MS Rahman",
               "Email" => "msrahman048@gmail.com",
               "Age" => "26",
               "Gender" => "Male",
         );

         //Display Associative Arrays elements foreach Loop
         foreach($employee as $key => $element){
               echo $key." : ".$element;
               echo"<br>";
         }
</pre>

   <!--End main Content -->
<!--Common footer -->

<?php include('../../common_footer.php') ?>