
<button class="accordion">10. 23-5 Arrow function, multiple parameter, function body</button>
<div class="panel">
   <h2>Arrow function</h2>
   <pre class="code_p">
      <span class="itc">Arrow function with single parameter</span>
      
      const doubleIt = num => num * 2;
      const result = doubleIt(15);
      console.log(result)
      
      <span class="itc">Arrow function with Muntiple parameter</span>
      
      const doubleIt = (num1, num2) => num1 + num2;
      const result = doubleIt(15, 1);
      console.log(result)
      <span class="itc">Arrow function without parameter</span>
      const give5 = () => 5;
      const  result = give5();
      console.log(result)
      <span class="itc">Multiple task in a function Body</span>
      const doMath = (num1, num2) => {
      const add = num1 + num2;
      const subst = num1 - num2;

      const result = add * subst;
      return result;
      };
      const finalResult = doMath(15, 10);
      console.log(finalResult);
   </pre>
   <button class="btn_block accordion"><a href="../../js_topics_video/023_5.php" target="_blank">Watch Video</a></button>
</div><!-- End panel 10 -->