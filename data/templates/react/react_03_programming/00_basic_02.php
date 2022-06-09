<div><b>3. What is render() in React? And What is the purpose of it in React?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Each React component must have a <code><b>render()</b></code> mandatorily. It returns a single React element which is the 
representation of the native DOM component. If more than one HTML element needs to be rendered, then they must be grouped 
together inside one enclosing tag such as <code><b>&lt;form&gt;</b></code>, <code><b>&lt;group&gt;</b></code>, 
<code><b>&lt;div&gt;</b></code> etc. This function must be kept pure i.e., it must return the same result each time it is invoked.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4.  What is Props?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Props</b></code> is the shorthand for Properties in React. They are read-only components which must be kept pure i.e. immutable. 
They are always passed down from the parent to the child components throughout the application. A child component can never send a prop back 
to the parent component. This help in maintaining the unidirectional data flow and are generally used to render the dynamically generated data.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What is a state in React and how is it used?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>States</b></code> are the heart of React components. States are the source of data and must be kept as simple as possible. Basically, states 
are the objects which determine components rendering and behavior. They are mutable unlike the props and create dynamic and interactive components. 
They are accessed via <code><b>this.state()</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. Differentiate between states and props.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
<table class="table">
<thead><tr><th>State</th><th>Props</th></thead>
<tbody>
<tr>
 <td>Receive initial value from parent component.</td>
 <td>Receive initial value from parent component.</td>
</tr>
<tr>
 <td>Parent component can't change value</td>
 <td>Parent component can change value</td>
</tr>
<tr>
 <td>Set default values inside component</td>
 <td>Set default values inside component</td>
</tr>
<tr>
 <td>State Changes inside component</td>
 <td>Props won't change inside component</td>
</tr>
<tr>
 <td>Set initial value for child components</td>
 <td>Set initial value for child components</td>
</tr>
<tr>
 <td>State won't change inside child components</td>
 <td>Props changes inside child components</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What is arrow function in React? How is it used?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Arrow functions allow to bind the context of the components properly since in ES6 auto binding is not available by default. 
Arrow functions are mostly useful while working with the higher order functions.<br/></br>
The Syntax's of it, looks like:<br/><br/>
<b>General way: </b>
<pre><code class="language-html hljs xml">render() {    
 return(
   &lt;MyInput onChange={this.handleChange.bind(this) } /&gt;
 );
}</code></pre>
<b>With Arrow Functions:</b>
<pre><code class="language-html hljs xml">render() {  
 return(
    &lt;MyInput onChange={ (e) => this.handleOnChange(e) } /&gt;
 );
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What is the difference between a Presentational Component and Container Component?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Presentational Component</th><th>Container Component</th></tr></thead>
<tbody>
<tr>
 <td>This Components are concerned about <i>how things look</i></td>
 <td>This Components are concerned about <i>how things work</i></td>
</tr>
<tr>
 <td>They generally receive data and callbacks exclusively via props.</td>
 <td>These Components provide the data and behavior to presentational or other container components.</td>
</tr>
<tr>
 <td>These Components rarely have their own state but when they do it generally concerns UI State, as opposed to data state.</td>
 <td>They call Flux Actions and provide these as CallBacks to the Presentational Components. They arew also often stateful as they serve as 
 data sources.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What is the difference between Class Component and Functional Component?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Class Component</th><th>Functional Component</th></tr></thead>
<tbody>
<tr>
 <td>A class component requires you to extend from React. Component and create a render function which returns a React element.</td>
 <td>A functional component is just a plain JavaScript function that accepts props as an argument and returns a React element.</td>
</tr>
<tr>
 <td>It must have the render() method returning HTML</td>
 <td>There is no render method used in functional components.</td>
</tr>
<tr>
 <td>Also known as Stateful components because they implement logic and state.</td>
 <td>Also known as Stateless components as they simply accept data and display them in some form, that they are mainly responsible for rendering UI.</td>
</tr>
<tr>
 <td>React lifecycle methods can be used inside class components (for example, componentDidMount).</td>
 <td>React lifecycle methods (for example, componentDidMount) cannot be used in functional components, instead here we have a concept of React Hooks that we use.</td>
</tr>
<tr>
 <td>It requires different syntax inside a class component to implement hooks.
<pre><code class="language-js hljs xml">constructor(props) {
   super(props);
   this.state = {name: ''}
}</code></pre></td>
<td>Hooks can be easily used in functional components.
<pre><code class="language-js hljs xml">const [name,SetName]= React.useState('')</code></pre></td>
</tr>
<tr>
 <td>Constructor are used as it needs to store state.</td>
 <td>No Constructors are not used.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. What are Controlled Components?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A <i>controlled component</i> is a component that renders form elements and controls them by keeping the form data in the component's state.<br/><br/>
In a <i>controlled component</i>, the form element's data is handled by the React component (not DOM) and kept in the component's state. A controlled 
component basically overrides the default behavior of the HTML form elements.<br/><br/>
We create a controlled component by connecting the form element (<code><b>&lt;input&gt;</b></code>, <code><b>&lt;textarea&gt;</b></code> and 
<code><b>&lt;select&gt;</b></code>) to the state by setting its attribute value and the event <code><b>onChange</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What is a Higher Order Component (HOC) in React?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A Higher-Order Component is a function that takes a Component and returns a New Component.<br/><br/>
A Higher-Order Component (HOC) is an advanced Technique in React for reusing Component Logic. HOC's are not a part of React API. They are a pattern that emerges 
from Raect's Compositional Nature.<br/><br/>
HOC's allow you to reuse code, logic and bootstrap abstraction. HOCs are common in Third Party React Libraries. <br/><br/>
HOC's are the best way to share behaviour between React Components.<br/><br/>
If we find writing a lot of code in different places that does the same thing, we may be able to refactor the code into a reusable HOC.
<!-- Answer ::: END -->
</div>
</div>

<div><b>When rendering a list what is a key and what is it's purpose?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>What is PureComponent? When to use PureComponent over Component?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>How do you type check in React JS? What is React.PropTypes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>What is the difference between React Component and React Element?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>What is the difference between React Native and React?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>