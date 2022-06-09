
<div><b>3. Difference between " == " and " === " operators.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>" == "</b></code> (Double Equal to)  and <code><b>" === "</b></code> (Triple Equal to)- both are Comparision Operators. 
<code><b>==</b></code> (Double Equal to) used to compare values whereas <code><b>===</b></code> (Triple Equal to) is used to compare 
both values and types.<br/><br/>
<b>Example:</b>
<pre><code class="language-js hljs xml">var x = 2;
var y = "2";
(x == y)  // Returns true since the value of both x and y is the same
(x === y) // Returns false since the typeof x is "number" and typeof y is "string"</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>4. Explain Implicit Type Coercion in javascript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Implicit type coercion</b> in javascript is automatic conversion of value from one data type to another. It takes place when the operands 
of an expression are of different data types.<br/><br/>
<h5><b>1. String coercion</b></h5>
String coercion takes place while using the "+" operator. When a number is added to a string, the number type is always converted to the string type.<br/><br>
<b>Example</b><br/>
<b>1.</b> <code><b>Working with Number and String: </b></code>
<pre><code class="language-js hljs xml">var x = 3;
var y = "3";
alert(x + y); // Returns "33"</code></pre>

<b>2.</b> <code><b>Working with Strings: </b></code>
<pre><code class="language-js hljs xml">var x = 24;
var y = "Hello";
alert(x + y);   // Returns "24Hello"</code></pre>

<b>3.</b> <code><b>Working with Numbers: </b></code>
<pre><code class="language-js hljs xml">var x = 3;
var y = 3;
alert(x + y);   // 6</code></pre>
<b>Note -</b> 
<ul>
<li><code><b>" + " operator</b></code> is used to add two numbers, outputs a number. The same " + " operator is used to add two strings, outputs the concatenated string.</li>
<li><code><b>" - " operator</b></code>, if it is used between a Number and String then, the String is converted to a number and then subtraction takes place.
<pre><code class="language-js hljs xml">var x = 3;
var y = "6";
alert(x - y);  // Returns 0 since the variable y (string type) is converted to a number type</code></pre>
</li>
</ul>
<h5><b>2. Boolean coercion</b></h5>
It takes place when using logical operators, ternary operators, if statements and loop checks.<br/>
<i>For example,</i>
<pre><code class="language-js hljs xml">var x = 220;
var y = "Hello";
var z = undefined;
        
if( x && y ){ 
  console.log("Code runs" ); // This block runs because x && y returns "Hello" (Truthy)
}   
        
if( x || z ){
  console.log("Code runs");  // This block runs because x || y returns 220(Truthy)
}

// Other Conditions 
x | | y    // Returns 220 since the first value is truthy
        
x | | z   // Returns 220 since the first value is truthy
        
x && y    // Returns "Hello" since both the values are truthy
        
y && z   // Returns undefined since the second value is falsy</code></pre>

<h5><b>3. Equality Coercion</b></h5>
It takes place when using <code><b>" == " operator</b></code>.
<pre><code class="language-js hljs xml">var x = 2;
var y = "2";
(x == y)  // Returns true since the value of both x and y is the same
(x === y) // Returns false since the typeof x is "number" and typeof y is "string"</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>7. Explain passed by value and passed by reference.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Pass By Value:</b><br/><br/> In Pass by value, function is called by directly passing the value of the variable as an argument.
So any changes made inside the function does not affect the original value.<br/><br/>
In Pass by value, parameters passed as an arguments create its own copy. So any changes made inside the function is made to the 
copied value not to the original value.<br/><br/>
<b>Pass by Reference:</b><br/><br/> In Pass by Reference, Function is called by directly passing the reference/address of the variable 
as an argument. So changing the value inside the function also change the original value. In JavaScript array and Object follows pass by 
reference property.<br/><br/>
In Pass by reference, parameters passed as an arguments does not create its own copy, it refers to the original value so changes made 
inside function affect the original value. 
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>10. Explain Higher Order Functions in javascript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Functions that operate on other functions, either by taking them as arguments or by returning them, are called <b>Higher-order functions</b>.<br/><br/>
<i><b>Higher order functions</b> are a result of functions being first-class citizens in javascript.</i><br/><br/>
<b>Example#1:</b><br/>
<pre><code class="language-js hljs xml">function hello(fn) {
  var title = fn(); // Receives Hello World
}
    
hello(function() { return "Hello world"; });</code></pre>
In above example, <code><b>function() { return "Hello world"; }</b></code> (Function returns Hello World) is passed as a parameter to 
the <code><b>hello</b></code> function. So, here <code><b>hello</b></code> function is a <i>Higher Order Function</i>.<br/><br/>
Above Example can also be written as follows:
<pre><code class="language-js hljs xml">function hello() {
  return function() { 
    return "Hello world";
  }
}
        
var x = hello(); // hello function is called from here</code></pre>


<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>12. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>18. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>20. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>22. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>24. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>26. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->