
<div><b>1. Explain the Core Container (Application context) module?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This is the basic Spring module, which provides the fundamental functionality of the Spring framework. <code><b>BeanFactory</b></code> is the
heart of any spring-based application. Spring framework was built on the top of this module, which makes the Spring container.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. Explain BeanFactory - BeanFactory implementation example</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A <code><b>BeanFactory</b></code> is an implementation of the factory pattern that applies Inversion of Control to separate the application’s
configuration and dependencies from the actual application code.
The most commonly used <code><b>BeanFactory</b></code> implementation is the <code><b>XmlBeanFactory</b></code> class.
<!-- Answer ::: END -->
</div>
</div>


<div><b>3. Explain XMLBeanFactory.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The most useful one is <code><b>org.springframework.beans.factory.xml.XmlBeanFactory</b></code>, which loads its beans 
based on the definitions contained in an XML file. This container reads the configuration metadata from an XML file and 
uses it to create a fully configured system or application.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. Explain the AOP module.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The AOP module is used for developing aspects for our Spring-enabled application. Much of the support has been provided by
the AOP Alliance in order to ensure the interoperability between <code><b>Spring</b></code> and other <code><b>AOP frameworks</b></code>. This module 
also introduces metadata programming to Spring.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. Explain the JDBC abstraction and DAO module.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
With the <code><b>JDBC abstraction</b></code> and <code><b>DAO module</b></code> we can be sure that we keep up the database code clean and simple, and 
prevent problems that result from a failure to close database resources. It provides a layer of meaningful exceptions on top of the error
messages given by several database servers. It also makes use of Spring’s AOP module to provide transaction management
services for objects in a Spring application.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. Explain the object/relational mapping integration module.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring also supports for using of an <code><b>object/relational mapping (ORM) tool</b></code> over straight JDBC by providing the ORM module. 
Spring provides support to tie into several popular ORM frameworks, including <code><b>Hibernate</b></code>, <code><b>JDO</b></code> and 
<code><b>iBATIS SQL Maps</b></code>. Spring’s Transaction management supports each of these ORM frameworks as well as JDBC.
<!-- Answer ::: END -->
</div>
</div>



<div><b>7. Explain the web module.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>Spring web module</b></code> is built on the application context module, providing a context that is appropriate for web-based applications. 
This module also contains support for several web-oriented tasks such as transparently handling multipart requests for 
file uploads and programmatic binding of request parameters to your business objects. It also contains integration support with 
Jakarta Struts.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. Explain the Spring MVC module.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
MVC framework is provided by Spring for building web applications. Spring can easily be integrated with other MVC frameworks, 
but <code><b>Spring’s MVC framework</b></code> is a better choice, since it uses IoC to provide for a clean separation of controller logic from 
business objects. With Spring MVC you can declaratively bind request parameters to your business objects.
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. Explain Spring configuration file.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring configuration file is an XML file. This file contains the classes information and describes how these classes are configured 
and introduced to each other.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is Spring IoC container?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Spring IoC is responsible for creating the objects,managing them (with dependency injection (DI)), wiring them together, 
configuring them, as also managing their complete lifecycle.
<!-- Answer ::: END -->
</div>
</div>


