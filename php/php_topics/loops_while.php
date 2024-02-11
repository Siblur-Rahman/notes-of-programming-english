
<style>
   .loop_active{
      <?php include'../../active_1.php'?>
   }
   .loop_active_2{
      <?php include'../../active_2.php'?>
   }
   .loop_block{
    display: block !important;
 }
</style>
<?php include('./php_topics_header.php') ?>

   <!-- Main Code -->
   
      <h1>PHP While Loop</h1>
      <h4>The while loop - Loops through a block of code as long as the specified condition is true.</h4>
      <pre class="code_p">
      Syntax
            while (condition is true) {
            code to be executed;
            }
      Example
            $x = 1;

            while($x <= 5) {
            echo "The number is: $x &lt;br&gt;";
            $x++;
            }
      </pre> 
<!--common footer -->

<?php include('../../common_footer.php') ?>