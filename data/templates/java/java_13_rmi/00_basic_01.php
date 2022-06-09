<div><b>1. What is Java Remote Method Invocation (RMI)?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Java Remote Method Invocation (Java RMI) is a Java API that performs the object-oriented equivalent of remote procedure calls (RPC), with support for 
direct transfer of serialized Java classes and distributed garbage collection. Remote Method Invocation (RMI) can also be seen as the process of activating 
a method on a remotely running object. RMI offers location transparency because a user feels that a method is executed on a locally running object.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What is the basic principle of RMI architecture?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The RMI architecture is based on a very important principle which states that the definition of the behavior and the implementation of that behavior, are 
separate concepts. RMI allows the code that defines the behavior and the code that implements the behavior to remain separate and to run on separate JVMs.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What are the layers of RMI Architecture?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The RMI architecture consists of the following layers:<br/><br/>
<ul>
<li><b>Stub and Skeleton layer:</b><br/><br/> This layer lies just beneath the view of the developer. This layer is responsible for intercepting 
method calls made by the client to the interface and redirect these calls to a remote RMI Service.</li>
<li><b>Remote Reference Layer:</b><br/><br/> The second layer of the RMI architecture deals with the interpretation of references made from 
the client to the server’s remote objects. This layer interprets and manages references made from clients to the remote service 
objects. The connection is a one-to-one (unicast) link.</li>
<li><b>Transport layer:</b><br/><br/> This layer is responsible for connecting the two JVM participating in the service. This layer is based on 
TCP/IP connections between machines in a network. It provides basic connectivity, as well as some firewall penetration
strategies.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is the role of Remote Interface in RMI?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Remote interface serves to identify interfaces whose methods may be invoked from a non-local virtual machine. Any object 
that is a remote object must directly or indirectly implement this interface. A class that implements a remote interface should 
declare the remote interfaces being implemented, define the constructor for each remote object and provide an implementation 
for each remote method in all remote interfaces.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What is the role of the java.rmi.Naming Class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>java.rmi.Naming</b></code> class provides methods for storing and obtaining references to remote objects in the remote object registry. 
Each method of the Naming class takes as one of its arguments a name that is a String in URL format.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What is meant by binding in RMI?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Binding is the process of associating or registering a name for a remote object, which can be used at a later time, in order to look 
up that remote object. A remote object can be associated with a name using the bind or rebind methods of the Naming class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What is the difference between using bind() and rebind() methods of Naming Class in Java?
</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The bind method bind is responsible for binding the specified name to a remote object, while the rebind method is responsible 
for rebinding the specified name to a new remote object. In case a binding exists for that name, the binding is replaced.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What are the steps involved to make work a RMI program?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The following steps must be involved in order for a RMI program to work properly:
<ul>
<li>Compilation of all source files.</li>
<li>Generatation of the stubs using rmic.</li>
<li>Start the rmiregistry.</li>
<li>Start the RMIServer.</li>
<li>Run the client program.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is the role of stub in RMI?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A stub for a remote object acts as a client’s local representative or proxy for the remote object. The caller invokes a method on 
the local stub, which is responsible for executing the method on the remote object. When a stub’s method is invoked, it undergoes 
the following steps:
<ul>
<li>It initiates a connection to the remote JVM containing the remote object.</li>
<li>It marshals the parameters to the remote JVM.</li>
<li>It waits for the result of the method invocation and execution.</li>
<li>It unmarshals the return value or an exception if the method has not been successfully executed.</li>
<li>It returns the value to the caller.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is Distributed Garbage Collection (DGC)? And how does it work?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Remote Method Invocation (RMI) uses Distributed Garbage Collection (DGC) for automatic garbage collection. 
Since RMI involves remote object references across JVM’s, garbage collection can be quite difficult. DGC uses a reference counting algorithm to provide 
automatic memory management for remote objects.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What is the purpose of using RMISecurityManager in RMI?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
RMISecurityManager provides a security manager that can be used by RMI applications, which use downloaded code. The class 
loader of RMI will not download any classes from remote locations, if the security manager has not been set.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. Explain Marshalling and demarshalling.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When an application wants to pass its memory objects across a network to another host or persist it to storage, the in-memory 
representation must be converted to a suitable format. This process is called <code><b>marshalling</b></code> and the revert operation is called 
<code><b>demarshalling</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Explain Serialization and Deserialization.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Java provides a mechanism, called object serialization where an object can be represented as a sequence of bytes and includes 
the object’s data, as well as information about the object’s type, and the types of data stored in the object. Thus, serialization can 
be seen as a way of flattening objects, in order to be stored on disk, and later, read back and reconstituted. Deserialisation is the 
reverse process of converting an object from its flattened state to a live object.
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is serialization in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Serialization is the process of converting an object in to bytes, so that it can be transmitted over the 
network,or stored in a flat file and can be recreated later. Serialized object is an object represented as 
sequence of bytes that includes objects data, object type, and the types of data stored in the object.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What is the main purpose of serialization in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The main uses of serialization are :
<ol>
<li><b>Persistence :</b><br/><br/>
We can write data to a file or database and can be used later by deserializing it.</li>
<li><b>Communication :</b><br/><br/>
To pass an object over network by making remote procedure call.</li>
<li><b>Copying :</b><br/><br/>
We can create duplicates of original object by using byte array.</li>
<li>To distribute objects across different JVMs.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>16. What are alternatives to java serialization?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Alternatives to java serialization :</b><br/><br/>
<ol>
<li>XML based data transfer.</li>
<li>JSON based data transfer.</li>
</ol>
<b>XML based data transfer :</b><br/><br/> We can use JIBX or JAXB where we can marshall our object’s data to xml and
transfer data and then unmarshall and convert to object.<br/><br/>
<b>JSON based transfer :</b><br/><br/> We can use json to transfer data.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. Explain about serializable interface in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To implement serialization in java there is an interface defined in <code><b>java.io</b></code> package called <code><b>serializable</b></code>
interface.<br/><br/> 
<code><b>Java.io.Serializable</b></code> interface is an marker interface which doesnot contain any any methods. A
class implements <code><b>Serializable</b></code> lets the JVM know that the instances of the class can be serialized.<br/><br/>
<b>Syntax:</b>
<pre><code class="language-html hljs xml">public interface Serializable {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>18. How to make object serializable in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Our class must implement <code><b>serializable</b></code> interface. If our object contains other objects those class must also implement <code><b>serializable</b></code> interface.</li>
<li>We use <code><b>ObjectOutputStream</b></code> which extends <code><b>OutputStream</b></code> used to write objects to a stream.</li>
<li>We use <code><b>ObjectInputStream</b></code> which extends <code><b>InputStream</b></code> used to read objects from stream.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. What is serial version UID and its importance in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Serial version unique identifier is a 64 bit long value. This 64 bit long value is a hash code of the class
name,super interfaces and member. Suid is a unique id no two classes will have same <code><b>sUid</b></code>. Whenever an
object is serialized suid value will also serialize with it.<br/><br/>
When an object is read using <code><b>ObjectInputStream</b></code>, the suid is also read. If the loaded class <code><b>sUid</b></code> does not
match with suid read from object stream, <code><b>readObject</b></code> throws an <code><b>InvalidClassException</b></code>.
<!-- Answer ::: END -->
</div>
</div>


<div><b>20. What happens if we don’t define serial version UID?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we don’t define serial version UID JVM will create one <code><b>sUid</b></code> for us. But it is recommended to have <code><b>sUid</b></code>
rather than JVM creating because at run time JVM has to compute the hashcode of all the properties of
class. This process makes serialization low. We can’t serialize static fields one exception to this is <code><b>sUid</b></code>
where <code><b>sUid</b></code> gets serialized along with the object.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">private static final long serialVersionUID = -5885568094444284875L;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. Can we serialize static variables in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can’t serialize static variables in java. The reason being static variable are class variables that belongs to a class not to object, but 
serialization mechanism saves only the object state not the class state.
<!-- Answer ::: END -->
</div>
</div>


<div><b>22. When we serialize an object does the serialization mechanism saves its references too?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When we serialize an object even the object it refers must implement serializable then the reference objects also get serialized. If we don’t make 
reference objects serializable then we get <code><b>NotSerializableException</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. If we don’t want some of the fields not to serialize How to do that?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we don’t want to serialize some fields during serialization we declare those variables as transient. During deserialization transient variables are 
initialized with default values for primitives and null for object references.
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