<div><b>11. What are the benefits of IOC?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
IOC or dependency injection minimizes the amount of code in an application. It makes easy to test applications, since no 
singletons or JNDI lookup mechanisms are required in unit tests. Loose coupling is promoted with minimal effort and least 
intrusive mechanism. IOC containers support eager instantiation and lazy loading of services.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What are the common implementations of the ApplicationContext?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>FileSystemXmlApplicationContext</b></code> container loads the definitions of the beans from an XML file. The full path of the 
XML bean configuration file must be provided to the constructor. The <code><b>ClassPathXmlApplicationContext</b></code> container also loads 
the definitions of the beans from an XML file. Here, you need to set <code><b>CLASSPATH</b></code> properly because this container will look bean 
configuration XML file in <code><b>CLASSPATH</b></code>. The <code><b>WebXmlApplicationContext</b></code> container loads the XML file with definitions 
of all beans from within a web application.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. What is the difference between Bean Factory and ApplicationContext?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Application contexts provide a means for resolving text messages, a generic way to load file resources (such as images), they can 
publish events to beans that are registered as listeners. In addition, operations on the container or beans in the container, which 
have to be handled in a programmatic fashion with a bean factory, can be handled declaratively in an application context. The application 
context implements <code><b>MessageSource</b></code>, an interface used to obtain localized messages, with the actual implementation 
being pluggable.
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is Dependency Injection (DI) in Spring Framework?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Dependency Injection</b></code>, an aspect of Inversion of Control (IoC), is a general concept, and it can be expressed in many different
ways.This concept says that you do not create your objects but describe how they should be created. You don’t directly connect
your components and services together in code but describe which services are needed by which components in a configuration
file. A container (the IOC container) is then responsible for hooking it all up.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What are the different types of IoC (dependency injection)?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Different types of IoC (dependency injection) :</b><br/><br/>
<ul>
<li><b>Constructor-based dependency injection :</b><br/><br/> Constructor-based DI is accomplished when the container invokes a class constructor
with a number of arguments, each representing a dependency on other class.</li>
<li><b>Setter-based dependency injection :</b><br/><br/> Setter-based DI is accomplished by the container calling setter methods on your beans
after invoking a no-argument constructor or no-argument static factory method to instantiate your bean.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. Which Dependency Injection would you suggest Constructor-based or setter-based DI?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can use both Constructor-based and Setter-based Dependency Injection. The best solution is using constructor arguments
for mandatory dependencies and setters for optional dependencies.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. What are Spring beans?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>Spring Beans</b></code> are Java Objects that form the backbone of a Spring application. They are instantiated, assembled, and 
managed by the Spring IoC container. These beans are created with the configuration metadata that is supplied to the container, 
for example, in the form of XML <code><b>&lt;bean/&gt;</b></code> definitions.<br/><br/>
Beans defined in spring framework are singleton beans. There is an attribute in bean tag named <code><b>"singleton"</b></code> if specified true 
then bean becomes singleton and if set to false then the bean becomes a prototype bean. By default it is set to true. So, all the 
beans in spring framework are by default singleton beans.
<!-- Answer ::: END -->
</div>
</div>


<div><b>18. What does a Spring Bean definition contain?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A Spring Bean definition contains all configuration metadata which is needed for the container to know how to create a bean, its lifecycle details and 
its dependencies.
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. How do you provide configuration metadata to the Spring Container?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are three important methods to provide configuration metadata to the Spring Container :<br/><br/>
<ul>
<li>XML based configuration file</li>
<li>Annotation-based configuration</li>
<li>Java-based configuration</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. How do you define the scope of a bean?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When defining a <code><b>&lt;bean&gt;</b></code> in Spring, we can also declare a scope for the bean. It can be defined through the <code><b>scope</b></code> 
attribute in the bean definition. For example, when Spring has to produce a new bean instance each time one is needed, the bean’s <code><b>scope</b></code> 
attribute to be <code><b>prototype</b></code>. On the other hand, when the same instance of a bean must be returned by Spring every time it is
needed, the the bean <code><b>scope</b></code> attribute must be set to <code><b>singleton</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. Explain the bean scopes supported by Spring.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are five scoped provided by the Spring Framework supports following five scopes :<br/><br/>
<ul>
<li>In <b><i>singleton</i></b> scope, Spring scopes the bean definition to a single instance per Spring IoC container.</li>
<li>In <b><i>prototype</i></b> scope, a single bean definition has any number of object instances.</li>
<li>In <b><i>request</i></b> scope, a bean is defined to an HTTP request. This scope is valid only in a web-aware Spring ApplicationContext.</li>
<li>In <b><i>session</i></b> scope, a bean definition is scoped to an HTTP session. This scope is also valid only in a web-aware Spring Application Context.</li>
<li>In <b><i>global-session</i></b> scope, a bean definition is scoped to a global HTTP session. This is also a case used in a web-aware Spring Application Context.</li>
</ul>
The default scope of a Spring Bean is <code><b>Singleton</b></code>.
<!-- Answer ::: END -->
</div>
</div>



