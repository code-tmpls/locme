<div><b>1. What is WebSockets?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
WebSocket is a technology that allows a client to establish two-way full-duplex communication with the server.
The keyword in that definition is two-way: with WebSocket, both the client and the server can trigger communication with 
one another, and both can send messages, at the same time. By a contrast In a traditional HTTP system communication can only 
be initiated in one direction: from the client to the server.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What is Short polling and what problems do we have with it?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Short Polling</b></code> or <code><b>Ajax Polling</b></code> is a technique when we have the client ping the 
server repeatedly, say, every 500ms (or over some fixed delay). That way, you get new data every 500ms.<br/><br/>
<b>Connection Procedure:</b><br/><br/>
<ul>
<li>Client requests a webpage from a server using regular HTTP.<li>
<li>The client receives the requested webpage and executes the JavaScript on the page which requests a file from the 
server at regular intervals (e.g. 0.5 seconds).</li>
<li>The server calculates each response and sends it back, just like normal HTTP traffic.</li>
</ul>
<b>Problems:</b><br/><br/>
<ul>
<li>There’s a 500ms delay</li>
<li>It consumes server resources with a barrage of requests, and most requests will return empty if the data isn’t frequently updated.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. Explain what is Server-Sent Events (SSE) / EventSource?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Alongside with short and long polling, SSE is a technique for sending messages is the Server-Sent Events API, which allows the server to 
push updates to the client by leveraging the JavaScript <code><b>EventSource</b></code>. EventSource opens a persistent, one-directional 
connection with the server over HTTP using a special text/event-stream header and listens for messages, which are treated like JavaScript 
events by your code.<br/><br/>
Server-Sent Events (SSE) are great for apps where you don’t need to send the server any data—for example, a Twitter-style news feed or a 
real-time dashboard of stock quotes. Another pro is that Server-Sent Events work over HTTP and the API is relatively easy to use.
However:
<ul>
<li>SSE is not supported by older browsers,</li>
<li>Most browsers limit the number of SSE connections you can make at the same time.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What do you mean by lower latency interaction? </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Low latency</b></code> means that there is very little delay between the time you request something and 
the time you get a response. As it applies to webSockets, it just means that data can be sent quicker (particularly over slow 
links) because the connection has already been established so no extra packet roundtrips are required to establish the TCP connection.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. Why use WebSocket over Http?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A WebSocket is a continuous connection between client and server. That continuous connection allows the following:<br/><br/>
<ul>
<li>Data can be sent from server to client at any time, without the client even requesting it. This is often called server-push 
and is very valuable for applications where the client needs to know fairly quickly when something happens on the server (like a new chat 
messages has been received or a new price has been udpated). A client cannot be pushed data over http. The client would have to regularly 
poll by making an http request every few seconds in order to get timely new data. Client polling is not efficient.</li>
<li>Data can be sent either way very efficiently. Because the connection is already established and a webSocket 
data frame is very efficiently organized, one can send data a lot more efficiently that via an HTTP request that necessarily 
contains headers, cookies, etc...</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What is the difference between WebSockets vs. Server-Sent events/EventSource?  </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Websockets and SSE (Server Sent Events) are both capable of pushing data to browsers, however they are not competing technologies.<br/><br/>
Websockets connections can both send data to the browser and receive data from the browser. A good example of an application that could use 
websockets is a chat application.<br/><br/>
SSE connections can only push data to the browser. Online stock quotes, or twitters updating timeline or feed are good examples of an application 
that could benefit from SSE.<br/><br/>
In practice since everything that can be done with SSE can also be done with Websockets, Websockets is getting a lot more attention and 
love, and many more browsers support Websockets than SSE.<br/><br/>
However, it can be overkill for some types of application, and the backend could be easier to implement with a protocol such as SSE.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. Mention some advantages of SSE over Websockets  </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Advantages of SSE over Websockets:</b><br/><br/>
<ul>
<li>Transported over simple HTTP instead of a custom protocol.</li>
<li>Can be poly-filled with javascript to "backport" SSE to browsers that do not support it yet.</li>
<li>Built in support for re-connection and event-id.</li>
<li>Simpler protocol.</li>
<li>No trouble with corporate firewalls doing packet inspection.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. Explain what is Long Polling?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It is a technology where the client requests information from the server without expecting an immediate response or basically 
involves making an HTTP request to a server and then holding the connection open to allow the server to respond later. Using 
long polling the server allows approximately 6 parallel connections from the browser.
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. Name and explain what different communication techniques on the web do you know?  </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li><b>XHR & XHR2 with CORS</b><br/><br/>
<ul>
<li>XHR can be both synchronous and asynchronous. XHR is the only API that (purposely) supports synchronous requests, meaning the execution of code will block until the callback fires.</li>
<li>There’s nothing particularly new about XHR, but in XHR2 we can handle uploads, and there’s a progress event to tell you how the upload or download 
is getting on.</li>
<li>The super shiny new toy in XHR2 is its support for Cross-Origin Resource Sharing (CORS). This means you can make an XHR request across domains, 
but only if the server you’re connecting to allows it.</li>
</ul>
</li>
<li><b>Web Messaging</b><br/><br/>
<ul>
<li>This API is older, but it’s very useful if you want to get around the XHR same-origin rules.</li>
<li>If you have an &lt;iframe/&gt; document that can accept onmessage events from your origin (i.e., your site), then you can communicate across domains (and origins).
This gives you the ability to send strings across two mutually trusted domains.</li>
</ul>
</li>
<li><b>Web Sockets</b><br/><br/>
<ul>
<li>Web Sockets are used to send messages to and from the server — i.e., a bi-directional socket.</li>
<li>With Web Sockets, you can go across domains, and you’re not bound by the same-origin policy.</li>
<li>This means you can host your normal "apps" server while another server is for streaming content. Or you could host your own pages and connect 
to a live Twitter stream if your users turn on Web Socket support.</li>
</ul>
</li>
<li><b>Server Sent Events</b><br/><br/>
<ul>
<li>The Server-Sent Events API is something that originated from Opera back in 2006 and is used for pushing events from the server to the client.</li>
<li>The key to your server is ensuring it doesn't close the connection on the client - the browser. Most of the examples around the web are doing
 this: closing the connection which tells the API to switch in to polling mode.</li>
