
<div class="appQuestion"><b>245. What is a Thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A thread in Java is a light-weight process that runs within another process or thread.<br/><br/> 
It is an independent path of execution in an application. JVM gives each thread its own method-call stack.<br/><br/> 
When we start JVM, Java starts one thread. This thread calls the main method of the class passed in argument to java call.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>246. What is the priority of a Thread and how it is used in scheduling?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, every Thread has a priority. This priority is specified as a number between 1 to 10.<br/><br/> 
Scheduler in Java schedules different threads based on the priority of a thread. It is also known as pre-emptive scheduling.<br/><br/> 
The thread with higher priority gets preference in execution over a thread with lower priority.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>247. What is the default priority of a thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, a new thread gets the same priority as the priority of the parent thread that creates it.<br/><br/> 
Default priority of a thread is 5 (NORM_PRIORITY).
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>248. What are the three different priorities that can be set on a Thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can set following three priorities on a Thread object in Java : 
<ol>
<li><b>MIN_PRIORITY :</b> This is the minimum priority that athread can have.</li>
<li><b>NORM_PRIORITY :</b> This is the default priority that isassigned to a thread.</li>
<li><b>MAX_PRIORITY :</b> This is the maximum priority that athread can have.</li>
</ol>
Default priority of a thread is 5 NORM_PRIORITY. The value of MIN_PRIORITY is 1 and the value of MAX_PRIORITY is 10
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>249. What is the purpose of join() method in Thread class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, Thread Scheduler controls thread scheduling. But we can use join() method on a thread to make current thread to wait for another thread to 
finish. When we use join(), the current thread stops executing. It wait for the thread on which join() is called to finish. This makes sure that 
current thread will continue only after the thread it joined finished running.<br/><br/> 
Consider following example : 
<pre><code class="language-html hljs xml">public class ThreadJoin { 
 Thread importantThread = new Thread(new Runnable() { 
	public void run () { 
	 //do something
	}
 });
 Thread currentThread = new Thread(new Runnable() { 
	public void run () { 
	 //do something
	}
 });
 importantThread.start(); // Line 1
 importantThread.join(); // Line 2
 currentThread.start(); // Line 3
}</code></pre> 
In the above example, main thread is executing.<br/><br/> 
On Line 1, a new thread called important Thread is ready to run. But at Line 2, main thread joins the important Thread. Now it lets important Tread 
to finish and then it moves to Line 3. So current Thread at Line 3 will not start till the important Thread has finished.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>250. What is the fundamental difference between wait() and sleep() methods?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main difference between <code><b>wait()</b></code> and <code><b>sleep()</b></code> is that wait is an Object level method, whereas 
<code><b>sleep()</b></code> is a static method in Thread class.<br/><br/> 
A waiting thread can be woken up by another thread by calling <code><b>notify()</b></code> on the monitor which is being waited on. But a sleeping thread 
cannot be woken up.<br/><br/> 
A <code><b>wait()</b></code> and <code><b>notify()</b></code> has to happen within the same block that is synchronized on the monitor object.<br/><br/> 
When we call <code><b>wait()</b></code> the current thread releases the monitor andgoes to waiting state. Then another thread calls notify() to 
wake it up.<br/><br/> In case of <code><b>sleep()</b></code> current thread does not release the monitor orlocks. It just sleeps for some pre-defined 
time period.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>251. Is it possible to call run() method instead of start() on a thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. We can call <code><b>run()</b></code> method of a thread. But it does not work as a separate thread. It will just work as a normal object in main 
thread and there will not be context switching between the threads.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>252. How Multi-threading works in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides support for Multithreading. In a Multithreading environment, one process can execute multiple threads in parallel at the same time.<br/><br/> 
In Java, you can create process and then create multiple threads from that process. Each process can execute in parallel to perform independent tasks.<br/><br/> 
Java provides methods like - <code><b>start()</b></code>, <code><b>notify()</b></code>, <code><b>wait()</b></code>, <code><b>sleep()</b></code> etc. 
to maintain a multi-threading environment.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>253. What are the advantages of Multithreading?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main advantages of Multithreading are : 
<ol>
<li><b>Improved performance :</b> We can improve performance of ajob by Multi-threading.</li>
<li><b>Simultaneous access to Multiple Applications :</b> We can access multiple applications from a process by doing multithreading.</li>
<li><b>Reduced number of Servers required :</b> With Multi-threading we need lesser number of servers, since one process can spawn multiple threads.</li>
<li><b>Simplified Coding :</b> In certain scenarios, it is easier to code multiple threads than managing it from same thread.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>254. What are the disadvantages of Multithreading?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are certain downsides to Multithreading. These are : 
<ol>
<li><b>Difficult to Debug :</b> Multithreading code is difficult to debug in case of an issue.</li>
<li><b>Difficult to manage concurrency :</b> Due to multiple threads, we may experience different kinds of issues.</li>
<li><b>Difficulty of porting code :</b> It is difficult to convert existing single threaded code into multi-threading code.</li>
<li><b>Deadlocks :</b> In case of multi-threading we can experience deadlocks in threads that are waiting for same resource.</li>7
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>255. What is a Thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, a thread is a light-weight process that runs within another process or thread. It is an independent path of execution in an application. 
Each thread runs in a separate stack frame.<br/><br/> By default Java starts one thread when the main method of a class is called.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>256. What is a Thread’s priority and how it is used in scheduling?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, every Thread has a priority. This priority is specified as an integer value. The priority value is used in scheduling to pick up the thread 
with higher priority for execution. The threads with higher priority get more preference in execution than the threads with lower priority.<br/><br/>  
The task scheduler schedules the higher priority threads first,followed by the lower priority threads.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>257. What are the differences between Pre-emptive Scheduling Scheduler and Time Slicing Scheduler?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Pre-emptive scheduling, the highest priority task will keep gettingtime to execute until it goes to waiting state or dead state or a task with 
higher priority comes into queue for scheduling.<br/><br/> In Time slicing scheduling, every task gets a predefined slice of time for execution, and 
then it goes to the pool of tasks ready for execution. The scheduler picks up the next task for execution, basedon priority and various other factors.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>258. Is it possible to call run() method instead of start() on a thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. We can call <code><b>run()</b></code> method of a thread. But it does not work as a separate thread. It will just work as a normal object in main 
thread and there will not be context-switching between the threads.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>259. How will you make a user thread into daemon thread if it has already started?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. We cannot make a user thread to daemon thread once it has already started. If we do it by calling <code><b>setDaemon()</b></code>, it will throw 
IllegalThreadStateException.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>260. Can we start a thread two times in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. We can call <code><b>start()</b></code> method only once on a thread in Java. If wecall it twice, it will give us exception.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>261. In what scenarios can we interrupt a thread?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can interrupt a thread if we want to wake it up from the sleep or wait state.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>262. In Java, is it possible to lock anobject for exclusive use by a thread?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. We can use synchronized block to lock an object. The locked object is inaccessible to any other thread. Only the thread that has locked 
it can access it.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>263. How notify() method is different from notifyAll() method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, <code><b>notify()</b></code> method is used to unblock a specific thread that is in waiting stated. Whereas, <code><b>notifyAll()</b></code> 
method is used to unblock all the threads that are in waiting state.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>264. What is a daemon thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A daemon thread in Java is a low priority thread that does not prevent the JVM from exiting when the program finishes. The thread keeps running. 
Garbage Collection is an example of daemon thread.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>265. How can we make a regular thread Daemon thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can call <code><b>setDaemon(boolean)</b></code> method to change a thread to daemon thread before the thread starts.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>266. How will you make a user thread into daemon thread if it has already started?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. We cannot make a user thread to daemon thread once it has already started. If we do it by calling <code><b>setDaemon()</b></code>, it will 
throw IllegalThreadStateException.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>267. Can we start a thread two times in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. We can call <code><b>start()</b></code> method only once on a thread in Java. If we call it twice, it will give us exception.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>268. What is a Shutdown hook in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The shutdown hook is a thread that is invoked implicitly by JVMjust before the shut down. It can be used to clean up unused resources etc.<br/><br/> 
We can use <code><b>java.lang.Runtime.addShutdownHook(Thread hook)</b></code> method to register a new virtual-machine shutdown hook.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>269. What is synchronization in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The concept of Synchronization in Java is used in Multi-threading programming.<br/><br/> 
It is a feature in Java that helps in controlling the access of multiple threads to a shared resource.<br/><br/> 
It is used to prevent Deadlock between multiple threads.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>270. What is the purpose of Synchronized block in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Synchronized block has many uses in Java multi-threading environment. Some of the uses are:
<ul>
<li>It can prevent thread interference.</li>
<li>It is also used to avoid memory inconsistency issues.</li>
<li>In general, scope of synchronized block is smaller than the scope of a method.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>271. What is static synchronization?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can make a static method as synchronized in Java. Adding synchronized keyword to a static method can do this.<br/><br/> 
In static synchronization, the lock is on class not on object.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>272. What is a Deadlock situation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Deadlock is a situation in which two or more threads are waiting on each other to release a resource. 
Each thread is waiting for aresource that is held by the other waiting thread.<br/><br/> 
At times there is a circular wait when more than two threads are waiting on each other’s resources.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>273. What is the meaning of concurrency?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Concurrency is the ability of a program to execute several programs simultaneously. This is achieved by distributing computations over multiple 
CPU cores of a machine or even over different machines within the same network.<br/><br/> 
It can increase the speed of execution of the overall program in multi-processor or multi-core system.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>274. What is the main difference between process and thread?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As such both process and thread are independent sequences of execution.<br/><br/> 
The main difference is that a thread runs in a shared memory space, where as a process runs in its own memory space.<br/><br/> 
A process runs the execution in an environment provided by the operating system. A process has its own set of private resources (e.g. memory, 
open files, etc.).<br/><br/> 
A thread lives within a process and shares the resources like-memory, open files etc. with the other threads of the same process.<br/><br/> 
This ability to share resources between different threads makes thread more suitable for tasks where performance is a significant factor.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>275. What is a process and thread in the context of Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, a process refers to the running of Java Virtual Machine (JVM). But a thread lives within a JVM and it can be created or stopped by 
the Java application at runtime.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>276. What is a Scheduler?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A scheduler is a program that is the implementation of a scheduling algorithm to manage access of processes and threads to limited resource 
like CPU or an I/O channel.<br/><br/> The goal of most scheduling algorithms is to provide load balancing for the available processes/threads and 
to guarantee that each process/thread will get a reasonable time frame to access the requested resource exclusively.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>277. What is the minimum number of Threads in a Java program?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a JVM, each Java program is executed within the main process that starts with java.exe. Therefore each Java application has atleast one thread.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>278. What are the properties of a Java thread?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Each Java thread has following properties : 
<ol>
<li><b>Identifier :</b> An identifier of type long that is unique within the JVM</li>
<li><b>Name :</b> A name of type String</li>
<li><b>Priority :</b> Priority of type int</li>
<li><b>State :</b> A state of type java.lang.Thread.State</li>
<li><b>Group :</b> A thread group the thread belongs to</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>279. What are the different states of a Thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Following are the different states of a Thread in Java : 
<ol>
<li><b>New :</b> In the New state the thread has not yet.</li>
<li><b>Runnable :</b> A thread executing in the JVM is in Runnable state.</li>
<li><b>Blocked :</b> A thread waiting for a monitor lock is in Blocked state.</li>
<li><b>Waiting :</b> A thread waiting indefinitely for another thread to perform a particular action is in Waiting state.</li>
<li><b>Timed_waiting :</b> A thread waiting for another thread toperform an action for up to a specified waiting time is 
<code><b>inTimed_waiting</b></code> state.</li>
<li><b>Terminated :</b> A thread that has exited is in Terminated state.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>280. How will you set the priority of a thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The priority of a thread in Java can be set by using <code><b>setPriority(int priority)</b></code> method.<br/><br/> 
We can use constant <code><b>Thread.MAX_PRIORITY</b></code> to set the maximum priority of a thread.<br/><br/> 
We can use constant <code><b>Thread.MIN_PRIORITY</b></code> to set the minimumpriority of a thread.<br/><br/> 
Or we can use constant <code><b>Thread.NORM_PRIORITY</b></code> to set the default priority of a thread.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>281. What is the purpose of Thread Groups in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, every thread belongs to a group of threads.<br/><br/> 
The JDK class <code><b>java.lang.ThreadGroup</b></code> provides methods to handlea whole group of Threads.<br/><br/> 
With the help of these methods we can interrupt all threads of a group or set the maximum priority of all threads of a group.<br/><br/> 
So a thread group is used for taking collective actions on a group of threads.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>282. Why we should not stop athread by calling its stop() method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The <code><b>stop()</b></code> method in Thread class is a deprecated method. Its use is not recommended.<br/><br/> 
When we call <code><b>stop()</b></code> method, the thread unlocks all monitors that it has acquired. If any locked object was in an inconsistent 
state, this state gets visible to all other threads.<br/><br/> It can cause unexpected behavior when other threads work on this inconsistent object.<br/><br/> 
So calling <code><b>stop()</b></code> method to stop a thread is not advisable.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>283. How will you create a Thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are two main ways to create a thread in Java :
<ol>
<li><b>Extend Thread class :</b> We can extend <code><b>java.lang.Thread</b></code> class and implement <code><b>run()</b></code> method. On calling 
<code><b>start()</b></code> method it will start a new thread.</li>
<li><b>Implement Runnable interface :</b> We can implement <code><b>java.lang.Runnable</b></code> interface and pass the implemented object to the 
constructor of <code><b>java.lang.Thread</b></code> class. On calling <code><b>start()</b></code> it will start a new thread.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>284. How can we stop a thread in the middle of execution in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use a volatile variable as an indicator to stop the thread.<br/><br/> 
We can create a volatile reference pointing to the current thread.This reference can be set to null by other threads to flag that the current thread 
should stop execution.<br/><br/> In following example threadStopper is the volatile reference that can be set as null in <code><b>stopThread()</b></code> 
method by other threads.<br/><br/> 
Sample code is as follows : 
<pre><code class="language-html hljs xml">public static class MyThread extends Thread { 
 private volatile Thread threadStopper;
 public void start() { 
    threadStopper = new Thread(this);
    threadStopper.start();
 }
 public void stopThread() {
    threadStopper = null;
 }
 public void run() {
	Thread currThread = Thread.currentThread();
	while(currThread == threadStopper) {
		try {
			Thread.sleep(100);
		} catch (InterruptedException e) {}
	}
 }
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>285. How do you access the current thread in a Java program?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can access the current thread in Java by calling the static method <code><b>currentThread()</b></code> of <code><b>java.lang.Thread</b></code> 
class.<br/><br/>
<b>Sample code is as follows :</b> 
<pre><code class="language-html hljs xml">public class MyThread { 
 public static void main(String[] args) { 
  // Get ID of Current Thread
   long id = Thread.currentThread().getId();
  // Get Name of Current Thread
   String name = Thread.currentThread().getName();
 }
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>286. What is Busy waiting in Multi-threading?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Busy waiting is also known as busy-looping or spinning. It is a multi-threading technique in which a process repeatedly checks if a condition 
is true.<br/><br/> 
For example, a process can keep checking if any keyboard input is available.<br/><br/> 
In general, busy waiting is considered as Anti-pattern that wastes processor time, so it should be avoided.<br/><br/> 
Sample code for busy waiting is as follows : 
<pre><code class="language-html hljs xml">Thread thread = new Thread( new Runnable() { 
 @Override
 public void run() { 
   long timeToStop = System.currentTimeMillis() + 1000;
   long currentTime = System.currentTimeMillis();
   // Busy waiting
   while (timeToStop &gt; currentTime) { 
     currentTime = System.currentTimeMillis(); 
   }
 }
});</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>287. How can we prevent busy waiting in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There is a simple way to prevent busy-waiting in Java. We can just put the current thread to sleep for given amount of time. 
It can be done by calling <code><b>sleep()</b></code> method of <code><b>java.lang.Thread</b></code> class. We can pass the number of milliseconds 
to <code><b>sleep()</b></code> method as an argument.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>288. Can we use Thread.sleep() method for real-time processing in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java does not guarantee that <code><b>Thread.sleep()</b></code> will cause the thread to sleep for exactly N number of milliseconds. 
Sometime the thread can sleep for than N number of milliseconds.<br/><br/> 
In real-time processing we need precise time period for which a thread should run or sleep.<br/><br/> 
Therefore the invocation of <code><b>Thread.sleep()</b></code> method is not recommended for use in real-time processing.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>289. Can we wake up a thread thathas been put to sleep by using Thread.sleep() method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use <code><b>interrupt()</b></code> method of <code><b>java.lang.Thread</b></code> class to interrupt a thread that is in sleep state. 
It will get InterruptedException to wake up from the sleep.<br/><br/> 
Sample code is as follows : 
<pre><code class="language-html hljs xml">public class ThreadInterrupt implements Runnable { 
  public void run() {  
    try { 
	  Thread.sleep(Long.MAX_VALUE);
	} catch (InterruptedException e) { 
	   System.out.println("Interrupted by exception!"); 
	}
  }
  
  public static void main(String[] args) throws InterruptedException { 
    Thread myThread = new Thread(new ThreadInterrupt(), "myThread");
	myThread.start();
	
	System.out.println("Sleeping in main thread for 10 seconds");
	Thread.sleep(10000);
	
	SOP("Interrupting myThread");
	myThread.interrupt();
  }
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>290. What are the two ways to check if a Thread has been interrupted?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
These are the two ways to check for thread interruption : 
<ol>
<li>In Java, a Thread can call <code><b>Thread.interrupted()</b></code> method to check if it has been interrupted or not.</li>
<li>The other option is to call <code><b>isInterrupted()</b></code> method of Thread class to check if it has been interrupted or not.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>291. How can we make sure that Parent thread waits for termination of Child Thread?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use join() method for this purpose. On calling join() method,current thread waits for the child thread to which it joins to finish.<br/><br/> 
Sample code is as follows : 
<pre><code class="language-html hljs xml">Thread myThread = new Thread( new Runnable() { 
  public void run() {
	 // ... 
  }
});

myThread.start();

// Join on myThread
myThread.join();</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>292. How will you handle InterruptedException in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java we can get InterruptedException from <code><b>sleep()</b></code> or <code><b>join()</b></code> methods. Throwing InterruptedException is way 
to inform thatanother thread has interrupted this thread.<br/><br/> 
In general, the purpose of Interrupt is to ask current thread to stop its current execution and finish unexpectedly.<br/><br/> 
Therefore ignoring this exception by catching it and only logging it to the console or some log file is not the recommended approach.<br/><br/> 
The <code><b>run()</b></code> method of the Runnable interface does not allow that throwing any exceptions. So we cannot re-throw 
InterruptedException.<br/><br/> 
Therefore the correct way to handle this exception is that <code><b>run()</b></code> method should check and handle this exception by itself and 
take appropriate action.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>293. Which intrinsic lock is acquired by a synchronized method in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When we mark a method as synchronized and then call this method,then this method will first acquire the intrinsic lock of the object in which that 
method is mentioned.<br/><br/> Once the synchronized method returns, it releases the lock.<br/><br/> 
In case the synchronized method throws an exception, the intrinsic lock will be released.<br/><br/> 
Sample code equivalent to a synchronized method is:
<pre><code class="language-html hljs xml">public void myMethod() { 
  synchronized(this) {
	// ...
  }
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>294. Can we mark a constructor as synchronized in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. We cannot mark a constructor as synchronized.<br/><br/> This will lead to compiler error.<br/><br/> 
The reasoning behind this is that, in this case, only the constructing thread would have access to the object being constructed.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>295. Can we use primitive values for intrinsic locks?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. Java does not allow primitive values to be used for intrinsic locks.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>296. Do we have re-entrant property in intrinsic locks?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. An intrinsic lock can be accessed by the same thread multiple times. So an Intrinsic lock is re-entrant.<br/><br/> 
If it is not allowed then the code that acquires a lock would have to avoid acquiring the lock that it has already acquired.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>297. What is an atomic operation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An atomic operation is an operation that completes in a single step relative to other threads.<br/><br/> 
An Atomic operation is either executed completely or not at all.<br/><br/> 
There is no halfway mark in Atomic operation.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>298. Can we consider the statement i++ as an atomic operation in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. The statement <code><b>i++</b></code> is not an Atomic operation. It has more than one operation.<br/><br/> 
First JVM loads the current value of <code><b>i</b></code> in memory. Then it increments it. Finally it stores the new value back 
into variable <code><b>i</b></code>.<br/><br/> 
The current thread that executes this operation may be interrupted between any of the above-mentioned three steps. Therefore it is 
not an atomic operation.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>299. What are the Atomic operations in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java language provides some basic Atomic operations. These operations can be used to make sure that concurrent threads always see the same value.<br/><br/> 
Some of these Atomic operations are : 
<ol>
<li>Read operations on reference variables and primitive variables (except long and double)</li>
<li>Write operations on reference variables and primitivevariables (except long and double)</li>
<li>Read operations on all variables declared as volatile</li>
<li>Write operations on all variables declared as volatile</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>301. What are the minimum requirements for a Deadlock situation in a program?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
For a deadlock to occur following are the minimum requirements : 
<ol>
<li><b>Mutual exclusion :</b> There has to be a resource that can be accessed by only one thread at any point of time.</li>
<li><b>Resource holding :</b> One thread locks one resource and holds it, and at the same time it tries to acquire lock on another mutually 
exclusive resource.</li>
<li><b>No preemption :</b> There is no pre-emption mechanism by which resource held by a thread can be freed after a specific period of time.</li>
<li><b>Circular wait :</b> There can be a scenario in which two or more threads lock one resource each and they wait foreach other’s resource to get 
free. This causes circular wait among threads for same set of resources.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>302. How can we prevent a Deadlock?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To prevent a Deadlock from occurring at least one requirement for a deadlock has to be removed :
<ol> 
<li><b>Mutual exclusion :</b> We can use optimistic locking toprevent mutual exclusion among resources.</li>
<li><b>Resource holding :</b> A thread has to release all its exclusive locks if it does not succeed in acquiring all exclusive locks for 
resources required.</li>
<li><b>No preemption :</b> We can use timeout period for anexclusive lock to get free after a given amount of time.</li>
<li><b>Circular wait :</b> We can check and ensure that circular waitdoes not occur, when all exclusive locks have been acquired by all the threads 
in the same sequence.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>303. How can we detect a Deadlock situation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use <code><b>ThreadMXBean.findDeadlockedThreads()</b></code> method to detect deadlocks in Java program. This bean comes with JDK :<br/><br/> 
<b>Sample code is as follows :</b>
<pre><code class="language-html hljs xml">ThreadMXBean bean = ManagementFactory.getThreadMXBean();
long[] threadIds = bean.findDeadlockedThreads(); 
// It will return null for no deadlock 
if (threadIds != null) {
	ThreadInfo[] infos = bean.getThreadInfo(threadIds);
	for (ThreadInfo info : infos) { 
	  StackTraceElement[] stack = info.getStackTrace();
	   // Log or store stack trace information.
	}
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>304. What is a Livelock?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Livelock is a scenario in which two or more block each other by responding to an action caused by another thread.<br/><br/> 
In a deadlock situation two or more threads wait in one specific state.<br/><br/> 
In a Livelock scenario, two more threads change their state in such away that it prevents progress on their regular work.<br/><br/> 
E.g. Consider scenario in which two threads try to acquire two locks. They release a lock that they have acquired, when they cannot acquire the 
second lock.<br/><br/> 
In a Livelock situation, both threads concurrently try to acquire the locks. Only one thread would succeed, the second thread may succeed in 
acquiring the second lock.<br/><br/> 
Now both threads hold two different locks. And both threads want to have both locks. So they release their lock and try again from the beginning. 
This situation keeps repeating multiple times.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>305. What is Thread starvation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a priority based scheduling, Threads with lower priority get lesser time for execution than higher priority threads.<br/><br/> 
If a lower priority thread performs a long running computation, it may happen that this thread does not get enough time to finish its computations 
just in time. In such a scenario, the tread with lower priority would starve. It will remain away from the threads with higher priority.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>306. How can a synchronized block cause Thread starvation in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
It is not defined for synchronization that which thread will enter asynchronized block. It may happen that if many threads are waiting for the entry 
to a synchronized block, some threads may have to wait longer than other threads.<br/><br/> Hence these threads with lower priority will not get 
enough time to finish their work in time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>307. What is a Race condition?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Race condition is an unwanted situation in which a program attempts to perform two or more operations at the same time, but because of the 
logic of the program, the operations have to be performed in proper sequence to run the program correctly.<br/><br/> Since it is an undesirable behavior, 
it is considered as a bug in code.<br/><br/>  Most of the time race condition occurs in "check then act" scenario. Both threads check and act on same value. 
But one of the threads acts in between check and act.<br/><br/> 
See this example to understand race condition.
<pre><code class="language-html hljs xml">if (x == 3) { // Check 
 y = x * 5; // Act 
 // If another thread changes x
 // between "if (x == 3)” and "y = x * 5”,
 // then y will not be equal to 15. 
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>308. What is a Fair lock in multi-threading?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java there is a class ReentrantLock that is used for implementing Fair lock. This class accepts an optional parameter fairness. When fairness 
is set to true, the RenentrantLock will give access to the longest waiting thread.<br/><br/> The most popular use of Fair lock is in avoiding 
thread starvation. Since longest waiting threads are always given priority in case of contention, no thread can starve.<br/><br/> 
Downside of Fair lock is the low throughput of the program. Since low priority or slow threads are getting locks multiple time, it leads to slower 
execution of a program.<br/><br/> The only exception to a Fair lock is <code><b>tryLock()</b></code> method of ReentrantLock. This method does not 
honor the value of fairness parameter.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>309. Which two methods of Object class can be used to implement a Producer Consumer scenario?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Producer Consumer scenario, one thread is a Producer and another thread is a Consumer.<br/><br/> 
For this scenario to start working, a Consumer has to know when the Producer has produced. In Object class, there is a <code><b>wait()</b></code> method. 
A Consumer calls wait method to wait on Producer. The Producer used <code><b>notify()</b></code> method of Object class to inform Consumer that it has 
produced.<br/><br/> In this way the processor time between produce and consume operations is freed due to the use of <code><b>wait()</b></code> and 
<code><b>notify()</b></code> methods.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>310. How JVM determines which thread should wake up on notify()?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If multiple threads are waiting on an object’s monitor, JVM awakens one of them. As per Java specification the choice of this thread is arbitrary 
and it is at the discretion of the implementation. So there is no guarantee of rule that a specific thread will be awakened by JVM on 
<code><b>notify()</b></code> method call.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>312. How can we check if a thread has a monitor lock on a given object?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, Thread class has a static method <code><b>holdsLock(Object objToCheck)</b></code> to check whether thread has a lock on 
<code><b>objToLock</b></code> object. This method will return true if current thread holds the lock on the <code><b>objToLock</b></code> object 
that was passed as an argument to this method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>313. What is the use of yield() method in Thread class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The <code><b>yield()</b></code> method of Thread class is used to give a hint to scheduler that the current thread wants to free the processor.<br/><br/> 
The scheduler can either use this hint or just ignore this hint. Since the scheduler behavior is not guaranteed, it may happen that the current thread 
again gets the processor time.<br/><br/> It can be used for debugging or testing purposes. But there is rarely any concrete use of this method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>314. What is an important point to consider while passing an object from one thread to another thread?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This is a multi-threading scenario. In a multi-threading scenario, the most important point is to check whether two threads can update same object 
at the same time.<br/><br/> If it is possible for two threads to update the same object at the same time, it can cause issues like race condition.<br/><br/> 
So it is recommended to make the object Immutable. This will help in avoiding any concurrency issues on this object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>315. What are the rules for creating Immutable Objects?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As per Java specification, following are the rules for creating an Immutable object : 
<ol>
<li>Do not provide "setter" methods that modify fields or objects referred to by fields.</li>
<li>Make all fields final and private.</li>
<li>Do not allow subclasses to override methods. The simplest way to do this is to declare the class as final. A more sophisticated approach is to 
make the constructor private and construct instances in factory methods.</li>
<li>If the instance fields include references to mutable objects, do not allow those objects to be changed.</li>
<li>Do not provide methods that modify the mutable objects.</li>
<li>Do not share references to the mutable objects. Never store references to external, mutable objects passed to the constructor; if necessary, 
create copies, and store references to the copies. Similarly, create copies of your internal mutable objects when necessary to avoid returning 
the originals in your methods.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>316. What is the use of ThreadLocal class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ThreadLocal class provides thread-local variables. Each thread accesses only its own local variables. It has its own copy of the variable.<br/><br/> 
By using ThreadLocal, if thread X stores a variable with value x and another thread Y stores same variable with the value y, then X gets x from its 
ThreadLocal instance and Y gets y from its ThreadLocal instance.<br/><br/> 
Typically, ThreadLocal instances are private static fields that are associated with the state of a thread.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>317. What are the scenarios suitable for using ThreadLocal class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use instance of ThreadLocal class to transport information within an application.<br/><br/> 
One use case is to transport security or login information within an instance of ThreadLocal so that every method can access it.<br/><br/> 
Another use case is to transport transaction information across an application, without using the method-to-method communication.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>318. How will you improve the performance of an application by multi-threading?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In an environment with more than one CPU, we can parallelize the computation tasks on multiple CPUs. This leads to parallel processing of a bigger 
task that takes lesser time due to multiple threads dividing the work among themselves.<br/><br/> 
One example is that if we have to process 1000 data files and calculate the sum of numbers in each file. If each file takes 5 minutes, then 1000 files 
will take 5000 minutes for processing.<br/><br/> But by using multi-threading we can process these files in 10 parallel threads. So each thread will take 
100 files each. Since now work is happening in 10 parallel threads, the time taken will be around 500 minutes.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>319. What is scalability in a Software program?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Scalability is the capability of a program to handle growing amount of work or its potential to be enlarged in order to accommodate growth.<br/><br/> 
A program is considered scalable, if it is suitable to handle a large amount of input data or a large number of users or a large number of nodes.<br/><br/> 
When we say a program does not scale, it means that program fails on increasing the size of task.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>320. How will you calculate the maximum speed up of an application by using multiple processors?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Amdahl’s law gives the theoretical speedup in latency of the execution of a task at fixed workload.<br/><br/> 
It gives the formula to compute the theoretical maximum speed up that can be achieved by providing multiple processors to an application.<br/><br/> 
If S is the theoretical speedup then the formula is : 
<pre><code class="language-html hljs xml">S(n) = 1 / (B + (1-B)/n)</code></pre> 
where n is the number of processors<br/>
B is the fraction of the program that cannot be executed in parallel.<br/><br/> 
When n converges against infinity, the term (1-B)/n converges against zero. Therefore, the formula can be reduced in this special 
case to 1/B.<br/><br/> In general, the theoretical maximum speedup behaves in inverse proportion to the fraction that has to be executed serially. 
This means the lower this fraction is, the more theoretical speedup can be achieved.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>321. What is Lock contention in multi-threading?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Lock contention is the situation when one thread is waiting for a lock/object that being held by another thread. The waiting thread cannot use this 
object until the other thread releases the lock on that object.<br/><br/> 
It is also known as Thread contention.<br/><br/> 
Ideally locks reduce the thread contention. Without locks, multiple threads can operate on same object and cause undesirable behavior. If locking is 
implemented correctly it reduces the occurrence of contention between multiple threads.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>322. What are the techniques to reduce Lock contention?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are following main techniques to reduce Lock contention : 
<ol>
<li>Reduce the scope of lock.</li>
<li>Reduce object pooling.</li>
<li>Reduce the number of times a certain lock can be acquired.</li>
<li>Avoid synchronization at unnecessary places.</li>
<li>Implement hardware supported Optimistic locking in place of synchronization.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>324. What is Lock splitting technique?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Lock splitting is a technique to reduce Lock contention in multi-threading. It is applicable in scenario when one lock is used to synchronize 
access to different aspects of the same application.<br/><br/> Sometimes we put one lock to protect the whole array. There can b emultiple threads 
trying to get the lock for same array. This single lock on array can cause Lock contention among threads. To resolve this we can give one lock to 
each element of the array. Or we can use modulus function to assign different locks to a small group of array elements. In this way we can reduced 
the chance of Lock contention.<br/><br/>  This is Lock splitting technique.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>325. Which technique is used in ReadWriteLock class for reducing Lock contention?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ReadWriteLock uses two locks.
<ul>
<li>One lock for read-only operations,</li> 
<li>Another lock for write operations.</li>
</ul>
Its implementation is based on the premise that concurrent threads do not need a lock when they want to read a value while no other thread 
is trying to write.<br/><br/> 
In this implementation, read-only lock can be obtained by multiple threads. And the implementation guarantees that all read operation will see 
only the latest updated value as soon as the write lock is released.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>326. What is Lock striping?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Lock splitting we use different locks for different parts of the application. In Lock striping we use multiple locks to protect different parts 
of the same data structure.<br/><br/> 
ConcurrentHashMap class of Java internally uses different buckets to store its values. Each bucket is chosen based on the value of key. 
ConcurrentHashMap uses different locks to guard different buckets. When one thread that tries to access a hash bucket, it can acquire the lock 
for that bucket. While another thread can simultaneously acquire lock for another bucket and access it. In a synchronized version of HashMap, the 
whole map is has one lock.<br/><br/> Lock striping technique gives better performance than Synchronizing the whole data structure.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>327. What is a Compare-And-Swap (CAS) operation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
CAS is also known a Compare-And-Swap operation.<br/><br/> 
In a CAS operation, the processor provides a separate instruction that can update the value of a register only if the provided value is equal to 
the current value.<br/><br/> 
CAS operation can be used as an alternate to synchronization.<br/><br/> 
Let say thread T1 can update a value by passing its current value and the new value to be updated to the CAS operation. In case another thread T2 
has updated the current value of previous thread, the previous thread T1’s current value is not equal to the current value of T2. Hence the update 
operation fails.<br/><br/> In this case, thread T1 will read the current value again and try to update it.<br/><br/> 
This is an example of optimistic locking.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>328. Which Java classes use Compare-And-Swap (CAS) operation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java classes like AtomicInteger or AtomicBoolean internally use CAS operations to support multi-threading.<br/><br/> 
These classes are in package <code><b>java.util.concurrent.atomic</b></code>.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>329. Is it always possible to improve performance by object pooling in a multi-threading application?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By using Object pools in an application we limit the number of new objects to be created for a class. In a single thread operation, it can improve 
the performance by reusing an already created object from a pool.<br/><br/> In a multi-threading application an object pool has to provide synchronized 
access to multiple threads. Due to this only one thread can access the pool at a time. Also there is additional cost due to Lock contention on pool. 
These additional costs can outweigh the cost saved by reuse of an object from the pool.<br/><br/> 
Therefore using an Object pool may not always improve the performance in a multi-threading application.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>330. How can techniques used for performance improvement in a single thread application may degrade the performance in a multi-threading application?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a single thread applications we can use Object pool for performance optimization. Where as in multi-threading environment,it may not be a good 
idea to use an Object pool. Increased overhead of synchronization and lock contention can degrade the performance gained by using Object pool in a 
multi-threading application.<br/><br/> Another example is the implementation in which a List keeps a separate variable to hold the number of elements. 
This technique is useful in single thread application where <code><b>size()</b></code> method can return the value from this variable, without the 
need to count all the elements of list.<br/><br/> But in a multi-threading application, this separate variable can rather degrade the performance. 
This variable has to be access controlled by a lock since multiple concurrent threads can insert an element in a list. The additional cost of lock 
on this variable can out weigh the benefit gained by it in a multi-threading application.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>331. What is the relation between Executor and ExecutorService interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Executor interface has only <code><b>execute(Runnable)</b></code> method. The implementing class of this interface has to execute the given Runnable 
instance passed to <code><b>execute()</b></code> method at some time in the future.<br/><br/> 
ExecutorService interface extends Executor interface. It provides additional methods like - <code><b>invokeAny()</b></code>, <code><b>invokeAll()</b></code>, 
<code><b>shutdown()</b></code>, <code><b>awaitTermination()</b></code>. These method provide the ability to shutdown the thread so that further requests 
can be rejected. Also it provides ability to invoke a collection of Callable tasks.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>332. What will happen on calling submit() method of an ExecutorService instance whose queue is already full?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The implementation of ExecutorService will throw <code><b>RejectedExecutionException</b></code>, when its queue is already full and a new task is 
submitted by calling <code><b>submit()</b></code> method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>333. What is a ScheduledExecutorService?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>ScheduledExecutorService</b></code> interface extends the interface <code><b>ExecutorService</b></code>. It provides various 
<code><b>schedule()</b></code> methods that can beused to submit new tasks to be executed at a given point of time.<br/><br/> 
One of the <code><b>schedule()</b></code> method provides the ability to schedule a one-shot task that can be executed after given delay.<br/><br/> 
Another version of <code><b>schedule()</b></code> method provides the ability to execute <code><b>ScheduleFuture</b></code> after a given amount of 
delay.<br/><br/> In addition, there are <code><b>scheduleAtFixedRate()</b></code> and <code><b>scheduleWithFixedDelay()</b></code> methods that can 
execute an action at a periodic interval of time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>334. How will you create a Threadpool in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
InJava, Executors framework provides a method <code><b>newFixedThreadPool(int nThreads)</b></code> that can be used to create a Thread pool with a 
fixed number of threads.<br/><br/> 
Sample code is as follows : 
<pre><code class="language-html hljs xml">public static void main(String[] args) throws InterruptedException, ExecutionException { 
 ExecutorService myService = Executors.newFixedThreadPool(5);
 Future&lt;Integer&gt;[] futureList = new Future[5];
 for (int i = 0; i &lt; futureList.length; i++) { 
   futureList[i] = myService.submit(new MyCallable()); 
 }
 for (int i = 0; i &lt; futureList.length; i++) { 
   Integer retVal = futureList[i].get();
   println(retVal);
 }
 myService.shutdown(); 
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>335. What is the main difference between Runnable and Callable interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Runnable interface defines <code><b>run()</b></code> method that does not return any value.<br/><br/> 
Callable interface allows <code><b>call()</b></code> method to return a value to its caller. A Callable interface can also throw an exception in case 
of an error. Also Callable is a newer addition to Java since version 1.5.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>336. What are the uses of Future interface in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use Future interface to represent the result of anasynchronous computation.<br/><br/> 
These are the operations whose result is not immediately available.<br/><br/> 
Therefore Future interface provides <code><b>isDone()</b></code> method to check if theasynchronous computation has finished or not.<br/><br/> 
We can also check if the task was cancelled by calling <code><b>isCancelled()</b></code> method.<br/><br/> 
Future also provides <code><b>cancel()</b></code> method to attempt the cancellation of a task.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>337. What is the difference in concurrency in HashMap and in Hashtable?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Hashtable class all methods are synchronized.<br/><br/> 
In a HashMap implementation all the methods are not synchronized.<br/><br/> 
Therefore Hashtable is a thread-safe collection. HashMap is not a thread-safe collection.<br/><br/> 
In a multi-threading it is not advisable to use regular HashMap. We can use ConcurrentHashMap class in multi-threading applications.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>338. How will you create synchronized instance of List or MapCollection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, Collections class provides methods to synchronize any collection.<br/><br/> 
It also provides <code><b>synchronizedList(List)</b></code> and <code><b>synchronizedMap(Map)</b></code> methods that can be used to 
convert a List or Map to a synchronized instance.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>339. What is a Semaphore in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Semaphore class in Java is used to implement a counting semaphore. It is used to restrict the number of threads that can access a physical or logical 
resource.<br/><br/> A Semaphore maintains a set of permits that should be acquired by competing threads.<br/><br/> 
We can also use it to control how many threads can access the critical section of a program or a resource concurrently.<br/><br/> 
The first argument in Semaphore constructor is the total number of permits available. Each invocation of <code><b>acquire()</b></code> method tries to 
obtain one of the available permits.<br/><br/> 
The <code><b>acquire()</b></code> method is used to acquire a permit from the semaphore. If we pass number of permits required to 
<code><b>acquire()</b></code> method, then it blocks the thread until that number of permits are available.<br/><br/>  
Once a thread has finished its work, we can use <code><b>release()</b></code> method torelease the permits.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>340. What is a CountDownLatch in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
CountDownLatch class helps in implementing synchronization inJava. It is used to implement the scenarios in which one or more threads have to wait 
until other threads have reached the same state such that all thread can start.<br/><br/> 
There is a synchronized counter that is decremented until it reaches the value zero. Once it reaches zero, it means that all waiting threads can 
proceed now.<br/><br/> It is a versatile tool that can be used for other Synchronization scenarios as well. It can also work as on/off latch or gate. 
All threads invoking <code><b>await()</b></code> method wait at the gate until it is opened by a thread invoking <code><b>countdown()</b></code> method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>341. What is the difference between CountDownLatch and CyclicBarrier?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
CyclicBarrier takes an optional Runnable task that is run once the common barrier condition is achieved.<br/><br/>
CountDownLatch is used in simple use cases where a simple startstop is required. A CyclicBarrier is useful in complex scenarios where more 
coordination is required. E.g. MapReduce algorithm implementation.<br/><br/> CyclicBarrier resets the internal value to the initial value once 
the value reaches zero. CyclicBarrier can be used to implement the scenarios in which threads have to wait for each other multiple times.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>342. What are the scenarios suitable for using Fork/Join framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ForkJoinPool class is in the center of Fork/Join framework. It is a thread pool that can execute instances of ForkJoinTask.<br/><br/> 
ForkJoinTask class provides the <code><b>fork()</b></code> and <code><b>join()</b></code> methods. The <code><b>fork()</b></code> method is used to 
start the asynchronous execution of a task. The <code><b>join()</b></code> method is used to await the result of the computation.<br/><br/> 
Therefore, divide-and-conquer algorithms can be easily implemented with Fork/Join framework.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>343. What is the difference between RecursiveTask and RecursiveAction class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
RecursiveAction class has <code><b>compute()</b></code> method that does not have toreturn a value.<br/><br/> 
RecursiveAction can be used when the action has to directly operate on a Data structure. It does not need to return any computed value.<br/><br/> 
In RecursiveTask class has compute() method that always returns a value.<br/><br/> 
Both RecursiveTask and RecursiveAction classes are used in ForkJoinTask implementations.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>344. In Java 8, can we process stream operations with a Threadpool?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java 8, Collections provide parallelStream() method to create a stream that can be processed by a Thread pool.<br/><br/> 
We can also call the intermediate method parallel() on a given stream to convert it into a sequential stream of parallel tasks.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>345. What are the scenarios to use parallel stream in Java 8?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A parallel stream in Java 8 has a much higher overhead compared to a sequential one.<br/><br/> 
It takes a significant amount of time to coordinate the threads.<br/><br/> 
We can use parallel stream in following scenarios:
<ul>
<li>When there are a large number of items to process and the processing of each item takes time and is parallelizable.</li>
<li>When there is a performance problem in the sequential processing.</li>
<li>When current implementation is not already running in a multi-thread environment. If there is already a multi-threading environment, adding 
parallel stream can degrade the performance.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>346. How Stack and Heap work in Java multi-threading environment?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, Stack and heap are memory areas available to an application. Every thread has its own stack. It is used to store local variables, 
method parameters and call stack.<br/><br/> 
Local variables stored in Stack of one Thread are not visible to another Thread.<br/><br/> 
Where as, Heap is a common memory area in JVM. Heap is shared by all threads. All objects are created inside heap.<br/><br/> 
To improve performance thread can cache the values from heap into their stack. This can create problem if the same variable is modified by more than 
one thread.<br/><br/> In such a scenario we should used volatile keyword to mark a variable volatile. For a volatile variable the thread always reads the 
value from main memory.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>347. How can we take Thread dump in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The steps to take Thread dump of Java process depends on the operating system.<br/><br/> 
On taking Thread dump, Java writes the state of all threads in logfiles or standard error console.<br/><br/> 
We can press Ctrl + Break key together to take thread dump in Windows.<br/><br/> 
We can execute kill -3 command for taking Thread dump on Linux. Another option to take Thread dump is <code><b>jstack</b></code> tool. 
We can passprocess id of java process to this tool for taking Thread dump.<br/><br/> 
This is the simple one, <code><b>-Xss</b></code> parameter is used to control stack sizeof Thread in Java. You can see this list of JVM options to 
learn more about this parameter.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>348. Which parameter can be usedto control stack size of a thread in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use <code><b>-Xss</b></code> parameter to control the stack size of a thread in Java.<br/><br/> 
If we set it as 1 MB, then every thread will get 1 MB of stack size.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>349. There are two threads T1 and T2? How will you ensure that these threads run in sequence T1, T2 in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java there are multiple ways to execute threads in a sequence.<br/><br/> 
One of the simplest way for sequencing is join() method of Thread class.<br/><br/> 
We can call join() method to start a thread when another thread has finished.<br/><br/> 
We start with the last thread to execute first. And make this thread join on the next thread.<br/><br/> 
In this case we start thread T2 first. And then call <code><b>T1.join()</b></code> so that thread T2 waits for thread T1 to finish execution.<br/><br/> 
Once T1 completes execution, T2 thread starts executing.
<!-- Answer ::: END -->
</div>
</div>
