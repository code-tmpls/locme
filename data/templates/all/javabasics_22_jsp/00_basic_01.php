
<div class="appQuestion"><b>9. What are the implicit objects in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
JSP has following implicit objects : 
<ol>
<li>Request</li>
<li>Response</li>
<li>Application</li>
<li>Exception</li>
<li>Page</li>
<li>Config</li>
<li>Session</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>10. How will you extend JSP code?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can extend JSP code by using Tag libraries and Custom actions.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>11. How will you handle runtime exceptions in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use Error page attribute in JSP to catch runtime exceptions. This attribute forwards user request to the error page automatically.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>12. How will you prevent multiple submits of a page that come by clicking refresh button multiple times?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use Post Redirect Get (PRG) pattern to solve the issue of multiple submission of same data. It works as follows : <br/><br/>
First time when a user submits a form to server by POST or GET method, then we update the state in application database.<br/><br/> Then we send a redirect 
response to send reply to client.<br/><br/> Then we load a view by using GET command. There is no data issent in this. Since this a new JSP page, it is 
safe from multiple submits. The code that processes the request is idempotent. So it does not do same action twice for same request.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>13. How will you implement a threadsafe JSP page?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use SingleThreadModel Interface to implement a thread safe JSP page.We can also add 
<code><b>&lt;%@page isThreadSafe=”false” ^&gt;</b></code> directive in JSP page to make it thread safe.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>14. How will you include a static file ina JSP page?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use include directive of JSP to include a Static page in JSP. In this approach, we use translation phase to include a static page. We have to 
specify the URL of the resource to be included as file attribute in this directive.<br/><br/> 
E.g. <code><b>&lt;%@ include file="footer.html" %&gt;</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>15. What are the life cycle methods of a JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A JSP has following life cycle methods :
<ol> 
<li><b>jspInit() :</b> This method is invoked when the JSP is called for the first time. We can do initial setup for servicing a request in this method.</li>
<li><b>_jspService() :</b> This method is used to serve every request of the JSP.</li>
<li><b>jspDestroy():</b> Once we remove a JSP from the container, we call this method. It is used for cleanup of resources like Database connections etc</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>16. What are the advantages of using JSP in web architecture?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We get following advantages by using JSP in web architecture : 
<ol>
<li><b>Performance :</b> JSP provides very good performance due to their design of using same code to service multiple requests.</li>
<li><b>Fast :</b> Since JSP is pre-compiled, server can serve the pages very fast.</li>
<li><b>Extendable :</b> JSP is based on Java Servlets. This helps inextending JSP architecture with other Java technologieslike JDBC, JMS, JNDI etc.</li>
<li><b>Design :</b> It is easier to design user interface with JSP, since it is very close to HTML. UI designers can create a JSP with mock data and 
developers can later provide implementation of dynamic data.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>17. What is the advantage of JSP over Javascript?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JSP we can write Java code seamlessly. It allows for writing code that can interact with the rest of the application.<br/><br/> 
Javascript code is mostly executed at client side. This limits the tasks that can be done in Javascript code. We cannot connect to database server 
from Javascript at the client side.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>18. What is the life cycle of JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
JSP has following lifecycle stages : 
<ol>
<li><b>Compilation :</b> When a request is made for a JSP, the corresponding JSP is converted into Servlet and compiled. If there is already a compiled 
form of JSP and there is not change in JSP page since last compilation, this stage doesnot do anything.</li>
<li><b>Initialization :</b> In this stage, jspInit() method is called to initialize any data or code that will be later used multiple times in _jspService() 
method.</li>
<li><b>Service :</b> In this stage, with each request to JSP, _jspService() method is called to service the request. This is the core logic of JSP that 
generates response for request.</li>
<li><b>Destroy :</b> In this stage, JSP is removed from the container / server. Just before removal, this stage performs the cleanup of any resources held 
by JSP.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>19. What is a JSP expression?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A JSP expression is an element of a JSP page that is used to evaluate a Java expression and convert into a String. This String is replaced into the 
locations wherever the expression occurs in JSP page.<br/><br/> 
Example. <code><b>&lt;%= expression =%&gt;</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>20. What are the different types of directive tags in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
JSP has following directive tags : 
<ol>
<li><b>Page :</b> This directive is used for page related attributes. It can be put anywhere in the JSP page. But by convention weput it on the top 
of the page.<br/>
E.g.<code><b>&lt;%@ page attribute="value" %&gt;</b></code></li>
<li><b>Taglib :</b> We can create custom tags in JSP and use these by taglib directive in a JSP page.<br/> 
E.g. <code><b>&lt;%@ taglib uri="abc.html" prefix="tag_prefix"&gt;</b></code></li>
<li><b>Include :</b> We use include directive to read a file and mergeits content with the JSP page. This is done during compilation stage.<br/>
<code><b>&lt;%@ include file="relative url"&gt;</b></code></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>21. What is session attribute in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Session attribute in JSP is used for HTTP session mechanism. If wedo not want to use HTTP session in JSP, then we set this attribute to false. If it is 
set to true, we can use built in session object in JSP.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>22. What are the different scopes of a JSP object?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A JSP object, implicit or explicit, can have one of the following scopes : 
<ol>
<li><b>Page :</b> In this scope, the object is accessible from the page where it was created. Important point here is that when a user refreshes the page, 
the objects of this scope also get created again.</li>
<li><b>Request :</b> In request scope, the object is accessible to the HTTP request that created this object.</li>
<li><b>Session :</b> In this scope, the object is available throughout the same HTTP session.</li>
<li><b>Application :</b> This is the widest scope. The object is available throughout the application in which JSP was created.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>23. What is pageContext in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JSP, pageContext is an implicit object. This is used for storing and accessing all the page scope objects of JSP. It is an instance of the 
PageContext class from <code><b>javax.servlet.jsp</b></code> package.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>24. What is the use of jsp:useBean in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use <code><b>jsp:useBean</b></code> to invoke the methods of a Java Bean class. The Java Bean class has some data and setter / getters to access 
the data. With this tag, container will try to locate the bean. If bean is not already loaded then it will create an instance of a bean and load it. 
Later this bean can be used in expressions or JSP code.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>25. What is difference between include Directive and include Action of JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the main differences between include Directive and include Action are as follows : 
<ol>
<li>Include directive is called at translation phase to include content in JSP. Include Action is executed during runtime of JSP.</li>
<li>It is not possible to pass parameters to include directive.Include action can accept parameters by jsp:param tag.</li>
<li>Include directive is just copying of content from another file to JSP code and then it goes through compilation. Include action will dynamically 
process the resource being called and then include it in the JSP page.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>26. How will you use other Java files of your application in JSP code?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use import tag to import a Java file in JSP code. Once a file is imported, it can be used by JSP code. It is a very convenient method to use 
Java classes in JSP code.<br/><br/> For better organization of Java code, we should create a package of classes that we are planning to use in JSP code.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>27. How will you use an existing class and extend it to use in the JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use extends attribute in include tag to use an existing class and extend it in the current JSP.<br/><br/>
E.g. <code><b>&lt;%@ include page extends="parent_class" %&gt;</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>28. Why _jspService method starts with _ symbol in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
All the code that we write in a JSP goes into <code><b>_jspService</b></code> method during translation phase. We cannot override this method. Where as 
other lifecycle methods <code><b>jspInit()</b></code> and <code><b>jspDestroy()</b></code> can be overridden.<br/><br/> It appears that container uses
 _ symbol to distinguish the method that cannot be overridden by client code.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>29. Why do we use tag library in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
