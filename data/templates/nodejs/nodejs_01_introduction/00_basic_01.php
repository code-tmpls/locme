
<div><b>1. What is Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js is a JavaScript platform/runtime built on Google Chrome’s JavaScript V8 engine. This allows JavaScript to be used on machines outside of a 
browser and allows developers to use JavaScript to write things like command-line tools and server-side scripts.<br/><br/>
As a result, Node.js represents the JavaScript everywhere paradigm by unifying web application development around a single programming language, 
rather than different languages being used on the server and client-side.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What is the use of Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Node.js is usually used for non-blocking and event-driven servers.</li>
<li>This makes it great for building things like static file servers, web application frameworks, REST APIs, messaging middleware, real-time services 
(chat, games, etc), command-line applications, browser games, and anything else that isn’t CPU intensive or doesn’t require long processing times.</li>
<li>Amongst those use-cases, web applications are the most commonly used by developers.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What are the key features of Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Key features of Node.js :</b><br/><br/>
<ul>
<li><b>V8 :</b><br/>
Since Node.js compiles JavaScript to machine code using the V8 engine, it allows for high runtime performance (a.k.a it’s really fast).<br/><br/></li>
<li><b>Single-Threaded Execution :</b><br/>
On the main thread that runs JavaScript, Node.js is single threaded (multiple threads are used under-the-hood by V8). This means Node.js is 
non-blocking (for the most part), where the majority of the functions (callbacks) are delegated to the event loop and executed asynchronously.<br/><br/></li>
<li><b>Asynchronous :</b><br/>
Multiple requests to Node.js can be handled without having any dependency on each other, which boosts both throughput and efficiency.<br/><br/></li>
<li><b>Rich Ecosystem Provided By NPM :</b><br/>
The default package manager for Node.js, named NPM, is a command-line utility included by default with Node.js. And it also provides a huge online 
repository of open-source code to choose from. NPM allows you to search, install, share, and reuse lines of code.<br/><br/></li>
<li><b>Full Stack JavaScript Development :</b><br/>
Node.js made it possible for developers to use JavaScript on the server-side. Now, they can use the same scripting language on both the frontend and 
backend when they build applications. This allows developers to build things faster and reduces the size of the learning curve for developers who are 
already proficient in JavaScript.<br/><br/></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What are some of the drawbacks with of Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The main drawback is that it’s not efficient when handling CPU-intensive tasks or any long-running operations. Examples of these types of tasks 
include generating audio and video or editing graphics.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What’s the name of the JavaScript engine Node.js is built on?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
V8 Engine.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. How does the V8 engine work?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
V8 compiles and executes JavaScript source code into machine code, handles memory allocation for objects, and garbage collects objects it no longer needs. 
V8 enables any C++ application to expose its own objects and functions to JavaScript code.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What is the event loop in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>The event loop is what allows Node.js to perform non-blocking Input/Output operations by offloading operations to the system kernel whenever possible.</li>
<li>The main role of the event loop is to schedule which operations the single thread should be performing at any given point in time.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What is libuv?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><code><b>libuv</b></code> is a multi-platform support library with a focus on asynchronous I/O. It was primarily developed for use by Node.js, but 
it’s also used by <code><b>Luvit</b></code>, <code><b>Julia</b></code>, <code><b>pyuv</b></code>, and others.</li>
<li>It is used by the Node.js behind-the-scenes to perform I/O for network and file operations.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. How does Node.js handle child threads?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js is a single thread process and, by default, doesn’t expose child threads and thread management to the developer. Behind the scenes, Node.js 
does spawn child threads for certain tasks like asynchronous Input/Output operations. But it runs in the background and doesn’t execute any application 
JavaScript code or block the main event loop.<br/><br/>
But, developers to spawn their own external child processes by using tools like the child_process module and worker threads.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is the difference between synchronous and asynchronous programming?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Synchronous :</b> When you execute code synchronously, you wait for it to finish before moving to another task.</li>
<li><b>Asynchronous :</b> When you execute code asynchronously, you can move on to another task before it finishes.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. Why is asynchronous programming important in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
User interfaces are asynchronous by nature, in that they spend the majority of their time waiting for the user to interrupt the event loop and 
trigger event handlers.<br/><br/>
Therefore, Node.js is also asynchronous by default and the server works in the same way. It waits for a request from the network and can accept 
additional incoming requests while the first one is handled. This is very beneficial to performance on the server.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. How do you handle errors when dealing with asynchronous code?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Return an Error as the First Parameter to a Callback Function.<br/><br/>
In Node.js, the standard way to handle errors in asynchronous functions is to return them as the first argument in a function’s callback. If the 
error exists, the first parameter is passed an Error object that contains the information on the error. If there is no error, the first parameter 
will be null.<br/><br/>
<b>Syntax :</b>
<pre><code class="language-html hljs xml">function (error, returnValue) {
 if (error) {
  console.log(error)
  return
 } else {
  console.log(returnValue)
 }
}</code></pre>
In above Syntax, if there is no error, the callback returns a value of null as the first argument. If an error does exist, the first parameter 
returns an Error object.<br/><br/>
<b>Another way </b> is Using a Try…Catch Statement Inside an Async/Await Function.<br/><br/>
<b>Syntax :</b>
<pre><code class="language-html hljs xml">async function main() {
 try {
  const data = await getData()
  console.log(data)
 } catch (error) {
  console.log(error)
 }
}</code></pre>
In the above Syntax, the catch block will handle parsing errors if one occurs in the try block.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Why is some code considered to be “blocking”?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Blocking code is when the execution of additional JavaScript in the Node.js process must wait until a non-JavaScript operation completes. This 
happens because the event loop is unable to continue running JavaScript while a blocking operation is occurring.</li>
<li>Blocking methods execute synchronously and non-blocking methods execute asynchronously.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is process.nextTick() used for?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In Node.js, each iteration of the event loop is called a <code><b>tick</b></code>. The <code><b>process.nextTick()</b></code> method is used to defer 
the execution of a function until the next iteration in the Node.js event loop.<br/><br/>
You can pass a function to the <code><b>process.nextTick()</b></code> like this:
<pre><code class="language-html hljs xml">process.nextTick(() => {
 // do something here
}</code></pre>
This tells the Node.js engine to call that function at the end of the current operation and before the next event loop tick starts.<br/><br/>
Another way to set code to run in the next iteration of the event loop is to use the <code><b>setImmediate()</b></code> function.
The code looks like this:
<pre><code class="language-html hljs xml">setImmediate(() => {
 // do something here
})</code></pre>
It’s worth noting that a function passed to <code><b>process.nextTick()</b></code> is going to be executed on the current iteration of the event loop, 
after the current operation ends. This means that it will always execute before <code><b>setImmediate()</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What is event-driven programming?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Event-driven programming is a paradigm in which the flow of the program is determined by events like user actions (clicks or keypresses) or 
messages from other programs. In an event-driven application, there’s usually a main loop that listens for certain events and triggers a callback 
function when one of the events is received.
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. What is the EventEmitter in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>The EventEmitter is a module that facilitates communication/interaction between objects in Node.js. Emitter objects emit named events that cause 
previously created listeners to be called when they detect the named event.</li>
<li>It works similar to how a pub/sub or observer design patter does.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. Can you create an HTTP server using Node.js? If so, can you explain the code needed to do so?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, you can certainly create an HTTP server using Node.js.<br/><br/>
Here is what a basic HTTP server would look like using the HTTP module:
<pre><code class="language-html hljs xml">const http = require("http");

http.createServer(function (req, res) {
res.writeHead(200, { "Content-Type": "text/plain" })
res.write("Hello World!")
res.end()
}).listen(8080)</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. What is a control flow function? And what are the steps to execute one?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The control flow is the order in which the computer executes statements in a script. A control flow function is one that handles or modifies the 
sequence in which different pieces of code runs. And is often the code that runs between asynchronous function calls.<br/><br/>
To execute a control flow function, these steps should be followed:<br/><br/>
<ul>
<li>Control the order of execution.</li>
<li>Collect the required data.</li>
<li>Limit the concurrency.</li>
<li>Invoke the next step of the program.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. Does Node.js support multi-core computing platforms? Is it capable of utilizing more than one CPU core?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A single instance of Node.js runs in a single thread. To take advantage of multi-core systems, the user will sometimes want to launch a 
cluster of Node.js processes to handle the load.<br/><br/>
The Cluster module allows you to easily create multiple child processes that all share the same server ports.
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. Describe what a stream is in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>In Node.js, a stream is an abstract interface for working with streaming data in Node.js. Streams are a way to handle network communications, 
reading/writing files, and any other kind of end-to-end exchange where data is being moved from one place to another.</li>
<li>If you wanted to create a program that read a file, the conventional way would be to read the file into memory from start-to-finish and then process it. 
With streams, you can read that file piece by piece and process the file without storing the entire thing in memory.</li>
<li>For example, in a Node.js based HTTP server, the request is a readable stream and the response is a writable stream. Both involve moving data from one 
destination to the other.</li>
<li>Another example can be found with the fs module, which lets you work with both readable and writable file streams.</li>
</ul>
The use of streams provides two key advantages:
<ul>
<li>Uses less memory: since only chunks of data are stored in memory, you use a lot less computing resources.</li>
<li>Takes less time to process data: since you can start processing the data right away (instead of waiting until all the data has been received), lots of 
time is saved.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. How many types of streams exist in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Three are four different types of streams in Node.js:
<ol>
<li><b>Writable:</b> streams to which data can be written to.</li>
<li><b>Readable:</b> streams from which data can be read from.</li>
<li><b>Duplex:</b> streams that are both Writable and Readable.</li>
<li><b>Transform:</b> Duplex streams that can modify the data as it’s written or read.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. What kind of events can be fired by a stream?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Each type of stream in Node.js is an EventEmitter instance and can throw several types of events at different times.<br/>
These are the commonly used ones:<br/><br/>
<ul>
<li><b>data:</b> fired whenever data is available to be read.</li>
<li><b>end:</b> fired when there is no more data to be read.</li>
<li><b>error:</b> fired when there is an error when receiving or writing data.</li>
<li><b>finish:</b> fired when all the data has been flushed to the underlying system.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. What’s piping in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In Node.js, piping is used when dealing with streams. And is the name for the method used to connect a readable stream to a writeable stream. This is 
a common method when dealing with file streams using the stream.pipe function.
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. What’s the purpose of the Buffer class in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A buffer represents a chunk of memory allocated outside of the V8 JavaScript engine. And can be thought of as an array of integers where each 
value represents a byte of data.<br/><br/>
In essence, a buffer serves as a temporary place in memory where data can be dumped and used for further processing.<br/><br/>
The Buffer class was introduced as part of the Node.js API to enable interaction with octet streams in TCP streams, file system operations, and other 
contexts.
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. What’s the difference between readFile() and createReadStream() in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>readFile() :</b> the file is completely pushed into the buffer for processing and returns the response only when the entire has been pushed into 
the buffer and read. It uses a lot of memory and can be very slow when handling large files.</li>
<li><b>createReadStream() :</b> the is pushed into the buffer in chunks and each chunk is removed when it has been processed. The file is sent in 
chunks and once the process of one chunk is done, it sends a response and removes it from the buffer. This is more effective and memory efficient when 
dealing with larger files.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. What general practices do you use for debugging when building Node.js applications?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Using console Methods :</b><br/>
<code><b>console.log()</b></code> and debugging in the Browser under <code><b>Developer Tools</b></code> -&gt; <code><b>console</b></code>.<br/><br/></li>
<li><b>Using debugger Statement:</b><br/>
In the browser, a debugger statement simply pauses the execution of your code when the statement is reached, but only if you have the developer 
tools open.
<pre><code class="language-html hljs xml">const express = require('express');
const app = express();

app.get('/', (req, res) => {
    <span class="hljs-keyword">debugger;</span>
    res.send('Hello World!');
});

app.listen(3000, () => 
 console.info('Example app listening on port 3000!'));</code></pre>
Now instead of starting your app as we usually would:
<pre><code class="language-html hljs xml">node app.js</code></pre>
We can start your app with the following command:
<pre><code class="language-html hljs xml">node inspect app.js</code></pre>
</li>
<li>Debugging in Chrome with the inspect flag.</li>
<li>Debugging from VSCode IDE by adding breakpoints.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. What keyword can you insert into your code to act as a debug breakpoint?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Using debugger Keyword:</b><br/>
In the browser, a debugger Keyword simply pauses the execution of your code when the statement is reached, but only if you have the developer 
tools open.
<pre><code class="language-html hljs xml">const express = require('express');
const app = express();

app.get('/', (req, res) => {
    <span class="hljs-keyword">debugger;</span>
    res.send('Hello World!');
});

app.listen(3000, () => 
 console.info('Example app listening on port 3000!'));</code></pre>
Now instead of starting your app as we usually would:
<pre><code class="language-html hljs xml">node app.js</code></pre>
We can start your app with the following command:
<pre><code class="language-html hljs xml">node inspect app.js</code></pre>

<!-- Answer ::: END -->
</div>
</div>

<div><b>28. What’s the difference between programmer Errors and Operational Errors?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Programmer Errors :</b><br/>
Programmer errors are bugs in the program and are caused by the developer. These are things that can be fixed by changing the code.<br/><br/>
<b>Operational Errors :</b><br/>
Operational errors are run-time problems experienced by correctly-written programs. These are not necessarily bugs in the program and are usually 
problems caused by something with the system itself, the system’s configuration, the network, or a remote service.<br/>
Some specific examples include:
<ul>
<li>Failed to connect to server</li>
<li>Failed to resolve hostname</li>
<li>server returned a 500 response</li>
<li>system is out of memory</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. What are callbacks used for in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js APIs make heavy use of callback functions. A callback is a function passed as an argument to another function that will be called when the 
function ends. It is an asynchronous equivalent for a function and is called at the completion of a given task.
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. What is the first argument passed to a Node.js callback function?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>The error object :</b><br/>
If an error occurred, it will be returned by the first error argument. And the second argument of the callback is usually reserved for successful 
response data.
<!-- Answer ::: END -->
</div>
</div>

<div><b>31. What is a Promise?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A promise is an object that may produce a single value at some point in the future and represents the result of an asynchronous function. 
That value can be either a resolved value or a reason for why it wasn’t resolved (an error).<br/><br/>
A promise can be in three different states:
<ol>
<li>pending</li>
<li>fulfilled</li>
<li>rejected</li>
</ol>
Callbacks can be attached to the promise to handle the fulfilled value or any rejection reasons.
<!-- Answer ::: END -->
</div>
</div>

<div><b>32. What is an async function? Why is it used?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An async function is one that operates asynchronously via the event loop and uses a Promise to return its result. These are declared using the async 
function syntax.<br/><br/>
An async function can use the await expression to pause the execution of the asynchronous function and wait for the Promise to resolve (only the async 
function block waits, not the execution thread). Then it resumes the async function’s execution and evaluates as the resolved value.<br/><br/>
Here’s an example of what one looks like in code:
<pre><code class="language-html hljs xml">async function main() {
 try {
  const data = await getData()
  console.log(data)
 } catch (error) {
  console.log(error)
 }
}</code></pre>
The purpose of an async function is to enable developers to write promise-based code as if it were synchronous, but without blocking the execution thread.
<!-- Answer ::: END -->
</div>
</div>

<div><b>33. What is callback hell?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Callback hell is a JavaScript anti-pattern caused by deeply nested asynchronous functions. Callback hell happens when you have callbacks within callbacks 
within callbacks and your code becomes difficult if not impossible to reason about.
<!-- Answer ::: END -->
</div>
</div>

<div><b>34. How do you prevent or fix callback hell?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The most important way to avoid callback hell is to move functions out of the way so that the program can be more easily understand without wading 
through miles of functions and their callbacks.<br/><br/>
Here are some other methods of preventing callback hell are:<br/>
<ul>
<li>Don’t nest functions, give them names, and place them at the top of your program.</li>
<li>Utilize function hoisting to move functions out of the way.</li>
<li>Handle every error in each of your callbacks.</li>
<li>Modularize your code by creating reusable functions and placing them in their own module.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>35. What is NPM?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
NPM is the default package manager for Node.js and servers as the world’s largest software registry. Open source developers from every continent use 
npm to share and borrow packages, and many organizations use npm to manage private development as well.
<!-- Answer ::: END -->
</div>
</div>

<div><b>36. What functionalities does NPM provide when building Node.js applications?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
NPM consists of a command-line client and an online database of public and paid private packages called the NPM registry. The registry is accessed 
via the client, and the available packages can be browsed and searched via the NPM website.
<!-- Answer ::: END -->
</div>
</div>

<div><b>37. What’s the difference between NPM packages and Node.js core modules?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Node.js core modules provide the bare minimum functionalities of Node.js. They are compiled into the binary distribution of Node.js and load 
automatically when the Node.js process starts. Therefore, they can be imported directly into your Node.js code without installing anything.</li>
<li>On the other hand, NPM packages is code that can be imported into a Node.js application via the NPM registry. These need to be installed via the 
NPM command-line utility.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>38. What is a global installation of a NPM dependency?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>An NPM dependency that is installed globally on your machine will be stored in a single place in the system, no matter where you run the installation
 script. The destination for the packages will depend on your OS, deployment, or configuration settings.</li>
<li>But, you won’t be able to import global packages into a Node.js application directly.</li>
<li>You can install Node.js packages globally by adding the <code><b>-g</b></code> flag to the npm install command.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>39. What is a local dependency of a NPM dependency?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
NPM packages installed locally will be installed to the node_modules directory for a given Node.js application. These packages can be imported 
directly into the Node.js application it was installed for.<br/><br/>
This is the default behavior for installing NPM packages and, therefore, you don’t need to add any flags to the npm install command.
<!-- Answer ::: END -->
</div>
</div>

<div><b>40. How do you update NPM to a new version in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can update NPM to the latest version by using this command: <code><b>npm install -g npm@latest</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>41. What is the most popular alternative to NPM? What are its benefits?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Yarn is a popular alternative to NPM.</li>
<li>Many have reported that Yarn provides much faster installation times compared to NPM due to it’s caching mechanisms. And it also makes security 
a core value by using checksums to verify the integrity of every installed package before its code is executed.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>42. What’s a package.json file? And what is it used for?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The package.json file holds the various metadata relevant to a Node.js project. It gives information to NPM that allows it to identify the project 
as well as handle its dependencies.<br/><br/>
It can also hold other types of metadata such as a project description, the version of the project, license information, and even configuration data. 
It is usually stored in the root directory of a Node.js application.
<!-- Answer ::: END -->
</div>
</div>

<div><b>43. What’s a package-lock.json file? And why is it used?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>The package-lock.json file is automatically generated for any operations where NPM modifies either the node_modules directory or the 
package.json file. It describes the exact tree that was generated, such that subsequent installs can generate identical trees, regardless of 
intermediate dependency updates.</li>
<li>It serves several purposes:</li>
<li>Ensures that teammates, deployments, and continuous integration are guaranteed to install exactly the same dependencies.</li>
<li>Provides a facility for users to “time-travel” to previous states of node_modules without having to commit the directory itself.</li>
<li>Facilitates more visibility to tree changes through readable source control diffs.</li>
<li>Optimizes the installation process by allowing NPM to skip repeated metadata resolutions for previously-installed packages.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>44. How do you update a dependency using NPM?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can update one or multiple NPM dependencies using the npm update app-name command.
<!-- Answer ::: END -->
</div>
</div>

<div><b>45. What’s the difference between a dependency and a devDependency in the package.json file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The devDependencies are modules that are only required during the development process. And dependencies are modules that are required at runtime.
<!-- Answer ::: END -->
</div>
</div>

<div><b>46. What are exit codes in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js will normally exit with a 0 status code when no more async operations are pending. There are other codes used in different circumstances.<br/><br/>
Some examples include:
<ul>
<li><b>1 – Uncaught Fatal Exception :</b> There was an uncaught exception, and it was not handled by a domain or an event handler.</li>
<li><b>3 – Internal JavaScript Parse Error :</b> The JavaScript source code internal in Node’s bootstrapping process caused a parse error.</li>
<li><b>4 – Internal JavaScript Evaluation Failure:</b> The JavaScript source code internal in Node’s bootstrapping process failed to return a function value when 
evaluated.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>47. What is REPL in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js comes with a virtual machine called <code><b>REPL</b></code>, which is also called the Node shell. <code><b>REPL</b></code> stands for 
<code><b>Read-Eval-Print-Loop</b></code> and the virtual environment can be used as a quick and easy way to test simple Node.js code.
<!-- Answer ::: END -->
</div>
</div>

<div><b>48. Why is it important to maintain a consistent coding style across a Node.js project?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Inconsistent code can cause problems if your code is very interconnected with legacy code or if it’s part of a much large library. And it could 
also cause problems if a lot of people work on your codebase and, therefore, many different people need to understand it and work on it.<br/><br/>
Maintaining a consistent coding styling will help mitigate any of those potential problems.
<!-- Answer ::: END -->
</div>
</div>

<div><b>49. What tools can be used to assure it?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can use JavaScript IDE’s like VS Code that will help you format your code by default. And you can also use packages like ESLint that let you 
configure a set of formatting rules for your code and enforces them during testing and deployment processes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>50. What purpose does a .env file serve?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>The <code><b>.env</b></code> file is used for storing any environment variables used for a Node.js project.</li>
<li>Environment variables are used to store sensitive information like API keys and passwords and can be used to easily handle those variables globally 
across an entire Node.js application.</li>
<li>The .env file is usually stored in the root directory for an application and shouldn’t be committed to the source code repository because it often 
contains sensitive information like passwords and usernames.</li>
<li>In order to use the variables declared in the .env file, you’ll need to use some type of loader. We have an article that goes over how to do that.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>51. What are the differences between the setTimeout() & setInterval() functions?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>setTimeout() :</b><br/><br/>
The <code><b>setTimeout()</b></code> function lets you run a function once after an interval of time has elapsed (specified by the developer).<br/>
Here’s a code example:
<pre><code class="language-html hljs xml">setTimeout(() => {
 console.log(“Hello!”)
}, 1000)</code></pre>
The message will be logged after the 1000 milliseconds time interval has elapsed.
<b>setInterval() :</b><br/><br/>
The <code><b>setInterval()</b></code> function lets you run a function repeatedly, starting after an interval of time has elapsed 
(specified by the developer), and then repeating continuously at that interval.<br/><br/>
Here’s a code example:
<pre><code class="language-html hljs xml">setInterval(() => {
 console.log(“Hello!”)
}, 5000)</code></pre>
This will first wait for 5000 milliseconds and then log the message after every subsequent 5000 milliseconds have passed.<br/><br/>
It’s dangerous to use the <code><b>setTimeout()</b></code> function for shorter time periods. You should only use it for longer periods to avoid 
getting backed up.
<!-- Answer ::: END -->
</div>
</div>

<div><b>52. How do you create a directory using Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js has an Fs core module that provides an <code><b>fs.mkdir()</b></code> function that makes creating a new directory or folder an easy process.<br/><br/>
The code would look something like this:
<pre><code class="language-html hljs xml">const fs = require("fs")
fs.mkdir("./new-directory-name", function(err) {
 if (err) {
  console.log(err)
 } else {
  console.log(“New directory successfully created.”)
 }
})</code></pre>
That function would result in a new directory called new-directory-name being created.<br/><br/>
It’s also worth noting that fs.mkdir() doesn’t create nested or dependent directories in it’s default state.
<!-- Answer ::: END -->
</div>
</div>

<div><b>53. How do you delete a directory?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js has an Fs core module that provides an <code><b>fs.rmdir()</b></code> function that allows you to delete an empty directory.<br/><br/>
If you want to delete a directory that contains files or other sub-directories, you’ll need to recursively go through and remove all the individual 
files first. There are NPM packages that handle this for you, such as <code><b>rimraf</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>54. How would you read the contents of a directory?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js has an Fs core module that provides an <code><b>fs.readdir()</b></code> function that makes it easy to read the contents of a specified directory.<br/><br/>
The code would look something like this:
<pre><code class="language-html hljs xml">const path = require("path")
const fs = require("fs")
const directoryPath = path.join(__dirname, "files")
fs.readdir(directoryPath, function(err, files) {
 if (err) {
  console.log(“Error getting directory information.”)
 } else {
  files.forEach(function(file) {
   console.log(file)
  })
 }
})</code></pre>
The results will be both files and directories, so you’ll need <code><b>fs.stat()</b></code> to differentiate between which is which.
<!-- Answer ::: END -->
</div>
</div>

<div><b>55. What is the preferred method of solving unhandled exceptions in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Process is a global object that provides information about the current Node.js process that is being used by your application. And it is also a 
listener function that listens for certain events to occur.<br/><br/>
Some of those events include:
<ul>
<li>exit</li>
<li>disconnect</li>
<li>uncaughtException</li>
<li>rejectionHandled</li>
</ul>
You can write your own code to detect when the unhandledException event has been fired and handle the error safely:
<pre><code class="language-html hljs xml">process.on(“uncaughtException”, function(err) {
 // handle the error
 console.log(err)
})</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>56. Can you name some programming paradigms that are important for Node.js developers?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Four important programming paradigms:
<ol>
<li>Functional Programming</li>
<li>Object-Oriented Programming</li>
<li>Procedural Programming</li>
<li>Imperative Programming</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>57. Can you describe what functional programming is?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Functional Programming</b></code> is a programming paradigm where you structure your code using mostly functions. These functions take inputs 
(called arguments) and show the output based on those inputs provided to the function.<br/><br/>
It also doesn’t allow any mutation or shared state and the functions are intended to stay pure to their expression and avoid side-effects.<br/><br/>
Examples of functional programming languages include <code><b>Lisp</b></code>, <code><b>Haskell</b></code>, <code><b>Erlang</b></code>, <code><b>Clojure</b></code>, 
and <code><b>Elm</b></code>.<br/><br/>
Some features of the functional programming paradigm include first-class citizen functions, higher-order functions, and function composition.<br/><br/>
The main benefit of using functional programming is that it doesn’t involve a lot of side-effects and is immutable, which reduces the chances that your code 
will create hard to track down bugs. And your code will be more clean, straightforward, and succinct.
<!-- Answer ::: END -->
</div>
</div>

<div><b>58. What is object-oriented programming?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Object-oriented programming is a coding paradigm where you use objects to model real-world things that you want to represent inside your application. 
And it provides a simple way to access functionality that would otherwise be hard or impossible to make use of.
<!-- Answer ::: END -->
</div>
</div>

<div><b>59. What are the pros and cons between these two paradigms: functional programming and object-oriented programming?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Object-Oriented Programming :</b><br/><br/>
<b>Pros :</b>
<ul>
<li>The basic concepts behind objects and method calls are easy to understand for developers.</li>
<li>The imperative style (rather than declarative) reads like a more straight forward set of instructions for the computer to follow.</li>
</ul>
<br/><br/>
<b>Cons :</b>
<ul>
<li>Objects and behaviors are tacked together to the same entity and often use a shared state. This means they can be accessed at random by other 
functions in a non-deterministic order, which could lead to undesirable behavior such as race conditions.</li>
</ul>
<br/><br/>
<b>Functional Programming</b><br/><br/>
<b>Pros :</b>
<ul>
<li>In the functional paradigm, sharing state and/or side-effects is avoided. This eliminates the potential for bugs to arise from the same functions 
using the same resources.</li>
<li>Programs that use pure functions are typically easier to scale to multiple additional processors or across distributed clusters without race condition 
or threading resource issues.</li>
<li>Functional programming usually uses the declarative style, which does not give step-by-step instructions for operations. They instead focus on what 
to do and let the underlying functions figure out how to do it. This leaves a lot of room for refactoring and performance optimization.</li>
</ul>
<br/><br/>
<b>Cons :</b>
<ul>
<li>Using functional programming styles in your code too much can potentially lead to reduced readability because the resulting code is often abstract, 
more terse, and less concrete. More people are familiar with the object-oriented programming style, so common ideas in functional programming may be 
confusing to new teammates.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>60. What is a pure function?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Pure functions don’t produce any side-effects and can’t alter any state external from itself. Given the same input, they should always return 
the same output. Not every function can be pure, but its often a good choice when they can be.
<!-- Answer ::: END -->
</div>
</div>

<div><b>61. What is function composition?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Function composition is the process of combining more than one function to produce a new function.
<!-- Answer ::: END -->
</div>
</div>

<div><b>62. What’s the difference between the two types of inheritance: prototypal & classical?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Classical Inheritance :</b><br/><br/>
<ul>
<li>These inherent from a class and create sub-class relationships called hierarchical class taxonomies. Instances are usually created using a constructor 
function with the new keyword.</li>
<li>Class inheritance might or might not use the class keyword from ES6.</li>
<li>It’s also worth noting that classical syntax in JavaScript serves as mostly sugar over prototypal inheritance, which is what’s actually used in practice 
for JavaScript. This is because deeply nested heirarchies over large sets of object/class syntax can have negative effects on performance.</li>
</ul>
<b>Prototypal Inheritance :</b><br/><br/>
<ul>
<li>These inherit directly from another object and are usually created using factory functions or the <code><b>Object.create()</b></code> method. 
Instances can be composed of many different methods.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>63. What is a Closure?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>A closure is the combination of a function bundled together (enclosed) with references to its surrounding state (the lexical environment). In other 
words, a closure gives you access to an outer function’s scope from an inner function. In JavaScript, closures are created every time a function is 
created, at function creation time.</li>
<li>Closures are important because they control what is and isn’t in scope in a particular function, along with which variables are shared between sibling 
functions in the same containing scope. Understanding how variables and functions relate to each other is important in understanding how your code works.</li>
<li>You can use a closure by defining a function inside another one and then expose it by returning or passing it to another function. The inner function 
will then have access to the variables in the outer function scope.</li>
<li>Starting with the release of ES6, you can now create a closure with loops and objects where <code><b>let</b></code> and <code><b>const</b></code> are 
scope to the closure.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>64. What are some common uses for closures?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Closures are useful because they let you associate data with a function that operates on that data. This has obvious parallels to object-oriented 
programming, where objects allow us to associate some data (the object’s properties) with one or more methods.</li>
<li>Some use cases for closures include <code><b>event handlers</b></code>, <code><b>callbacks</b></code>, <code><b>intervals</b></code>, <code><b>timeouts</b></code> 
and keeping variables private within a given function.</li>
<li>Closures have the chance of causing an over-consumption of memory and/or memory leaks if they’re not handled correctly.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>65. What’s Git used for?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Git is a free and open-source distributed version control system.</li>
<li>In other words, it’s an application that keeps track of your code and all the changes that have been made to it in the past. Also, it allows you 
to share your code with others and collaborate on it without overwriting each other’s changes.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>66. What’s a reverse proxy?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A reverse proxy is a type of web server that takes requests, forwards them to another HTTP server somewhere else, receives a reply, and then forwards the 
data to the original requestor.
<!-- Answer ::: END -->
</div>
</div>

<div><b>67. What are the benefits of using a reverse-proxy (with Nginx or Apache) for a Node.js application?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are several benefits:
<ul>
<li><b>SSL termination :</b> Handling SSL termination (changing HTTP to HTTPS) directly in your Node.js app can be tedious and expose security risks. 
When only a reverse proxy is allowed to perform SSL termination, only the reverse proxy has access to the SSL certificate. Without a reverse proxy, all 
the code in your application (including 3rd party modules) will have access to your certificates.</li>
<li><b>Clustering :</b> Node.js comes with it’s built-in Cluster modules which can run applications on more than one process. But using software like 
Nginx to run a reverse proxy is often more efficient and uses less cache than a Node.js solution.</li>
<li><b>Gzip compression :</b> Off-loading gzip compression from your application to the reverse proxy can allow you to have the same compression logic 
at the organization level, instead of having to configure it for each application.</li>
<li><b>Performance benefits :</b> SSL encryption, clustering, and gzip compression are high CPU-bound operations. Dedicated reverse proxy tools (like 
Nginx) usually perform those tasks faster than Node.js.</li>
<li><b>Simplified application code :</b> Using a reverse proxy allows your application to focus on business logic and not about protocols and process 
management. As a result, your code will be simplified greatly.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>68. What’s the difference between SQL & NoSQL databases?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>SQL :</b> a relational database management system, is vertical scalable, has fixed schema, is not suitable for hierarchical data storage, and can 
be used for complex queries.</li>
<li><b>NoSQL :</b> a distributed database management system, horizontally scalable, has a dynamic schema, is best suitable for hierarchical data storage, 
and is not good for complex queries.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>69. What’s the difference between declaring a variable with const, var, or let?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>let :</b> means the variable may be reassigned (used for things like a counter in a loop or a value swap in an algorithm).</li>
<li><b>const :</b> means that the identifier can’t and won’t be reassigned.</li>
<li><b>var :</b> means that the variable may or may not be reassigned and it may or may not be used for an entire function.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>70. What’s the difference between the null, undefined, and undeclared variable values?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>null :</b> is a value of a variable and is a type of object.</li>
<li><b>undefined :</b> is a variable that has been declared but no value exists for it.</li>
<li><b>undeclared:</b> is a variable that has been declared without the <code><b>var</b></code>, <code><b>let</b></code> or <code><b>const</b></code> keyword.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>71. What are some of the most popular Node.js packages / libraries you know of?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Express :</b> A Node.js web application server framework, designed for building single-page, multi-page, and hybrid web applications. It is the 
standard server framework for node.js.</li>
<li><b>Request :</b> Request is designed to be the simplest way possible to make HTTP calls.</li>
<li><b>Browserify :</b> Browserify lets you require(“modules”) in the browser by bundling up all of your dependencies.</li>
<li><b>PM2 :</b> PM2 is a production process manager for Node.js applications with a built-in load balancer. It allows you to keep applications alive 
forever, to reload them without downtime and to facilitate common system admin tasks.</li>
<li><b>Cheerio :</b> A fast, flexible, and lean implementation of JQuery designed for use on the server.</li>
<li><b>Passport :</b> Passport is authentication middleware for Node.js. Extremely flexible and modular, Passport can be unobtrusively dropped into 
any Express-based web application.</li>
<li><b>Nodemailer :</b> Makes it easy to send emails from Node.js.</li>
<li><b>Mongoose -</b> Mongoose is also a Node.js web application framework that makes it easy to connect an application to a database.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>72. What’s the purpose of the console object?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In Node.js, <code><b>console</b></code> is a global object used for printing different levels of messages to <code><b>stdout</b></code> and 
<code><b>stderr</b></code>. It also includes built-in ways to print <code><b>informational</b></code>, <code><b>warning</b></code>, and 
<code><b>error</b></code> messages.<br/><br/>
Here are the two most used methods provided by the console object and their key differences:
<ul>
<li><b>console.log() :</b> writes to stdout, buffered, and asynchronous.
<pre><code class="language-html hljs xml">console.log("Hello")
// Prints: Hello, to stdout</code></pre>
</li>
<li><b>console.error() :</b> writes to stderr, synchronous, and blocking.
<pre><code class="language-html hljs xml">console.error(new Error(“Error occurred!”))
// Prints: [Error: Error occurred!], to stderr</code></pre></li>
</ul>

<!-- Answer ::: END -->
</div>
</div>

<div><b>73. What is the purpose of module.exports in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>module.exports</b></code> takes a JavaScript code file and exposes it to other files so they can import those functions or variables. 
Whatever variable or function you assign with module.exports or exports will be exposed as a module for other files.
<!-- Answer ::: END -->
</div>
</div>

<div><b>74. How would you describe a monolithic application architecture?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A monolithic architecture means an app is built as one cohesive unit of code that has components that are designed to work 
together and share the same resources.
<!-- Answer ::: END -->
</div>
</div>

<div><b>75. How would you describe a microservice application architecture?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A microservice architecture means an app is made up of lots of smaller, independent applications capable of running with their 
own resources and can scale independently from each other across multiple machines.
<!-- Answer ::: END -->
</div>
</div>

<div><b>76. What are the pros and cons between a microservice and monolithic architecture?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Monolithic Architecture</b><br/><br/>
<b>Pros :</b>
<ol>
<li>When everything is running through the same application, it’s easy to hook up components to those cross-cutting concerns.</li>
<li>Shared-memory access is faster than inter-process communication, therefore there can be performance advantages.</li>
</ol>
<b>Cons:</b>
<ol>
<li>These applications tend to get entangled as the application evolves, which makes it hard to isolate different services.</li>
<li>Monolithic architectures become harder to understand the larger they get because of dependencies, side-effects, and magic that are now 
obvious unless you look at a specific part of the codebase.</li>
</ol>
<b>Microservice Architecture</b><br/><br/>
<b>Pros :</b>
<ol>
<li>Since each service is modularized and has its own specific job, microservice architectures are usually organized better.</li>
<li>They can result in better performance because you can isolate specific services and scale them individually from the rest of the application.</li>
</ol>
<b>Cons :</b>
<ol>
<li>Testing can be difficult since each service is running in its own environment.</li>
<li>Deployment complexity will be increased and the operational cost of deploying and managing the multiple services and systems will be increased as well.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>77. Why is Node.js Single-threaded?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js is single-threaded for async processing. By doing async processing on a single-thread under typical web loads, more performance and scalability 
can be achieved instead of the typical thread-based implementation.
<!-- Answer ::: END -->
</div>
</div>

<div><b>78. If Node.js is single-threaded, then how does it handle concurrency?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Multi-Threaded Request/Response Stateless Model is not followed by the Node JS Platform, and it adheres to the Single-Threaded Event Loop Model. 
The Node JS Processing paradigm is heavily influenced by the JavaScript Event-based model and the JavaScript callback system. As a result, Node.js can 
easily manage more concurrent client requests. The event loop is the processing model's beating heart in Node.js.
<!-- Answer ::: END -->
</div>
</div>

<div><b>79. What are the advantages of using promises instead of callbacks?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>The control flow of asynchronous logic is more specified and structured.</li>
<li>The coupling is low.</li>
<li>We've built-in error handling.</li>
<li>Improved readability.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>80. How would you define the term I/O? </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>The term I/O is used to describe any program, operation, or device that transfers data to or from a medium and to or from another medium.</li>
<li>Every transfer is an output from one medium and an input into another. The medium can be a physical device, network, or files within a system.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>81. Where we can use Node JS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js is widely used in the following applications:
<ol>
<li>Real-time chats</li>
<li>Internet of Things</li>
<li>Complex SPAs (Single-Page Applications)</li>
<li>Real-time collaboration tools</li>
<li>Streaming applications</li>
<li>Microservices architecture</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>82. Why is Node.js preferred over other backend technologies like Java and PHP?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Some of the reasons why Node.js is preferred include:
<ol>
<li>Node.js is very fast</li>
<li>Node Package Manager has over 50,000 bundles available at the developer’s disposal</li>
<li>Perfect for data-intensive, real-time web applications, as Node.js never waits for an API to return data</li>
<li>Better synchronization of code between server and client due to same code base</li>
<li>Easy for web developers to start using Node.js in their projects as it is a JavaScript library</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>83. What is the difference between Angular and Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Angular</th><th>Node JS</th></tr></thead>
<tbody>
 <tr>
  <td>It is a frontend development framework.</td>
  <td>It is a server-side environment.</td>
 </tr>
 <tr>
  <td>It is written in TypeScript.</td>
  <td>It is written in C, C++ languages.</td>
 </tr>
 <tr>
  <td>Used for building single-page, client-side web applications.</td>
  <td>Used for building fast and scalable server-side networking applications.</td>
 </tr>
 <tr>
  <td>Splits a web application into MVC components.</td>
  <td>Generates database queries.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>84. Which database is more popularly used with Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>MongoDB</b></code> is the most common database used with Node.js. It is a NoSQL, cross-platform, document-oriented database that provides high 
performance, high availability, and easy scalability.
<!-- Answer ::: END -->
</div>
</div>

<div><b>85. Differentiate between process.nextTick() and setImmediate()?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The distinction between method and product. This is accomplished through the use of <code><b>nextTick()</b></code> and <code><b>setImmediate()</b></code>.<br/>
<code><b>nextTick()</b></code> postpones the execution of action until the next pass around the event loop, or it simply calls the callback function 
once the event loop's current execution is complete, whereas <code><b>setImmediate()</b></code> executes a callback on the next cycle of the event loop 
and returns control to the event loop for any I/O operations.
<!-- Answer ::: END -->
</div>
</div>

<div><b>86. How would you use a URL module in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The URL module in Node.js provides various utilities for URL resolution and parsing. It is a built-in module that helps split up the 
web address into a readable format.
<!-- Answer ::: END -->
</div>
</div>

<div><b>87. How do we implement Asynchronous (async) in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
As shown below, the async code asks the JavaScript engine running the code to wait for the <code><b>request.get()</b></code> function to complete 
before moving on to the next line for execution.
<pre><code class="language-html hljs xml">async function fun1(req, res) {
 let response = await request.get("http://localhost:3000");
 if(response.err) { console.log('error'); }
 else { console.log('fetched response'); }</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>88. How does control flow manage the function calls?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Control Flow does the following jobs:
<ul>
<li>Control the Order of Execution</li>
<li>Control data</li>
<li>Limit Concurrency</li>
<li>Call the Next Step in a Program</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>89. What is the difference between fork() and spawn() methods in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>fork()</th><th>spawn()</th></tr></thead>
<tbody>
 <tr>
  <td><code><b>child_process.fork(modulePath[,args][,options])</b></code></td>
  <td><code><b>child_process.spawn(command[,args][,options])</b></code></td>
 </tr>
 <tr>
  <td><code><b>fork()</b></code> is a particular case of <code><b>spawn()</b></code> that generates a new instance of a V8 engine.</td>
  <td><code><b>spawn()</b></code> launches a new process with the available set of commands.</td>
 </tr>
 <tr>
  <td>Multiple workers run on a single node code base for multiple tasks.</td>
  <td>This method doesn’t generate a new V8 instance, and only a single copy of the node module is active on the processor.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>90. What is the buffer class in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Buffer class stores raw data similar to an array of integers but corresponds to a raw memory allocation outside the V8 heap. 
Buffer class is used because pure JavaScript is not compatible with binary data.
<!-- Answer ::: END -->
</div>
</div>

<div><b>91. What are some of the flags used in the read/write operations in files?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>r -</b> Open file for Reading. An Exception occurs if the file doesn't exist.</li>
<li><b>r+ -</b> Open file for Reading and Writing. An Exception occurs if the file doesn't exist.</li>
<li><b>w -</b> Open file for Writing. If file doesn't exist, the file is created. If exists, file is truncated.</li>
<li><b>w+ -</b> Open file for Reading and Writing. If file doesn't exist, the file is created. If exists, file is truncated.</li>
<li><b>a -</b> Open file for appending. The file is created if it doesn't exist.</li>
<li><b>a+ -</b> Open file for Reading and Appending. The File is created if it doesn't exist.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>92. How do you open a file in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This is the Syntax for opening a file in NodeJS.
<pre><code class="language-html hljs xml">fs.open(path,flags[,mode],callback)</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>93. What is a reactor pattern in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A reactor pattern is a concept of non-blocking I/O operations. This pattern provides a handler that is associated with each I/O operation. 
As soon as an I/O request is generated, it is then submitted to a demultiplexer.
<!-- Answer ::: END -->
</div>
</div>

<div><b>94. What is a test pyramid in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A Test Pyramid is a figure which explains the proportion of Unit Tests, Integration Tests and End-to-End Tests that are required for the proper 
development of a Project.<br/><br/>
The Components of a Test Pyramid are:
<ul>
<li><b>Unit Tests :</b><br/>
They test the individual units of code in Isolation.
</li>
<li><b>Integrations Tests :</b><br/>
They test the Integration among dissimiliar units.</li>
<li><b>End-to-End (E2E) Tests :</b><br/>
They test the whole system, from the User Interface to the Data Store, and back.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>95. For Node.js, why does Google use the V8 engine?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The V8 engine, developed by Google, is open-source and written in C++. Google Chrome makes use of this engine. V8, unlike the other engines, 
is also utilized for the popular Node.js runtime. V8 was initially intended to improve the speed of JavaScript execution within web browsers. 
Instead of employing an interpreter, V8 converts JavaScript code into more efficient machine code to increase performance. It turns JavaScript 
code into machine code during execution by utilizing a JIT (Just-In-Time) compiler, as do many current JavaScript engines such as SpiderMonkey 
or Rhino (Mozilla).
<!-- Answer ::: END -->
</div>
</div>

<div><b>96. List the various Node.js timing features.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Timers Module is provided by NodeJS which contains various functions for executing the code after a specified period of time. Various functions 
that are provided by this Module:
<ul>
<li><b>setTimeout / clearTimeout :</b> Used to schedule code execution after a designated amount of milliseconds.</li>
<li><b>setInterval / clearInterval :</b> Used to execute a block of code multiple times.</li>
<li><b>setImmediate / clearImmediate : </b> Used to execute code at the end of the current event loop cycle.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>97. What is WASI, and why is it being introduced?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
WASI stands for <code><b>WebAssembly System Interface</b></code>.<br/><br/>
The WASI class implements the WASI system called API and extra convenience methods for interacting with WASI-based applications. Every WASI instance 
represents a unique sandbox environment. Each WASI instance must specify its command-line parameters, environment variables, and sandbox directory 
structure for security reasons.
<!-- Answer ::: END -->
</div>
</div>

<div><b>98. List down the two arguments that async.queue takes as input?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Task Function</li>
<li>Concurrency Value</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>99. What tools can be used to assure consistent code style?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
ESLint can be used with any IDE to ensure a consistent coding style which further helps in maintaining the codebase. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>100. Why should you separate Express app and server?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The server is responsible for initializing the routes, middleware, and other application logic whereas the app has all the business logic 
which will be served by the routes initiated by the server. This ensures that the business logic is encapsulated and decoupled from the 
application logic which makes the project more readable and maintainable.
<!-- Answer ::: END -->
</div>
</div>

<div><b>101. Explain the concept of stub in Node.js?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Stubs are used in writing tests which are an important part of development. It replaces the whole function which is getting tested.<br/><br/>
This helps in scenarios where we need to test:
<ul>
<li>External calls which make tests slow and difficult to write (e.g HTTP calls/ DB calls)</li>
<li>Triggering different outcomes for a piece of code (e.g. what happens if an error is thrown/ if it passes)</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>102. Enhancing Node.js performance through clustering.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node.js applications run on a single processor, which means that by default they don’t take advantage of a multiple-core system. Cluster mode is 
used to start up multiple node.js processes thereby having multiple instances of the event loop. When we start using cluster in a nodejs app behind 
the scene multiple node.js processes are created but there is also a parent process called the <code><b>cluster manager</b></code> which is responsible 
for monitoring the health of the individual instances of our application.
<!-- Answer ::: END -->
</div>
</div>

<div><b>103. What is a thread pool and which library handles it in Node.js</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Thread pool is handled by the libuv library. libuv is a multi-platform C library that provides support for asynchronous I/O-based operations 
such as file systems, networking, and concurrency. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>104. How are worker threads different from clusters?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Cluster :</b><br/><br/>
<ul>
<li>There is one process on each CPU with an IPC to communicate.</li>
<li>In case we want to have multiple servers accepting HTTP requests via a single port, clusters can be helpful.</li>
<li>The processes are spawned in each CPU thus will have separate memory and node instance which further will lead to memory issues.</li>
</ul>
<br/><br/>
<b>Worker threads :</b><br/><br/>
<ul>
<li>There is only one process in total with multiple threads.</li>
<li>Each thread has one Node instance (one event loop, one JS engine) with most of the APIs accessible.</li>
<li>Shares memory with other threads (e.g. SharedArrayBuffer).</li>
<li>This can be used for CPU-intensive tasks like processing data or accessing the file system since NodeJS is single-threaded, synchronous tasks 
can be made more efficient leveraging the worker's threads.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>105. How to measure the duration of async operations?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Performance API provides us with tools to figure out the necessary performance metrics.
<!-- Answer ::: END -->
</div>
</div>

<div><b>106. How to measure the performance of async operations?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Performance API provides us with tools to figure out the necessary performance metrics. 
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>
