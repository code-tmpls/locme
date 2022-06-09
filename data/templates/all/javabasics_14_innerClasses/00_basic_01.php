
<div class="appQuestion"><b>112. What is a Nested class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, a Nested class is a class declared inside another class. We can have more than one class declared inside a file.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>113. How many types of Nested classes are in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides four types of Nested classes:
<ol>
<li>Member inner class</li>
<li>Local inner class</li>
<li>Anonymous inner class</li>
<li>Static nested class</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>114. Why do we use Nested Classes?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are following reasons for using nested classes:
<ol>
<li><b>Logical Grouping :</b> We can logically group classes in one place. If one class is useful to only one other class, then we put smaller class 
within the larger class and keep them in one file. This kind of nesting "helper classes" in a top-level class makes the package more streamlined.</li>
<li><b>Encapsulation :</b> Nested classes increase encapsulation. Let say there are two top-level classes, Foo and Bar. Bar needs access to private 
members of Foo. We can hideclass Bar within class Foo. In this way, private members of Foo can be accessed by class Bar. So class Foo remains 
encapsulated. Also, class Bar remains hidden from theoutside world.</li>
<li><b>Code Clarity :</b> Nested classed make the code more readable and well organized. Only Top-level classes areexposed. The helper classes are kept 
hidden and closer the code where it is used by a Top-level class.</li>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>115. What is the difference between a Nested class and an Inner class in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<ul>
<li>An Inner class in Java is non-static class. It is a type of Nested class that is defined in another class but not qualified with a Static modifier. 
A Nested class is also a class can be Static Nested class or a non-Static Inner class.</li>
<li>An Inner class has access to other members of the enclosing class, 
even if they are declared private. A Static Nested class can not access the other members of the enclosing class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>116. What is a Nested interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Nested interface is declared inside another interface or a top-level class. By default it is static.<br/><br/> 
A Nested interface is also known as Static interface.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>117. How can we access the non-final local variable, inside a Local Inner class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java allows a Local Inner class to access only Constant local members. So we have to make the non-final local variable as final constant to access 
it inside a Local Inner class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>118. Can an Interface be defined in a Class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, we can define a Static Nested interface within a class. Only the enclosing class can access it.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>119. Do we have to explicitly mark a Nested Interface public static?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Nested Interface is implicitly public static. So the modifiers public and static are redundant in declaration.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>120. Why do we use Static Nested interface in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Only the enclosing class can access a Static Nested interface. Consider following code in which interface Xyz is enclosed in class Abc.
<pre><code class="language-html hljs xml">public class Abc { 
 public interface Xyz { 
  void callback(); 
 } 
 public static void registerCallback(Xyz xyz) {
	// ...
 } 
}</code></pre>

<pre><code class="language-html hljs xml">// Client Code 
Abc.registerCallback(new Abc.Xyz() { 
 public void callback() {
	// ...
 }
});</code></pre>
Any code that cannot access Abc can not access interface Xyz also.<br/><br/>
So the purpose of declaring an Inner interface is to restrict its access from outside world.
<!-- Answer ::: END -->
</div>
</div>