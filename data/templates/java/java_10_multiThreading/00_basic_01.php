<div><b>1. What is the difference between processes and threads?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div>A process is an execution of a program, while a Thread is a single execution sequence within a process. A process can contain 
multiple threads. A Thread is sometimes called a lightweight process.</div>
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Process</th><th>Thread</th></tr></thead>
<tbody>
 <tr>
  <td>Program in execution.</td>
  <td>Separate path of execution in program. One or more threads is called as process.</td>
 </tr>
 <tr>
  <td>Processes are heavy weight.</td>
  <td>Threads are light weight.</td>
 </tr>
 <tr>
  <td>Processes require separate address space.</td>
  <td>Threads share same address space.</td>
 </tr>
 <tr>
  <td>Interprocess communication is expensive.</td>
  <td>Interthread communication is less expensive compared to processes.</td>
 </tr>
 <tr>
  <td>Context switching from one process to another is costly.</td>
  <td>Context switching between threads is low cost.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. Explain different ways of creating a thread. Which one would you prefer and why?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are three ways that can be used in order for a Thread to be created:
<ul>
<li>A class may extend the <code><b>Thread</b></code> class.</li>
<li>A class may implement the <code><b>Runnable</b></code> interface.</li>
<li>An application can use the <code><b>Executor</b></code> framework, in order to create a thread pool.</li>
</ul>
The <code><b>Runnable</b></code> interface is preferred, as it does not require an object to inherit the <code><b>Thread</b></code> class. In case 
your application design requires multiple inheritance, only interfaces can help you. Also, the thread pool is very efficient and can be implemented and 
used very easily.

<!-- Answer ::: END -->
</div>
</div>

<div><b>3. Explain the available thread states in a high-level.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
During its execution, a thread can reside in one of the following states:
<ul>
<li><b>Runnable:</b> A thread becomes ready to run, but does not necessarily start running immediately.</li>
<li><b>Running:</b> The processor is actively executing the thread code.</li>
<li><b>Waiting:</b> A thread is in a blocked state waiting for some external processing to finish.</li>
<li><b>Sleeping:</b> The thread is forced to sleep.</li>
<li><b>Blocked on I/O:</b> Waiting for an I/O operation to complete.</li>
<li><b>Blocked on Synchronization:</b> Waiting to acquire a lock.</li>
<li><b>Dead:</b> The thread has finished its execution.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is the difference between a synchronized method and a synchronized block?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In Java programming, each object has a lock. A thread can acquire the lock for an object by using the synchronized keyword. 
The synchronized keyword can be applied in a method level (coarse grained lock) or block level of code (fine grained lock).
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. How does thread synchronization occurs inside a monitor ? What levels of synchronization can you apply?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The JVM uses locks in conjunction with monitors. A monitor is basically a guardian that watches over a sequence of synchronized 
code and ensuring that only one thread at a time executes a synchronized piece of code. Each monitor is associated with an object 
reference. The thread is not allowed to execute the code until it obtains the lock.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What’s a deadlock?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A condition that occurs when two processes are waiting for each other to complete, before proceeding. The result is that both processes wait endlessly.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. How do you ensure that N threads can access N resources without deadlock?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A very simple way to avoid deadlock while using N threads is to impose an ordering on the locks and force each thread to follow 
that ordering. Thus, if all threads lock and unlock the mutexes in the same order, no deadlocks can arise.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What is process?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A process is a program in execution.<br/><br/>
Every process have their own memory space.Process are heavy weight and requires their own address space. One or more threads make a process.
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is thread in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Thread is separate path of execution in program.<br/><br/>
<ol>
<li>Threads are Light weight.</li>
<li>they share the same address space.</li>
<li>Creating thread is simple when compared to process because creating thread requires less resources when compared to process</li>
<li>Threads exists in process. A process have atleast one thread.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is multitasking?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Multitasking means performing more than one activity at a time on the computer. Example, using spreadsheet and using calculator at same time.
<!-- Answer ::: END -->
</div>
</div>