</ul>
</li>
<li><b>Web Workers</b><br/><br/>
<ul>
<li>Web Workers are a way of creating a new thread of execution inside the browser.</li>
<li>As an example of when to use a Web Worker, say you’re running a lot of JavaScript and the UI becomes unresponsive. The browser UI hangs 
because, in a way, it’s a "single-threaded application". This JavaScript task could be given to a Web Worker so that the UI can continue functioning.</li>
<li>It’s vital to understand that a Web Worker lives in a sand-boxed environment that doesn’t have access to things like the DOM.</li> 
</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. WebSockets vs Rest API for real time data? Which to choose?  </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>REST Based Communication API: </b><br/><br/>
REpresentational State Transfer (REST) is a set of architectural principles by which you can design web services and web APIs that focus on a system’s 
resources and how resource states are addressed and transferred. REST APIs follow the request-response communication model. The REST architectural 
constraints apply to the components, connectors, and data elements, within a distributed hypermedia system.<br/><br/>
<b> Web Socket Based Communication APIs : </b><br/><br/>
Web Socket APIs allow bi-directional, full-duplex communication between clients and servers. It follows the exclusive pair communication model. 
This Communication API does not require a new connection to be set up for each message to be sent between clients and servers. Once the connection 
is set up the messages can be sent and received continuously without any interruption. WebSocket APIs are suitable for IoT Applications with low 
latency or high throughput requirements.<br/><br/>
<b>Difference between REST API and Web-Socket API:</b><br/><br/>
<div class="table-responsive">          
<table class="table">
<thead><tr><th>REST API</th><th>Web-Socket API</th></tr></thead>
<tbody>
 <tr>
  <td>It is Stateless protocol. It will not store the data.</td>
  <td>It is Stateful protocol. It will store the data.</td>
 </tr>
 <tr>
  <td>It is Uni-directional. Only either server or client will communicate.</td>
  <td>It is Bi-directional. Messages can be received or sent by both server or client.</td>
 </tr>
 <tr>
  <td>It is Request-Response Model.</td>
  <td>It is Full duplex model.</td>
 </tr>
 <tr>
  <td>HTTP request contains headers like head section, title section.</td>
  <td>It is suitable for real-time applications. It does not have any overhead.</td>
 </tr>
 <tr>
  <td>New TCP connection will be set up for each HTTP request.</td>
  <td>Only Single TCP connection.</td>
 </tr>
 <tr>
  <td>Both horizontal and vertical scaling (we can add many resources and number of users both horizontally and vertically).</td>
  <td>Only vertical scaling (we can add resources only vertically).</td>
 </tr>
 <tr>
  <td>It depends upon the HTTP methods to retrieve the data..</td>
  <td>It depends upon the IP address and port number to retrieve the data </td>
 </tr>
 <tr>
  <td>It is slower than web socket regarding the transmission of messages.</td>
  <td>Web socket transmits messages very fastly than REST API.</td>
 </tr>
 <tr>
  <td>It does not need memory or buffers to store the data.</td>
  <td>It requires memory and buffers to store the data.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. Explain key features of Socket.io</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Socket.IO provides the ability to implement real-time analytics, binary streaming, instant messaging, and document collaboration.<br/><br/>
