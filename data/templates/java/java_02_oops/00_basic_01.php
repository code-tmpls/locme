<div><b>1. What is meant by the term OOPs? What is the need of it?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
OOPs refers to Object-Oriented Programming. There are many reasons why OOPs is mostly preferred, but the most important among them are: 
<ul>
<li>OOPs helps users to understand the software easily, although they don’t know the actual implementation.</li>
<li>With OOPs, the readability, understandability, and maintainability of the code increase multifold.</li>
<li>Even very big software can be easily written and managed easily using OOPs.</li>
</ul>
<code><b>Java</b></code>, <code><b>C++</b></code>, <code><b>Javascript</b></code>, <code><b>Python</b></code>, <code><b>PHP</b></code> are 
the programming languages that use and follow the Object-Oriented Programming paradigm.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What are some other programming paradigms other than OOPs?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Programming paradigms refers to the method of classification of programming languages based on their features. 
There are mainly two types of Programming Paradigms:
<ul>
<li>Imperative Programming Paradigm</li>
<li>Declarative Programming Paradigm</li>
</ul>
<br/>
<b>1. Imperative Programming Paradigm</b><br/><br/>
It focuses on HOW to execute program logic and defines control flow as statements that change a program state. This can be further classified as:<br/><br/>
<ol type="a">
<li><b>Procedural Programming Paradigm:</b><br/><br/> Procedural programming specifies the steps a program must take to reach the desired state, usually read in 
order from top to bottom.<br/><br/></li>
<li><b>Object-Oriented Programming or OOP:</b><br/><br/> Object-oriented programming (OOP) organizes programs as objects, that contain some data and have 
some behavior.<br/><br/></li>
<li><b>Parallel Programming:</b><br/><br/> Parallel programming paradigm breaks a task into subtasks and focuses on executing them simultaneously at the 
same time.<br/><br/></li>
</ol>
<b>2. Declarative Programming Paradigm:</b><br/><br/>
It focuses on WHAT to execute and defines program logic, but not a detailed control flow. Declarative paradigm can be further classified into:<br/><br/>
<ol type="a">
<li><b>Logical Programming Paradigm:</b><br/><br/> Logical programming paradigm is based on formal logic, which refers to a set of sentences expressing 
facts and rules about how to solve a problem.<br/><br/></li>
<li><b>Functional Programming Paradigm:</b><br/><br/> Functional programming is a programming paradigm where programs are constructed by applying and 
composing functions.<br/><br/></li>
<li><b>Database Programming Paradigm:</b><br/><br/> Database programming model is used to manage data and information structured as fields, records, and 
files.<br/><br/></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is meant by Structured Programming?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Structured Programming refers to the method of programming which consists of a completely structured control flow. Here structure refers to a block, 
which contains a set of rules, and has a definitive control flow, such as (if/then/else), (while and for), block structures, and subroutines.<br/><br/>
Nearly all programming paradigms include Structured programming, including the OOPs model.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What are the main features of OOPs?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
OOPs or Object Oriented Programming mainly comprises of the below four features, and make sure you don't miss any of these:
<ul>
<li>Inheritance</li>
<li>Encapsulation</li>
<li>Polymorphism</li>
<li>Data Abstraction</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What are the advantages of using OOPs?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Advantages of OOPS:</b>
<ul>
<li>OOPs is very helpful in solving very complex level of problems.</li>
<li>Highly complex programs can be created, handled, and maintained easily using object-oriented programming.</li>
<li>OOPs, promote code reuse, thereby reducing redundancy.</li>
<li>OOPs also helps to hide the unnecessary details with the help of Data Abstraction.</li>
<li>OOPs, are based on a bottom-up approach, unlike the Structural programming paradigm, which uses a top-down approach.</li>
<li>Polymorphism offers a lot of flexibility in OOPs.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What is Encapsulation?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Encapsulation can be defined in two different ways:
<ol>
<li><b>Data hiding:</b><br/> Encapsulation is the process of hiding unwanted information, such as restricting access to any member of an object.</li>
<li><b>Data binding:</b><br/> Encapsulation is the process of binding the data members and the methods together as a whole, as a class.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What is Polymorphism?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Polymorphism is composed of two words - <code><b>poly</b></code> which means <code><b>many</b></code>, and <code><b>morph</b></code> which means 
<code><b>shapes</b></code>. Therefore Polymorphism refers to something that has many shapes.<br/><br/>
In OOPs, Polymorphism refers to the process by which some code, data, method, or object behaves differently under different circumstances or contexts. 
<code><b>Compile-time polymorphism</b></code> and <code><b>Run time polymorphism</b></code> are the two types of polymorphisms in OOPs languages.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What is Compile time Polymorphism and how is it different from Runtime Polymorphism?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Compile Time Polymorphism:</b><br/><br/> <i>Compile time polymorphism</i>, also known as <code><b>Static Polymorphism</b></code>, refers to the type 
of Polymorphism that happens at compile time. What it means is that the compiler decides what shape or value has to be taken by the entity in the picture.
<pre><code class="language-java hljs xml">class CompileTimePolymorphism {
   // 1st method with name add
   public int add(int x, int y){ 
   return x+y;
   }
   // 2nd method with name add
   public int add(int x, int y, int z){
   return x+y+z;
   }
   // 3rd method with name add
   public int add(double x, int y){ 
   return (int)x+y;
   }
   // 4th method with name add
   public int add(int x, double y){ 
   return x+(int)y;
   }
   
   public static void main(String[] args){
	CompileTimePolymorphism demo=new CompileTimePolymorphism();
	// In the below statement, the Compiler looks 
	// at the argument types and decides to call method 1
	System.out.println(demo.add(2,3));
	// Similarly, in the below statement, the compiler 
	// calls method 2
	System.out.println(demo.add(2,3,4));
	// Similarly, in the below statement, the compiler 
	// calls method 4
	System.out.println(demo.add(2,3.4));
	// Similarly, in the below statement, the compiler 
	// calls method 3
	System.out.println(demo.add(2.5,3)); 
   }
}</code></pre>
In the above example, there are four versions of add methods. The first method takes two parameters while the second one takes three. For the third and 
fourth methods, there is a change of order of parameters. The compiler looks at the method signature and decides which method to invoke for a particular 
method call at compile time.<br/><br/>
<b>Runtime Polymorphism:</b><br/><br/>
Runtime polymorphism, also known as Dynamic Polymorphism, refers to the type of Polymorphism that happens at the run time. What it means is it can't be 
decided by the compiler. Therefore what shape or value has to be taken depends upon the execution. Hence the name Runtime Polymorphism.
<pre><code class="language-java hljs xml">class AnyVehicle{
   public void move(){
   System.out.println(“Any vehicle should move!!”);
   }
}
class Bike extends AnyVehicle{
   public void move(){
   System.out.println(“Bike can move too!!”);
   }
}
class Test{
   public static void main(String[] args){
   AnyVehicle vehicle = new Bike();
   // In the above statement, as you can see, the 
   // object vehicle is of type AnyVehicle
   
   // But the output of the below statement will be 
   // “Bike can move too!!”, 
   
   // because the actual implementation of object 
   // ‘vehicle’ is decided during runtime vehicle.move();
   
   vehicle = new AnyVehicle();
   
   // Now, the output of the below statement will 
   // be “Any vehicle should move!!”,
   
   vehicle.move();
   }
}</code></pre>
As the method to call is determined at runtime, as shown in the above code, this is called <i>Runtime polymorphism</i>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. How does C++ support Polymorphism?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
C++ is an Object-oriented programming language and it supports Polymorphism as well:
<ul>
<li><b>Compile Time Polymorphism:</b><br/> C++ supports compile-time polymorphism with the help of features like templates, function overloading, and default 
arguments.</li>
<li><b>Runtime Polymorphism:</b><br/> C++ supports Runtime polymorphism with the help of features like virtual functions. Virtual functions take the shape 
of the functions based on the type of object in reference and are resolved at runtime.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is meant by Inheritance?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The term <code><b>inheritance</b></code> means “receiving some quality or behavior from a parent to an offspring.” In object-oriented programming, 
inheritance is the mechanism by which an object or class (referred to as a child) is created using the definition of another object or class (referred 
to as a parent). Inheritance not only helps to keep the implementation simpler but also helps to facilitate code reuse.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What is Abstraction?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If you are a user, and you have a problem statement, you don't want to know how the components of the software work, or how it's made. You only want 
to know how the software solves your problem. Abstraction is the method of hiding unnecessary details from the necessary ones. It is one of the main 
features of OOPs.<br/>
For example, consider a car. You only need to know how to run a car, and not how the wires are connected inside it. This is obtained using 
<code><b>Abstraction</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. How much memory does a class occupy?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Classes do not consume any memory. They are just a blueprint based on which objects are created. Now when objects are created, they actually 
initialize the class members and methods and therefore consume memory.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Is it always necessary to create objects from class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No. An object is necessary to be created if the base class has non-static methods. But if the class has static methods, then objects don’t need 
to be created. You can call the class method directly in this case, using the class name.
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is a constructor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Constructors are special methods whose name is the same as the class name. The constructors serve the special purpose of initializing the objects.<br/><br/>
For example, suppose there is a class with the name “MyClass”, then when you instantiate this class, you pass the syntax:
<pre><code class="language-java hljs xml">MyClass myClassObject = new MyClass();</code></pre>
Now here, the method called after <code><b>new</b></code> keyword - <code><b>MyClass()</b></code>, is the constructor of this class. This will help to 
instantiate the member data and methods and assign them to the object myClassObject.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What is the differences between Abstraction and Encapsulation?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Abstraction and encapsulation are complementary concepts. On the one hand, abstraction focuses on the behavior of an object.
On the other hand, encapsulation focuses on the implementation of an object’s behavior. Encapsulation is usually achieved by
hiding information about the internal state of an object and thus, can be seen as a strategy used in order to provide abstraction
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. What are static blocks and static initalizers in Java ?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Static blocks or static initializers are used to initalize static fields in java. we declare static blocks when we want to intialize static fields in 
our class. Static blocks gets executed exactly once when the class is loaded. Static blocks are executed even before the constructors are executed.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. How to call one constructor from the other constructor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
With in the same class if we want to call one constructor from other we use <code><b>this()</b></code> method. Based on the
number of parameters we pass appropriate <code><b>this()</b></code> method is called.<br/><br/>
<b>Restrictions for using <code>this()</code> method :</b><br/><br/>
<ol>
<li><code><b>this()</b></code> must be the first statement in the constructor.</li>
<li>we cannot use two <code><b>this()</b></code> methods in the constructor.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. What is Method Overriding in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we have methods with same signature (same name, same signature, same return type) in super class and in subclass, then we say
<i>subclass method</i> is overridden by <i>superclass</i>.<br/><br/>
<b>When to use overriding in java:</b>
If we want same method with different behaviour in superclass and subclass then we go for overriding.<br/><br/>
When we call overridden method with subclass reference subclass method is called hiding the superclass method.
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. What is super keyword in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Variables and methods of super class can be overridden in subclass . In case of overriding , a subclass object call its own variables and methods. 
Subclass cannot access the variables and methods of superclass because the overridden variables or methods hides the methods and variables of super class.
<br/><br/>But still java provides a way to access super class members even if its members are overridden. <br/><br/>
<code><b>Super</b></code> is used to access superclass variables, methods, constructors.<br/><br/>
It can be used in two forms :
<ol>
<li>First form is for calling super class constructor.</li>
<li>Second one is to call super class variables,methods.</li>
</ol>
<code><b>Super</b></code> if present must be the first statement.
<!-- Answer ::: END -->
</div>
</div>



