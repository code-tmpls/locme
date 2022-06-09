
<div class="appQuestion"><b>32. In Java, why do we use static variable?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Whenever we want to have a common property for all objects of aclass, we use a class level variable i.e. a static variable.<br/><br/> This variable is 
loaded in memory only once at the time of classloading. So it saves memory, since it is not defined per object in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>33. Why it is not a good practice to create static variables in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Static variables are common to all the objects of a class. If a new object is created, there is no need to test the value of static variable.<br/><br/> 
Any code that uses static variable can be in any state. It can be within a new object or at a class level. So the scope of static variable is open ended 
in a Java class.<br/><br/> If we want tighter control on scope, then variables should be created at the object creation level.<br/><br/> 
Also defining static variables is not a good practice because they go against the principles of Object Oriented Programming.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>34. What is the purpose of static method in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides the feature of static method to create behavior at the class level. The static method is common to all the objects of a class. We do not need 
to create any object of a class to call a static method. So it provides convenience of not creating an object for calling it.<br/><br/> 
Also a static method can access and modify static data members. This also helps in keeping the behavior as well as state at the class level.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>35. Why do we mark main method as static in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main method in Java is marked as static, so that JVM can call itto start the program. If main method is not static, then which constructor will be 
called by Java process?<br/><br/> As such it is a known as convention to mark main method static inJava. But if we remove the static, then there will be 
ambiguity. Java process may not know which method of a class to call to start the program.<br/><br/> 
So this convention helps in Java process to identify the starting code for a program in class that is passed as an argument to java process.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>36. In what scenario do we use a static block?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
At times, there is a class that has static member variables. These variables need some complicated initialization. At this time static block helps as a 
tool to initialize complex static member variable initialization.<br/><br/> The static block is executed even before the execution of main.<br/><br/> 
Sometimes, we can also replace static block with a static method of class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>37. Is it possible to execute a program without defining a main() method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, with Java 7 onwards, you need a main() method to execute a program. In earlier versions of Java, there was a work around available to use static 
blocks for execution. But now this gap has been closed.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>38. What happens when static modifier is not mentioned in the signature of main method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As per Java specification, main method has to be marked as static. It needs only one argument that is an array of String.<br/><br/> 
A program can compile with a non-static method. But on executionit will give <code><b>NoSuchMethodError</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>39. What is the difference between static method and instance method in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Often, there is a need to define a behavior for a class that is notdependent on member variables of an object. Such behavior is captured in a static method. 
If there is a behavior dependent upon the member variables of an object, then we do not mark it static, it remains as instance method.<br/><br/> 
To call as static method, we do not need to create an object. We just call it with class name. But to call an instance method, we need 
to create / get an object first.<br/><br/> 
Instance member variables cannot be accessed by a static method. But an instance method can call both instance variables and static variables.
<!-- Answer ::: END -->
</div>
</div>
