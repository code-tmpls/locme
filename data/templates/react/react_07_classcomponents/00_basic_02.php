<div><b>2. In React Class Component, Where we write AJAX Request?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>componentDidMount</b></code> is where an AJAX Request should be made in a React Class Component. This Method will be executed when the 
component mounts (is added to the DOM) for the first time. This method is only executed once during the Component's life.<br/><br/> Importantly, we can't 
guarantee the AJAX Request will have resolved before the component mounts. If it doesn't, that would mean that we would be trying to 
<code><b>setState</b></code> on an unmounted component, which would not work. Making our AJAX Request in <code><b>componentDidMount</b></code> will 
guarantee that there's a component to update.
<!-- Answer ::: END -->
</div>
</div>


<div><b>3. In React, How do you use this keyword in Constructor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we use <code><b>React.createClass</b></code>, React autobinds all the functions to <code><b>this</b></code>. So the <code><b>this</b></code> keyword is 
bound to our component's instance automatically:
<pre><code class="language-js hljs xml">// This works inside React.createClass
onChange={this.handleChange}</code></pre>
If we are using ES6 class, React is no longer autobinds. 
<ul>
<li>One way to resolve <code><b>this</b></code> is to call bind in render, as follows:
<pre><code class="language-js hljs xml">onChange={this.handleChange.bind(this)}</code></pre>
Another approach is using Arrow Functions:
<pre><code class="language-js hljs xml">onChange={e=>this.handleChange(e)}</code></pre></li>
<li>One way to avoid binding in render is to bind in the constructor.
<pre><code class="language-js hljs xml">constructor(props) {
 super(props);
this.handleChange = this.handleChange.bind(this);
}</code></pre>
</li>
<ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>What's the difference between super() and super(props) in React when using ES6 Classes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b>What is the difference between Constructor and getInitialState in React?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b>Can you force a React Component to rerender without calling setState? What is forceUpdate?</b></div>
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