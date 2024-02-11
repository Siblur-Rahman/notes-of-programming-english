<!-- common_header -->

<?php include('../../common_header.php') ?>
    <style>
        .php_mysql_active{
        background: #BB2966;
        color: white !important;
    }
        /* ._active{
        background: #786363;
    } */
    .mysql_block{
        display: block !important;
    }
    </style>
<!--Start Main Content -->
        <h1 class="all-center100">MySQL DAtabase</h1>

        <!-- 1 -->
          <a class="to_jump" name="1"></a>
      <h3 class="all-center100">MySQL Connect</h3>
<pre class="s_code">
    &lt;?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    ?&gt;
    or
    &lt;?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    ? &gt;
</pre>

       <!-- 2 -->
       <a class="to_jump" name="2"></a>
      <h3 class="all-center100">Create a MySQL DB</h3>
        <pre class="s_code">
&lt;?php
    $servername ="localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?&gt;

        </pre>

       <!-- 3 -->
       <a class="to_jump" name="3"></a>
      <h3 class="all-center100">Create a MySQL Table</h3>
        <pre class="s_code">
&lt;?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?&gt;
        </pre>

       <!-- 4 -->
       <a class="to_jump" name="4"></a>
      <h3 class="all-center100">Insert Data</h3>

<pre class="s_code">
&lt;?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?&gt;    
</pre>

       <!--  -->
       <a class="to_jump" name=""></a>
      <h3 class="all-center100"></h3>
<pre class="s_code">
&lt;?php

?&gt;    
</pre>

       <!--  -->
       <a class="to_jump" name=""></a>
      <h3 class="all-center100"></h3>
        <pre class="s_code">
        

        </pre>

       <!--  -->
       <a class="to_jump" name=""></a>
      <h3 class="all-center100"></h3>
        <pre class="s_code">
        

        </pre>
    
  <  <!--End Main Content -->
    
    <!--common footer -->

    <?php include('../../footer.php') ?>