<div><b>20. What is Method Overloading in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A class having two or more methods with same name but with different arguments then we say that those methods are overloaded. Static polymorphism is 
achieved in java using method overloading<br/><br/>
Method overloading is used when we want the methods to perform similar tasks but with different inputs or values. When an overloaded method is invoked 
java first checks the method name, and the number of arguments ,type of arguments; based on this compiler executes this method.<br/><br/>
Compiler decides which method to call at compile time. By using overloading static polymorphism or static binding can be achieved in java.<br/><br/>
<div class="list-group">
<div class="list-group-item">
<b>Note :</b> Return type is not part of method signature. we may have methods with different return types but
return type alone is not sufficient to call a method in java.
</div>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. What is a Constructor, Constructor Overloading  and Copy-Constructor in Java.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A constructor gets invoked when a new object is created. Every class has a constructor. In case the programmer does not provide 
a constructor for a class, the Java compiler (Javac) creates a default constructor for that class. The constructor overloading is 
similar to method overloading in Java. Different constructors can be created for a single class. Each constructor must have its 
own unique parameter list. Finally, Java does support copy constructors like C++, but the difference lies in the fact that Java 
doesn’t create a default copy constructor if you don’t write your own.
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. Difference between this() and super() in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>this()</b></code> is used to access one constructor from another with in the same class while <code><b>super()</b></code> is used to
access superclass constructor. Either <code><b>this()</b></code> or <code><b>super()</b></code> exists it must be the first statement in the
constructor.
<!-- Answer ::: END -->
</div>
</div>


