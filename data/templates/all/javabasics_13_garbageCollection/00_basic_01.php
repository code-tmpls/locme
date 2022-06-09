
<div class="appQuestion"><b>100. What is Garbage Collection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java has an internal mechanism called Garbage collection to reclaim the memory of unused projects at run time. Garbage collection is also 
known as Automatic Memory Management.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>101. Why Java provides Garbage Collector?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, there are no pointers. Memory management and allocationis done by JVM. Since memory allocation is automated, after sometime JVM may go low on 
memory. At that time, JVM has to free memory from unused objects. To help with the process of reclaiming memory, Java provides an automated process 
called Garbage Collector.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>102. What is the purpose of System.gc() inJava?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides two methods : <code><b>System.gc()</b></code> and <code><b>Runtime.gc()</b></code> to request the JVM to run the garbage collection. 
By using these methods, programmers can explicitly send request for Garbage Collection. But JVM process can reject this request and wait for some time 
before running the GC.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>103. How does Garbage Collection work in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java has an automated process called Garbage Collector for Memory Management. It is a daemon in JVM that monitors the memory usage and performs memory 
cleanup. Once JVM is low on memory, GC process finds the unused objects that are not referenced by other objects. These unused objects are cleaned up 
by Garbage Collector daemon in JVM.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>104. When does an object become eligible for Garbage Collection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An object can be Garbage Collected by JVM, if it is not reachable. There are two cases for deciding eligibility of objects for Garbage Collection :
<ol>
<li>An Object/instance that cannot be reached by a live thread.</li>
<li>A set of circularly referenced instances that cannot be reached by any other instance outside that set.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>105. Why do we use finalize() method in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides finalize() method to perform any cleanup before Garbage Collection. This method is in Object class, and it is invoked by JVM internally. 
Developers are free to implement this method for any custom cleanup in case of Garbage Collection.<br/><br/> If an Object is not Garbage Collected, then this 
method may not becalled.<br/><br/> This method is never invoked more than once by JVM.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>106. What are the different types of References in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, there are four types of references :
<ol>
<li>Strong Reference</li>
<li>Soft Reference</li>
<li>Weak Reference</li>
<li>Phantom Reference</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>107. How can we reference an unreferenced object again?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can provide implementation in <code><b>finalize()</b></code> method to referenceand unreferenced object.<br/><br/> 
For an unreferenced object, <code><b>finalize()</b></code> method is called at the time of Garbage Collection. At this time, Object can pass its 
reference <code><b>this</b></code> to finalize() method and revive itself.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>108. What kind of process is the Garbage collector thread?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Garbage Collection is a Daemon process in JVM. It is an internal process that keep checking Memory usage and cleans up the memory.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>109. What is the purpose of the Runtime class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The purpose of the Runtime class is to provide access to the Java Runtime system. This class provides certain important methods like : 
<ol>
<li><b>Runtime.freeMemory() -</b> This method returns the value offree memory in JVM.</li>
<li><b>Runtime.maxMemory() -</b> This method returns the value ofmaximum memory that JVM can use.</li>
<li><b>Runtime.gc() -</b> This method can invoke garbage collection.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>110. How can we invoke an external process in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides the method <code><b>Runtime.getRuntime().exec()</b></code> to invoke an external process from JVM.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>111. What are the uses of Runtime class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Runtime class in Java provides following benefits:
<ol>
<li>It allows to read data via key board.</li>
<li>It can use system properties and environment variables.</li>
<li>It helps in running non-java programs from within a javaapplication.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>