<div><b>2. Explain Hoisting in javascript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Hoisting</b> means <i>a variable can be declared after it has been used.</i> In other words; <i>a variable can be used before it has been declared.</i><br><br/>
<b>Example</b>
<pre><code class="language-js hljs xml">x = 5; // Assign 5 to x

elem = document.getElementById("demo"); // Find an element
elem.innerHTML = x;                     // Display x in the element

var x; // Declare x</code></pre>
<b>Note:</b>
<ol>
<li>Variable initializations are not hoisted, only variable declarations are hoisted.</li>
<li>To avoid hoisting, we can run javascript in strict mode by using <code>"use strict"</code> on top of the code.</li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>3. What is a Temporal Dead Zone?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Variable Hoisting does not apply to <code><b>let</b></code> bindings in ES6, so <code><b>let</b></code> declarations do not rise to the top of the 
current execution context. A ReferenceError is thrown if the variable in the block is referenced before it is initialized (unlike a variable 
declared with <code><b>var</b></code>, which will just possess the <code><b>undefined</b></code> value).<br/><br/>
From the beginning of the block to - until the initialization is performed, the variable is in a <b>Temporal Dead Zone.</b><br/><br/>

<b>Syntaxes with <code>var</code> Declarations:</b>
<pre><code class="language-js hljs xml">console.log(a); // undefined

var a = 1;

console.log(a); // 1</code></pre>
<b>Syntaxes with <code>let</code> Declarations:</b>
<pre><code class="language-js hljs xml">console.log(b); // causes ReferenceError

let b = 1;

console.log(b); // 1</code></pre>
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