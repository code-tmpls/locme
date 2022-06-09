
<div class="appQuestion"><b>1. Define Concurrency Control.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Concurrency Control is the practice of defining controls so that multiple users can use and update data in a database simultaneously. 
In a multi-user system, we require some kind of mechanism to protect one- person change adversely affecting the others change. There are 
two main types of concurrency control, Optimistic Concurrency Control, and Pessimistic Concurrency Control.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. What is Pessimistic Concurrency Control?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Pessimistic Concurrency Control a lock is placed on data while it is in use and no other process or user can access that data until 
that lock is released. Use Pessimistic Concurrency Control when the need for data integrity is paramount. Pessimistic Concurrency Control 
is not appropriate in a multi-user read- only situation, such as a data warehouse or on-line analytical processing application.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. What is Optimistic Concurrency Control?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Optimistic concurrency control, works on the assumption that no other user will be changing the data. Users do not lock data when they read it. 
When an update is performed, the system checks to see if another user changed the data after it was read. If another user updated the data, an 
error is raised. Typically, the user receiving the error rolls back the transaction and starts over.<br/><br/>
Users specify the type of concurrency control in a transactions and in cursor by specifying there isolation level.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. Explain Isolation levels.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An isolation level determines the degree of isolation of data between concurrent transactions. SQL-92 defines the following isolation levels, all of 
which are supported by SQL Server:
<ul>
<li><b>READ COMMITTED</b><br/><br/>
Specifies that shared locks are held only while the data is being read to avoid dirty reads, but the data can be changed before the end of the 
transaction, resulting in nonrepeatable reads or phantom data. This option is the SQL Server default.</li>
<li><b>READ UNCOMMITTED</b><br/><br/>
Implements dirty read, or isolation level 0 locking, which means that no shared locks are issued and no exclusive locks are honored. When this 
option is set, it is possible to read uncommitted or dirty data. Values in the data can be changed and rows can appear or disappear in the data 
set before the end of the transaction. This is the least restrictive of the four isolation levels.</li>
<li><b>REPEATABLE READ</b><br/><br/>
Locks are placed on all data that is used in a query, preventing other users from updating the data, but new phantom rows can be inserted into 
the data set by another user and are included in later reads in the current transaction.</li>
<li><b>SERIALIZABLE</b><br/><br/>
Places a range lock on the data set, preventing other users from updating or inserting rows into the data set until the transaction is complete. </li>
<ul>
This is the most restrictive of the four isolation levels<br/><br/>
The default isolation level is <code><b>READ COMMITTED</b></code>. When the isolation level is specified, the locking behavior for all SELECT 
statements in the SQL Server session operates at that isolation level and remains in effect until the session terminates, or until the isolation level 
is set to another level.
<pre><code class="language-html hljs xml">USE pubs GO

SET TRANSACTION ISOLATION LEVEL SERIALIZABLE GO

BEGIN TRANSACTION
SELECT au_lname FROM authors</code></pre>

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. What is the difference between the REPEATABLE READ and SERIALIZABLE isolation levels?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Repeatable Read isolation level, new rows can be inserted into the dataset. In a Serializable isolation level all the rows are locked 
for the duration of the transaction, no insert, update or delete is allowed.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. What is the default isolation level in SQL server?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
READ COMMITTED is the default isolation level for SQL server. READ COMMITTED specifies that shared locks are held while the data is being read 
to avoid dirty reads, but the data can be changed before the end of the transaction, resulting in nonrepeatable reads or phantom data. This option 
is the SQL Server default.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. What is the most restrictive isolation level?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
SERIALIZABLE is the most restrictive isolation level.<br/><br/> 
SERIALIZABLE places a range lock on the data set, preventing other users from updating or inserting rows into the data set until the transaction is 
complete. This is the most restrictive of the four isolation levels.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>8. What is the least restrictive isolation level?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
READ UNCOMMITTED is the least restrictive isolation level.<br/><br/> 
READ UNCOMMITTED implements dirty read, or isolation level 0 locking, which means that no shared locks are issued and no exclusive locks are honored. 
When this option is set, it is possible to read uncommitted or dirty data; values in the data can be changed and rows can appear or disappear in the 
data set before the end of the transaction. This is the least restrictive of the four isolation levels.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>9. How do you determine the current isolation level?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To determine the transaction isolation level currently set, use the <code><b>DBCC USEROPTIONS</b></code> statement.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>10. What are the conditions an underlying table must satisfy before a cursor can be used by a positioned UPDATE or DELETE statement?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The SELECT statement in the cursor declaration must contain the FOR BROWSE option. To use the FOR BROWSE option, the table must have both a unique 
index and a timestamp column.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>11. Explain Locks.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A lock is an object created by SQL Server to indicate that a user is currently using a resource. The lock does not allow other users to perform operations 
on the resource that would adversely affect the first user who owns the lock. Locks are managed internally by system software, are acquired, and released 
based on actions taken by the user.<br/><br/>
Microsoft SQL Server 2000 uses locks to implement concurrency control among multiple users in a database at the same time. Transactions and locks are 
managed on a per connection basis.<br/><br/>
SQL Server locks are applied at various levels of granularity in the database. Locks can be acquired on rows, pages, keys, ranges of keys, indexes, 
tables, or databases. SQL Server dynamically determines the appropriate level at which to place locks for each Transact-SQL statement.<br/><br/>
The level at which locks are applied does not have to be specified by users and needs no configuration by administrators.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>12. Explain Lock escalation.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Lock escalation is the process of converting many fine-grain locks into fewer coarse-grain locks, reducing system overhead. Microsoft SQL Server 2000 
automatically escalates row locks and page locks into table locks when a transaction exceeds its escalation threshold.<br/><br/>
SQL Server may dynamically escalate or deescalate the granularity or type of locks. For example, if an update acquires a large number of row locks and 
has locked a significant percentage of a table, the row locks are escalated to a table lock. If a table lock is acquired, the rowlocks are released. 
SQL Server 2000 rarely needs to escalate locks; the query optimizer usually chooses the correct lock granularity at the time the execution plan is compiled.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>13. Under what condition it is possible to have a page level lock and row lock at the same time for a query?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If enough contiguous keys in a nonclustered index node are selected to satisfy the query, SQL Server may choose to do both row and page locking for the 
same query, placing page locks on the index and row locks on the data. This reduces the likelihood that lock escalation will be necessary.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>14. Explain how to use transactions efficiently.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Get all required input from users before a transaction is started. Do not open a transaction while browsing through data. Keep the transaction as short 
as possible. After you get all the data, start a transaction, execute the modification statements, then immediately commit or roll back. Do not open the 
transaction before it is required. Make intelligent use of lower transaction isolation levels. Not all transactions require the serializable transaction 
isolation level. Make intelligent use of lower cursor concurrency options, such as optimistic concurrency options. Access the least amount of data possible 
while in a transaction. This lessens the number of locked rows, thereby reducing contention between transactions.
<!-- Answer ::: END -->
</div>
</div>
