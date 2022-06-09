<div><b>3. What is a Javascript and how JavaScript worked with DOM(Document Object Model)?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Javascript is a programming language initially developed for the client-side scripting language. But today it is also used as a server-side language. 
In javascript, programs are called script. It is used to make web pages alive. Javascript allows us to work on DOM (Document Object Model) object 
and to manipulate them programmatically, the DOM allows us to change, delete, modify, update the part of documents like any HTML element or XML.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. Why is the document called the Object Model?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Document is modeled of object and document in not only the structure of an object but it also includes the behavior of document structure and 
object that contains the elements like HTML tags and their attributes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What are the properties of HTML DOM?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we consider an HTML Element for example, <code><b>&lt;p&gt;&lt;/p&gt;</b></code> the properties of HTML DOM for respective HTML Element are –
<ul>
<li><b>p.innerHTML –</b> inner content of P(HTML element)</li>
<li><b>p.nodeName –</b> the name of P</li>
<li><b>p.nodeValue –</b> the value of P</li>
<li><b>p.parentNode –</b> the parent node of P</li>
<li><b>p.childNode –</b> the child node of P</li>
<li><b>p.Attributes –</b> the attributes node of P</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What are the HTML DOM node tree and how the relationship exists between node, child, and sibling in the node tree?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
While preparing HTML documents, HTML DOM views documents as tree-structure, so that tree- structure is called as node-tree. In the node tree, 
each HTML element is called a node. Each node mostly has its parent nodes or child nodes. All nodes can be accessed through this node tree by 
different DOM methods. So their contents can be modified or deleted and you can create new elements.<br/>
<b>Relationships between node, child, and sibling in the node tree:</b><br/>
<ul>
<li>Node trees have multiple nodes with hierarchical relationships between them.</li>
<li>Every node has a parent node except the root node.</li>
<li>The root node is the topmost node through which, other nodes access and communicate with elements.</li>
<li>Some nodes contain other nodes, we can call them child nodes.</li>
<li>Child nodes of the same nodes are called siblings.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. Explain the relationship between the node, child, and sibling by example.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
 In the below example we’ll see how the relationship between node, child, sibling exists.<br/>
 For Example,<br/>
<pre><code class="language-html hljs xml">&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt; my title &lt;/title&gt;
 &lt;/head&gt;
 &lt;body&gt;
  &lt;div&gt;
   &lt;h1&gt; my heading &lt;/h1&gt;
   &lt;p&gt; my paragraph  &lt;/p&gt;
   &lt;a href=”#”&gt; my link &lt;/a&gt;
  &lt;/div&gt;
 &lt;/body&gt;