<div><b>23. What is the difference between Method Overloading and Method Overriding in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
<table class="table">
<thead><tr><th>Method Overloading</th><th>Method Overriding</th></tr></thead>
<tbody>
<tr>
 <td>Method Overloading occurs with in the same class.</td>
 <td>Method Overriding occurs between two classes superclass and subclass.</td>
</tr>
<tr>
 <td>Since it involves with only one class inheritance is not involved.</td>
 <td>Since method overriding occurs between superclass and subclass inheritance is involved.</td>
</tr>
<tr>
 <td>In overloading return type need not be the same.</td>
 <td>In overriding return type must be same.</td>
</tr>
<tr>
 <td>Parameters must be different when we do Overloading.</td>
 <td>Parameters must be same.</td>
</tr>
<tr>
 <td>Static polymorphism (Compile-time polymorphism) can be acheived using Method Overloading.</td>
 <td>Dynamic polymorphism (Runtime polymorphism) can be acheived using Method Overriding.</td>
</tr>
<tr>
 <td>In overloading one method can’t hide the another.</td>
 <td>In overriding subclass method hides that of the superclass method.</td>
</tr>
<tr>
 <td>Private , static and final variables can be overloaded.</td>
 <td>Private, static and final variables cannot be overridden.</td>
</tr>
<tr>
 <td>In overloading different exceptions can be thrown.</td>
 <td>We cant increase the level of checked exceptions. No restrictions for unchecked exceptions.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. Difference between abstract class and interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
