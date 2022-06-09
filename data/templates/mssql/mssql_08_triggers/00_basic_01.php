
<div class="appQuestion"><b>1. What you can do to delete a table without the delete trigger firing?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
TRUNCATE TABLE statement is not caught by a DELETE trigger. Although a TRUNCATE TABLE statement is, in effect, like a DELETE without a WHERE clause 
(it removes all rows), it is not logged and thus cannot execute a trigger. Since permission for the TRUNCATE TABLE statement defaults to the table 
owner and is not transferable, only the table owner should be concerned about inadvertently circumventing a DELETE trigger with a TRUNCATE TABLE statement.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. Other than Truncate statement, which other command can by-pass the trigger on the tables?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The WRITETEXT statement, whether logged or unlogged, does not activate a trigger.<br/><br/>
Disabling the recursive triggers setting only prevents direct recursions. To disable indirect recursion as well, set the nested triggers server option 
to 0 using sp_configure.<br/><br/>
If any of the triggers do a ROLLBACK TRANSACTION, regardless of the nesting level, no further triggers are executed.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>3. What	are	the	differences	between	Triggers and Stored Procedures?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Triggers are called automatically by SQL server in response to some action on the table, e.g. insert, delete and update. Stored Procedures can be called 
from triggers.<br/><br/>
Triggers are a special class of stored procedure defined to execute automatically when an UPDATE, INSERT, or DELETE statement is issued against a table.<br/><br/>
Triggers contain Transact-SQL statements, much the same as stored procedures.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. Is this statement true: A trigger can reference objects outside the current database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, a trigger is created only in the current database; however, a trigger can reference objects outside the current database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. Can a trigger be created on a view?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, a trigger cannot be created on a view.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>6. Will the WRITETEXT statement activate a trigger?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, the WRITETEXT statement, whether logged or unlogged, does not activate a trigger.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. Can a table be created inside a Trigger?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
CREATE TABLE statements are not allowed in a trigger.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>8. When should you use an INSTEAD OF trigger?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
INSTEAD OF triggers are executed instead of the triggering action. INSTEAD OF triggers can also be defined on views. Each table or view can have 
one INSTEAD OF trigger for each triggering action (UPDATE, DELETE, and INSERT). You can work around this limitation by creating multiple views on top 
of the table or view in question, each with their own INSTEAD OF Triggers.<br/><br/>
INSTEAD OF triggers allow views that would normally not surpport updates to allow updates. A view made up of multiple base tables must use an INSTEAD OF 
trigger to support inserts, updates and deletes that reference data in the tables. Another advantage of INSTEAD OF triggers is that they allow you to 
process data before updating the table.<br/><br/>
Use an INSTEAD OF trigger when you would like to:
<ul>
<li>Ignore parts of a batch.</li>
<li>Log the problem rows.</li>
<li>Take an alternative action if an error condition is encountered.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>9. Can the "If Update (colName)" statement be used in a delete trigger?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, IF UPDATE (column) Tests for an INSERT or UPDATE action to a specified column and is not used with DELETE operations, as you cannot delete 
specific columns.
<!-- Answer ::: END -->
</div>
</div>
