
<?php include'../js_html_dom_header.php'?>

<!-- Document Method List -->
<button class="accordion">Document Method List</button>
<div class="panel">
   <?php include'./dom_method_list.php'?>
</div>
<!-- Start Main Content -->
<h2>HTML DOM Document createElement()<span class="itc"><a href="https://www.w3schools.com/jsref/met_document_createelement.asp"  target="_blank">Details</a></span></h2>
<div class="mark">
   The createElement() method creates an element node.
</div>
<h5>Create a &lt;p&gt; element and append it to the document:</h5>
<h4 class="mark" id="demo"></h4>
<script>
   let para = document.createElement("p");
   para.innerHTML="I am Created Paragraph with CreateElement";
   document.getElementById("demo").appendChild(para)
</script>
<!-- End Main Content -->
<!-- footer -->
<?php include('../js_html_dom_footer.php') ?>