<!-- common_header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    /* background-color: #100f0f; */
    display: flex;
    flex-direction: column;
    /* font-size: 16px !important; */
}
button:hover{
    background: rgb(154, 27, 233);
    /* #47c415 */
}
h3 {
    text-shadow: 2px 2px 8px #f0ecec, 2px 2px 8px #ece5e5, 2px 2px 8px #ece5e5, 2px 2px 8px #ece5e5;
    text-align: center;
  }
    </style>
<body>

   <!--Start my_container -->
   <div class="my_container">
       <h3> <span class="itc">With Nayem DOM Project-1</span></h3>
       <div id="root">
           <h2>JS RGB Color Generate</h2>
           <div id="root">
               <h1 class="font_16">change The Background Color By The Clicking Following Button</h1>
               <input type="text" disabled value="#00000" id="output">
               <button id="change_btn">Change Color</button>
            </div>
        </div>
    <button id="toggle_1">Show/Hide Code</button>
    <pre class="code_1 code">
window.onload=()=>{
    main();
};
function main(){
    const root=document.getElementById('root');
    const btn=document.getElementById('change_btn');
    const output=document.getElementById('output');
    btn.addEventListener('click', function(){
        const bgColor= generateHexColor();
        root.style.backgroundColor=bgColor;
        output.value=bgColor;
        });
    }

function generateHexColor(){
    const red = Math.floor(Math.random()*255);
    const green = Math.floor(Math.random()*255);
    const blue = Math.floor(Math.random()*255);
    return `#${red.toString(16)}${green.toString(16)}${blue.toString(16)}`;
};
</pre>
    
    <!--End my_container -->
<!-- jquery -->
<script src="./jquery-3.6.4.min.js"></script>
<!-- jquery Common Code -->
<script>
$(document).ready(function(){
    //  toggle code
var all_code=$(".code, .code_1, .code_2, .code_3, .code_4, .code_5, .code_6, .code_7, .code_8, .code_9, .code_10")
all_code.css('display', 'none'); 
$("#toggle_1").click(function () { 
    $("#root").toggle();
    $(".code_1").toggle();
});
$("#toggle_2").click(function () { 
    $(".code_2").toggle();
});
$("#toggle_3").click(function () { 
    $(".code_3").toggle();
});
$("#toggle_4").click(function () { 
    $(".code_4").toggle();
});
$("#toggle_5").click(function () { 
    $(".code_5").toggle();
});
})
</script>
<!-- Projects Code -->
    <script>
        // set-1 create onload handler
window.onload=()=>{
    main();
};
function main(){
    const root=document.getElementById('root');
    const btn=document.getElementById('change_btn');
    const output=document.getElementById('output');
    btn.addEventListener('click', function(){
        const bgColor= generateHexColor();
        root.style.backgroundColor=bgColor;
        output.value=bgColor;
        });
    }

function generateHexColor(){
    const red = Math.floor(Math.random()*255);
    const green = Math.floor(Math.random()*255);
    const blue = Math.floor(Math.random()*255);
    return `#${red.toString(16)}${green.toString(16)}${blue.toString(16)}`;
};


    </script>

</body>
</html>