<div><b>1. What is HTTP and HTTPS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>HTTP -</b> Hyper Text Transfer protocol<br/>
<b>HTTPS -</b> Hyper Text Transfer protocol Secure<br/><br/>
They offers set of Standard Rules for Web Server and Web Browser communication.<br/><br/>
<i>HTTP is an application layer network protocol which is built on top of TCP.</i> It uses Hypertext structured text which establishes
 the logical link between nodes containing text. It is also known as “stateless protocol” as each command is executed separately, 
 without using reference of previous run command.<br/><br/>
<i>HTTPS is highly advanced and secure version of HTTP which allows the 
secure transactions by encrypting the entire communication with SSL.</i> In a word, we can say, it is a combination of SSL/TLS protocol and HTTP. 
It provides encrypted and secure identification of a Network server.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What is the difference between Stateless and Stateful protocols?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Scenario</th><th>Stateless</th><th>Stateful</th></tr></thead>
<tbody>
<tr>
<td>Definition</td>
<td>Stateless Protocol is a network protocol in which Client send request to the server and server response back as per the given state.</td>
<td>Stateful Protocol is a network protocol in which if client send a request to the server then it expects some kind of response, in case of no response then it resend the request.</td>
</tr>
<tr>
<td>Protocols</td>
<td>HTTP (Hypertext Transfer Protocol), UDP (User Datagram Protocol), DNS (Domain Name System)</td>
<td>FTP (File Transfer Protocol), Telnet.</td>
</tr>
<tr>
<td>Server Restriction</td>
<td>In Stateless, server is not needed to keep the server information or session details to itself.</td>
<td>In stateful, a server is required to maintain the current state and session information.</td>
</tr>
<tr>
<td>Dependency</td>
<td>In stateless, server and client are loosely coupled and can act independently.</td>
<td>In stateful, server and client are tightly bound.</td>
</tr>
<tr>
<td>Design</td>
<td>Server design is simple to implement.</td>
<td>Server design is comparatively complex and difficult to implement.</td>
</tr>
<tr>
<td>Crash Proof</td>
<td>A failed server can be restarted easily after crash.</td>
<td>A server has to keep the information of session and other details. Crash management is difficult.</td>
</tr>
<tr>
<td>Transactions</td>
<td>Server handles transactions in a very quicker way.</td>
<td>Server is slow comparatively.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What are HTTP Request Messages?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTTP Requests are messages which are sent by the client or user to initiate an action on the server.<br/><br/>
It consists of various things:<br/><br/>
<ul>
<li><b>Request Line:</b><br/> The Request-Line starts with a method token, which is followed by the Request-URI, 
the protocol version, and ending with CRLF. Using the SP characters, the elements are separated.<br/><br/>
<b>Syntax:</b><br/><br/>
<pre><code class="language-html hljs xml">Request-Line = Method SP Request-URI SP HTTP-Version CRLF</code></pre>
</li>
<li><b>The Resource Identified by a Request:</b></li>
<li><b>Request Header Fields:</b><br/>The Request-header fields are used to allow the client to pass additional information 
to the server like the request and the client itself. The request header fields act as request modifiers, with semantics 
equivalent to the parameters on a programming language method invocation.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What are HTTP Request Methods?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
GET

This method retrieves information from the given server using a given URI. GET request can retrieve the data. It cannot apply other effects on the data.

HEAD

The HEAD method is the same as the GET method. It is used to transfer the status line and header section only.

POST

The POST request sends the data to the server. For example, file upload, customer information, etc. using the HTML forms.

PUT

The PUT method is used to replace all the current representations of the target resource with the uploaded content.

DELETE

The DELETE method is used to remove all the current representations of the target resource, which is given by URI.

CONNECT

The CONNECT method is used to establish a tunnel to the server, which is identified by a given URI.
<!-- Answer ::: END -->
</div>
</div>


<div><b>5. What is the Status Code?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Server issues an HTTP Status Code in response to a request of the client made to the server. Status code is a 3-digit integer. 
The first digit of status code is used to specify one of five standard classes of responses. The last two digits of status code do not 
have any categorization role.
<!-- Answer ::: END -->
</div>
</div>


