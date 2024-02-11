   <!-- common_header -->

    <style>
        .switch_active{
      background: #BB2966;
      color: white !important;
   }
    </style>
   <?php include('./php_topics_header.php') ?>
<!--Start Main Content -->
    
<h1>PHP switch Statement</h1>

<h4>The switch statement is used to perform different actions based on different conditions.</h4>
<pre class="code_p">
Syntax
    switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
        ...
    default:
        code to be executed if n is different from all labels;
    }
</pre>
<h4>This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found.</h4>
        <h4>
        
            <mark class="mark"></mark>
        </h4>
    
    <!--End Main on footer -->
    
    <!--common footer -->

    <?php include('../../common_footer.php') ?>