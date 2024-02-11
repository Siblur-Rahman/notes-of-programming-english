
      
      <!-- MYSQL SQL -->
         <!--
      <a class="to_jump" name=""></a>
      <h3 class="all-center100"></h3>
   <pre class="s_code">
   <span class="mark">Syntax</span>
        

    <span class="mark">Example</span>
      
   </pre> -->
   
   <a class="to_jump" name="3"></a>
      <h3 class="all-center100">MySQL WHERE</h3>
   <pre class="s_code">
   <span class="mark">Syntax</span>
   SELECT column1, column2, ...
    FROM table_name
    WHERE condition; 
<div class="mark">
Note: The WHERE clause is not only used in SELECT statements,
 it is also used in UPDATE, DELETE, etc.!</div>
    <span class="mark">Example</span>
    SELECT * FROM Customers
    WHERE Country = 'Mexico';
   </pre>
      <a class="to_jump" name="sql_dist"></a>
      <h3 class="all-center100"></h3>
   <pre class="s_code">
   <span class="mark">Syntax</span>
    SELECT DISTINCT column1, column2, ...
    FROM table_name; 

    <span class="mark">Example</span>-1
        SELECT DISTINCT Country FROM Customers;
   </pre>

   <!-- 4 -->
      <a class="to_jump" name="4"></a>
      <h3 class="all-center100">MySQL AND, OR and NOT</h3>
   <pre class="s_code">
AND <span class="mark">Syntax</span>
    SELECT column1, column2, ...
    FROM table_name
    WHERE condition1 AND condition2 AND condition3 ...;

OR <span class="mark">Syntax</span>
    SELECT column1, column2, ...
    FROM table_name
    WHERE condition1 OR condition2 OR condition3 ...;

NOT <span class="mark">Syntax</span>
    SELECT column1, column2, ...
    FROM table_name
    WHERE NOT condition; 
   
   </pre>

    <!--  -->
   <a class="to_jump" name=""></a>
      <h3 class="all-center100"></h3>
   <pre class="s_code">
IS NULL <span class="mark">Syntax</span>
    SELECT column_names
    FROM table_name
    WHERE column_name IS NULL;
<span class="mark">Example</span>
    SELECT CustomerName, ContactName, Address
    FROM Customers
    WHERE Address IS NULL;

    <div class="mark">Tip: Always use IS NULL to look for NULL values.</div>
IS NOT NULL <span class="mark">Syntax</span>
    SELECT column_names
    FROM table_name
    WHERE column_name IS NOT NULL;
<span class="mark">Example</span>
    SELECT CustomerName, ContactName, Address
    FROM Customers
    WHERE Address IS NOT NULL;  
      
   </pre> 

    <!-- MySQL LIKE Operator -->

    <a class="to_jump" name="13"></a>
      <h3 class="all-center100">MySQL LIKE Operator</h3>
<h4>
The LIKE operator is used in a WHERE clause to search for a specified pattern in a column. <br> <br>

There are two wildcards often used in conjunction with the LIKE operator: <br> <br>

    The percent sign (%) represents zero, one, or multiple characters <br>
    The underscore sign (_) represents one, single character <br><br>

The percent sign and the underscore can also be used in combinations!
</h4>
   <pre class="s_code">
   <span class="mark">Syntax</span>
        SELECT column1, column2, ...
        FROM table_name
        WHERE columnN LIKE pattern; 
    <span class="mark">Example</span>  
   </pre> 
   <div class="mark">Tip: You can also combine any number of conditions using AND or OR operators.</div>
   <pre class="s_code">
   LIKE Operator 	Description
WHERE CustomerName LIKE 'a%' 	Finds any values that start with "a"
WHERE CustomerName LIKE '%a' 	Finds any values that end with "a"
WHERE CustomerName LIKE '%or%' 	Finds any values that have "or" in any position
WHERE CustomerName LIKE '_r%' 	Finds any values that have "r" in the second position
WHERE CustomerName LIKE 'a_%' 	Finds any values that start with "a" and are at least 2 characters in length
WHERE CustomerName LIKE 'a__%' 	Finds any values that start with "a" and are at least 3 characters in length
WHERE ContactName LIKE 'a%o' 	Finds any values that start with "a" and ends with "o"
   </pre>
   <pre class="s_code">
    <span class="mark">Example</span>
    DELETE FROM `registration` WHERE `name` LIKE 'ua%' AND `id` IN (8, 9, 10, 11, 12);
   </pre>
      <!--
      <a class="to_jump" name=""></a>
      <h3 class="all-center100"></h3>
   <pre class="s_code">
   <span class="mark">Syntax</span>
        

    <span class="mark">Example</span>
      
   </pre> -->