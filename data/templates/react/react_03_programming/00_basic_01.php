<div><b>1. What is JSX? Why can’t browsers read JSX? How it works?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
JSX stands for <code><b>JavaScript syntax extension</b></code>. It is a JavaScript extension that allows us to describe React’s object tree 
using a syntax that resembles that of an HTML template.<br/><br/>
<b>JSX Working Model:</b><br/><br/>
JSX is not valid JavaScript that the browsers can’t read it directly; they do not know what to do with it, so we need a transpiler to 
translate it to <code><b>React.createElement()</b></code> calls. We need transpilers (a compiler that translates one form of syntax into another) like 
Babel or TypeScript to compile JSX into a browser-compatible version.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. How different is React’s ES6 syntax when compared to ES5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Syntax has changed from ES5 to ES6 in following aspects:<br/>
<div class="table-responsive">
<table class="table">
<thead><tr><th>Aspect</th><th>ECMASCRIPT (ES5)</th><th>ECMASCRIPT (ES6)</th></tr></thead>
<tbody>
<tr><td><code><b>require vs import</b></code></td>
<td><pre><code class="language-js hljs xml">var React = require('react');</code></pre></td>
<td><pre><code class="language-js hljs xml">import React from 'react';</code></pre></td>
</tr>
<tr><td><code><b>export vs exports</b></code></td>
<td><pre><code class="language-js hljs xml">module.exports = Component;</code></pre></td>
<td><pre><code class="language-js hljs xml">export default Component;</code></pre></td>
</tr>
<tr><td><code><b>component and function</b></code></td>
<td><pre><code class="language-js hljs xml">var MyComponent = React.createClass({
render: function() { return &lt;h3&gt;Hello Edureka!&lt;/h3&gt;; }
});</code></pre></td>
<td><pre><code class="language-js hljs xml">class MyComponent extends React.Component {
render() { return &lt;h3&gt;Hello Edureka!&lt;/h3&gt;; }
}</code></pre></td>
</tr>
<tr><td><code><b>props</b></code></td>
<td><pre><code class="language-js hljs xml">var App = React.createClass({
propTypes: { name: React.PropTypes.string },
render: function() { return &lt;h3&gt;Hello, {this.props.name}!&lt;/h3&gt;; }
});</code></pre></td>
<td><pre><code class="language-js hljs xml">class App extends React.Component {
 render() { return &lt;h3&gt;Hello, {this.props.name}!&lt;/h3&gt;; }
}</code></pre></td>
</tr>
<tr><td><code><b>state</b></code></td>
<td><pre><code class="language-js hljs xml">var App = React.createClass({
  getInitialState: function() { return { name: 'world' }; },
  render: function() { return &lt;h3&gt;Hello, {this.state.name}!&lt;/h3&gt;;
 }
});</code></pre></td>
<td><pre><code class="language-js hljs xml">class App extends React.Component {
 constructor() {
  super();
  this.state = { name: 'world' };
 }
 render() { return &lt;h3&gt;Hello, {this.state.name}!&lt;/h3&gt;; }
}</code></pre></td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What is React.createClass?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>React.createClass</b></code> allows us to generate components <code><b>"classes"</b></code>. And Alternatively, the same thing can be implemented 
with ES6 Javascript classes.<br/>
Syntax's are as follows:<br/>
<b>Creating a Component using <code><b>React.createClass</b></code>:</b><br/>
<pre><code class="language-js hljs xml">import React from 'react';

const Constants = React.createClass({ 
  render() {
   return (&lt;div&gt;&lt;/div&gt;);
  } 
});</code></pre>

Above syntax creates a Component.<br/>
Same thing can be implemented using ES6 Javascript Classes as follows:<br/>
<b>Creating a Component using <code><b>ES6 Javascript classes</b></code>:</b><br/>
<pre><code class="language-js hljs xml">import React from 'react';

class Constants extends React.component {
 constructor(props) {
  super(props);		
 }
 render() {
   return (&lt;div&gt;&lt;/div&gt;);
 }
}

export default Contacts;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is React.createElement?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>React.createElement</b></code> is used to create React nodes using Javascript.<br/>
The Syntax look like:<br/>
<pre><code class="language-js hljs xml">React.createElement('li',{id:'one'},'One');</code></pre><br/>
The <code>React.createElement()</code> arguments are :
<ul>
<li><b>type</b><br/>
It can be a String which represents an HTML Element or a React Component Instance (<code><b>React.createClass</b></code>)</li>
<li><b>props</b><br/>
It can be <code><b>null</b></code> or an Object containing attributes / props and values.</li>
<li><b>children</b><br/>
Children can be <code><b>null</b></code>, a string that gets turned into a text node, an instance of <code><b>React.createClass()</b></code> or 
<code><b>React.createElement()</b></code>
</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is ReactDOM? And What is the difference between ReactDOM and React?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Upto <code><b>React v.14</b></code>, all <code><b>ReactDOM</b></code> functionality is a part of <code><b>React</b></code>. But later, 
<code><b>React</b></code> and <code><b>ReactDOM</b></code> were split into two different libraries.<br/><br/>
With <code><b>React</b></code> library, we define and create our Elements, lifecycle hooks, etc.
<code><b>ReactDOM</b></code> library is the glue between React and the DOM. We use it for mounting with <code><b>ReactDOM</b></code>.
Another useful feature of <code><b>ReactDOM</b></code> is <code><b>ReactDOM.findDOMNode()</b></code> which we can use to gain direct access 
to a DOM Element.

<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What are refs used for in React?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Refs are used to get Reference to a DOM node or an instance of a Component in a React.<br/><br/>
Good examples are, we use refs for managing focus/text selections, triggering imperative animations or integrating with third party DOM Libraries.<br/><br/>
We should avoid using  <code><b>String Refs</b></code> and <code><b>Inline Ref Callbacks</b></code>. <code><b>Callback Refs</b></code> are advised by React.<br><br/>
Refs are created by <code><b>React.createRef()</b></code> and attached to <code><b>React</b></code> Elements via the <code><b>ref</b></code> attribute.
Refs are commonly assigned to an instance property when a component is constructed so they can be referenced throughout the component.<br/></br/>
The Syntax looks like,
<pre><code class="language-js hljs xml">class MyComponent extends React.Component {
 constructor(props){
  super(props);
  this.myRef = React.createRef();
 }
 render(){
  return &lt;div ref={this.myRef}/&gt;
 }
}</code></pre>
When a ref is passed to an element in <code><b>render</b></code>, a reference to the node becomes accessible at the <code><b>current</b></code> attribute of the ref.
<pre><code class="language-js hljs xml">const node = this.myRef.current;</code></pre><br/>
The value of the ref differs depending on the type of the node:<br/>
<ul>
<li>When the <code><b>ref</b></code> attribute is used on an HTML Element, the <code><b>ref</b></code> created in the constructor with 
<code><b>React.createRef()</b></code> receives the underlying DOM Element as its <code><b>current</b></code> property.</li>
<li>When the <code><b>ref</b></code> attribute is used on a custom class component, the <code><b>ref</b></code> object receives the mounted instance of the 
component as its <code><b>current</b></code>.</li>
<li>We may not use the <code><b>ref</b></code> attribute on functional components because they don't have instances.</li>
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