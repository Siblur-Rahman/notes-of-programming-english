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
  .itc{
    color: red;
  }
    </style>
<body>

   <!--Start my_container -->
   <!--Start my_container -->
   <div class="my_container">
       <h3>Find Tiny Friend <span class="itc">Statically</span></h3>
       <h2>Tiny Friend: <span id="demo" class="itc"></span></h2>
<button id="toggle_1">Show/Hide Code</button>
<pre class="code_1 code">
let myFriendsName = ["jhantu", "nuntu", "titu"];

let smallElement = myFriendsName[0];
for(let i =0; i < myFriendsName.length; i++){
    let element = myFriendsName[i];
    if(element.length < smallElement.length){
        smallElement = element;
    }
}
document.getElementById("demo").innerHTML = smallElement;
</pre>
 <script>
    let myFriendsName1 = ["jhantu", "nuntu", "titu"];

let smallElement = myFriendsName1[0];
for(let i =0; i < myFriendsName1.length; i++){
    let element = myFriendsName1[i];
    if(element.length < smallElement.length){
        smallElement = element;
    }
}
document.getElementById("demo").innerHTML = smallElement;
 </script>  
 <!--  -->
 <h3>Finding Tiny Friend<span id="itc">Dynamically</span></h3>
 <input type="text" id="addElement" placeholder="Enter Your Friend's Name">
<button id="addElementBtn">Click to crate, show & findout Friend's Names  </button>
<h2>My Friend list: <span id="outputFriend" class="itc"></span></h2>
<h3>My Tiny Friend: <span id="tinyFrind" class="itc"></span></h3>
 <script>
    let myFriendsName = [];

let addElementBtn = document.getElementById("addElementBtn");
let addElement = document.getElementById("addElement");
let outputFriend = document.getElementById("outputFriend");
let tinyBtn = document.getElementById("tinyBtn");

addElementBtn.addEventListener('click', function(){
   let element = addElement.value;
   myFriendsName.push(element);
   outputFriend.innerHTML = myFriendsName;
    function tinyFrind(){
        let smallElement = myFriendsName[0];

        for(let i =0; i < myFriendsName.length; i++){
        let element2 = myFriendsName[i];
        if(element2.length < smallElement.length){
            smallElement = element2;
        }
    }
        return smallElement
    }
    document.getElementById("tinyFrind").innerHTML = tinyFrind();
})
 </script>
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
       
    </script>

</body>
</html>