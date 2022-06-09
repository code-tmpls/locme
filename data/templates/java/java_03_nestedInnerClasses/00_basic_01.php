<div><b>1. What are nested classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Class declared with in another class is defined as nested class.<br/><br/>
There are two types of nested classes in java.
<ol>
<li>Static nested class</li>
<li>Non static nested class</li>
</ol>
A static nested class has static keyword declared before class definition.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What are inner classes or non static nested classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Nested classes without any static keyword declaration in class definition are defined as non static nested
classes. Generally non static nested classes are referred as inner classes.<br/><br/>
There are three types of inner classes in java :
<ol>
<li>Local inner class</li>
<li>Member inner class</li>
<li>Anonymous inner class</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. Why to use nested classes in java / What is the purpose of nested class in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li><b>Grouping of related classes :</b><br/><br/>
Classes which are not reusable can be defined as inner class instead of creating inner class.
For example : We have a submit button upon click of submit button we need to execute some code. This
code is related only to that class and cannot be reused for other class . Instead of creating a new class we
can create inner class.</li>
<li><b>To increase encapsulation :</b><br/><br/>
Inner class can access private members of outer class.so by creating getter and setter methods for
private variables , outside world can access these variables. But by creating inner class private variables
can be accesed only by inner class.</li>
<li><b>Code readable and maintainable :</b><br/><br/>
Rather than creating a new class we can create inner class so that it is easy to maintain.</li>
<li><b>Hiding implementation :</b><br/><br/>
Inner class helps us to hide implementation of class.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. Explain about static nested classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When a static class is defined inside a enclosing class we define that as nested class. Static nested classes
are not inner classes. Static nested classes can be instantiated without instance of outer class.<br/><br/>
A static nested doesnot have access to instance variables and non static methods of outer class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. How to instantiate static nested classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can access static members and static methods of outer class without creating any instance of outer class.
<b>Syntax :</b>
<pre><code class="language-html hljs xml">OuterclassName.StaticNestedClassName ref=new OuterclassName.StaticNestedClassName();</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. Explain about method local inner classes or local inner classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Nested classes defined inside a method are local inner classes. We can create objects of local inner class 
only inside method where class is defined. A local inner classes exist only when method is invoked and 
goes out of scope when method returns.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. Explain about features of local inner class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Local inner class does not have any access specifier.</li>
<li>We cannot use access modifiers static for local inner class. But we can use abstract and final for local inner class.</li>
<li>We cannot declare static members inside local inner classes.</li>
<li>We can create objects of local inner class only inside method where class is defined.</li>
<li>Method local inner classes can only access final variables declared inside a method.</li>
<li>Method local inner classes can be defined inside loops(for,while) and blocks such as if etc.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. Explain about anonymous inner classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Inner class defined without any class name is called anonymous inner class. Inner class is declared and
instantiated using new keyword.The main purpose of anonymous inner classes in java are to provide
interface implementation. We use anonymous classes when we need only one instance for a class. We can
use all members of enclosing class and final local variables.<br/><br/>
When we compile anonymous inner classes compiler creates two files :<br/><br/>
<ol>
<li>EnclosingName.class</li>
<li>EnclsoingName$1.class</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. Explain restrictions for using anonymous inner classes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>An anonymous inner class cannot have any constructor because there is no name for class.</li>
<li>An anonymous inner class cannot define static methods, fields or classes.</li>
<li>We cannot define an interface anonymously.</li>
<li>Anonymous inner class can be instantiated only once.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. Is this valid in java ? can we instantiate interface in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">Runnable r = new Runnable() {
 @Override
 public void run() {
  // ...
 }
};</code></pre>
Runnable is an interface.If we see the above code it looks like we are instantiating Runnable interface. But
we are not instantiating interface we are instantiating anonymous inner class which is implementation of
Runnable interface.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. Explain about member inner classes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Non static class defined with in enclosing class are called member inner class. A member inner class is
defined at member level of class. A member inner class can access the members of outer class including
private members.<br/><br/>
<b>Features of member inner classes :</b><br/><br/>
<ol>
<li>A member inner class can be declared abstract or final.</li>
<li>A member inner class can extend class or implement interface.</li>
<li>An inner class cannot declare static fields or methods.</li>
<li>A member inner class can be declared with public, private, protected or default access.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. How to instantiate member inner class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">OuterClassName.InnerclassName inner=new OuterClassReference.new InnerClassName();</code></pre>
We cannot instantiate inner class without outer class reference
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. How to do encapsulation in Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Make instance variables private.<br/><br/>
Define getter and setter methods to access instance variables.
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What are Reference variables in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Variables which are used to access objects in java are called reference variables.<br/><br/>
<b>Example :</b> 
<pre><code class="language-html hljs xml">Employee emp = new Employee();</code></pre>
In the above example, <code><b>emp</b></code> is reference variable.<br/><br/>
Reference variable can be of only one type.<br/><br/>
A Reference variable can point to any number of objects. But if a Reference variable is declared final it
can’t point to other objects.<br/><br/>
A Reference variable can be declared either to a class type or interface type. If a Reference variable is
declared with interface type it points to the class that implements the interface.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. Will the compiler creates a default constructor if I have a parameterized constructor in the class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No compiler won’t create default constructor if there is parameterized constructor in the class. For example, if I have a class with no constructors, 
then compiler will create default constructor.<br/><br/>
<b>For Example :</b>
<pre><code class="language-html hljs xml">public classCar { 
 // ...
}</code></pre>
In the above Car class there are no constructors so compiler creates a default constructor.
<pre><code class="language-html hljs xml">public classCar {
 Car(String name) {
  // ...
 }
}</code></pre>
In this example compiler won’t create any default constructor because already there is one constructor in
the Car class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. Can we have a method name same as class name in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes we can have method name same as class name it won’t throw any compilation error but it shows a warning message that method name is same as class name.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. Can we override constructors in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Only methods can be overridden in java. Constructors can’t be inherited in java. So there is no point of overriding constructors in java
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. Can Static methods access instance variables in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No.Instance variables can’t be accessed in static methods. When we try to access instance variable in
static method we get compilation error. The error is as follows:
<div class="list-group"><div class="list-group-item">Cannot make a static reference to the non static field name</div></div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. How do we access static members in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Instance variables and instance methods can be accessed using reference variable . But to access static variables or static methods we use Class name in java.
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. Can we override static methods in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Static methods can’t be overridden. If we have a static method in superclass and subclass with same signature then we don’t say that as overriding.
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. Difference between Object and Reference?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Reference and object are both different. Objects are instances of class that resides in heap memory. Objects does’nt have any name so to access objects 
we use references. There is no alternative way to access objects except through references.<br/><br/>
Object cannot be assigned to other object and object cannot be passed as an argument to a method. Reference is a variable which is used to access contents 
of an object. A reference can be assigned to other reference, passed to a method.
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. Objects or references which of them gets garbage collected?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Objects get garbage collected not its references.
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. How many times finalize method will be invoked ? who invokes finalize() method in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>finalize()</b></code> method will be called only once on object. Before the object gets garbage collected garbage
collector will call <code><b>finalize()</b></code> method to free the resources. Finalize() method will be called only when object
is eligible for garbage collection.
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. Can we able to pass objects as an arguments in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Only references can be passed to a method not an object. We cannot pass the objects to a method. The largest amount of data that can passed as parameters 
are long or double.
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. Explain wrapper classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Converting primitives to objects can be done with the help of wrapper classes. Prior to java 1.5 we use 
Wrapper classes to convert primitives to objects. From java 1.5 we have a new feature autoboxing which 
is used to convert automatically primitives to objects but in wrapper classes programmer has to take care 
of converting primitives to objects.<br/><br/>
Wrapper classes are immutable in java. Once a value is assigned to it we cannot change the value.
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. Explain different types of wrapper classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
For every primitive in java we have corresponding wrapper class. Here are list of wrapper classes available in java.
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Primtive</th><th>Wrapper Class</th></tr></thead>
<tbody>
 <tr><td>boolean</td><td>Boolean</td></tr>
 <tr><td>int</td><td>Integer</td></tr>
 <tr><td>float</td><td>Float</td></tr>
 <tr><td>char</td><td>Character</td></tr>
 <tr><td>byte</td><td>Byte</td></tr>
 <tr><td>long</td><td>Long</td></tr>
 <tr><td>short</td><td>Short</td></tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>


