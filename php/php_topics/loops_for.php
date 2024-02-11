
<!-- common_header -->

<?php include('./php_topics_header.php') ?>
<style>
   .loop_active_4{
      <?php include'../../active_2.php'?>
   }
   .loop_active{
      <?php include'../../active_2.php'?>
   }
   .loop_block{
    display: block !important;
 }
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>
   <div class="second_navbar">
     <button id="basic_click">Notes</button>
     <button id="click_1">Click-1</button>
     <button id="click_2">Click-2</button>
     <button id="click_3">Click-3</button>
     <button id="click_4">Click-4</button>
     <button id="click_5">Click-5</button>
    </div>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>
   <!-- Main Code -->
<div id="main">
<div id="basic_div">
   <h1>PHP For Loop</h1>
      <h4>
      The for loop is used when you know in advance how many times the script should run.
      </h4>
      <pre class="code_p">
      Syntax
            for (init counter; test counter; increment counter) {
            code to be executed for each iteration;
            } 
      </pre>
      <h4>
      Parameters:<br><br>

            init counter: Initialize the loop counter value<br>
            test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.<br>
            increment counter: Increases the loop counter value<br>

      </h4>

</div>
<div class="code_1">
   <h1>code-1</h1>
</div>
<div class="code_2">
   <h1>code-2</h1>
</div>
<div class="code_3">
   <h1>code-3</h1>
</div>
<!-- <div class="fl_code_4">
   <h1>code-4</h1>
</div>
<div class="fl_code_5">
   <h1>code-5</h1>
</div> -->
   
   <!-- </div> -->
<!-- footer -->

<?php include('../../footer.php') ?>