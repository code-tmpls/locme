<div><b>2. What is the difference between Set and WeakSet in ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Set</b></code> and <code><b>WeakSet</b></code> objects allows you to store collection of unique keys. But there are some key differences 
between them -<br/><br/>
<b>BASICS:</b><br/><br/>
<div class="table-responsive">
<table class="table">
<thead><tr><th>Set</th><th>WeakSet</th></tr></thead>
<tbody>
<tr>
<td>A set can contain all types of values.</td>
<td>A weakSet can only contain objects.</td>
</tr>
<tr>
<td>Use <code><b>.size</b></code> to find the number of elements.</td>
<td>Use <code><b>.length</b></code> to find the number of elements.</td>
</tr>
<tr>
<td><code><b>.forEach()</b></code> is available for iteration.</td>
<td><code><b>.forEach()</b></code> is not available for iteration.</td>
</tr>
<tr>
<td>Nothing is auto-destroyed.</td>
<td>An element object will be auto released to the garbage collector if it has no other reference left.</td>
</tr>
</tbody>
</table>
</div>
<ol>
<li><i>They both behave differently when a object referenced by their keys gets deleted.</i><br/><br/>
<b>Working with <code>Set</code>:</b>
<pre><code class="language-js hljs xml">var set = new Set(); // Object Created

/* Added data to Set in self invoked function */
(function(){
 var a = {x: 12};
 set.add(a);
})()</code></pre>
<b>Working with <code>WeakSet</code>:</b>
<pre><code class="language-js hljs xml">var weakSet = new WeakSet(); // Object Created

/* Added data to WeakSet in self invoked function */
(function(){
 var a = {x: 12};
 weakSet.add(a);
})()</code></pre>

Above Self invoked function is executed. There is no way we can reference <code><b>{x: 12}</b></code> anymore.<br/><br/>
After program completes its execution, Garbage collector goes ahead and deletes the key <code><b>a</b></code> pointer from 
<code><b>WeakSet</b></code> and also removes <code><b>{x: 12}</b></code> from memory. But in case of <code><b>Set</b></code>, 
the garbage collector doesn’t remove a pointer from <code><b>Set</b></code> and also doesn’t remove <code><b>{x: 12}</b></code> from memory.<br/><br/>
So <code><b>Set</b></code> can cause more garbages in memory. We can say that <code><b>Set</b></code> references are strong pointer whereas 
<code><b>WeakSet</b></code> references are weak pointers.<br/><br/>
</li>
<li><i><code><b>WeakSet</b></code> keys cannot be primitive types. They cannot be created from array or another set.</i><br/><br/>
<b>Working with <code>Set</code>:</b>
<pre><code class="language-js hljs xml">var set = new Set([1,2,3,4]);</code></pre>
<b>Working with <code>WeakSet</code>:</b>
<pre><code class="language-js hljs xml">//cannot be created from array or another set
var weakset = new WeakSet();
weakset.add({a: 1}); //object reference must</code></pre></li>
<li><i><code><b>WeakSet</b></code> doesn’t provide any methods or functions to work with the whole set of keys. For example: size, looping etc.</i><br/><br/>
<b>Working with <code>Set</code>:</b>
<pre><code class="language-js hljs xml">var set = new Set([1,2,3,4]);

console.log(set.size); // 4

for(var i of set) {
  console.log(i); // 1,2.3.4
}

set.clear();</code></pre><br/>
<b>Working with <code>WeakSet</code>:</b>
<pre><code class="language-js hljs xml">var weakset = new WeakSet();
weakset.add({a: 1}); // object reference must

// doesn't execute throws error
for(var i of weakset) {
    console.log(i);
}

weakset.clear(); //This works</code></pre>
</li>
</ol>

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


<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>