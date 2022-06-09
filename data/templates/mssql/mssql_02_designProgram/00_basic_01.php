
<div class="appQuestion"><b>1. How can I detect whether a given connection is blocked?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A connection is blocked when it requires an object that another connection is using and has a lock on. One way is to use SQL Enterprise; Click on Node 
Management to expand it, then expand Current Activity by clicking on it, then click on Locks. Once you will click on Lock/Process ID, it will show all 
the Locks on the right hand side window.<br/><br/>
We can use the system stored procedure <code><b>sp_lock</b></code> to retrieve information about the current locks in SQL Server.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. How would you design a database for an online site, which would average a million hits a day?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This is an open ended question to check your understanding about the subject. The interviewer wants to see how inquisitive you are and how well you 
prepare before you jump on the design board. The interviewer certainly expects some more questions in reponse from you to see your analytical ability.<br/><br/>
Before you answer any thing you must ask, about the application.<br/><br/> 
<ul>
<li>What kind of application it is supporting?</li>
<li>Is it an On-line Transaction Processing (OLTP) or Decision Support System (DSS) application?</li>
<li>What time of day is the traffic is highest? Is the traffic evenly distributed, or does it come and go in peaks?</li>
<li>What is the spike threshold the site is expected to endure?</li>
<li>What is the size of the database?</li>
<li>How many tables will be there?</li>
<li>What is the hardware configuration?</li> 
<li>Is it preexisting, or is the interviewer expecting you to design that as well?</li>
<li>How many hard disks you will have?</li>
<li>What is the performance expectation?</li>
<li>What hardware is available?</li>
<li>Are the servers running clustering or SAN technology?</li>
</ul>
To approach this question, first get all the facts about the application and the system, and then begin reciting the best practices of database design.
For a good database design there are many things to be considered, but few of them are of paramount importance, namely :
<ol>
<li>Normalization and appropriate denormalization of the database</li>
<li>Proper indexing of the tables</li>
<li>Optimum use of the stored procedures, functions etc.</li>
<li>Distribution of data tables, their indicies and transaction logs on different hard disks</li>
<li>Proper choice of data types</li>
</ol>
After basic design with the help of a performace monitor, use the Index Tuning Wizard and Profiler to further refine the design to a more detailed level.
Above all, make sure you are desiging the right system. It would be unfortunate to ramble on for 15 minutes about all the correct things for a SQL Server 
implementation only to find out that the database will reside on a legacy server running Linux.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. You are testing the performance of a query. The first time you run the query, the performance is slow. The second time you run the query, the performance is fast. Why is this?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The second query is faster bacause SQL server caches the data, and keeps the query plans in memory.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. What you can do to remove data from the cache and query plans from memory for testing the performance of a query repeatedly?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If you want to run your query and test its performance under the same circumstances each time, use command <code><b>DBCC DROPCLEANBUFFERS</b></code> 
after each run to remove the data from the memory and <code><b>DBCC FREEPROCCACHE</b></code> to remove the query plans from the memory.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. Write the fastest query to find out how many rows exist in a table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The fastest query for this purpose is:
<pre><code class="language-html hljs xml">SELECT rows
FROM sysindexes
WHERE id = OBJECT_ID (tablename)
AND indid < 2</code></pre>
<br/>
With this query, SQL does not have to do a full table scan or an index scan to find out the number of rows in a table. The rows column in the 
<code><b>sysindexes</b></code> table keeps the current rowcount dynamically for the clustered index.<br/><br/>
If table has a clustered index then <code><b>indid = 1</b></code>.<br/>
If no clustered index exists then <code><b>indid = 0</b></code> for the table.<br/><br/>
<b>The statement :</b><br/><br/>
<code><b>SELECT COUNT(*) FROM TableName</b></code> requires a full table scan or full clustered index scan to determine the total number of rows. 
but it will not be the fastest.

<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>6. The COUNT() function always returns a int value type. What should you do if you need to count rows from a query which you know will return a value that is too large for an int value type?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If you think that the count function will be returning rows more than <code>2<sup>31</sup> - 1</b></code>, then you can use the new function 
<code><b>COUNT_BIG</b></code>, which always returns a big integer value type.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. What is a derived table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A <i>derived table</i> is just another name for the result of using another<i>SELECT</i> statement in the <i>FROM</i> clause of a <i>SELECT</i> statement. 
The result of an inner <i>SELECT</i> statement is a table, which is exactly what the <i>FROM</i> clause requires.
<pre><code class="language-html hljs xml">SELECT *
FROM (SELECT * FROM authors) as T WHERE T.city LIKE 'san%'</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>8. You have a table with three columns: Amount1, Amount2, and Amount3. In a single row only one of these three columns will have a value and the other two will be null. Write a SQL query to retrieve the values from these columns.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Use the COALESCE function.
<pre><code class="language-html hljs xml">SELECT ‘Amount’= COALESCE (Amount1, Amount2, Amount3) FROM TableName</code></pre>
<code><b>COALESCE</b></code> is equivalent to a searched CASE expression where a NOT NULL expression1 returns expression1 and a NULL expression1 returns 
expression2. In searched CASE expression form, it would look like this:
<pre><code class="language-html hljs xml">CASE
 
END
 
WHEN expression1 IS NOT NULL THEN expression1 ELSE expression2</code></pre>
 
<code><b>COALESCE</b></code> returns the first non-null value from the list.

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>9. Write a query to get all of the employees and all of the orders that were processed this year. Employees who have no orders should also be displayed.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Let's consider following tables :
<div class="container-fluid">
<div class="row">

<div class="col-md-6">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>Employees</th></tr></thead>
<tbody>
  <tr><td><i class="fa fa-key" aria-hidden="true"></i> EmployeeId</td></tr>
  <tr><td>&emsp; LastName</td></tr>
  <tr><td>&emsp; FirstName</td></tr>
  <tr><td>&emsp; Address</td></tr>
  <tr><td>&emsp; City</td></tr>
  <tr><td>&emsp; Region</td></tr>
  <tr><td>&emsp; Country</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>Employees</b></div>

</div>

<div class="col-md-6">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>Orders</th></tr></thead>
<tbody>
  <tr><td><i class="fa fa-key" aria-hidden="true"></i> OrderId</td></tr>
  <tr><td><i class="fa fa-key" aria-hidden="true"></i> EmployeeId</td></tr>
  <tr><td>&emsp; OrderDate</td></tr>
  <tr><td>&emsp; Freight</td></tr>
  <tr><td>&emsp; ShipName</td></tr>
  <tr><td>&emsp; ShipAddress</td></tr>
  <tr><td>&emsp; ShipCity</td></tr>
  <tr><td>&emsp; ShipRegion</td></tr>
  <tr><td>&emsp; ShipCountry</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>Orders</b></div>