<div><b>22. Are Singleton beans thread safe in Spring Framework?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No, singleton beans are not thread-safe in Spring framework.
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. Explain Bean lifecycle in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>The spring container finds the bean’s definition from the XML file and instantiates the bean.</li>
<li>Spring populates all of the properties as specified in the bean definition (DI).</li>
<li>If the bean implements <code><b>BeanNameAware</b></code> interface, spring passes the bean’s id to <code><b>setBeanName()</b></code> method.</li>
<li>If Bean implements <code><b>BeanFactoryAware</b></code> interface, spring passes the beanfactory to <code><b>setBeanFactory()</b></code> method.</li>
<li>If there are any bean <code><b>BeanPostProcessors</b></code> associated with the bean, Spring calls <code><b>postProcesserBeforeInitialization()</b></code> method.</li>
<li>If the bean implements <code><b>IntializingBean</b></code>, its <code><b>afterPropertySet()</b></code> method is called. If the bean has init method 
declaration, the specified initialization method is called.</li>
<li>If there are any BeanPostProcessors associated with the bean, their <code><b>postProcessAfterInitialization()</b></code> methods will be called.</li>
<li>If the bean implements <code><b>DisposableBean</b></code>, it will call the <code><b>destroy()</b></code> method.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. Which are the important beans lifecycle methods? Can you override them?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are two important bean lifecycle methods. The first one is <code><b>setup</b></code> which is called when the bean is loaded in to the 
container. The second method is the <code><b>teardown</b></code> method which is called when the bean is unloaded from the container. The 
<code><b>bean</b></code> tag has two important attributes (<code><b>init-method</b></code> and <code><b>destroy-method</b></code>) with which you can 
define your own custom initialization and destroy methods. There are also the correspondive annotations(<code><b>@PostConstruct</b></code> and 
<code><b>@PreDestroy</b></code>).
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. What are inner beans in Spring?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When a bean is only used as a property of another bean it can be declared as an inner bean. Spring’s XML-based configuration 
metadata provides the use of <code><b>&lt;bean/&gt;</b></code> element inside the <code><b>&lt;property/&gt;</b></code> or <code><b>&lt;constructor-arg/&gt;</b></code> 
elements of a bean definition, in order to define the so-called inner bean. Inner beans are always anonymous and they are always scoped as prototypes.
<!-- Answer ::: END -->
</div>
</div>


<div><b>26. How can you inject a Java Collection in Spring?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring offers the following types of collection configuration elements:<br/><br/>
<ul>
<li>The &lt;list&gt; type is used for injecting a list of values, in the case that duplicates are allowed.</li>
<li>The &lt;set&gt; type is used for wiring a set of values but without any duplicates.</li>
<li>The &lt;map&gt; type is used to inject a collection of name-value pairs where name and value can be of any type.</li>
<li>The &lt;props&gt; type can be used to inject a collection of name-value pairs where the name and value are both Strings.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. What is bean wiring?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Wiring, or else bean wiring is the case when beans are combined together within the Spring container. When wiring beans, 
the Spring container needs to know what beans are needed and how the container should use dependency injection to tie them 
together.
<!-- Answer ::: END -->
</div>
</div>

<div><b>28. What is bean auto wiring?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Spring container is able to autowire relationships between collaborating beans. This means that it is possible to automatically 
let Spring resolve collaborators (other beans) for a bean by inspecting the contents of the <code><b>BeanFactory</b></code> without using 
<code><b>&lt;constructor-arg&gt;</b></code> and <code><b>&lt;property&gt;</b></code> elements.
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. Explain different modes of Auto wiring?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The autowiring functionality has five modes which can be used to instruct Spring container to use autowiring for dependency injection:<br/><br/>
<ul>
<li><b>no:</b><br/> This is default setting. Explicit bean reference should be used for wiring.<br/><br/></li>
<li><b>byName:</b><br/> When autowiring byName, the Spring container looks at the properties of the beans on which autowire attribute
is set to byName in the XML configuration file. It then tries to match and wire its properties with the beans defined by the
same names in the configuration file.<br/><br/></li>
<li><b>byType:</b><br/> When autowiring by datatype, the Spring container looks at the properties of the beans on which autowire
attribute is set to byType in the XML configuration file. It then tries to match and wire a property if its type matches with
exactly one of the beans name in configuration file. If more than one such beans exist, a fatal exception is thrown.<br/><br/></li>
<li><b>constructor:</b><br/> This mode is similar to byType, but type applies to constructor arguments. If there is not exactly one bean of
the constructor argument type in the container, a fatal error is raised.<br/><br/></li>
<li><b>autodetect:</b><br/> Spring first tries to wire using autowire by constructor, if it does not work, Spring tries to autowire by byType.</li>
</ul>

<!-- Answer ::: END -->
</div>
</div>


<div><b>30. Are there limitations with autowiring?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Limitations of autowiring are:<br/><br/>
<ul>
<li><b>Overriding:</b><br/> You can still specify dependencies using <code><b>&lt;constructor-arg&gt;</b></code> and <code><b>&;lt;property&gt;</b></code> settings which will always
override autowiring.<br/><br/></li>
<li><b>Primitive data types:</b><br/> You cannot autowire simple properties such as primitives, Strings, and Classes.<br/><br/></li>
<li><b>Confusing nature:</b><br/> Autowiring is less exact than explicit wiring, so if possible prefer using explicit wiring.<br/><br/></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>31. Can you inject null and empty string values in Spring?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, you can.
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
