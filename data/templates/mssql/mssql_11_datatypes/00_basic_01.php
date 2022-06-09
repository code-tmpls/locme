<div class="appQuestion"><b>1. Between Cast and Convert which function would you prefer and why?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Both the functions are used to convert one data type to another. CAST is based on the SQL-92 standard and is preferred over CONVERT. You may prefer to 
use convert, in situations where you want to convert a datetime value to a specific style.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. What are the new data types are introduced in SQL 2000?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
SQL Server 2000 introduces three new data types. bigint is an 8-byte integer type. sql_variant is a type that allows the storage of data values of 
different data types. table is a type that allows applications to store results temporarily for later use. It is supported for variables, and as the 
return type for user-defined functions.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. Why it is recommended to avoid referencing a floating point column in the WHERE clause?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Approximate numeric data consists of numeric data preserved as accurately as the binary numbering system allows. Many floating-point values cannot 
be accurately represented in binary notation. For these numbers, it is necessary to store an approximation of the decimal number.<br/><br/> 
Examples of these numbers are floating-point values ending in <code><b>0.3</b></code>, <code><b>0.6</b></code>, and <code><b>0.7</b></code>.<br/><br/>
The IEEE 754 specification provides four rounding modes: 
<ul>
<li>round to nearest</li>
<li>round up</li> 
<li>round down and</li>
<li>round toward zero</li>
</ul>
<br/>SQL Server uses round up. It is best to avoid referencing to floating-point columns in WHERE clauses. I.e. Float and Real.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. You have to store user responses of ‘Yes’ and ‘No’. What kind of data type is best suited for this task?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The bit datatype is best suited to store Yes/No, True/False, and 1/0 values.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. What is the Exact Numeric data type in SQL?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Exact numeric data consists of numeric data with accuracy preserved to the least-significant digit. Exact numeric datatypes are different from the 
approximate numeric datatypes float and real, which cannot store all decimal numbers with complete accuracy. The decimal and numeric datatypes are 
identical in the SQL Server. Both are provided for ANSI compatibility.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. Explain timestamp datatype?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The timestamp is a datatype that is automatically updated every time a row containing a timestamp column is inserted or updated. Values in timestamp 
columns are not datetime data, but binary(8) varbinary(8) data, indicating the sequence of SQL Server activity on the row. A table can have only one 
timestamp column.<br/><br/>
The timestamp datatype has no relation to the system time - it is simply a monotonically increasing counter whose values will always be unique within 
a database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7.How can a user-defined datatype be created? </b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Sp_addtype creates a user-defined datatype. Executing sp_addtype creates a user-defined datatype and adds it to the systypes system table.<br/><br/> 
Once a user datatype is created, you can use it in the CREATE TABLE and ALTER TABLE statements, as well as bind defaults and rules to it. 
<pre><code class="language-html hljs xml">sp_addtype typename, phystype [, nulltype]</code></pre>
Define each user datatype in terms of one of the physical (SQL Server - supplied) datatypes, preferably specifying NULL (allow null entries) or 
NOT NULL (disallow them). A user-defined datatype name must be unique in the database, but user-defined datatypes with different names can have 
the same definition.<br/><br/> 
<b>Examples</b><br/><br/> 
<i>Datatype That Does Not Allow Null Values</i><br/>
This example creates a user-defined datatype named ssn to be used for columns that hold social security numbers.<br/><br/> 
Notice that varchar(11) is enclosed in single quotation marks because it contains punctuation (parentheses).<br/>
<code><b>sp_addtype ssn</b></code>, <code><b>‘VARCHAR(11)’</b></code>, <code><b>‘NOT NULL’</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>8. What are the approximate numeric data types?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Float and Real are approximate number data types for use with floating point numeric data. Floating point data is approximate; not all values in the 
data type range can be precisely represented.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>9. Which data types generate inaccurate results if used with an = or <> comparison in a WHERE clause of a SQL statement?
</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Float, Real. The float and real data types are known as approximate data types. The behavior of float and real follows the IEEE 754 specification 
on approximate numeric data types.<br/><br/>
Approximate numeric data types do not store the exact values specified for many numbers; they store an extremely close approximation of the value. 
For many applications, the tiny difference between the specified value and the stored approximation is not noticeable. At times, though, the difference 
becomes noticeable. Because of this approximate nature of the float and real data types, do not use these data types when exact numeric behavior is 
required, such as in financial applications, in operations involving rounding, or in equality checks. Instead, use the integer, decimal, money, or 
small money data types.<br/><br/>
Avoid using float or real columns in WHERE clause search conditions, especially the = and &lt; &gt; operators. It is best to limit float and real columns 
to &gt; or &lt; comparisons.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>10. Beginning with SQL Server Version 7.0, a new enhanced data type nchar was added. What type of data is supported with this data type?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<b>Unicode Data</b><br/><br/> 
Unicode data is stored using the nchar, nvarchar, and ntext data types in SQL Server. Use these data types for columns that store characters from more 
than one character set.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>11. What will happen if a column containing char type data is changed to the nchar data type?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The <code><b>nchar</b></code> data type takes double the amount of bytes to save the same amount of information. Unicode data can be saved in this 
column. Unicode data is stored using the nchar, nvarchar, and ntext data types in SQL Server. Use these data types for columns that store characters 
from more than one character set. Unicode characters store the character set and the character; as a result it requires twice the space as compared to 
char datatype.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>12. To automatically record the time on which the data was modified in a table, which data type should you choose for the column?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<b>Use the datetime datatype</b><br/><br/> 
Date and time data types are used for representing date and time of day. Date and time data from January 1, 1753, to December 31, 9999, to an accuracy of 
one three-hundredth second, or 3.33 milliseconds. Values are rounded to increments of .000, .003, or .007 milliseconds, as shown in the table.<br/><br/>
timestamp - A database-wide unique number. The storage size is 8 bytes. The value of a timestamp column is unique within a database.<br/><br/>
A table can have only one timestamp column. The value in the timestamp column is updated every time a row containing a timestamp column is inserted or 
updated. This property makes a timestamp column a poor candidate for keys, especially primary keys. Any update made to the row changes the timestamp value, 
thereby changing the key value. If the column is in a primary key, the old key value is no longer valid, and foreign keys referencing the old value are no 
longer valid.
<!-- Answer ::: END -->
</div>
</div>