</div>

</div>
</div>

<b>Query :</b><br/><br/>
<pre><code class="language-html hljs xml">SELECT e.EmpID, e.FirstName, e.LastName, o.Orders FROM Orders o
RIGHT OUTER JOIN Employee e ON
o.EmpID = e.EmpID
AND DATEPART(YYYY, OrderDate) = DATEPART(YYYY, GetDate()) ORDER BY EmpID
</code></pre>

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>10. How can you fix a poorly performing query?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some general issues that would cause a query to perform poorly that you could talk about would be: no indexes, table scans, missing or out of date 
statistics, blocking, excess recompilations of stored procedures, having procedures and triggers without the SET NOCOUNT ON directive, unnecessarily 
complicated joins, excessive normalization of the database, or inappropriate or unnecessary usage of cursors and temporary tables.<br/><br/>
Some of the tools and techniques that help you troubleshoot performance problems are:<br/><br/> 
<code><b>SET SHOWPLAN_ALL ON</b></code>, <code><b>SET SHOWPLAN_TEXT ON</b></code>, <code><b>SET STATISTICS IO ON</b></code>, <code><b>SQL Server Profiler</b></code>,
<code><b>Windows NT /2000 Performance monitor</b></code>, and <code><b>the graphical execution plan in Query Analyzer</b></code>.

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>11. What is	the	physical representation	for	a many-to-many relationship?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A many-to-many relationship is usually represented by a third table that resolves all valid combinations of the two entities.<br/><br/>
For example, consider a hospital, where a patient can be treated by different doctors and a doctor can have many patients. If we have two tables, 
defining Patients and Doctors each, we need a third table to define the relationship between Patients and Doctors.<br/><br/>
Another example can be found in the northwind database. There are orders, which can have many products, and each product can belong to many orders. 
To define the relationship between the order and product we use a third table, the [Order Details] table.<br/><br/>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>Orders</th></tr></thead>
<tbody>
  <tr><td>OrderID</td></tr>
  <tr><td>CustomerID</td></tr>
  <tr><td>EmployeeID</td></tr>
  <tr><td>OrderDate</td></tr>
  <tr><td>RequiredDate</td></tr>
  <tr><td>ShippedDate</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>Orders</b></div>

</div>
<div class="col-md-4">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>OrderDetails</th></tr></thead>
<tbody>
  <tr><td>OrderID</td></tr>
  <tr><td>ProductID</td></tr>
  <tr><td>UnitPrice</td></tr>
  <tr><td>Quantity</td></tr>
  <tr><td>Discount</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>OrderDetails</b></div>

</div>
<div class="col-md-4">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>Products</th></tr></thead>
<tbody>
  <tr><td>ProductID</td></tr>
  <tr><td>ProductName</td></tr>
  <tr><td>SupplierID</td></tr>
  <tr><td>CategoryID</td></tr>
  <tr><td>QuantityPerUnit</td></tr>
  <tr><td>UnitPrice</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>OrderDetails</b></div>

</div>
</div>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>12. What is the maximum length of an extended property?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The value of an extended property is a <code><b>sql_variant</b></code>. It can contain up to 7,500 bytes of data.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>13. In which database can extended stored procedures be added?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Extended stored procedures can only be added to the master database. In SQL Enterprise Manager, the master database must be selected to activate 
the extended stored procedures option. Only a person in the sysadmin role can add extended stored procedures.<br/><br/>
Extended stored procedures may also be installed via <code><b>sp_addextendedproc</b></code>, which will register the procedure in the master database.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>14. Why does query - SELECT (3/4) * 100 return 0?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Because 3/4 = 0.75 (Decimal) is converted into 0 (Integer), but the result is less than one, therefore it becomes 0.<br/><br/>
To make this query work use
<pre><code class="language-html hljs xml">SELECT	(3.0/4) * 100</code></pre>
<div align="center">or</div>
<pre><code class="language-html hljs xml">SELECT	(CAST (3 AS DOUBLE) / (4 AS DOUBLE) ) * 100</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>15. If a column is an image value type, how you can compare column values? How you can use this column in join clause?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You cannot use the equal (=) sign to compare a column of type image. You have to use substring function.<br/><br/>
<b>Example :</b><br/><br/>
<pre><code class="language-html hljs xml">SELECT d.emp, e.empname
FROM dept d
INNER JOIN Employee e ON
SUBSTRING(d.empNo,1,30) = SUBSTRING(e.empno,1,30)</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>16. Which data type cannot be used as a parameter in a UDF?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The <code><b>timestamp</b></code> data type and user-defined data types are not supported.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>17. Which four data types cannot be used as a return type from a user- defined function?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>text</b></code>, <code><b>ntext</b></code>, <code><b>image</b></code>, and <code><b>timestamp</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>18. Can an extended stored procedure be called from inside a user- defined function?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, however, the extended stored procedure, when called from inside a function, cannot return result sets to the client. Any ODS (open data services) 
APIs that return result sets to the client will return FAIL.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>19. How you can make a parameterized view?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Inline table-valued functions can be used to achieve the functionality of parameterized views.<br/><br/>

<pre><code class="language-html hljs xml">CREATE FUNCTION CustomerNamesInRegion ( @RegionParameter nvarchar(30) ) RETURNS table
AS
RETURN ( SELECT CustomerID, CompanyName FROM Northwind.dbo.Customers WHERE Region = @RegionParameter
)
GO

SELECT *
FROM CustomerNamesInRegion(N’WA’) GO</code></pre>

The RETURNS clause contains only the keyword table. You do not have to define the format of a return variable because it is set by the format 
of the result set of the SELECT statement in the RETURN clause.<br/><br/>
There is no function_body delimited by BEGIN and END.<br/><br/>
The RETURN clause contains a single SELECT statement in parentheses. The result set of the SELECT statement forms the table returned by the function. 
The SELECT statement used in an inline function is subject to the same restrictions as SELECT statements used in views.<br/><br/>

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>20. How long can an Error message be in RAISEERROR function?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The error message can have as many as 255 characters.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>21. What are the constraints on severity level in RAISEERROR?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Severity levels 0 through 18 can be used by any user. For severity levels 19 through 25, the WITH LOG option is required. Only the system 
administrator can issue RAISERROR with a severity level of 19 through 25.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>22. How can you log an error to the server event log from a stored procedure?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Use the WITH LOG option in the RAISERROR function.<br/><br/>

<pre><code class="language-html hljs xml">RAISEERROR (“This is an error”, 19, NULL) WITH LOG</code></pre>

