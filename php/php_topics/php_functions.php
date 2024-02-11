
<!-- common_header -->

<style>
      .function_active_1{
      background: #BB2966;
      color: white !important;
   }
     .function_active{
      background: #786363;
   }
   .function_block{
    display: block !important;
 }
</style>
<?php include('./php_topics_header.php') ?>

   <!--Start Main Content -->

      <h1>PHP Functionss <span class="mark"><a href="https://www.w3schools.com/php/php_functions.asp" target="_b
      ">Details</a></span></h1>
      <h4>
      PHP function is a piece of code that can be reused many times. It can take input as argument list and return value. There are thousands of built-in functions in PHP. <br>
      </h4>

      <h2>PHP User Defined Functions</h2><br>

   <h4>
    A function is a block of statements that can be used repeatedly in a program. <br>
    A function will not execute automatically when a page loads. <br>
    A function will be executed by a call to the function. <br>
    </h4>

    <h2>Create a User Defined Function in PHP</h2>

    <h4>A user-defined function declaration starts with the word <span class="text-danger">function</span>:</h4>
    <pre class="code_p">
      Syntax
         function functionName() {
         code to be executed;
         } 
      Example
         function sayName($name){
               echo "Hello $name &lt;br&gt;";
            }
         sayName("Ms Rahman");
         sayName("Shohel");
         sayName("Sobuj");
         sayName("Firoz");
</pre>

        <mark class="mark"></mark>

   </div>
   <!--End Main Content -->
<!--Common footer -->

<?php include('../../footer.php') ?>