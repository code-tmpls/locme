<div><b>1. Explain Destructuring in ES6.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Destructuring was introduced in ES6 as a way to extract data from arrays and objects into a single variable. It is possible to extract smaller 
fragments from objects and arrays using this method. The following is an example.
<pre><code class="language-html hljs xml">let greeting =['Good','Morning'];  
let [g1, g2] = greeting;  
console.log (g1, g2);</code></pre>
<b>Output:</b>
<pre><code class="language-html hljs xml">Good Morning</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>Name some array methods that were introduced in ES6.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Methods</th><th>Description</th></tr></thead>
<tbody>
<tr>
<td><code><b>Array.from()</b></code></td>
<td>It will convert iterable values and array-like values into arrays.</td>
</tr>
<tr>
<td><code><b>Array.of()</b></code></td>
<td>It will create a new array instance from a variable number of arguments no matter what the number or the type of arguments are.</td>
</tr>
<tr>
<td><code><b>Array.prototype.copyWithin()</b></code></td>
<td>It will copy the portion of an array to a different place within the same array.</td>
</tr>
<tr>
<td><code><b>Array.prototype.find()</b></code></td>
<td>It will find an element in an array, based on certain parameters that are passed into this method.</td>
</tr>
<tr>
<td><code><b>Array.prototype.findIndex()</b></code></td>
<td>It will return the index of the first element of the given array that fulfills the given condition.</td>
</tr>
<tr>
<td><code><b>Array.prototype.entries()</b></code></td>
<td>It will return an array iterator object that can be used while looping through the keys and values of arrays.</td>
</tr>
<tr>
<td><code><b>Array.prototype.keys()</b></code></td>
<td>It will return an array iterator object as well as the keys of the array.</td>
</tr>
<tr>
<td><code><b>Array.prototype.values()</b></code></td>
<td>It will provide the value of each key.</td>
</tr>
<tr>
<td><code><b>Array.prototype.fill()</b></code></td>
<td>It will fill the specific array elements with a static value.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>



<div><b>How do you use Destructuring Assignment to swap variables?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">var a = 1, b = 2;

[a, b] = [b, a];
console.log(a); // 2
console.log(b); // 1</code></pre>
<!-- Answer ::: END -->
</div>
</div>
