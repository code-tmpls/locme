<div><b>2. How React works? How Virtual-DOM works in React?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
React creates a virtual DOM. When state changes in a component it firstly runs a "diffing" algorithm, which identifies what has changed in 
the virtual DOM. The second step is reconciliation, where it updates the DOM with the results of diff.<br/><br/>
The HTML DOM is always tree-structured — which is allowed by the structure of HTML document. The DOM trees are huge nowadays because of large apps. 
Since we are more and more pushed towards dynamic web apps, Single Page Applications (SPAs), we need to modify the DOM tree incessantly and a lot. 
And this is a real performance and development pain.<br/><br/>
The Virtual DOM is an abstraction of the HTML DOM. It is lightweight and detached from the browser-specific implementation details. It is not 
invented by React but it uses it and provides it for free. <code><b>ReactElements</b></code> lives in the virtual DOM. They make the basic nodes 
here. Once we defined the elements, <code><b>ReactElements</b></code> can be render into the "real" DOM.<br/><br/>
Whenever a <code><b>ReactComponent</b></code> is changing the state, diff algorithm in React runs and identifies what has changed. And then it 
updates the DOM with the results of diff. The point is - it’s done faster than it would be in the regular DOM.
<!-- Answer ::: END -->
</div>
</div>

<div><b>How Virtual DOM is more efficient than Dirty Checking?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Dirty-checking:</b>
The process of checking every watch to detect the changes is called as Dirty-checking.<i></i><br/><br/>
<b>Virtual DOM (VDOM)</b><br/>
The virtual DOM (VDOM) is a programming concept where representation of a UI is kept in memory and synced with the real DOM by a library such as ReactDOM. 
This process is called <i>Reconciliation.</i><br/><br/>
<!-- Answer ::: END -->
</div>
</div>

<div><b>Is the Shadow DOM the same as the Virtual DOM?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No, they are different. The Shadow DOM is a browser technology designed primarily for scoping variables and CSS in web components. The virtual DOM 
is a concept implemented by libraries in JavaScript on top of browser APIs.
<!-- Answer ::: END -->
</div>
</div>