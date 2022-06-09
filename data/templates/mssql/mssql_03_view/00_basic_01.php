
<div class="appQuestion"><b>1. List some of the rules that apply to creating and using a ‘view’?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When creating and using a view, these rules apply:<br/><br/>
<ul>
<li>CREATE VIEW statements cannot be combined with other SQL statements in a single batch. You cannot create a trigger on a view.<br/><br/></li>
<li>Data modification statements (INSERT or UPDATE) are allowed on multi-table views if the data modification statement affects only one base table. 
Data modification statements cannot be used on more than one table in a single statement.<br/><br/></li>
<li>INSERT statements are not allowed if a computed column exists within the view.<br/><br/></li>
<li>All column(s) being modified must adhere to all restrictions of the base table. This applies to column nullability, constraints, identity columns, 
and columns with rules and/or defaults and base table triggers.<br/><br/></li>
<li>UPDATE statements cannot change any column in a view that is a computation, nor can they change a view that includes aggregate functions, built-in 
functions, a GROUP BY clause, or DISTINCT.<br/><br/></li>
<li>You cannot use READTEXT or WRITETEXT on text or image columns in views.<br/><br/></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. You added a row to a view, but the row is not shown on the view. Explain how this can happen, and how you can remedy the situation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By default, data modification statements on views are not checked to determine whether the rows affected will be within the scope of the view. You can 
issue an INSERT statement on a view to add a row to the underlying base table, but not to add it to the view. Similarly, you can issue an UPDATE statement 
that changes a row so that the row no longer meets the criteria for the view. If all modifications should be checked, use the WITH CHECK option.<br/><br/>
<i>For example</i>, if you insert a value of ‘AAA’ into a view that only returns values that are LIKE ‘B%’. This would not be allowed if the WITH 
CHECK option was in place.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. Can an ORDER BY clause be used in a creation of a view?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, but only if the TOP clause is also used.<br/><br/>
<i>For example :</i>
<pre><code class="language-html hljs xml">CREATE VIEW  [ORDERBYVIEW] AS
SELECT TOP 10 customerID, companyname FROM	customers
ORDER BY	companyname</code></pre>
The ORDER BY clause is invalid in views, inline functions, derived tables, and subqueries, unless TOP is also specified.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. ‘Order by’ is not allowed in a view. How can you sort information from a view?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Using ‘SELECT TOP’ you can have a view sorted in the desired order,<br/> 
for example ,
<pre><code class="language-html hljs xml">CREATE VIEW vAuthors AS
SELECT TOP 100 PERCENT au_lname, au_fname FROM Authors ORDER BY au_lname
GO</code></pre>

<pre><code class="language-html hljs xml">SELECT * FROM vAuthors GO</code></pre>
<b>This Results :</b>
<div class="table-responsive">          
<table class="table">
<thead><tr><th>au_lname</th><th>au_fname</th></tr></thead>
<tbody>
 <tr><td>Bennet</td><td>Abraham</td></tr>
 <tr><td>Blotchet-Halls</td><td>Reginald</td></tr>
 <tr><td>Carson</td><td>Cheryl</td></tr>
 <tr><td>DeFrance</td><td>Michel</td></tr>
 <tr><td>del Castillo</td><td>Innes</td></tr>
 <tr><td>Dull</td><td>Ann</td></tr>
 <tr><td>Green</td><td>Marjorie</td></tr>
 <tr><td>Greene</td><td>Morningstar</td></tr>
 <tr><td>Gringlesby</td><td>Burt</td></tr>
 <tr><td>Hunter</td><td>Sheryl</td></tr>
 <tr><td>Karsen</td><td>Livia</td></tr>
 <tr><td>Locksley</td><td>Charlene</td></tr>
 <tr><td>MacFeather</td><td>Stearns</td></tr>
 <tr><td>McBadden</td><td>Heather</td></tr>
 <tr><td>O'Leary</td><td>Michael</td></tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. What is a derived Table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Derived tables are a SELECT statement that you use in a FROM clause in place of tables references.<br/><br/>
