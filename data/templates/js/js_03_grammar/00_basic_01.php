<div><b>1. What are the different data types present in javascript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are three types of Data types-
<ul>
<li><b>Primitive (Primary) -</b> Holds One Value at a time.</li>
<li><b>Composite (Reference) -</b> Hold collections of values and more complex entities.</li>
<li><b>Special Data Types -</b> Null and Undefined are two data types</li></ul>
<h5><b>Primitive types</b></h5>
<ol>
<li><b>String -</b> represent textual data (i.e. sequences of characters).<br/><br/>
<b>SYNTAX</b>
<pre><code class="language-js hljs xml">var a = 'Hi there!';  // using single quotes
var b = "Hi there!";  // using double quotes</code></pre>
</li>
<li><b>Number -</b> represent positive or negative numbers with or without decimal place, or numbers written using 
exponential notation e.g. 1.5e<sup>-4</sup> (equivalent to 1.5x10<sup>-4</sup>).<br/><br/>
<b>SYNTAX</b>
<pre><code class="language-js hljs xml">var a = 25;         // integer
var b = 80.5;       // floating-point number
var c = 4.25e+6;    // exponential notation, same as 4.25e6 or 4250000
var d = 4.25e-6;    // exponential notation, same as 0.00000425</code></pre>

</li>
<li><b>Boolean -</b> hold only two values: <code><b>true</b></code> or <code><b>false</b></code><br/><br/>
<b>SYNTAX</b>
<pre><code class="language-js hljs xml">var isReading = true;   // yes, I'm reading
var isSleeping = false; // no, I'm not sleeping</code></pre>
</li>
</ol>
<h5><b>Composite (Reference)</b></h5>
<ul>
<li><b>Object -</b> holds the collections of data (It holds defined as a <code><b>key-value pair</b></code>).<br/><br/>
<b>SYNTAX</b>
<pre><code class="language-js hljs xml">var emptyObject = {};
var person = { "name": "Clark", "surname": "Kent", "age": 36 };</code></pre>
</li>
<li><b>Array -</b> used for storing multiple values in single variable.<br/><br/>
<b>SYNTAX</b>
<pre><code class="language-js hljs xml">var colors = ["Red", "Yellow", "Green", "Orange"];
var cities = ["London", "Paris", "New York"];
alert(colors[0]);   // Output: Red
alert(cities[2]);   // Output: New York</code></pre></li>
<li><b>Function -</b> that executes a block of code.<br/><br/>
<b>SYNTAX</b>
<pre><code class="language-js hljs xml">var greeting = function(){ 
 return "Hello World!"; 
}
alert(greeting()); // Output: Hello World!</code></pre>
</li>
</ul>
<h5><b>Special Data Types</b></h5>
<ol>
<li><b>Undefined -</b>  It holds one value the special value <code><b>undefined</b></code> (which is the default value for the variable 
when it is being created).<br/><br/>
<b>SYNTAX:</b>
<pre><code class="language-js hljs xml">var a;
var b = "Hello World!"
 
alert(a) // Output: undefined (default value if no value is assigned)
alert(b) // Output: Hello World!</code></pre>
</li>
<li><b>Null -</b> which represents that there is no value.<br/><br/>
<b>SYNTAX:</b>
<pre><code class="language-js hljs xml">var a = null;
alert(a); // Output: null

var b = "Hello World!"
alert(b); // Output: Hello World!</code></pre></li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>1. Discuss the template literals in ES6.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Template literals are a brand-new feature in ES6. It makes producing multiline strings and performing string interpolation simple.<br/><br/>
Template literals, also known as string literals, allow for embedded expressions.<br/><br/>
Template literals were referred to as template strings prior to ES6. The backtick (``) character is used to enclose template literals. 
The dollar sign and curly brackets <code><b>(${expression})</b></code> are used to denote placeholders in template literals. If we need to 
use an expression within the backticks, we can put it in the <code><b>(${expression})</b></code> variable.
<pre><code class="language-html hljs xml">let s1 = "Good";  
  
let s2 = "Day";  
   
let s = `${s1} ${s2}`;  

console.log(s);</code></pre>
<b>Output:</b>
<pre><code class="language-html hljs xml">Good Day</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What is the reason behind adding Symbol to ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Symbols are a new type of object that can be used as distinct property names in objects. Using Symbols instead of strings allows separate modules 
to create properties that are not mutually exclusive. Symbols can also be kept private, preventing anyone who does not have direct access to the 
Symbol from accessing its properties.
Symbols are a brand-new kind of primitive. Symbols, like numbers, strings, and booleans, have a function that can be used to produce them. 
Symbols, unlike the other primitives, do not have a literal syntax (similar to how strings have ") and can only be created using the Symbol 
constructor:
<pre><code class="language-html hljs xml">let symbol = Symbol();</code></pre>
In truth, Symbols are only a little different means of attaching properties to an object; the well-known Symbols could easily be provided 
as standard methods, just like Object.prototype.has Own Property which appears in anything that inherits from Object.
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