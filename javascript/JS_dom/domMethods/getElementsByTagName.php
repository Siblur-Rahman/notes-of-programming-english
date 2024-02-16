
<p class="accordion">getElementsByTagName</p>
<div class="panel">
      <h2>getElementsByTagName<span class="itc"><a href="https://www.w3schools.com/jsref/met_document_getelementsbytagname.asp"  target="_blank">Details</a></span></h2>
      <p>getElementByTagName allows you to search all the elements with a specified tag name on your page. </p>
      <h2>Syntax</h2>
      <pre class="code_p">
         document.getElementsByTagName("tagname");
      </pre>
      <p>Here myVariable is substituted by “myLinkCollection”. myLinkCollection holds all the elements on the page. Pictorially it is like an array holding elements. Here also you can add few additional features. Following is an example:</p>
         
      <pre class="code_p">
      let h2= document.getElementsByTagName('h2');
      for(let i = 0; i < h2.length; i++){
         if(i ==0){
            h2[i].style.color = 'red';
         }else if(i==1){
            h2[i].style.color = 'yellow';
         }else{
            h2[i].style.color = 'blue';
         }
      }
      </pre>
      <!-- <button class="itc"><a href="" target="_blank">watch video <span class="itc"></span></a></button> -->
      <!-- <button><a href="./file_example.html" target="_blank"></a></button> -->
</div>
