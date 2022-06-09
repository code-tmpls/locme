<div><b>1. Explain the Rest parameter in ES6.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It's a new feature in ES6 that enhances the ability to manage arguments. Indefinite arguments can be represented as an array using rest 
parameters. We can invoke a function with any number of parameters by utilizing the rest parameter.
<pre><code class="language-html hljs xml">function display(...args) {  
 let ans = 0;  
 for (let i of args) {  
  ans *= i;  
 }  
 console.log("Product = "+ans);  
}  
   
display(4, 2, 3);</code></pre>
<b>Output:</b>
<pre><code class="language-html hljs xml">Product = 24</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What do you understand about default parameters?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If no value or undefined is passed, we can use the default parameters to set default values for named parameters.
<pre><code class="language-html hljs xml">var display = (x , y = 2) => {  
 console.log(x + " " + y);  
}  
display(1);</code></pre>
<b>Output:</b>
<pre><code class="language-html hljs xml">1 2</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What do you understand about IIFE (Immediately Invoked Function Expressions)?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
 IIFE is a JavaScript function that starts running as soon as it is defined. The Self-Executing Anonymous Function is another name for it. 
 It is divided into two major sections, which are as follows:
 <ul>
  <li>The first part is a lexical scope (static scope) anonymous function that is enclosed by the <code><b>Grouping operator ()</b></code>.</li>
  <li>The IIFE, which is used by JavaScript, is created in the second part. The function will be directly interpreted by the engine.</li>
 </ul>
<pre><code class="language-html hljs xml">(func_() {    
 console.log("Good Day");     
})();</code></pre>
<b>Output:</b>
<pre><code class="language-html hljs xml">Good Day</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>4. Name some string functions introduced in ES6.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Method</th><th>Description</th></tr></thead>
<tbody>
<tr>
<td>startsWith</td>
<td>It determines if a string begins with the characters of a given string.</td>
</tr>
<tr>
<td>endsWith</td>
<td>It determines if a string ends with the characters of a given string.</td>
</tr>
<tr>
<td>includes</td>
<td>It will return true if the given argument is present in the string.</td>
</tr>
<tr>
<td>repeat</td>
<td>It creates and returns a new string which contains the given number of copies of the string on which this method was called, concatenated together.</td>
</tr>
</tbody>
</table>
</div>
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
