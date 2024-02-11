
<!-- common_header -->

<style>
      .variable_active{
      <?php include'../../active_1.php'?>
   }
      .variable_active_1{
      <?php include'../../active_2.php'?>
   }
   .variable_block{
    display: block !important;
 }
</style>
<?php include('./php_topics_header.php') ?>

   <!--Start Main Code -->
      <h1>PHP Variables</h1>
      <h4>
         Variables are "containers" for storing information. <br>
        In PHP, a variable starts with the $ sign, followed by the name of the variable:$txt = "Hello world!"; <br><br>
      </h4>
      <div class="mark">        
         Note: When you assign a text value to a variable, put quotes around the value. <br><br>

         Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.
      </div>
      <div class="mark itc">Think of variables as containers for storing data.</div>
      <?php 
      $v =200;
      echo $v;
      ?>
   <!--End Main Code -->
<!-- footer -->

<?php include('../../common_footer.php') ?>