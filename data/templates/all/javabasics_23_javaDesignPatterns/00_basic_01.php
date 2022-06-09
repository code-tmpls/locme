
<div class="appQuestion"><b>59. When will you use Strategy Design Pattern in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Strategy pattern is very useful for implementing a family of algorithms. It is a behavioral design pattern.<br/><br/> 
With Strategy pattern we can select the algorithm at runtime. We can use it to select the sorting strategy for data. We can use it to save files in 
different formats like- .txt, .csv, .jpg etc.<br/><br/> In Strategy pattern we create an abstraction, which is an interface through which clients 
interact with our system. Behind the abstraction we create multiple implementation of same interface with different algorithms.<br/><br/> 
For a client, at runtime we can vary the algorithm based on the type of request we have received.<br/><br/> 
So we use Strategy pattern to hide the algorithm implementation details from client.<br/><br/> 
In Java <code><b>Collections.sort()</b></code> method uses strategy design pattern.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>60. What is Observer design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Observer design pattern, there is a Subject that maintains the list of Observers that are waiting for any update on the Subject. Once there is an 
update in Subject it notifies all the observers for the change.<br/><br/> E.g. In real life, students are waiting for the result of their test. Here 
students are the observers and test is the subject. Once the result of test is known, testing organization notifies all the students about their 
result.<br/><br/> The most popular use of Observer pattern is in Model View Controller (MVC) architectural pattern.<br/><br/> 
Main issue with Observer pattern is that it can cause memory leaks. The subject holds a strong reference to observers. If observers are not de-registered 
in time, it can lead to memory leak.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>61. What are the examples of Observer design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Observer design pattern isused. Some of these are as follows : 
<ol>
<li><code><b>java.util.Observer</b></code>, <code><b>java.util.Observable</b></code></li>
<li><code><b>javax.servlet.http.HttpSessionAttributeListener</b></code></li>
<li><code><b>javax.servlet.http.HttpSessionBindingListener</b></code></li>
<li>All implementations of <code><b>java.util.EventListener</b></code>, and also in Swing packages</li>
<li><code><b>javax.faces.event.PhaseListener</b></code></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>62. How Strategy design pattern is different from State design pattern in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
State design pattern is a behavioral design pattern that is use for defining the state machine for an object. Each state of an object is defined in a 
child class of State class. When different actions are taken on an Object, it can change its state.<br/><br/> 
Strategy pattern is also a behavioral pattern, but it is mainly used for defining multiple algorithms. With same action of a client, the algorithm to be 
used can change.<br/><br/> Some people consider State pattern similar to Strategy pattern, since an Object changes its Strategy with different method 
invocations. But the main difference is that in State pattern internal state of an Object is one of the determining factors for selecting the Strategy 
for change of state.<br/><br/> Where as in Strategy pattern, client can pass some externalparameter in input during method invocation that determines 
the strategy to be used at run time.<br/><br/> Therefore State pattern is based on the Object’s internal state, where as Strategy pattern is based on 
Client’s invocation.<br/><br/> State pattern is very useful in increasing the maintainability of the code in a large code-base.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>63. Can you explain Decorator design pattern with an example in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some people call Decorator pattern as Wrapper pattern as well. It is used to add the behavior to an object, without changing the behavior of other 
objects of same class.<br/><br/> One of the very good uses of Decorator pattern is in <code><b>java.io</b></code> package. We can have a 
<code><b>FileInputStream</b></code> to handle a File. To add Buffering behavior we can decorate <code><b>FileInputStream</b></code> with 
<code><b>BufferedInputStream</b></code>. To add the gzip behavior BufferedInputStream we can decorate it with GzipInputStream. To add serialization 
behavior to GzipInputStream, we can decorate it with <code><b>ObjectInputStream</b></code>.<br/><br/>
<b>Example :</b><br/><br/> 
Open a FileInputStream :
<pre><code class="language-html hljs xml">FileInputStream fis = new FileInputStream("/myfile.gz");</code></pre>
Add buffering :
<pre><code class="language-html hljs xml">BufferedInputStream bis = new BufferedInputStream(fis);</code></pre>
Add Gzip :
<pre><code class="language-html hljs xml">GzipInputStream gis = new GzipInputStream(bis);</code></pre>
Add Serialization :
<pre><code class="language-html hljs xml">ObjectInputStream ois = new ObjectInputStream(gis);</code></pre>
So with each step we have decorated the FileInputStream with additional behavior.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>64. What is a good scenario for using Composite design Pattern in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the good scenarios where Composite design pattern can be used are as follows : 
<ul>
<li><b>Tree Structure :</b> The most common use of Composite design pattern is Tree structure. If you want to represent data in a Tree data structure, 
Composite pattern can be used.<br/>
E.g. In an Organization, to a Manager has Employees. But Manager is also an Employee. If we start from CEO level, there is one bigtree for the whole 
organization structure. Under that big tree there are many sub-trees. This can be easily represented with Composite design pattern.<br/><br/></li>
<li><b>Recursion :</b> Another use of Composite design pattern is Recursion. If we have a Recursion based algorithm, we need data to be passed to algorithm 
in a data structure that treats individual objects and compositions at each level of recursion uniformly.<br/>
E.g. To implement a recursive Polynomial Solving algorithm, we can use Composite design pattern to store the intermediate results.<br/><br/></li>
<li><b>Graphics :</b> Another good use of Composite design pattern is in Graphics. We can group shapes inside a composite and make higher-level groups of 
smaller groups of shapes to complete the graphics to be displayed on screen.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>65. Have you used Singleton design pattern in your Java project?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. Singleton is one of the most popular design patterns inenterprise level Java applications. Almost in every project we see some implementation of 
Singleton.<br/><br/>  With Singleton pattern we can be sure that there is only one instance of a class at any time in the application.<br/><br/> 
This helps in storing properties that have to be used in the application in a unique location.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>66. What are the main uses of Singleton design pattern in Java project?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the main uses of Singleton design pattern in Java are as follows : 
<ol>
<li><b>Runtime :</b> In JDK, java.lang.Runtime is a singleton-based class. Thereis only one instance of Runtime in an application. This is the only 
class that interfaces with the environment / machine in which Java process is running.</li>
<li><b>Enum :</b> In Java, enum construct is also based on Singleton pattern. Enum values can be accessed globally in same way by all classes.</li>
<li><b>Properties :</b> In an application it makes sense to keep only one copy ofthe properties that all classes can access. This can be achieved by making 
properties class Singleton so that every class gets same copy of properties.</li>
<li><b>Spring :</b> In Spring framework, all the beans are by default Singleton per container. So there is only one instance of bean in a Spring IoC 
container. But Spring also provides options to make the scope of a bean prototype in a container.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>67. Why java.lang.Runtime is a Singleton in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, java.lang.Runtime is implemented on Singleton design pattern.<br/><br/> Runtime is the class that acts as an interface with the environment 
in which Java process is running. Runtime contains methods that can interact with the environment.<br/><br/> Like - totalmemory() method gives the 
total memory in <code><b>JVM.maxMemory()</b></code> method gives the maximum memory that JVM can use.<br/><br/> There is an exit() method to exit the 
Java process. We do not want multiple objects in JVM to have exit() method. Similarly there is gc() method that can run the Garbage Collector. With 
only one copy of gc() method, we can ensure that no other object can run the Garbage Collector when one instance of GC is already running.<br/><br/> 
Due to all these reasons there is only one copy of Runtime in Java. To ensure single copy of Runtime, it is implemented as a Singleton in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>68. What is the way to implement a thread-safe Singleton design pattern in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java there are many options to implement a thread-safe Singleton pattern. Some of these are as follows :<br/><br/>
<ol>
<li><b>Double Checked Locking :</b> This is the most popular methodto implement Singleton in Java. It is based on Lazy Initialization. In this we first check 
the criteria for locking before acquiring a lock to create an object. In Java we use it with volatile keyword.<br/>
<b>Sample code :</b>
<pre><code class="language-html hljs xml">class DoubleCheckSingleton { 
  private volatile HelloSingleton helloSingleton; // Use Volatile 
  public HelloSingleton getHelloSingleton() { 
    HelloSingleton result = helloSingleton;
	if (result == null) { 
	  synchronized(this) { // Synchronize for thread safety 
	   result = helloSingleton;
	   if (result == null) { 
	    result = new HelloSingleton();
		helloSingleton = result; 
	   } 
	  } 
    }
	return result;
  }
}</code></pre><br/><br/></li>
<li><b>Bill Pugh Singleton :</b> We can also use the method by BillPugh for implementing Singleton in Java. In this we use anInner Static class to create the 
Singleton instance.<br/>
<b>Sample code:</b>
<pre><code class="language-html hljs xml">public class SingletonBillPugh { // Inner class that holds instance 
 private static class InnerSingleton { 
   private static final SingletonBillPugh INSTANCE = newSingletonBillPugh(); 
 } 
 // Private constructor
 private SingletonBillPugh(){ } 
 
 public static SingletonBillPugh getInstance(){ 
  return InnerSingleton.INSTANCE; 
 }
}</code></pre>
When first time SingletonBillPugh is loaded in memory, InnerSingleton is not loaded. Only when getInstance() method is called, InnerSingleton class 
is loaded and an Instance is created.<br/><br/></li>
<li><b>Enum :</b> We can also use Java enum to create thread-safeimplementation. Java enum values are accessible globally so these can be used as a Singleton.<br/>
<b>Sample Code:</b> 
<pre><code class="language-html hljs xml">public enum SingletonEnum { 
 INSTANCE;
 public static void doImplementation(){ 
 
 }
}</code></pre></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>69. What are the examples of Singleton design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Singleton design pattern is used. Some of these are as follows :<br/><br/> 
<ol>
<li><b>java.lang.Runtime.getRuntime() :</b> This method givesRuntime class that has only one instance in a JVM.</li>
<li><b>java.lang.System.getSecurityManager() :</b> This methodreturns a SecurityManager for the current platform.</li>
<li><b>java.awt.Desktop.getDesktop()</b></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>70. What is Template Method design pattern in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
It is a behavioral design pattern. We can use it to create an outline for an algorithm or a complex operation. We first create the skeleton of a program. 
Then we delegate the steps of the operation to subclasses. The subclasses can redefine the inner implementation of each step.<br/><br/> 
E.g. While designing a Game in Java, we can implement it as an algorithm with Template Method pattern. Each step in the game canbe deferred to subclasses 
responsible for handling that step.<br/><br/> Let say we implement Monopoly game in Java. We can create methods like <code><b>initializeGame()</b></code>, 
<code><b>makeMove()</b></code>, <code><b>endGame()</b></code> etc. Each of these methods can be handled in subclasses in an independent manner.<br/><br/> 
We can use same algorithm for Chess game with same set of abstract methods. The subclass for Chess game can provide the concrete implementation of methods 
like <code><b>initializeGame()</b></code>, <code><b>makeMove()</b></code>, <code><b>endGame()</b></code> etc.<br/><br/> Template Method pattern is very 
useful in providing customizable class to users. We can create the core class with a high level implementation. And our users can customize our core class 
in their custom subclasses.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>71. What are the examples of Template method design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Template method design pattern is used. Some of these are as follows :<br/><br/>
<ol> 
<li>In Java Abstract Collection classes like <code><b>java.util.AbstractList</b></code>, <code><b>java.util.AbstractSet</b></code> and 
<code><b>java.util.AbstractMap</b></code> implement a template for their corresponding Collection.</li>
<li><b>javax.servlet.http.HttpServlet :</b> In the HttpServlet class all the <code><b>doGet()</b></code>, <code><b>doPost()</b></code> etc. methods send 
a <code><b>HTTP 405 "Method Not Allowed"</b></code> error to the response. This error response is like a Template that can be further customized for each 
of these methods.</li>
<li>In <code><b>java.io</b></code> package there are Stream and Writer classes like <code><b>java.io.InputStream</b></code>, 
<code><b>java.io.OutputStream</b></code>, <code><b>java.io.Reader</b></code> and <code><b>java.io.Writer</b></code> that provide 
non-abstract methods. These methods are implementation of Template method design pattern.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>72. Can you tell some examples of Factory Method design pattern implementation in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Factory Method pattern is a creational design pattern. A Factory isan object that is used to create more objects.<br/><br/> In general, a Factory object 
has methods that can be used to create atype of objects. Some people call it Factory Method design pattern as well.<br/><br/> 
Some of the examples of Factory Method pattern in JDK are : 
<ul>
<li>java.lang.Class.forName()</li>
<li>java.net.URLStreamHandlerFactory.createURLStreamHan</li>
<li>java.util.Calendar.getInstance()</li>
<li>java.util.ResourceBundle.getBundle()</li>
<li>java.text.NumberFormat.getInstance()</li>
<li>java.nio.charset.Charset.forName()</li>
<li>java.util.EnumSet.of()</li>
<li>javax.xml.bind.JAXBContext.createMarshaller()</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>73. What is the benefit we get by using static factory method to createobject?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By using Static Factory Method we encapsulate the creation process of an object. We can use <code><b>new()</b></code> to create an Object from its 
constructor. Instead we use static method of a Factory to create theobject. One main advantage of using Factory is that Factory can choose the correct 
implementation at runtime and create the right object. The caller of method can specify the desired behavior.<br/><br/> 
E.g. If we have a ShapeFactory with <code><b>createShape(String type)</b></code> method. Client can call <code><b>ShapeFactory.createShape("Circle")</b></code> 
to get a circular shape. <code><b>ShapeFactory.createShape("Square")</b></code> will return square shape. In this way, ShapeFactory knows how to create 
different shapes based on the input by caller.<br/><br/> Another use of Factory is in providing access to limited resources to a large set of users.<br/><br/> 
E.g. In ConnectionPool, we can limit the total number of connections that can be created as well as we can hide the implementation details of 
creating connection. Here ConnectionPool is the factory. Clients call static method <code><b>ConnectionPool.getConnection()</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>74. What are the examples of Builder design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Builder design pattern is used. Some of these are as follows : 
<ol>
<li><b>java.lang.StringBuilder.append() :</b> StringBuilder is basedon Builder pattern.</li>
<li><b>java.nio.IntBuffer.put() :</b> Invocation of put() method return IntBuffer. Also there are many variants of this method to build the IntBuffer.</li>
<li><b>javax.swing.GroupLayout.Group.addComponent() :</b> We canuse addComponent() method to build a UI that can contain multiple levels of components.</li>
<li><b>java.lang.Appendable</b></li>
<li><b>java.lang.StringBuffer.append() :</b> StringBuffer is similar to StringBuilder and it is also based on Builder design pattern.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>75. What are the examples of Abstract Factory design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Abstract Factory design pattern is used. Some of these are as follows : 
<ul>
<li>javax.xml.xpath.XPathFactory.newInstance()</li>
<li>javax.xml.parsers.DocumentBuilderFactory.newInstance()</li>
<li>javax.xml.transform.TransformerFactory.newInstance()</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>76. What are the examples of Decorator design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Decorator design pattern is used. Some of these are as follows : 
<ol>
<li>In <code><b>java.io</b></code> package many classes use Decorator pattern. Subclasses of <code><b>java.io.InputStream</b></code>, 
<code><b>OutputStream</b></code>, <code><b>Reader</b></code> and <code><b>Writer</b></code> have a constructor that can take the instance of same type 
and decorate it with additional behavior.</li>
<li>In <code><b>java.util.Collections</b></code>, there are methods like <code><b>checkedCollection()</b></code>, <code><b>checkedList()</b></code>, 
<code><b>checkedMap()</b></code>, <code><b>synchronizedList()</b></code>, <code><b>synchronizedMap()</b></code>, <code><b>synchronizedSet()</b></code>, 
<code><b>unmodifiableSet()</b></code>, <code><b>unmodifiableMap()</b></code> and <code><b>unmodifiableList()</b></code> methods that can decorate an 
object and return the same type.</li>
<li>In <code><b>javax.servlet</b></code> package, there are classes like <code><b>javax.servlet.http.HttpServletRequestWrapper</b></code> and 
<code><b>HttpServletResponseWrapper</b></code> that are based on Decorator design pattern.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>77. What are the examples of Proxy design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Proxy design pattern provides an extra level of indirection for providing access to another object. It can also protect a real objectfrom any extra level 
of complexity.<br/><br/> In JDK there are many places where Proxy design pattern is used. Some of these are as follows :
<ul>
<li>java.lang.reflect.Proxy</li>
<li>java.rmi.*</li>
<li>javax.inject.Inject</li>
<li>javax.ejb.EJB</li>
<li>javax.persistence.PersistenceContext</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>78. What are the examples of Chain of Responsibility design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Chain of Responsibility design pattern is used. Some of these are as follows : 
<ol>
<li><b>java.util.logging.Logger.log() :</b> In this case Logger class provides multiple variations of <code><b>log()</b></code> method that can take the 
responsibility of logging from client in different scenarios. The client has to just call the appropriate <code><b>log()</b></code> method and Logger will 
take care of these commands.</b></li>
<li><b>javax.servlet.Filter.doFilter() :</b> In the Filter class, the Container calls the doFilter method when a request/response pair is passed through the 
chain. With filter the request reaches to the appropriate resource at the end of the chain. We can pass FilterChain in <code><b>doFilter()</b></code> method 
to allow the Filter to pass on the request and response to the next level in the chain.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>79. What are the main uses of Command design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Command design pattern is a behavioral design pattern. We use it to encapsulate all the information required to trigger an event. Some of the main 
uses of Command pattern are :
<ol>
<li><b>Graphic User Interface (GUI) :</b> In GUI and menu items, we use command pattern. By clicking a button we can read the current information of GUI and 
take an action.</li>
<li><b>Macro Recording :</b> If each of user action is implemented as a separate Command, we can record all the user actions in a Macro as a series of Commands. 
We can use this series to implement the "Playback" feature. In this way, Macro can keep on doing same set of actions with each replay.</li>
<li><b>Multi-step Undo :</b> When each step is recorded as a Command, we can use it to implement Undo feature in which each step can by undo. It is used in 
text editors like MS-Word.</li>
<li><b>Networking :</b> We can also send a complete Command overthe network to a remote machine where all the actions encapsulated within a Command are 
executed.</li>
<li><b>Progress Bar :</b> We can implement an installation routine asa series of Commands. Each Command provides the estimate time. When we execute the 
installation routine, with each command we can display the progress bar.</li>
<li><b>Wizard :</b> In a wizard flow we can implement steps as Commands. Each step may have complex task that is just implemented within one command.</li>
<li><b>Transactions :</b> In a transactional behavior code there are multiple tasks/updates. When all the tasks are done then only transaction is committed. 
Else we have to rollback the transaction. In such a scenario each step is implemented as separate Command.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>80. What are the examples of Command design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Command design pattern is used. Some of these are as follows : 
<ul>
<li>All implementations of <code><b>java.lang.Runnable</b></code></li>
<li>All implementations of <code><b>javax.swing.Action</b></code></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>81. What are the examples of Interpreter design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Interpreter design pattern is used to evaluate sentences in a language.<br/> E.g. In SQL we can use it to evaluate a query by evaluating each 
keyword like <code><b>SELECT</b></code>, <code><b>FROM</b></code>, <code><b>WHERE</b></code> clause.<br/><br/> In an Interpreter implementation 
there is a class for each keyword/symbol. A sentence is just a composite of these keywords. But the sentence is represented by Syntax tree that 
can be interpreted.<br/><br/> In JDK there are many places where Interpreter design pattern is used. Some of these are as follows : 
<ul>
<li><code><b>java.util.Pattern</b></code></li>
<li><code><b>java.text.Normalizer</b></code></li>
<li>Subclasses of <code><b>java.text.Format</b></code> : <code><b>DateFormat</b></code>, <code><b>MessageFormat</b></code>, 
<code><b>NumberFormat</b></code></li>
<li>Subclasses of <code><b>javax.el.ELResolver</b></code> : <code><b>ArrayELResolver</b></code>, <code><b>MapELResolver</b></code>, 
<code><b>CompositeELResolver</b></code> etc.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>82. What are the examples of Mediator design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By using Mediator pattern we can decouple the multiple objects that interact with each other. With a Mediator object we can create many-to-many 
relationships in multiple objects.<br/><br/> In JDK there are many places where Mediator design pattern is used. Some of these are as follows :<br/><br/> 
<ol>
<li><b>java.util.Timer :</b> schedule() methods in Timer class act as Mediator between the clients and the TimerTask to be scheduled.</li>
<li><b>java.util.concurrent.Executor.execute() :</b> The <code><b>execute()</b></code> method in an Executor class acts as a Mediator to execute the 
different tasks.</li>
<li><b>java.util.concurrent.ExecutorService</b></li>
<li><b>java.lang.reflect.Method.invoke() :</b> In Method class of reflection package, <code><b>invoke()</b></code> method acts as a Mediator.</li>
<li><b>java.util.concurrent.ScheduledExecutorService :</b> Here also <code><b>schedule()</b></code> method and its variants are Mediator pattern 
implementations.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>83. What are the examples of Strategy design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Strategy design pattern is used.Some of these are as follows : 
<ol>
<li><b>java.util.Comparator :</b> In a Comparator we can use <code><b>compare()</b></code> method to change the strategy used by 
<code><b>Collections.sort()</b></code> method.</li>
<li><b>javax.servlet.http.HttpServlet :</b> In a HttpServlet class <code><b>service()</b></code> and <code><b>doGet()</b></code>, 
<code><b>doPost()</b></code> etc. methods take <code><b>HttpServletRequest</b></code> and <code><b>HttpServletResponse</b></code> and the 
implementor of Servlet processes it based on the strategy it selects.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>84. What are the examples of Visitor design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By using Visitor design pattern we can add new virtual methods to existing classes without modifying their core structure.<br/><br/> 
In JDK there are many places where Visitor design pattern is used. Some of these are as follows : 
<ol>
<li>In <code><b>javax.lang.model.element</b></code> package, <code><b>AnnotationValue</b></code> and <code><b>AnnotationValueVisitor</b></code> Classes</li>
<li>In <code><b>java.nio.file</b></code> package, <code><b>FileVisitor</b></code> and <code><b>SimpleFileVisitor</b></code> Classes</li>
<li>In <code><b>javax.lang.model.type</b></code> package, <code><b>TypeMirror</b></code> and <code><b>TypeVisitor</b></code> Classes</li>
<li>In <code><b>javax.lang.model.element</b></code> package, <code><b>Element</b></code> and <code><b>ElementVisitor</b></code> Classes</li>
<li>In <code><b>javax.faces.component.visit</b></code> package, <code><b>VisitContext</b></code> and <code><b>VisitCallback</b></code> Classes</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>85. How Decorator design pattern is different from Proxy pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Decorator and Proxy design pattern are : 
<ul>
<li>Decorator provides an enhanced interface after decoratingit with additional features. Proxy provides same interface since it is just acting as a proxy 
to another object.</li>
<li>Decorator is a type of Composite pattern with only one component. But each decorator can add additional features. Since it is one component in Decorator, 
there is no object aggregation.</li>
<li>Proxy can also provide performance improvement by lazy loading. There is nothing like this available in Decorator.</li>
<li>Decorator follows recursive composition. Proxy is just one object to another object access.</li>
<li>Decorator is mostly used for building a variety of objects.Proxy is mainly used for access to another object.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>86. What are the different scenarios to use Setter and Constructor based injection in Dependency Injection(DI) design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use Setter injection to provide optional dependencies of an object. Constructor injection is used to provide mandatorydependency of an object.<br/><br/> 
In Spring IoC, Dependency Injection is heavily used. There we have to differentiate between the scenario suitable for Setter based and Constructor based 
dependency injection.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>87. What are the different scenarios for using Proxy design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Proxy design pattern can be used in a wide variety of scenario in Java. Some of these are as follows : 
<ol>
<li><b>Virtual Proxy :</b> This is a virtual object that acts as a proxy for objects that are very expensive to create. It is used in Lazy Loading. 
When client makes the first request, the real object is created.</li>
<li><b>Remote Proxy :</b> This is a local object that provides access to a remote object. It is generally used in Remote Method Invocation (RMI) and 
Remote Procedure Call (RPC). It isalso known as a Stub.</li>
<li><b>Protective Proxy :</b> This is an object that control the access to a Master object. It can authenticate and authorize the client for accessing the 
Master object. If client has right permissions, it allows client to access the main object.</li>
<li><b>Smart Proxy :</b> It is an object that can add additional information to the main object. It can track the number ofother objects accessing the main 
object. It can track thedifferent clients from where request is coming. It can even deny access to an object if the number of requests is greater than a 
threshold.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>88. What is the main difference between Adapter and Proxy design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Adapter pattern provides a different interface to an object. But the Proxy always provides same interface to the object.<br/><br/> 
Adapter is like providing an interface suitable to client’s use. But Proxy is same interface that has additional feature or check.<br/><br/> 
E.g. In electrical appliances we use Adapter to convert from one type of socket to another type of socket. In case of proxy, we have a plug with 
built-in surge protector. The interface for plug and the original device remains same.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>89. When will you use Adapter design pattern in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If we have two classes with incompatible interfaces, we use Adapter pattern to make it work. We create an Adapter object that can adapt the interface 
of one class to another class.<br/><br/> It is generally used for working with third party libraries. We createan Adapter class between third party code 
and our class. In case of any change in third party code we have to just change the Adapter code. Rest of our code can remain same and just take to Adapter.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>90. What are the examples of Adapter design pattern in JDK?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In JDK there are many places where Adapter design pattern is used. Some of these are as follows : 
<ul>
<li><b>java.util.Arrays.asList() :</b> This method can adapt an Arrayto work as a List.</li>
<li><b>java.util.Collections.list() :</b> This method can adapt any collection to provide List behavior.</li>
<li><b>java.util.Collections.enumeration() :</b> This method returns an enumeration over the collection.</li>
<li><b>java.io.InputStreamReader(InputStream) :</b> This method adapts a Stream to Reader class.</li>
<li><b>java.io.OutputStreamWriter(OutputStream) :</b> This methodadapts an OutputStream to Writer class.</li>
<li><b>javax.xml.bind.annotation.adapters.XmlAdapter.marshal()</b></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>91. What is the difference between Factory and Abstract Factory design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
With Factory design pattern we can create concrete products of a type that Factory can manufacture.<br/> 
E.g. If it is CarFactory, we canproduce, Ford, Toyota, Honda, Maserati etc.<br/><br/> 
With Abstract Factory design pattern we create a concreteimplementation of a Factory.<br/> 
E.g. DeviceFactory can be Abstract and it can give us GoogleDeviceFactory, AppleDeviceFactory etc.<br/><br/> 
With AppleDeviceFactory we will get products like- iPhone, iPad,Mac etc.<br/> 
With GoogleDeviceFactory we will get products like-Nexus phone, Google Nexus tablet, Google ChromeBook etc.<br/><br/> 
So it is a subtle difference between Factory and Abstract Factory design pattern. One way to remember is that within Abstract Factorypattern, 
Factory pattern is already implemented.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>92. What is Open/closed design principle in Software engineering?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Open/closed design principle states "software entities (classes,modules, functions, etc.) should be open for extension, but closed for modification".<br/><br/>  
Open/closed principle term was originated by Bertr and Meyer in his book Object Oriented Software Construction.<br/><br/>   As per this principle, if a 
module is available for extension then it is considered open. If a module is available for use by other modules then it is considered closed.<br/><br/>  
Further Robert C. Martin has mentioned it as O in SOLID principles of Object Oriented design.<br/><br/> It is used in State and Strategy design patterns. 
Context class is closed for modification. But new functionality can be added by writing new strategy code.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>93. What is SOLID design principle?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
SOLID word in SOLID design principle is an acronym for : 
<ul>
<li><b>S: Single Responsibility.</b> A Class should have a single responsibility.</li>
<li><b>O: Open-closed.</b> Software entities should be open for extension but closed for modification.</li>
<li><b>L: Liskov Substitution.</b> Objects in a program should be replaceable by subclasses of same type without anyadverse impact.</li>
<li><b>I: Interface Segregation.</b> Multiple client specific interfacesare preferable over single generic interface.</li>
<li><b>D: Dependency Inversion.</b> Program should depend onabstract entities. It should not depend on concrete implementation of an interface.</li>
</ul>
This principle was mentioned by Robert C. Martin. These are considered five basic principles of Object Oriented design.<br/><br/> 
If we follow these principles, then we can create a stable program that is easy to maintain and can be extended over time.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>94. What is Builder design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Builder design pattern is a creational design pattern. We can use Builder pattern to create complex objects with multiple options.<br/><br/> 
E.g. when we have to create a Meal in a restaurant we can use Builder pattern. We can keep adding options like- Starter, Drink, Main Course, and 
Dessert etc. to create complete meal.<br/><br/> When a user selects other options of Starter, Drink Main Course, Dessert another type of meal is 
created.<br/><br/> Main feature of Builder pattern is step-by-step building of a complex object with multiple options.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>95. What are the different categories of Design Patterns used in Object Oriented Design?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Object Oriented design mainly three categories of design patterns are used. These categories are : 
<ul>
<li><b>Creational Design Patterns :</b>
<ol>
<li>Builder</li>
<li>Factory Method</li>
<li>Abstract Factory</li>
<li>Object Pool</li>
<li>Singleton</li>
<li>Prototype</li>
</ol></li>
<li><b>Structural Design Patterns :</b>
<ol>
<li>Adapter</li>
<li>Bridge</li>
<li>Façade</li>
<li>Decorator</li>
<li>Composite</li>
<li>Flyweight</li>
<li>Proxy</li>
</ol></li>
<li><b>Behavioral Design Patterns :</b>
<ol>
<li>Command</li>
<li>Iterator</li>
<li>Chain of Responsibility</li>
<li>Observer</li>
<li>State</li>
<li>Strategy</li>
<li>Mediator</li>
<li>Interpreter</li>
</ol></li>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>96. What is the design pattern suitable to access elements of aCollection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use Iterator design pattern to access the individual elements of a Collection. In case of an ordered collection we can get Iterator that returns 
the elements in an order.<br/><br/> In Java there are many implementation of Iterator in Collections package. We have iterators like- 
<code><b>Spliterator</b></code>, <code><b>ListIterator</b></code> etc. that implement Iterator pattern.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>97. How can we implement Producer Consumer design pattern in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use BlockingQueue in Java to implement Producer Consumer design pattern.<br/><br/> It is a concurrent design pattern.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>98. What design pattern is suitable to add new features to an existing object?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use Decorator design pattern to add new features to an existing object. With a Decorator we work on same object and return the same object 
with more features. But the structure of the object remains same since all the decorated versions of object implement same interface.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>99. Which design pattern can be used when to decouple abstraction from the implementation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use Bridge design pattern to detach the implementation from the abstraction.<br/><br/> Bridge is mainly used for separation of concern in design. 
We can create an implementation and store it in the interface, which is an abstraction. Where as specific implementation of other features can be done 
in concrete classes that implement the interface.<br/><br/> Often Bridge design pattern is implemented by using Adapter pattern.<br/><br/> 
E.g. we have Shape interface. We want to make Square and Circle shapes. But further we want to make RedSquare, BlackSquare shapes and GreenCircle, 
WhiteCircle shapes. In this case ratherthan creating one hierarchy of all the shapes, we separate the Color concern from Shape hierarchy.<br/><br/> 
So we create two hierarchies. One is Shape to Square and Shape to Circle hierarchy. Another one is Color to Red, Black, Green, White hierarchy. 
In this way we can create multiple types of shapes with multiple colors with Bridge design pattern.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>100. Which is the design pattern used in Android applications?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Android applications predominantly use Model View Presenter design pattern.
<ol>
<li><b>Model :</b> This is the domain model of the Android application. It contains the business logic and business rules.</li>
<li><b>View :</b> These are the UI components in your application.These are part of the view. Also any events on UIcomponents are part of view module.</li>
<li><b>Presenter :</b> This is the bridge between Model and View tocontrol the communication. Presenter can query the modeland return data to view to 
update it.</li>
<li>E.g. If we have a Model with large news article data, and view needs only headline, then presenter can query thedata from model and only give headline 
to view. In this way view remains very light in this design pattern.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>101. How can we prevent users from creating more than one instance of singleton object by using clone() method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
First we should not implement the Cloneable interface by the object that is a Singleton.<br/><br/> 
Second, if we have to implement Cloneable interface then we canthrow exception in clone() method.<br/><br/> 
This will ensure that no one can use <code><b>clone()</b></code> method or <code><b>Cloneableinterface</b></code> to create more than one instance 
of Singleton object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>102. What is the use of Interceptor design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Interceptor design pattern is used for intercepting a request. Primaryuse of this pattern is in Security policy implementation.<br/><br/> 
We can use this pattern to intercept the requests by a client to a resource. At the interception we can check for authentication and authorization of 
client for the resource being accessed.<br/><br/> In Java it is used in <code><b>javax.servlet.Filter</b>,/code> interface.<br/><br/> 
This pattern is also used in Spring framework in <code><b>HandlerInterceptor</b></code> and <code><b>MVCInterceptor</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>103. What are the Architectural patterns that you have used?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Architectural patterns are used to define the architecture of a Software system. Some of the patterns are as follows : 
<ol>
<li><b>MVC : Model View Controller.</b> This pattern is extensivelyused in the architecture of Spring framework.</li>
<li><b>Publish-subscribe :</b> This pattern is the basis of messaging architecture. In this case messages are published to a Topic. And subscribers 
subscribe to the topic of their interests. Once the message is published to a topic inwhich a Subscriber has an interest, the message is consumed by 
the relevant subscriber.</li>
<li><b>Service Locator :</b> This design pattern is used in a service like JNDI to locate the available services. It uses as central registry to 
maintain the list of services.</li>
<li><b>n-Tier :</b> This is a generic design pattern to divide the architecture in multiple tiers.<br/> E.g. there is 3-tier architecture with 
Presentation layer, Application layer and Data access layer. It is also called multi-layer design pattern.</li>
<li><b>Data Access Object (DAO) :</b> This pattern is used in providing access to database objects. The underlying principle is that we can change 
the underlying database system, without changing the business logic. Since business logic talks to DAO object, there is no impact of changing Database 
system on business logic.</li>
<li><b>Inversion of Control (IoC) :</b> This is the core of Dependency Injection in Spring framework. We use this design pattern to increase the 
modularity of an application. We keep the objects loosely coupled with Dependency Injection</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>104. What are the popular uses of Façade design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the popular uses of Façade design pattern are as follows : 
<ol>
<li>A Façade provides convenient methods for common tasks that are used more often.</li>
<li>A Façade can make the software library more readable.</li>
<li>A Façade can reduce the external dependencies on the working of inner code.</li>
<li>A Façade can act as a single well-designed API by wrapping a collection of poorly designed APIs.</li>
<li>A Façade pattern can be used when a System is very complex and difficult to use. It can simplify the usage of complex system.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>105. What is the difference between Builder design pattern and Factory design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Both Factory and Builder patterns are creational design patterns. They are similar in nature but Factory pattern is a simplified generic version of 
Builder pattern.<br/><br/> We use Factory pattern to create different concrete subtypes of an Object. The client of a Factory may not know the exact 
subtype. E.g.If we call createDrink() of a Factory, we may get Tea or Coffee drinks.<br/><br/> We can also use Builder pattern to create different 
concrete subtypes of an object. But in the Builder pattern the composition ofthe object can be more complex. E.g. If we call createDrink() for Builder, 
we can get Cappuccino Coffee with Vanilla Cream and Sugar, or we can get Latte Coffee with Splenda and milk cream.<br/><br/> So a Builder can support 
creation of a large number of variants ofan object. But a Factory can create a broader range of knownsubtypes of an object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>106. What is Memento design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Memento design pattern is used to implement rollback feature in an object. In a Memento pattern there are three objects : 
<ul>
<li><b>Originator :</b> This is the object that has an internal state.</li>
<li><b>Caretaker :</b> This is the object that can change the state of Originator. But it wants to have control over rolling back the change.</li>
<li><b>Memento :</b> This is the object that Caretaker gets from Originator, before making and change. If Caretaker wants to Rollback the change it 
gives Memento back to Originator. Originator can use Memento to restore its ownstate to the original state.</li>
</ul>
E.g. One good use of memento is in online Forms. If wewant to show to user a form pre-populated with some data, we keep this copy in memento. Now user 
can update the form. But at any time when user wants to reset the form, we use memento to make the form in its original pre-populated state. If user 
wants to just save the form we save the form and update the memento. Now onwards any new changes to the form can be rolled back to the last saved 
Memento object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>107. What is an AntiPattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An AntiPattern is opposite of a Design Pattern. It is a common practice in an organization that is used to deal with a recurring problem but it has 
more bad consequences than good ones.<br/><br/> AntiPattern can be found in an Organization, Architecture or Software Engineering.<br/><br/> 
Some of the AntiPatterns in Software Engineering are : 
<ol>
<li><b>Gold Plating :</b> Keep on adding extra things on a working solution even though these extra things do not add any additional value.</li>
<li><b>Spaghetti Code :</b> Program that are written in a very complex way and are hard to understand due to misuse of data structures.</li>
<li><b>Coding By Exception :</b> Adding new code just to handle exception cases and corner case scenarios.</li>
<li><b>Copy Paste Programming :</b> Just copying the same code multiple times rather than writing generic code that can be parameterized.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>108. What is a Data Access Object(DAO) design pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
DAO design pattern is used in the data persistent layer of a Javaapplication. It mainly uses OOPS principle of Encapsulation.<br/><br/> 
By using DAO pattern it makes the application loosely coupled andless dependent on actual database.<br/><br/> 
We can even implement some in-memory database like H2 with DAO to handle the unit-testing.<br/><br/> 
In short, DAO hides the underlying database implementation from the class that accesses the data via DAO object.<br/><br/> 
Recently we can combine DAO with Spring framework to inject any DB implementation.
<!-- Answer ::: END -->
</div>
</div>
