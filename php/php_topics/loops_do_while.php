
<style>
   .loop_active_3{
      <?php include'../../active_2.php'?>
   }
   .loop_active{
      <?php include'../../active_1.php'?>
   }
   .loop_block{
    display: block !important;
 }
</style>
<?php include('./php_topics_header.php') ?>


   <!-- Main Code -->

      <h1>PHP Do While Loop</h1>
     <h4>
     The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
     </h4>
     <pre class="code_p">
     Syntax
            do {
            code to be executed;
            } while (condition is true); 

      Example
      $x = 1;

            do {
            echo "The number is: $x &lt;br&gt;";
            $x++;
            } while ($x <= 5);
      </pre>
      <div class="mark">
      Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.
      </div> 
     
  

<!-- footer -->

<?php include('../../common_footer.php') ?>