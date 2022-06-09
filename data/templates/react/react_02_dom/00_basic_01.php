<div><b>1. What is Virtual DOM? Why was virtual DOM introduced?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Virtual DOM</b><br/><br/>
Virtual DOM is a concept where a virtual representation of the real DOM is kept inside the memory and is synced with the real DOM by a 
library such as ReactDOM.<br/><br/>

<b>Reason to introduce Virtual DOM introduced -</b><br/><br/>
DOM manipulation is an integral part of any web application, but DOM manipulation is quite slow when compared to other operations in JavaScript.
The efficiency of the application gets affected when several DOM manipulations are being done. Most JavaScript frameworks update the entire DOM 
even when a small part of the DOM changes.<br/>
For example, consider a list that is being rendered inside the DOM. If one of the items in the list changes, the entire list gets rendered again 
instead of just rendering the item that was changed/updated. This is called inefficient updating.<br/><br/>
To address the problem of inefficient updating, the react team introduced the concept of virtual DOM.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is difference between Real DOM and virtual DOM?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
<table class="table">
<thead><tr><th>Real DOM</th><th>Virtual DOM</th></tr></thead>
<tbody>
<tr>
  <td>DOM is a language-neutral interface allowing programs and scripts to dynamically access and update multiple objects 
  like content, structure, and style of a document.</td>
  <td>Virtual DOM is a collection of modules designed to provide a declarative way to represent the DOM for an application.</td>
</tr>
<tr><td>The DOM represents the document as nodes and objects.</td>
	<td>A virtual DOM object is a representation of a DOM object, like a lightweight copy.</td>
</tr>
<tr><td>It is an object-oriented representation of a web page, modified with a scripting language like JavaScript.</td>
	<td>Virtual DOM is ideal for mobile-first applications.</td></tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is Reconciliation Algorithm?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<i>Reconciliation</i> is the process through which React updates the DOM. When a component’s state changes, React has to calculate if it is necessary 
to update the DOM. It does this by creating a virtual DOM and comparing it with the current DOM. In this context, the virtual DOM will contain 
the new state of the component.
<!-- Answer ::: END -->
</div>
</div>