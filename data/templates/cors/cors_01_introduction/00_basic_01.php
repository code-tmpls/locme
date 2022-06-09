<div><b>1. What is CORS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>CORS</b> stands for <code><b>Cross Origin Resource Sharing</b></code>.<br/><br/>
Cross Origin Resource Sharing (CORS) is a mechanism which uses additional HTTP headers to identify whether a specific web app 
can share a resource with other web app or not. If your two web app belongs to same domain or same origin, it is very easy to 
share the resources among them. But If they don’t have same origin they need to follow the CORS mechanism.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. How CORS (Cross Origin Resource Sharing) works?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Consider the scenario we have two web applications say <code><b>Application #1</b></code> and <code><b>Application #2</b></code> which 
is hosted on different domain or origin. Lets say:<br/><br/>
<b>Application #1</b> is hosted on the Domain http://www.example1.com/<br/>
<b>Application #2</b> is hosted on the Domain http://www.example2.com/<br/><br/>
Let’s say Application #1 wants to make a POST call to Application #2 so before sending the actual <code><b>POST</b></code> call to Application #2. 
Application #1 will send preflight call to Application #2 to check whether resource sharing is available or not we can also call 
it <code><b>OPTIONS</b></code> call. Application #2 will send response of preflight call to Application #1 by adding some headers. If the resource 
sharing is available, then only in next step Application #1 will send actual <code><b>POST</b></code> call to Application #2.<br/><br/>
<b>HTTP headers of preflight or <code><b>OPTIONS</b></code> call:</b><br/><br/>
While preflight call App2 respond with some http headers we will discuss about some http headers –<br/><br/>
<ul>
<li><b>Access-Control-Allow-Origin –</b> When Application #1 send <code><b>OPTIONS</b></code> call to Application #2 then Application #2 add 
<code><b>Access-Control-Allow-Origin</b></code> 
value in headers.<br/>
If  <code><b>Access-Control-Allow-Origin</b></code>  as <code><b>*</b></code>, then it is accessable by all the domains.<br/>
If  <code><b>Access-Control-Allow-Origin</b></code>  is <code><b>www.example1.com</b></code>, then it is accessable by only Applcation #1.</li>
<li><b>Methods –</b> It will also return the methods name which are the methods allow to access like <code><b>GET</b></code>, 
<code><b>POST</b></code>, <code><b>DELETE</b></code>, <code><b>PUT</b></code> etc.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>