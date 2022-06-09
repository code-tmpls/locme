
<div class="appQuestion"><b>1. How you can get a list of all the table constraints in a database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Using Query :
<pre><code class="language-html hljs xml">SELECT * FROM INFORMATION_SCHEMA.CONSTRAINT_TABLE_USAGE.</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. How you can get the list of largest tables in a database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
System table ‘sysindexes’ has all the information, you need.
<pre><code class="language-html hljs xml">SELECT object_Name (id) , dpages * 8 FROM sysindexes
WHERE indid in (1,0) AND objectproperty (id, 'IsUserTable') = 1 ORDER BY rowcnt desc</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. How you can move data or databases between servers and databases in SQL Server?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the options you have are: <code><b>BACKUP/RESTORE</b></code>, <code><b>detaching and attaching databases</b></code>, <code><b>replication</b></code>, 
<code><b>DTS</b></code>, <code><b>BCP</b></code>, <code><b>log shipping</b></code>, <code><b>INSERT...SELECT</b></code>, <code><b>SELECT...INTO</b></code>, 
<code><b>creating INSERT scripts to generate data</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. If no size is defined while creating the database, what size will the database have?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The size of the model database determines the initial size of a database if no size is indicated in the <code><b>CREATE DATABASE</b></code> statement.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. Can a database be shrunk with users active?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. Users can be working in the database when it is shrunk. This includes system databases.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. How can you set the database to single user mode and restrict the access to dbo use only?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In SQL Server 2000, a database cannot be in single-user mode with dbo use only. Instead, the following alternative options are available by using 
the ALTER DATABASE command:
<pre><code class="language-html hljs xml">ALTER DATABASE database SET SINGLE_USER</code></pre>
This command restricts access to the database to only one user at a time. 
<pre><code class="language-html hljs xml">ALTER DATABASE database SET RESTRICTED_USER</code></pre>
This command restricts access to the database to only members of the db_owner, dbcreator, or sysadmin roles.
<pre><code class="language-html hljs xml">ALTER DATABASE database SET MULTI_USER</code></pre>
This command returns access to the database to its normal operating state.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. As a general practice, it is recommended to have dbo be the owner of all database objects. However, in your database you find number of tables owned by a user other than dbo, how could you fix this?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
One alternative is
<pre><code class="language-html hljs xml">DECLARE
@TableName varchar (50)

DECLARE TableCur CURSOR FOR
SELECT NAME FROM sysobjects WHERE xtype = 'U' OPEN TableCur
FETCH NEXT FROM TableCur into @TableName WHILE @@FETCH_STATUS = 0
BEGIN
 


END

CLOSE TableCur
 
SELECT @TableName = 'OLDUSERNAME.' + @TableName EXEC sp_changeobjectowner @TableName , 'dbo' FETCH NEXT FROM TableCur into @TableName
 
DEALLOCATE TableCur</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>8. How you can list all the indexes for a table in a database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">DECLARE
@TABLENAME varchar(255)
select @TABLENAME ='Application'

select sysindexes.name, 'TableName' = sysobjects.name, 'INDEX-TYPE' =
CASE
WHEN indid = 1 THEN 'clusterd'
WHEN indid &gt; 1 THEN 'non-clustered'

END
from sysindexes JOIN sysobjects on sysindexes.id = sysobjects.id
where sysobjects.name = @TABLENAME and sysobjects.xtype = 'U' and indid &lt; 255</code></pre>

Other Alternative is an undocumented function
<pre><code class="language-html hljs xml">Use
sp_indexes_rowset 'tableName'</code></pre>

All indexes for the database
<pre><code class="language-html hljs xml">Use pubs sp_indexes_rowset; 2</code></pre>

