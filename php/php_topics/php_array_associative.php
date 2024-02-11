
<!-- common_header -->

<style>
      .array_active_3{
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

   <!-- <div id="main_content"> -->
      <h1>PHP Associative Arrays</h1>
      Associative arrays are arrays that use named keys that you assign to them.

      There are two ways to create an associative array: 

<pre class="code_p">
   $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

   or:
   $age['Peter'] = "35";
   $age['Ben'] = "37";
   $age['Joe'] = "43";
   
   The named keys can then be used in a script:
   Example

   &lt;?php
   $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
   echo "Peter is " . $age['Peter'] . " years old.";
   ?&gt;
</pre>
   <!--End Main Content-->
<!-- footer -->

<?php include('../../common_footer.php') ?>