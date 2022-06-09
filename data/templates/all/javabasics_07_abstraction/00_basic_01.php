
<div class="appQuestion"><b>55. What is Abstraction in Object Oriented programming?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Abstraction is the process of hiding certain implementation details of an object and showing only essential features of the object to outside world.<br/><br/> 
It is different from Abstract class in Java.<br/><br/>  Abstraction process identifies commonalities and hides the complexity of implementation. It helps us 
in focusing on theinterface that we share with the outside world.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>56. How is Abstraction different from Encapsulation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<ul>
<li>Abstraction happens at class level design. It results in hiding the implementation details.</li>
<li>Encapsulation is also known as “Information Hiding”.</li>
</ul>
An example of encapsulation is marking the member variables private and providing getter and setter for these member variables.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>57. What is an abstract class in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An abstract class in Java has one or more abstract methods. An Abstract method is just declared in the abstract class, but it is not implemented.<br/><br/> 
An abstract class has to be extended in Java and its abstract methods have to be implemented by a child class. Also Java doesnot allow new instance of 
Abstract class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>58. Is it allowed to mark a method abstract method without marking the class abstract?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. Java specification says that if there is at least one abstract method in a class, the class has to be marked abstract.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>59. Is it allowed to mark a method abstract as well as final?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. It will be contradictory statement to mark a method abstract as well as final.<br/><br/> 
An abstract method has to be overridden by a child class. And a final method cannot be overridden. Therefore a method can be either abstract or final in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>60. Can we instantiate an abstract class in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. We cannot create an instance of an abstract class in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>61. What is an interface in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An Interface in Java is an abstract type blueprint of a class. It contains the methods that a class must implement. It is like a protocol.<br/><br/> 
It has method signatures and constant declarations.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>62. Is it allowed to mark an interface method as static?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, from Java 8 onwards, we can define static and default methods in an interface. Prior to Java 8, it was not allowed.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>63. Why an Interface cannot be marked as final in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A final method cannot be overridden. But an interface method has tobe implemented by another class. So the interface method cannot bemarked as final.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>64. What is a marker interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are interfaces that do not have any data member or methods.<br/><br/> 
These interfaces are called Marker interface.E.g. Serializable, Cloneable, Remote etc.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>65. What can we use instead of Marker interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use annotations instead of Marker interface.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>66. How Annotations are better than Marker Interfaces?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Annotations serve the purpose of conveying metadata about the class to its consumers without creating a separate type for it.<br/><br/> 
Annotations are more powerful than a Marker interface. They allow programmers to pass more sophisticated information to classes that "consume" it.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>67. What is the difference between abstract class and interface in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Differences between Abstract class and Interface are as follows:
<ol>
<li>An abstract class can have implemented methods with body (non-abstract methods). Interface has only abstract methods. From Java 8 onwards, 
interface can have static/default methods in implemented form.</li>
<li>An abstract class can have instance member variables. An interface cannot have instance variables. It can only have constants.</li>
<li>An abstract class can have a constructor. Interface cannot have constructor. It has to be implemented by another class.</li>
<li>A class can extend only one abstract class. A class can implement more than one interface</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>68. Does Java allow us to use private and protected modifiers for variables in interfaces?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. All the variables in an interface are implicitly public.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>69. How can we cast to an object reference to an interface reference?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An Object that implements an Interface can be cast to the same Interface. Since An Object implementing an Interface already provides implementation for 
the methods of that Interface, it is allowed to do so as per the rules of Inheritance.
<!-- Answer ::: END -->
</div>
</div>

