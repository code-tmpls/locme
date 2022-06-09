
<div><b>1. What are Proxy in ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
ES6 proxies sit between your code and an object. A proxy allows you to perform meta-programming operations such as intercepting a call to 
inspect or change an object’s property.<br/><br/>
It is implemented when we need to use an <code><b>dummy Object</b></code> instead of an <code><b>Original Object</b></code>. 
<b>Creating a proxy object</b><br/><br/>
To create a new proxy object, we use the following syntax:
<pre><code class="language-js hljs xml">let proxy = new Proxy(target, handler);</code></pre>
In this syntax:
<ul>
<li><code><b>target</b></code> –<br/>It is an object to wrap.<br/>
(This <code><b>target</b></code> can be Object / Javascript Function)<br/><br/>
<b>For example,</b><br/><br/>
<ol>
<li><b>Object</b>
<pre><code class="language-js hljs xml">const target = {
  firstName: "Hello",
  lastName: "World"
};</code></pre>
</li>
<li><b>Javascript Function</b>
<pre><code class="language-js hljs xml">const target = function () {
  return { firstName: "Hello",
	   lastName: "World" };
};</code></pre>
</li>
</ol>
</li>
<li><code><b>handler</b></code> -<br/>It is an object that contains methods to control the behaviors of the <code><b>target</b></code>. 
The methods inside the <code><b>handler</b></code> object are called <code><b>traps</b></code>. This Traps are used to result <code><b>dummy output</b></code> 
instead of <code><b>original output</b></code>.<br/><br/>
The Following are the Handler Functions (Traps):<br/><br/>
<ol>
<li><b>handler.apply()</b><br/><br/>
When a Target is a Function, <code><b>handler.apply()</b></code> is a trap for a function call.<br/><br/></li>
<li><b>handler.construct()</b><br/><br/>
When a Target is an Object created with <code><b>new</b></code> Operator, <code><b>handler.construct()</b></code>  is a trap 
for a <code><b>new</b></code> Operator.<br/><br/></li>
<li><b>handler.defineProperty()</b><br/><br/>
It is a trap for <code><b>Object.defineProperty()</b></code>.<br/><br/>
</li>
<li><b>handler.deleteProperty()</b><br/><br/>
It is a trap for the <code><b>delete</b></code> operator.<br/><br/>
</li>
<li><b>handler.get()</b><br/><br/>
It is a trap for getting property values.<br/><br/>
</li>
<li><b>handler.getOwnPropertyDescriptor()</b><br/><br/>
It is a trap for <code><b>Object.getOwnPropertyDescriptor</b></code>.<br/><br/>
</li>
<li><b>handler.getPrototypeOf()</b><br/><br/>
It is a trap for <code><b>Object.getPrototypeOf</b></code>.<br/><br/>
</li>
<li><b>handler.has()</b><br/><br/>
It is a trap for the <code><b>in</b></code> operator.<br/><br/>
</li>
<li><b>handler.isExtensible()</b><br/><br/>
It is a trap for <code><b>Object.isExtensible</b></code>.<br/><br/>
</li>
<li><b>handler.ownKeys()</b><br/><br/>
It is a trap for <code><b>Object.getOwnPropertyNames</b></code> and <code><b>Object.getOwnPropertySymbols</b></code>.<br/><br/>
</li>
<li><b>handler.preventExtensions()</b><br/><br/>
It is a trap for <code><b>Object.preventExtensions</b></code>.<br/><br/>
</li>
<li><b>handler.set()</b><br/><br/>
It is a trap for setting property values.<br/><br/></li>
<li><b>handler.setPrototypeOf()</b><br/><br/>
It is a trap for <code><b>Object.setPrototypeOf</b></code>.</li>
</ol>
</li>
</ul><br/><br/>

<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>