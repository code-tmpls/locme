
<div><b>1. Difference between ‘>>’ and ‘>>>’ operators in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>&gt;&gt;</b></code> is a right shift operator shifts all of the bits in a value to the right to a specified number of times.
<pre><code class="language-html hljs xml">int a = 15;
a = a &gt;&gt; 3;</code></pre>
The above line of code moves 15 three characters right.<br/><br/>
<code><b>&gt;&gt;&gt;</b></code> is an unsigned shift operator used to shift right. The places which were vacated by shift are filled with zeroes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. Explain about instanceof operator in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Instanceof operator is used to test the object is of which type.<br/><br/>
<b>Syntax :</b>
<pre><code class="language-html hljs xml">&lt;reference expression&gt; instanceof &lt;destination type&gt;</code></pre>
<code><b>Instanceof</b></code> returns <code><b>true</b></code> if <code><b>reference expression</b></code> is subtype of <code><b>destination type</b></code>.<br/>
<code><b>Instanceof</b></code> returns <code><b>false</b></code> if reference expression is <code><b>null</b></code>.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">public Example {
	
 public static void main(String[] args) {
  Integer a = newInteger(5);
  if (a instanceof java.lang.Integer) {
	System.out.println(true);
  } else {
	System.out.println(false);
  }
 }
 
}</code></pre>
Since <code><b>a</b></code> is integer object it returns <code><b>true</b></code>.<br/><br/>
There will be a compile time check whether reference expression is subtype of destination type. If it is not a subtype then compile time error will be 
shown as Incompatible types.
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