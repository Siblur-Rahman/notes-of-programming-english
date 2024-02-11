
<style>
   .if_else_active_active{
      <?php include'../../active_1.php'?>
   }
   .if_else_active_2{
      <?php include'../../active_1.php'?>
   }
   .if_else_block{
      display: block !important;
   }
</style>

   <?php include('./php_topics_header.php') ?>

   <!-- Main Code -->
   <h1>PHP - The <span class="text-danger">if...else</span> Statement</h1>

   The <span class="text-danger">if...else</span> executes some code if a condition is true and another code if that condition is false.
   <br><br>
      <pre class="code_p">
      Syntax
            if (condition) {
            code to be executed if condition is true;
            }
      
      Example
            $nam="Md Siblur Rahman";
            
            $age=26;

            if($nam=="Md Siblur Rahman"){
                  echo "$nam, You are welcome to my Chanel ";
            }
      </pre>
<!-- footer -->

<?php include('../../common_footer.php') ?>