The WITH LOG option logs the error in the server error log and the event log. This option is required for messages with a severity level of 19 
through 25, and it can be issued only by the system administrator.<br/>
Other options can be:<br/><br/>
<div class="table-responsive">          
<table class="table">
<tbody>
 <tr><td>NOWAIT</td><td>Sends messages immediately to the client server.</td></tr>
 <tr><td>SETERROR</td><td>Sets @@ERROR value to msg_id or 50000 regardless of the severity level</td></tr>
</tbody>
</table>
</div>
This example returns an @@ERROR value of 50000:
<pre><code class="language-html hljs xml">RAISERROR(‘Test Only’,1,2) WITH SETERROR</code></pre>
This example returns an @@ERROR value of 101:
<pre><code class="language-html hljs xml">RAISERROR (101, 1, 2) WITH SETERROR</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>23. Explain the Rollup operator?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The ROLLUP operator is an aggregate operator that delivers aggregates and super-aggregates for elements within a GROUP BY statement.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>24. Explain the Cube operator?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The ROLLUP operator is an aggregate operator that delivers aggregates and super-aggregates for elements within a GROUP BY statement. It differs from the 
CUBE operator only in that it is sensitive to column position in the GROUP BY clause.<br/><br/>
<b>Example :</b><br/><br/>
This example uses a SELECT query that contains an aggregate function and a GROUP BY clause, which lists pub_name, au_lname, and title, in that order.<br/><br/>

<pre><code class="language-html hljs xml">SELECT pub_name, au_lname, title, “SUM” = SUM (qty) FROM publishers, authors, titles, 
titleauthor, sales WHERE publishers.pub_id = titles.pub_id
AND authors.au_id = titleauthor.au_id
AND titleauthor.title_id = titles.title_id AND titles.title_id = sales.title_id
GROUP BY pub_name, au_lname, title WITH ROLLUP</code></pre>

By using the ROLLUP operator, these groupings are created by moving right to left along the list of columns:<br/><br/>

<div class="table-responsive">          
<table class="table">
<tbody>
 <tr><td>pub_name</td><td>au_lname</td><td>title</td><td>SUM (qty)</td></tr>
 <tr><td>pub_name</td><td>au_lname</td><td>(null)</td><td>SUM (qty)</td></tr>
 <tr><td>pub_name</td><td>(null)</td><td>(null)</td><td>SUM (qty)</td></tr>
 <tr><td>(null)</td><td>(null)</td><td>(null)</td><td>SUM (qty)</td></tr>
</tbody>
</table>
</div>

The (null) value represents all values for that column.<br/><br/>
If you use the SELECT statement without the ROLLUP operator, the statement creates a single grouping. The query returns a sum value for each unique 
combination of pub_name, au_lname, and title.<br/><br/>

<div class="table-responsive">          
<table class="table">
<tbody>
 <tr><td>pub_name</td><td>au_lname</td><td>title</td><td>SUM (qty)</td></tr>
</tbody>
</table>
</div>

Compare these examples with the groupings created by using the CUBE operator on the same query:<br/><br/>

<div class="table-responsive">          
<table class="table">
<tbody>
 <tr><td>pub_name</td><td>au_lname</td><td>title</td><td>SUM (qty)</td></tr>
 <tr><td>pub_name</td><td>au_lname</td><td>(null)</td><td>SUM (qty)</td></tr>
 <tr><td>pub_name</td><td>(null)</td><td>(null)</td><td>SUM (qty)</td></tr>
 <tr><td>(null)</td><td>(null)</td><td>(null)</td><td>SUM (qty)</td></tr>
 <tr><td>(null)</td><td>au_lname</td><td>title</td><td>SUM (qty)</td></tr>
 <tr><td>(null)</td><td>au_lname</td><td>(null)</td><td>SUM (qty)</td></tr>
 <tr><td>pub_name</td><td>(null)</td><td>title</td><td>SUM (qty)</td></tr>
 <tr><td>(null)</td><td>(null)</td><td>title</td><td>SUM (qty)</td></tr>
</tbody>
</table>
</div>

For cube, Columns included in the GROUP BY clause are cross-referenced to produce a superset of groups. The aggregate function specified in the 
select_list is applied to these groups to produce summary values for the additional super-aggregate rows. The number of extra groups in the results 
set is determined by the number of columns included in the GROUP BY clause.<br/><br/>
Every possible combination of the columns or expressions in the GROUP BY clause is used to produce super-aggregates. If you have n columns or 
expressions, there are 2 (n) -1 possible super-aggregate combinations. Mathematically, these combinations form an n-dimensional cube, which is how 
the operator got its name.<br/><br/>
This example demonstrates the results set from a SELECT statement that uses the CUBE operator. The SELECT statement covers a one-to-many relationship 
between book titles and the quantity sold of each book. By using the CUBE operator, the statement returns an extra row.<br/><br/>
<pre><code class="language-html hljs xml">SELECT	title, “Qty” = SUM(qty) FROM	sales, titles
WHERE	sales.title_id = titles.title_id
GROUP BY	title WITH CUBE</code></pre>
This is the results set:<br/><br/>
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Title</th><th>Qty</th></tr></thead>
<tbody>
 <tr><td>But Is It User Friendly?</td><td>30</td></tr>
 <tr><td>Computer Phobic AND Non-Phobic	Individuals: Behavi</td><td>20</td></tr>
 <tr><td>You Can Combat Computer Stress!</td><td>35</td></tr>
 <tr><td>(null)</td><td>85</td></tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>25. What is an application role and explain a scenario when you would use one?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Application roles allow the application, rather than SQL Server, to take over the responsibility of user authentication. A user's association with an 
