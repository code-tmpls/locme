<div><b>1. What is JDBC?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>JDBC</b></code> stands for <b>J</b>ava <b>D</b>ata<b>B</b>ase <b>C</b>onnectivity. It is an abstraction layer that allows users to choose between 
databases. JDBC enables developers to write database applications in Java, without having to concern themselves with the underlying details of a particular 
database.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. Explain the role of Driver in JDBC.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The JDBC Driver provides vendor-specific implementations of the abstract classes provided by the JDBC API. Each driver must provide implementations 
for the following classes of the java.sql package: <code><b>Connection</b></code>, <code><b>Statement</b></code>, <code><b>PreparedStatement</b></code>, 
<code><b>CallableStatement</b></code>, <code><b>ResultSet</b></code> and <code><b>Driver</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is the purpose Class.forName method?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This method is used to method is used to load the driver that will establish a connection to the database.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is the advantage of PreparedStatement over Statement?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
PreparedStatements are precompiled and thus, their performance is much better. Also, PreparedStatement objects can be reused 
with different input values to their queries.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What is the use of CallableStatement ? Name the method, which is used to prepare a CallableStatement.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A <code><b>CallableStatement</b></code> is used to execute stored procedures. Stored procedures are stored and offered by a database. Stored 
procedures may take input values from the user and may return a result. The usage of stored procedures is highly encouraged, 
because it offers security and modularity.The method that prepares a CallableStatement is the following:  
<code><b>CallableStament.prepareCall()</b></code>;
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What does Connection pooling mean?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The interaction with a database can be costly, regarding the opening and closing of database connections. Especially, when the 
number of database clients increases, this cost is very high and a large number of resources is consumed.A pool of database 
connections is obtained at start up by the application server and is maintained in a pool. A request for a connection is served by a 
connection residing in the pool. In the end of the connection, the request is returned to the pool and can be used to satisfy future 
requests.
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


