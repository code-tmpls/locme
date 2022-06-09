
<div class="appQuestion"><b>350. What are the new features released in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The new features released in Java 8 are : 
<ol>
<li>Lambda Expression</li>
<li>Stream API</li>
<li>Date and Time API</li>
<li>Functional Interface</li>
<li>Interface Default and Static Methods</li>
<li>Optional</li>
<li>Base64 Encoding and Decoding</li>
<li>Nashorn JavaScript Engine</li>
<li>Collections API Enhancements</li>
<li>Concurrency Enhancements</li>
<li>Fork/Join Framework Enhancements</li>
<li>Spliterator13.Internal Iteration</li>
<li>Type Annotations and Repeatable Annotations</li>
<li>Method Parameter Reflection</li>
<li>JVM Parameter Changes</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>351. What are the main benefits of new features introduced in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main benefits of Java 8 features are : 
<ol>
<li>Support for functional programming by Lambda and Streams</li>
<li>Ease of high volume data processing by Streams</li>
<li>Ease of use by getting Parameter names through Reflection</li>
<li>Reusable code with enhanced Collection APIs</li>
<li>Smart exception handling with Optional</li>
<li>Control on JVM with new Parameters</li>
<li>Enhanced encryption support with Base 64</li>
<li>Faster execution with Nashorn JavaScript engine support</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>352. What is a Lambda expression in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Lambda expression is an anonymous function. It is like a method that does not need any access modifiers, name or return value declaration. 
It accepts a set of input parameters and returns result.<br/><br/> 
Lambda expression can be passed as a parameter in a method. So we can treat code in Lambda expression as data. This piece of code can be passed 
to other objects and methods.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>353. What are the three main parts of a Lambda expression in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Three main parts of a Lambda expression are : 
1.Parameter list: A Lambda expression can have zero or more parameters. Parameter list is optional to Lambda.
2.Lambda arrow operator: “->” is known as Lambda arrow operator. It separates the list of parameters and the body of Lambda.
3.Lambda expression body: The piece of code that we wantto execute is written in Lambda expression body.
Example. 
In following example: 
<pre><code class="language-html hljs xml">Arrays.asList( "a", "b", "d" ).forEach( e -> System.out.println( e ) );
Parameter list = eArrow = ->Body = System.out.println( e );</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>354. What is the data type of a Lambda expression?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Lambda expression fulfills the purpose of passing code as data.<br/><br/> 
The data type of a Lambda expression is a Functional interface.<br/><br/> 
In most of the cases this is <code><b>java.lang.Runnable</b></code> interface.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>355.What is the meaning of following lambda expression?( e -> System.out.println( e ) ); </b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This Lambda expression takes a parameter e and prints it via <code><b>System.out</b></code>.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>356. Why did Oracle release a new version of Java like Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main theme of Java 8 is support for functional programming. With increase in Database size and growth of multi-code CPU servers, there is need 
for Java to support such large-scale systems.<br/><br/> With new features of Java 8, it is possible to create functional programs to interact 
efficiently with Big Data systems. Support for Streams is very helpful in this regard.<br/><br/> Lambda expressions are very useful for cloud computing 
where we can pass code as data and run the same code on multiple servers.<br/><br/> 
Optional is a best practice that is borrowed from Google Guava library for handling the exceptional cases.<br/><br/> 
This has made programs more robust with support for edge cases.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>357. What are the advantages of a lambda expression?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can pass a lambda expression as an object to a method. This reduces the overhead involved in passing an anonymous class.<br/><br/> 
We can also pass a method as a parameter to another method using lambda expressions.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>358. What is a Functional interface in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Functional interface in Java is an interface that has exactly one abstract method.<br/><br/> 
It can have default methods with implementation. A default method is not abstract.<br/><br/> 
In Java 8, <code><b>java.lang.Runnable</b></code> and <code><b>java.util.concurrent.Callable</b></code> are two very popular Functional interfaces.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>359. What is a Single Abstract Method (SAM) interface in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Functional interface is also known as Single Abstract Method Interface, since it has exactly one abstract method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>360. How can we define a Functional interface in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To define a Functional interface in Java8, we can create an Interface with exactly one abstract method.<br/><br/> 
Another way is to mark an Interface with annotation <code><b>@FunctionalInterface</b></code>. Even with the annotation we have to follow the rule of 
exactly one abstract method.<br/><br/> 
The only exception to this rule is that if we override <code><b>java.lang.Object</b></code> class’s method as an abstract method, then it does not 
count as an abstract method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>361. Why do we need Functional interface in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Functional Interfaces are mainly used in Lambda expressions, Method reference and constructor references.<br/><br/> 
In functional programming, code can be treated as data. For this purpose Lambda expressions are introduced. They can be used to pass a block of code to 
another method or object.<br/><br/> Functional Interface serves as a data type for Lambda expressions. Since a Functional interface contains only one 
abstract method, the implementation of that method becomes the code that gets passed as an argument to another method.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>362. Is it mandatory to use @FunctionalInterface annotation to define a Functional interface in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, it is not mandatory to mark a Functional interface with @FunctionalInterface annotation.<br/><br/> 
Java does not impose this rule.<br/><br/> But, if we mark an interface with @FunctionalInterface annotation then Java Compiler will give us error 
in case we define more than one abstract method inside that interface.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>363. What are the differences between Collection and Stream API in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Collection and Stream API in Java 8 are : 
<ol>
<li><b>Version :</b> Collection API is in use since Java 1.2. StreamAPI is recent addition to Java in version 8.</li>
<li><b>Usage :</b> Collection API is used for storing data in differentkinds of data structures. Stream API is used forcomputation of data on a large set 
of Objects.</li>
<li><b>Finite :</b> With Collection API we can store a finite numberof elements in a data structure. With Stream API, we canhandle streams of data that can 
contain infinite number ofelements.</li>
<li><b>Eager vs. Lazy :</b> Collection API constructs objects in aneager manner. Stream API creates objects in a lazy manner.</li>
<li><b>Multiple consumption :</b> Most of the Collection APIssupport iteration and consumption of elements multipletimes. With Stream API we can consume or 
iterate elements only once.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>364. What are the main uses of Stream API in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main uses of Stream API in Java 8 are : 
<ol>
<li>It helps in using data in a declarative way. We can make use of Database functions like Max, Min etc., without running a full iteration.</li>
<li>It makes good use of multi-core architectures without worrying about multi-threading code.</li>
<li>We can create a pipeline of data operations with JavaStream that can run in a sequence or in parallel.</li>
<li>It provides support for group by, order by etc. operations.</li>
<li>It supports writing for code in Functional programmingstyle.</li>
<li>It provides parallel processing of data.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>365. What are the differences between Intermediate and Terminal Operations in Java 8 Streams?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Intermediate and Terminal Stream operations are as follows : 
<ol>
<li><b>Evaluation :</b> Intermediate operations are not evaluated until we chain it with a Terminal Operation of Stream. Terminal Operations can be 
independently evaluated.</li>
<li><b>Output :</b> The output of Intermediate Operations is another Stream. The output of Terminal Operations is not a Stream.</li>
<li><b>Lazy :</b> Intermediate Operations are evaluated in lazymanner. Terminal Operations are evaluated in eager manner.</li>
<li><b>Chaining :</b> We can chain multiple Intermediate Operations in a Stream. Terminal Operations cannot be chained multiple times.</li>
<li><b>Multiple :</b> There can be multiple Intermediate operations ina Stream operation. There can be only one Terminaloperation in Stream 
processing statement.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>366. What is a Spliterator in Java8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Spliterator is a special type of Iterator to traverse and partition the elements of a source in Java. A source can be a collection, an IOchannel or 
a generator function. A Spliterator may traverse elements individually or sequentially in bulk.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>367. What are the differences between Iterator and Spliterator in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Iterator and Spliterator are as follows : 
<ol>
<li>Spliterator can be used with Streams in Java 8. Where as, Iterator is just used with Collection.</li>
<li>Spliterator uses Internal Iteration to iterate Streams. Iterator uses External Iteration to iterate Collections.</li>
<li>Spliterator can iterate Streams in Parallel as well asSequential manner. Iterator only iterates in Sequential manner.</li>
<li>Spliterator can traverse elements individually as well as inbulk. Iterator only iterates elements individually.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>368. What is Type Inference in Java8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Java compiler can see each method’s invocation and it declaration to determine what are type arguments required for invocation.<br/><br/> 
By Type Inference, Java can determine the types of the arguments as well as the type of the result being returned.<br/><br/> 
Type inference algorithm also tries to find the most specific type that can work with all types of arguments.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>369. Does Java 7 support TypeInference?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, Java 7 supports Type Inference. In Java 8, Oracle has enhanced the Type Inference concept. Now it can be used to define Lambda expressions, 
functions and Method references.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>370. How does Internal Iteration work in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In an Iterator, the fundamental question is that which party controls the iteration. Is it Iterator or the Collection on which iterator runs.<br/><br/> 
When a Collection controls the iterator, then it is called External Iteration. When the Iterator controls the iteration then it is called 
Internal Iteration.<br/><br/> In case of Internal Iteration, the client hands over an operation to Iterator and the Iterator applies the operation 
to all the elements inaggregate.<br/><br/> Internal Iteration is easier to implement, since the Iterator does not have to store the state of the collection.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>371. What are the main differences between Internal and External Iterator?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Internal and External Iterator are as follows : 
<ol>
<li>An Internal Iterator controls the iteration itself. In an External Iterator collection controls the iteration.</li>
<li>Internal Iterator can iterate elements in individually as well as in.</li>
<li>Bulk (like forEach). External iterator iterates element oneby one.</li>
<li>Internal Iterator does not have to iterate elements onlysequentially. External Iterator always iterates sequentially.</li>
<li>Internal Iterator supports declarative programming style that goes well with functional programming. ExternalIterator follows imperative style 
OOPS programming.</li>
<li>Some people consider Internal Iterator code more readable than that of External Iterator.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>372. What are the main advantages of Internal Iterator over External Iterator in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the main advantages of Internal Iterator are : 
<ol>
<li>Internal Iterator is based on Functional programming, therefore it can work on declarative style code.</li>
<li>There is no need to sequentially iterate elements in Internal Iterator.</li>
<li>Code is more readable and concise in Internal Iterator.</li>
<li>Internal Iterator supports concurrency and parallel processing.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>373. What are the applications inwhich we should use Internal Iteration?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We need Internal Iterator in applications that require high performance, parallel processing, fast iteration and bulk operations support.<br/><br/> 
Also in Internal Iteration applications, we do not have much control over iteration. The other features like parallel processing etc. become more important.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>374. What is the main disadvantage of Internal Iteration over External Iteration?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Internal Iteration has many advantages over External Iteration. But it has one big disadvantage. Since Java API is responsible foriterating in 
Internal iterator, developer does not get any control over iteration.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>375. Can we provide implementation of a method in a Java Interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Before Java 8, it was not allowed to provide implementation of a method in an Interface.<br/><br/> Java 8 has introduced the flexibility of providing 
implementation of a method in an interface. There are two options for that : 
<ol>
<li><b>Default Method :</b> We can give default implementation of a method.</li>
<li><b>Static Method :</b> We can create a static method in an interface and provide implementation.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>376. What is a Default Method inan Interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java8, we can provide implementation of a method in an Interface and mark this method with Default keyword.<br/><br/> 
In this way, this implementation of the method becomes default behavior for any class implementing the interface.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>377. Why do we need Default method in a Java 8 Interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Default methods in an Interface provide backward compatibility feature in Java 8.<br/><br/> 
Let say there is an interface Car that is implemented by BMW, Chevrolet and Toyota classes. Now a Car needs to add capability for flying. It will 
require change in Car interface. Some of the car classes that do not have flying capability may fail. Therefore a Default Implementation of flying 
methods is added in Car interface so that cars with no flying capability can continue to implement the original Car interface.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>378. What is the purpose of a Static method in an Interface in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Static method in an Interface is utility or helper method. This is not an object level instance method. Some of the uses of Static method in an 
Interface are : 
<ol>
<li><b>Single Class :</b> There is no need to create a separate Utils class for storing utility or helper methods. We can keep these methods in 
same interface.</li>
<li><b>Encapsulation :</b> With Static methods, complete behavior of a Class is encapsulated in same class. There is no need to maintain multiple classes.</li>
<li><b>Extension :</b> It is easier to extend a Class/API. If we extend a collection ArrayList, we get all the methods. We need not extend Collections class 
also.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>379. What are the core ideas behind the Date/Time API of Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are three core ideas behind the Date/Time API of Java 8 : 
<ol>
<li><b>Immutable-value classes :</b> The new API avoids thread-safety and concurrency issues by ensuring that all the core classes are immutable and 
represent well-defined values.</li>
<li><b>Domain-driven design :</b> The new API is modeled onprecise domain with classes that represent different usecases for Date and Time.</li>
<li>The emphasis on domain-driven design offers benefits like clarity and understandability.
<li><b>Separation of chronologies :</b> The new API allows people towork with different calendar systems. It supports the needsof users in different areas of 
the world likes Japan or Thailand that don’t follow ISO-8601.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>380. What are the advantages of new Date and Time API in Java 8 over old Date API?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the advantages of Java 8 Date Time API over existing DateAPI are :
<ul>
<li><b>Concurrency :</b> Existing Date Time classes (such as java.util.Date andSimpleDateFormatter) are not thread-safe. This does not work well 
in concurrent applications. In new Date Time API, developer does not have to deal with concurrency issues while writing date-handling code.</li>
<li><b>Better Design :</b> Date/Time classes prior to Java 8 have poor APIdesign. For example, years in java.util.Date start at 1900, months start at 
1, and days start at 0. It is not very intuitive. Java 8 DateTime API handles it very well.</li>
<li><b>No need for 3rd Party Libraries :</b> With the popularity of third-party Date/Time libraries like Joda Time, Java has to make its nativeDate/Time API 
comparable. Now we can use the Java API instead of using 3rd party libraries.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>381. What are the main differences between legacy Date/Time API in Java and Date/Time API of Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main difference between legacy Date/Time API and Java8 Date/Time API are :
<ol> 
<li>Old API is not Thread safe. Java 8 API is Thread safe.</li>
<li>Old API has many mutable objects. New Java 8 API isbased on Immutable objects.</li>
<li>Performance of old API is not good. New Java8Date/Time API gives better performance.</li>
<li>Old API is less readable and maintainable. New Java 8API is very well designed and is more readable.</li>
<li>Old API has month values from 0 to 11. New API hasmonths from 1 to 12.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>382. How can we get duration between two dates or time in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java8, we have a new class Duration that provides the utility of computing duration between two dates.<br/><br/> 
We can call the static method <code><b>Duration.between(date1, date2)</b></code> to getthe time period in hours, mins, days etc. between date1 and date2.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>383. What is the new method family introduced in Java 8 for processing of Arrays on multi core machines?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java 8 has enhanced the Arrays class with methods that can runefficiently on multi core machines.<br/><br/> These methods start with keyword parallel.<br/>
Example. <code><b>Arrays.parallelSetAll()</b></code>, <code><b>Arrays.parallelSort()</b></code> etc.<br/> 
This parallel set of methods provides parallel processing of Arrays that can run Java code very fast on a multi core machine.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>384. How does Java 8 solve Diamond problem of Multiple Inheritance?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Multiple Inheritance if a class extends more than one classes with two different implementation of same method then it causes Diamond problem.<br/><br/> 
Consider following example to see problem and solution for Diamond problem in Java 8 :
<pre><code class="language-html hljs xml">public interface BaseInterface{ 
 default void display() { 
  // code goes here 
 }
}</code></pre>
<pre><code class="language-html hljs xml">public interface BaseOne extends BaseInterface { }
public interface BaseTwo extends BaseInterface { }
public class ChildClass implements BaseOne, BaseTwo { }</code></pre>
In the above code, class ChildClass gives compile time error. JavaCompiler cannot decide which display method should it invoke in ChildClass.<br/><br/> 
To solve this problem, Java SE 8 has given the following remedy :
<pre><code class="language-html hljs xml">public interface A { 
 default void display() { 
   //code goes here 
 }
}</code></pre>
<pre><code class="language-html hljs xml">public interface B extends A{ }
public interface C extends A{ }
public class D implements B,C{ 
  default void display() { 
	B.super.display();
  }
}</code></pre>
<pre><code class="language-html hljs xml">public interface BaseInterface{ 
 default void display() { 
   //code goes here 
 }
}</code></pre>
<pre><code class="language-html hljs xml">public interface BaseOne extends BaseInterface { }
public interface BaseTwo extends BaseInterface { }
public class ChildClass implements BaseOne, BaseTwo { 
  default void display(){ 
    BaseOne.super.display();
  }
}</code></pre>
The method invocation at <code><b>BaseOne.super.display();</b></code> solves the Diamond problem as it resolves the confusion for compiler.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>385. What are the differences between Predicate, Supplier and Consumer in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The subtle difference between Predicate, Supplier and Consumer in Java 8 is as follows :<br/><br/> 
Predicate is an anonymous function that accepts one argument and returns a result.<br/><br/> 
Supplier is an anonymous function that accepts no argument and returns a result.<br/><br/> 
Consumer is an anonymous function that accepts one argument and returns no result.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>386. Is it possible to have default method definition in an interface without marking it with default keyword?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, we have to always mark a default method in interface with default keyword.<br/><br/> 
If we create a method with implementation in an interface, but do not mark it as default, then we will get compile time error.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>387. Can we create a class that implements two Interfaces with default methods of same name and signature?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, it is not allowed to create a class that implements interfaces with same name default methods.<br/><br/> 
It will give us compile time error for duplicate default methods.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>388. How Java 8 supports Multiple Inheritance?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Multiple Inheritance a class can inherit behavior from more than one parent classes.<br/><br/> 
Prior to Java 8, a class can implement multiple interfaces but extend only one class.<br/><br/> In Java 8, we can have method implementation within an 
interface.So an interface behaves like an Abstract class.<br/><br/> Now if we implement more than one interface with method implementation in a class, 
it means we are inheriting behavior from multiple abstract classes. That is how we get Multiple Inheritance in Java 8.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>389. In case we create a class that extends a base class and implementsan interface. If both base class and interface have a default method with same name and arguments, then which definition will be picked by JVM?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In such a scenario, JVM will pick the definition in base class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>390. If we create same method and define it in a class , in its parent class and in an interface implemented by the class, then definition will be invoked if we access it using the reference of Interface and the object of class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In all the cases, method defined in the class will be invoked.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>391. Can we access a static method of an interface by using reference of the interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, a static method of interface has to be invoked by using the name of the interface.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>392. How can you get the name of Parameter in Java by using reflection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java 8 has introduced a method<code><b>Parameter.getName()</b></code> to get the name of a parameter by using reflection.<br/><br/> 
Before using this feature, we need to turn on this feature in Java compiler.<br/><br/> 
To turn on this feature, just run <code><b>javac<./b></code> with <i>-parameters</i> argument.<br/><br/> 
To verify the availability of this feature, we can use <code><b>Parameter.isNamePresent()</b></code> method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>393. What is Optional in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Optional is a container object that may have a null or non-null value. If it has a value then <code><b>isPresent()</b></code> method returns true.<br/><br/> 
It a value is present, we can call <code><b>get()</b></code> method to get the value. Else we will get nothing. It is very useful in handling data 
that has null values.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>394. What are the uses of Optional?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the uses of Optional in Java are : 
<ul>
<li>We can use Optional to avoid NullPointerException in an application.</li>
<li>Optional performs Null check at compile time, so we do not get runtime exception for a null value.</li>
<li>Optional reduces the codebase pollution by removing unnecessary null checks.</li>
<li>Optional can also be used to handle default case for data when avalue is null.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>395. Which method in Optional provides the fallback mechanism in case of null value?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In case, an Optional has null value, we can use <code><b>orElseGet()</b></code> method as fallback mechanism. If we implement <code><b>orElseGet()</b></code> 
method, it willbe invoked when the value of Optional is null.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>396. How can we get current time by using Date/Time API of Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java 8 we can use Clock class to get the current time. Instead of using old method <code><b>System.currentTimeMillis()</b></code>, we can create a 
Clock object and call <code><b>millis()</b></code> method to get the current time in milliseconds. We can also call <code><b>instant()</b></code> method 
on Clock object to get the current time in a readable format.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>397. Is it possible to define a static method in an Interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, from Java 8, an Interface can also has a static method.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>398. How can we analyze the dependencies in Java classes and packages?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java 8 comes with a new command line tool <code><b>jdeps</b></code> that can help in analyzing the package-level and class-level dependencies.<br/><br/> 
We can pass a jar file name or a class name as an argument to this tool. It will list all the dependencies of that jar or class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>399. What are the new JVM arguments introduced by Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java 8, PermGen space of ClassLoader is removed. It has been replaced with MetaSpace.<br/><br/> 
Now we can set the initial and maximum size of MetaSpace.<br/><br/> 
The JVM options <code><b>-XX:PermSize</b></code> and <code><b>-XX:MaxPermSize</b></code> are replaced by <code><b>-XX:MetaSpaceSize</b></code> and 
<code><b>-XX:MaxMetaspaceSize</b></code> respectively in Java 8.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>400. What are the popular annotations introduced in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the popular annotations introduced in Java 8 are : 
<ul>
<li><b>@FunctionalInterface :</b> This annotation is used to mark an interfaceas Functional Interface. As mentioned earlier, A Functional Interface can 
be used for lambda expressions.</li>
<li><b>@Repeatable :</b> This annotation is used for marking another annotation. It indicates that the marked annotation can be applied multiple times on 
a type.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>401. What is a StringJoiner in Java8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
StringJoiner is a new class in Java 8 that can be used to create a String. It can construct a sequence of characters separated by a delimiter. 
It can also optionally add a prefix and suffix to this sequence. We can use this sequence to get a String.<br/><br/> 
Example.<br/><br/> 
The String "[One:Two:Three]" may be constructed as follows : 
<pre><code class="language-html hljs xml">StringJoiner sj = new StringJoiner(":", "[", "]");
sj.add("One").add("Two").add("Three");
String desiredString = sj.toString();</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>402. What is the type of a Lambda expression in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The type of a lambda expression depends on the context it is being used.<br/><br/> 
A lambda is like a method reference. It does not have a type of its own.<br/><br/> 
Generally, a Lambda is an instance of a Functional Interface.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>403. What is the target type of a lambda expression?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The target type of a lambda expression represents a type to which the expression can be converted.<br/><br/> 
The target type for a lambda expression is a functional interface.<br/><br/> 
The lambda expression must have same parameter type as the parameter in the function of the interface. It must also return a type compatible 
with the return type of function.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>404. What are the main differences between an interface with default method and an abstract class in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An interface with a default method appears same as an Abstract class in Java. But there are subtle differences between two : 
<ol>
<li><b>Instance variable :</b> An interface cannot have instance variables. An abstract class can have instance variables.</li>
<li><b>Constructor :</b> An interface cannot have a constructor. An abstract class can have constructor.</li>
<li><b>Concrete Method :</b> An interface cannot have concrete methods other than default method. An abstract class is allowed to define concrete methods 
with implementation.</li>
<li><b>Lambda :</b> An interface with exactly one default method canbe used for lambda expression. An abstract class cannot beused for lambda expression.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>
