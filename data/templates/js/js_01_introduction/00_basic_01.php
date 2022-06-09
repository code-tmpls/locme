<div><b>1. Is javascript a statically typed or a dynamically typed language?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
JavaScript is a dynamically typed language. In a dynamically typed language, the type of a variable is checked during <b>run-time</b> in 
contrast to statically typed language, where the type of a variable is checked during <b>compile-time</b>.
<div class="table-responsive">
<table class="table">
<thead><tr><th>Static Typing</th><th>Dynamic Typing</th></tr></thead>
<tbody>
<tr><td>Variables have types</td><td>Variables have no types</td></tr>
<tr><td>Values have types</td><td>Values have types</td></tr>
<tr><td>Variables cannot change types</td><td>Variables change types dynamically</td></tr>
</tbody>
</table>
Since javascript is a loosely(dynamically) typed language, variables in JS are not associated with any type. A variable can hold the 
value of any data type.<br/><br/>
<i>For example,</i> a variable which is assigned a number type can be converted to a string type:
<pre><code class="language-js hljs xml">var a = 23;
var a = "Hello World!";</code></pre>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>6. What is NaN property in JavaScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>NaN property</b> represents "Not-a-Number" value. It indicates a value which is not a legal number.<br/><br/>
typeof of a <code><b>NaN</b></code> will return a Number.<br/><br/>
To check if a value is NaN, we use the isNaN() function,<br/>
<i>For Example</i>,<br/>
<pre><code class="language-js hljs xml">isNaN("Hello")  // Returns true
isNaN(345)   // Returns false
isNaN('1')  // Returns false, since '1' is converted to Number type which results in 0 ( a number) 
isNaN(true) // Returns false, since true converted to Number type results in 1 ( a number)
isNaN(false) // Returns false
isNaN(undefined) // Returns true</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>8. What is an Immediately Invoked Function in JavaScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>An IIFE (Immediately Invoked Function Expression)</b> is a JavaScript function that runs as soon as it is defined. It is a design pattern 
which is also known as a Self-Executing Anonymous Function and contains two major parts:
<ul>
<li>The first is the anonymous function with lexical scope enclosed within the <code><b>Grouping Operator ()</b></code>. This prevents accessing 
variables within the IIFE idiom as well as polluting the global scope.</li>
<li>The second part creates the immediately invoked function expression () through which the JavaScript engine will directly 
interpret the function.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>9. What is Grouping operator in Javascript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>Grouping operator ( )</b></code> controls the precedence of evaluation in expressions.
<h5><b>Using the grouping operator</b></h5>
Overriding multiplication and division first, then addition and subtraction to evaluate addition first.<br/>
For example,
<pre><code class="language-js hljs xml">var a = 1;
var b = 2;
var c = 3;

// default precedence
a + b * c     // 7
// evaluated by default like this
a + (b * c)   // 7

// now overriding precedence
// addition before multiplication
(a + b) * c   // 9

// which is equivalent to
a * c + b * c // 9</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>11. Explain "this" keyword.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>this</b></code> keyword in javascript refers to the object it belongs to.<br/><br/>
It has different values depending on where it is used:<br/><br/>
<ol>
<li>In a method, <code><b>this</b></code> refers to the <b>owner object</b>.<br/>
For example,
<pre><code class="language-js hljs xml">const person = {
  firstName: "John",
  lastName: "Doe",
  id: 5566,
  fullName : function() {
    return this.firstName + " " + this.lastName;
  }
};</code></pre>
In above example, <code><b>person</b></code> Object consists of firstName and lastName, and to build a fullName parameter in the 
same Object using firstName and lastName parameter, this keyword is used. In this way, <code><b>this</b></code> refers to the <b>owner object</b>.<br/><br/>
</li>
<li>Alone, <code><b>this</b></code> refers to the <b>global object</b>.<br/>
<pre><code class="language-js hljs xml">let x = this; // [object Window]</code></pre>

</li>
<li>In a function, <code><b>this</b></code> refers to the <b>global object</b>.</li>
<li>In a function, in strict mode, <code><b>this</b></code> is undefined.</li>
<li>In an event, <code><b>this</b></code> refers to the element that received the event.</li>
<li>Methods like <code><b>call()</b></code>, and <code><b>apply()</b></code> can refer <code><b>this</b></code> to any object.</li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>9. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>11. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>13. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>15. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>17. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>19. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>21. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>23. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>25. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->