<span class="to_jump" id="mysql"></span>
<h3 class="all-center100">Some of The Most Important SQL Commands<a href="https://www.w3schools.com/mysql/mysql_sql.asp" target="_
   _blank">Details</a></h3>
   <pre class="s_code">
<span class="text-danger">SELECT</span> - extracts data from a database
<span class="text-danger">UPDATE</span> - updates data in a database
<span class="text-danger">DELETE</span> - deletes data from a database
<span class="text-danger">INSERT INTO</span> - inserts new data into a database
<span class="text-danger">CREATE DATABASE</span> - creates a new database
<span class="text-danger">ALTER DATABASE</span> - modifies a database
<span class="text-danger">CREATE TABLE</span> - creates a new table
<span class="text-danger">ALTER TABLE</span> - modifies a table
<span class="text-danger">DROP TABLE</span> - deletes a table
<span class="text-danger">CREATE INDEX</span> - creates an index (search key)
<span class="text-danger">DROP INDEX</span> - deletes an index
   </pre>
<!-- m1 -->  
<a class="to_jump" name="m1"></a>
<h3 class="all-center100">Show Databases</h3>
<pre class="s_code">SHOW DATABASES;</pre>


<!-- m2-->  
<a class="to_jump" name="m2"></a>
<h3 class="all-center100">Drop Database</h3>
<pre class="s_code">
    DROP database_name;
    DROP TABLE table_name;
</pre>
<!-- m3 -->  
<a class="to_jump" name="m3"></a>
      <h3 class="all-center100">Create Table with   danger KEY & Auto AUTO_INCREMENT(m1)</h3>
   <pre class="s_code">
   CREATE  database_name;

   CREATE TABLE student(
	Roll int(5) PRIMARY KEY AUTO_INCREMENT,
    Name varchar(20),
    Gender varchar(5),
    GPA float(3,2),
    City varchar(20)  
);

or,
CREATE TABLE student(
	Roll int(5) AUTO_INCREMENT,
    Name varchar(20),
    Gender varchar(5),
    GPA float(3,2),
    City varchar(20),
    PRIMARY KEY (Roll) / (Roll, Name) 
);
   </pre>

<!-- m4 -->  
<a class="to_jump" name="m4"></a>
<h3 class="all-center100">INSERT INTO</h3>
<pre class="s_code">
<span class="mark">Syntax</span>
  INSERT INTO table_name (column1, column2, column3, ...)
  VALUES (value1, value2, value3, ...);

<span class="mark">Example</span>
INSERT INTO  student(Roll,Name,Gender, Age, GPA, City)
  VALUES(NULL, 'Rahim', 'Male', 18, 3.44, 'Sylhet');
 
  <span class="mark">Insert Multiple Data:</span>
  
INSERT INTO  student(Roll,Name,Gender, Age, GPA, City)
  VALUES
  (NULL, 'Rahim', 'Male', 18, 3.44, 'Sylhet'),
  (NULL, 'Rahima', 'Female', 18, 3.44, 'Khulna');
    
  Insert Only Values:
  INSERT INTO  student VALUES(NULL, 'Only Value', 'Male', 18, 3.44, 'Sylhet');
    </pre>

<!-- m5 -->  
<a class="to_jump" name="m5"></a>
<h3 class="all-center100">Update</h3>
<pre class="s_code">
<span class="mark">UPDATE Syntax</span>
UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;

UPDATE student SET Age=18 WHERE Roll=1; 
    </pre>

<!-- m6-->  
<a class="to_jump" name="m6"></a>
<h3 class="all-center100">Delete</h3>
<pre class="s_code">
DELETE <span class="mark">Syntax</span>
DELETE FROM table_name WHERE condition;

<span class="mark">Delete All Records :</span> DELETE FROM table_name;

DELETE FROM student WHERE Roll=2;
DELETE FROM `student` WHERE `Roll` < 3;
DELETE FROM `student` WHERE `Roll` < 3;
DELETE FROM `student` WHERE `Name` LIKE 'him%';
DELETE FROM `student` WHERE `Name` LIKE '%him%';
DELETE FROM `student` WHERE `Name` LIKE '%him%' AND `Roll` IN (3, 4, 5);
    
    </pre>

<!-- m7 -->  
<a class="to_jump" name="m7"></a>
<h3 class="all-center100">MYSQL Select</h3>
<pre class="s_code">
<span class="mark">Syntax-1</span>
    SELECT column1, column2, ...
    FROM table_name; 

<span class="mark">Syntax-2</span>
        SELECT * FROM table_name;

SELECT * FROM student;

SELECT Roll, Name FROM student;

SELECT * FROM student LIMIT 5;

SELECT * FROM student LIMIT 3, 5;

SELECT DISTINCT Name FROM student;
    </pre>

<!-- m9 -->  
<a class="to_jump" name="m9"></a>
<h3 class="all-center100">MySQL Rename</h3>
<pre class="s_code">
RENAME TABLE student TO students;
ALTER TABLE student CHANGE tat tot int(5);
</pre>

<!-- m10 -->  
<a class="to_jump" name="m10"></a>
<h3 class="all-center100">Alter</h3>
<pre class="s_code">
   Syntax
        
ALTER TABLE table_name
ADD/DROP/MODIFY column_name datatype;

ALTER TABLE student ADD mark float(4, 2);

ALTER TABLE student MODIFY mark int(100);

ALTER TABLE student DROP mark;

ALTER TABLE student add id int(5) AFTER Roll;

ALTER TABLE student CHANGE tat tot int(5);

<div class="mark">
To change the data type, it have to use MODIFY.
</div>

Example
ALTER TABLE Customers
ADD Email varchar(255);
      
   </pre>

<!-- m -->  
<a class="to_jump" name="m"></a>
<h3 class="all-center100"></h3>
<pre class="s_code">
</pre>

<!-- m -->  
<a class="to_jump" name="m"></a>
<h3 class="all-center100"></h3>
<pre class="s_code">
</pre>