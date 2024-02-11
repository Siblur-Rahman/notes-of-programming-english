<style>
.active_2{
  <?php include'../../active_1.php'?>
   }
</style>
<!-- css topics header -->
<?php include'./css_topics_header.php'?>
<div id="main_content"><!-- Start Main Content -->
<span id="2"></span>
<h2>CSS Variable<span><a href="https://www.w3schools.com/css/css3_variables.asp" target="_blank"> Details</a></span></h2>
<pre>
:root {
  --blue: #1e90ff;
  --white: #ffffff;
}
button {
  background-color: var(--white);
  color: var(--blue);
  border: 1px solid var(--blue);
  padding: 5px;
}

</pre>

<button><a href="https://youtu.be/tI1sCcaw9Fk?si=RxqmPsv7d85bRDve" target="_blank">Watch For Youtube</a></button>
</div><!-- End Main Content -->
<!-- footer -->
<?php include('../../footer.php') ?>
  