<table class="table">
<thead><tr><th>Abstract Class</th><th>Interface</th></tr></thead>
<tbody>
<tr>
 <td>Interface contains only abstract methods.</td>
 <td>Abstract class can contain abstract methods, concrete methods or both.</td>
</tr>
<tr>
 <td>Access Specifiers for methods in interface must be public.</td>
 <td>Except private we can have any access specifier for methods in abstract class.</td>
</tr>
<tr>
 <td>Variables defined must be <code><b>public</b></code>, <code><b>static</b></code>, <code><b>final</B></code>.</td>
 <td>Except private variables can have any access specifiers</td>
</tr>
<tr>
 <td>Multiple Inheritance in java is implemented using interface.</td>
 <td>We cannot achieve multiple inheritance using Abstract class.</td>
</tr>
<tr>
 <td>To implement an interface we use <code><b>implements</b></code> keyword.</td>
 <td>To implement an interface we use <code><b>implements</b></code> keyword.</td>
</tr>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. What does the "static" keyword mean ? Can you override private or static method in Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The static keyword denotes that a member variable or method can be accessed, without requiring an instantiation of the class to 
which it belongs. A user cannot override static methods in Java, because method overriding is based upon dynamic binding at 
runtime and static methods are statically binded at compile time. A static method is not associated with any instance of a class 
so the concept is not applicable.
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. Can you access non static variable in static context in Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A static variable in Java belongs to its class and its value remains the same for all its instances. A static variable is initialized 
when the class is loaded by the JVM. If your code tries to access a non-static variable, without any instance, the compiler will 
complain, because those variables are not created yet and they are not associated with any instance.
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. What are the Data Types supported by Java ? What is Autoboxing and Unboxing ?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The eight primitive data types supported by the Java programming language are:
<ul>
<li>byte</li>
<li>short</li>
<li>int</li>
<li>long</li>
<li>float</li>
<li>double</li>
<li>boolean</li>
<li>char</li>
</ul>
<code><b>Autoboxing</b></code> is the automatic conversion made by the Java compiler between the primitive types and their corresponding object 
wrapper classes. For example, the compiler converts an int to an Integer, a double to a Double, and so on. If the conversion goes 
the other way, this operation is called <code><b>unboxing</b></code>.

<!-- Answer ::: END -->
</div>
</div>

<div><b>28. Does Java support multiple inheritance?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No, Java does not support multiple inheritance. Each class is able to extend only on one class, but is able to implement more than 
one interfaces.
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. What is the difference between an Interface and an Abstract class in Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Java provides and supports the creation both of abstract classes and interfaces. Both implementations share some common
characteristics, but they differ in the following features:
<ul>
<li>All methods in an interface are implicitly abstract. On the other hand, an abstract class may contain both abstract and nonabstract methods.</li>
<li>A class may implement a number of Interfaces, but can extend only one abstract class.</li>
<li>In order for a class to implement an interface, it must implement all its declared methods. However, a class may not implement
all declared methods of an abstract class. Though, in this case, the sub-class must also be declared as abstract.</li>
<li>Abstract classes can implement interfaces without even providing the implementation of interface methods.</li>
<li>Variables declared in a Java interface is by default final. An abstract class may contain non-final variables.</li>
<li>Members of a Java interface are public by default. A member of an abstract class can either be private, protected or public.</li>
<li>An interface is absolutely abstract and cannot be instantiated. An abstract class also cannot be instantiated, but can be invoked
if it contains a main method.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. What are pass by reference and pass by value in Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When an object is passed by value, this means that a copy of the object is passed. Thus, even if changes are made to that object, 
it doesn’t affect the original value. When an object is passed by reference, this means that the actual object is not passed, rather 
a reference of the object is passed. Thus, any changes made by the external method, are also reflected in all places.
<!-- Answer ::: END -->
</div>
</div>

<div><b>31. What is a class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Classes are fundamental or basic unit in Object Oriented Programming .A class is kind of blueprint or 
template for objects. Class defines variables, methods. A class tells what type of objects we are creating. 
For example take Department class tells us we can create department type objects. We can create any 
number of department objects.<br/>
All programming constructs in java reside in class. When JVM starts running it first looks for the class 
when we compile. Every Java application must have atleast one class and one main method.<br/><br/>
Class starts with class keyword. A class definition must be saved in class file that has same as class name.
File name must end with <code><b>.java</b></code> extension.
<pre><code class="language-html hljs xml">public class FirstClass {
 public static void main(String[] args) { 
  System.out.println(“My First class”);
 }
}</code></pre>
<div align="center"><b>FirstClass.java</b></div>
<br/>If we see the above class when we compile JVM loads the FirstClass and generates a <code><b>.class</b></code> 
file (<code><b>FirstClass.class</b></code>). When we run the program we are running the class and then executes the main method.
<!-- Answer ::: END -->
</div>
</div>

