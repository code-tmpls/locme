
<div class="appQuestion"><b>21. What is the purpose of ‘this’keyword in java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, ‘this’ keyword refers to current instance of the object.<br/><br/> 
It is useful for differentiating between instance variables and local variables.<br/><br/> 
It can be used to call constructors. Or it can be used to refer to the instance.<br/><br/> 
In case of method overriding, this is used for falling the method of current class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>22. Explain the concept of Inheritance?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Inheritance is an important concept in Object Oriented Programming. Some objects share certain characteristics and behavior. By using Inheritance, we can 
put the common behavior and characteristics in a base class which also known as super class. And then all the objects with common behavior inherit from 
this base class.<br/><br/> It is also represented by IS-A relationship.<br/><br/> Inheritance promotes, code reuse, method overriding and poly-morphism
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>23. Which class in Java is super class of every other class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java is an object oriented programming language. In Java, Object class is the super class of every other class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>24. Why Java does not support multiple inheritance?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Multiple Inheritance means that a class can inherit behavior from two or more parent classes.<br/><br/> 
The issue with Multiple Inheritance is that both the parent classes may have different implementation for the same method. So they have different ways of 
doing the same thing. Now which implementation should the child class choose? This leads to ambiguity in Multiple Inheritance.<br/><br/> 
This is the main reason for Java not supporting Multiple Inheritance in implementation.<br/><br/> 
Lets say you have a class <code><b>TV</b></code> and another class <code><b>AtomBomb</b></code>. Both have method <code><b>switchOn()</b></code> but 
only TV has <code><b>switchOff()</b></code> method. If your class inherits from both these classes then you have an issue that you can 
<code><b>switchOn()</b></code> both parents, but switchOff will only <code><b>switchOff()</b></code> TV. But you can implement multiple interfaces in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>25. In OOPS, what is meant by composition?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Composition is also known as "has-a" relationship.<br/><br/> 
In composition, "has-a" relation relates two classes. E.g. Class Car has a steering wheel.<br/><br/> 
If a class holds the instance of another class, then it is called Composition.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>26. How Aggregation and Composition are different concepts?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In OOPS, Aggregation and Composition are the types of Association Relations.<br/><br/> 
<ul>
<li>A composition is a strong relationship. If the composite object is destroyed, then all its parts are destroyed. E.g. A Car has a Steering Wheel.
If Car object is destroyed, then there is no meaning of Steering Wheel.<br/><br/> </li>
<li>In Aggregation, the relationship is weaker than Composition. E.g. A Library has students. If a Library is destroyed, Students still exist. 
So Library and Student are related by Aggregation. A Library has Books. If Library is destroyed, the Books are also destroyed. Books of a Library 
cannot exist without the Library. So Book and Library are related by Composition.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>27. Why there are no pointers in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, there are references instead of pointers. These references point to objects in memory. But there is no direct access to these memory locations. 
JVM is free to move the objects within VM memory.<br/><br/> The absence of pointers helps Java in managing memory and garbage collection effectively. 
Also it provides developers with convenience of not getting worried about memory allocation and de-allocation.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>28. If there are no pointers in Java,then why do we get NullPointerException?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, the pointer equivalent is Object reference. When we use a <code><b>.</b></code> it points to object reference. So JVM uses pointers but 
programmers only see object references. In case an object reference points to null object, and we try to access a method or member variable on it, 
then we get <code><b>NullPointerException</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>29. What is the purpose of ‘super’ keyword in java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>super</b></code> keyword is used in the methods or constructor of a child class. It refers to immediate parent class of an object. 
By using <code><b>super</b></code>, we can call a method of parent class from the method of a child class. We can also call the constructor of a parent 
class from the constructor of a child class by using <code><b>super</b></code> keyword.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>30. Is it possible to use this() and super() both in same constructor?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, Java does not allow using both super() and this() in same constructor.<br/><br/> 
As per Java specification, super() or this() must be the first statement in a constructor.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>31. What is the meaning of object cloning in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>Object.clone()</b></code> method is used for creating an exact copy of the object in Java. It acts like a copy constructor. It creates and returns 
a copy of the object, with the same class and with all the field shaving same values as of the original object.<br/><br/> One disadvantage of cloning is 
that the return type is an Object. It has to be explicitly cast to actual type.
<!-- Answer ::: END -->
</div>
</div>
