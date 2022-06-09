
<div class="appQuestion"><b>52. What is Runtime Polymorphism?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Runtime Polymorphism or Dynamic Polymorphism is thepolymorphism that exists at runtime. In case of method overriding itis not known which method will 
be called at runtime. Based on the type of object, JVM decides the exact method that should be called.<br/><br/> 
So at compile time it is not known which method will be called at run time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>53. Is it possible to achieve Runtime Polymorphism by data members in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. We need to create Runtime Polymorphism by implementingmethods at two levels of inheritance in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>54. Explain the difference betweenstatic and dynamic binding?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Static binding references are resolved at compile time. In Dynamic binding references are resolved at Run time.<br/><br/> 
<b>Example :</b>
<pre><code class="language-html hljs xml">Person p = new Person();
p.walk(); // Java compiler resolves this binding at compile time</code></pre>
<pre><code class="language-html hljs xml">public void walk(Object o) {
 ((Person) o).walk(); // this is dynamic binding.
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>
