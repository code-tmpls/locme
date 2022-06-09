<div><b>1. What is DOM?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It is the programming interface for HTML and XML documents. The DOM (Document Object Model) represents the page as nodes and objects. 
It helps to connect the programming language to the web page. So that programmers can change document structure, style, and content.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What are the levels involved in DOM?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
DOM is known as Document Object Model, DOM generally involves three levels. They are given below:
<ul>
<li><b>Core DOM</b><br/>It is used as a standard model for all document.</li>
<li><b>HTML DOM</b><br/>It is used as a standard model and programming interface for all HTML documents.</li>
<li><b>XML DOM</b><br/>It is used as a standard Model for all XML documents of different structures.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What are the HTML DOM methods involved?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The following are HTML DOM methods that are mostly used:<br/><br/>
<ul>
<li><b>getElementById(idName) –</b><br/> This method allows you to access or find an element associated with id name defined in parenthesis().<br/>
The syntax is written as
<pre><code class="language-html hljs xml">document.getElementById("demo")</code></pre>
</li>
<li><b>getElementsByClassName(className) –</b><br/> This method allows you to access or find elements associated with className defined in parenthesis().<br/>
The syntax is written as
<pre><code class="language-html hljs xml">document.getElementsByClassName("main")</code></pre>
</li>
<li><b>getElementsByTagName(tagName) –</b><br/> this method allows you to access or find elements associated with tagName defined in parenthesis().<br/>
The syntax is written as
<pre><code class="language-html hljs xml">document.getElementsByTagName("p")</code></pre>
</li>
<li><b>createChild(element) –</b><br/> This method allows you to create an element(node) in DOM(Document Object Model) tree structure.<br/>
The syntax is written as
<pre><code class="language-html hljs xml">document.createElement(element)</code></pre>
</li>
<li><b>appendChild(element) –</b><br/> This method allows you to add a new element(node) in DOM(Document Object Model) tree structure as the 
last child of a node.<br/>
The syntax is written as
<pre><code class="language-html hljs xml">document.appendChild(element)</code></pre>
</li>
<li><b>removeChild(element) –</b><br/> This method allows you to remove a child element(node) in DOM(Document Object Model) tree structure.<br/>
The syntax is written as
<pre><code class="language-html hljs xml">document.removeChild(element)</code></pre>
</li>
<li><b>replaceChild(new, old) –</b><br/> This method allows you to replace an old element with a new element in DOM(Document Object Model) tree structure.<br/>
The syntax is written as
<pre><code class="language-html hljs xml">document.replaceChild(new, old)</code></pre>
</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What are the node properties?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Node represents a single node in a node tree. It may be an element node, attribute node or tree node or any other types of node. 
A node is an object which has some properties, which are given below –
<ul>
<li><b>nodeName –</b><br/> It provides the name of elements, depending on its type.<br/>
For Example,<br/>
<pre><code class="language-html hljs xml">&lt;p id="myTag"&gt; example tags &lt;/p&gt;
&lt;p id="demo"&gt;&lt;/p&gt;
&lt;script&gt;
 var y = document.getElementById("myTag").nodeName;
 document.getElementById("demo").innerHTML = y;
&lt;/script&gt;</code></pre>
In above example, we will get output mentioned in <code><b>&lt;p&gt;&lt;/p&gt;</b></code> HTML Element.
</li>
<li><b>nodeValue  –</b><br/> It returns the value of a specified node.<br/>
For Example, <br/>
<pre><code class="language-html hljs xml">&lt;p&gt; my first paragraph.&lt;/p&gt;
&lt;script&gt;
 var b = document.getElementsByTagName(“P”)[0];
 var z = b.childNodes[0].nodeValue;  
 document.getElementById(“demo”).innerHTML = z;
&lt;/script&gt;</code></pre>
</li>
<li><b>nodeType –</b> The return type of node in read-only format. (nodeType property returns the type of node as a number)<br/>
For Example, <br/>
<pre><code class="language-html hljs xml">&lt;p id=”demo”&gt;&lt;/p&gt;
&lt;p id="myname"&gt;&lt;/p&gt;
&lt;script&gt;
 var x = document.getElementById("demo").nodeType;
 document.getElementById(“myname”).innerHTML = x;
&lt;/script&gt;</code></pre>
</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What is Bubbling and Capturing?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When an event occurs on the DOM, it does not take place completely on one element. The event bubbles up or goes to its parent, grandparents, and 
grandparent's parent until it reaches the window in the Bubbling Phase, whereas the event starts out from window down to the element that prompted 
the event or the event target in the Capturing Phase.<br/><br/>
There are three stages of event propagation:
<ul>
<li><b>Capturing Phase -</b> the event begins with the window and progresses through each element until it reaches the target element.</li>
<li><b>Target Phase -</b> The event has arrived at the target element.</li>
<li><b>Bubbling Phase -</b> The event bubbles up from the target element and then up every element until it reaches the window.</li>
<ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>