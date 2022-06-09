
<div class="appQuestion"><b>1. Why should one not prefix user stored procedures with ‘sp_’?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If the stored procedure does not exist in the master database, do not prefix your stored procedure with ‘sp_’, as it causes a performance penalty. 
SQL server gives name resolution preference to the master database for procedure that have ‘sp_’ suffix. Once the SQL fails to find the stored procedure 
in the master database, it assumes that this procedure requires a recompilation as it is not in the cache, and acquires an exclusive lock on the stored 
procedure for a short time. This lock causes the performance hit.<br/><br/>
The exclusive lock is required because only one copy of a stored procedure is generally in the cache at any time. This requires serialization of some 
parts of the compilation process, and this synchronization process is accomplished in part through the use of compile locks.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>2. Which table keeps information about Stored Procedures?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The SysObjects table contains one row for each object (constraint, default, log, rule, stored procedure, and so on) created within a database. 
In tempdb, this table includes a row for each temporary object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. What will be the value of @@FETCH_STATUS if a row that was a part of the cursor resultset has been deleted from the database after the time the stored procedure that opened the cursor was executed?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
-2.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>4. Why and when do stored procedure recompile?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Stored procedure will recompile if there is a sufficient number of rows in a table referenced by the stored procedure that have changed.<br/><br/>
SQL Server will recompile the stored procedure to be sure that the execution plan has the up-to-date statistics for the table. By default for temporary 
tables SQL Server determines that after 6 modifications any stored procedure referencing that table will need to be recompiled.<br/><br/>
Here are few of the reasons why stored procedures will recompile:
<ul>
<li>Dropping and recreating the stored procedure.</li>
<li>Using WITH RECOMPILE clause in the CREATE PROCEDURE or the EXECUTE statement.</li>
<li>Changing the schema of any referenced objects.</li>
<li>Running the sp_recompile system stored procedure against a table referenced by the stored procedure.</li>
<li>Stored procedures plan dropping from the cache.</li>
<li>Any reference to the temporary tables in the stored procedure.</li>
</ul>

The following SET options are ON by default in SQL Server, and changing the state of these options in your stored procedure will cause the stored 
procedure to recompile:
<pre><code class="language-html hljs xml">SET ANSI_DEFAULTS SET ANSI_NULLS SET ANSI_PADDING SET ANSI_WARNINGS
SET CONCAT_NULL_YIELDS_NULL</code></pre>
<br/>
A run-time recompilation of a stored procedure takes place in the following situation:
<ul>
<li>Data in a table referenced by the routine has changed.</li>
<li>The procedure contains a mixture of DDL and DML operations.</li>
<li>Certain operations on temporary tables are performed.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. How can you find out which stored procedures are recompiling?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Using the SQL Profiler.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. How can you stop stored procedures from recompiling?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By using sp_executesql and using the KEEPFIXED PLAN query hint. KEEPFIXED PLAN Forces the query optimizer not to recompile a query due to 
changes in statistics or to the indexed column (update, delete, or insert). Specifying KEEPFIXED PLAN ensures that a query will be recompiled 
only if the schema of the underlying tables is changed or sp_recompile is executed against those tables.<br/><br/>
<pre><code class="language-html hljs xml">SELECT COUNT(*) FROM #Temp OPTION (KEEPFIXED PLAN)</code></pre>
Recompiling takes place when temporary objects are created and referenced throughout the code. Temporary objects will not exist when the initial 
compilation of the code takes place, so SQL Server has to recompile the stored procedure during execution. This recompilation takes place after the 
temporary object is referenced for the first time.<br/><br/>
By placing all of your temporary table creation statements together, SQL Server can create plans for those temporary tables when one of the tables is 
referenced for the first time. Recompile will still take place during the execution of the stored procedure, but it will happen only twice, not as many 
times as many temp tables you have. (Once for the stored procedure and once when the first reference to a temporary table is made).<br/><br/>
SQL Server will also be able to reuse the execution plan for the stored procedure the next time the procedure is called there will be no recompiles. 
Like permanent objects, if you change the schema of a temporary table, the change will cause the stored procedure to recompile as well. Make all schema 
changes (such as index creation) right after your create table statements and before you reference any of the temporary tables.<br/><br/>
Use SQL Profiler to determine if and when your procedures are being recompiled.<br/><br/>

<!-- Answer ::: END -->
</div>
</div>