At times we want to create a UI framework with custom tags. In such a scenario, taglib is a very good feature of JSP. With taglib we can create 
tags that can provide custom features.<br/><br/> Taglib is also a nice way to communicate with UI designers whocan use custom tags in the html without 
going into the details of how the code is implemented.<br/><br/> Another benefit of taglib is reusability of the code. This promotes writing code only 
once and using is multiple times.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>30. What is the different type of tag library groups in JSTL?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
JSTL stands for JavaServer Pages Standard Tag Library. In JSTL, we have a collection of JSP tags that can be used in different scenarios. 
There are following main groups of tags in JSTL : 
<ol>
<li>Core tags</li>
<li>SQL tags</li>
<li>Formatting tags</li>
<li>XML tags</li>
<li>JSTL Function</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>31. How will you pass information from one JSP to another JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can pass information from one JSP to another by using implicit objects. If different JSP are called in same session, we can use session object 
to pass information from one JSP to another. If we want to pass information from one JSP to another JSP included in the main JSP, then we can use 
<code><b>jsp:param</b></code> to pass this information.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>32. How will you call a stored procedure from JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
JSP allows running Java code from a <code><b>.jsp</b></code> file. We can call a stored procedure by using JDBC code.<br/><br/> 
We can call a CallableStatement from JSP code to invoke a stored procedure.<br/><br/> If we are using Spring framework, then we can use 
JdbcTemplate class to invoke stored procedure from a JSP.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>33. Can we override _jspService() method in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, JSP specification does not allow overriding of <code><b>_jspService</b></code> method in JSP. We can override other methods like 
<code><b>jspInit()</b></code> and <code><b>jspDestroy()</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>34. What is a directive in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
JSP directive is a mechanism to pass message to JSP container. JSP directive does not produce an output to the page. But it communicates with 
JSP container.<br/><br/> E.g. <code><b>&lt;%@include ..%&gt;</b></code> directive is used for telling JSP container to include the content of 
another file during translation of JSP.<br/><br/> There can be zero or more attributes in a directive to pass additional information to JSP 
container.<br/><br/> Some of the important directives in JSP are: page, include and taglib.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>35. How will you implement Session tracking in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use different mechanisms to implement Session tracking JSP. Some these mechanisms are as follows : 
<ol>
<li><b>Cookies :</b> We can use cookie to set session information and pass it to web client. In subsequent requests we can use the information in cookie to 
track session.</li>
<li><b>Hidden Form Field :</b> We can send session id in a hiddenfield in HTML form. By using this we can track session.</li>
<li><b>Session object :</b> We can use the built in session object to track session in JSP.</li>
<li><b>URL Rewriting :</b> We can also add session id at the end of a URL.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>36. How do you debug code in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In simplest form we can write logger statements or <code><b>System.out.println()</b></code> statements to write messages to log files. When we call a JSP, 
the log messages get written to logs. With useful information getting logged we can easily debug the code.<br/><br/> Another option in debugging is to 
link JSP container with an IDE. Once we link IDE debugger to JSP Engine, we can use standard operations of debugging like break point, step through etc.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>37. How will you implement error page in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To implement an error-handling page in JSP, we first create a JSP with error page handling information. In most of the cases we gracefully handle error 
by giving a user-friendly message like "Sorry! There is system error. Please try again by refreshing page."<br/><br/> 
In this error page, we show user-friendly message to user, but we also log important information like stack trace to our application log file.<br/><br/> 
We have to add parameter <code><b>isErrorPage = true</b></code> in page directive of this page. This tells to JSP container that this is our error page.<br/><br/> 
<code><b>&lt;%@page isErrorPage="true" %&gt;</b></code><br/><br/> 
Now we can use this error page in other JSP where we want to handle error. In case of an error or exception, these JSP will directit to error Page.<br/><br/> 
<code><b>&lt;% page errorPage="ErrorPage.jsp" %&gt;</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>38. How will you send XML data from a JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In general, JSP is used to pass HTML data to web browser. If we want to send data in XML format, we can easily do it by setting 
<code><b>contentType="text/xml"</b></code> in page directive.<br/><br/> 
E.g. <code><b>&lt;%@page contentType=”text/xml” %&gt;</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>39. What happens when we request for a JSP page from web browser?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When a user calls JSP page from web browser, the request first comes to web server. Web server checks for .jsp extension of pageand passes the request 
to JSP container like Tomcat.<br/><br/> The JSP container checks whether it has precompiled JSP class or not. If this is the first time this JSP is called, 
then JSP container will translate JSP into a servlet and compiles it.<br/><br/> After compiling, JSP code if loaded in memory and JSP container will call 
<code><b>jspInit()</b></code> method and <code><b>_jspService()</b></code> methods.<br/><br/> The <code><b>_jspService()</b></code> method will create 
the output that will be sent by JSP container to client browser.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>40. How will you implement AutoRefresh of page in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use <code><b>setIntHeader()</b></code> method to set the refresh frequency with which we want to auto-refresh a JSP page.<br/><br/> 
We can send key "Refresh" with the time in seconds for auto refresh of the JSP page.<br/><br/> 
E.g. <code><b>response.setIntHeader("Refresh",10)</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>41. What are the important status codes in HTTP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Every HTTP request comes back with a status code from the server. The important status codes in HTTP are as follows : 
<ol>
<li><b>200 :</b> It means the request is successful.</li>
<li><b>400 :</b> It means the request was bad.</li>
<li><b>401 :</b> It means request was not authorized.</li>
<li><b>404 :</b> It means the resource requested was not found.</li>
<li><b>503 :</b> It means the service is not available.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>42. What is the meaning of Accept attribute in HTTP header?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In HTTP header, Accept attribute is used to specify the MIME types that a HTTP client or browser can handle. MIME type is the identifier for 
specifying the type of file/data that we are planning to pass over the internet.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>43. What is the difference between Expression and Scriptlet in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use Expression in a JSP to return a value and display it at a specific location. It is generally used for dynamically print information like - 
time, counter etc in a HTML code.<br/><br/> Scriptlet is for writing Java code in a JSP. We can define variable, methods etc in a Scriptlet. 
A Scriptlet can handle much more complex code and can be also reused.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>44. How will you delete a Cookie in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use following options to delete a Cookie in JSP : 
<ol>
<li><b>setMaxAge() :</b> we can set the maximum age of a cookie. After this time period, Cookie will expire and will be deleted.</li>
<li><b>Header :</b> We can also set the expiry time in header of response. Respone.setHeader(). This will also expire the cookie after specified time period.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>45. How will you use a Cookie in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use a Cookie in JSP by performing following steps :<br/><br/> 
First we create a Cookie object. We set the name and value of the cookie to be created.<br/><br/> 
We set the expiry time of the Cookie by setting the maximum age. We can use setMaxAge() method for this.<br/><br/> 
Finally, we can send the cookie in a HTTP Response by sending it in HTTP header. In this way cookie goes to client browser and gets stored there 
till the maximum age is not achieved.<br/><br/> 
Once a Cookie is set in the client browser, we can call <code><b>getCookies()</b></code> method to get the list of all the cookies set in Client. 
We iterate through the list of all the cookies and get the value of the cookie that was set in earlier request.<br/><br/> 
In this way we can use Cookie to set some information at client side and retrieve its value.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>46. What is the main difference between a Session and Cookie in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Session is always stored at the Server side. In JSP, session is abuilt-in object in JSP container.<br/><br/> 
A Cookie is always stored at the client side.<br/><br/> 
We can use both the methods for Session tracking. But Cookie method needs permission from user for storing cookie at the client location.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>47. How will you prevent creation of session in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can simply set the session attribute as false in page directive to prevent creation of session object.<br/><br/> 
E.g. <code><b>&lt;% @page session="false" %&gt;</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>48. What is an output comment in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can write output in JSP in such a way that it becomes a comment in HTML code. This comment will not be visible in the web browser. But when we view 
page source to see HTML, we can see output comment.<br/><br/> 
An HTML comment is of following format :<br/><br/> 
<code><b>&lt;!-- comment --&gt;</b></code><br/><br/> 
If we output comment in above format, it will be visible to client.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>49. How will you prevent caching of HTML output by web browser in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use set the header in response object for Cache-Control to specify no caching.<br/><br/> 
Sample code is as follows :<br/><br/> 
<pre><code class="language-html hljs xml">response.setHeader("Cache-Control", "no-store");
response.setDateHeader("Expires","0");</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>50. How will you redirect request to another page in browser in JSP code?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use sendRedirect() method in JSP to redirect the request toanother location or page.<br/><br/> 
In this case the request will not come back to server. It will redirect in the browser itself.<br/><br/> 
Sample code is as follows :<br/><br/> 
<code><b>&lt;% response.sendRedirect(URL); %&gt;</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>51. What is the difference between sendRedirect and forward in a JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Both forward and sendRedirect are mechanisms of sending a client to another page. The main difference between these two are as follows : 
<ol>
<li>In forward, the processing takes place at server side. In case of <code><b>sendRedirect()</b></code> the processing takes place the client side.</li>
<li>In forward, the request is transferred to another resource within same server. In case of <code><b>sendRedirect</b></code> the request can be 
transferred to resource on some other server.</li>
<li>In forward only one request call is consumed. In case of sendRedirect two request response calls are created and consumed.</li>
<li>The forward is declared in <code><b>RequestDispatcher</b></code> interface. Whereas <code><b>sendRedirect</b></code> is declared in 
<code><b>HttpServletResponse</b></code> object.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>52. What is the use of config implicit object in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JSP, config object is of type ServletConfig. This object is created by Servlet Container for each JSP page. It is used for setting initialization 
parameters for a specific JSP page.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>53. What is the difference between init-param and context-param?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can specify both init-param and context-param in web.xml file.<br/><br/> We use init-param to specify the parameters that are specific to a 
servlet or jsp. This information is confined to the scope of that JSP.<br/><br/> We use context-param to specify the parameters for overall application 
scope. This information does not change easily. It canbe used by all the JSP/Servlet in that Container.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>54. What is the purpose of RequestDispatcher?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use RequestDispatcher interface to forward requests to other resources like HTML, JSP etc.<br/><br/> It can also be used to include the content of 
another page in a JSP.<br/><br/> It has two methods : <code><b>forward</b></code> and <code><b>include</b></code>. We have to first get the 
<code><b>RequestDispatcher</b></code> object from the container and then we can call include or forward method on this object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>55. How can be read data from a Form in a JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There is a built-in request object in a JSP that provides methods to read Form data. Some of the methods are as follows : 
<ol>
<li><b>getParameterNames() :</b> This method returns the list of allthe parameters in the Form.</li>
<li><b>getParameter() :</b> We call this method to get the value ofparameter set in the Form. It returns null if the parameter is not found.</li>
<li><b>getParameterValues() :</b> If a Parameter is mentioned multiple times in a Form, we use request.getParameterValues() method to get all the values. 
This method returns an array of String values.</li>
<li><b>getParameterMap() :</b> This method returns the map of all the Parameters in Form.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>56. What is a filter in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can define filters in JSP to intercept requests from a client or to change response from a server.<br/><br/> 
Filter is a Java class that is defined in the deployment descriptor of web.xml of an application. The JSP container reads filter from web.xml and 
applies a filter as per the URL pattern associated with the filter.<br/><br/> 
JSP Engine loads all the filters in when we start the server.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>57. How can you upload a large file in JSP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To upload a file by JSP we can use <code><b>&lt;input type="file"&gt;</b></code> in the Form data being passed from HTML.<br/><br/> 
If the file is very large in size, we can set <code><b>enctype = multipart/form-data</b></code>.<br/><br/> 
We have to use POST method in the Form to send a file.<br/><br/> Once the request is received, we can implement the logic to read mulitpart data in 
<code><b>doPost()</b></code> method of JSP. There are methods in JSP framework to read large files via this method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>58. In which scenario, Container initializes multiple JSP/Servlet objects?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To initialize multiple JSP objects, we have to specify same Servlet object multiple times in web.xml.<br/><br/> This indicates to JSP container to 
initialize separate JSP/Servlet object for each element. Each of the Servlet instance will have itsown ServletConfig object and parameters.
<!-- Answer ::: END -->
</div>
</div>
