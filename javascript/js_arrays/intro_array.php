<style>
   .active_intro{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   </style>
   <!-- topics header -->
<?php include'./array_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2>JS Arrays<span><a href="https://www.w3schools.com/js/js_arrays.asp" target="_blank"> Details</a></span></h2>

   <h4>An array is a special variable, which can hold more than one value:</h4>
   <h2>JavaScript Array<span><a href="https://www.w3schools.com/js/js_arrays.asp" target="_blank"> Details</a></span></h2>
    <button class="accordion">Creating an Array</button>
<div class="panel">
   <h4>Using an array literal is the easiest way to create a javascript.</h4>
<h3 class="accordion">Syntax:</h3>
   <div class="panel">
      <p class="code_p">const array_name = [item1, item2, ...];</p>
      Example: <br>
      const cars = ["Saab", "Volvo", "BMW"];
   </div>

   <p class = "accordion" >Spaces and line breaks are not important. A declaration can span multiple lines:</h2>
   <div class="panel">
   <pre class = "code_p">
      Example :
      const cars = [
      "Saab",
      "Volvo",
      "BMW"
      ]; 
   </pre>
   </div>
   <p class = "accordion" >You can also create an array, and then provide the elements:</h2>
   <div class="panel">
      <pre class = "code_p">
      Example
      const cars = [];
      cars[0]= "Saab";
      cars[1]= "Volvo";
      cars[2]= "BMW";
      </pre>
   </div>
   <p class = "accordion" >Using the javascript Keyword new</h2>
   <div class="panel">
      <h4>The following example also creates an Array, and assigns values to it:</h4>
      <pre class = "code_p">
       const cars = new Array("Saab", "Volvo", "BMW");
      </pre>
   </div>
   <p class = "accordion" >Array Declaration with <span class="text-danger">Array</span> constructor (043)</h2>
   <div class="panel">
   <pre class = "code_p">
      var arr = Arrary(); //for emty Array

      var arr2= Arrary(1, 2, 3);
   </pre>
   </div>
</div><!-- End create topic -->
<button class="accordion">23-6 Spread operator, concatenate multiple arrays, array max</button>
<div class="panel">
   <h2>How TO - The Spread Operator (...)<span class="itc"><a href="https://www.w3schools.com/howto/howto_js_spread_operator.asp" target="_blank"> Details</a></span></h2>
   <div class="mark">
      <h2>The Spread Operator</h2>
      The JavaScript spread operator (...) expands an iterable (like an array) into more elements.
      <br>
      This allows us to quickly copy all or parts of an existing array into another array:
   </div>  
   <div class="code_p">
   <h2>Example</h2>
   <pre>
   const arr1 = [1, 2, 3];
   const arr2 = [4, 5, 6];
   const arr3 = [7, 8, 9];

   const newArr = [...arr1, ...arr2, ...arr3];
   console.log(newArr)
   </pre>
   <div class="output">
   <h2>output</h2>
      <pre>
      [
         1, 2, 3, 4, 5,
         6, 7, 8, 9
         ]
      </pre>
   </div>
   </div>
   <div class="mark">
      The spread operator is often used to extract only what's needed from an array:<br>
   </div>
   <h2>Example</h2>
   <div class="code_p">
  <pre>
   const numbers = [1, 2, 3, 4, 5, 6];

   const [one, two, ...rest] = numbers;
   console.log(one);
   console.log(two);
   console.log(rest);
  </pre>
  <div class="output">
   <h4>output</h4>
   <pre>
   1
   2
   [ 3, 4, 5, 6 ]
   </pre>
   </div>
   </div>
   <h2>Findout highest Value from Array with Spread & Math.max() Methods (5:50)</h2>
   <h2>Example</h2>
   <div class="code_p">
   const numbers = [1, 2, 3, 4, 5, 6];

   const max = Math.max(...numbers)
   console.log(max)
   <h4>output: 6</h4>
   </div>
   <button class="btn_block accordion itc"><a href="../js_topics_video/023_6.php" target="_blank">Watch the video</a></button>
</div><!-- End panel 4 -->

   

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
