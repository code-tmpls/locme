
<div><b>1. Explain Spring AOP (Aspect Oriented Programming)?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Aspect-oriented programming (AOP)</b></code>, is a programming technique that allows programmers to modularize crosscutting concerns, 
or behavior that cuts across the typical divisions of responsibility, such as logging and transaction management.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What is Aspect in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The core construct of AOP is the aspect, which encapsulates behaviors affecting multiple classes into reusable modules. It is 
a module which has a set of APIs providing cross-cutting requirements. For example, a logging module would be called AOP 
aspect for logging. An application can have any number of aspects depending on the requirement. In Spring AOP, aspects are 
implemented using regular classes annotated with the <code><b>@Aspect</b></code> annotation (<code><b>@AspectJ</b></code> style).
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is the difference between concern and cross-cutting concern in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Concern is behavior we want to have in a module of an application. A Concern may be defined as a functionality we want 
to implement. The cross-cutting concern is a concern which is applicable throughout the application and it affects the entire 
application. For example, logging, security and data transfer are the concerns which are needed in almost every module of an 
application, hence they are cross-cutting concerns.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is Join point?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The join point represents a point in an application where we can plug-in an AOP aspect. It is the actual place in the application 
where an action will be taken using Spring AOP framework.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What is Advice?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The advice is the actual action that will be taken either before or after the method execution. This is actual piece of code that is
invoked during the program execution by the Spring AOP framework.<br/><br/>
Spring aspects can work with five kinds of advice:<br/><br/>
<ul>
<li><b>before :</b> Run advice before the a method execution.</li>
<li><b>after :</b> Run advice after the a method execution regardless of its outcome.</li>
<li><b>after-returning :</b> Run advice after the a method execution only if method completes successfully.</li>
<li><b>after-throwing :</b> Run advice after the a method execution only if method exits by throwing an exception.</li>
<li><b>around :</b> Run advice before and after the advised method is invoked.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What is Pointcut?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The pointcut is a set of one or more joinpoints where an advice should be executed. You can specify pointcuts using expressions or patterns.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What is Introduction in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An Introduction allows us to add new methods or attributes to existing classes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What is Target object in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The target object is an object being advised by one or more aspects. It will always be a proxy object. It is also referred to as the advised object.
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is a Proxy?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A proxy is an object that is created after applying advice to a target object. When you think of client objects the target object and the proxy object 
are the same.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What are the different types of AutoProxying?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Different types of AutoProxying :</b>
<ul>
<li>BeanNameAutoProxyCreator</li>
<li>DefaultAdvisorAutoProxyCreator</li>
<li>Metadata autoproxying</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What is Weaving? What are the different points where weaving can be applied?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Weaving</b></code> is the process of linking aspects with other application types or objects to create an advised object. Weaving can be 
done at compile time, at load time, or at runtime.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. Explain XML Schema-based aspect implementation?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In this implementation case, aspects are implemented using regular classes along with XML based configuration.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Explain annotation-based (@AspectJ based) aspect implementation.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This implementation case (<code><b>@AspectJ</b></code> based implementation) refers to a style of declaring aspects as regular Java classes annotated 
with Java 5 annotations.
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