<b>Real-time Applications:</b><br/><br/>
A real-time application (RTA) is an application that functions within a period that the user senses as immediate or current.<br/><br/>
<ul>
<li><b>Instant messengers −</b> Chat apps like Whatsapp, Facebook Messenger, etc. You need not refresh your app/website to receive new messages.</li>
<li><b>Push Notifications −</b> When someone tags you in a picture on Facebook, you receive a notification instantly.</li>
<li><b>Collaboration Applications −</b> Apps like google docs, which allow multiple people to update same documents simultaneously and apply 
changes to all people's instances.</li>
<li><b>Online Gaming −</b> Games like Counter Strike, Call of Duty, etc., are also some examples of real-time applications.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. Why would you choose Server-Sent Events over WebSockets?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When we want to have a two-way communication between Client and the Server, we gohead with Websockets. When we required only Communication 
from Sever to the Client and the Client don't required to respond, then we go with Server-sent Events.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Explain how does WebSockets protocol works?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A WebSocket is a persistent connection between a client and server. WebSockets provide a bidirectional, full-duplex communications channel 
that operates over HTTP through a single TCP/IP socket connection. At its core, the WebSocket protocol facilitates message passing between 
a client and server.<br/><br/>
The Process starts with a WebSocket handshake that involves using a new scheme ws or wss. To understand quickly, you may consider them 
equivalent to HTTP and secure HTTP (HTTPS) respectively.<br/><br/>
Using this scheme, servers and clients are expected to follow the standard WebSocket connection protocol. The WebSocket connection establishment 
begins with HTTP request upgrading that features a couple of headers such as Connection: <code><b>Upgrade</b></code>, 
<code><b>Upgrade: WebSocket</b></code>, <code><b>Sec-WebSocket- Key</b></code>, and so on. <br/><br/>

Here is how this connection is established:<br/><br/>
<ul>
<li><b>The Request</b></li>
<li><b>The Response</b></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is Sec-WebSocket-Key for?  </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What is WebSockets Frame?  </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b>16. Would WebSockets be able to handle 1,000,000 concurrent connections?  </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b>17. When to use WebRTC over WebSockets?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. What are the differences between Socket.io and WebSockets?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. Can you suggest how to load balance Web Sockets?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. How can WebSockets be better than Long-Polling in term of performance?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. How would you secure WebSockets communication on your project?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. How to use CHAP Authentication (Challenge Response Authentication) for webSockets?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. Explain why CDN (in)availability may be a problem for using WebSockets?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. What is the mask in a WebSocket frame?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. What is the fundamental difference between WebSockets and pure TCP?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

