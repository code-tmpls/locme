<div><b>1. What is the "spread" operator in ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The list of parameters is obtained using the spread operator. Three dots (...) are used to represent it. The spread operator divides an iterable 
(such as an array or a string) into individual elements. It's mostly used in JavaScript to make shallow copies of JS. It improves the readability 
of your code by making it more concise.<br/><br/>
The spread operator can be used to join two arrays together or to concatenate them.<br/><br/>

<pre><code class="language-html hljs xml">let arr1 = [4, 5, 6];  
    
let arr2 = [1, 2, 3, ...arr1, 7, 8, 9, 10];  
    
console.log(arr2);</code></pre>
<b>Output:</b><br/>
<pre><code class="language-html hljs xml">[ 1 2 3 4 5 6 7 8 9 10 ]</code></pre>

<!-- Answer ::: END -->
</div>
</div>

<div><b>2. How do you use the spread operator in making a String to Character Array?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Code:</b>
<pre><code class="language-html hljs xml">[...'apple']</code></pre>
<b>Output:</b>
<pre><code class="language-html hljs xml">['a', 'p', 'p', 'l', 'e']</code></pre>
<b>Explanation:</b><br/> A string is an iterable type, and in an array, the spread operator transfers each character of an iterable 
to one element. As a result, each character in a string becomes an Array element.
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