<div><b>32. What is an object?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An Object is instance of class. A class defines type of object. Each object belongs to some class. Every 
object contains state and behavior. State is determined by value of attributes and behavior is called 
method. Objects are also called as an <code><b>instance</b></code>.<br/><br/>
We write code as follows:
<pre><code class="language-html hljs xml">public class FirstClass { 
 public static void main(String[] args) {
  // Creates an Object
  FirstClass f = new FirstClass();
 }
}</code></pre>
To instantiate the FirstClass we use this statement:
<pre><code class="language-html hljs xml">FirstClass f = new FirstClass();</code></pre>
<code><b>f</b></code> is used to refer <code><b>FirstClass</b></code> object.
<!-- Answer ::: END -->
</div>
</div>


<div><b>33. What is method in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Method contains the executable body that can be applied to the specific object of the class.
Method includes method name, parameters or arguments and return type and a body of executable code.<br/><br/>
<i>Syntax looks like,</i>
<pre><code class="language-html hljs xml">accessSpecifier returnType methodName(Argument List) {
 // ...
 return ...
}</code></pre>
<i>Example,</i>
<pre><code class="language-html hljs xml">public float add(int a, int b, int c) {
 // ...
 return &lt;floatNumber&gt;;
}</code></pre>
Where <br/><code><b>accessSpecifier</b></code> is <code><b>public</b></code>, <code><b>private</b></code>, <code><b>protected</b></code>.<br/>
<code><b>returnType</b></code> is <code><b>int</b></code>, <code><b>float</b></code>, <code><b>char</b></code>.<br/><br/>
Methods can have multiple arguments. Separate with commas when we have multiple arguments.
<!-- Answer ::: END -->
</div>
</div>


