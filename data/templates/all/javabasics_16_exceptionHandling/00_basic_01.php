
<div class="appQuestion"><b>132. What is Exception Handling in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides Exception Handling mechanism to handle Runtime errors that occur in JVM. There are checked exceptions in aprogram that we expect to occur 
in certain situations.<br/><br/> Exception handling mechanism catches these checked exceptions and takes relevant actions.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>133. In Java, what are the differences between a Checked and Unchecked?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Checked Exceptions extend Throwable class, but they do not extend RuntimeException or Error classes. UncheckedException extend 
RuntimeException class.<br/><br/> 
Checked Exceptions are checked at compile time in Java. Unchecked Exceptions happen at Runtime, so they are not checked at compile time.<br/><br/> 
IOException, SQLException etc. are examples of CheckedExceptions. NullPointerException, ArithmeticException etc. are examples of Unchecked Exceptions.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>134. What is the base class for Error and Exception classes in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Error as well as Exception class is derived from Throwable class in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>135. What is a finally block in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides a finally block with a try block. This is an optional block. But finally block is always executed after the execution of try block.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>136. What is the use of finally block in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As per Java specification, a finally block is always executed, whether an error occurs or not, whether an exception is handled or not. It helps in doing 
the cleanup like - Rollback Transaction, CloseConnection, Close a file etc.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>137. Can we create a finally block without creating a catch block?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. A finally block can follow a try block or catch block. So we can defined a finally block just after a try block.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>138. Do we have to always put a catch block after a try block?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java does not enforce the rule to put a catch block after try block. We can write catch block or finally block after a try block. Any exception that 
we want to catch is mentioned in catch block.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>139. In what scenarios, a finally block will not be executed?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are two main scenarios in which finally block is not executed : 
<ol>
<li>Program exits by calling system.exit() call.</li>
<li>A fatal error causes JVM to crash.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>140. Can we re-throw an Exception in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, Java allows to re-throw an Exception.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>141. What is the difference between throw and throws in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides throw keyword to throw an exception from a method or a static block. Java provides throws keyword to mention the probable exception 
thrown by a method in its declaration.<br/><br/> We use throw to explicitly throw an exception. We used throws to declare an exception in 
method definition.<br/><br/>  
We cannot propagate checked exceptions with throw only. But checked exceptions can be propagated with throws keyword.<br/><br/> A throw call is followed by 
an instance. Class or Exception follows a throws keyword.<br/><br/> Call to throw occurs within a method. throws is just used with method 
signature.<br/><br/> We can throw only one exception at a time. But we can mention as many exceptions in throws clause.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>142. What is the concept of Exception Propagation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Exception Propagation, uncaught exceptions are propagated in the call stack until stack becomes empty. This propagation is 
called Exception Propagation.<br/><br/> 
Let say an exception propagates from one method to another method. A() calls B(), which calls C(), which calls D(). And if D() throws an exception, 
the exception will propagate from D to C to B to A,unless one of the methods catches the exception.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>143. When we override a method in a Child class, can we throw an additional Exception that is not thrown by the Parent class method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, Java allows us to throw additional Exception in a child class, but the additional exception should be an unchecked exception (RuntimeException).
<!-- Answer ::: END -->
</div>
</div>
