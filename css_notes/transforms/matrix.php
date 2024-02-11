
<style>
    .active_{
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

<div class="mark">
        <h2>   9. matrix()</h2>
    The matrix() method combines all the 2D transform methods into one. <br>
    <br>
    The matrix() method take six parameters, containing mathematic functions, which allows you to rotate, scale, move (translate), and skew elements.   <br>
    <br>
    The parameters are as follow: matrix(scaleX(), skewY(), skewX(), scaleY(), translateX(), translateY())
    </div>
<!--  
        <div class="box outer">
            <div class="box inner3">
                box-3 <br>
                
            </div>
        </div>
        <div class="box outer">
            <div class="box inner4">
                box-4 <br>
                transform: rotate(30deg);
            </div>
        </div>
        <div class="box outer">
            <div class="box inner5">
                box-5 <br>
                transform:  translate(50px) scale(.75) rotate(30deg);
            </div>
        </div>
        <div class="box outer">
            <div class="box inner6">
                box-5 <br>
                <spa class="itc">Hover Me</spa> <br>
                transform: rotate(30deg) scale(.5)
            </div>
        </div> -->

      

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
