
<div class="appQuestion"><b>1. What is XDR?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Microsoft SQL Server 2000, the XML-Data Reduced (XDR) language is used to create the schemas. The XDR is flexible and overcomes some of the 
limitations of the Document Type Definition (DTD), which also describes the document structure. Unlike DTDs, XDR schemas describe the structure 
of the document using the same syntax as the XML document. Additionally, in a DTD, all the data contents are character data. XDR language schemas 
allow you to specify the data type of an element or an attribute.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. What is the difference between FOR AUTO and FOR NESTED?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The NESTED mode of the client-side FOR XML is similar to the AUTO mode of the server-side FOR XML with the following exceptions:
<ul>
<li>When you query views by using AUTO mode on the server-side, the view name is returned as the element name in the resulting XML.<br/>
For example, assume that the following view is created on the Employees table in the Northwind database:
<pre><code class="language-html hljs xml">CREATE VIEW EmpView AS (SELECT EmployeeID as EID,
FirstName as FName, LastName as LName
FROM Employees)</code></pre>

The following template specifies a query against the EmpView view and also specifies server-side XML formatting:
<pre><code class="language-html hljs xml">&lt;ROOT xmlns:sql="urn:schemas-microsoft-com:xml-sql"&gt;
&lt;sql: query client-side-xml="0"&gt; SELECT * FROM EmpView FOR XML AUTO
&lt;/sql: query&gt;
&lt;/ROOT&gt;</code></pre>
</li>
<li>When you execute the template, the following XML is returned. (Only partial results are shown.) Note that the element names are the names of 
the views against which the query is executed.
<pre><code class="language-html hljs xml">&lt;ROOT xmlns:sql="urn:schemas-microsoft-com:xml-sql"&gt;
&lt;EmpView EID="1" FName="Nancy" LName="Smith" /&gt;
&lt;EmpView EID="2" FName="Andrew" LName="Fuller" /&gt;
...
&lt;/ROOT&gt;</code></pre>
<div align="center">AUTO + CLIENT = Element name will be VIEW NAME</div></li>
<li>When you specify client-side XML formatting by using the corresponding NESTED mode, the base table name(s) are returned as the 
element name(s) in the resulting XML.<br/>
For example, the following revised template executes the same SELECT statement, but the XML formatting is performed on the client-side (that is, 
client-side-xml is set to True in the template):

<pre><code class="language-html hljs xml">&lt;ROOT xmlns:sql="urn:schemas-microsoft-com:xml-sql"&gt;
&lt;sql:query client-side-xml="1"&gt;
SELECT *	FROM	EmpView	FOR XML NESTED
&lt;/sql:query&gt;
&lt;/ROOT&gt;</code></pre>
</li>
<li>Executing this template produces the following XML. Note that the element name is the base table name in this case.
<pre><code class="language-html hljs xml">&lt;ROOT xmlns:sql="urn:schemas-microsoft-com:xml-sql"&gt;

&lt;Employees EID="1" FName="Nancy" LName="Smith" /&gt;
&lt;Employees EID="2" FName="Andrew" LName="Fuller" /&gt;
...
&lt;/ROOT&gt;</code></pre>

<div align="center">NESTED + CLIENT = Element name will be TableName</div></li>
<li>When you use AUTO mode of the server-side FOR XML, the table aliases that are specified in the query are returned as element names in 
the resulting XML.<br/> For example, consider this template:

<pre><code class="language-html hljs xml">&lt;ROOT xmlns:sql="urn:schemas-microsoft-com:xml-sql"&gt;
&lt;sql:query client-side-xml="0"&gt; SELECT FirstName as fname,
LastName as lname FROM	Employees E
FOR XML AUTO
&lt;/sql:query&gt;
&lt;/ROOT&gt;</code></pre>

Executing the template produces the following XML:
<pre><code class="language-html hljs xml">&lt;ROOT xmlns:sql="urn:schemas-microsoft-com:xml-sql">
&lt;E fname="Nancy" lname="Smith" /&gt;
&lt;E fname="Andrew" lname="Fuller" /&gt;
...
&lt;/ROOT&gt;</code></pre>

<div align="center">Hint: AUTO + SERVER = Table Alias</div></li>
<li> you use the NESTED mode of the client-side FOR XML, the table names are returned as element names in the resulting XML. 
(Table aliases that are specified in the query are not used.)<br/> For example, consider this template:

<pre><code class="language-html hljs xml">&lt;ROOT xmlns:sql="urn:schemas-microsoft-com:xml-sql"&gt;
&lt;sql:query client-side-xml="1"&gt; SELECT FirstName as fname,
LastName as lname FROM	Employees E
FOR XML NESTED
&lt;/sql:query&gt;
&lt;/ROOT&gt;</code></pre>
Executing the template produces the following XML:
<pre><code class="language-html hljs xml">&lt;ROOT xmlns:sql="urn:schemas-microsoft-com:xml-sql"&gt;
&lt;Employees fname="Nancy" lname="Smith" /&gt;
&lt;Employees fname="Andrew" lname="Fuller" /&gt;
...
&lt;/ROOT&gt;</code></pre>

<div align="center">Hint: NESTED + SERVER = TableName</div></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. What is the difference between FOR XML RAW and FOR XML AUTO?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<b>RAW :</b><br/><br/> Takes the query result and transforms each row in the result set into an XML element with a generic identifier 
<code><b>&lt;row /&gt;</b></code> as the element tag.
<b>AUTO :</b><br/><br/> Returns query results in a simple, nested XML tree. Each table in the FROM clause is represented as an XML element. 
The columns listed in the SELECT clause are mapped to the appropriate element attributes.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. Explain FOR XML EXPLICIT Mode?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In an EXPLICIT mode, the query writer controls shape of the XML document returned by the execution of the query. The query must be written in a 
specific way so that the additional information about the expected nesting is explicitly specified as part of the query.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. What is XML Schema?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An XML schema describes the structure of an XML document and also describes the various constraints on the data in the document. When you specify 
XPath queries against the schema, the structure of the XML document returned is determined by the schema against which the XPath query is executed.<br/><br/>
In an XSD schema, the <code><b>&lt;xsd:schema&gt;</b></code> element encloses the entire schema; all element declarations must be contained within the 
<code><b>&lt;xsd:schema&gt;</b></code> element. You can describe attributes that define the namespace in which the schema resides and the namespaces 
that are used in the schema as properties of the <code><b>&lt;xsd:schema&gt;</b></code> element.<br/><br/>
The minimum XSD schema is:
<pre><code class="language-html hljs xml">&lt;xsd:schema xmlns:xsd="http://www.w3.org/2001/XMLSchema"
xmlns:sql="urn:schemas-microsoft-com:mapping-
schema"&gt;
...
&lt;/xsd:schema&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. What is mapping schema?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A mapping schema is, in effect, an XML view of the relational data. These mappings can be used to retrieve relational data as an XML document. 
In the context of the relational database, it is useful to map the arbitrary XSD schema to a relational store. One way to achieve this is to 
annotate the XSD schema. An XSD schema with the annotations is referred to as a mapping schema, which provides information pertaining to how 
XML data is to be mapped to the relational store.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. What is XPath?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
XPath language is defined by the W3C as a standard navigation language.<br/><br/>
XPath (XML Path Language) is a graph navigation language. XPath is used to select a set of nodes from an XML document. Each XPath operator selects 
a node-set based on a node-set selected by a previous XPath operator.
<!-- Answer ::: END -->
</div>
</div>

