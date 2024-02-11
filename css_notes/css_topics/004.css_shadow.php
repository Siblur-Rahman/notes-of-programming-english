
<style>
.active_4{
   <?php include'../../active_1.php'?>
   }
   /* Create Cards */
   div.card {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.header {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  font-size: 40px;
}
/* Create Polaroid Images */
div.polaroid {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
div.container {
  padding: 10px;
  background-color: aliceblue;
  color: #000;
}
/* Example */
.exam_1{    
    box-shadow: 10px 10px;

 }
.exam_2{  
    box-shadow: 10px 10px rgb(231, 133, 5);
 }
 .exam_3{
    box-shadow: 10px 10px 5px lightblue;
 }
 .exam_4{ 
    box-shadow: 10px 10px 5px 12px lightblue;
 }
 .exam_5{
    box-shadow: 10px 10px 15px lightblue inset;
 }
 .exam_6{
    box-shadow: 5px 5px rgb(128, 231, 10), 10px 10px red, 15px 15px rgb(239, 241, 239); 
 }
 .exam_7 h1{
    text-shadow: 2px 2px;
 }
 .exam_8 h1{
    text-shadow: 2px 2px 5px red;
 }
 .exam_9 h1{
    text-shadow: 2px 2px 4px #000000;
 }
 .exam_10 h1{
    text-shadow: 0 0 3px #FF0000;
 }
 .exam_11 h1{
    text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
 }
 .exam_12{
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
 }
 .exam_13{
    color: coral;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
 }
 .exam_14{
   color: #000;
   text-align: center;
   margin: auto;
   margin-top: 20px;
   background-color: #fff;
   height: 200px;
   width: 200px;
   box-shadow: 0 0 10px 20px red;
 }
 .exam_15 {
    color: #000;
    text-align: center;
    margin: auto;
    margin-top: 50px;
    background-color: #fff;
    height: 200px;
    width: 200px;
    box-shadow: -20px -20px red;
}
 .exam_1, .exam_2, .exam_3, .exam_4, .exam_5, .exam_6 {
    background: #000;   
    margin: 50px;
 }
 .text_shadow{
    background-color: #FFFFFF;
    color: #000;
 }
</style>
<!-- css topics header -->
<?php include'./css_topics_header.php'?>
<div id="main_content"><!-- Start Main Content -->

   <h2>CSS shadow</h2>
   <h5>With CSS you can add shadow to text and to elements.</h5>
   <h2>CSS Text Shadow<span><a href="https://www.w3schools.com/css/css3_shadows.asp" target="_blank"> Details</a></span></h2>
   <button><a href="https://youtu.be/cKsHGZj9p_Q?si=M4UmUAjqg_LGFmAF" target="_blank">Watch on YouTube</a></button>
   <h5>The CSS text-shadow property applies shadow to text. <br><br>
   <div class="text_shadow">
      <div class="exam_7">
         
         <h1>Text shadow effect! </h1><h4 class="itc"> text-shadow: 2px 2px;</h4>
      </div>
      <div class="exam_8">
         <h1>Text shadow effect!</h1>
         <h4 class="itc">text-shadow: 2px 2px 5px red;</h4>
      </div>
      <div class="exam_9">
         
         <h1>Text shadow effect!</h1> <h4 class="itc">text-shadow: 2px 2px 4px #000000;</h4>
      </div>
      <div class="exam_10">
         
         <h1>Text shadow effect! </h1><h4 class="itc">text-shadow: 0 0 3px #FF0000;</h4>
      </div>
      <div class="exam_11">
         
         <h1>Text shadow effect! </h1><h4 class="itc">text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;</h4>
      </div>
      <div class="exam_12">
         
         <h1>Text shadow effect! </h1><h4 class="itc">text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;</h4>
      </div>
      <div class="exam_13">
         
         <h1>Text shadow effect! </h1><h4 class="itc">text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;</h4>
      </div>
   </div>

   <h2>CSS box-shadow<span><a href="https://www.w3schools.com/css/css3_shadows_box.asp" target="_blank"> Details</a></span></h2>
   <h5>The CSS box-shadow property is used to apply one or more shadows to an element.</h5>

      <div class="exam_1">
         Specify a horizontal and a vertical shadow: <br>
         10px 10px
      </div>
      <div class="exam_2">
      Specify a Color for the Shadow <br>
      <span class="itc">box-shadow: 10px 10px rgb(231, 133, 5);</span>
         
      </div>

      <div class="exam_3">
      Add a Blur Effect to the Shadow<br>
      <span class="itc">box-shadow: 10px 10px 5px lightblue;</span>
         
      </div>
      <div class="exam_4">
      Set the Spread Radius of the Shadow<br>
      <span class="itc">box-shadow: 10px 10px 5px 12px lightblue;</span>
         
      </div>
   
      <div class="exam_5">
      Set the inset Parameter<br>
      <span class="itc">box-shadow: 10px 10px 5px lightblue inset;</span>
         
      </div>
      <div class="exam_6">
      Add Multiple Shadows<br>
      <span class="itc">box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;</span>
         
      </div>
      <div class="exam_14">
         <p>box-shadow: 0 0 10px 20px red;</p>
      </div>
      <div class="exam_15">
         <p>box-shadow: -20px -20px red;</p>
      </div>
   <h2>Cards</h2>
   <h5>You can also use the box-shadow property to create paper-like cards:</h5>
   <div class="card">
      <div class="header">
         <h1>1</h1>
      </div>

      <div class="container">
         <p>January 1, 2021</p>
      </div>
   </div>
   <h1>Create Polaroid Images</h1>

   <p>The box-shadow property can be used to create polaroid images:</p>

   <div class="polaroid">
      <img src="https://www.w3schools.com/css/rock600x400.jpg" alt="Norway" style="width:100%">
      <div class="container">
         <p>Hardanger, Norway</p>
      </div>
   </div> 
   

</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../footer.php') ?>