<div><b>27. Explain about transient variables in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To save the state of an object to persistent state we use serialization. If we want a field or variable in the
object not to be saved, then we declare that variable or field as transient.<br/><br/>
<b>Example :</b> 
<pre><code class="language-html hljs xml">public Class Car implements serializable {
 transient int carnumber;
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>28. Can we serialize static variables in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Static variables cannot be serialized in java.
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. What is type conversion in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Assigning a value of one type to variable of other type is called type conversion.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">int a =10;
long b=a;</code></pre>
There are two types of conversion in java:
<ol>
<li>Widening conversion</li>
<li>Narrowing conversion</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. Explain about Automatic type conversion in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Java automatic type conversion is done if the following conditions are met :
<ol>
<li>When two types are compatible<br/>
<i>Example :</i> <code><b>int</b></code>, <code><b>float</b></code><br/>
int can be assigned directly to float variable.</li>
<li>Destination type is larger than source type.<br/>
<i>Example :</i> <code><b>int</b></code>, <code><b>long</b></code></li>
</ol>
Int can be assigned directly to long. Automatic type conversion takes place if int is assigned to long
because long is larger datatype than int.<br/><br/>
Widening Conversion comes under Automatic type conversion.
<!-- Answer ::: END -->
</div>
</div>

<div><b>31. Explain about Narrowing conversion in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When destination type is smaller than source type we use narrowing conversion mechanism in java.<br/>
Narrowing conversion has to be done manually if destination type is smaller than source type. To do
narrowing conversion we use cast. Cast is nothing but explicit type conversion.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">long a;
byte b;
b=(byte)a;</code></pre>
Note : casting to be done only on valid types otherwise classcastexception will be thrown.
<!-- Answer ::: END -->
</div>
</div>

<div><b>32. Explain the importance of import keyword in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Import keyword is used to import single class or package in to our source file.import statement is declared after package decalaration. We use wild 
character (*) to import package.<br/><br/>
<b>Note :</b> After compilation the compiled code does not contain import statement it will be replaced with fully qualified class names.
<!-- Answer ::: END -->
</div>
</div>

<div><b>33. Explain naming conventions for packages?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Sun defined standard naming conventions for packages.
<ol>
<li>Package names should be in small letters.</li>
<li>Package name starts with reverse company domain name (excluding www) followed by department and project name and then the name of package.<br/>
<b>Example :</b> com.google.sales.employees</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>34. What is classpath?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The path where our <code><b>.class</b></code> files are saved is referred as classpath. JVM searches for <code><b>.class</b></code> files by using the
class path specified. Class path is specified by using <code><b>CLASSPATH</b></code> environment variable. <code><b>CLASSPATH</b></code> environment 
variable can contain more than one value. <code><b>CLASSPATH</b></code> variable containing more than one value is separated by semicolon.<br/><br/>
<b>Example to set class path from command prompt :</b>
<pre><code class="language-html hljs xml">set CLASSPATH= C:Program FilesJavajdk1.6.0_25bin;</code></pre>
only parent directories need to be added to classpath.Java compiler will look for appropriate packages and classes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>35. What is jar?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Jar</b></code> stands for java archive file. Jars are created by using <code><b>Jar.exe</b></code> tool. Jar files contains <code><b>.class</b></code> files, 
other resources used in our application and manifest file. Manifest file contains class name with main method.jar contains compressed .class files.<br/><br/>
Jvm finds these .class files without uncompressing this jar.
<!-- Answer ::: END -->
</div>
</div>

<div><b>36. What is the scope or life time of instance variables?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When object is instantiated using new operator variables get allocated in the memory.instance variables remain in memory till the instance gets 
garbage collected.
<!-- Answer ::: END -->
</div>
</div>

<div><b>37. Explain the scope or life time of class variables or static variables?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Static variables do not belong to instances of the class. We can access static fields even before instantiating the class. Static variable remain in 
memory till the life time of application.
<!-- Answer ::: END -->
</div>
</div>

<div><b>38. Explain scope or life time of local variables in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Local variables are variables which are defined inside a method. When the method is created local variables gets created in stack memory and this 
variable gets deleted from memory once the method execution is done.
<!-- Answer ::: END -->
</div>
</div>

<div><b>39. Explain about static imports in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
From Java 5.0 we can import static variables in to source file. Importing static member to source file is 
referred as static import. The advantage of static import is we can access static variables without class or 
interface name.<br/><br/>
<b>Syntax :</b>
<pre><code class="language-html hljs xml">import static packagename.classname.staticvariablename;</code></pre>
<b>Example :</b>
<pre><code class="language-html hljs xml">import static com.abc.Employee.eno;</code></pre>
To import all static variables from a class in to our source file we use *.
<pre><code class="language-html hljs xml">import static com.abc.Employee.*</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>40. Can we define static methods inside interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can’t declare static methods inside interface. Only instance methods are permitted in interfaces.only public and abstract modifiers are permitted for 
interface methods. If we try to declare static methods inside interface we get compilation error saying<br/><br/>
"Illegal modifier for the interface method <code><b>Classname.methodName();</b></code> only public & abstract are permitted".
<!-- Answer ::: END -->
</div>
</div>

<div><b>41. Define interface in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Interface is collection of abstract methods and constants. An interface is also defined as pure or 100 percent abstract class.Interfaces are implicitly 
abstract whether we define abstract access modifier or not. A class implementing interface overrides all the abstract methods defined in interface.<br/><br/>
<code><b>implements</b></code> keyword is used to implement interface.
<!-- Answer ::: END -->
</div>
</div>

<div><b>42. What is the purpose of interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Interface is a contract. Interface acts like a communication between two objects. When we are defining interface we are defining a contract what our class 
should do but not how it does. An interface does’nt define what a method does. The power of interface lies when different classes that are unrelated can 
implement interface. Interfaces are designed to support dynamic method resolution at run time.
<!-- Answer ::: END -->
</div>
</div>

<div><b>43. Explain features of interfaces in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>All the methods defined in interfaces are implicitly abstract even though abstract modifier is not declared.</li>
<li>All the methods in interface are public whether they are declared as public or not.</li>
<li>variables declared inside interface are by default public, static and final.</li>
<li>Interfaces cannot be instantiated.</li>
<li>we cannot declare static methods inside interface.</li>
<li>‘implements’ keyword is used to implement interface.</li>
<li>Unlike class, interface can extend any number of interfaces.</li>
<li>We can define a class inside interface and the class acts like inner class to interface.</li>
<li>An interface can extend a class and implement an interface.</li>
<li>Multiple inheritance in java is achieved through interfaces.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>44. Explain enumeration in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Enumeration is a new feature from Java 5.0. Enumeration is set of named constants . We use enum keyword to declare enumeration. The values defined in 
enumeration are enum constants.Each enum constant declared inside a enum class is by default <code><b>public</b></code>, <code><b>static</b></code> and 
<code><b>final</b></code>.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">package javaexamples;
public enum Days {
 SUN,MON,TUE,WED,THU,FRI,SAT;
}</code></pre>
<code><b>SUN</b></code>,<code><b>MON</b></code>,<code><b>TUE</b></code>,<code><b>WED</b></code>,<code><b>THU</b></code>,<code><b>FRI</b></code>, 
<code><b>SAT</b></code> are enum constants.
<!-- Answer ::: END -->
</div>
</div>

<div><b>45. Explain restrictions on using enum?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Enums cannot extend any other class or enum.</li>
<li>We cannot instantiate an enum.</li>
<li>We can declare fields and methods in enum class. But these fields and methods should follow the enum constants otherwise we get compilation error.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>46. Explain about field hiding in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If superclass and subclass have same fields subclass cannot override superclass fields. In this case subclass fields hides the super class fields. If we 
want to use super class variables in subclass we use super keyword to access super class variables.
<!-- Answer ::: END -->
</div>
</div>

<div><b>47. Explain about Varargs in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Beginning with Java 5 has a new feature Varargs which allows methods to have variable number of arguments. It simplifies creation of methods when there 
are more number of arguments. Earlier to java 5 <code><b>Varargs</b></code> are handled by creating method with array of arguments.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">public static void main(String[] args) {
 // ...
}</code></pre>
A variable length argument is specified using ellispses with type in signature. main method with var args
is written as follows:
<pre><code class="language-html hljs xml">public static void main(String … args) {
 // ...	
}</code></pre>
If no arguments are passes we get array with size <code><b>0</b></code>. There is no need for null check if no arguments are passed.
<!-- Answer ::: END -->
</div>
</div>

<div><b>48. Explain where variables are created in memory?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When we declare variables variables are created in stack. So when the variable is out of scope those variables get garbage collected.
<!-- Answer ::: END -->
</div>
</div>

<div><b>49. Can we use Switch statement with Strings?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Prior to Java 7 we can use only int values and enum constants in Switch .Starting with Java 7 we can use 
strings in Switch statement. If we use strings in switch statement prior to Java 7 we will get compile time 
error “only int and enum constants are permitted”.
<!-- Answer ::: END -->
</div>
</div>

<div><b>50. In java how do we copy objects?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In Java we cannot copy two objects but by assigning one reference to other we can copy objects. For example if we have a reference <code><b>r1</b></code> 
that point to object .so when we declare <code><b>r2 = r1</b></code>, we are assigning reference <code><b>r1</b></code> to <code><b>r2</b></code> so now 
<code><b>r2</b></code> points to the same object where <code><b>r1</b></code> points. Any changes done by one reference on an object will reflect to other.
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


