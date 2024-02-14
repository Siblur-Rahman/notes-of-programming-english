
<style>
.active_events{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   section{
      margin: 10px 0px;
   }
</style>
<!-- css topics header -->
<?php include'./js_events_header.php'?>

<div id="main_content"><!-- Start Main Content -->



<!-- DOM Events -->
<section>
   <div>
      <h2>JavaScript Events <span><a href="https://www.w3schools.com/js/js_events.asp" target="_blank"> Details</a></span></h2>
      <hr>
      HTML events are "things" that happen to HTML elements. <br>

      When JavaScript is used in HTML pages, JavaScript can "react" on these events.
      <hr>
      <h2>Syntax</h2>
      <pre class="code_p">
         With single quotes:
         &lt;element event='some JavaScript'&gt;

         With double quotes:
         &lt;element event="some JavaScript"&gt;
      </pre>

   </div>
   <h2>DOM Events<span><a href="https://www.w3schools.com/js/js_htmldom_events.asp" target="_blank"> Details</a></span></h2>
   <h1>We can use events in different ways</h1>
   <p class="accordion">1. Using HTML Event Attributes</p>
   <div class="panel">
      <div id="add-event">It will be changed this Text with Event</div>
      <button onclick="document.getElementById('add-event').style.color = 'red'">change text color</button>
      
      <button onclick="this.style ='color:red; font-size:40px'">click & change Me</button>

      <!-- Code-1 -->
      <button class="accordion">Code-1.1</button>
      <div class="panel">
         &lt;div id="add-event"&gt;It will be changed this Text with Event&lt;/div&gt; <br>
         &lt;button onclick="document.getElementById('add-event').style.color = 'red'"&gt;change text color&lt;/button&gt; <br>

         &lt;button onclick="this.style ='color:red; font-size:40px'"&gt;click & change Me&lt;/button&gt;
      </div>
      <h3>a function is called from the event handler:</h3>
      <h2 onclick="changeText(this)">Click on this text!</h2>
      <script>
      function changeText(id) {
      id.innerHTML = "Ooops!";
      }
      </script>

      <!-- Code-1 -->
      <button class="accordion">Code-1.22</button>
      <div class="panel">
      &lt;body&gt; onload="checkCookies()"&gt;&lt;/body&gt;
      &lt;h2&gt; onclick="changeText(this)"&gt;Click on this text!&lt;/h2&gt;
      &lt;script&gt;&gt; <br>
      function changeText(id) { <br>
      id.innerHTML = "Ooops!"; <br>
      } <br>
      &lt;/script&gt;
      </div>

      <h3>Assign an event to the body</h3>
      <button class="accordion">Code-1.3</button>
      <div class="panel">
         <pre>
         &lt;p id="add-event2"&gt;&lt;/p&gt;
         function checkCookies() {
         let text = "";
         if (navigator.cookieEnabled == true) {
            text = "Cookies are enabled.";
         } else {
            text = "Cookies are not enabled.";
         }
         document.getElementById("add-event2").innerHTML = text;
         }
         </pre>
      </div>
   </div>

   <p class="accordion">2. Assign Events Using the HTML DOM</p>
   <div class="panel">
      document.getElementById("myBtn").onclick = displayDate;
   </div>
</section>
<section>
   <!-- Some common Events -->
<section>
   <h2 class="accordion">Some common Events</h2>
   <div class="panel">
      click, change, blur, fucus, load, 
      <ul>
         <li><a href="./DOM_Events/click.html" target="_blank">click</a></li>
         <li><a href="./DOM_Events/blur.html" target="_blank">blur</a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
         <li><a href="" target="_blank"></a></li>
      </ul>
   </div>
   
</section>
<!-- HTML DOM Event Object Reference -->
   <h2>HTML DOM Event Object Reference<span><a href="https://www.w3schools.com/jsref/dom_obj_event.asp" target="_blank"> Details</a></span></h2>

   <!-- HTML DOM Event Methods -->
   <h2>HTML DOM Event Methods<span><a href="https://www.w3schools.com/jsref/dom_obj_event_methods.asp" target="_blank"> Details</a></span></h2>
</section>
<!-- <h2><span><a href="" target="_blank"> Details</a></span></h2>
<h2><span><a href="" target="_blank"> Details</a></span></h2>
<h2><span><a href="" target="_blank"> Details</a></span></h2> -->

      

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
