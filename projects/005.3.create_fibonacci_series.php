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
#root{
    /* width: 90%; */
    margin: auto;
    height: 500px;
    justify-content: center;
    align-items: center;
    background-color: #000;
    display: flex;
    flex-direction: column;
    font-size: 30px !important;
    color: #fff;
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
    color: aquamarine;
  }
  input{
    font-size: 30px;
  }
  #btn{
    font-size: 30px;
  }
    </style>
<body>

   <!--Start my_container -->
   <!--Start my_container -->
   <div class="my_container">
       <h3> <span class="itc"></span></h3>
           <div id="root" class="output_1">
               <input type="number" id="number" placeholder="Enter Number">
               <button id="btn">Click to get</button>
               <h1>Fibonacci : <span id="demo"></span></h1>
            </div>
<button id="toggle_1">Show/Hide Code</button>
    <pre class="code_1 code">
    function fibonacci(n){
    if(n == 0){
        return [0];
    }else if(n == 1){
        return [0, 1];
    }else{
        let fibo = fibonacci(n-1)
        let nextFibo = fibo[n-1] + fibo[n-2];
        fibo.push(nextFibo);
        return fibo;
    }
    }

    var btn = document.getElementById("btn");
    var demo = document.getElementById("demo");

    btn.addEventListener('click', function(){
    let n = document.getElementById("number").value;
    demo.innerHTML = fibonacci(n)
    })
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
    function fibonacci(n){
    if(n == 0){
        return [0];
    }else if(n == 1){
        return [0, 1];
    }else{
        let fibo = fibonacci(n-1)
        let nextFibo = fibo[n-1] + fibo[n-2];
        fibo.push(nextFibo);
        return fibo;
    }
    }

    var btn = document.getElementById("btn");
    var demo = document.getElementById("demo");

    btn.addEventListener('click', function(){
    let n = document.getElementById("number").value;
    demo.innerHTML = fibonacci(n)
    }) 
</script>

</body>
</html>