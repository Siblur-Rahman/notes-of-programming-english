
<style>
.active_rotate{
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
</style>
<!-- css topics header -->
<?php include'./css_transforms_header.php'?>

<div id="main_content"><!-- Start Main Content -->

<span class="itc font">2. rotate():</span> The <span class="itc">rotate()</span> method rotates an element clockwise or counter-clockwise according to a given degree.<br>
    <div class="box outer">
            <div class="box inner2">
                box-2 <br>
                transform: rotate(30deg);
            </div>
        </div>
        <div class="mark">Using negative values will rotate the element counter-clockwise.</div>
        <div class="box outer">
                <div class="box inner2_1">
                    box-2_1 <br>
                    transform: rotate(-30deg);
                </div>
            </div>

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
