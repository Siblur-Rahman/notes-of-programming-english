<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Leap Year</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="my_container">
    <h3 class="all_center100">Check Leap Year with <span class="itc">Else If</span></h3>
    <input type="number" id="year" value="" placeholder="Input Your Number"/>
    <button class="btn btn-primary" id="submit">Submit</button>
    <span id="checkLeapYear"></span>

    <!-- JS Codes -->
  <script>
  let chechLeapYear = document.getElementById("checkLeapYear");
  let submit = document.getElementById("submit");

  function leapYear(){
    let year = document.getElementById("year").value;
    if(year !=0 && year % 4 ==0 ){
      // return "This year is Leap Year";
      chechLeapYear.innerHTML= "This year is Leap Year";

    }else if(year !=0){
      // return "This year is not Leap Year";
      chechLeapYear.innerHTML= "This year is not Leap Year";
    }else{
      // return "You did not input Year"
      chechLeapYear.innerHTML= "You did not input Year"
    };
  } 

  submit.addEventListener('click', function(){
    // chechLeapYear.innerHTML= leapYear();
    return leapYear();
  })
  </script>


  <!-- The () ? : Ternary Operator -->
  <h2 class="all_center100">Check Leap Year with <span class="itc">The () ? : Ternary Operator</span></h2>
  
  <p>Input your year and click the button:</p>
  
  <input id="year_2" value="18" />
  
  <button id="submit_2">Try it</button>
  <!-- onclick="myFunction()" -->
  
  <p id="demo"></p>

  <script>
    function myFunction() {
      let year2 = document.getElementById("year_2").value;
      let result = (year2 !=0 && year2 % 4 ==0) ? "This year is Leap Year":"This year is not Leap Year";

      document.getElementById("demo").innerHTML = result;

    }

    document.getElementById("submit_2").addEventListener('click', function(){
        return myFunction()
    })
    </script>
  </div><!--End my_container -->
</body>
</html>