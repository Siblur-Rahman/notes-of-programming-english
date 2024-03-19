
<style>
.active_modules{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- React header -->
<?php include'../react_header.php'?>

<div id="main_content"><!-- Start Main Content -->

   <h3 class = "heading">React ES6 Modules<span><a href="https://www.w3schools.com/react/react_es6_modules.asp" target="_blank"> Details</a></span></h3>
   <h3><a href="https://web.programming-hero.com/web-9/video/web-9-41-2-es6-modules-import-default-relative-path" target="_blank">P-Hero</a></h3>

   <h3 class="heading">Export</h3>
   <div class="code_p">
      export const name = "Jesse" <br>
      export const age = 40 <br>
      export {name, age};
      export {name as nam, age as ag};
      <div class="border">
         const export = {name:name, age:age}; <br>
         export default export;
      </div>
   </div>
     
   <h3 class="heading">Import</h3>
   <div class="code_p">
   import {name as nam, age as ag} from './file';
   import {name, sge} from './file';
   import * as person {name, sge} from './file';
   </div>

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