application role is due to his ability to run an application that activates the role, rather than his being a member of the role.<br/><br/>
Application roles are different from standard roles. Application roles contain no members. Microsoft Windows NT 4.0 or Windows 2000 groups, users, and 
roles cannot be added to application roles; the permissions of the application role are gained when the application role is activated for the user 
connection through a specific application or applications. Application roles are inactive by default and require a password to be activated. Approle is 
only active for the duration of the connection context in which it is established.<br/><br/>
As an example of application role usage, a user, Alexis, runs a sales application that requires SELECT, UPDATE, and INSERT permissions on the Products 
and Orders tables in database Sales to work, but she should not have any SELECT, INSERT, or UPDATE permissions when accessing the Products or Orders 
tables using SQL Query Analyzer or any other tool. To ensure this security structure, create one user- database role that denies SELECT, INSERT, or 
UPDATE permissions on the Products and Orders tables, and adds Alexis as a member of that database role. Then create an application role in the Sales 
database with SELECT, INSERT, and UPDATE permissions on the Products and Orders tables. When the application runs, it provides the password to activate 
the application role by using sp_setapprole, and gains the permissions to access the Products and Orders tables. If Alexistries to log in to an instance 
of SQL Server using any tool except the application, she will not be able to access the Products or Orders tables.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>26. On Friday, you issued several INSERT statements using Query Analyzer. You then verified the data had been correctly entered with a SELECT statement. On Monday, your users report that the data is not there. What happened?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>IMPLICIT_TRANSACTION</b></code> mode was enabled (on) for the connection.<br/><br/>
In this mode, after inserting or manipulating data, you must issue the <code><b>COMMIT TRANSACTION</b></code> statement to save the data permanently. 
Otherwise, once the connection is broken all your inserts are rolled back. To turn on this option use the SQL statement :<br/><br/>
<pre><code class="language-html hljs xml">SET IMPLICIT_TRANSACTIONS ON</code></pre>
To turn this options off use the SQL statement:
<pre><code class="language-html hljs xml">SET IMPLICIT_TRANSACTIONS OFF</code></pre>

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>27. You have two tables with a one to many join based on a field named ID. You need to find records in the parent table that are not represented in the child table. How would you accomplish this?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You can use a <code><b>LEFT JOIN</b></code> to show records that exist in one table, but not another.<br/><br/>
<b>For example :</b><br/>
<pre><code class="language-html hljs xml">SELECT parent.ID, child.ID FROM parent
LEFT JOIN child
ON parent.ID = child.ID WHERE child.ID is NULL</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>28. Give an example of why you would want to denormalize a database.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The best reason to denormalize a database is to increase performance.<br/><br/>
For example, in an OLAP (On-Line Analytical Processing) application, you could denormalize the database to include summarized numbers for quarterly 
profit that are often reports. Instead of calculating these values each time you need them, the exist to be queried agains without calculation. This 
type of denormalization works best when the data changes infrequently, such as is often the case with historical data.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>29. Explain extended properties.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Extended properties are the properties that a user can assign to any object in a database. These extended properties can be used to store 
application-specific or site-specific information about the database objects. Because the property is stored in the database, all applications reading 
the property can evaluate the object in the same way. This helps enforce consistency in the way data is treated by all of the programs in the system.<br/><br/>
<b>For example,</b> the caption of a column can be defined as an extended property. All applications can use the same caption in a user interface that 
displays information from that column. Another example can store help description information as an extended property.<br/><br/>
To create an extended property use the following steps:
<ol>
<li>Open the Query Analyzer and launch the object browser.</li>
<li>Navigate to the column of the desired table.</li>
<li>Right click the column and select Extended Property.</li>
</ol>
A new dialog box will let you create the extended properties or edit exiting one. To access them from your program use the 
<code><b>fn_listextendedproperty</b></code> function.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>30. You have couple of stored procedures that depend on a table. You dropped the table and recreated it. What do you have to do to reestablish those stored procedure dependencies?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You have to recreate the stored procedure, at the time of this writing SQL2000 doesn’t have very reliable automatic dependency tracking feature. 
This limitation may be removed in future version of SQL Server.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>31. How can you append an identity column to a temporary table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">SELECT CommonName INTO #TempTable FROM tblApplication ALTER TABLE #TempTable ADD NameID INT identity</code></pre>
The above query is not very optimized.   Alter table command logs updates on a row-by-row basis, and if the appropriate fill factor is not specified it 
will split pages too. The better option can be select into, with identity function, because SQL server has to pass through the data only once and SELECT 
INTO uses FAST BULK LOAD API to copy the data.<br/><br/>
<pre><code class="language-html hljs xml">SELECT IDENTITY (int, 1,1) AS NAMEID
CommonName INTO #TempTable FROM tblApplication</code></pre>

Write both the queries in SQL Query analyzer and view the query execution plan for each.

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>32. You schedule a job to run every minute. What will happen if the first job runs more than 1 min? Will the second instance of the job start?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, Only one instance of a job can run at a time. If you execute a job manually while it is running as scheduled, SQL Server Agent refuses the request. 
The timer for the second job will start only after first job ends.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>33. Why should you use or avoid SELECT * …. statements?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You can use a SELECT * statement when you are familiar with the data structure and are aware of which columns you will be returning.<br/><br/>
SELECT * statements should be avoided in several cases. For example, in the case of a stored procedure, if an underlying table structure is modified that 
the SELECT statement relies upon, aspects of the stored procedure will change. You may also notice a performance decrease when using a SELECT * when many 
columns are added to the table specified in the FROM clause.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>34. You have several tables, and they are joined together for querying. The tables contain both clustered indexes and non clustered indexes. To optimize performance, how should you distribute the tables and their indexes onto different file groups?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Try to keep the non-clustered indexes on different file groups from their tables and on different disks so that they can be scanned in parallel for data. 
You cannot separate clustered indexes from the underlying table.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>35. Which event (Check constraints, Foreign Key, Rule, Trigger, Primary key check) will be performed last for an integrity check?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Triggers are performed last for intregity checks.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>36. What is the fastest way to permanently delete a 1 million row table named customers?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Truncate the customers table and then drop table customers.<br/><br/>
The TRUNCATE TABLE statement is a fast, nonlogged method of deleting all rows in a table. It is almost always faster than a DELETE statement with no 
conditions because DELETE logs each row deletion and TRUNCATE TABLE logs only the deallocation of whole data pages. TRUNCATE TABLE immediately frees 
all the space occupied by data and indexes. The distribution pages for all indexes are also freed.<br/><br/>
When a TRUNCATE TABLE is performed, the definition of the table remains in the database, along with its indexes and other associated objects. The DROP 
TABLE statement must be used to drop the definition of the table.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>37. In a stored procedure, some errors terminate the stored procedure, how you can bypass these errors and continue execution? </b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Lets consider -
USE Northwind GO
<pre><code class="language-html hljs xml">SELECT * FROM aTable IF @@ERROR<>0 BEGIN
PRINT ‘ Table does not exist’
-- create a new table here END</code></pre>
One workaround is to use the <code><b>sp_executesql</b></code> command
<pre><code class="language-html hljs xml">DECLARE @err int
EXEC @err = sp_executesql N’	SELECT * FROM aTable’ IF @err <> 0 BEGIN
PRINT ‘ Table does not exist’
-- create a new table END</code></pre>
Other alternative is write a separate procedure, and check @@ERROR after the execution.
<pre><code class="language-html hljs xml">CREATE PROCEDURE CheckTable AS
SELECT * FROM aTable

