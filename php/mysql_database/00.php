<!-- common_header -->

<?php include('../../common_header.php') ?>
    <style>
        ._active_1{
        background: #BB2966;
        color: white !important;
    }
        ._active{
        background: #786363;
    }
    ._block{
        display: block !important;
    }
    </style>

    <!-- left_bar -->

    <?php include('../left_bar.php') ?>

    <!-- right_bar -->

    <?php include('../right_bar.php') ?>
    
    <div id="main_content"><!--Start Main Content -->
        <h1></h1>
      <h4>
&lt;?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn-&gt;connect_error) {
    die("Connection failed: " . $conn-&gt;connect_error);
    }
    echo "Connected successfully";
?&gt;
      </h4>
    
    
    </div><  <!--End Main Content -->
    
    <!-- footer -->

    <?php include('../../footer.php') ?>