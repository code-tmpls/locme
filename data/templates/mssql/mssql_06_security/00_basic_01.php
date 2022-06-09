<div class="appQuestion"><b>1. A user is a member of the Public role and the Sales role. The Public role has select permission on all the tables. The Sales role does not have select permission on some of the tables. Will the user be able to select from all tables?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, the user will not be able to select information from tables. Permissions assigned to a role supercede those assigned to the role Public. 
This is true whether permissions assigned to the role are more restrictive or less restrictive than those assigned to the role Public
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. If a user does not have permission to a table, but has permission to a view created on it, will he be able to view the data in table?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. The user permission for the object referenced by a view is ignored. If a user does not have select permission on the table, but if he has permission 
on the view based on same table, he can select from the view.<br/><br/>
In this case, view and table must belong to the same owner, if the table owner is different then the view owner, then user will not be able to select on 
view. The owner of the view must own the table also for the above scenario.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. A user has not been given a user account for any database, but has a valid login in the SQL server. Can he use the database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Any user who has not been given a User Account for a database will be allowed to use permissions assigned to the User Account guest. Thus, if a user has a 
valid Login ID for an SQL Server but has not been assigned to a database role or given a User Account for the database, the user has access via the account 
guest.<br/><br/>
A user who has been given a User Account for a database will automatically be a member of the database role public. The user may also be assigned to other 
database roles.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. Tony works in the Sales Department and has created a table named OrderDetail for the Sales department. You write a stored procedure which will help Mark, a sales representative, update the OrderDetail table. However, when Mark uses the stored procedure he gets an error. You realize that this is a security issue. What is required to enable Mark to use your stored procedure?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You must assign EXECUTE permission to Mark on your stored procedure, and Tony must assign UPDATE permission on the Table. For tables and views, the owner 
can grant INSERT, UPDATE, DELETE, SELECT, and REFERENCES permissions, or ALL permissions. A user must have INSERT, UPDATE, DELETE, or SELECT permissions 
on a table before they can use it in any INSERT, UPDATE, DELETE, or SELECT statements.<br/><br/>
The owner of a stored procedure can grant EXECUTE permissions for the stored procedure. If the owner of a base table wants to prevent users from accessing 
the table directly, they can grant permissions on views or stored procedures referencing the table, but not grant any permissions on the table itself.<br/><br/>
The REFERENCES permission lets the owner of another table use columns in your table as the target of a REFERENCES FOREIGN KEY constraint from their table.<br/><br/>
You can eliminate this problem by having dbo own all objects in a database.   In that case, the only thing you would need to have done was to grant Mark 
execute permissions to the stored procedure.
<!-- Answer ::: END -->
</div>
</div>