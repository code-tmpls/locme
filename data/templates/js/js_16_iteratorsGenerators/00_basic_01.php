<div><b>1. What is the generator function?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This is a newly introduced feature in ES6. The Generator function returns an object after generating several values over time. 
We can iterate over this object and extract values from the function one by one. 
A generator function returns an iterable object when called. In ES6, we use the <code><b>*</b></code> sign for a generator function along 
with the new <code><b>‘yield'</b></code> keyword.
<pre><code class="language-html hljs xml">function *Numbers() {
    let num = 1;
    while(true) {
        yield num++;
    }
}
  
var gen = Numbers();
 
// Loop to print the first
// 5 Generated numbers
for (var i = 0; i < 5; i++) {
 
    // Generate the next number
    document.write(gen.next().value);
 
    // New Line
    document.write("&lt;br&gt;");
}</code></pre>
<b>Output:</b><br/>
<pre><code class="language-html hljs xml">1
2
3
4
5</code></pre>
The yielded value becomes the next value in the sequence each time yield is invoked. Also, generators compute their output values on demand, 
allowing them to efficiently represent expensive to compute sequences or even infinite sequences.
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