<div><b>6. What are Persistent Connections?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In HTTP/1.0, the connection is closed after a single request or response pair. In HTTP/1.1, a mechanism was introduced, which is 
known as <code><b>keep-alive-mechanism</b></code>. In this mechanism, a connection could be reused for more than one request.
<!-- Answer ::: END -->
</div>
</div>


<div><b>7. What is Session State in HTTP?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Session state is also known as <code><b>Stateless state</b></code>. HTTP is a stateless protocol. In the session state, the client and server just know 
about each other only during the current request. If the connection is closed, and two computers want to connect again, they need to 
provide information to each other as a new connection, and the connection is handled as the very first one.
<!-- Answer ::: END -->
</div>
</div>


<div><b>8. What is HTTP Message?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTTP Message is used to show how data is exchanged between the client and the server. It is based on a client-server architecture. 
An HTTP client is a program that establishes a connection to a server to send one or more HTTP request messages. An HTTP server is a program 
that accepts connections to serve HTTP requests by sending an HTTP response messages.
<!-- Answer ::: END -->
</div>
</div>


<div><b>9. What is HTTP cURL?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTTP cURL is a command-line tool. It is available on all major operating systems.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is HTTP Response?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTTP Response sent by a server to the client. The response is used to provide the client with the resource it requested. It is also used 
to inform the client that the action requested has been carried out. It can also inform the client that an error occurred in processing 
its request.<br/><br/>
An HTTP response contains the following things:<br/><br/>
<ul>
<li>Status Line</li>
<li>Response Header Fields or a series of HTTP headers</li>
<li>Message Body</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What is HTTP Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTTP is used to communicate over the internet, so users, information providers, and application developers should be aware of the 
limitations of security in HTTP/1.1. There are two methods to establish a secure HTTP connection: https URI scheme and the HTTP/1.1 
Upgrade header.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What are HTTP Request Codes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>HTTP Request Codes</b><br/><br/>
<ol>
<li><b><code>1xx</code> stands for <code>INFORMATIONAL RESPONSE</code></b><br/><br/>
It indicates that the Server received the Request from the Client and it was understood by it.<br/><br/>
<ul>
<li><b>100 Continue</b><br/><br/>
During large <code><b>Request body</b></code> sending to a server, Client sent <code><b>Request headers</b ></code> (Keeping 
<code><b>Expect: 100-continue</b></code> as a header) to the Server and it is received at Server side.<br/><br/>
<ul>
<li>If Server responds with <code><b>100 continue</b></code> status code, Client then sends its <code><b>Request Body</b></code></li>
<li>If Server responds with <code><b>403 (Forbidden)</b></code> or <code><b>405 (Method Not Allowed)</b></code> then Client should not 
send the <code><b>Request body</b></code>.<br/><br/> </li>
</ul>
<li><b>101 Switching Protocols</b><br/><br/>
The requester has asked the server to switch protocols (<code><b>HTTP</b></code>/<code><b>HTTPS</b></code>) and the server has 
agreed to do so.<br/><br/></li>
</ul>
</li>
<li><b><code>2xx</code> stands for <code>SUCCESS</code></b><br/><br/>
It indicates Server accepted the Client Request as a Valid one.<br/><br/>
<ul>
<li><b>200 OK</b><br/><br/>
Request was Successful and the Response will be depend on the Request Method used.<br/><br/>
<ul>
<li>For <code><b>GET</b></code> Request, the response will contain an entity corresponding to the requested resource.</li>
<li>For <code><b>POST</b></code> Request, the response will contain an entity describing or containing the result of the action.<br/><br/></li>
</ul>
</li>
<li><b>204 No Content</b><br/><br/>
The server successfully processed the request, and is not returning any content.<br/><br/></li>
</ul>
</li>
<li><b><code>3xx</code> stands for <code>REDIRECTION</code></b><br/><br/>
Action needs to be taken in order to complete the Request.<br/><br/>
<ul>
<li><b>301 Moved Permanently</b><br/><br/>
This and all future requests should be directed to the given URI.<br/><br/></li>
<li><b>307 Temporary Redirect</b><br/><br/>
In this case, the request should be repeated with another URI; however, future requests should still use the original URI. In contrast to how 302 
was historically implemented, the request method is not allowed to be changed when reissuing the original request. For example, a POST request 
should be repeated using another POST request.<br/><br/></li>
<li><b>308 Permanent Redirect</b><br/><br/>
This and all future requests should be directed to the given URI. 308 parallel the behaviour of 301, but does not allow the HTTP method 
to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly.<br/><br/></li>
</ul>
</li>
<li><b><code>4xx</code> stands for CLIENT ERRORS (i.e, Browsers)</b><br/><br/>
The Request contains bad syntax or cannot be fulfilled.<br/><br/>
<ul>
<li><b>400 Bad Request</b><br/><br/>
The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax, size too large, invalid 
request message framing, or deceptive request routing).<br/><br/></li>
<li><b>401 Unauthorized</b><br/><br/>
The user does not have valid Authentication credentials for the target resource.<br/><br/></li>
<li><b>403 Forbidden</b><br/><br/>
The request contained valid data and was understood by the server, but the server is refusing action.<br/><br/></li>
<li><b>404 Not Found</b><br/><br/>
The requested resource could not be found but may be available in the future.<br/><br/>
</li>
</ul>
</li>
<li><b><code>5xx</code> stands for <code>SERVER ERRORS</code></b><br/><br/>
The server failed to fulfil an apparently valid request.<br/><br/>
<ul>
<li><b>500 Internal Server Error</b><br/><br/>
A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.<br/><br/></li>
<li><b>503 Service Unavailable</b><br/><br/>
The server cannot handle the request (because it is overloaded or down for maintenance). Generally, this is a temporary state.</li>
<li><b>511 Network Authentication Required</b><br/><br/>
The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network.</li>
</ul>
</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Explain about OSI Model</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>OSI</b></code> stands for <b>Open Systems Interconnection</b>, developed by International Organization of Standardization, 
used to describe the functioning of a Networking system.<br/><br/>
<ol>
<li><b>LAYER-1 (<code>PHYSICAL LAYER</code>)</b><br/><br/>
Transmits Raw Bit Stream over the physical Medium.</li>
<li><b>LAYER-2 (<code>DATA LINK LAYER</code>)</b><br/><br/>
Defines the format of data on the Network.</li>
<li><b>LAYER-3 (<code>NETWORK LAYER</code>)</b><br/><br/>
Decides which physical path the data will take.</li>
<li><b>LAYER-4 (<code>TRANSPORT LAYER</code>)</b><br/><br/>
Transmits data using Transmission Protocols including TCP and UDP.</li>
<li><b>LAYER-5 (<code>SESSION LAYER</code>)</b><br/><br/>
Maintains connections and is responsible for controlling ports and sessions.</li>
<li><b>LAYER-6 (<code>PRESENTATION LAYER</code>)</b><br/><br/>
Ensures that data is in a usable format and is where data encryption occurs.</li>
<li><b>LAYER-7 (<code>APPLICATION LAYER</code>)</b><br/><br/>
It's a Human - Computer interaction Layer where applications can access the Network Services.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is Content Negotiation in HTTP? What are the different types of HTTP content negotiation?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Most of the responses of HTTP include an entity which contains the information for interpretation by a user. Naturally, it is used to supply 
the user with the best available entity corresponding to the request. Unfortunately for cache and server, not all users have the same preferences 
for what is best. That's why HTTP has provisions for several mechanisms for "content negotiation", when there are multiple representations 
available, the process of selecting the best representation for a given response.<br/><br/>
The various types of content negotiations are as follows:<br/><br/>
<ul>
<li><b>Server-driven Negotiation:</b> When a server-driven negotiation occurs, then the selection of the best representation for a 
response is made by an algorithm which is located at the server.</li>
<li><b>Agent-driven Negotiation:</b> When an agent-driven negotiation occurs, the user agent performs the selection of the best 
representation for a response after receiving an initial response from the origin server.</li>
<li><b>Transparent Negotiation:</b> It is a combination of both server-driven negotiation and agent-driven negotiation.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>