<div><b>34. Why main() method is public, static and void in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>public :</b></code><br/><br/> <code><b>public</b></code> is an access specifier which can be used outside the class. When main method is declared 
public it means it can be used outside class.<br/><br/>
<code><b>static :</b></code><br/><br/> To call a method we require object. Sometimes it may be required to call a method without the 
help of object. Then we declare that method as static. JVM calls the main() method without creating object by declaring keyword static.<br/><br/>
<code><b>void :</b></code><br/><br/> void return type is used when a method does’nt return any value . main() method does’nt return any value, so main() 
is declared as void.<br/><br/>
<pre><code class="language-html hljs xml">public static void main(String[] args) {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>35. Explain about main() method in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Main() method is starting point of execution for all java applications.
<pre><code class="language-html hljs xml">public static void main(String[] args) {
 // ...
}</code></pre>
String <code><b>args[]</b></code> are array of string objects we need to pass from command line arguments.<br/><br/>
Every Java application must have atleast one main method.
<!-- Answer ::: END -->
</div>
</div>


<div><b>36. What is constructor in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="list-group"><div class="list-group-item">A constructor is a special method used to initialize objects in java.</div></div>
we use constructors to initialize all variables in the class when an object is created. As and when an object is created it is initialized 
automatically with the help of constructor in java.<br/><br/> 
We have two types of constructors:
<ul>
<li><b>Default Constructor</b><br/>
<i>Syntax looks like,</i><br/>
<pre><code class="language-html hljs xml">public classname() {
 // ...
}</code></pre></li>
<li><b>Parameterized Constructor</b><br/>
<i>Syntax looks like,</i><br/>
<pre><code class="language-html hljs xml">public classname(parameters list) {
 // ...
}</code></pre>
</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>37. Explain Java Coding Standards for classes or Java coding conventions for classes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Sun has created Java Coding standards or Java Coding Conventions . It is recommended highly to follow
java coding standards.<br/><br/>
Classnames should start with uppercase letter. Classnames names should be nouns. If Class name is of
multiple words then the first letter of inner word must be capital letter.<br/><br/>
<i>Example :</i> <code><b>Employee</b></code>, <code><b>EmployeeDetails</b></code>, <code><b>ArrayList</b></code>, <code><b>TreeSet</b></code>, <code><b>HashSet</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>38. Explain Java Coding standards for interfaces?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Interface should start with uppercase letters and the names should be adjectives.<br/><br/>
<i>Example :</i> <code><b>Runnable</b></code>, <code><b>Serializable</b></code>, <code><b>Marker</b></code>, <code><b>Cloneable</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>39. Explain Java Coding standards for Methods?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Method names should start with small letters.</li>
<li>Method names are usually verbs.</li>
<li>If method contains multiple words, every inner word should start with uppercase letter.<br/><br/>
<i>Example :</i> <code><b>toString()</b></code></li>
<li>Method name must be combination of verb and noun.<br/>
<i>Example :</i> <code><b>getCarName()</b></code>, <code><b>getCarNumber()</b></code></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>40. Explain Java Coding Standards for variables?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Variable names should start with small letters.</li>
<li>Variable names should be nouns.</li>
<li>Short meaningful names are recommended.</li>
<li>If there are multiple words every innerword should start with Uppecase character.</li>
</ol>
<i>Example :</i> <code><b>value</b></code>, <code><b>empName</b></code>, <code><b>empSalary</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div><b>41. Explain Java Coding Standards for Constants?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Constants in java are created using static and final keywords.</li>
<li>Constants contains only uppercase letters.</li>
<li>If constant name is combination of two words it should be separated by underscore.</li>
<li>Constant names are usually nouns.</li>
</ol>
<i>Example :</i> <code><b>MAX_VALUE</b></code>, <code><b>MIN_VALUE</b></code>, <code><b>MAX_PRIORITY</b></code>, <code><b>MIN_PRIORITY</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div><b>42. What is "IS-A" relationship in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
"IS-A" relationship is also known as inheritance. We can implement "IS-A" relationship or inheritance in java
using extends keyword. The advantage or inheritance or is a relationship is reusability of code instead of
duplicating the code.<br/><br/>
<i>Example :</i> Motor cycle is a vehicle.<br/>
Car is a vehicle Both car and motorcycle extends vehicle.
<!-- Answer ::: END -->
</div>
</div>

<div><b>43. What is "HAS-A" relationship in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
"HAS-A" relationship is also known as <code><b>Composition</b></code> or <code><b>Aggregation</b></code>. As in inheritance we have <i>"extends"</i>
keyword we don’t have any keyword to implement "HAS-A" relationship in java.<br/><br/> The main advantage of "HAS-A" relationship in java code reusability.
<!-- Answer ::: END -->
</div>
</div>

<div><b>44. Difference between "IS-A" and "HAS-A" relationship in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>IS-A Relationship</th><th>HAS-A Relationship</th></tr></thead>
<tbody>
 <tr>
  <td>IS-A Relationship also known as <code><b>Inheritance</b></code></td>
  <td>HAS-A Relationship also known as <code><b>Composition</b></code> or <code><b>Aggregation</b></code>.</td>
 </tr>
 <tr>
  <td>For IS-A Relationship we uses <code><b>extends</b></code> keyword</td>
  <td>For HAS-A Relationship we use <code><b>new</b></code> keyword</td>
 </tr>
 <tr>
  <td>The main advantage of Inheritance is reusability of code.</td>
  <td>The main advantage of HAS-A Relationship is reusability of code.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>45. Can we have multiple classes in single file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, we can have multiple classes in single file but it people rarely do that and not recommended. We can
have multiple classes in File but only one class can be made public. If we try to make two classes in File
public we get following compilation error.<br/><br/>
The <code><b>public</b></code> type must be defined in its own file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>46. What all access modifiers are allowed for top class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
For top level class only two access modifiers are allowed. public and default. If a class is declared as public it is visible everywhere.<br/><br/>
If a class is declared default it is visible only in same package.<br/><br/>
If we try to give <code><b>private</b></code> and <code><b>protected</b></code> as access modifier to class we get the below compilation error.
<!-- Answer ::: END -->
</div>
</div>

<div><b>47. What are packages in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Package is a mechanism to group related classes ,interfaces and enums in to a single module.<br/><br/>
<i>Syntax :</i>
<pre><code class="language-html hljs xml">package &lt;package-name&gt;</code></pre>
<b>Coding Convention :</b><br/>
package name should be declared in small letters. package statement defines the namespace.<br/><br/>
The main use of package is
<ul>
<li>To resolve naming conflicts.</li>
<li><i>For visibility control :</i> We can define classes and interfaces that are not accessible outside the class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>48. Can we have more than one package statement in source file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can’t have more than one package statement in source file. In any java program there can be atmost 
only 1 package statement. We will get compilation error if we have more than one package statement in 
source file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>49. Can we define package statement after import statement in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can’t define package statement after import statement in java. package statement must be the first 
statement in source file. We can have comments before the package statement.
<!-- Answer ::: END -->
</div>
</div>

<div><b>50. What are identifiers in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Identifiers are names in java program. Identifiers can be class name, method name or variable name.<br/><br/>
<b>Rules for defining identifiers in java:</b><br/><br/>
<ol>
<li>Identifiers must start with letter,Underscore or dollar($) sign.</li>
<li>Identifiers can’t start with numbers.</li>
<li>There is no limit on number of characters in identifier but not recommended to have more than 15 characters.</li>
<li>Java identifiers are case sensitive.</li>
<li>First letter can be alphabet ,or underscore and dollar sign. From second letter we can have numbers.</li>
<li>We should’nt use reserve words for identifiers in java.</li>
</ol>

<!-- Answer ::: END -->
</div>
</div>

<div><b>51. What are access modifiers in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The important feature of encapsulation is access control. By preventing access control we can misuse of class, methods and members.<br/><br/>
A class, method or variable can be accessed is determined by the access modifier. There are three types of access modifiers in java.<br/><br/>
<code><b>public</b></code>, <code><b>private</b></code>, <code><b>protected</b></code>. If no access modifier is specified then it has a default access.
<!-- Answer ::: END -->
</div>
</div>


<div><b>52. What is the difference between access specifiers and access modifiers in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In C++ we have access specifiers as <code><b>public</b></code>, <code><b>private</b></code>, <code><b>protected</b></code> and <code><b>default</b></code> 
and access modifiers as <code><b>static</b></code>, <code><b>final</b></code>. But there is no such divison of access specifiers and access modifiers in 
java. In Java we have access modifiers and non access modifiers.<br/><br/>
<b>Access Modifiers :</b> <code><b>public</b></code>, <code><b>private</b></code>, <code><b>protected</b></code>, <code><b>default</b></code>.
<b>Non Access Modifiers :</b> <code><b>abstract</b></code>, <code><b>final</b></code>, <code><b>stricfp</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>53. What access modifiers can be used for class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can use only two access modifiers for class <code><b>public</b></code> and <code><b>default</b></code>.<br/><br/>
<b>public :</b><br/><br/> A class with public modifier can be visible.
<ol>
<li>In the same class.</li>
<li>In the same package subclass.</li>
<li>In the same package nonsubclass.</li>
<li>In the different package subclass.</li>
<li>In the different package non subclass.</li>
</ol>
<b>default :</b><br/><br/> A class with default modifier can be accessed.
<ol>
<li>In the same class.</li>
<li>In the same package subclass.</li>
<li>In the same package nonsubclass.</li>
<li>In the different package subclass.</li>
<li>In the different package non subclass.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>54. Explain what access modifiers can be used for methods?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can use all access modifiers <code><b>public</b></code>, <code><b>private</b></code>, <code><b>protected</b></code> and <code><b>default</b></code> for 
methods.<br/><br/>
<b>public :</b><br/> When a method is declared as public it can be accessed
<ol>
<li>In the same class.</li>
<li>In the same package subclass.</li>
<li>In the same package nonsubclass.</li>
<li>In the different package subclass.</li>
<li>In the different package non subclass.</li>
</ol>
<b>default :</b><br/> When a method is declared as default, we can access that method in
<ol>
<li>In the same class.</li>
<li>In the same package subclass.</li>
<li>In the same package non subclass.</li>
</ol>
We cannot access default access method in
<ol>
<li>Different package subclass.</li>
<li>Different package non subclass.</li>
</ol>
<b>protected :</b><br/> When a method is declared as protected it can be accessed
<ol>
<li>With in the same class.</li>
<li>With in the same package subclass.</li>
<li>With in the same package non subclass.</li>
<li>With in different package subclass.</li>
</ol>
It cannot be accessed non subclass in different package.<br/><br/>
<b>private :</b><br/> When a method is declared as private it can be accessed only in that class.
It cannot be accessed in
<ol>
<li>Same package subclass.</li>
<li>Same package non subclass.</li>
<li>Different package subclass.</li>
<li>Different package non subclass.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>55. Explain what access modifiers can be used for variables?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can use all access modifiers <code><b>public</b></code>, <code><b>private</b></code>, <code><b>protected</b></code> and <code><b>default</b></code> for 
variables.<br/><br/>
<b>public :</b><br/><br/> When a variables is declared as public it can be accessed
<ol>
<li>In the same class.</li>
<li>In the same package subclass.</li>
<li>In the same package nonsubclass.</li>
<li>In the different package subclass.</li>
<li>In the different package non subclass.</li>
</ol>

<b>default :</b><br/><br/> When a variables is declared as default, we can access that method in
<ol>
<li>In the same class.</li>
<li>In the same package subclass.</li>
<li>In the same package non subclass.</li>
</ol>
We cannot access default access variables in
<ol>
<li>Different package subclass.</li>
<li>Different package non subclass.</li>
</ol>

<b>protected :</b><br/><br/> When a variables is declared as protected it can be accessed
<ol>
<li>With in the same class.</li>
<li>With in the same package subclass.</li>
<li>With in the same package non subclass.</li>
<li>With in different package subclass.</li>
</ol>
It cannot be accessed non subclass in different package.

<b>private :</b><br/><br/> When a variables is declared as private it can be accessed only in that class.
It cannot be accessed in
<ol>
<li>Same package subclass.</li>
<li>Same package non subclass.</li>
<li>Different package subclass.</li>
<li>Different package non subclass.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>56. What is final access modifier in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>final</b></code> access modifier can be used for class, method and variables. The main advantage of final access
modifier is security no one can modify our classes, variables and methods.<br/><br/> 
The main disadvantage of final access modifier is we cannot implement oops concepts in java.<br/><br/> 
<i>Example :</i> <code><b>Inheritance</b></code>, <code><b>polymorphism</b></code>.<br/><br/>
<b>final class :</b><br/><br/> A final class cannot be extended or subclassed. We ar e preventing inheritance by marking a
class as final. But we can still access the methods of this class by composition.<br/><br/>
<i>Example :</i> <code><b>String</b></code> class<br/><br/>
<b>final methods:</b><br/><br/> Method overriding is one of the important features in java. But there are situations where
we may not want to use this feature. Then we declared method as final which will print overriding. To
allow a method from being overridden we use final access modifier for methods.<br/><br/>
<b>final variables :</b><br/><br/> If a variable is declared as final ,it behaves like a constant. We cannot modify the value
of final variable. Any attempt to modify the final variable results in compilation error. The error is as
follows.<br/><br/>
<i>"final variable cannot be assigned."</i>
<!-- Answer ::: END -->
</div>
</div>

<div><b>57. Explain about abstract classes in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Sometimes we may come across a situation where we cannot provide implementation to all the methods 
in a class. We want to leave the implementation to a class that extends it. In such case we declare a class 
as abstract.To make a class abstract we use key word abstract. Any class that contains one or more 
abstract methods is declared as abstract. If we don’t declare class as abstract which contains abstract 
methods we get compile time error. We get the following error.<br/><br/>
"The type &lt;class-name&gt; must be an abstract class to define abstract methods."<br/><br/>
<pre><code class="language-html hljs xml">abstract class &lt;class-name&gt; {
 // ...
}</code></pre>
<i>For example,</i> if we take a vehicle class we cannot provide implementation to it because there may be two
wheelers , four wheelers etc. At that moment we make vehicle class abstract. All the common features of
vehicles are declared as abstract methods in vehicle class. Any class which extends vehicle will provide
its method implementation. It’s the responsibility of subclass to provide implementation.<br/><br/>
The important features of abstract classes are :
<ol>
<li>Abstract classes cannot be instantiated.</li>
<li>An abstract classes contains abstract methods, concrete methods or both.</li>
<li>Any class which extends abstract class must override all methods of abstract class.</li>
<li>An abstract class can contain either 0 or more abstract methods.</li>
</ol>
Though we cannot instantiate abstract classes we can create object references . Through superclass
references we can point to subclass.
<!-- Answer ::: END -->
</div>
</div>

<div><b>58. Can we create constructor in abstract class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can create constructor in abstract class , it does’nt give any compilation error. But when we cannot instantiate class there is no use in creating 
a constructor for abstract class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>59. What are abstract methods in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An abstract method is the method which does’nt have any body. Abstract method is declared with keyword abstract and semicolon in place of method body.<br/><br/>
<pre><code class="language-html hljs xml">public abstract void &lt;method name&gt;();</code></pre>
<i>Example :</i>
<pre><code class="language-html hljs xml">public abstract void getDetails();</code></pre>
It is the responsibility of subclass to provide implementation to abstract method defined in abstract class.
<!-- Answer ::: END -->
</div>
</div>


<div><b>60. Explain about procedural programming language or structured programming language and its features?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In traditional programming language to solve a problem we use set of procedures. Once the procedures or functions are determined next they concentrate 
on storing data.<br/><br/>
<b>Features :</b>
<ol>
<li>In this top down approach is followed. First procedures were determined and then concentrate on minute details.</li>
<li>Concentrate more on functions and procedure rather than data.</li>
<li>In traditional programming language procedures manipulate global data without knowing to other procedures.</li>
<li>Very little concentration on minute details.</li>
</ol>
The main drawback of traditional programming languages works well only for small problems. But not
suitable for larger problems.<br/><br/>
<b>Example :</b> <code><b>C language</b></code>, <code><b>Pascal</b></code>

<!-- Answer ::: END -->
</div>
</div>

<div><b>61. Differences between traditional programming language and object oriented programming language?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Traditional programming language</th><th>Object oriented programming language</th></tr></thead>
<tbody>
 <tr>
  <td>A program is divided in to modules and procedures.</td>
  <td>A program is divided in to number of objects.</td>
 </tr>
  <tr>
  <td>Implementation is done through procedures.</td>
  <td>Implementation is done through interfaces.</td>
 </tr>
  <tr>
  <td>In traditional programming there is no encapsulation all procedures access data.</td>
  <td>In oops encapsulation is done by tightly coupling data and behaviour together in class.</td>
 </tr>
  <tr>
  <td>Suitable for small programs or problems.</td>
  <td>Suitable for large programs and complex problems.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>62. Explain importance of inheritance in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Reusability :</b> The major advantage of inheritance is code reuse. We can avoid duplicating code by using
inheritance. We can place all common state and behaviour in that class , by extending that class.</li>
<li><b>Extendability :</b> We can add new functionality to our application without touching the existing code.
For example if we take Ms word we came across number of versions of msword such as word 2003,2007.</li>
</ul>
Everytime they won’t write new code they reuse the existing code and some more features.
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

