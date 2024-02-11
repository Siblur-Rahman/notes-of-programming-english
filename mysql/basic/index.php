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

    <?php include('../../mysql/left_bar.php') ?>

    <!-- right_bar -->

    <?php include('../../mysql/right_bar.php') ?>
    
    <div id="main_content"><!--Start Main Content -->
        <h1 class="all-center100">MYSQL</h1>

     <!-- use_sql_statement.php' -->
        <?php include'./use_sql_statement.php'?>
        
        <!-- MYSQL SQL -->

<?php include'./mysql_sql.php'?> 

         <!-- MYSQL DATABASE -->

<?php include'./mysql_database.php'?> 

    <!-- MY SQL VIDEO -->
    
<a class="to_jump" name="sql_video"></a>
  <video width="90%" margin="auto" height="400px" controls>
        <source src="../../all_notes_videos/mysql/Bangla MySQL database & SQL tutorial for beginner to Intermediate 2023.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
        </video>
    <button><a  href="https://www.youtube.com/watch?v=aZnwpMON0NA&t=6663s" target="_blank">Click to visit Youtube</a></button><button id="sh_code_1">Click to show Timeline</button>

    <div class="row">
        <div class="col-4 sh_code_1 d_none">
                (00:00:00) Intro <br>
                (00:02:13) Prerequisite <br>
                (00:03:05) Introduction to the database <br>
                (00:12:45) Types of database <br>
                (00:18:26) Types of Key <br>
                (00:26:18) dbMS <br>
                (00:31:53) RdbMS <br>
                (00:34:32) Relations <br>
                (00:40:08) Sorting & Indexing <br>
                (00:47:15) Security <br>
                (00:53:40) Query Language  <br>
                (00:59:21) SQL <br>
                (01:05:01) Setup XAMPP <br>
                (01:07:52) SHOW, CREATE AND DROP DATABASE <br>
                (01:13:30) Data Types <br>
                (01:17:37) CREATE, RENAME, DROP TABLE <br>
        </div>
                
        <div class="col-4 sh_code_1 d_none">
            (01:27:10) INSERT records <br>
            (01:40:22) SELECT records <br>
            (01:46:12) DISTINCT, LIMIT <br>
            (01:51:01) Sorting <br>
            (01:56:50) Arithmetic Operators  <br>
            (01:58:58) WHERE clause  <br>
            (02:04:54) Relational Operators  <br>
            (02:07:26) Logical Operators - AND, OR <br>
            (02:14:28) Logical Operators - IN, NOT IN <br>
            (02:19:03) Logical Operators - LIKE <br>
            (02:24:04) Custom name <br>
            (02:25:38) Constraint and AUTO_INCREMENT <br>
            (02:36:05) UPDATE records <br>
            (02:41:08) DELETE records <br>
            (02:45:02) UPPER & LOWER <br>
        </div>
        <div class="col-4 sh_code_1 d_none">
            (02:48:54) Functions <br>
            (02:57:26) Aggregate functions <br>
            (03:04:52) subquery <br>
            (03:10:28) ALTER statement <br>
            (03:18:01) UPDATE statement <br>
            (03:20:09) GROUP BY CLAUSE <br>
            (03:25:11) TRUNCATE TABLE <br>
            (03:27:48) Joining tables <br>
            (03:38:07) JOIN CLAUSE <br>
            (03:44:27) INNER JOIN
            (03:49:28) LEFT & RIGHT JOIN  <br>
            (03:53:32) UNION, UNION ALL <br>
            (03:58:17) VIEW  <br>
            (04:07:40) Date & Time  <br>
            (04:17:00) outro
        </div>
    </div>
</div><  <!--End Main Content -->
    
    <!-- footer -->

    <?php include('../../footer.php') ?>