Transact-SQL has extensions that support the specification of objects other than tables or views in the FROM clause. These other objects return 
a result set, or rowset that form a virtual table. The SELECT statement then operates as if the result set were a table.<br/><br/>
These virtual tables can help you in executing certain queries that are not possible without having a view or a temp table.<br/><br/>
<pre><code class="language-html hljs xml">SELECT au_lname, au_fname , royaltyper
FROM (SELECT A.au_lname, A.au_fname, TA.royaltyper FROM Authors A
JOIN TitleAuthor TA on A.au_id = TA.au_id 
WHERE state = 'CA')
ORDER BY au_lname</code></pre>
<b>This Results :</b>
<div class="table-responsive">          
<table class="table">
<thead><tr><th>au_lname</th><th>au_fname</th><th>royaltyper</th></tr></thead>
<tbody>
 <tr><td>Dull</td><td>Ann</td><td>50</td></tr>
 <tr><td>Green</td><td>Marjorie</td><td>40</td></tr>
 <tr><td>Green</td><td>Marjorie</td><td>100</td></tr>
 <tr><td>Gringlesby</td><td>Burt</td><td>30</td></tr>
 <tr><td>Hunter</td><td>Sheryl</td><td>50</td></tr>
 <tr><td>Karsen</td><td>Livia</td><td>75</td></tr>
 <tr><td>Locksley</td><td>Charlene</td><td>100</td></tr>
 <tr><td>MacFeather</td><td>Stearns</td><td>60</td></tr>
 <tr><td>MacFeather</td><td>Stearns</td><td>25</td></tr>
 <tr><td>O'Leary</td><td>Michael</td><td>40</td></tr>
 <tr><td>O'Leary</td><td>Michael</td><td>30</td></tr>
 <tr><td>Straight</td><td>Dean</td><td>100</td></tr>
 <tr><td>White</td><td>Johnson</td><td>100</td></tr>
 <tr><td>Yokomoto</td><td>Akiko</td><td>40</td></tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. What are Information Schema Views?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Information Schema Views are objects that provide indirect access to the data in the system catalogs.<br/><br/>
SQL server provides a number of views for accessing the system catalogs. These objects provide meta data and system level information from the server. 
You should always use these views instead of querying system catalog tables directly.<br/><br/>
These views are ANSI SQL-92 compliant, so you can depend up on them, even if SQL server internal tables or their structure will change; these views 
should remain consistent.<br/><br/>
You must refer to these views using INFORMATION_SCHEMA database schema. These views reside in MASTER database, but they run in the context of the 
current database.
<pre><code class="language-html hljs xml">USE pubs SELECT *
FROM INFORMATION_SCHEMA.TABLES</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. What is a partitioned view?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A partitioned view is a view that unites tables together making the data appear as it is from one table. For example for a large internet site may use 
a partitioned view to unite twelve tables for the year. Every month would have a separate table. Using portioned views would allow these tables to be 
treated as a single table.<br/><br/>
There are two types of partitioned views: 
<ul>
<li>Local Partitioned View (LPV) and</li>
<li>Distributed Partitioned View (DPV)</li> 
In a local partitioned view, all participating tables and the view reside on the same instance of SQL Server. In a distributed partitioned view, at 
least one of the participating tables resides on a different (remote) server.<br/><br/>
To use a partitioned view, you should have partitioned tables. To create a partitioned table, you must first partition a table horizontally. <br/><br/>
Data belongs to each member table. The original table is replaced with several smaller member tables. Each member table has the same number and 
type of columns as the original table. In a distributed partitioned view, each member table is on a separate member server.<br/><br/>
You design the member tables so that each table stores a horizontal slice of the original table based on a range of key values. The ranges are based 
on the data values in a partitioning column. The range of values in each member table is enforced by a CHECK constraint on the partitioning column, 
and ranges cannot overlap.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>8. What is an Indexed View?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A View is a conceptual table that is sometimes called a virtual table. Views do not store any data. The result set of a non-indexed view is not stored 
permanently in the database. Each time a query references the view, SQL Server dynamically merges the logic needed to build the view result set with 
the logic needed to build the complete query result set from the data in the base tables.<br/><br/>
The overhead of dynamically executing query and building the result set can be substantial for views that involve complex processing of large numbers 
of rows.<br/><br/>
Indexed views have the answer to this. If complex views are frequently referenced in queries, you can improve performance by creating a unique 
clustered index on the view. When a unique clustered index is created on a view, the view is executed and the result set is stored in the database 
in the same way a table with a clustered index is stored.<br/><br/>
SQL optimizer starts using the view indexes in queries that do not explicitly refer the view in their FROM clause, because of this existing queries 
also benefit from the improved efficiency of the indexed view. You must have set specific SET options before you can create an index on a view. The 
query optimizer will not consider the index for any subsequent SQL statements unless the connection executing the statement has the same 
option settings.<br/><br/>
All indexes on a view are dropped if the view is dropped. All nonclustered indexes on the view are dropped if the clustered index is dropped. 
Nonclustered indexes can be dropped individually. Dropping the clustered index on the view removes the stored result set, and the optimizer 
returns to processing the view like a standard view.<br/><br/>
Indexed views work best when the underlying data doesn’t change often. The overhead associated with keeping the indexes updated for frequently 
changing data may be more than their benefit.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>