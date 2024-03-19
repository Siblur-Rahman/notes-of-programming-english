
<style>
.active_{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- React header -->
<?php include'../react_header.php'?>

<div id="main_content"><!-- Start Main Content -->
<a href="./FakeData.html" target="_blank">Creat And Load <span class="itc">Fake Data</span></a>
<p class="accordion">add Image 42_3 4:00</p>
<div class="panel">
   <div id="img-set" class ="code_p">
   <script>
   document.getElementById('img-set').innerText=
   `import name from 'pathinfo'
   
   <img src={name} alt="">`
</script>
   </div>
</div>
</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
