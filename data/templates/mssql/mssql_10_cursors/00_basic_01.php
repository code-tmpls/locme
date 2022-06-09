<div class="appQuestion"><b>1. How many types of cursor type are there?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ODBC, ADO, and DB-Library define four cursor types supported by Microsoft SQL Server 2000.<br/><br/> 
The DECLARE CURSOR statement has been extended; thus you can specify the four cursor types for Transact-SQL cursors.<br/><br/> 
The four API server cursor types supported by SQL Server are:
<ol>
<li>Static cursors</li> 
<li>Dynamic cursors</li>
<li>Forward-only</li> 
<li>cursors Keyset-driven cursors</li>
</ol>
<ul>
<li>Static cursors detect few or no changes but consume relatively few resources while scrolling, although they store the entire cursor in tempdb.</li>
<li>Dynamic cursors detect all changes but consume more resources while scrolling, although they make the lightest use of tempdb.</li>
<li>Keyset-driven cursors lie in between, detecting most changes but at less expense than dynamic cursors.</li>
<li>Although the database API cursor models consider a forward-only cursor to be a distinct type of cursor, SQL Server does not.</li>
<li>SQL Server considers both forward only and scroll as options that can be applied to static, keyset-driven, and dynamic cursors.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. What is the difference between insensitive and scroll cursor?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Insensitive cursors make a temporary copy of the data to be used by the cursor. All requests to the cursor are answered from this temporary table; 
modifications made to base tables will not be reflected in the data returned by fetches made to this cursor. This cursor does not allow modifications. 
In other words, this cursor remains insensitive to changes to underlying tables.
In a scroll cursor, committed deletes and updates made to the underlying tables (by any users) are reflected in subsequent fetches.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. If a table does not have a unique index, can a cursor be opened on it?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, but only insensitive cursors can be opened on a table which does not have a unique index.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. Can a cursor be updated? If yes, how you can protect which columns are updated?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By default, cursors are updatable. To prevent updates from occurring to any row use READ ONLY options.<br/><br/>
To specify the columns which can be updatable, use UPDATE OF option. For e.g.
<pre><code class="language-html hljs xml">DECLARE MyCursor CURSOR FOR
Select * from Emp for UPDATE OF( FirstName )</code></pre>
If OF column_list is supplied, only the columns listed will allow modifications. If no list is supplied, all columns can be updated unless the 
cursor has been defined as READ ONLY.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. While using a cursor, how can you differentiate between a deleted row and a row that has been inserted with NULL data values?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Use the global variable @@FETCH_STATUS after each FETCH is made against the cursor.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. How can you know if the row fetched from cursor is still valid in underlying table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A global variable, @@FETCH_STATUS, will be updated at every execution of FETCH. At a successful fetch, @@FETCH_STATUS will be set to 0. If no data 
was fetched because the requested cursor position exceeded the results set, 1 will be returned. If the row returned is no longer a member of the 
results set (if the row was deleted from the base table after the cursor was opened), @@FETCH_STATUS will return -2.<br/><br/>
Always use this to determine the validity of the data returned from a cursor fetch prior to attempting any operation against that data.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. How can you find out how many rows returned in a cursor?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Use the @@CURSOR_ROWS function to determine how many rows have been returned.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>8. What does it mean if @@CURSOR_ROW returns a negative number?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Once a cursor has been opened; use the global variable @@CURSOR_ROWS to receive the number of qualifying rows in the last opened cursor. 
@@CURSOR_ROWS returns:
<ul>
<li><b>-m :</b>	If the cursor is being populated asynchronously. The value returned (-m) refers to the number of rows currently in the keyset.</li>
<li><b>n :</b>	If the cursor is fully populated. The value returned (n) refers to the number of rows.</li>
<li><b>0 :</b>	If no cursors have been opened or the last opened cursor has been closed or deallocated.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>9. How can you set the threshold at which SQL Server will generate keysets asynchronously?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Use the cursor threshold configuration option.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>10. What is the difference between Deallocate cursor and Close cursor?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Deallocate removes the cursor data structures. A closed cursor can be re-opened. DEALLOCATE releases all data structures associated with the cursor 
and remove the definition of the cursor.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>11. Define Cursor Locking.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The SELECT statement in a cursor definition obeys the transaction locking rules that apply to any other SELECT statement. In cursors, an additional set 
of scroll locks can be acquired based on the specification of a cursor concurrency level.<br/><br/>
The transaction locks acquired by any SELECT statement are controlled by: The transaction isolation level setting for the connection.<br/><br/>
Any locking hints specified in the FROM clause.<br/><br/>
These locks are held until the end of the current transaction for the SELECT statements. When SQL Server is in autocommit mode, each individual SQL 
statement is a transaction and the locks are freed when the statement finishes. If SQL Server is in explicit or implicit transaction mode, then the 
locks are held until the transaction is either committed or rolled back.<br/><br/>
The locks generated by an independent SELECT or a cursor are always acquired when a row is retrieved. Cursors retrieve the rows at different times 
depending on the type of cursor:
<ul>
<li>Static cursors and Keyset-driven cursors retrieve the entire result set at the time the cursor is opened. This locks each row of the result set 
at open time.</li>
<li>Dynamic cursors (including forward-only cursors) do not retrieve rows until they are fetched. Locks are not acquired on the rows until they have 
been fetched.</li>
<li>Fast forward-only cursors vary in when they acquire their locks depending on the execution plan chosen by the query optimizer. If a dynamic plan 
is chosen, no locks are taken until the rows are fetched. If worktables are generated, then the rows are read into the worktable and locked at 
open time.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>