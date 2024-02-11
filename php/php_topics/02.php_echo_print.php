   <!-- common_header -->

    <style>
            .active_2{
        <?php include'../../active_1.php'?>
    }
    </style>
    <!-- php_topics_header.php -->
   <?php include('./php_topics_header.php') ?>
<!--Start Main Content -->
    
<h2 class="all-center100">PHP echo and print Statements<span><a href="https://www.w3schools.com/php/php_echo_print.asp" target="_blank"> Details</a></span></h2>
<div>
    With PHP, there are two basic ways to get output: echo and print.   <br>
        <br>
    In this tutorial we use echo or print in almost every example. So, this chapter contains a little more info about those two output statements.  <br>
    <span class="itc">echo</span> and <span class="itc">print</span> are more or less the same. They are both used to output data to the screen.    <br>
    <br>
    The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.  <br>
</div>
<div>
<h2>The PHP echo Statement</h2>
The <span class="itc">echo</span> statement can be used with or without parentheses: echo or echo(). <br>
<h2>Display Text</h2>

The following example shows how to output text with the echo command
</div>
<h2>example</h2>
<pre class="code_p">
    &lt;?php
    echo "&lt;h3&gt;PHP is Fun!&lt;/h2&gt;";
    echo "Hello world!&lt;br&gt;";
    echo "I'm about to learn PHP!&lt;br&gt;";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    ?&gt; 
</pre>
<div class="output">
    <h4>Output</h4>
<?php
    echo "<h3>PHP is Fun!</h3>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 
</div>
<br> <br><hr>
<h2>Display Variable</h2>

The following example shows how to output text and variables with the echo statement: <br>
<h2>example</h2>
<pre class="code_p">
&lt;?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "&lt;h2&gt;" . $txt1 . "&lt;/h2&gt;";
    echo "Study PHP at " . $txt2 . "&lt;br&gt;";
    echo $x + $y;
?&gt;
</pre>
<div class="output">
    <h4>Output</h4>
    <?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;
    ?>
</div>
<h4></h4>
<pre class=code>
Syntax

</pre>

        
            <mark class="mark"></mark>
        </h4>
    
    <!--End Main on footer -->
    
    <!-- footer -->

    <?php include('../../common_footer.php') ?>