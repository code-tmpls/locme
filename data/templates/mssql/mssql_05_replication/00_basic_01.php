
<div class="appQuestion"><b>1. What is database replication? What are the different types of replication you can set up in SQL Server?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Replication is the process of copying/moving data between databases on the same or different servers. SQL Server supports the following types of 
replication scenarios:
<ul>
<li>Snapshot Replication</li>
<li>Transactional Replication (with immediate updating subscribers, with queued updating subscribers) Merge replication</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. Which database stores information about replication?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The master database stores information about replication. The master and distribution databases keep all information about tables used 
in replication. See System Tables in books online. MSDB has information about the replication jobs.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. Your company has 50 branches all over the country. All the branches, including the Head Office have SQL Server as the database. Every night all 50 branches upload certain information to the Head Office. Which Replication topology is best suited for the above scenario?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Central Subscriber is the best topology for this scenario. In a Central Subscriber scenario, a number of Publishers replicate information into a common 
destination table at a Subscriber. The destination table is partitioned horizontally and contains a location-specific column as part of the primary key. 
Each Publisher replicates rows containing location-specific data.<br/><br/>
This replication configuration may be useful, for example, for rolling up inventory data from a number of servers at local warehouses into a central 
Subscriber at corporate headquarters. It could also be used to roll up information from autonomous business divisions within a company, or to consolidate 
order processing from dispersed locations.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. Which of the following option(s) is(are) an inappropriate usage of merge replication: a company time sheet database, a static look up table, a high transaction based application that requires real time replication to subscribers or a company information price list that is updated at remote sites and replicated to a central database.</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The static look up table and high transaction based applications that require real time replication to subscribers are not good candidates for 
merge replication.<br/><br/>
Static look up tables are most effective with snap shot replication. High transaction based applications that require real time replication are 
best implemented with transactional replication.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. What are the restraints imposed on the table design by a Merge Replication?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You should not use a timestamp column in the table. Merge replication does not support timestamp columns. Timestamp values are generated automatically 
by the local server and guaranteed unique within a specific database only. Therefore, it is impossible for a change to the timestamp value created 
at one server to be applied to the timestamp column at another server. You must remove the timestamp column from any table you want to publish using 
merge replication.
<!-- Answer ::: END -->
</div>
</div>