<div><b>11.What are different types of multitasking?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are two different types of multitasking :
<ol>
<li>Process based multitasking.</li>
<li>Thread based multitasking.</li>
</ol>
<br/><br/>
<b>Process based multitasking :</b><br/><br/> It allows to run two or more programs concurrently. In process
based multitasking a process is the smallest part of code.<br/>
<i>Example :</i> Running Ms word and Ms powerpoint at a time.<br/><br/>
<b>Thread based multitasking :</b><br/><br/> It allows to run parts of a program to run concurrently.<br/>
<i>Example :</i> Formatting the text and printing word document at same time.<br/><br/>
Java supports thread based multitasking and provides built in support for Multi-Threading.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What are the benefits of multithreaded programming?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Multithreading enables to use idle time of cpu to another thread which results in faster execution of program. In single threaded environment each task 
has to be completed before proceeding to next task making CPU idle.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Explain thread in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Thread is independent path of execution with in a program.</li>
<li>A thread consists of three parts Virtual Cpu, Code and data.</li>
<li>At run time threads share code and data i.e they use same address space.</li>
<li>Every thread in java is an object of java.lang.Thread class.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>14. List Java API that supports threads?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>java.lang.Thread :</b> This is one of the way to create a thread. By extending <code><b>Thread</b></code> class and overriding
<code><b>run()</b></code> we can create thread in java.</li>
<li><b>java.lang.Runnable :</b> Runnable is an interface in java. By implementing runnable interface and overriding
<code><b>run()</b></code> we can create thread in java.</li>
<li><b>java.lang.Object :</b> <code><b>Object</b></code> class is the super class for all the classes in java. In object class we have three
methods <code><b>wait()</b></code>, <code><b>notify()</b></code>, <code><b>notifyAll()</b></code> that supports threads.</li>
<li><b>java.util.concurrent :</b> This package has classes and interfaces that supports concurrent programming.<br/>
<i>Example :</i> Executor interface, Future task class etc.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. Explain about main thread in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Main thread is the first thread that starts immediately after a program is started.<br/><br/>
Main thread is important because :
<ol>
<li>All the child threads spawn from main thread.</li>
<li>Main method is the last thread to finish execution.</li>
</ol>
When JVM calls main <code><b>method()</b></code> it starts a new thread. <code><b>Main()</b></code> method is temporarily stopped while the new thread 
starts running.
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. Explain creating threads by implementing Runnable class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This is first and foremost way to create threads . By implementing <code><b>Runnable</b></code> interface and implementing
<code><b>run()</b></code> method we can create new thread.<br/><br/>
<b><i>Method signature :</i></b> 
<pre><code class="language-html hljs xml">public void run() {
 // ...	
}</code></pre>
Run is the starting point for execution for another thread within our program.<br/><br/>
<b><i>Example :</i></b>
<pre><code class="language-html hljs xml">public class MyClass implements Runnable {
 @Override
 public void run() {
  // ...
 }
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. Explain creating threads by extending Thread class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can create a thread by extending <code><b>Thread</b></code> class. The class which extends Thread class must override the <code><b>run()</b></code> method.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">public class MyClass extends Thread {
 @Override
 public void run() {
  // Starting point of Execution
 }
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. Which is the best approach for creating thread?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The best way for creating threads is to implement <code><b>Runnable</b></code> interface.<br/><br/>
When we extend Thread class we can’t extend any other class.<br/><br/>
When we create thread by implementing <code><b>Runnable</b></code> interface we can implement <code><b>Runnable</b></code> interface. 
In both ways we have to implement <code><b>run()</b></code> method.
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. Explain the importance of thread scheduler in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Thread scheduler is part of JVM use to determine which thread to run at this moment when there are 
multiple threads. Only threads in runnable state are choosen by scheduler.<br/><br/>
Thread scheduler first allocates the processor time to the higher priority threads. To allocate 
microprocessor time in between the threads of the same priority, thread scheduler follows round robin fasion.
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. Explain the life cycle of thread?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Life cycle of Thread:</b><br/><br/>
A Thread can be in any of the five states :
<ol>
<li><b>New :</b><br/><br/> When the instance of thread is created it will be in New state.<br/>
<i>Example :</i> 
<pre><code class="language-html hljs xml">Thread t= new Thread();</code></pre>
In the above example <code><b>t</b></code> is in new state. The thread is created but not in active state to make it active we
need to call <code><b>start()</b></code> method on it.</li>
<li><b>Runnable state :</b><br/><br/> A thread can be in the runnable state in either of the following two ways :
<ol type="a">
<li>When the start method is invoked or</li>
<li>A thread can also be in runnable state after coming back from blocked or sleeping or waiting state.</li>
</ol>
</li>
<li><b>Running state :</b><br/><br/> If thread scheduler allocates cpu time, then the thread will be in running state.</li>
<li><b>Waited /Blocking/Sleeping state:</b><br/><br/>
In this state the thread can be made temporarily inactive for a short period of time. A thread can be in
the above state in any of the following ways:
<ol type="a">
<li>The thread waits to acquire lock of an object.</li>
<li>The thread waits for another thread to complete.</li>
<li>The thread waits for notification of other thread.</li>
</ol>
</li>
<li><b>Dead State :</b><br/><br/> A thread is in dead state when thread’s run method execution is complete. It dies
automatically when thread’s run method execution is completed and the thread object will be garbage
collected.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. Can we restart a dead thread in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we try to restart a dead thread by using start method we will get run time exception since the thread is not alive.
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. Can one thread block the other thread?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No one thread cannot block the other thread in java. It can block the current thread that is running.
<!-- Answer ::: END -->
</div>
</div>


<div><b>23. Can we restart a thread already started in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A Thread can be started in java using <code><b>start()</b></code> method in java. If we call start method second time once it is started it will cause 
<code><b>RunTimeException(IllegalThreadStateException)</b></code>. A Runnable thread cannot be restarted.
<!-- Answer ::: END -->
</div>
</div>


<div><b>24. What happens if we don’t override run method?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we don’t override run method .Then default implementation of Thread class <code><b>run()</b></code> method will be executed and hence the thread 
will never be in <code><b>Runnable</b></code> state.
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. Can we overload run() method in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can overload run method but Thread class start method will always cal run method with no arguments. But the overloaded method will not be called by 
start method we have to explicitly call this <code><b>start()</b></code> method.
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. What is a lock or purpose of locks in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Lock also called monitor is used to prevent access to a shared resource by multiple threads.<br/><br/>
A lock is associated to shared resource. Whenever a thread wants to access a shared resource if must first acquire a lock . If already a lock has been 
acquired by other it can’t access that shared resource. At this moment the thread has to wait until another thread releases the lock on shared resource. 
To lock an object we use synchronization in java.<br/><br/>
A lock protects section of code allowing only one thread to execute at at a time.
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. In how many ways we can do synchronization in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are two ways to do synchronization in java:
<ol>
<li>Synchronized methods</li>
<li>Synchronized blocks</li>
</ol>
To do synchronization we use synchronize keyword.
<!-- Answer ::: END -->
</div>
</div>

<div><b>28. What are synchronized methods?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we want a method of object to be accessed by single thread at a time we declare that method with
synchronized keyword.<br/><br/>
<b>Syntax :</b><br/><br/>
<pre><code class="language-html hljs xml">public synchronized void methodName() {
 // ...
}</code></pre>
To execute synchronized method first lock has to be acquired on that object. Once synchronized method is called lock will be automatically acquired on that 
method when no other thread has lock on that method. Once lock has been acquired then synchronized method gets executed. Once synchronized
method execution completes automatically lock will be released. The prerequisite to execute a synchronized method is to acquire lock before method execution. 
If there is a lock already acquired by any other thread it waits till the other thread completes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. When do we use synchronized methods in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If multiple threads tries to access a method where method can manipulate the state of object , in such scenario we can declare a method as synchronized.
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. When a thread is executing synchronized methods , then is it possible to execute other synchronized methods simultaneously by other threads?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No it is not possible to execute synchronized methods by other threads when a thread is inside a synchronized method.
<!-- Answer ::: END -->
</div>
</div>

<div><b>31. When a thread is executing a synchronized method , then is it possible for the same thread to access other synchronized methods of an object?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes it is possible for thread executing a synchronized method to execute another synchronized method of
an object.
<pre><code class="language-html hljs xml">public synchronized void methodName() {
}</code></pre>
To execute synchronized method first lock has to be acquired on that object. Once synchronized method 
is called lock will be automatically acquired on that method when no other thread has lock on that 
method. once lock has been acquired then synchronized method gets executed. Once synchronized 
method execution completes automatically lock will be released. The prerequisite to execute a 
synchronized method is to acquire lock before method execution. If there is a lock already acquired by 
any other thread it waits till the other thread completes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>32. What are synchronized blocks in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Synchronizing few lines of code rather than complete method with the help of synchronized keyword are called <code><b>synchronized blocks</b></code>.<br/><br/>
<b>Syntax :</b>
<pre><code class="language-html hljs xml">synchronized (object reference){ 
 // code
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>33. When do we use synchronized blocks and advantages of using synchronized blocks?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If very few lines of code requires synchronization then it is recommended to use synchronized blocks. The main advantage of synchronized blocks over 
synchronized methods is it reduces the waiting time of threads and improves performance of the system.
<!-- Answer ::: END -->
</div>
</div>


<div><b>34. What is class level lock?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Acquiring lock on the class instance rather than object of the class is called class level lock. The difference between class level lock and object level 
lock is in class level lock lock is acquired on class .class instance and in object level lock ,lock is acquired on object of class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>35. Can we synchronize static methods in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Every class in java has a unique lock associated with it. If a thread wants to execute static synchronize 
method it need to acquire first class level lock. When a thread was executing static synchronized method 
no other thread can execute static synchronized method of class since lock is acquired on class. 
But it can execute the following methods simultaneously :<br/><br/>
<ol>
<li>Normal static methods.</li>
<li>Normal instance methods.</li>
<li>Synchronize instance methods.</li>
</ol>
<pre><code class="language-html hljs xml">synchronized(Classname.class) {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>36. Can we use synchronized block for primitives?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Synchronized blocks are applicable only for objects if we try to use synchronized blocks for primitives we get compile time error.
<!-- Answer ::: END -->
</div>
</div>

<div><b>37. What are thread priorities and importance of thread priorities in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When there are several threads in waiting, thread priorities determine which thread to run. In java 
programming language every thread has a priority. A thread inherits priority of its parent thread. By 
default thread has normal priority of 5. Thread scheduler uses thread priorities to decide when each 
thread is allowed to run. Thread scheduler runs higher priority threads first.
<!-- Answer ::: END -->
</div>
</div>

<div><b>38. Explain different types of thread priorities?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Every thread in java has priorities in between 1 to 10. By default priority is 5 (Thread.NORM_PRIORITY). <br/><br/>
The maximum priority would be 10 and minimum would be 1.<br/><br/>
Thread class defines the following constants(static final variables) to define properties.
<ul>
<li>Thread. MIN_PRIORITY = 1;</li>
<li>Thread.NORM_PRIORITY=5;</li>
<li>Thread. MAX_PRIORITY=10;</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>39. How to change the priority of thread or how to set priority of thread?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Thread class has a set method to set the priority of thread and get method to get the priority of the thread.
<pre><code class="language-html hljs xml">final void setPriority(int value);</code></pre>
The <code><b>setPriority()</b></code> method is a request to jvm to set the priority. JVM may or may not oblige the request.
We can get the priority of current thread by using getPriority() method of Thread class.
<pre><code class="language-html hljs xml">final int getPriority() {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>40. If two threads have same priority which thread will be executed first?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We are not guaranteed which thread will be executed first when there are threads with equal priorities in
the pool. It depends on thread scheduler to which thread to execute. The scheduler can do any of the
following things :<br/><br/>
<ol>
<li>It can pick any thread from the pool and run it till it completes.</li>
<li>It can give equal opportunity for all the threads by time slicing.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>41. What all methods are used to prevent thread execution?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are three methods in Thread class which prevents execution of thread.
<ol>
<li>yield()</li>
<li>join()</li>
<li>sleep()</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>42. Explain yield() method in thread class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yield() method makes the current running thread to move in to runnable state from running state giving 
chance to remaining threads of equal priority which are in waiting state. yield() makes current thread to 
sleep for a specified amount of time.There is no guarantee that moving a current running thread from 
runnable to running state. It all depends on thread scheduler it doesn’t gurantee anything.<br/><br/>
Calling yield() method on thread does not have any affect if object has a lock. The thread does’nt lose
any lock if it has acquired a lock earlier.
<pre><code class="language-html hljs xml">public static native void yield() {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>43. Is it possible for yielded thread to get chance for its execution again?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yield() causes current thread to sleep for specified amount of time giving opportunity for other threads of
equal priority to execute. Thread scheduler decides whether it get chance for execution again or not. It all
depends on mercy of thread scheduler.
<!-- Answer ::: END -->
</div>
</div>

<div><b>43. Explain the importance of join() method in thread class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A thread can invoke the join() method on other thread to wait for other thread to complete its
execution. Assume we have two threads, t1 and t2 threads . A running thread t1 invokes join() on
thread t2 then t1 thread will wait in to waiting state until t2 completes. Once t2 completes the execution,
t1 will continue.<br/><br/>
join() method throws Interrupted Exception so when ever we use join() method we should handle
Interrrupted Exception by throws or by using try catch block.
<pre><code class="language-html hljs xml">public final void join() throws InterruptedException {
 // ...
}</code></pre>

<pre><code class="language-html hljs xml">public final synchronized void join(long millis) throws InterruptedException {
 // ...
}</code></pre>

<pre><code class="language-html hljs xml">public final synchronized void join(long millis, int nanos) throws InterruptedException {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>44. Explain purpose of sleep() method in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
sleep() method causes current running thread to sleep for specified amount of time . sleep() method is the minimum amount of the time the current thread 
sleeps but not the exact amount of time.
<pre><code class="language-html hljs xml">public static native void sleep(long millis) throws InterruptedException {
 // ...
}</code></pre>
<pre><code class="language-html hljs xml">public static void sleep(long millis, int nanos) throws InterruptedException {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>45. Assume a thread has lock on it, calling sleep() method on that thread will release the lock?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Calling sleep() method on thread which has lock does’nt affect. Lock will not be released though the thread sleeps for a specified amount of time.
<!-- Answer ::: END -->
</div>
</div>

<div><b>46. Can sleep() method causes another thread to sleep?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No sleep() method causes current thread to sleep not any other thread.
<!-- Answer ::: END -->
</div>
</div>

<div><b>47. Explain about interrupt() method of thread class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Thread class interrupt() method is used to interrupt current thread or another thread. It doesnot mean 
the current thread to stop immediately, it is polite way of telling or requesting to continue your present 
work. That is the reason we may not see the impact of interrupt call immediately.<br/><br/>
Initially thread has a boolean property(interrupted status) false. So when we call interrupt() method 
status would set to true. This causes the current thread to continue its work and does not have impact 
immediately.<br/><br/>
If a thread is in sleeping or waiting status (i.e thread has executed wait () or sleep() method) thread gets
interrupted it stops what it is doing and throws an interrupted exception. This is reason we need to handle
interrupted exception with throws or try/ catch block.
<!-- Answer ::: END -->
</div>
</div>


<div><b>48. Explain about interthread communication and how it takes place in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Usually threads are created to perform different unrelated tasks but there may be situations where they
may perform related tasks. Interthread communication in java is done with the help of following three
methods :<br/><br/>
<ol>
<li>wait()</li>
<li>notify()</li>
<li>notifyAll()</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>49. Explain wait(), notify() and notifyAll() methods of object class ?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>wait() :</b> wait() method() makes the thread current thread sleeps and releases the lock until some other
thread acquires the lock and calls notify().</li>
<li><b>notify() :</b> notify() method wakes up the thread that called wait on the same object.</li>
<li><b>notfiyAll() :</b> notifyAll() method wakes up all the threads that are called wait() on the same object. The
highest priority threads will run first.</li>
</ul>
All the above three methods are in object class and are called only in synchronized context.<br/><br/>
All the above three methods must handle InterruptedException by using throws clause or by using try catch clause.
<!-- Answer ::: END -->
</div>
</div>

<div><b>50. Explain why wait(), notify() and notifyAll() methods are in Object class rather than in thread class?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
First to know why they are in object class we should know what <code><b>wait()</b></code>, <code><b>notify()</b></code>, <code><b>notifyAll()</b></code> methods do.<br/><br/>
<code><b>wait()</b></code>, <code><b>notify()</b></code>, <code><b>notifyAll()</b></code> methods are object level methods they are called on same 
object.wait(), notify(), notifyAll() are called on an shared object so to they are kept in object class rather than thread class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>51. Explain IllegalMonitorStateException and when it will be thrown?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
IllegalMonitorStateException is thrown when wait(), notify() and notifyAll() are called in non synchronized context. Wait(), notify(),notifyAll() must always 
be called in synchronized context other wise we get this run time exception.
<!-- Answer ::: END -->
</div>
</div>

<div><b>52. when wait(), notify(), notifyAll() methods are called does it releases the lock or holds the acquired lock?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
wait(), notify(), notifyAll() methods are always called in synchronized context. When these methods are called in synchronized context.<br/><br/>
So when they enter first in synchronized context thread acquires the lock on current object. When wait(), notify(), notifyAll() methods are called lock 
is released on that object.
<!-- Answer ::: END -->
</div>
</div>

<div><b>53. Explain which of the following methods releases the lock when yield(), join(),sleep(),wait(),notify(), notifyAll() methods are executed?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Method</th><th>Releases lock (Yes or No)</th></tr></thead>
<tbody>
 <tr><td>yield()</td><td>No</td></tr>
 <tr><td>sleep()</td><td>No</td></tr>
 <tr><td>join()</td><td>No</td></tr>
 <tr><td>wait()</td><td>Yes</td></tr>
 <tr><td>notify()</td><td>Yes</td></tr>
 <tr><td>notifyAll()</td><td>Yes</td></tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>


<div><b>54. What are Thread groups?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Thread Groups are group of threads and other thread groups. It is a way of grouping threads so that 
actions can be performed on set of threads for easy maintenance and security purposes.<br/><br/>
For example we can start and stop all thread groups. We rarely use thread group class. By default all the 
threads that are created belong to default thread group of the main thread. Every thread belongs to a 
thread group. Threads that belong to a particular thread group cannot modify threads belonging to 
another thread group.
<!-- Answer ::: END -->
</div>
</div>

<div><b>55. What are Thread local variables?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Thread local variables are variables associated to a particular thread rather than object. We declare
ThreadLocal object as private static variable in a class. Everytime a new thread accesses object by using
getter or setter we are accesing copy of object. Whenever a thread calls get or set method of
ThreadLocal instance a new copy is associated with particular object.
<!-- Answer ::: END -->
</div>
</div>

<div><b>56. What are Daemon threads in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Daemon threads are threads which run in background. These are service threads and works for the
benefit of other threads. Garbage collector is one of the good example for daemon threads.
By default all threads are non daemon. Daemon nature of a thread can be inherited. If parent thread is
daemon , child thread also inherits daemon nature of thread.
<!-- Answer ::: END -->
</div>
</div>

<div><b>57. How to make a non daemon thread as daemon?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
By default all threads are non daemon. We can make non daemon nature of thread to daemon by using 
setDaemon() method. The important point to note here we can call setDaemon() only before start() 
method is called on it. If we call setDaemon() after start() method an IllegalThreadStateException will be 
thrown.
<!-- Answer ::: END -->
</div>
</div>

<div><b>58. Can we make main() thread as daemon?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Main thread is always non daemon. We cannot change the non daemon nature of main thread to daemon.
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>