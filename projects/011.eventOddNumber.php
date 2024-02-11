<!-- common_header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Even & Odd Number</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <style>
        .my_container{
    width: 80%;
    margin: auto;
    font-size: 30px;
}
    .font_16{
    font-size: 20px;
}
#root{
    /* width: 90%; */
    margin: auto;
    height: 500px;
    justify-content: center;
    align-items: center;
    background-color: red;
    display: flex;
    flex-direction: column;
    /* font-size: 16px !important; */
}
h3 {
    text-shadow: 2px 2px 8px #f0ecec, 2px 2px 8px #ece5e5, 2px 2px 8px #ece5e5, 2px 2px 8px #ece5e5;
    text-align: center;
  }
  .itc{
    color: aquamarine;
  }
    </style>
<body>

   <!--Start my_container -->
   <!--Start my_container -->
   <div class="my_container">
       <h3> <span class="itc"></span></h3>
       <div id="root" class="output_1">
        <h2>About Even & Odd Number</h2>
        <h2>Created Array[ <span id="array" class="itc"></span>]</h2>
        <input type="text" name="" id="element" placeholder="Enter Element">
        <button type="button" class="btn btn-primary" id="btn1">Add Element to Array</button>
        <button type="button" class="btn btn-primary" id="btn2">Show Even & Odd Element the Array</button>
        <h4 >Even Numbers Of the Array:  <span class="itc" id="outputEven"></span></h4>
        <h4 >Odd Numbers Of the Array::  <span class="itc" id="outputOdd"></span></h4>
 
        </div>
<button id="toggle_1">Show/Hide Code</button>
<pre class="code_1 code">
let createdArray =[];

function createShowArray(createdArray){
    var evenArray = [];
    var oddArray = [];
        for (let i = 0; i < createdArray.length; i++){
    const element = createdArray[i];
    if(element % 2 ==0){
        evenArray.push(element);
        
    }
    else{
            oddArray.push(element);
        }
    }
    return document.getElementById("outputOdd").innerHTML = oddArray,
    document.getElementById("outputEven").innerHTML = evenArray;
}

let Btn1 = document.getElementById("btn1");
let Btn2 = document.getElementById("btn2");
let addElement = document.getElementById("element");

Btn1.addEventListener('click', function(){
let element = addElement.value;
createdArray.push(" "+element);
document.getElementById("array").innerHTML = createdArray;
}) 
Btn2.addEventListener('click', function(){
    return createShowArray(createdArray);
}) 
</pre>
    
    <!--End my_container -->
<!-- jquery -->
<script src="./jquery-3.6.4.min.js"></script>
<!-- jquery Common Code -->
<script>
$(document).ready(function(){
var all_code=$(".code, .code_1, .code_2, .code_3, .code_4, .code_5, .code_6, .code_7, .code_8, .code_9, .code_10")
all_code.css('display', 'none'); 
    $("#toggle_1").click(function () { 
        $(".code_1, .output_1").toggle();
    });
    $("#toggle_2").click(function () { 
        $(".code_2, .output_2").toggle();
    });
    $("#toggle_3").click(function () { 
        $(".code_3, .output_3").toggle();
    });
    $("#toggle_4").click(function () { 
        $(".code_4, .output_2").toggle();
    });
    $("#toggle_5").click(function () { 
        $(".code_5, .output_2").toggle();
    });
})
</script>
<!-- Projects Code -->

    <script>
let createdArray =[];

function createShowArray(createdArray){
    var evenArray = [];
    var oddArray = [];
        for (let i = 0; i < createdArray.length; i++){
    const element = createdArray[i];
    if(element % 2 ==0){
        evenArray.push(element);
        
    }
    else{
            oddArray.push(element);
        }
    }
    return document.getElementById("outputOdd").innerHTML = oddArray,
    document.getElementById("outputEven").innerHTML = evenArray;
}

let Btn1 = document.getElementById("btn1");
let Btn2 = document.getElementById("btn2");
let addElement = document.getElementById("element");

Btn1.addEventListener('click', function(){
let element = addElement.value;
createdArray.push(" "+element);
document.getElementById("array").innerHTML = createdArray;
}) 
Btn2.addEventListener('click', function(){
    return createShowArray(createdArray);
}) 

    </script>

</body>
</html>