An easier method to listing the indexes for a table is to use the SQL Enterprise Manager and right click on the table name and then choose indexes.

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>9. Why does a SQL statement work correctly outside of a user- defined function, but incorrectly inside it?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You may have included a statement in the BEGIN-END block that has side effects, which are not allowed in user-defined functions. Function side 
effects are any permanent changes to the state of a resource that has a scope outside the function. Changes can be made only to local objects 
such as local cursors or variables. Examples of actions that cannot be performed in a function include modifications to database tables, operations 
on cursors that are not local to the function, sending e-mail, attempting a catalog modification.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>10. Can a table be moved to different Filegroup?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Once a table is created it cannot be moved to a different file group.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>11. Can a database be shrunk to 0 Bytes, if not, why?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A database cannot be shrunk smaller than the Model system database, which starts at 1.5 MB.<br/><br/>
SQL Server does not shrink a database to a size any smaller than the size that was specified in the CREATE DATABASE statement.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>12. What does the Automatic recovery do?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The automatic recovery process is initiated when the SQL Server service starts to insure that all databases are consistent. It rolls forward any 
committed transactions that have not been written to the database and rolls back any uncommitted transactions.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>13. Can an automatic recovery be initiated by a user?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Automatic recovery is performed by the SQL Server Service when the SQL server restarts, It cannot be initiated by a user.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>14. What is the primary use of the model database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The model database is used as a template for all new user databases. Users do not use the model database. Template can include specific settings, 
security constructs and all sorts of useful stuff.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>15. What information is maintained within the msdb database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The msdb database contains information about tasks, alerts, and operators for both user-defined tasks and tasks related to replication.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>16. What stored procedure can you use to display the current processes?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The stored procedures sp_who and sp_who2 can be used to display the current processes as well as which process is blocking another process.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>17. What stored procedure would you use to view lock information?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The stored procedure sp_lock can be used to obtain information about all locks or about locks affiliated with a specific process ID.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>18. How can a database be repaired?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
DBCC CHECKDB is the safest repair statement because it catches and repairs the widest possible range of errors. If only allocation errors are reported 
for a database, execute DBCC CHECKALLOC with a repair option to correct them.<br/><br/>
DBCC CHECKDB is a superset of DBCC CHECKALLOC and includes allocation checks in addition to checks of index structure and data integrity.
DBCC CHECKTABLE checks the linkages and sizes of text, ntext and image pages for the specified table. However, DBCC CHECKTABLE does not check the allocations of pages in the specified table. Use DBCC CHECKALLOC to check page allocations.
DBCC CHECKTABLE requires a shared lock on all tables and indexes in the database for the duration of the operation.
To perform DBCC CHECKTABLE on every table in the database, use DBCC CHECKDB.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>19. How can you find out if the current user is a member of the specified Microsoft Windows NT group or Microsoft SQL Server role?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The Is_Member function.
<pre><code class="language-html hljs xml">IS_MEMBER ({group | role})</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>20. Your SQL Server is running out of disk space. You notice that there are several large files with LDF extensions. What are these files?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
LDF files are the database log files.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>21. You notice that the transaction log on one of your databases is over 4GB. The size of the data file is 2MB. What could cause this situation, and how can you fix it?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A large transaction log can mean several things. It is helpful to know if the log grew slowly over time or all at once. It is possible that an 
exceptional number of transactions occurred quickly, thereby increasing the size of the log. It is also possible that the log was set up to grow 
automatically and has never been truncated or shrunk. Should check for a stuck transaction too.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>22. You accidentally delete the MSDB database. What effect does this have on your existing SQL databases, and how do you recover?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Your ability to use SQL Server Agent to schedule alerts, jobs, and recording operators has been eliminated. To recover from this situation, restore the 
MSDB database from a backup.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>23. Where can you add custom error messages to SQL Server?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Custom messages can be added to the <code><b>sysmessages</b></code> table in the master database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>24. Is it important for a Database Administrator to understand the operating system and file access?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You should answer this one honestly for you. Different companies have different philosophies on this, and no answer is correct for all situations.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>25. What is the difference between writing data to mirrored drives versus RAID5 drives.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The difference is performance.   RAID5 drives can be much slower than writing to a mirrored drive set. This is due to the overhead of computing and 
writing the check data that is needed for recovery.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>26. In the physical file layout, where should the transaction log be stored in relation to the data file?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
For up to the minute restorations, the transaction log should be stored on a different physical drive as the data file.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>27. You have separate development and production systems. You want to move a copy of a development database into production. To do this, you do a backup on the development system and restore to the production system. After a few minutes, you begin getting calls from several customers saying that they are denied access to the system. Why?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When the restore happened, you also restored the security from the development system onto the production system.   The customers do not have access 
to the development system.   One way to avoid this is to script out all the security in the production database prior to doing the restore and then to 
reapply the security after the restore.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>28. What is a mixed extent?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A mixed extent is a single extent that contains multiple tables. Extents are the basic unit in which space is allocated to tables and indexes.<br/><br/>
To make its space allocation efficient, SQL Server does not allocate entire extents to tables with small amounts of data.<br/><br/> 
SQL Server has two types of extents:
<ul>
<li><i>Uniform extents</i> are owned by a single object; all eight pages in the extent can only be used by the owner object.</li>
<li><i>Mixed extents</i> are shared by up to eight objects.</li>
</ul>

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>29. You have a table with close to 100 million records. Recently, a huge amount of this data was updated. Now, various queries against this table have slowed down considerably. What is the quickest option to remedy the situation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Run the UPDATE STATISTICS command.<br/><br/>
UPDATE STATISTICS will update the statistics for the table. The sp_updatestats stored procedure will update all the tables in the database, which 
is not required in the situation. There is no need to recreate the index, as the updating statistics should be first step to see the query reached 
to the optimized level of speed.<br/><br/>
Once the statistics have been updated, the query analyzer will be able to make better decisions about which index to use.<br/><br/>
If Auto update Statitics is on, then you don’t have to do any of this.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>30. How can you check the level of fragmentation on a table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
DBCC SHOWCONTIG.<br/><br/> 
To display fragmentation information for the data and indexes of the specified table, use DBCC SHOWCONTIG.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>31. You have developed an application which uses many stored procedures and triggers to update various tables. Users ocassionally get locking problems. Which tool is best suited to help you diagnose the problem?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
SQL Server Profiler. Use SQL Server Profiler with a trace to observe Lock conflicts.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>32. Which table keeps the locking information?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>SysLockInfo</b></code> contains information on all granted, converting, and waiting lock requests. This table is a denormalized tabular view 
of internal data structures of the lock manager and is stored only in the master database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>33. You want to be sure that queries in a database always execute at the maximum possible speed. To achieve this goal you have created various indexes on tables. Which other statement will keep the database in good condition?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Execute the Update Statistics command for tables that are accessed in the query. Update Statistics updates information about the distribution of key 
values for one or more statistics groups in the specified table. UPDATE STATISTICS is run automatically when an index is created on a table that already 
contains data.<br/><br/>
The stored procedure <code><b>Sp_Updatestats</b></code> will update statistics for all the tables in the current database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>34. During a recent migration project, John inserted 10,000 records in a table that has an Identity Column called ticketID, which automatically increases by 1 each time a record is inserted in the table. A month after the database went live; John noticed that record with ticketID 5123 has some incorrect information. So John deletes this record and decides to re-insert this record in the table. He wants to re-use the ticketID 5123. He needs to achieve this while the database is in production. What should he do?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
John can do this with the following code:
<pre><code class="language-html hljs xml">SET IDENTITY_INSERT Tickets ON GO

