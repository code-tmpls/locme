
<div class="appQuestion"><b>1. What is an index?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An index is a structure, which provides an efficient method for locating a particular row or set of rows. It is commonly used to enforce uniqueness 
constraints.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. What is the preferred way to create a clustered and non-clustered index? Which index should you create first the clustered or non- clustered?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The preferred way to build indexes on tables is to start with the clustered index and then build the nonclustered indexes. When dropping all indexes, 
drop the nonclustered indexes first and the clustered index last. That way, no indexes need to be rebuilt.<br/><br/>
If a clustered index is created on a table with several secondary indexes, all of the secondary indexes must be rebuilt so that they contain the clustering 
key value instead of the row identifier (RID). Likewise, if a clustered index is deleted on a table that has several nonclustered indexes, the nonclustered 
indexes are all rebuilt as part of the DROP operation.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. Can a unique index be created on a column, which contains NULL?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If a column contains NULL in more than one row, you cannot create a unique index on that column. NULL values are treated as duplicate values for 
indexing purposes. Therefore, if there is only one row with a null value, a unique index can be created on it, however if more than one row has a NULL 
value, then a unique index can not be created.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. How would you choose between a clustered and a non-clustered index?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A clustered index determines the storage order of data in a table. A table can contain only one clustered index.<br/><br/>
Before creating clustered indexes, understand how your data will be accessed. Consider using a clustered index for:
<ul>
<li>Columns that contain a limited number of distinct values, such as a state column that contains only 50 distinct state codes. However, if there are 
very few distinct values, such as only 1 and 0, no index should be created.</li>
<li>Queries that return a range of values using operators such as BETWEEN, &gt;, &gt;=, &lt;, and &lt;=.</li>
<li>Columns that are accessed sequentially.</li>
<li>Queries that return large result sets.</li>
<li>Columns that are frequently accessed by queries involving join or GROUP BY clauses; typically these are foreign key columns.</li>
<li>Column(s) specified in the ORDER BY or GROUP BY clause. This eliminates the need for SQL Server to sort the data because the rows are already sorted.</li>
<li>OLTP-type applications where very fast single row lookup is required, typically by means of the primary key. Create a clustered index on the primary key.</li>
</ul>
Clustered indexes are not a good choice for:
<ul>
<li>Columns that undergo frequent changes. When columns change that are part of a clustered index, the entire row moves because SQL Server must keep 
the rows data values in physical order. This is an important consideration in high-volume transaction processing systems where data tends to be volatile.</li>
<li>Covered queries. The more columns within the search key, the greater the chance for the data in the indexed column to change, resulting 
in additional I/O.</li>
</ul>
<i>Using Nonclustered Indexes :</i><br/>
A nonclustered index is analogous to an index in a textbook. The data is stored in one place, the index in another, with pointers to the storage 
location of the data. The items in the index are stored in the order of the index key values, but the information in the table is stored in a different 
order (which can be dictated by a clustered index). If no clustered index is created on the table, the rows are not guaranteed to be in any particular 
order.<br/><br/>
<i>Multiple Nonclustered Indexes :</i><br/>
Some books contain multiple indexes. For example, a gardening book can contain one index for the common names of plants and another index for the 
scientific names because these are the two most common ways in which the readers find information. The same is true for nonclustered indexes. You can 
define a nonclustered index for each of the columns commonly used to find the data in the table.<br/><br/>
<b>Considerations :</b><br/>
Before creating nonclustered indexes, understand how your data will be accessed. Consider using nonclustered indexes for :
<ul>
<li>Columns that contain a high number of distinct values, such as a combination of last name and first name (if a clustered index is used for 
other columns). If there are very few distinct values, such as only 1 and 0, no index should be created.</li>
<li>Queries that do not return large result sets.</li>
<li>Columns frequently involved in search conditions of a query (WHERE clause) that return exact matches.</li>
<li>Decision Support System applications for which joins and grouping are frequently required. Create multiple nonclustered indexes on columns 
involved in join and grouping operations, and a clustered index on any foreign key columns.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. Your table has a large character field. There are queries that use this field in their search clause. What should you do?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Creating indexes on very large fields is not advisable. SQL Server 2000 provides a new function CHECKSUM, which computes a checksum on a row or a column, 
and its value is always a 4 byte integer. You can create a computed column to be the checksum of your large character field and then build an index on that 
computed column. The values returned by CHECKSUM are not guaranteed to be absolutely unique, but there will be few duplicates. Since there is the 
possibility of two character string values having the same value for the checksum, your queries will need to include the full string that you're looking for.
<pre><code class="language-html hljs xml">DROP INDEX titles.titleind GO

