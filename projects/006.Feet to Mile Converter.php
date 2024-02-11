<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<div class="container">
<h2 class="all-center100">6. Feet to Mile Converter</h2>
   <input type="number" id="feetToMileInput" placeholder="Enter Number">
   <button id="feetToMileBtn" class="inline">Click to Convert Feet to Mile </button>
   <h3>Total Mile:<span id="feetToMile"></span></h3>
</div>

   <script>
      function feetToMile(feet){
   if(feet !=0){
      let mile = feet / 5280;
   return mile;
   }else{
      return "No Input"
   }
}

document.getElementById("feetToMileBtn").addEventListener('click', function(){
  let input = document.getElementById("feetToMileInput").value;
   document.getElementById("feetToMile").innerHTML = feetToMile(input);
})
   </script>

</body>
</html>