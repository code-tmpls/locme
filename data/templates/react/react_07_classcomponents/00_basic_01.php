<div><b>1. Define Life cycle of React Class Components.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Each component in React has a lifecycle which we can monitor and manipulate during its three main phases. The three phases are: 
<ol>
<li>Mounting</li>
<li>Updating</li>
<li>Unmounting</li>
</ol>
<b>1. MOUNTING</b><br/>
Mounting means putting elements into the DOM.<br/>
React has four built-in methods that gets called, in this order, when mounting a component:<br/><br/>
<ul>
<li><b>constructor()</b><br/>
This Method is called when the component is initiated, and it is the natural place to set up the initial state and other initial values.<br/><br/>
The <code><b>constructor()</b></code> method is called with the <code><b>props</b></code>, as arguments, and we should always start by calling 
<code><b>super(props)</b></code> before anything else, this will initiate the parent's constructor method and allows the component to inherit 
methods from its parent (<code><b>React.Component</b></code>).<br/><br/>
The Syntax looks like,
<pre><code class="language-html hljs xml">class Header extends React.Component {
  constructor(props) {
    super(props);
    this.state = {favoritecolor: "red"};
  }
  render() {
    return (
      &lt;h1&gt;My Favorite Color is {this.state.favoritecolor}&lt;/h1&gt;
    );
  }
}

ReactDOM.render(&lt;Header /&gt;, document.getElementById('root'));</code></pre><br/>
</li>
<li><b>getDerivedStateFromProps()</b><br/>
The <code><b>getDerivedStateFromProps()</b></code> method is called right before rendering the element(s) in the DOM.<br/>
This is the natural place to set the <code><b>state</b></code> object based on the initial <code><b>props</b></code>.<br/>
It takes <code><b>state</b></code> as an argument, and returns an object with changes to the <code><b>state</b></code>.
<pre><code class="language-html hljs xml">static getDerivedStateFromProps(props, state) {
 return { props: props, state: state };
}</code></pre><br/>
</li>
<li><b>render()</b><br/>
The <code><b>render()</b></code> method is required, and is the method that actually outputs the HTML to the DOM.
<pre><code class="language-html hljs xml">render() {
 return (
   &lt;h1&gt;This is the content of the Header component&lt;/h1&gt;
 );
}</code></pre><br/></li>
<li><b>componentDidMount()</b><br/>
The <code><b>componentDidMount()</b></code> method is called after the component is rendered.<br/>
This is where we run statements that requires that the component is already placed in the DOM.<br/>
<pre><code class="language-js hljs xml">componentDidMount() {
  // Here we right a logic
}</code></pre><br/>
</li>
</ul>

<b>2. UPDATING</b><br/>
A component is updated whenever there is a change in the component's state or props.<br/>
React has five built-in methods that gets called, in this order, when a component is updated:<br/><br/>
<ul>
<li><b>getDerivedStateFromProps()</b><br/>
This is the first method that is called when a component gets updated.<br/>
The <code><b>getDerivedStateFromProps()</b></code> method is called right before rendering the element(s) in the DOM.<br/>
This is the natural place to set the <code><b>state</b></code> object based on the initial <code><b>props</b></code>.<br/>
It takes <code><b>state</b></code> as an argument, and returns an object with changes to the <code><b>state</b></code>.
<pre><code class="language-js hljs xml">static getDerivedStateFromProps(props, state) {
 return { props: props, state: state };
}</code></pre><br/></li>
<li><b>shouldComponentUpdate()</b><br/>
In the <code><b>shouldComponentUpdate()</b></code> method we can return a Boolean value that specifies whether React should continue with the 
rendering or not.<br/>The default value is <code><b>true</b></code>.<br/>
If <code><b>shouldComponentUpdate</b></code> returns <code><b>false</b></code>, React acts as if the component's render output is the same 
as the previous pass and returns early.
<pre><code class="language-js hljs xml">shouldComponentUpdate() {
 return false; // true/false
}</code></pre><br/>
</li>
<li><b>render()</b><br/>
The <code><b>render()</b></code> method is of course called when a component gets updated, it has to re-render the HTML to the DOM, 
with the new changes.<br/><br/></li>
<li><b>getSnapshotBeforeUpdate()</b><br/>
In the <code><b>getSnapshotBeforeUpdate()</b></code> method, we have access to the props and state before the update, meaning that even after 
the update, we can check what the values were before the update.<br/>
If the <code><b>getSnapshotBeforeUpdate()</b></code> method is present, we should also include the <code><b>componentDidUpdate()</b></code> method, 
otherwise we will get an error.<br/>
<pre><code class="language-js hljs xml">getSnapshotBeforeUpdate(prevProps, prevState) {
  // Write wer logic
}
componentDidUpdate() {
  // Write wer logic  
}</code></pre>
</li>
<li><b>componentDidUpdate()</b><br/>
The <code><b>componentDidUpdate</b></code> method is called after the component is updated in the DOM.<br/><br/></li>
</ul>

<b>3. UNMOUNTING</b><br/>
The next phase in the lifecycle is Unmounting. When a component is removed from the DOM, it is called in React as <code><b>Unmounting</b></code>.<br/>
React has only one built-in method that gets called when a component is unmounted:<br/><br/>
<ul>
<li><b>componentWillUnmount()</b><br/>
The <code><b>componentWillUnmount</b></code> method is called when the component is about to be removed from the DOM.
<pre><code class="language-js hljs xml">componentWillUnmount() {
  // Write wer logic  
}</code></pre>
</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>


<div><b>Does React re-render all components and sub components every time setState is called?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>