USE Northwind GO
EXEC CheckTable
IF @@ERROR <> 0 BEGIN
PRINT ‘Table does not exist’
-- create a new table
END</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>38. After removing a table from database, what other related objects have to be dropped explicitly?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Referring Stored Procedures and views that refer to the table need to be dropped explicitly.<br/><br/>
DROP TABLE removes a table definition and all data, indexes, triggers, constraints, and permission specifications for that table, however, any view or 
stored procedure that references the dropped table must be explicitly dropped by using the DROP VIEW or DROP PROCEDURE statement.<br/><br/>
DROP TABLE cannot be used to drop a table being referenced by a FOREIGN KEY constraint. The referencing FOREIGN KEY constraint or the referencing table 
must first be dropped.<br/><br/>
When a table is dropped, “rules” or “defaults” on it lose their binding, and any constraints or triggers associated with it are automatically dropped. 
If you re-create a table, you must rebind the appropriate rules and defaults, re-create any triggers, and add all necessary constraints.<br/><br/>
You cannot use the DROP TABLE statement on system tables.<br/><br/>
If you delete all rows in a table (DELETE tablename) or use the TRUNCATE TABLE statement, the table exists until it is dropped.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>39. You want to check the syntax of a complicated Update SQL statement without executing it. What command should you use?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>SET NOEXEC ON</b></code><br/><br/>
When SET NOEXEC is ON, Microsoft SQL Server compiles each batch of Transact-SQL statements but does not execute them. When SET NOEXEC is OFF, all 
batches are executed after compilation.<br/><br/>
The execution of statements in SQL Server consists of two phases: compilation and execution. This setting is useful for having SQL Server validate 
the syntax and object names in Transact-SQL code when executing. It is also useful for debugging statements that would usually be part of a larger 
batch of statements.<br/><br/>
SET NOEXEC is set at execute or run time and not at parse time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>40. You are the database developer for a leasing company. Your leasing database includes a lease table that has a column which keeps Social security numbers. Each SSN must be unique. You want the data to be physically stored in order by SSN. What constraint should you add to the SSN column on the lease table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A <code><b>UNIQUE CLUSTERED</b></code> constraint should be used to achieve the requirement that the data is physically stored in the order of SSN.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>41. You are designing a database for your company. Your Company has 10 departments and each department has between 25 to 100 employees. Each employee may work for one or more departments. How can you represent this relationship in your ERD (entity relationship diagram)?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This is a classic example of a many-to-many relationship. Create a new table entity. Create a one-to- many relation from the employee to the new entity. 
Create a many-to-one relationship from the entity to the department entity.<br/><br/>
You need to create an additional table to act as a junction table to let the many-to-many relationship be translated into two one-to-many 
relationships.<br/><br/>
In an example from the northwind database, each order can have many products, and a product can belong to many orders. To represent this many to many 
relationship, a new table called [Order details] is created, which has relationships with the orders and products table as shown in the diagram.
<div class="container-fluid">
<div class="row">
<div class="col-md-4">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>Products</th></tr></thead>
<tbody>
  <tr><td>ProductID</td></tr>
  <tr><td>ProductName</td></tr>
  <tr><td>SupplierID</td></tr>
  <tr><td>CategoryID</td></tr>
  <tr><td>QuantityPerUnit</td></tr>
  <tr><td>UnitPrice</td></tr>
  <tr><td>UnitsInStock</td></tr>
  <tr><td>UnitsOnOrder</td></tr>
  <tr><td>ReorderLevel</td></tr>
  <tr><td>Discontinued</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>Products</b></div>


</div>
<div class="col-md-4">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>OrderDetails</th></tr></thead>
<tbody>
  <tr><td>OrderID</td></tr>
  <tr><td>ProductID</td></tr>
  <tr><td>UnitPrice</td></tr>
  <tr><td>Quantity</td></tr>
  <tr><td>Discount</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>OrderDetails</b></div>

</div>
<div class="col-md-4">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>Orders</th></tr></thead>
<tbody>
  <tr><td>OrderID</td></tr>
  <tr><td>CustomerID</td></tr>
  <tr><td>EmployeeID</td></tr>
  <tr><td>OrderDate</td></tr>
  <tr><td>RequiredDate</td></tr>
  <tr><td>ShippedDate</td></tr>
  <tr><td>ShipVia</td></tr>
  <tr><td>Freight</td></tr>
  <tr><td>ShipName</td></tr>
  <tr><td>ShipAddress</td></tr>
  <tr><td>ShipCity</td></tr>
  <tr><td>ShipRegion</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>Orders</b></div>

</div>
</div>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>42. Export information periodically from a Microsoft SQL Server database to an Oracle Database. What is the best way to do this?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Data Transformation Services (DTS) is the best way. Create a DTS package to connect to the Oracle Database and export the information.
<!-- Answer ::: END --> 
</div>
</div>

