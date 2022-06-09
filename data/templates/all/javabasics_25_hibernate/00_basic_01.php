
<div class="appQuestion"><b>209. What is Hibernate framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate is a popular Object Relational Mapping (ORM) framework of Java. It helps in mapping the Object Oriented Domain model to Relational Database tables.<br/><br/> 
Hibernate is a free software distributed under GNU license.<br/><br/> 
Hibernate also provides implementation of Java Persistence API (JPA).<br/><br/> 
In simple words, it is a framework to retrieve and store data from database tables from Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>210. What is an Object Relational Mapping (ORM)?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Object Relational Mapping (ORM) is a programming technique to map data from a relational database to Object oriented domain
model. This is the core of Hibernate framework.<br/><br/> 
In case of Java, most of the software is based on OOPS design. But the data stored in Database is based on Relation Database Management System (RDBMS).<br/><br/> 
ORM helps in data retrieval in an Object Oriented way from an RDBMS. It reduces the effort of developers in writing queries to access and insert data.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>211. What is the purpose of Configuration Interface in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Configuration interface can be implemented in an application to specify the properties and mapping documents for creating a
SessionFactory in Hibernate.<br/><br/> 
By default, a new instance of Configuration uses properties mentioned in hibernate.properties file.<br/><br/>
Configuration is mainly an initialization time object that loads the properties in helps in creating SessionFactory with these properties.<br/><br/> 
In short, Configuration interface is used for configuring Hibernate framework in an application.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>212. What is Object Relational Impedance Mismatch?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Object Relational Impedance Mismatch (ORIM) is also known as paradigm mismatch. It means that Object model and Relational
model do not work well with each other.<br/><br/> 
Relational model or a RDBMS represents data in tabular format like a spreadsheet. Object model or OOPS represents the data as an
inter-connected graph of objects.<br/><br/>
Mixing these two models leads to various problems. The common name for these issues is Object Relational Impedance Mismatch.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>213. What are the main problems of Object Relational Impedance Mismatch?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Object model and Relational models (RDBMS) have following problems that are part of Object Relational Impedance Mismatch :
<ul>
<li><b>Granularity :</b> Object model is more granular than Relational model. There are more classes in object model than the corresponding
tables in relational model.</li>
<li><b>Inheritance :</b> Object model supports inheritance. But Relational model does not have any concept of inheritance.</li>
<li><b>Identity :</b> Relational model has just one criteria for sameness of data. It is based on primary key. In object model like Java we can have
equals as well as == for sameness of objects.</li>
<li><b>Associations :</b> In Object model associations are uni-directional. In RDBMS, there is a concept of foreign key for association. Also
multiplicity of a relationship is hard to judge by looking at object model.</li>
<li><b>Data navigation :</b> In Object model, you can move from one object to another object for getting data. Egg. you can retrieve and Employee
object, then go to its department object and then get the employees in the department object. In RDBMS, we try to minimize the SQL
calls, so we get all the data by using joins.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>214. What are the key characteristics of Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate has following key characteristics :
<ul>
<li><b>Object/Relational Mapping (ORM) :</b> Hibernate provides ORM capabilities to developers. So then can write code in Object model
for connecting with data in Relational model.</li>
<li><b>JPA Provider :</b> Hibernate provides an excellent implementation of Java Persistence API (JPA) specification.</li>
<li><b>Idiomatic persistence :</b> Hibernate provides persistence based on natural Object-oriented idioms with full support for inheritance,
polymorphism, association, composition, and the Java collections framework. It can work with any data for persistence.</li>
<li><b>High Performance :</b> Hibernate provides high level of performance supporting features like- lazy initialization, multiple fetching
strategies, optimistic locking etc. Hibernate does not need its own database tables or fields. It can generate SQL at system
initialization to provide better performance at runtime.</li>
<li><b>Scalability :</b> Hibernate works well in multi server clusters. It has built in scalability support. It can work well for small projects as
well as for large business software.</li>
<li><b>Reliable :</b> Hibernate very reliable and stable framework. This is the reason for its worldwide acceptance and popularity among
developer community.</li>
<li><b>Extensible :</b> Hibernate is quite generic in nature. It can be configured and extended as per the use case of application.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>215. Can you tell us about the core interfaces of Hibernate framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The core interfaces of Hibernate framework are as follows :
<ul>
<li><b>Configuration :</b> Configuration interface can be implemented in an application to specify the properties and mapping documents for
creating a SessionFactory in Hibernate. Hibernate application bootstraps by using this interface.</li>
<li><b>SessionFactory :</b> In Hibernate, SessionFactory is used to create and manage Sessions. Generally, there is one SessionFactory created for
one database. It is a thread-safe interface that works well in multithreaded applications.</li>
<li><b>Session :</b> Session is a lightweight object that is used at runtime between a Java application and Hibernate. It contains methods to
create, read and delete operations for entity classes. It is a basic class that abstracts the concept of persistence.</li>
<li><b>Transaction :</b> This is an optional interface. It is a short lived object
that is used for encapsulating the overall work based on unit of work design pattern. A Session can have multiple Transactions.</li>
<li><b>Query :</b> This interface encapsulates the behavior of an objectoriented query in Hibernate. It can accept parameters and execute
the queries to fetch results. Same query can be executed multiple times.</li>
<li><b>Criteria :</b> This is a simplified API to retrieve objects by creating Criterion objects. It is very easy to use for creating Search like
features.</li>
<ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>216. How will you map the columns of a DB table to the properties of a Java class in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can map the class properties and table columns by using one of the two ways :
<ul>
<li><b>XML :</b> We can map the column of a table to the property of a class in XMLfile. It is generally with extension hbm.xml</li>
<li><b>Annotation :</b> We can also use annotations <code><b>@Entity</b></code> and <code><b>@Table</b></code> to map a column to the property of a class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>217. Does Hibernate make it mandatory for a mapping file to have .hbm.xml extension?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. It is a convention to have.hbm.xml extension in the name of a mapping file. It is not a requirement enforced by Hibernate. We can
use any other extension of our convenience for this.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>218. What are the steps for creating a SessionFactory in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Steps to create a SessionFactory in Hibernate are :
<ul>
<li><b>Configuration :</b> First create a Configuration object. This will refer to the path of configuration file.</li>
<li><b>Resource :</b> Add config file resource to Configuration object.</li>
<li><b>Properties :</b> Set properties in the Configuration object.</li>
<li><b>SessionFactory :</b> Use Configuration object to build SessionFactory.</li>
</ul>
Example.
<pre><code class="language-html hljs xml">Configuration config = new Configuration();
config.addResource(“testInstance/configuration.hbm.xml”);
config.setProperties( System.getProperties() );
SessionFactory sessions = config.buildSessionFactory();</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>219. Why do we use POJO in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
POJO stands for Plain Old Java Objects. A POJO is java bean with getter and setter methods for each property of the bean.<br/><br/> 
It is a simple class that encapsulates an object’s properties and provides access through setters and getters.<br/><br/> 
Some of the reasons for using POJO in Hibernate are:
<ul>
<li>POJO emphasizes the fact that this class is a simple Java class, not a heavy class like EJB.</li>
<li>POJO is a well-constructed class, so it works well with Hibernate proxies.</li>
<li>POJO also comes with a default constructor that makes it easier to persist with a default constructor.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>220. What is Hibernate Query Language (HQL)?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate Query Language is also known as HQL. It is an Object Oriented language. But it is similar to SQL.<br/><br/> 
HQL works well with persistent objects and their properties. HQL does not work on database tables.<br/><br/> 
HQL queries are translated into native SQL queries specific to a database.<br/><br/> 
HQL supports direct running of native SQL queries also. But it creates an issue in Database portability
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>221. How will you call a stored procedure in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate supports executing not only simple queries but also stored procedure of database. There are three ways to call a stored procedure in Hibernate :<br/><br/> 
<b>XMLmapping file :</b><br/><br/> 
We can declare the store procedure inside XMLMapping file.
<pre><code class="language-html hljs xml">&lt;!-- Employee.hbm.xml --&gt;
...
&lt;hibernate-mapping&gt;
&lt;class name="com.testHibernate.util.Employee"
table="employee" ...&gt;
&lt;id name="employeeId" type="java.lang.Integer"&gt;
&lt;column name=“EMPLOYEE_ID" /&gt;
&lt;generator class="identity" /&gt;
&lt;/id&gt;
&lt;property name="employeeId" type="string"&gt;
&lt;column name="EMPLOYEE_ID" length="10" notnull="true" unique="true" /&gt;
&lt;/property&gt;
&lt;/class&gt;
&lt;sql-query name="callEmployeeStoreProcedure"&gt;
&lt;return alias="employee"
class="com.testHibernate.util.Employee"/&gt;
&lt;![CDATA[CALLGetEmployees(:employeeId)]]&gt;
&lt;/sql-query&gt;
&lt;/hibernate-mapping&gt;</code></pre>
We can call it with <code><b>getNamedQuery()</b></code>.<br/><br/>
<pre><code class="language-html hljs xml">Query query = session.getNamedQuery("callEmployeeStoreProcedure")
.setParameter("employeeId", "1234");
List result = query.list();
for(int i=0; i&lt;result.size(); i++){
 Employee employee = (Employee)result.get(i);
 System.out.println(employee.getEmployeeCode());
}</code></pre>
<b>Native SQL :</b> We can use Native SQLto call a store procedure query directly. In this example GetEmployees() stored procedure is being called.<br/><br/> 
<pre><code class="language-html hljs xml">Query query = session.createSQLQuery(
"CALLGetEmployees(:employeeId)")
.addEntity(Employee.class)
.setParameter("employeeId", “1234);
List result = query.list();
for(int i=0; i&lt;result.size(); i++){
 Employee employee = (Employee) result.get(i);
 System.out.println(employee.getEmployeeCode());
}</code></pre>
<b>Use annotation :</b><br/><br/> 
We can also mark out stored procedure with @NamedNativeQueries annotation.
<pre><code class="language-html hljs xml">//Employee.java
@NamedNativeQueries({
@NamedNativeQuery(
name = "callEmployeeStoreProcedure",
query = "CALLGetEmployees(:employeeId)",
resultClass = Employee.class
)
})
@Entity
@Table(name = "employee")
public class Employee implements java.io.Serializable {
...</code></pre>
Call it with <code><b>getNamedQuery()</b></code>.<br/><br/>
<pre><code class="language-html hljs xml">Query query = session.getNamedQuery("callEmployeeStoreProcedure")
.setParameter("employeeId", “1234”);
List result = query.list();
for(int i=0; i&lt;result.size(); i++){
Employee employee = (Employee)result.get(i);
System.out.println(employee.getEmployeeCode());
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>222. What is Criteria API in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Criteria is a simplified API in Hibernate to get entities from database by creating Criterion objects.<br/><br/> 
It is a very intuitive and convenient approach for search features. Users can specify different criteria for searching entities and Criteria API can 
handle these.<br/><br/> 
Criterion instances are obtained through factory methods on Restrictions.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>223. Why do we use HibernateTemplate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This is a trap question. HibernateTemplate has been deprecated.<br/><br/> There were earlier good reasons to use HibernateTemplate. But
now the trend has changed towards not using it anymore.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>224. How can you see SQL code generated by Hibernate on console?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To display the SQL generated by Hibernate, we have to turn on the <code><b>show_sql</b></code> flag.
This can be done in Hibernate configuration as follows:
<pre><code class="language-html hljs xml">&lt;property name="show_sql"&gt;true&gt;/property&lt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>225. What are the different types of collections supported by Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate supports following two types of collections:
<ul>
<li><b>Indexed Collections :</b> List and Maps</li>
<li><b>Sorted Collections :</b> java.util.SortedMap and java.util.SortedSet</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>226. What is the difference between session.save() and session.saveOrUpdate() methods in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Save method first stores an object in the database. Then it persists the given transient instance by assigning a generated identifier.
Finally, it returns the id of the entity that is just created.<br/><br/> 
SaveOrUpdate() method calls either save() or update() method. It selects one of these methods based on the existence of identifier.<br/><br/> 
If an identifier exists for the entity then update() method is called. If there is no identifier for the entity then save() method is called as
mentioned earlier.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>227. What are the advantages of Hibernate framework over JDBC?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main advantages of Hibernate over JDBC are as follows :
<ul>
<li><b>Database Portability :</b> Hibernate can be used with multiple types of database with easy portability. In JDBC, developer has to write
database specific native queries. These native queries can reduce the database portability of the code.</li>
<li><b>Connection Pool :</b> Hibernate handles connection pooling very well. JDBC requires connection pooling to be defined by developer.</li>
<li><b>Complexity :</b> Hibernate handles complex query scenarios very well with its internal API like Criteria. So developer need not gain
expertise in writing complex SQL queries. In JDBC application developer writes most of the queries.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>228. How can we get statistics of a SessionFactory in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate we can get the statistics of a SessionFactory by using Statistics interface. We can get information like Close Statement
count, Collection Fetch count, Collection Load count, Entity insert count etc.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>229. What is the Transient state of an object in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When an object is just instantiated using the new operator but is not associated with a Hibernate Session, then the object is in Transient state.<br/><br/> 
In Transient state, object does not have a persistent representation in database. Also there is no identifier assigned to an object in Transient state.<br/><br/> 
An object in Transient state can be garbage collected if there is no reference pointing to it.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>230. What is the Detached state of an object in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An object is in detached state if it was persistent earlier but its Session is closed now.<br/><br/> 
Any reference to this object is still valid. We can even update this object. Later on we can even attach an object in detached state to a
new session and make it persistent.<br/><br/> 
Detached state is very useful in application transactions where a user takes some time to finish the work
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>231. What is the use of Dirty Checking in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Dirty Checking is very useful feature of Hibernate for write to database operations. Hibernate monitors all the persistent objects
for any changes. It can detect if an object has been modified or not.<br/><br/>
By Dirty Checking, only those fields of an object are updated that require any change in them. It reduces the time-consuming database
write operations.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>232. What is the purpose of Callback interface in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Callback interface in Hibernate is mainly used for receiving notifications of different events from an object.<br/><br/>
<i>Example.</i> We can use Callback to get the notification when an object is loaded into or removed from database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>233. What are the different ORM levels in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are following four different ORM levels in Hibernate :
<ul>
<li><b>Pure Relational ORM :</b> At this level entire application is designed around the relational model. All the operations are SQL based at this level.</li>
<li><b>Light Object Mapping :</b> At this level entity classes are mapped manually to relational tables. Business logic code is hidden from data access code. 
Applications with less number of entities use this level.</li>
<li><b>Medium Object Mapping :</b> In this case, application is designed around an object model. Most of the SQL code is generated at compile time. 
Associations between objects are supported by the persistence mechanism. Object-oriented expression language is used to specify queries.</li>
<li><b>Full Object Mapping :</b> This is one of the most sophisticated object modeling level. It supports composition, inheritance, polymorphism
and persistence. The persistent classes do not inherit any special base class at this level. There are efficient fetching and caching
strategies implemented transparently to the application.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>234. What are the different ways to configure a Hibernate application?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are mainly two ways to configure Hibernate application :
<ul>
<li><b>XML based :</b> We can define the Hibernate configuration in an XML file like hibernate.cfg.xml file</li>
<li><b>Programming based :</b> We can also use code logic to configure Hibernate in our application</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>235. What is Query Cache in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate provides Query Cache to improve the performance of queries that run multiple times with same parameters.<br/><br/> 
At times Query Caching can reduce the performance of Transactional processing. By default Query Cache is disabled in Hibernate.<br/><br/> 
It has to be used based on the benefits gained by it in performance of the queries in an application.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>236. What are the different types of Association mappings supported by Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate supports following four types of Association mappings :
<ul>
<li><b>Unidirectional association :</b> This kind of association works in only one direction.<br/>
Unidirectional association with join tables.</li>
<li><b>Bidirectional association :</b> This kind of association works in both directions.<br/>
Bidirectional association with join tables</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>237. What are the different types of Unidirectional Association mappings in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate there can be following three types of Unidirectional Association mappings :
<ul>
<li>Many to one</li>
<li>One to one</li>
<li>One to many</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>238. What is Unit of Work design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Unit of Work is a design pattern to define business transactions.<br/><br/> 
A Unit of Work is a list of ordered operations that we want to run on a database together. Either all of these go together or none of these goes.<br/><br/> 
Most of the time, we use term business transaction in place of Unit of Work.<br/><br/> 
<i>Example.</i> In case of money transfer from account A to B, the unit of work can be two operation Debit account A and Credit account B in a
sequence. Both these operations should happen together and in right sequence.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>239. In Hibernate, how can an object go in Detached state?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Once the session attached to an Object is closed, the object goes into Detached state. An Object in Detached state can be attached to another session at 
a later point of time.<br/><br/>
This state is quite useful in concurrent applications that have long unit of work.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>240. How will you order the results returned by a Criteria in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate provides an Order criterion that can be used to order the results. This can be order objects based on their property in ascending or descending 
order.<br/><br/>
Class is <code><b>org.hibernate.criterion.Order</b></code>.<br/><br/>
One example is as follows:<br/>
<i>Example.</i>
<pre><code class="language-html hljs xml">List employees = session.createCriteria(Employee.class)
.add( Restrictions.like("name", "F%")
.addOrder( Order.asc("name") )
.addOrder( Order.desc("age") )
.setMaxResults(10)
.list();</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>241. How does Example criterion work in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate, we can create an object with desired properties. Then we can use this object to search for objects with similar object. For
this we can use org.hibernate.criterion.Example criterion.<br/><br/> 
<i>Example.</i> First we create a sample book object of author Richard and category mystery. Then we search for similar books.
<pre><code class="language-html hljs xml">Book book = new Book();
book.setAuthor(‘Richard’);
book.setCategory(Category.MYSTERY);
List results = session.createCriteria(Book.class)
.add( Example.create(book) )
.list();</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>242. How does Transaction management work in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate we use Session interface to get a new transaction.<br/><br/> 
Once we get the transaction we can run business operations in that transaction. At the end of successful business operations, we
commit the transaction. In case of failure, we rollback the transaction.<br/><br/> 
Sample code is a follows:
<pre><code class="language-html hljs xml">Session s = null;
Transaction trans = null;
try {
s = sessionFactory.openSession();
trans = s.beginTransaction();
doTheAction(s);
trans.commit();
} catch (RuntimeException exc) {
trans.rollback();
} finally {
s.close();
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>243. How can we mark an entity/collection as immutable in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate, by default an entity or collection is mutable. We can add, delete or update an entity/collection.<br/><br/> 
To mark an entity/collection as immutable, we can use one of the following :<br/><br/> 
<ul>
<li><b>@Immutable :</b> We can use the annotation @Immutable to mark an entity/collection immutable.</li>
<li><b>XML file :</b> We can also set the property mutable=false in the XML file for an entity to make it immutable.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>244. What are the different options to retrieve an object from database in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate, we can use one of the following options to retrieve objects from database:
<ul>
<li><b>Identifier :</b> We can use load() or get() method and pass the identifier like primary key to fetch an object from database.</li>
<li><b>HQL :</b> We can create a HQL query and get the object after executing the query.</li>
<li><b>Criteria API :</b> We can use Criteria API to create the search conditions for getting the objects from database.</li>
<li><b>Native SQL :</b> We can write native SQL query for a database and just execute it to get the data we want and convert it into desired object.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>245. How can we auto-generate primary key in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use the primary key generation strategy of type <code><b>GenerationType.AUTO</b></code> to auto-generate primary key while persisting an object 
in Hibernate.
<i>Example.</i>
<pre><code class="language-html hljs xml">@Id
@GeneratedValue(strategy=GenerationType.AUTO)
private int id;</code></pre>
We can leave it null/0 while persisting and Hibernate automatically generates a primary key for us.
Sometimes, <code><b>AUTO</b></code> strategy refers to a <code><b>SEQUENCE</b></code> instead of an <code><b>IDENTITY</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>246. How will you re-attach an object in Detached state in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can call one of the methods <code><b>Session.update()</b></code>, <code><b>Session.saveOrUpdate()</b></code>, or <code><b>Session.merge()</b></code> to 
re-attach an object in detached state with another session in Hibernate.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>247. What is the first level of cache in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Hibernate Session is the first level of cache for persistent data in a transaction.<br/><br/>
The second level of cache is at JVM or SessionFactory level.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>248. What are the different second level caches available in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate, we can use different cache providers for implementing second level cache at JVM/SessionFactory level.<br/>
Some of these are :
<ul>
<li>Hashtable</li>
<li>EHCache</li>
<li>OSCache</li>
<li>SwarmCache</li>
<li>JBoss Cache 1.x</li>
<li>JBoss Cache 2</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>249. Which is the default transaction factory in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate, default transaction factory is JDBCTransactionFactory. But we can change it by setting the property 
<code><b>hibernate.transaction.factory_class</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>250. What are the options to disable second level cache in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This is a trick question. By default Second level cache is already disabled in Hibernate.<br/><br/> 
In case, your project is using a second level cache you can use one of the following options to disable second level cache in Hibernate :<br/><br/> 
<ul>
<li>We can set hibernate.cache.use_second_level_cache to false.</li>
<li>We can use CacheMode.IGNORE to stop interaction between the session and second-level cache. Session will interact with cache only to invalidate 
cache items when updates occur.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>251. What are the different fetching strategies in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate 3 onwards there are following fetching strategies to retrieve associated objects :
<ul>
<li><b>Join fetching :</b> In Join strategy Hibernate uses OUTER join to retrieve the associated instance or collection in the same SELECT.</li>
<li><b>Select fetching :</b> In Select strategy, Hibernate uses a second SELECT to retrieve the associated entity or collection. We can explicitly
disable lazy fetching by specifying lazy="false". By default lazy fetching is true.</li>
<li><b>Subselect fetching :</b> In Subselect strategy, Hibernate uses a second SELECT to retrieve the associated collections for all entities
retrieved in a previous query or fetch.</li>
<li><b>Batch fetching :</b> In Batch strategy, Hibernate uses a single SELECT to retrieve a batch of entity instances or collections by specifying a
list of primary or foreign keys. This is a very good performance optimization strategy for select fetching.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>252. What is the difference between Immediate fetching and Lazy collection fetching?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Immediate fetching an association, collection or attribute is retrieved at the same time when the owner is loaded.<br/><br/> 
But in Lazy collection fetching, a collection is fetched only when an operation is invoked on that collection by client application.<br/><br/> 
This is the default fetching strategy for collections in Hibernate.<br/><br/>
Lazy fetching is better from performance perspective.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>253. What is ‘Extra lazy fetching’ in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Extra lazy fetching, only individual elements of a collection are fetched from the database when they are required.<br/><br/> 
In this strategy, Hibernate does not fetch the whole collection into memory unless it is essential.<br/><br/> 
It is a good fetching strategy for large collections of objects
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>254. How can we check is a collection is initialized or not under Lazy Initialization strategy?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate provides two convenient methods, <code><b>Hibernate.initialize()</b></code> and <code><b>Hibernate.isInitialized()</b></code> to check 
whether a collection is initialized or not.<br/><br/>
By using <code><b>Hibernate.initialize()</b></code> we can force the initialization of a collection in Hibernate.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>255. What are the different strategies for cache mapping in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate provides following strategies for cache mapping :
<ul>
<li><b>Read only :</b> If an application requires caching only for read but not for write operations, then we can use this strategy. It is very simple
to use and give very good performance benefit. It is also safe to use in a cluster environment.</li>
<li><b>Read/Write :</b> If an application also needs caching for write operations, then we use Read/Write strategy.
Read/write cache strategy should not be used if there is requirement for serializable transaction isolation level.
If we want to use it in a cluster environment, we need to implement locking mechanism.</li>
<li><b>Nonstrict Read/Write :</b> If an application only occasionally updates the data, then we can use this strategy. It cannot be used in systems
with serializable transaction isolation level requirement.</li>
<li><b>Transactional :</b> This strategy supports full transactional cache providers like JBoss TreeCache.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>256. What is the difference between a Set and a Bag in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Bag in Hibernate is an unordered collection. It can have duplicate elements. When we persist an object in a bag, there is no guarantee
that bag will maintain any order.<br/><br/> 
A Set in Hibernate can only store unique objects. If we add the same element to set second time, it just replaces the old one. By default a
Set is unordered collection in Hibernate.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>257. How can we monitor the performance of Hibernate in an application?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use following ways to monitor Hibernate performance :
<ul>
<li><b>Monitoring SessionFactory :</b> Since there is one SessionFactory in an application, we can collect the statistics of a SessionFactory to
monitor the performance. Hibernate provides <code><b>sessionFactory.getStatistics()</b></code> method to get the statistics of
SessionFactory.</li>
</ul>
Hibernate can also use JMX to publish metrics.<br/><br/>
<ul>
<li><b>Metrics :</b> In Hibernate we can also collect other metrics likenumber of open sessions, retrieved JDBC connections, cache hit,
miss etc.</li>
</ul>
These metrics give great insight into the performance of Hibernate. We can tune Hibernate settings and strategies based on these metrics.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>258. How can we check if an Object is in Persistent, Detached or Transient state in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use following methods to check the state of an object in Hibernate :
<ul>
<li><b>Persistent State :</b> If call to EntityManager.contains(object) returns true, the object is in Persistent state.</li>
<li><b>Detached State :</b> If the call to <code><b>PersistenceUnitUtil.getIdentifier(object)</b></code> returns identifier property
then the object is in detached state.</li>
<li><b>Transient State :</b> If call to <code><b>PersistenceUnitUtil.getIdentifier(object)</b></code> returns null then object is in Transient state.</li>
</ul>
We can get access to <code><b>PersistenceUnitUtil</b></code> from the <code><b>EntityManagerFactory</b></code> in Hibernate.
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>259. What is ‘the inverse side of association’ in a mapping?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Let us consider an example in which a customer can have multiple orders and for every order there has to be a customer.<br/><br/> 
In OO world, customer is the owner of order. In SQL world, an Order has reference to customer id.<br/><br/> 
It is a bi-directional one to many mapping from customer to order.<br/><br/> 
The inverse side in this mapping is the owner of object. In this case customer is the owner or order. Since an order cannot exist without
a customer. But a customer can exist without an order.<br/><br/> 
Also customer has no column to save order data. But an Order table can store customer id, which is used for mapping.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>260. What is ORM metadata?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ORM uses metadata for its internal work. ORM maintains metadata to generate code used for accessing columns and tables.
ORM maps classes to tables and stores this information in Metadata. It maps fields in classes to columns in tables. These kinds
of mappings are also part of Metadata.<br/><br/> 
Application developers can also access Hibernate Metadata by using ClassMetadata and CollectionMetadata interfaces and Type hierarchy.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>261. What is the difference between load() and get() method in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate, <code><b>load()</b></code> and <code><b>get()</b></code> methods are quite similar in functionality.<br/><br/> 
The main difference is that load() method will throw an <code><b>ObjectNotFoundException</b></code> if row corresponding to an object is not
found in the database.<br/><br/> 
On the other hand, <code><b>get()</b></code> method returns null value when an object is not found in the database.<br/><br/> 
It is recommended that we should use <code><b>load()</b></code> method only when we are sure that object exists in database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>262. When should we use get() method or load() method in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As a thumb rule we can follow these guidelines :
<ul>
<li>We should use <code><b>get()</b></code> method when we want to load an object.</li>
<li>We should use <code><b>load()</b></code> method when we need a reference to an object without running extra SQL queries.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>263. What is a derived property in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Hibernate, a derived property is not mapped to any column of a database table.<br/><br/> 
A derived property is computed at runtime by evaluation of an expression.<br/><br/> 
These are read only properties.<br/><br/> 
<i>Example.</i> In this example profitMargin is derived from salePrice and buyPrice.
<pre><code class="language-html hljs xml">&lt;property name="profitMargin" formula="( SELECT (i.salePrice –
i.buyPrice) FROM item i WHERE i.Id = Id)"/&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>264. How can we use Named Query in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Named SQL query is the HQL query that is associated with a string name and can be referenced in the application by name.<br/><br/> 
It can be used in following ways:<br/><br/> 
<b>XMLMapping File :</b> We can define it in XMLmapping file.<br/><br/> 
<i>Example.</i> 
<pre><code class="language-html hljs xml">&lt;query name="findBookByAuthor”&gt;
&lt;![CDATA[from Book s where s.author = :author]]&gt;
&lt;/query&gt;
Annotation: We can also mark Named SQL with annotation.
@NamedQueries({
@NamedQuery(
name = "findBookByAuthor”,
query = "from Book s where s.author = :author”
)
})</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>265. What are the two locking strategies in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are two popular locking strategies that can be used in Hibernate :
<ul>
<li><b>Optimistic :</b> In Optimistic locking we assume that multiple transactions can complete without affecting each other. So we let the
transactions do their work without locking the resources initially. Just before the commit, we check if any of the resource has changed
by another transaction, then we throw exception and rollback the transaction.</li>
<li><b>Pessimistic :</b> In Pessimistic locking we assume that concurrent transactions will conflict while working with same resources. So a
transaction has to first obtain lock on the resources it wants to update.</li>
</ul>
The other transaction can proceed with same resource only after the lock has been released by previous transaction.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>266. What is the use of version number in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Version number is used in optimistic locking in Hibernate. When a transaction modifies an object, it increments its version. Based on
version number, second transaction can determine if the object it has read earlier has changed or not.<br/><br/> 
If the version number at the time of write is different than the version number at the time of read, then we should not commit the transaction.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>267. What is the use of session.lock() method in Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>Session.lock()</b></code> is a deprecated method in Hibernate. We should not use it.<br/><br/> 
Instead we should call <code><b>buildLockRequest(LockMode).lock(entityName, object)</b></code> method in Hibernate.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>268. What inheritance mapping strategies are supported by Hibernate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Hibernate supports following inheritance mapping strategies between classes and tables :
<ul>
<li><b>Table per class hierarchy :</b> In case of multiple types of books, we can have one book class and one book table. We can store all child
classes of book like- HardCoverBook, PaperBackBook etc in same table book. But we can identify the subclasses by a BookType column in Book table.</li>
<li><b>Table per subclass :</b> In this case we can have separate table for each kind of book. HardCoverBook table for HardCoverBook book
class. PaperBackBook table for PaperBackBook book class. And there will be a parent table, Book for Book class.</li>
<li><b>Table per concrete class :</b> In this case also we have separate table for each kind of book. But in this case we have even inherited
properties defined inside each table. There is no parent table Book for Book class, since it is not a concrete class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>