&lt;/html&gt;</code></pre>
This document create node tree structure as <code><b>Document Tree</b></code>.<br/>
<ul>
<li>In the above example <code><b>&lt;html&gt;</b></code> is root node. He has no parent node.</li>
<li><code>&lt;head&gt;</code> and <code>&lt;body&gt;</code> has parent node <code>&lt;html&gt;</code> tag.</li>
<li>Every text has a parent node like the text my heading has <code><b>&lt;h1&gt;</b></code> as parent node.</li>
<li><code><b>&lt;h1&gt;</b></code>, <code><b>&lt;p&gt;</b></code> and <code><b>&lt;a&gt;</b></code> are siblings and also child nodes of 
<code><b>&lt;body&gt;</b></code> element.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is an event and how can you define an event in HTML DOM?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An event is an action that occurs on a button or anchor tag. When we call the function to execute, we click a button or anchor tag. 
The process of invoking a function via the button or some action on the button with the help of JavaScript code, it’s called an event.<br/>
For Example – <br/>
<pre><code class="language-html hljs xml">&lt;button type="button" onclick="myMessage()"&gt; click here &lt;/button&gt;
&lt;script&gt;
function myMessage(){
 alert(“Welcome to Class”);
}
&lt;/script&gt;</code></pre>
In the above example, onclick is an event. myMessage() is a function called by an event to execute a message via an alert. We placed events mostly 
in HTML tags. We can call an event through a mouse while loading documents, when submitting the form.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. How many types of events in HTML DOM? And which are they?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are 8 types of Events in HTML DOM:
<ol>
<li>User Interface Events</li>
<li>Focus and blur Events</li>
<li>Mouse Events</li>
<li>Keyboard Events</li>
<li>Form Events</li>
<li>Mutation Events and Observers</li>
<li>HTML5 Events</li>
<li>CSS Events</li>
</ol>
<b>1. User Interface Events:</b><br/>
These occur as the result of any interaction with the browser window rather than the HTML page. In these events, we attach the event listener 
to the window object, not the document object. The various UI events are<br/>
<ul>
<li><b>load</b><br/>
This event fires when the webpage finishes loading. It can also fire on nodes of elements like images, scripts, or objects.
</li>
<li><b>unload</b><br/>
This event fires before the users leave the page, i.e., the webpage is unloading. Page unloading usually happens because a new page has been requested.</li>
<li><b>error</b><br/>
This event fires when the browser encounters a JavaScript error or an asset that doesn’t exist.</li>
<li><b>resize</b><br/>
It fires when we resize the browser window. But browsers repeatedly fire this event, so avoid using this event to trigger complicated code; 
it might make the page less responsive.</li>
<li><b>scroll</b><br/>
This event fires when the user scrolls up/down on the browser window. It can relate to the entire page or a specific element on the page.</li>
</ul>
<b>2. Focus and blur Events:</b><br/>
These events fire when the HTML elements you can interact with gain/ lose focus. These Events are:
<ul>
<li><b>focus</b><br/>
This event fires, for a specific DOM node, when an element gains focus.</li>
<li><b>focusin</b><br/>
This event is the same as the focus event. But Firefox doesn’t yet support the focusin event.</li>
<li><b>focusout</b><br/>
This is the same event as the blur event. This is a new event type in JavaScript, thus not supported in Firefox right now.</li>
<li><b>blur</b><br/>
This fires, for a specific DOM node, when an element loses focus.</li>
</ul>
<b>3. Mouse events</b><br/>
These events fire when the mouse moves or the user clicks a button.
<ul>
<li><b>click</b><br/>
This event fires when the user clicks on the primary mouse button (usually the left button). This event also fires if the user presses 
the Enter key on the keyboard when an element has focus.<br/>
During Touch-screen, a tap on the screen acts like a single left-click.
</li>
<li><b>dblclick</b><br/>
This event fires when the user clicks the primary mouse button, in quick succession, twice.<br/>
During Touch-screen, a double-tap on the screen acts like a double left-click.
</li>
<li><b>mousedown</b><br/>
It fires when the user clicks down on any mouse button.<br/>
During Touch-screen, we can use the touchstart event.</li>
<li><b>mouseup</b><br/>
It fires when the user releases a mouse button.<br/>
During Touch-screen, we can use the touchend event.<br/><br/>
We have separate mousedown and mouseup events to add drag-and-drop functionality or controls in game development. Don’t forget a click event 
is the combination of mousedown and mouseup events.
</li>
<li><b>mouseover</b><br/>
It fires when the user moves the cursor, which was outside an element before, inside the element. We can say that it fires 
when we move the cursor over the element.</li>
<li><b>mouseout</b><br/>
It fires when the user moves the cursor, which was inside an element before, outside the element. We can say that it fires 
when the cursor moves off the element.</li>
<li><b>mousemove</b><br/>
It fires when the user moves the cursor around the element. This event is frequently triggered.
</li>
</ul>
<b>4. Keyboard events</b><br/>
These events fire on any kind of device when a user interacts with a keyboard.
<ul>
<li><b>input</b><br/>
This event fires when the value of an <code><b>&lt;input&gt;</b></code> or a <code><b>&lt;textarea&gt;</b></code> changes. 
You can use keydown as a fallback in older browsers.
</li>
<li><b>keydown</b><br/>
It fires when the user presses any key in the keyboard. If the user holds down the key, this event fires repeatedly.</li>
<li><b>keypress</b><br/>
It fires when the user presses a key that results in printing a character on the screen. This event fires repeatedly if the user holds down the key. 
This event will not fire for the enter, tab, or arrow keys; the keydown event would.</li>
<li><b>keyup</b><br/>
The keyup event fires when the user releases a key on the keyboard.<br/>
The keydown and keypress events fire before a character appears on the screen, the keyup fires after it shows.</li>
</ul>
<b>5. Form events</b><br/>
These events are common while using forms on a webpage.
<ul>
<li><b>submit</b><br/>
This event fires on the node representing the <code><b>&lt;form&gt;</b></code> element when a user submits a form.</li>
<li><b>change</b><br/>
It fires when the status of various form elements change. This is a better option than using the click event because clicking 
is not the only way users interact with the form.</li>
<li><b>input</b><br/>
The input event is very common with the <code><b>&lt;input&gt;</b></code> and the <code><b>&lt;textarea&gt;</b></code> elements.<br/>
</li>
</ul>
<b>6. Mutation Events and Observers</b><br/>
Whenever the structure of the DOM tree changes, it triggers a mutation event. The change in the tree may be due to the addition or removal of a DOM node 
through your script. But these have an alternative that will replace them: mutation observers. These Events are:
<ul>
<li><b>DOMNodeInserted</b><br/>
<ul>
<li>It fires when the script inserts a new node in the DOM tree using <code><b>appendChild()</b></code>, <code><b>replaceChild()</b></code>, 
<code><b>insertBefore()</b></code>, etc.</li>
<li>This event fires when the script removes an existing node from the tree using <code><b>removeChild()</b></code>, <code><b>replaceChild()</b></code>, etc.</li>
</ul>
</li>
<li><b>DOMSubtreeModified</b><br/>
It fires when the structure of the DOM tree changes i.e. the above two events occur.</li>
<li><b>DOMNodeInsertedIntoDocument</b><br/>
This event fires when the script inserts a node in the DOM tree as the descendant of another node already in the document.</li>
<li><b>DOMNodeRemovedFromDocument</b><br/>
This event fires when the script removes a node from the DOM tree as the descendant of another node already in the document.
<div class="list-group"><div class="list-group-item">The problem with the mutation events is that lots of changes to your page can make your 
page feel slow or unresponsive.</div></div>
</li>
</ul>
<b>7. HTML5 events</b><br/>
These are the page-level events included in the versions of the HTML5 specialization. Few of the HTML5 Events are:<br/>
<ul>
<li><b>DOMContentLoaded</b><br/>
This event triggers when the DOM tree forms i.e. the script is loading. Scripts start to run before all the resources like images, CSS, 
and JavaScript loads. You can attach this event either to the window or the document objects.</li>
<li><b>hashchange</b><br/>
It fires when the URL hash changes without refreshing the entire window. Hashes (#) link specific parts (known as anchors) within a page. 
It works on the window object; the event object contains both the oldURL and the newURL properties holding the URLs before and 
after the hashchange.</li>
<li><b>beforeunload</b><br/>
This event fires on the window object just before the page unloads. This event should only be helpful for the user, not encouraging them 
to stay on the page. You can add a dialog box to your event, showing a message alerting the users like their changes are not saved.</li>
</ul>
<b>8. CSS events</b><br/>
These events trigger when the script encounters a CSS element. Some of the Events are:
<ul>
<li><b>transitionend</b><br/>
This event fires when a CSS transition ends in a program. It is useful to notify the script of the end of transition so that it can take further action.</li>
<li><b>animationstart</b><br/>
These events fire when CSS animation starts in the program.</li>
<li><b>animationiteration</b><br/>
This event occurs when any CSS animation repeats itself. With this event, we can determine the number of times an animation iterates in the script.</li>
<li><b>animationend</b><br/>
It fires when the CSS animation comes to an end in the program. This is useful when we want to act just after the animation process finishes.</li>
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