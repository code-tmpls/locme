
<div class="appQuestion"><b>40. What is the other name of Method Overloading?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Method Overloading is also known as <code><b>Static Polymorphism</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>41. How will you implement Method Overloading in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, a class can have multiple methods with same name but different arguments. It is called Method Overloading.<br/><br/> 
To implement Method Overloading we have to create two methods with same name in a class and do one/more of the following:
<ol>
<li>Different number of parameters.</li>
<li>Different data type of parameters.</li>
<li>Different sequence of data type of parameters.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>42. What kinds of argument variations are allowed in Method Overloading?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Method Overloading allows two methods with same name to differ in :
<ol>
<li>Number of parameters.</li>
<li>Data type of parameters.</li>
<li>Sequence of data type of parameters.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>43. Why it is not possible to do Method Overloading by changing return type of method in java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If we change the return type of overloaded methods then it will leadto ambiguous behavior.<br/><br/> 
How will clients know which method will return what type. Due to this different return type are not allowed in overloaded methods.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>44. Is it allowed to overload main() method in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, Java allows users to create many methods with same name <code><b>main</b></code>. But only <code><b>public static void main(String[] args)</b></code> 
method is used for execution.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>45. How do we implement methodoverriding in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To override a method, we just provide a new implementation of a method with same name in subclass. So there will be at least two implementations of the 
method with same name. One implementation is in parent class. And another implementation is in child class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>46. Are we allowed to override a staticmethod in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. Java does not allow overriding a static method. If you create astatic method with same name in subclass, then it is a new method, not an overridden 
method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>47. Why Java does not allow overriding a static method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To override a method, you need an instance of a class. Static method is not associated with any instance of the class. So the concept ofoverriding does 
not apply here.Therefore, Java does not allow overriding a static method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>48. Is it allowed to override anoverloaded method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. You can override an overloaded method in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>49. What is the difference between Method Overloading and Method Overriding in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Differences between method overloading and overriding are:
<ol>
<li>Method overloading is static polymorphism. Method Overriding is runtime polymorphism.</li>
<li>Method overloading occurs within the same class. Method Overriding happens in two classes with hierarchy relationship.</li>
<li>Parameters must be different in method overloading.Parameters must be same in method overriding.</li>
<li>Method Overloading is a compile time concept. Method Overriding is a runtime concept.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>50. Does Java allow virtual functions?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. All instance methods in Java are virtual functions by default. Only class methods and private instance methods are not virtual methods in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>51. What is meant by covariant return type in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A covariant return type of a method is one that can be replaced by a "narrower" type when the method is overridden in a subclass.<br/><br/> 
Let say class B is child of class A. There is a get() method in classA as well as class B. get() method of class A can return an instanceof A, and get() 
method of class B return an instance of B. Hereclass B overrides get() method, but the return type is different.<br/><br/> 
Before Java 5, any method that overrides the method of parent class would have same return type.<br/><br/> 
From Java 5 onwards, a child class can override a method of parent class and the child class method can return an object that is child of object 
return by parent class method.
<!-- Answer ::: END -->
</div>
</div>