<div class="appQuestion"><b>43. You are designing a database for your human resources department. In the employee table, there is a field for Social Security Number, which cannot contain NULL values. If no value is given, you want a value of UNKNOWN to be inserted in this field. What is the best approach?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Create a DEFAULT constraint on the Social Security Number field that will populate the field with a value of UNKNOWN if the Social Security Number 
is left blank. Remember, this will work only if Social security field does not have uniqe constraint.<br/><br/>
Alternately, in the design of the table, you can define a default property for the Social Security Number.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>44. Is it true that rules do not apply to data already existing in a database at the time the rule is created?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. Rules do not apply to data already existing in the database at the time the rule is created.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>45. Is it true, that there is no difference between a rule and a check constraint?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, it is false. Rules are a backward compatibility feature that performs some of the same functions as CHECK constraints. CHECK constraints are 
the preferred, standard way to restrict the values in a column.<br/><br/>
Rules do not apply to data already existing in the database at the time the rules are created, and rules cannot be bound to system data types.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>46. Can a rule be bound to any column of any data type?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. Rules cannot be bound to system data types.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>47. You are responsible for designing the physical architecture of an OLTP system. You have two tables TableA and TableB that will be joined together by several queries. You need good reliability and high performance for these queries. What should you do?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Create three filegroups FGA, FGB, FGC on three separate disks. Place TableA on FGA, TableB on FGB, and an index of the two tables on FGC.<br/><br/>
To maximize performance, create files or filegroups on as many different available local physical disks as possible, and place objects that compete 
heavily for space in different filegroups.<br/><br/>
Use filegroups to allow placement of objects on specific physical disks so that they can be scanned in parallel.<br/><br/>
Place different tables frequently joined in the same query in different filegroups. This will improve performance due to parallel disk I/O searching 
for joined data.<br/><br/>
Place heavily accessed tables and the nonclustered indexes belonging to those tables on different filegroups. This will improve performance, due to 
parallel I/O if the files are located on different physical disks. Do not place the transaction log file(s) on the same physical disk with the other 
files and filegroups.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>48. What is RAID, and how it can influence database performance?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
RAID is a redundant array of inexpensive (or independent) disks.<br/><br/>
RAID Configure the database on a RAID 0 drive and then place the transaction log on a mirrored drive (RAID 1).<br/><br/>
A hardware disk array improves I/O performance because I/O functions, such as striping and mirroring, are handled efficiently in firmware. Conversely, 
an operating system-based RAID offers lower cost but consumes processor cycles. When cost is a consideration and redundancy and high performance are 
required, Microsoft Windows NT(r) stripe sets with parity are a good solution.<br/><br/>
Data striping (RAID 0) is the RAID configuration with the highest performance, but if one disk fails, all the data on the stripe set becomes inaccessible. 
A common installation technique for relational database management systems is to configure the database on a RAID 0 drive and then place the transaction 
log on a mirrored drive (RAID 1). You can get the best disk I/O performance for the database and maintain data recoverability (assuming you perform regular 
database backups) through a mirrored transaction log.<br/><br/>
If data must be quickly recoverable, consider mirroring the transaction log and placing the database on a RAID 5 disk. RAID 5 provides redundancy of all 
data on the array, allowing a single disk to fail and be replaced in most cases without system downtime. RAID 5 offers lower performance than RAID 0 or 
RAID 1 but higher reliability and faster recovery.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>49. You work at the corporate office of a Fortune 500 company that has regional offices in 100 countries. Each regional office maintains its own customer table. This information needs to be brought to the corporate office and merged, to do some analysis for the marketing department. The marketing department also needs to uniquely identify each customer. How should you design the customer table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Use a uniqueidentifier datatype to contain the customer ID.<br/><br/>
<pre><code class="language-html hljs xml">CREATE TABLE customer(
cust_id uniqueidentifier NOT NULL DEFAULT newid(), company varchar(30) NOT NULL, …</code></pre>
A single globally unique identifier column can be created within each table that contains values unique across all networked computers in the world. 
A column that is guaranteed to contain globally unique values is often useful when similar data from multiple database systems must be merged (for 
example, in a customer billing system with data located in various company subsidiaries around the world). When the data is merged into the central 
site for consolidation and reporting, using globally unique values prevents customers in different countries from having the same billing number or 
customer ID.<br/><br/>
Microsoft SQL Server also uses globally unique identifier columns for merge replication to ensure that rows are uniquely identified across multiple 
copies of the table.<br/><br/>
SQL Server uses the IDENTITY and ROWGUIDCOL properties to implement identifier columns.<br/><br/>
The uniqueidentifier data type stores 16-byte binary values that operate as globally unique identification numbers (GUID). A GUID is a binary number 
that is guaranteed to be unique; no other computer in the world will generate a duplicate of that GUID value. The main use for a GUID is for assigning 
an identifier that must be unique in a network that has many computers at many sites.<br/><br/>
The uniqueidentifier data type does not automatically generate new IDs for inserted rows the way the IDENTITY property does. To get new uniqueidentifier 
values, a table must have a DEFAULT clause specifying the NEWID function, or INSERT statements must use the NEWID function.<br/><br/>
A table can have multiple uniqueidentifier columns. One uniqueidentifier column per table may be specified with the ROWGUIDCOL property. The ROWGUIDCOL 
property indicates that the uniqueidentifier values in the column uniquely identify rows in the table. The property does not do anything to enforce this, 
however. The uniqueness must be enforced through other mechanisms, such as specifying the PRIMARY KEY constraint for the column. The ROWGUIDCOL property 
is primarily used by SQL Server replication.<br/><br/>
If you subscribe to a merge publication without initializing the subscription, you are responsible for ensuring that the table schema and data are 
identical for the published article and the destination table. Both the Publisher and Subscriber tables must already have a ROWGUIDCOL column and the 
values for the ROWGUIDCOL column at the Publisher and Subscriber must be identical. Do not simply run at both the Publisher and Subscriber a script to 
CREATE TABLE, add a ROWGUIDCOL column, and assign a default of newid() to the column. The script will not assign identical values because the information 
used to calculate the ROWGUIDCOL values is different at the Publisher and Subscriber. Instead, use DTS or bulk copy to move the ROWGUIDCOL values (and 
other data) from the Publisher to the Subscriber.<br/><br/>
An alternate method that is used frequently due to the size of the uniqueidentifier data type is to give each of the branch offices a specific data range 
to use. For example, the first office could use 1000000000 to 1099999999 and the second could use 110000000 to 119999999, etc. This method may be faster 
but it also has the possibility for duplicates.<br/><br/>
Choose the best method for your specific needs.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>50. Explain the DBCC PINTABLE command. When would you use it?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
DBCC PINTABLE is best used to optimize performance from small, frequently referenced tables. The pages for the small table are read into memory the 
first time they are used, and subsequent references to the data does not require a disk read.<br/><br/>
SQL Server does not flush pinned pages when it needs space to read in a new page. DBCC PINTABLE does not cause the table to be read into memory. As 
the pages from the table are read into the buffer cache by normal Transact-SQL statements, they are marked as pinned pages. SQL Server still logs 
updates to the page and, if necessary, writes the updated page back to disk. However, SQL Server does keep a copy of the page available in the buffer 
cache until the table is unpinned with the DBCC UNPINTABLE statement.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>51. You have to design a database for a manufacturing plant. Among other things, this database maintains the attendance of the workshop employees who work in 3 shifts. The Attendance table should have a field named ‘Shift’, which stores the shift that the employee worked. The Workshop supervisor should be able to input only 1, 2 or 3 in this field. What is the best design, to implement this requirement?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Use a check constraint. Constraints offer a way to have Microsoft SQL Server enforce the integrity of a database automatically. Constraints define rules 
regarding the values allowed in columns and are the standard mechanism for enforcing integrity, preferred over triggers, rules, and defaults. They are 
also used by the query optimizer to improve performance in selectivity estimation, cost calculations, and query rewriting. Rules, a backward compatibility 
feature, also perform some of the same functions as check constraints.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>52. What is a transaction and why is it important?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A transaction is a sequence of one or more actions, which together form a logical unit of work. Generally, the actions are interdependent and all must 
be successfully completed or undone for the database to remain in a consistent state. The popular example of a transaction is a bank account transfer 
from checking to savings. The money is withdrawn from checking and deposited to savings as one complete unit. It would be an incomplete transaction 
if the data were removed from checking and the savings information was not updated.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>53. What is deadlock?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A deadlock occurs between two processes, when one process is waiting for an object the other process has locked. A thread in a multi-threaded system may 
acquire one or more resources (locks). If another thread (Thread B) currently owns the resource being acquired, the first thread (Thread A) may have to 
wait for the owning thread to release the target resource. The waiting thread (Thread B) is said to have a dependency on the owning thread (Thread A) 
for that particular resource.<br/><br/>
If the owning thread (Thread A) wants to acquire another resource that is currently owned by the waiting thread, the situation becomes a deadlock: both 
threads cannot release the resources they own until their transactions are committed or rolled back, and their transactions cannot be committed or rolled 
back because they are waiting on resources the other owns.<br/><br/>
Deadlocking is often confused with normal blocking. When one transaction has a lock on a resource that another transaction wants, the second transaction 
waits for the lock to be released. The second transaction is blocked, not deadlocked.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>54. What is a livelock?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A livelock occurs when a request for an exclusive lock is repeatedly denied because a series of overlapping shared locks keeps interfering. 
SQL Server detects the situation after four denials and refuses further shared locks. A livelock also occurs when read transactions monopolize 
a table or page, forcing a write transaction to wait indefinitely.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>55. How you can minimize the deadlock situation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To minimize deadlocks:
<ul>
<li><b>Access objects in the same order :</b><br/>
If all concurrent transactions access objects in the same order, deadlocks are less likely to occur. Use stored procedures for all data modifications, 
to standardize the order of accessing objects.</li>
<li><b>Avoid user interaction in transactions :</b><br/>
Do not write an application where a user needs to reply a prompt requested by an application during a transaction.</li>
<li><b>Keep transactions short and in one batch :</b><br/>
When several long-running transactions execute concurrently in the same database, chances of having a deadlock increase. The longer the transaction, 
the longer the exclusive or update locks are held, blocking other activity and leading to possible deadlock situations.</li>
<li><b>Use a low isolation level :</b><br/>
Read committed holds shared locks for a shorter duration than a higher isolation level such as serializable.</li>
<li><b>Use bound connections :</b><br/>
Two or more connections opened by the same application can cooperate. Any locks acquired by the secondary connections are held as if they were 
acquired by the primary connection, and vice versa, and therefore do not block each other.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>56. What is the importance of concurrency control?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
. Managing records so that no more than one person can update a record at any time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>57. Define Joins?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A join is a way of taking the results of one table, view, or query and correlating them with the results of another table, view, or query. 
Join conditions can be specified in either the FROM or WHERE clauses; specifying them in the FROM clause is recommended. WHERE and HAVING clauses 
can contain search conditions to further filter the rows selected by the join conditions. Joins can be categorized as inner, outer and cross joins.<br/><br/>
Inner joins (the most common join operation, which uses some comparison operator like = or <>). These include equi-joins and natural joins.<br/><br/>
Inner joins use a comparison operator to match rows from two tables based on the values in columns from each table.<br/><br/>
When executing an INNER JOIN the keyword INNER is optional.<br/><br/>
For example, here is an inner join retrieving the authors who live in the same city and state as a publisher:
<pre><code class="language-html hljs xml">USE	pubs
SELECT	a.au_fname, a.au_lname, p.pub_name FROM	authors a
INNER JOIN publishers p ON a.city = p.city
AND a.state = p.state
ORDER BY	a.au_lname ASC, a.au_fname ASC</code></pre>
<br/>
The tables or views in the FROM clause can be specified in any order with an inner join or full outer join; however, the order of tables or views 
specified when using either a left or right outer join is important.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>58. What is an outer join?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A join that includes all rows from the side specified as ‘outer’ regardless of whether there is a matching row or not.
<pre><code class="language-html hljs xml">SELECT * 
FROM authors a
FULL OUTER JOIN titleauthor ta ON a.au_id = ta.au_id</code></pre>
Because an outer join includes unmatched rows, you can use it to find rows that violate foreign key constraints.<br/><br/>

When you create an outer join, the order in which tables appear in the SQL statement is significant. The first table you add becomes the "left" table 
and the second table becomes the "right" table. When you specify a left or right outer join, you are referring to the order in which the tables were 
added to the query and to the order in which they appear in the SQL statement in the SQL pane.<br/><br/>
There are three variations of outer join.<br/><br/>
Left outer join All rows from the first-named table (the "left" table, which appears leftmost in the JOIN clause) are included. Unmatched rows in the 
right table do not appear. In this example the “left” table is titles and the “right” table is “publishers”.<br/><br/>
<pre><code class="language-html hljs xml">SELECT titles.title_id, titles.title, publishers.pub_name
FROM titles
LEFT OUTER JOIN publishers
ON titles.pub_id = publishers.pub_id</code></pre>

The above query include all titles, even those who do not have publisher id.<br/><br/>
Right outer join All rows in the second-named table (the "right" table, which appears rightmost in the JOIN clause) are included. A right outer join 
between the titles and publishers tables will include all publishers, even those who have no titles in the titles table.<br/><br/>
The resulting SQL might look like this:
<pre><code class="language-html hljs xml">SELECT titles.title_id, titles.title, publishers.pub_name
FROM titles
RIGHT OUTER JOIN publishers
ON titles.pub_id = publishers.pub_id</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>59. Define a cross join?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This is an example of a Transact-SQL cross join:
<pre><code class="language-html hljs xml">USE pubs
SELECT	au_fname, au_lname, pub_name FROM	authors
CROSS JOIN publishers ORDER BY	au_lname DESC</code></pre>
The result set contains the number of author rows multiplied by the number of publisher rows.<br/><br/>
(For example, if authors has 23 rows and publishers has 8; 23 multiplied by 8 equals 184 total rows).<br/><br/>
A cross join that does not have a WHERE clause produces the Cartesian product of the tables involved in the join. The size of a Cartesian product result 
set is the number of rows in the first table multiplied by the number of rows in the second table.<br/><br/>
However, if a WHERE clause is added, the cross join behaves as an inner join.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>60. How you can change a cross join into an inner join?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If a where clause is added to the cross join query it will behave as an inner join.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>61. Define constraints and give an example of their use?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Constraints are used to maintain domain and entity integrity in a database.<br/><br/>
<b>Types of constraints:</b>
<ul>
<li>NOT NULL</li>
<li>CHECK</li>
<li>UNIQUE</li>
<li>PRIMARY KEY</li>
<li>FOREIGN KEY</li>
</ul>
<b>NOT NULL constraint :</b><br/> 
It would prevent a particular column from having null entries.<br/> 
For example, the Birth Date field in a medical record.<br/><br/>
<b>CHECK constraint :</b><br/> 
It will limit a column to values that are defined by the check constraint.<br/> 
For example, a date field could be limited to dates that are greater than or equal to the current date.<br/><br/>
<b>UNIQUE constraint :</b><br/>
It will return an error if a value for a column has been used in another row in the table. This is helpful when you want to enforce that all values 
are unique, but the column is not the Primary Key, for example, with Drivers License or Social Security Numbers.<br/><br/>
<b>PRIMARY KEY constraint :</b><br/> 
It works similarly to the UNIQUE constraint; however, the PRIMARY KEY also impacts the physical storage of the data. SQL Server enforces a PRIMARY KEY 
constraint with a UNIQUE constraint.<br/><br/>
<b>FOREIGN KEY constraint :</b><br/> 
It works similarly to a CHECK constraint, except that for its domain of valid values, it will use the PRIMARY KEY of a table.<br/> 
For example, a database has a BOOKS table and an AUTHORS table. The BOOKS table has an AUTHORID. The AUTHORS table has a PRIMARY KEY called AUTHORID. 
The BOOKS table could create a FOREIGN KEY constraint that would validate that any AUTHORID entered was already in the AUTHORS table.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>62. Write a SQL Query to sort on different column name according to the parameters passed in the function.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">CREATE FUNCTION [ListProducts] (@OrderBy int) RETURNS TABLE
AS

RETURN
(
SELECT productID, ProductName FROM Products ORDER BY
CASE WHEN @OrderBy = 1 THEN ProductID END,
CASE	WHEN @OrderBy = 2 THEN ProductName END
)


select * from NorthWind.dbo.ListProducts</code></pre>

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>63. What is the downside of using User Defined Functions?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
User defined functions are powerful and flexible; however, User Defined Functions use row-by-row processing, which can be very expensive.<br/><br/>
Let us see it in detail with an example:<br/><br/>
If I have a function, which gives me the day of the week
<pre><code class="language-html hljs xml">CREATE FUNCTION GetDayofWeek (@Date Datetime, @Day int) RETURNS CHAR(12)
BEGIN
RETURN ( SELECT CONVERT (CHAR,  DATEADD(dd,-(DATEPART(dw, @Date
) - @Day ), @Date), 101)) END</code></pre>

If I execute these two statements, one with UDF, one with out it.
<pre><code class="language-html hljs xml">select top 100 Empid, dbo.GetDayOfWeek (JobDate, 1 ) from Timesheet</code></pre>

<pre><code class="language-html hljs xml">select top 100 Empid,
CONVERT (CHAR, DATEADD(dd,-(DATEPART(dw, JobDate ) - 1 ), JobDate), 101)
from Timesheet</code></pre>

After profiling these queries, I see the Query with UDF did many more reads, took excessively much time, and consumed more CPU too.
<div class="table-responsive">          
<table class="table">
<thead><tr><th></th><tr><th>Read</th><th>CPU</th><th>Duration</th></tr></thead>
<tbody>
 <tr>
  <td>Query With UDF</td>
  <td>220</td>
  <td>18</td>
  <td>15</td>
 </tr>
 <tr>
  <td>Query Without UDF</td>
  <td>16</td>
  <td>0</td>
  <td>0</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>64. You have a stored procedure, which execute a lengthy batch job. This stored procedure is called from a trigger. You do not want to slow the data entry process. You do not want trigger to wait for this batch job to finish before it completes itself. What you can do to speed up the process?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
One solution can be to execute the stored procedure from a job, and that job in turn can be called from Trigger.<br/><br/>
Using SQL Server Agent, define a job ‘MyBatchJob’. This job should call the stored procedure to execute the batch job.<br/><br/>
From trigger, this job can be called as follows:
<pre><code class="language-html hljs xml">EXEC msdb..sp_start_job ‘MyBatchJob’</code></pre>
This job starts and run under SQL server Agent control. The <code><b>sp_start_job</b></code> procedure returns control to the calling T-SQL code as 
soon as the job starts.<br/><br/>
Trigger does not wait for this job to complete, rest of the trigger code executed as soon as job starts, which is a great improvement over waiting 
for the whole batch processing to finish. SQL server Agent initiates a new connection and run the job in background. You have to be careful about 
the concurrency though, now two different connections accessing the same data.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>65. Write a SQL Query to delete duplicate records from a table.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Lets consider the following Table :
<div class="table-responsive">          
<table class="table">
<thead><tr><th>EmpId</th><th>FirstName</th><th>LastName</th></tr></thead>
<tbody>
 <tr><td>1</td><td>aaa</td><td>aaa</td></tr>
 <tr><td>2</td><td>bbb</td><td>bbb</td></tr>
 <tr><td>3</td><td>aaa</td><td>aaa</td></tr>
 <tr><td>4</td><td>aaa</td><td>aaa</td></tr>
 <tr><td>5</td><td>bbb</td><td>bbb</td></tr>
 <tr><td>6</td><td>aaa</td><td>aaa</td></tr>
</tbody>
</table>
</div>
<div align="center"><b>Employee</b></div>
First find out the duplicate records :
<pre><code class="language-html hljs xml">SELECT distinct A.EmpID from Employee A, Employee B WHERE
( A.FirstName = B.FirstName and A.LastName = B.LastName ) AND A.EmpID &lt; B.EmpID )</code></pre>
The above query will give you all the duplicate records, which can be deleted. The result of above query will be as follows:
<div class="container-fluid">
<div class="row">
<div class="col-md-3">

