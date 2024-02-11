
<style>
.active_translate{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
}
      .box{
            width: 200px;
            height: 200px;
            border: 1px solid rebeccapurple;
            text-align: center;
            font-size: 25px;
        }
        .outer{
            width: 200px;
            background-color: gray;
            margin: auto;
            margin-top: 50px;
        }
        .inner1{
            background-color: indianred;
            transform: translate(50px, 50px)
        }
        .inner1_1{
            background-color: indianred;
            transform: translate(50px)
        }
        .inner2{
            background-color: indianred;
            transform: rotate(30deg);
        }
        .inner2_1{
            background-color: indianred;
            transform: rotate(-30deg);
        }
        .inner3{
            background-color: indianred;
            transform: translate(50px);
        }
        .inner4{
            background-color: indianred;
            transform: rotate(30deg);
        }
        .inner5{
            background-color: indianred;
            transform:  translate(50px) scale(.75) rotate(30deg);

        }
        .inner6{
            background-color: indianred;

        }
        .inner6:hover{
            background-color: indianred;
            transform: rotate(30deg) scale(.5);

        }
   }
</style>
<!-- css topics header -->
<?php include'./css_transforms_header.php'?>

<div id="main_content"><!-- Start Main Content -->

<span class="itc font_30 ">1. translate(50px, 100px):</span> The <span class="itc">translate()</span> method moves an element from its current position (according to the parameters given for the X-axis and the Y-axis).
   <div class="box outer">
            <div class="box inner1">
                translate(50px, 50px)
            </div>
    </div>
   <mark>You can use one value</mark> <br>
   <div class="box outer">
            <div class="box inner1_1">
            translate(50px)
            </div>
    </div>

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
