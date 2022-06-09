<div><b>1. What are the two types of Exceptions in Java? Which are the differences between them?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Java has two types of exceptions: <code><b>checked exceptions</b></code> and <code><b>unchecked exceptions</b></code>.<br/><br/>
Unchecked exceptions do not need to be declared in a method or a constructor’s throws clause, if they can be thrown by the execution of the 
method or the constructor, and propagate outside the method or constructor boundary. On the other hand, checked exceptions must be declared in a method 
or a constructor’s throws clause.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What is the difference between Exception and Error in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Exception</b></code> and <code><b>Error</b></code> classes are both subclasses of the Throwable class. The Exception class is used for 
exceptional conditions that a user’s program should catch. The Error class defines exceptions that are not excepted to be caught by the user program.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is the difference between throw and throws?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>throw</b></code> keyword is used to explicitly raise a exception within the program. On the contrary, the throws clause is used to indicate 
those exceptions that are not handled by a method. Each method must explicitly specify which exceptions does not handle, so the callers of that method can 
guard against possible exceptions. Finally, multiple exceptions are separated by a comma.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is the importance of finally block in exception handling?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A finally block will always be executed, whether or not an exception is actually thrown. Even in the case where the catch statement is missing and an 
exception is thrown, the finally block will still be executed. Last thing to mention is that the finally block is used to release resources like 
I/O buffers, database connections, etc.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What will happen to the Exception object after exception handling?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>Exception</b></code> object will be garbage collected in the next garbage collection.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. How does finally block differ from finalize() method?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A finally block will be executed whether or not an exception is thrown and is used to release those resources held by the 
application. Finalize is a protected method of the Object class, which is called by the Java Virtual Machine (JVM) just before an 
object is garbage collected.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What is an Exception in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In java, Exception is an object. Exceptions are created when an abnormal situations are arised in our program. Exceptions can be created by JVM or 
by our application code. All Exception classes are defined in <code><b>java.lang</b></code>. In otherwords we can say Exception as run time error.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. State some situations where exceptions may arise in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Accesing an element that does not exist in array.</li>
<li>Invalid conversion of number to string and string to number.<br/>
(NumberFormatException)</li>
<li>Invalid casting of class.<br/>
(Class cast Exception)</li>
<li>Trying to create object for interface or abstract class.<br/>
(Instantiation Exception)</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is Exception handling in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Exception handling is a mechanism what to do when some abnormal situation arises in program. When an 
exception is raised in program it leads to termination of program when it is not handled properly. The 
significance of exception handling comes here in order not to terminate a program abruptly and to 
continue with the rest of program normally. This can be done with help of Exception handling.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is an error in Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Error is the subclass of Throwable class in java. When errors are caused by our program we call that as 
Exception, but some times exceptions are caused due to some environment issues such as running out of 
memory. In such cases we can’t handle the exceptions. Exceptions which cannot be recovered are called 
as errors in java.<br/><br/>
<i>Example :</i> Out of memory issues.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What are advantages of Exception handling in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Separating normal code from exception handling code to avoid abnormal termination of program.</li>
<li>Categorizing in to different types of Exceptions so that rather than handling all exceptions with 
Exception root class we can handle with specific exceptions. It is recommended to handle exceptions with 
specific Exception instead of handling with Exception root class.</li>
<li><b>Call stack mechanism :</b> If a method throws an exception and it is not handled immediately, then that 
exception is propagated or thrown to the caller of that method. This propogation continues till it finds an 
appropriate exception handler ,if it finds handler it would be handled otherwise program terminates 
abruptly.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. In how many ways we can do exception handling in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can handle exceptions in either of the two ways :
<ol>
<li>By specifying try catch block where we can catch the exception.</li>
<li>Declaring a method with throws clause.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. List out five keywords related to Exception handling?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Try</li>
<li>Catch</li>
<li>throw</li>
<li>throws</li>
<li>finally</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. Explain try and catch keywords in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In try block we define all exception causing code. In java try and catch forms a unit. A catch block catches 
the exception thrown by preceding try block. Catch block cannot catch an exception thrown by another try 
block. If there is no exception causing code in our program or exception is not raised in our code jvm 
ignores the try catch block.<br/><br/>
<pre><code class="language-html hljs xml">try {
 // ...
} Catch(Exception e) {
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. Can we have try block without catch block?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Each try block requires atleast one catch block or finally block. A try block without catch or finally will 
result in compiler error. We can skip either of catch or finally block but not both.
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. Can we have multiple catch block for a try block?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In some cases our code may throw more than one exception. In such case we can specify two or more 
catch clauses, each catch handling different type of exception. When an exception is thrown jvm checks 
each catch statement in order and the first one which matches the type of exception is execution and 
remaining catch blocks are skipped.<br/><br/>
Try with multiple catch blocks is highly recommended in java.<br/><br/>
If try with multiple catch blocks are present the order of catch blocks is very important and the order 
should be from child to parent.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. Explain importance of finally block in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Finally block is used for cleaning up of resources such as closing connections, sockets etc. if try block 
executes with no exceptions then finally is called after try block without executing catch block. If there is 
exception thrown in try block finally block executes immediately after catch block.<br/><br/>
If an exception is thrown,finally block will be executed even if the no catch block handles the exception.
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. Can we have any code between try and catch blocks?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We shouldn’t declare any code between try and catch block. Catch block should immediately start after try block.<br/><br/>
<pre><code class="language-html hljs xml">try {
 // ...
} 
System.out.println("one line of code"); // illegal
Catch(Exception e) {
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. Can we have any code between try and finally blocks?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We shouldn’t declare any code between try and finally block. finally block should immediately start after 
catch block.If there is no catch block it should immediately start after try block.<br/><br/>
<pre><code class="language-html hljs xml">try{
//code
}
System.out.println(“one line of code”); // illegal
finally{
//
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. Can we catch more than one exception in single catch block?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
From Java 7, we can catch more than one exception with single catch block. This type of handling reduces the code duplication.<br/><br/>
<b>Note :</b> When we catch more than one exception in single catch block , catch parameter is implicity final. We cannot assign any value to catch 
parameter.<br/><br>
<b>Example:</b> 
<pre><code class="language-html hljs xml">catch(ArrayIndexOutOfBoundsException || ArithmeticException e) {
 // ...
}</code></pre>
In the above example, <code><b>e</b></code> is final we cannot assign any value or modify <code><b>e</b></code> in catch statement.
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. What are checked Exceptions?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>All the subclasses of Throwable class except error,Runtime Exception and its subclasses are checked exceptions.</li>
<li>Checked exception should be thrown with keyword throws or should be provided try catch block, else the program would not compile. We do get 
compilation error.<br/><br/>
<b>Examples :</b><br/><br/>
<ul>
<li>IOException</li>
<li>SQlException</li>
<li>FileNotFoundException</li>
<li>InvocationTargetException</li>
<li>CloneNotSupportedException</li>
<li>ClassNotFoundException</li>
<li>InstantiationException</li>
</ul>
</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. What are unchecked exceptions in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
All subclasses of RuntimeException are called unchecked exceptions. These are unchecked exceptions
because compiler does not checks if a method handles or throws exceptions.<br/><br/>
Program compiles even if we do not catch the exception or throws the exception.<br/><br/>
If an exception occurs in the program,program terminates . It is difficult to handle these exceptions because there may be many places causing exceptions.<br/><br/>
<b>Example :</b><br/><br/> 
<ul>
<li>Arithmetic Exception</li>
<li>ArrayIndexOutOfBoundsException</li>
<li>ClassCastException</li>
<li>IndexOutOfBoundException</li>
<li>NullPointerException</li>
<li>NumberFormatException</li>
<li>StringIndexOutOfBounds</li>
<li>UnsupportedOperationException</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. Explain differences between checked and Unchecked exceptions in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table"><thead><tr><th>Unchecked Exception</th><th>Checked Exception</th></tr></thead>
<tbody>
<tr>
 <td>All the subclasses of RuntimeException are called <code><b>Unchecked Exception</b></code>.</td>
 <td>All subclasses of Throwable class except RuntimeException are called as <code><b>Checked Exceptions</b></code>.</td>
</tr>
<tr>
 <td>Unchecked exceptions need not be handled at compile time.</td>
 <td>Checked Exceptions need to be handled at compile time.</td>
</tr>
<tr>
 <td>These exceptions arise mostly due to coding mistakes in our program.</td>
 <td></td>
</tr>
<tr>
 <td><code><b>ArrayIndexOutOfBoundsException</b></code>, <code><b>ClassCastException</b></code>, <code><b>IndexOutOfBoundException</b></code></td>
 <td><code><b>SqlException</b></code>, <code><b>FileNotFoundException</b></code>, <code><b>ClassNotFoundException</b></code></td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. What is default Exception handling in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When JVM detects exception causing code, it constructs a new exception handling object by including the
following information.<br/><br/>
<ol>
<li>Name of Exception.</li>
<li>Description about the Exception.</li>
<li>Location of Exception.</li>
</ol>
After creation of object by JVM it checks whether there is exception handling code or not. If there is
exception handling code then exception handles and continues the program. If there is no exception
handling code JVM give the responsibility of exception handling to default handler and terminates
abruptly.<br/><br/>
Default Exception handler displays description of exception,prints the stacktrace and location of exception
and terminates the program.<br/><br/>
<b>Note :</b> The main disadvantage of this default exception handling is program terminates abruptly.
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. Explain throw keyword in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Generally JVM throws the exception and we handle the exceptions by using try catch block. But there are 
situations where we have to throw userdefined exceptions or runtime exceptions. In such case we use 
throw keyword to throw exception explicitly.<br/><br/>
<b>Syntax :</b>
<pre><code class="language-html hljs xml">throw throwableInstance;</code></pre>
Throwable instance must be of type throwable or any of its subclasses.<br/><br/>
After the throw statement execution stops and subsequent statements are not executed. Once exception 
object is thrown JVM checks is there any catch block to handle the exception. If not then the next catch 
statement till it finds the appropriate handler. If appropriate handler is not found ,then default exception 
handler halts the program and prints the description and location of exception.<br/><br/>
In general, we use throw keyword for throwing userdefined or customized exception.
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. Can we write any code after throw statement?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
After throw statement jvm stop execution and subsequent statements are not executed. If we try to write 
any statement after throw we do get compile time error saying unreachable code.
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. Explain importance of throws keyword in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Throws statement is used at the end of method signature to indicate that an exception of a given type 
may be thrown from the method.<br/><br/>
The main purpose of throws keyword is to delegate responsibility of exception handling to the caller 
methods, in the case of checked exception.<br/><br/>
In the case of unchecked exceptions, it is not required to use throws keyword.<br/><br/>
We can use throws keyword only for throwable types otherwise compile time error saying incompatible types.
An error is unchecked , it is not required to handle by try catch or by throws.<br/><br/>
<b>Syntax :</b><br/><br/>
<pre><code class="language-html hljs xml">Class Test {
 public static void main(String args[]) throws IOException {
  // ...
 }
}</code></pre>
<b>Note :</b> The method should throw only checked exceptions and subclasses of checked exceptions.
It is not recommended to specify exception superclasses in the throws class when the actual exceptions
thrown in the method are instances of their subclass.
<!-- Answer ::: END -->
</div>
</div>

<div><b>28. Explain the importance of finally over return statement?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
finally block is more important than return statement when both are present in a program. For example if 
there is any return statement present inside try or catch block , and finally block is also present first 
finally statement will be executed and then return statement will be considered.
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. Explain a situation where finally block will not be executed?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Finally block will not be executed whenever jvm shutdowns. If we use <code><b>system.exit(0)</b></code> in try statement 
finally block if present will not be executed.
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. Can we use catch statement for checked exceptions?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If there is no chance of raising an exception in our code then we can’t declare catch block for handling 
checked exceptions .This raises compile time error if we try to handle checked exceptions when there is 
no possibility of causing exception.
<!-- Answer ::: END -->
</div>
</div>

<div><b>31. What are user defined exceptions?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To create customized error messages we use userdefined exceptions. We can create user defined
exceptions as checked or unchecked exceptions.<br/><br/>
We can create user defined exceptions that extend Exception class or subclasses of checked exceptions so
that userdefined exception becomes checked.<br/><br/>
Userdefined exceptions can extend RuntimeException to create userdefined unchecked exceptions.<br/><br/>
<b>Note :</b> It is recommended to keep our customized exception class as unchecked,i.e we need to extend
Runtime Exception class but not Excpetion class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>32. Can we rethrow the same exception from catch handler?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, we can rethrow the same exception from our catch handler. If we want to rethrow checked exception
from a catch block we need to declare that exception.
<!-- Answer ::: END -->
</div>
</div>

<div><b>33. Can we nested try statements in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, try statements can be nested. We can declare try statements inside the block of another try statement.
<!-- Answer ::: END -->
</div>
</div>

<div><b>34. Explain the importance of throwable class and its methods?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Throwable class is the root class for Exceptions. All exceptions are derived from this throwable class. The 
two main subclasses of Throwable are Exception and Error. The three methods defined in throwable class 
are :
<ol>
<li><b>void printStackTrace() :</b><br/><br/>
This prints the exception information in the following format :
Name of the exception, description followed by stack trace.</li>
<li><b>getMessage() :</b><br/><br/>
This method prints only the description of Exception.</li>
<li><b>toString() :</b><br/><br/>
It prints the name and description of Exception.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>35. Explain when ClassNotFoundException will be raised?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When JVM tries to load a class by its string name, and couldn’t able to find the class 
classNotFoundException will be thrown. An example for this exception is when class name is misspelled 
and when we try to load the class by string name hence class cannot be found which raises 
ClassNotFoundException.
<!-- Answer ::: END -->
</div>
</div>

<div><b>36. Explain when NoClassDefFoundError will be raised?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This error is thrown when JVM tries to load the class but no definition for that class is found 
NoClassDefFoundError will occur. The class may exist at compile time but unable to find at runtime. This 
might be due to misspelled classname at command line, or classpath is not specified properly , or the 
class file with byte code is no longer available.
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>