INSERT INTO Tickets ( ticketID, FirstName, LastName) Values (5123, ‘John,Doe)
GO</code></pre>

Set <code><b>IDENTITY_INSERT</b></code> Tickets ON allows explicit values to be inserted into the identity column of a table.<br/><br/>
At any time, only one table in a session can have the IDENTITY_INSERT property set to ON. If a table already has this property set to ON, and a 
SET IDENTITY_INSERT ON statement is issued for another table, Microsoft SQL Server returns an error message that states SET IDENTITY_INSERT is 
already ON and reports which table it is set ON for.<br/><br/>
If the value inserted is larger than the current identity value for the table, SQL Server automatically uses the new inserted value as the current 
identity value.<br/><br/>
The setting of SET IDENTITY_INSERT is set at execute or run time and not at parse time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>35. Jenny wants to export data to Pivot table in Excel spreadsheet from a table in SQL Server. This data changes frequently. She wants to automate the process of updating the Excel spreadsheet using the SQL Job Scheduler. What tool is the best choice for the task?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Use Data Transformation Services (DTS) to populate the spreadsheet. Using DTS you can import and export data between heterogeneous sources. DTS is covered 
in depth later in the book.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>36. You have written an application in VB which uses SQL 7 for its database. You have used many stored procedure and triggers to make your application fast. However, users complain that saving records take too much time. To rectify the problem, you start the profiler and create a trace using the trace wizard. How would you go about identifying the cause of the problem?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Find the worst performing query. As you know from the users that the problem is in while saving the record, find the worst performing query. You can 
create a trace that captures events relating to T-SQL event classes, specifically RPC:Completed and SQL:BatchCompleted. Include all data columns in 
the trace, group by duration, and specify event criteria, for example, that the duration of the event must be at least 1,000 milliseconds. This event 
criterion eliminates short-running events from the trace. The duration minimum value can be increased as required. If you want to monitor only one 
database at a time, specify a value for the database ID event criteria. Use the find the worst performing queries option in the Create Trace Wizard 
to automatically create this trace definition.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>37. You have a table with employee information that rarely changes. However this table is used from many applications in the organization to validate the data and to produce reports. What would be the optimal fill factor to choose for indexes created on this table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
100. Tables that rarely change can use fill factor of 100%.   More frequent change requires low fill factor. If you set fill factor to 100, SQL Server 
creates both clustered and nonclustered indexes with each page 100 percent full. Setting fill factor to 100 is suitable only for read-only tables, to 
which additional data is never added.<br/><br/>
The default for fill factor is 0. Smaller fill factor values cause SQL Server to create new indexes with pages that are not full. For example, a fill 
factor value of 10 is a reasonable choice if you are creating an index on a table that you know contains only a small portion of the data that it will 
eventually hold. Smaller fill factor values cause each index to take more storage space, allowing room for subsequent insertions without requiring page 
splits.<br/><br/>
Since the table in question keeps the employee information and will be changed rarely, only when an employee leaves the company or a new employee joins 
the company, which is a rare occurrence not a daily or weekly occurrence. It is safe to have this table with 100% fill factor.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>38. What is the difference between a fill factor of 100 and 0?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The fill factor value is a percentage from 0 to 100 that specifies how much to fill the data pages after the index is created. A value of 100 means 
the pages will be full and will take the least amount of storage space. This setting should be used only when there will be no changes to the data, 
for example, on a read-only table.<br/><br/> 
A lower value leaves more empty space on the data pages, which reduces the need to split data pages as indexes grow but requires more storage space. 
This setting is more appropriate when there will be changes to the data in the table. A value of 0 behaves like 100 but leaves some extra space in 
the upper level of the data tree.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>39. How will you know when statistics on a table are obsolete?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Looking at the query plan and look at the numbers for ‘Estimated Row count’ and ‘Row Count’, if the difference is very big, say more than double or 
three times, it means the statistics are obsolete on the table. You should run update statistics on the table to make the statistics current.<br/><br/>
Out-of-date or missing statistics are indicated as warnings (table name in red text) when the execution plan of a query is graphically displayed using 
SQL Query Analyzer.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>40. Explain different backup plans.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Full database backup, which backs up the entire database including the transaction log.<br/><br/>
Differential database backup performed between full database backups. You cannot perform a differential backup, if you have not already done the 
full database backup. Differential backup backs up all the data since the last Full backup.<br/><br/>
Transaction log backup or incremental backup. File(s) and Filegroup(s) backup.<br/><br/>
Use BACKUP to back up database files and filegroups instead of the full database when time constraints make a full database backup impractical. 
Separate transaction log backups must be performed. After restoring a file backup, apply the transaction log to roll the file contents forward to 
make it consistent with the rest of the database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>41. What is a full backup?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A full database backup copies all the pages from a database to a backup device; it can be a local disk file or a network disk file, a local 
tape drive. SQL Server also copies the portion of the transaction log that was active while the backup was in process.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>42. Explain a differential backup.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A differential backup copies only the extents that have changed since the last full backup. Generally, you make several differential backups 
between full backups, and each differential backup contains all the changes since the last full backup.<br/><br/>
SQL Server 2000 tells which extents need to be backed up by examining a special page called the Differential Changed Map (DCM) in each file of the 
database. A file's DCM contains a bit for each extent in the file. Each time you make a full backup, all the bit values revert to 0. When any page 
in an extent is changed, the page's corresponding bit in the DCM page changes to 1. SQL Server copies the portion of the transaction log that was 
active during the backup.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>43. Explain an incremental backup.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A database has a transaction log that records data modifications made in the database. The log records every transaction. A transaction log backup 
copies all the log records that SQL Server has written since the last log backup. Even if you've made full database backups, a log backup always 
contains all the records since the last log backup.<br/><br/>
Exact behavior of the BACKUP LOG command depends on your database's recovery-model setting. If the database is using the full recovery model, the 
BACKUP LOG command copies the entire contents of the transaction log. If the database is using the simple recovery model, you cannot perform a log backup 
because the log is truncated regularly.<br/><br/>
In the bulk_logged recovery model, a transaction log backup copies the contents of the log and all the extents containing data pages that bulk operations 
have modified since the last log backup.<br/><br/>
In a typical scenario, an administrator would make a series of log backups between full database backups, with each log backup containing only the log 
records recorded since the last log backup.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>44. What is Log shipping?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Log shipping increases a SQL Server database's availability by automatically copying and restoring the database's transaction logs to another database 
on a standby server. Because the standby database receives all changes to the original database, it's an exact duplicate of the original database—out of 
date only by the delay in the copy-and-load process.<br/><br/>
Log shipping is better than replication in some scenarios. For example, after a switchover, you need to know exactly which transactions the standby server 
holds. When you use replication that information is not available, and you have to be willing to lose a certain number of transactions. However, when you 
use log shipping, you can find out which transactions the standby server holds because you know the last point of consistency.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>45. Every night you run a full backup. After every 3 three hours you make a differential backup. Every hour you make an incremental backup. In a worst-case scenario, how much work you can lose?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In the worst case you will loose, one hour of work, as every hour you take incremental backup.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>46. Explain a Checkpoint?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Checkpoint is essentially a bookmark for activity in the database transaction log. A database has a transaction log that records data modifications 
made in the database. The log records every transaction. SQL Server stores enough information in the log to either redo (roll forward) or undo (roll back) 
the data modifications that make up a transaction.<br/><br/>
As writing data on disk is a slow process, SQL Server caches modifications in buffers for a period of time to optimize disk writes. A page in this cached 
buffer is known as a dirty page. Writing this dirty buffer page to disk is called flushing the page. In SQL Server, first log images are written to disk 
before the corresponding data modification.<br/><br/>
A commit operation writes all log records for a transaction to the log file. A commit operation does not have to force all the modified data pages to 
disk as long as all the log records are flushed to disk. A system recovery can roll the transaction forward or backward using only the log records.<br/><br/>
Periodically, SQL Server ensures that all dirty log and data pages are flushed. This is called a checkpoint.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>47. Explain an Automatic Checkpoint.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By default SQL Server always generates automatic checkpoints. The interval between automatic checkpoints does not depend on time but on the number of 
records in the log.<br/><br/>
The interval between automatic checkpoints is calculated from the ‘recovery interval’ server configuration option. This option specifies the maximum time 
SQL Server should use to recover a database during a system restart. SQL Server estimates how many log records it can process in the recovery interval 
during a recovery operation. The interval between automatic checkpoints also depends on whether or not the database is using the simple recovery model.<br/><br/>
If the database is using the simple recovery model, an automatic checkpoint is generated whenever the log becomes 70 percent full or the number of log records 
reaches the number SQL Server estimates it can process during the time specified in the recovery interval option.<br/><br/>
If the database is using either the full or bulk-logged recovery model, an automatic checkpoint is generated whenever the number of log records reaches 
the number SQL Server estimates it can process during the time specified in the recovery interval option.<br/><br/>
Automatic checkpoints truncate the unused portion of the transaction log if the database is using the simple recovery model. The log is not truncated by 
automatic checkpoints if the database is using the full or bulk-logged recovery models.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>48. How you can list all the tables in a database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES
OR 
SELECT name FROM sysobjects WHERE type = 'U'</code></pre>
The first query will tell you all table name plus system tables and views too. 
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>49. How can you list all the columns in a database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">SELECT * FROM INFORMATION_SCHEMA.COLUMNS</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>50. How can you list all the table constraints in a database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">SELECT * FROM INFORMATION_SCHEMA. TABLE_CONSTRAINTS</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>51. What are the advantages DTS has over bcp?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
DTS has many functions that bcp does not provide, Moving data between:
<ol>
<li>SQL Server and non-SQL Server databases.</li>
<li>Two different kind of ODBC data sources.</li>
</ol>
<ul>
<li>DTS contains functions for modifying and transforming data fields during the bulk copy operation.</li>
<li>DTS can copy other objects (views, stored procedures, constraints, rules, user defined datatypes and user defined function etc ) between 
two SQL database . It can copy even indexes and triggers between two sql databases.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>52. How do you rebuild an identity column?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
DBCC CHECKIDENT
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>53. How can you transfer data from a text file to a database table? Or how can you export data from a table to a comma delimited (CSV) file? Or how can you import data from MS Access to a table in a database? Or how can you export data from a table to an Excel file?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To transfer data from a text file to a database table or vice versa use DTS.<br/><br/>
Open SQL server enterprise manager, right click on a database, and choose ‘All Tasks’ and then ‘Import task’. Follow the instruction on the DTS wizard.<br/><br/>
You should practice couple of scenarios before you go for an interview as it often happens that you may asked to perform these tasks.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>54. When does the auto update index statistics feature in SQL server turn itself on?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If the number of rows in a table are greater than 6, but less than or equal to 500, then statistics are automatically updated when there have been 
500 modifications made.<br/><br/>
If the number of rows in the table is greater than 500, then updates are automatically made when (500 plus 20 percent of the number of rows in the 
table) has been modified.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>55. What specific conditions database should meet, before you can Bulk copy data into it using BCP.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
First is Select into/bulk copy option should be activated on the database. You can reach to this option by right clicking on the database and 
choosing property option.<br/><br/>
Second, the destination table should be free of indexes.
<!-- Answer ::: END -->
</div>
</div>