<div class="table-responsive">          
<table class="table">
<thead><tr><th>EmpId</th></tr></thead>
<tbody>
  <tr><td>1</td></tr>
  <tr><td>2</td></tr>
  <tr><td>3</td></tr>
  <tr><td>4</td></tr>
 </tr>
</tbody>
</table>
</div>
<div align="center"><b>Employee</b></div>

</div>
</div>
</div>

Now write the complete delete query:
<pre><code class="language-html hljs xml">DELETE FROM Employee WHERE EmpID
IN ( SELECT distinct A.EmpID from Employee A, Employee B WHERE
( A.FirstName = B.FirstName and A.LastName = B.LastName ) AND A.EmpID &lt; B.EmpID
)</code></pre>
Check the results:
<pre><code class="language-html hljs xml">SELECT * FROM Employee</code></pre>

<div class="table-responsive">          
<table class="table">
<thead><tr><th>EmpId</th><th>FirstName</th><th>LastName</th></tr></thead>
<tbody>
 <tr><td>5</td><td>bbb</td><td>bbb</td></tr>
 <tr><td>6</td><td>aaa</td><td>aaa</td></tr>
</tbody>
</table>
</div>
<div align="center"><b>Employee</b></div>

<!-- Answer ::: END -->
</div>
</div>
