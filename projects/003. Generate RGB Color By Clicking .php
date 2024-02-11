<!-- common_header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS RGB Color Generate</title>
    <link rel="stylesheet" href="style.css">
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
       <h3>JS RGB Color Generate <span class="itc">With Nayem DOM Project-1</span></h3>
       <div id="root">
           <h1 class="font_16">change The Background Color By The Clicking Following Button</h1>
           <button id="change_btn">Change Color</button>
        </div>
   </div>
    
    <!--End my_container -->

    <script>
        window.onload=()=>{
            main();
        };
        function main(){
    const root=document.getElementById('root');
    const btn=document.getElementById('change_btn');
    btn.addEventListener('click', function(){
        const bgColor= generateRGBColor();
        root.style.backgroundColor=bgColor;
    });
}
    function generateRGBColor(){
        const red = Math.floor(Math.random() * 255);
        const green = Math.floor(Math.random() * 255);
        const blue = Math.floor(Math.random() * 255);
        return `rgb(${red}, ${green}, ${blue})`;
    }
</script>

</body>
</html>