
<!-- common_header -->

<?php include('../../common_header.php') ?>
<style>
     .if_else_active{
      <?php include'../../active_1.php'?>
   }
   .if_else_active_1{
      <?php include'../../active_2.php'?>
   }
   .if_else_block{
    display: block !important;
 }
</style>
      <h1>PHP if...else...elseif Statements</h1>
      <br>
      <h4>Conditional statements are used to perform different actions based on different conditions.<br><br></h4>

      <h2>PHP Conditional Statements</h2>
      <h4></h4>
      <h4>Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this. <br><br>

      In PHP we have the following conditional statements: <br><br>

      <span class="text-danger">if</span> statement - executes some code if one condition is true <br>
      <span class="text-danger">if...else</span> statement - executes some code if a condition is true and another code if that condition is false <br>
      <span class="text-danger"></span> statement - executes different codes for more than two conditions <br>
      <span class="text-danger">switch</span> statement - selects one of many blocks of code to be executed</h4>
 
      <h1>PHP - The <span class="text-danger">if</span> Statement</h1>
      
      <br>
      <h5>The The <span class="text-danger">if</span> statement executes some code if one condition is true.</h5>
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

<?php include('../../footer.php') ?>