ALTER TABLE titles
ADD check_title AS CHECKSUM(title) GO

CREATE INDEX check_title_index ON titles(check_title) GO

SELECT	*
FROM	titles
WHERE	title = ‘Straight Talk About Computers’ AND check_title =
CHECKSUM(' Straight Talk About Computers')</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. What is a fill factor?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When creating an index, you can specify a fill factor to leave extra gaps and reserve a percentage of free space on each leaf level page of the 
index to accommodate future expansion in the storage of the table data and reduce the potential for page splits. The fill factor value is a percentage 
from 0 to 100 that specifies how much to fill the data pages after the index are created.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. When you should use a low fill factor?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A large number of unique values and data is updated often dictate that the fill factor should be low and the index should be non-clustered.
If data is changing very frequently, keep the fill factor low (75%) so less page splits will take place, which will increase the performance.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>8. What are statistics?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Statistics determine the selectivity of the indexes. If an indexed column has unique values then the selectivity of that index is more, as opposed to 
an index with non-unique values. Query optimizer uses these statistics in determining whether to choose an index or not while executing a query.<br/><br/>
Some situations under which you should update statistics:
<ol>
<li>If there have been significant changes in the key values in the index.</li>
<li>If a large amount of data in an indexed column has been added, changed, or removed (that is, if the distribution of key values has changed), or the 
table has been truncated using the TRUNCATE TABLE statement and then repopulated.</li>
<li>The database has been upgraded from a previous version SQL 2000 provides auto updating of statistics.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>9. What is clustering?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Clustering is physically ordering the rows of table to match the order of the index.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>10. What is the difference between DBCC INDEXDEFRAG and DBCC REINDEX?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
DBCC REINDEX drops the index and creates the index again. DBCC INDEXDEFRAG is an online operation, it does not hold long-term locks that can block running 
queries or updates. With INDEXDEFRAG the index is always available, unlike DBREINDEX.<br/><br/>
DBCC INDEXDEFRAG can be considerably faster than running DBCC DBREINDEX on a relatively unfragmented index, but a large amount of fragmentation can cause 
INDEXDEFRAG to run considerably longer than DBREINDEX, which may or may not outweigh the benefit of its online capabilities.<br/><br/>
To improve the clustering of pages, rebuild the index.<br/><br/>
DBCC DBREINDEX rebuilds an index for a table or all indexes defined for a table. It can rebuild all of the indexes for a table in one statement.<br/><br/>
DBCC DBREINDEX is not supported for use on system tables.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>11. How you can find out if an index is useful to the optimizer?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>DBCC SHOW_STATISTICS (table, target)</b></code><br/>
The results returned indicate the selectivity of an index and provide the basis for determining whether an index is useful to the optimizer. The lower 
the density returned, the higher the selectivity.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>12. Where are full-text indexes stored?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Full-text indexes are stored in the server’s file system. Regular SQL indexes are stored in the database in which they are defined.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>13. How many full-text indexes can a table have?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Each table can have only one full-text index. Each table can have several regular SQL indexes.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>14. Indexes are updated automatically. Is the full-text index also updated automatically?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. Full-text indexes are not updated automatically.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>15. How is a full-text index updated?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Full-text indexes are not updated automatically. The stored procedure sp_fulltext_catalog must be run to update the full-text indexes. Regular SQL indexes 
are updated automatically as data is modified.<br/><br/>
Full-text indexes are grouped into a catalog of full-text indexes for the database in which the index is defined. Regular SQL indexes are not grouped.
Full-text indexes are created, managed, and dropped via stored procedures.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>16. You have a table called ‘Item’, which has columns as follows: [ItemID], [Item Desc], [Year Manufactured], [Company Name]. There is a clustered index on ItemID. Most of the time you query this table on [Item Desc] and [Year Manufactured], what other indexes should you create to make your queries run faster?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Create a composite non-clustered index on [Item Desc] and [Year Manufactured]. There is no need to create two non-clustered indexes, as the 
[Year Manufactured] is   not   going   to   change   much. [Year Manufactured] will not have many distinct values; therefore, a separate index on this 
column is not justified.<br/><br/>
Most selective columns should be put leftmost in the key of nonclustered indexes. The index is built in the order that the columns are defined for the 
constraint. You should adjust the order of the columns in the constraint to make the index most useful to queries.<br/><br/>
For this example, create an index as follows:
<pre><code class="language-html hljs xml">CREATE INDEX Item
ON ([Item Desc] , [Year Manufactured])</code></pre>
<br/>
<b>Note :</b> If you query the table based only on [Year Manufactured], the composite index will not be used since, it is not the first column in the index.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>17. Can you force a query to use a specific Index?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, by using index hints.
<pre><code class="language-html hljs xml">SELECT fname, lname
FROM emps (INDEX (idx_fname, idx_lname))</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>18. Which data type columns are the best candidates for full-text indexing?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Datatypes text and varchar are the best candidates for full-text indexing.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>19. When would you prefer to have a minimum number of indexes?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In an OLTP application, you want a minimum number of indexes. An online transaction processing (OLTP) database is typically characterized by having a 
large number of concurrent users’ actively adding and modifying data.<br/><br/>
Indexes must be updated each time a row is added or modified. To avoid over indexing heavily updated tables, keep indexes narrow.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>20. Why is there a performance difference between two similar queries where one uses UNION and the other uses UNION ALL?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The UNION query has to sort all of the results and remove any duplicate rows, this step is performed even if there are no duplicated rows in the results. 
The UNION ALL query bypasses the sort step and will use the indexes you have on the individual tables.<br/><br/>
The UNION operator allows you to combine the results of two or more SELECT statements into a single result set. Result sets combined using UNION must 
have the same structure. They must have the same number of columns, in the same order, and the corresponding result set columns must have compatible 
data types.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>21. What is the difference between OPENROWSET and OPENQUERY?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Both of these functions execute a pass-through Query on the given linked server. OPENROWSET, Includes all connection information necessary to access 
remote data from an OLE DB data source. This method is an alternative to accessing tables in a linked server and is a one-time, ad hoc method of 
connecting and accessing remote data using OLE DB. Both the functions can be referenced in the FROM clause of a query as though it is a table name. 
Although the query may return multiple result sets, but these functions returns only the first one.<br/><br/>
OPENQUERY is the preferred way, OPENROWSET has to have connection information, password, and user name hard coded into T-SQL, which makes it vulnerable 
to breaking, if ever the connection information changes. Writing passwords in connection string text also increase the chance of security breaches.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>22. How you can add messages to the NT event log from within a stored procedure?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
XP_logevent will log a user-defined message into the SQL Server log file and the Microsoft Windows NT Event Viewer. <code><b>xp_logevent</b></code> can 
also be used to send an alert without sending a message to the client.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>23. What are three ways you can use an identity value inside a trigger? Why would you prefer one way over another?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are three ways to get an Identity value.
<ul>
<li>IDENT_CURRENT()</li>
<li>SCOPE_IDENTITY() and</li>
<li>@@IDENTITY</li>
</ul>
All three return last-generated identity values.<br/><br/>
However, the scope and session make the result different in each of these functions.<br/><br/>
<ul>
<li>IDENT_CURRENT is not limited by scope and session; it is limited to a specified table.
@@IDENTITY returns the last identity value generated for any table in the current session, across all scopes.<br/><br/></li>
<li>SCOPE_IDENTITY returns the last identity value generated for any table in the current session and the current scope.<br/>
For example, you have two tables, T1 and T2, and an INSERT trigger defined on T1. When a row is inserted to T1, it inserts 1111 in the identity 
column, the trigger fires and inserts a row in T2. For example, let say 2222 is inserted in the T2 identity column.<br/>
This scenario illustrates two scopes: the insert on T1, and the insert on T2 as a result of the trigger.<br/>
IDENTITY and SCOPE_IDENTITY will return different values at the end of an INSERT statement on T1.<br/><br/></li>
<li>@@IDENTITY will return the last IDENTITY column value inserted across any scope in the current session, which is the value inserted in T2, which 
in this case is 2222.<br/><br/></li>
<li>SCOPE_IDENTITY() will return the IDENTITY value inserted in T1, which was the last INSERT that occurred in the same scope. It will return 1111.<br/><br/></li>
<li>IDENT_CURRENT (T1) would have returned 1111 and 2222 for IDENT_CURRENT(T2).<br/><br/></li>
</ul>
Choose the method that is appropriate for your needs.
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
