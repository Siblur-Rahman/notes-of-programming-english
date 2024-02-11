
<!-- common_header -->

<style>
      .variable_active{
      <?php include'../../active_1.php'?>
   }
      .variable_active_2{
      <?php include'../../active_2.php'?>
   }
   .variable_block{
    display: block !important;
 }
</style>
<?php include('./php_topics_header.php') ?>

   <!-- Main Code -->
      <h1>PHP Variables Scope</h1>
      <h4>
         In PHP, variables can be declared anywhere in the script. <br>

         The scope of a variable is the part of the script where the variable can be referenced/used. <br>

         PHP has three different variable scopes: <br><br>

            <div><span class="text-danger">local:</span> A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.</div>
            <hr>
            <div><span class="text-danger">global:</span>  A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function</div>
            <hr>
            static:
            <div class="mark">You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.</div>
      </h4>
      <h1>PHP The global Keyword</h1>
      <h4>The global keyword is used to access a global variable from within a function. <br><br>

      To do this, use the global keyword before the variables (inside the function):</h4>
      <pre class="code_p">
         Example
            $x = 5;
            $y = 10;

            function myTest() {
            global $x, $y;
            $y = $x + $y;
            }

            myTest();
            echo $y; // outputs 15

      </pre>
<!-- footer -->

<?php include('../../common_footer.php') ?>