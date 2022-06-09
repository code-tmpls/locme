
<div class="appQuestion"><b>109. What is Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring is development framework for Java programming. It is an open source development framework for Enterprise Java.<br/><br/> 
The core features of Spring Framework can be used in developing aJava Enterprise application.<br/><br/> 
It has many extensions and jars for developing web applications on top of Java EE platform.<br/><br/> 
With Spring we can develop large-scale complex Java applications very easily. It is also based on good design patterns like Dependency Injection, 
Aspect oriented programming for developing extensible feature rich software.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>110. What are the benefits of Spring framework in software development?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Many benefits of Spring framework are :
<ul>
<li><b>Lightweight Framework :</b> Basic Spring framework is very small insize. It is easy to use and does not add a lot of overhead on software. 
It just has 2 MB in basic version</li>
<li><b>Container :</b> Spring framework provides the basic container that creates and manages the life cycle of application objects like Plain old Java 
objects (POJO). It also stores the configuration files of application objects to be created.</li>
<li><b>Dependency Injection (DI) :</b> Spring provided loose coupling isapplication by Dependency Injection. It uses Inversion of Control technique 
by which objects specify their dependencies to Spring container instead of creating new objects themselves.</li>
<li><b>Aspect Oriented Programming (AOP) :</b> Spring framework promotesand provides support for Aspect oriented programming in Java. This helps in 
separating application business logic from system services that are common across all the business logic.<br/> 
E.g. Logging can be a cross cutting concern in an Application.</li>
<li><b>Transaction Management :</b> Spring provides a framework fortransaction management. So a developer does not have to implement it from scratch. 
Spring Transaction Management is so powerful that we can scale it from one local transaction to global transactions in a cluster.</li>
<li><b>MVC Framework :</b> For Web applications, Spring provides MVC framework. This framework is based on MVC design pattern and has better features 
compared to other web frameworks.</li>
<li><b>Exception Handling :</b> Spring also gives support for a common API to handle exceptions in various technologies like - Hibernate, JDBC etc.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>111. What are the modules in Core Container of Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring framework has a Core Container. Modules in Core Container are : 
<ol>
<li>Core Module</li>
<li>Bean Module</li>
<li>Context Module</li>
<li>Spring Expression Language Module</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>112. What are the modules in DataAccess / Integration layer of Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Modules in Data Access/Integration Layer of Spring framework are :
<ul> 
<li><b>JDBC module :</b> An abstraction layer to remove tedious JDBC coding.</li>
<li><b>ORM module :</b> Integration layers for Object Relational Mapping.</li>
<li><b>OXM module :</b> An abstraction layer to support Object XMLmapping.</li>
<li><b>Java Messaging Service (JMS) module :</b> Module for producing and consuming messages.</li>
<li><b>Transactions module :</b> Transaction Management for POJO classes.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>113. What are the modules in Web layer of Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Modules in Web Layer of Spring framework are :
<ul>
<li><b>Web Module :</b> This provides basic web-oriented integration features.</li>
<li><b>Servlet Module :</b> Support for Servlet Listeners.</li>
<li><b>WebSocket Module :</b> Support for Web Socket style messaging.</li>
<li><b>Portlet Module :</b> MVC implementation for Portlet environment.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>114. What is the main use of Core Container module in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As the name suggests, Spring Core Container is the core of Spring framework. It gives the basic functionality of the Spring. All the parts of Spring 
Framework are built on top of Core Container.<br/><br/> Its main use is to provide Dependency Injection (DI) and Inversion of control (IOC) features.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>115. What kind of testing can be donein Spring Test Module?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring Test Module provides support for Unit testing as well as Integration testing of Spring components. It allows using JUnit or TestNG testing 
frameworks. It also gives ability to mock objects to use the test code.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>116. What is the use of BeanFactory in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
BeanFactory is the main class that helps in implementing Inversion of Control pattern in Spring. It is based on the factory design pattern. 
It separates the configuration and dependencies of anapplication from the rest of application code.<br/><br/> 
Implementations of BeanFactory like XmlBeanFactory class areused by applications built with Spring.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>117. Which is the most popular implementation of BeanFactory in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
XMLBeanFactory is the most popular implementation of BeanFactory in Spring.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>118. What is XMLBeanFactory in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
XMLBeanFactory is one of the most useful implementation of BeanFactory in Spring. This factory loads its beans based on the definitions mentioned 
in an XML file.<br/><br/> Spring container reads bean configuration metadata from an XML file and creates a fully configured application with the 
help of XMLBeanFactory class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>119. What are the uses of AOP module in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
AOP module is also known as Aspect Oriented Programming module. Its uses are : 
<ul>
<li>Development of aspects in a Spring based application</li> 
<li>Provides interoperability between Spring and other AOP Frameworks</li> 
<li>Supports metadata programming to Spring</li> 
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>120. What are the benefits of JDBC abstraction layer module in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring provides JDBC abstraction layer module. Main benefits ofthis module are : 
<ul>
<li>Helps in keeping the database code clean and simple.</li>
<li>Prevents problems that result from a failure to close database resources.</li>
<li>Provides a layer of useful exceptions on top of the error messages given by different database servers.</li>
<li>Based on Spring’s AOP module.</li>
<li>Provides transaction management services for objects in a Spring application.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>121. How does Spring support Object Relational Mapping (ORM)integration?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring supports Object Relational Mapping (ORM) by providing ORM Module. This module helps in integrating with popular ORM framework like Hibernate, 
JDO, and iBATIS SQL Maps etc.<br/><br/> Transaction Management module of Spring framework supports all of these ORM frameworks as well as JDBC.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>122. How does Web module work in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring provides support for developing web application by using Web module. This module is built on application context module that provides context 
for web-based applications.<br/><br/> This module also supports web-oriented integration features like - transparently handling multipart requests for 
uploading files, programmatically binding request parameters to business objects etc.<br/><br/> This module also supports integration with popular 
web frameworks like Jakarta Struts, JSF, and Tapestry etc
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>123. What are the main uses of Spring MVC module?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring-webmvc module is also known as Web-servlet module. It is based on Web Model View Controller pattern.<br/><br/> 
Main uses of this module are : 
<ul>
<li>Integration of Spring with other MVC frameworks</li>
<li>Supports IoC to provide clean separation of controller logic from business objects</li>
<li>Provides clean separation between domain model code and web forms</li>
<li>Allows developers to declaratively bind request parameters to business objects</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>124. What is the purpose of Spring configuration file?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring application can be configured by an XML file. This file contains information of classes and how these classes are configured and introduced 
to each other.<br/><br/> Spring IoC container uses some kind of configuration metadata. This configuration metadata represents how an application 
developer tells the Spring container to instantiate, configure, and assemble the objects in your application. This configuration metadata is stored 
in Spring configuration file.<br/><br/> The other ways of specifying configuration metadata are Java based configuration and Annotation based 
configuration.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>125. What is the purpose of Spring IoC container?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The Spring IoC Container is responsible for : 
<ul>
<li>Creating the objects</li>
<li>Configuring the objects</li>
<li>Managing dependency between objects (with dependency injection(DI))</li>
<li>Wiring the objects together</li>
<li>Managing complete lifecycle of objects</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>
<div class="appQuestion"><b>126. What is the main benefit of Inversion of Control (IOC) principle?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Inversion of Control(IOC) principle is the base of Springframework. It supports dependency injection in an application. With Dependency Injection, 
a programmer has to write minimal code. Italso makes easier to test an application.<br/><br/> Most important benefit is that it leads to loose 
coupling within objects. With loose coupling it is easier to change the application with new requirements.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>127. Does IOC containers support Eager Instantiation or Lazy loading of beans?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
IOC Container in Spring supports both the approaches. Eager instantiation as well as lazy loading of beans.

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>128. What are the benefits of ApplicationContext in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ApplicationContext in Spring provides following benefits : 
<ul>
<li><b>Bean factory methods :</b> These are used to access application components</li>
<li><b>Load File Resources :</b> It helps in loading file resources in a generic fashion</li>
<li><b>Publish Events :</b> It enables publishing events to registered listeners</li>
<li><b>Internationalization Support :</b> Ability to resolve messages to supportinternationalization</li>
<li><b>Parent Context :</b> Ability to inherit from a parent context.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>129. How will you implement ApplicationContext in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ApplicationContext in Spring can be implemented in one of the following three ways :
<ul>
<li><b>FileSystemXmlApplicationContext :</b> If we want to load the definitions of beans from an XML file then FileSystemXmlApplicationContext is used. 
The full path of XMLbean configuration file is provided to the constructor.</li>
<li><b>ClassPathXmlApplicationContext :</b> To loads the definitions of beans from an XML file in the CLASSPATH, we use ClassPathXmlApplicationContext. 
It is used for application context embedded in jars.</li>
<li><b>WebXmlApplicationContext :</b> To provide configuration for a web application WebXmlApplicationContext is used. While the application is running, 
it is read only. But it can be reloaded if underlying application supports it.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>130. Explain the difference between ApplicationContext and BeanFactory in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between ApplicationContext and BeanFactory are : 
<ul>
<li><b>Automatic BeanPostProcessor Registration :</b> BeanFactory does not support BeanPostProcessor Registration. Whereas ApplicationContext support this.</li>
<li><b>Automatic BeanFactoryPostProcessor Registration :</b> BeanFactory also does not allow Automatic BeanFactoryPostProcessor Registration. Whereas 
ApplicationContext allows this.</li>
<li><b>MessageSource Access :</b> BeanFactory is not convenient for MessageSource access. ApplicationContext is quite convenient for MessageSource access.</li>
<li><b>ApplicationEvent :</b> We cannot publish ApplicationEvent with BeanFactory. But ApplicationContext provides ability to publish ApplicationEvent.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>131. Between ApplicationContext and BeanFactory which one is preferable to use in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring documentation recommends using ApplicationContext in almost all the cases. ApplicationContext has all the functionality of BeanFactory.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>132. What are the main components of a typical Spring based application?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Spring based application, main components are : 
<ul>
<li><b>Spring configuration XML file :</b> This is used to configure Spring application.</li>
<li><b>API Interfaces :</b> Definition of API interfaces for functions providedby application.</li>
<li><b>Implementation :</b> Application code with implementation of APIs.</li>
<li><b>Aspects :</b> Spring Aspects implemented by application.</li>
<li><b>Client :</b> Application at client side that is used for accessing functions.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>133. Explain Dependency Injection(DI) concept in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Dependency Injection is a software design pattern. It is used to implement Inversion of Control (IOC) in Spring framework. As per this pattern, we do not 
create objects in an application by calling new. Rather, we describe how an object should be created. In this way creation of an object is not tightly 
coupled with another object.<br/><br/> A container is responsible for creating and wiring the objects. The container can call injecting code and wire 
the objects as per the configuration at runtime.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>134. What are the different roles in Dependency Injection (DI)?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are four roles in Dependency Injection : 
<ul>
<li>Service object(s) to be used</li>
<li>Client object that depends on the service</li>
<li>Interface that defines how client uses services</li>
<li>Injector responsible for constructing services and injecting them into client</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>135. Spring framework provides whatkinds of Dependency Injection mechanism?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring framework provides two types of Dependency Injection mechanism : 
<ul>
<li><b>Constructor-based Dependency Injection :</b> Spring container can invoke a class constructor with a number of arguments. This represents a 
dependency on other class.</li>
<li><b>Setter-based Dependency Injection :</b> Spring container can call setter method on a bean after creating it with a no-argument constructor or 
no-argument static factory method to instantiate another bean.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>136. In Spring framework, which Dependency Injection is better? Constructor-based DI or Setter-based DI?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring framework provides support for both Constructor-based and Setter-based Dependency Injection. There are different scenarios in which these 
options can be used.<br/><br/> It is recommended to use Constructor-based DI for mandatory dependencies. Whereas Setter-based DI is used for 
optional dependencies.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>137. What are the advantages of Dependency Injection (DI)?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Dependency Injection (DI) pattern has following advantages : 
<ul>
<li>Dependency Injection reduces coupling between a class and its dependencies.</li>
<li>With Dependency Injection(DI), we can do concurrent or independent software development. Two teams can work parallel on classes that will be used 
by each other.</li>
<li>In Dependency Injection (DI), the client can be configured in multiple ways. It needs to just work with the given interface. Rest of the implementation 
can be changed and configured for different features.</li>
<li>Dependency injection is also used to export a system's configuration details into configuration files. So we can configure same application run in 
different environments based on configuration.<br/> E.g. Run in Test environment, UAT environment, and Production environment.</li>
<li>Dependency Injection (DI) applications provide more ease and flexibility of testing. These can be tested in isolation in Unit Test.</li>
<li>Dependency injection (DI) isolates client from the impact of design and implementation changes. Therefore, it promotes reusability, testability and 
maintainability.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>138. What are the disadvantages of Dependency Injection (DI)?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Dependency Injection (DI) pattern has following disadvantages : 
<ul>
<li>Most of the time Dependency Injection forces developers to use an injection framework like Spring. This causes dependency on a framework.</li>
<li>With Dependency Injection, clients are dependent on the configuration data. This becomes extra task for developers when the application does not 
need so many custom configuration values.</li>
<li>Code is difficult to trace and read in Dependency Injection. DI separates behavior from construction of objects.</li>
<li>Dependency injection increases complexity in the linkages between classes. It may become harder to manage such complexity outside the implementation 
of a class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>139. What is a Spring Bean?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Spring Bean is a plain old Java object (POJO) that is created and managed by a Spring container.<br/><br/> There can be more than one bean in a 
Spring application. But all these Beans are instantiated and assembled by Spring container.<br/><br/> Developer provides configuration metadata to 
Spring container for creating and managing the lifecycle of Spring Bean.<br/><br/> In general a Spring Bean is singleton. Evert bean has an attribute 
named "singleton". If its value is true then bean is a singleton. If its value is false then bean is a prototype bean.<br/><br/> By default the value 
of this attribute is true. Therefore, by default all the beans in spring framework are singleton in nature.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>140. What does the definition of a Spring Bean contain?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Spring Bean definition contains configuration metadata for bean. This configuration metadata is used by Spring container to : 
<ul>
<li>Create the bean</li>
<li>Manage its lifecycle</li>
<li>Resolve its dependencies</li>
</ul>

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>141. What are the different ways to provide configuration metadata to a Spring Container?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring supports three ways to provide configuration metadata to Spring Container:
<ul>
<li><b>XML based configuration :</b> We can specify configuration data in an XML file.</li>
<li><b>Annotation-based configuration :</b> We can use Annotations to specify configuration. This was introduced in Spring 2.5.</li>
<li><b>Java-based configuration :</b> This is introduced from Spring 3.0. We can embed annotations like <code><b>@Bean</b></code>, <code><b>@Import</b></code>, 
<code><b>@Configuration</b></code> in Java code to specify configuration metadata.
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>142. What are the different scopes of a Bean supported by Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring framework support seven types of scopes for a Bean. Out of these only five scopes are available for a web-aware ApplicationContext application:
<ul>
<li><b>singleton :</b> This is the default scope of a bean. Under this scope, there is a single object instance of bean per Spring IoC container.</li>
<li><b>prototype :</b> Under this scope a single bean definition can have multiple object instances.</li>
<li><b>request :</b> In this scope, a single bean definition remains tied to the lifecycle of a single HTTP request. Each HTTP request will have
its own instance of a bean for a single bean definition. It is only valid in the context of a web-aware Spring ApplicationContext.</li>
<li><b>session :</b> Under this scope, a single bean definition is tied to the lifecycle of an HTTP Session. Each HTTP Session will have one
instance of bean. It is also valid in the context of a web-aware Spring ApplicationContext.</li>
<li><b>globalSession :</b> This scope, ties a single bean definition to the lifecycle of a global HTTP Session. It is generally valid in a Portlet
context. It is also valid in the context of a web-aware Spring ApplicationContext.</li>
<li><b>application :</b> This scope, limits a single bean definition to the lifecycle of a ServletContext. It is also valid in the context of a
web-aware Spring ApplicationContext.</li>
<li><b>websocket :</b> In this scope, a single bean definition is tied to the lifecycle of a WebSocket. It is also valid in the context of a web aware 
Spring ApplicationContext.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>143. How will you define the scope of a bean in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In configuration xml, we can specify the scope of bean in its definition. This is used by container to decide the scope of bean in Spring.<br/><br/>
Example: 
<pre><code class="language-html hljs xml">&lt;bean id="userService" class="com.um.UserService" scope="prototype"/&gt;</code></pre>
This is an example of userService bean with prototype scope.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>144. Is it safe to assume that a Singleton bean is thread safe in Spring Framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, Spring framework does not guarantee anything related to multithreaded behavior of a singleton bean. Developer is responsible for
dealing with concurrency issues and maintaining thread safety of a singleton bean.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>145. What are the design-patterns used in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring framework uses many Design patterns. Some of these patterns are:
<ul>
<li><b>Singleton –</b> By default beans defined in spring config files are singleton. These are based on Singleton pattern.</li>
<li><b>Template –</b> This pattern is used in many classes likeJdbcTemplate, RestTemplate, JmsTemplate, JpaTemplate etc.</li>
<li><b>Dependency Injection –</b> This pattern is the core behind the design of BeanFactory and ApplicationContext.</li>
<li><b>Proxy –</b> Aspect Oriented Programming (AOP) heavily uses proxy design pattern.</li>
<li><b>Front Controller –</b> DispatcherServlet in Spring is based on Front Controller pattern to ensure that incoming requests are dispatched to
other controllers.</li>
<li><b>Factory pattern –</b> To create an instance of an object, BeanFactory is used. This is based on Factory pattern.</li>
<li><b>View Helper –</b> Spring has multiple options to separating core code from presentation in views. Like- Custom JSP tags, Velocity macros etc</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>146. What is the lifecycle of a Bean in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Bean in Spring framework goes through following phases in its lifecycle.
<ul>
<li><b>Initialization and creation :</b> Spring container gets the definition of Bean from XML file and instantiates the Bean. It populates all the
properties of Bean as mentioned in the bean definition.</li>
<li><b>Setting the Behavior of Bean :</b> In case a Bean implements BeanNameAware interface, Spring uses setBeanName() method to
pass the bean’s id. In case a Bean implements BeanFactoryAware interface, Spring uses setBeanFactory() to pass the BeanFactory to bean.</li>
<li><b>Post Processing :</b> Spring container uses postProcesserBeforeInitialization() method to call.</li>
BeanPostProcessors associated with the bean. Spring calls afterPropertySet() method to call the specific initialization methods.
In case there are any BeanPostProcessors of a bean, the postProcessAfterInitialization() method is called.</li>
<li><b>Destruction :</b> During the destruction of a bean, if bean implements DisposableBean, Spring calls destroy() method.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>147. What are the two main groups of methods in a Bean’s lifecycle?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Bean in Spring has two main groups of lifecycle methods.<br/><br/>
<ul>
<li><b>Initialization Callbacks :</b> Once all the necessary properties of a Bean are set by the container, Initialization Callback methods are used for
performing initialization work. A developer can implement method afterPropertiesSet() for this work.</li>
<li><b>Destruction Callbacks :</b> When the Container of a Bean is destroyed, it calls the methods in DisposableBean to do any cleanup work.
There is a method called destroy() that can be used for this purpose to make Destruction Callbacks.</li>
</ul><br/><br/>
Recent recommendation from Spring is to not use these methods, since it can strongly couple your code to Spring code.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>148. Can we override main lifecycle methods of a Bean in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, Spring framework allows developers to override the lifecycle methods of a Bean. This is used for writing any custom behavior for Bean.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>149. What are Inner beans in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A bean that is used as a property of another bean is known as Inner bean. It can be defined as a <code><b>&lt;bean/&gt;</b></code> element in 
<code><b>&lt;property/&gt;</b></code> or <code><b>&lt;constructor-arg/&gt;</b></code> tags.<br/><br/> 
It is not mandatory for an Inner bean to have id or a name. These are always anonymous.<br/><br/> 
Inner bean does not need a scope. By default it is of prototype scope.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>150. How can we inject a Java Collection in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring promotes Dependency Injection (DI) in code. It gives support for injecting not only objects but also collection of objects.
We can inject collections like- list, set, map etc. in Spring.<br/><br/> 
Following tags can be used for this purpose:
<ul>
<li><b>&lt;list&gt; :</b> This type is used for injecting a list of values. In a &lt;list&gt; duplicates are allowed.</li>
<li><b>&lt;set&gt; :</b> This type is used for injecting a set of values. As per set property, duplicates are not allowed.</li>
<li><b>&lt;map&gt; :</b> This type is used for injecting name-value pairs in form of map. Name and value can be of any type that is allowed for a map.</li>
<li><b>&lt;props&gt; :</b> This type is used to inject a collection of String based name-value. It is like a properties file.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>151.What is Bean wiring in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Spring container is responsible for injecting dependencies between beans. This process of connecting beans is called wiring.<br/><br/>
Developer mentions in configuration file, the dependencies between beans. And Spring container reads these dependencies and wires the beans on creation.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>152. What is Autowiring in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Autowiring is a feature of Spring in which container can automatically wire/connect the beans by reading the configuration file.<br/><br/>
Developer has to just define "autowire" attribute in a bean.<br/><br/> 
Spring resolves the dependencies automatically by looking at this attribute of beans that are autowired.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>153. What are the different modes of Autowiring supported by Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are five modes of Autowiring supported by Spring framework:
<ol>
<li><b>no :</b> This is default setting for Autowiring. In this case, we use "ref" mode to mention the explicit bean that is being referred for wiring.<br/><br/>
Example. In this example Employee bean refers Manager bean.
<pre><code class="language-html hljs xml">&lt;bean id="employee" class="com.dept.Employee"&gt;
 &lt;property name="manager" ref="manager" /&gt;
&lt;/bean&gt;
&lt;bean id="manager" class="com.dept.Manager" /&gt;</code></pre></li>
<li><b>byName :</b> In this case, Spring container tries to match beans by name during Autowiring. If the name of a bean is same as the name of
bean referred in autowire byname, then it automatically wires it.<br/><br/>
Example. In following example, Manager bean is wired to Employee
bean by Name.
<pre><code class="language-html hljs xml">&lt;bean id="employee" class="com.dept.Employee" autowire="byName" /&gt;
&lt;bean id="manager" class="com.dept.Manager" /&gt;</code></pre></li>
<li><b>byType :</b> In this case, Spring container check the properties of beans referred with attribute byType. Then it matches the type of bean and
wires. If it finds more than one such bean of that type, it throws a fatal exception.<br/><br/>
Example. In following example, Manager bean is wired by type to Employee bean.
<pre><code class="language-html hljs xml">&lt;bean id="employee" class="com.dept.Employee" autowire="byType" /&gt;
&lt;bean id="manager" class="com.dept.Manager" /&gt;</code></pre></li>
<li><b>constructor :</b> In this case, Spring container looks for byType attribute in constructor argument. It tries to find the bean with exact name. If
it finds more than one bean of same name, it throws fatal exception. This case is similar to byType case.<br/><br/>
Example. In following example "constructor" mode is used for autowiring.
<pre><code class="language-html hljs xml">&lt;bean id="employee" class="com.dept.Employee" autowire="constructor" /&gt;
&lt;bean id="manager" class="com.dept.Manager" /&gt;</code></pre></li>
<li><b>autodetect :</b> This is an advanced mode for autowiring. In this case, by default Spring tries to find a constructor match. If it does not find
constructor then it uses autowire by Type.<br/><br/>
Example. This is an example of autodetect Autowiring.
<pre><code class="language-html hljs xml">&lt;bean id="employee" class="com.dept.Employee" autowire="autodetect" /&gt;
&lt;bean id="manager" class="com.dept.Manager" /&gt;</code></pre></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>154. What are the cases in which Autowiring may not work in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Autowiring is a great feature in Spring. It can be used in most of the cases. But there are certain scenarios in which Autowiring may not work.<br/><br/> 
<b>Explicit wiring :</b> Since Autowiring is done by Spring, developer does not have full control on specifying the exact class to be used. It
is preferable to use Explicit wiring in case of full control over wiring.<br/><br/> 
<b>Primitive Data types :</b> Autowiring does not allow wiring of properties that are based on primitive data types like- int, float etc.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>155. Is it allowed to inject null or empty String values in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, Spring allows injecting null or empty String values.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>156. What is a Java-based Configuration in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring allows for Java-based configuration in which a developer can specify configuration by using Java-based annotations. This feature was introduced 
in Spring 3.0.<br/><br/> 
You can use annotations like- <code><b>@Configuration</b></code>, <code><b>@Bean</b></code>, <code><b>@Import</b><code> and <code><b>@Depends</b></code> on 
in Java classes for specifying the configuration.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>157. What is the purpose of @Configuration annotation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This annotation is used in a class to indicate that this is class is the primary source of bean definitions. This class can also contain
inter-bean dependencies that are annotated by @Bean annotation
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>158. What is the difference between Full @Configuration and 'lite' @Beans mode?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring allows for using @Bean annotation on methods that are declared in classes not annotated with @Configuration. This is
known as "lite" mode. In this mode, bean methods can be declared in a @Component or a plain java class without any annotation.<br/><br/>
In the "lite" mode, @Bean methods cannot declare inter-bean dependencies.<br/><br/>
It is recommended that one @Bean method should not invoke another @Bean method in 'lite' mode.<br/><br/>
Spring recommends that @Bean methods declared within @Configuration classes should be used for full configuration. This kind of full mode can prevent 
many bugs.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>159. In Spring framework, what is Annotation-based container configuration?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
From Spring 2.5 version it is possible to provide configuration by using annotation.<br/><br/> 
To turn this configuration on, we need to mention <code><b>&lt;context:annotation-config/&gt;</b></code> in spring XMLfile.<br/><br/> 
Now developer can use annotations like <code><b>@Required</b></code>, <code><b>@Autowired</b></code>, <code><b>@Qualifier</b></code> etc. in a class 
file to specify the configuration for beans.<br/><br/> 
Spring container can use this information from annotation for creating and wiring the beans.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>160. How will you switch on Annotation based wiring in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To use Annotation based wiring, we need to turn on Annotation based configuration in Spring.<br/><br/> 
By default, Annotation based configuration is switched off in Spring. To turn it is we can specify <code><b>&lt;context:annotation-config/&gt;</b></code>
element in Spring config file.<br/><br/> 
Once it is turned on, we can use <code><b>@Autowired</b></code> annotation or <code><b>@Required</b></code> annotation in a Java class for wiring in Spring.

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>161. What is @Autowired annotation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use @Autowired annotation to auto wire a bean on a setter method, constructor or a field. @Autowired auto wiring is done by
matching the data type.<br/><br/> 
Before using <code><b>@Autowired</b></code> annotation we have to register AutowiredAnnotationBeanPostProcessor. This can be done by
including <code><b>&lt;context:annotation-config /&gt;</b></code> in bean configuration file.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>162. What is @Required annotation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use <code><b>@Required</b></code> annotation to a property to check whether the property has been set or not.<br/><br/> 
Spring container throws BeanInitializationException if the <code><b>@Required</b></code> annotated property is not set.<br/><br/> 
When we use <code><b>@Required</b></code> annotation, we have to register <code><b>RequiredAnnotationBeanPostProcessor</b></code> in Spring config file.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>163. What are the two ways to enable RequiredAnnotationBeanPostProcessor in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
RequiredAnnotationBeanPostProcessor can be enabled in two ways in Spring:
<ul>
<li><b>Include <code><b>&lt;context:annotation-config /&gt;</b></code> :</b>
Add Spring context and &lt;context:annotation-config /&gt; in bean configuration file.
Example.
<pre><code class="language-html hljs xml">&lt;beans
...
xmlns:context="http://www.springframework.org/schema/context"
...
http://www.springframework.org/schema/context
http://www.springframework.org/schema/context/spring-context2.5.xsd"&gt;
...
&lt;context:annotation-config /&gt;
...
&lt;/beans&gt;</code></pre></li>
<li><b>Include <code><b>RequiredAnnotationBeanPostProcessor</b></code> in bean configuration file :</b>
Example.
<pre><code class="language-html hljs xml">&lt;beans xmlns="http://www.springframework.org/schema/beans"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.springframework.org/schema/beans
http://www.springframework.org/schema/beans/spring-beans2.5.xsd"&gt;
&lt;bean class="org.springframework.beans.factory.annotation.RequiredAnnotationBeanP<bean id="BookBean" class="com.foo.Book"&gt;
&lt;property name="action" value="price" /&gt;
&lt;property name="type" value="1" /&gt;
&lt;/bean&gt;
&lt;bean id="AuthorBean" class="com.foo.Author"&gt;
&lt;property name="name" value="Rowling" /&gt;
&lt;/bean&gt;
&lt;/beans&gt;</code></pre></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>164. What is @Qualifier annotation in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use <code><b>@Qualifier</b></code> annotation to mark a bean as ready for auto wiring. This annotation is used along with <code><b>@Autowired</b></code> 
annotation to specify the exact bean for auto wiring by Spring container.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>165. How Spring framework makes JDBC coding easier for developers?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring provides a mature JDBC framework to provide support for JDBC coding. Spring JDBC handled resource management as well
as error handling in a generic way. This reduces the work of software developers.<br/><br/> 
They just have to write queries and related statements to fetch the data or to store the data in database.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>166. What is the purpose of JdbcTemplate?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring framework provides JdbcTemplate class that contains many convenient methods for regular tasks like- converting data into primitives or objects, 
executing prepared or callable statements etc.<br/><br/> 
This class makes it very easy to work with database in our Application and it also provides good support for custom error handling in database access code.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>167. What are the benefits of using Spring DAO?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the benefits of using Spring DAO are :
<ul>
<li>It makes it easier to work on different data access methods likeJDBC, Hibernate etc.</li>
<li>It provides a consistent and common way to deal with different data access methods.</li>
<li>Spring DAO makes it easier to switch between different data persistence frameworks.</li>
<li>No need for catching framework specific exceptions.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>168. What are the different ways to use Hibernate in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring provides two ways to use Hibernate:
<ul>
<li>We can extend HibernateDAOSupport and apply an AOP interceptor node to use Hibernate.</li>
<li>We can also use HibernateTemplate and Callback to access Hibernate. This is based on Inversion of Control.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>169. What types of Object Relational Mapping (ORM) are supported by Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring supports following Object Relational Mapping (ORM) frameworks :
<ul>
<li>Hibernate</li>
<li>Java Persistence API (JPA)</li>
<li>TopLink</li>
<li>Java Data Objects (JDO)</li>
<li>Apache Object Relational Bridge (ORB)</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>170. How will you integrate Spring and Hibernate by using HibernateDaoSupport?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use following steps for integrating Spring and Hibernate :
<ul>
<li>Add dependencies for Spring and Hibernate in <code><b>pom.xml</b></code></li>
<li>Implement DAO from <code><b>HibernateDaoSupport</b></code></li>
<li>Use Hibernate functions via <code><b>getHibernateTemplate()</b></code> method</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>171. What are the different types of the Transaction Management supported by Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring framework provides support for two types of Transaction Management:
<ul>
<li><b>Programmatic :</b> In this method, we have to manage Transaction by programming explicitly. It provides flexibility to a developer, but it
is not easier to maintain.</li>
<li><b>Declarative :</b> In this approach, we can separate Transaction Management from the Application Business code. We can use
annotations or XML based configuration to manage the transactions in declarative approach.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>172. What are the benefits provided by Spring Framework’s Transaction Management?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main benefits provided by Spring Transaction Management are :
<ul>
<li><b>Consistent :</b> By using Spring Transaction management, we can use consistent programming model across different transaction APIs
like- JPA, JDBC, JTA, Hibernate, JPA, JDO etc.</li>
<li><b>Simplicity :</b> Spring TM provides simple API for managing the transaction programmatically.</li>
<li><b>Declarative :</b> Spring also supports annotation or xml based declarative transaction management.</li>
<li><b>Integration :</b> Spring Transaction management is easier to integrate with other data access abstractions of Spring.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>173. Given a choice between declarative and programmatic Transaction Management, which method will you choose?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring, Declarative Transaction Management is the preferred choice. This method is very less invasive and it has very less
impact in Application Business Logic.<br/><br/> 
Although Declarative method gives less flexibility than Programmatic method, it is simpler to use and easier to maintain in long run.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>174. What is Aspect Oriented Programming (AOP)?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Aspect Oriented Programming (AOP) is a programming paradigm that promotes programmers to develop code in different modules
that can be parallel or in crosscutting concerns.<br/><br/> 
E.g. To develop banking software, one team can work on business logic for Money withdrawal, Money deposit, Money Transfer etc.
The other team can work on Transaction Management for committing the transaction across multiple accounts.<br/><br/> 
In an Auto company, one team can work on software to integrate with different components of car. The other team can work on how
all the components will send signal and current information to a common dashboard.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>175. What is an Aspect in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An Aspect is the core construct of AOP. It encapsulates the behavior that affects multiple classes in a reusable module.<br/><br/> 
An Aspect can have a group of APIs that provide cross-cutting features.<br/><br/> 
E.g. A logging module can be an Aspect in an Application.<br/><br/> 
An application can have multiple of Aspects based on the different requirements.<br/><br/> 
An Aspect can be implemented by using annotation @Aspect on a class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>176. In Spring AOP, what is the main difference between a Concern and a Cross cutting concern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Concern in Spring is the behavior or expectation from an application. It can be the main feature that we want to implement in the application.<br/><br/> 
A Cross cutting concern is also a type of Concern. It is the feature or functionality that is spread throughout the application in a thin way.<br/><br/> 
E.g. Security, Logging, Transaction Management etc. are cross cutting concerns in an application.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>177. What is a Joinpoint in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring AOP, Joinpoint refers to a candidate point in application where we can plug in an Aspect.<br/><br/> 
Joinpoint can be a method or an exception or a field getting modified.<br/><br/> 
This is the place where the code of an Aspect is inserted to add new behavior in the existing execution flow.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>178. What is an Advice in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An Advice in Spring AOP, is an object containing the actual action that an Aspect introduces.<br/><br/> 
An Advice is the code of cross cutting concern that gets executed.<br/><br/> There are multiple types of Advice in Spring AOP.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>179. What are the different types of Advice in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring AOP provides five kinds of Advice :
<ol>
<li><b>Before Advice :</b> This type of advice runs just before a method executes. We can use @Before annotation for this.</li>
<li><b>After (finally) Advice :</b> This type of advice runs just after a method executes. Even if the method fails, this advice will
run. We can use <code><b>@After</b></code> annotation here.</li>
<li><b>After Returning Advice :</b> This type of advice runs after a method executes successfully. @AfterReturning annotation
can be used here.</li>
<li><b>After Throwing Advice :</b> This type of advice runs after a method executes and throws an exception. The annotation
to be used is <code><b>@AfterThrowing</b></code>.</li>
<li><b>Around Advice :</b> This type of advice runs before and after the method is invoked. We use <code><b>@Around</b></code> annotation for this.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>180. What is a Pointcut in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Pointcut in Spring AOP refers to the group of one or more Joinpoints where an advice can be applied.<br/><br/> 
We can apply Advice to any Joinpoint. But we want to limit the places where a specific type of Advice should be applied. To
achieve this we use Pointcut.<br/><br/> 
We can use class names, method names or regular expressions to specify the Pointcuts for an Advice
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>181. What is an Introduction in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring AOP we can declare additional methods or fields on behalf of a type. To do this we use an Introduction. It is also known
as inter-type declaration.<br/><br/> 
E.g. We can use an Introduction for making a bean implement <code><b>IsModified</b></code> interface.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>182. What is a Target object in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Target object is the object that gets Advice from one or more Aspects.<br/><br/> 
This is also known as advised object.<br/><br/> 
In most cases it is a proxy object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>183. What is a Proxy in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring AOP, a Proxy is an object created by the AOP framework to implement Aspect contracts. It is generally a JDK dynamic proxy or CGLIB proxy.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>184. What are the different types of AutoProxy creators in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring AOP provides following standard types of Autoproxy creators :
<ol>
<li><b>BeanNameAutoProxyCreator :</b> This is a BeanPostProcessor that creates AOP proxies for beans automatically by matching names.</li>
<li><b>DefaultAdvisorAutoProxyCreator :</b> This creator is more powerful that other Proxy Creators. This also applies
eligible advisors automatically to bean in the current context.</li>
<li><b>AbstractAdvisorAutoProxyCreator :</b> This is the parent class of <code><b>DefaultAdvisorAutoProxyCreator</b></code>. We can create our own 
auto-proxy creators by extending this class.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>185. What is Weaving in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Aspect oriented programming, linking Aspects with the other application types creates an Advised object. This process is known as Weaving.<br/><br/>
Without Weaving, we just have definition of Aspects. Weaving makes use realize full potential of the AOP.<br/><br/>
Weaving can be done at compile time, load time or at run time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>186. In Spring AOP, Weaving is done at compile time or run time?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring container performs Weaving at run time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>187. What is XML Schema-based Aspect implementation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring allows for implementing Aspect by using regular classes and XML based configurations. This is different from Annotation based
Aspect implementation. But it achieves the same goal of AOP.<br/><br/> 
We can use elements like <code><b>&lt;aop:aspect id=”testAspect" ref="testBean" /&gt;</b></code> and 
<code><b>&lt;aop:pointcut id="testPointcut" /&gt;</b></code> in Spring XMLconfig file.<br/><br/>
To use this we need to import Spring AOP schema as follows:
<pre><code class="language-html hljs xml">&lt;beans xmlns="http://www.springframework.org/schema/beans"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xmlns:aop="http://www.springframework.org/schema/aop"
xsi:schemaLocation="http://www.springframework.org/schema/beans
http://www.springframework.org/schema/beans/spring-beans3.0.xsd
http://www.springframework.org/schema/aop
http://www.springframework.org/schema/aop/spring-aop-3.0.xsd
"&gt;
...
&lt;/beans&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>188. What is Annotation-based aspect implementation in Spring AOP?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
This is a declarative style AOP implementation. In this case, we use annotations like <code><b>@Aspect</b></code>, <code><b>@Pointcut</b></code>, 
<code><b>@Joinpoint</b></code> etc. to annotate code with different types of AOP elements.<br/><br/> 
This can be used Java 5 onwards, when the support for Annotations was introduced.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>189. How does Spring MVC framework work?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START --> 
Spring provides its own Model View Controller (MVC) framework for developing web applications.<br/><br/> 
Spring MVC framework is based on Inversion of Control (IOC) principle. It separates the business objects from controller.<br/><br/> 
It is designed around the DispatcherServlet that is responsible for dispatching requests to relevant handlers.<br/><br/> 
Spring MVC framework also supports annotation based binding of request parameters.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>190. What is DispatcherServlet?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring MVC, DispatcherServlet is the core servlet that is responsible for handling all the requests and dispatching these to handlers.<br/><br/> 
Dispatcher servlet knows the mapping between the method to be called and the browser request. It calls the specific method and combines the results 
with the matching JSP to create an html document, and then sends it back to browser.<br/><br/> 
In case of RMI invocation, it sends back response to the client application.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>191. Can we have more than one DispatcherServlet in Spring MVC?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, a Spring MVC web application can have more than one DispatcherServlets.<br/><br/> 
Each DispatcherServlet has to operate in its own namespace. It has to load its own ApplicationContext with mappings, handlers, etc.
Only the root application context will be shared among these Servlets.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>192. What is WebApplicationContext in Spring MVC?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
WebApplicationContext is the child of plain ApplicationContext. It is used in web applications. It provides features to deal with webrelated 
components like- controllers, view resolvers etc.<br/><br/> 
A Web Application can have multiple WebApplicationContext to handle requests.<br/><br/> 
Each DispatcherServlet is associated with one WebApplicationContext
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>193. What is Controller in Spring MVC framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Controller is an interface in Spring MVC. It receives HttpServletRequest and HttpServletResponse in web app just like
an HttpServlet, but it is able to participate in an MVC flow.<br/><br/> 
Controllers are similar to a Struts Action in a Struts based Web application.<br/><br/> 
Spring recommends that the implementation of Controller interface should be a reusable, thread-safe class, capable of handling
multiple HTTP requests throughout the lifecycle of an application.<br/><br/> 
It is preferable to implement Controller by using a JavaBean.<br/><br/> 
Controller interprets user input and transforms it into a model. The model is represented to the user by a view.<br/><br/> 
Spring implements a controller in a very generic way. This enables us to create a wide variety of controllers.<br/><br/> 
What is @Controller annotation in Spring MVC?<br/><br/> 
We use @Controller annotation to indicate that a class is a Controller in Spring MVC.<br/><br/> 
The dispatcher in Spring scans for @Controller annotated classes for mapped methods and detects @RequestMapping
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>194. What is @RequestMapping annotation in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring MVC, we use @RequestMapping annotation to map a web request to either a class or a handler method.<br/><br/> 
In @RequestMapping we can specify the path of URL as well as HTTP method like- GET, PUT, POST etc.<br/><br/> 
@RequestMapping also supports specifying HTTP Headers as attributes.<br/><br/> 
We can also map different media types produced by a controller in @RequestMapping. We use HTTP Header Accepts for this purpose.<br/><br/> 
Example.
<pre><code class="language-html hljs xml">@RequestMapping(
value = "/test/mapping",
method = GET,
headers = "Accept=application/json")</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>195. What are the main features of Spring MVC?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring MVC has following main features :
<ol>
<li><b>Clear separation of role :</b> In Spring MVC, each role like- controller, validator, command object, form object, model object, DispatcherServlet, 
handler mapping, view resolver etc. is fulfilled by a specialized object.</li>
<li><b>Reusability :</b> Spring MVC promotes reusable business code that reduces the need for duplication. We can use existing business objects as command 
or form objects instead of copying them to extend a particular framework base class.</li>
<li><b>Flexible Model Transfer: Spring MVC Model transfer supports easy integration with other view technologies as well.</li>
<li><b>Customizable binding and validation: In Spring MVC, we can to custom binding between Requests and Controllers. Even validation can be done on 
non-String values as well.</li>
<li><b>JSP form tag library: From Spring 2.0, there is a powerful JSP form tag library that makes writing forms in JSP pages much easier.</li>
<li><b>Customizable locale, time zone and theme resolution :</b> Spring MVC supports customization in locale, timezone etc.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>196. What is the difference between a Singleton and Prototype bean in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Every bean in Spring has a scope that defines its existence timeframe in the application.<br/><br/> 
Singleton scope for bean limits a bean to a single object instance per Spring IOC container.<br/><br/> 
This single instance is limited to a specific ApplicationContext. If there are multiple ApplicationContext then we can have more than
one instance of bean.<br/><br/> 
By default all the beans in Spring framework are Singleton scope beans.<br/><br/> 
With Prototype scope a single bean definition can have multiple object instances in a Spring container.<br/><br/> 
In prototype scope bean, the Spring IoC container creates new bean instance of the object every time a request for that specific bean is made.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>197. How will you decide which scope Prototype or Singleton to use for a bean in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In general, we use prototype scope for all stateful beans and singleton scope for stateless beans.<br/><br/> 
Since a stateless bean does not maintain any state, we can use the same object instance again and again. Singleton scope bean serves
the same purpose.<br/><br/> 
In a stateful bean, there is a need to maintain the state in each request, it is necessary to use a new instance of object with each
call. A Prototype scope bean ensures that we get a new instance each time we request for the object
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>198. What is the difference between Setter and Constructor based Dependency Injection (DI) in Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Setter and Constructor based Dependency Injection (DI) in Spring are :
<ul>
<li><b>Priority :</b> Setter based injection has higher priority than a constructor based injection in Spring. If an application uses Setter as well as
Constructor injection, Spring container uses the Setter injection.</li>
<li><b>Partial dependency :</b> We can inject partial dependency by using Setter injection. In Constructor injection, it is not possible to do just
a partial dependency injection.<br/>
<i>Example.</i> If there are two properties in a class, we can use Setter method to inject just one property in the class.</li>
<li><b>Flexibility :</b> Setter injection gives more flexibility in introducing changes. One can easily change the value by Setter injection. In case
of Constructor injection a new bean instance has to be created always.</li>
<li><b>Readability :</b> Setter injection is more readable than Constructor injection. Generally Setter method name is similar to dependency
class being used in setter method.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>199. What are the drawbacks of Setter based Dependency Injection (DI) in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Although Setter based Dependency Injection has higher priority than Constructor based DI, there are some disadvantages of it.
<ul>
<li><b>No Guarantee :</b> In Setter based DI, there is no guarantee that a certain dependency is injected or not. We may have an object with
partial or no dependency. Whereas in Constructor based DI, an object in not created till the time all the dependencies are ready.</li>
<li><b>Security :</b> One can use Setter based DI to override another dependency. This can cause Security breach in a Spring application.</li>
<li><b>Circular Dependency :</b> Setter based DI can cause circular dependency between objects. Where as Constructor based DI will
throw <code><b>ObjectCurrentlyInCreationException</b></code> if there is a circular dependency during the creation of an object.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>200. What are the differences between Dependency Injection (DI) and Factory Pattern?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Dependency Injection (DI) and Factory Pattern are :
<ul>
<li><b>Coupling :</b> Factory pattern adds tight coupling between an object, factory and dependency. In case of DI, there is no coupling between
objects. We just mention the dependencies on different objects and container resolves and introduces these dependencies.</li>
<li><b>Easier Testing :</b> DI is easier to test, since we can inject the mock objects as dependency in Test environment. In case of Factory
pattern, we need to create actual objects for testing.</li>
<li><b>Flexibility :</b> DI allows for switching between different DI frameworks easily. It gives flexibility in the choice of DI
framework.</li>
<li><b>Container :</b> DI always needs a container for injecting the dependencies. This leads to extra overhead as well as extra code in
your application. In factory pattern, you can just use POJO classes to implement the application without any container.</li>
<li><b>Cleaner Code :</b> DI code is much cleaner than Factory pattern based code. In DI, we do not need to add extra code for factory methods.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>201. In Spring framework, what is the difference between FileSystemResource and ClassPathResource?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring we can specify configuration by using a file or classpath.<br/><br/> 
In FileSystemResource we have to give absolute path / relative path of Spring Configuration file spring-config.xml file.<br/><br/> 
In ClassPathResource Spring looks for Spring Configuration file <code><b>spring-config.xml</b></code> in ClassPath. Therefore, developer has to include
<code><b>spring-config.xml</b></code> in classpath.<br/><br/> 
ClassPathResource looks for configuration file in CLASSPATH, whereas FileSystemResource looks for configuration file in file system.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>202. Name some popular Spring framework annotations that you use in your project?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring has many Annotations to serve different purposes. For regular use we refer following popular Spring annotations:
<ul>
<li><b>@Controller :</b> This annotation is for creating controller classes in a Spring MVC project.</li>
<li><b>@RequestMapping :</b> This annotation maps the URI to a controller handler method in Spring MVC.</li>
<li><b>@ResponseBody :</b> For sending an Object as response we use this annotation.</li>
<li><b>@PathVariable :</b> To map dynamic values from a URI to handler method arguments, we use this annotation.</li>
<li><b>@Autowired :</b> This annotation indicates to Spring for auto-wiring dependencies in beans.</li>
<li><b>@Service :</b> This annotation marks the service classes in Spring.</li>
<li><b>@Scope :</b> We can define the scope of Spring bean by this annotation.</li>
<li><b>@Configuration :</b> This an annotation for Java based Spring configuration.</li>
<li><b>@Aspect, @Before, @After, @Around, @Joinpoint, @Pointcut :</b> These are the annotations in Spring for AspectJ AOP.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>203. How can you upload a file in Spring MVC Application?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring MVC framework we can use MultipartResolver interface to upload a file. We need to make configuration changes to make it
work. After uploading the file, we have to create Controller handler method to process the uploaded file in application.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>204. What are the different types of events provided by Spring framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring framework provides following five events for Context :
<ul>
<li><b>ContextRefreshedEvent :</b> Whenever ApplicationContext is initialized or refreshed, Spring publishes this event. We can also
raise it by using <code><b>refresh()</b></code> method on ConfigurableApplicationContext interface.</li>
<li><b>ContextStartedEvent :</b> When ApplicationContext is started using <code><b>start()</b></code> method on ConfigurableApplicationContext interface,
ContextStartedEvent is published. We can poll database or restart any stopped application after receiving this event.</li>
<li><b>ContextStoppedEvent :</b> Spring publishes this event when ApplicationContext is stopped using stop() method on
ConfigurableApplicationContext interface. This is used for doing any cleanup work.</li>
<li><b>ContextClosedEvent :</b> Once the ApplicationContext is closed using <code><b>close()</b></code> method, ContextClosedEvent is published. Once a 
context is closed, it is the last stage of its lifecycle. After this it cannot be refreshed or restarted.</li>
<li><b>RequestHandledEvent :</b> This is a web specific event that informs to all beans that an HTTP request has been serviced.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>205. What is the difference between DispatcherServlet and ContextLoaderListener in Spring?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
DispatcherServlet is the core of Spring MVC application. It loads Spring bean configuration file and initialize all the beans mentioned in config file.<br/><br/>
In case we have enabled annotations in Spring config file, it also scans the packages and configures any bean annotated with
<code><b>@Component</b></code>, <code><b>@Controller</b></code>, <code><b>@Repository</b></code> or <code><b>@Service</b></code> annotations.<br/><br/>
ContextLoaderListener is a listener to start up and shut down Spring’s root WebApplicationContext. ContextLoaderListener links the lifecycle of 
ApplicationContext to the lifecycle of the ServletContext. It automates the creation of ApplicationContext. It can also be used to define shared beans 
used across different spring contexts.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>206. How will you handle exceptions in Spring MVC Framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring MVC Framework provides following mechanisms to help us achieve exception handling :
<ul>
<li><b>Controller Based :</b> A developer can define exception handler methods in a Controller class. To do so, they have to annotate the
methods with @ExceptionHandler annotation.</li>
<li><b>Global Exception Handler :</b> Spring provides <code><b>@ControllerAdvice</b></code> annotation for exception handling as cross-cutting 
concern. We can mark any class as global exception handler by using this annotation.</li>
<li><b>HandlerExceptionResolver implementation :</b> Spring Framework provides HandlerExceptionResolver interface that can be
implemented to create a global exception handler.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>207. What are the best practices of Spring Framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Spring Framework, following are some of the best practices :
<ul>
<li>We can Divide spring bean configurations based on their concerns such as spring-jdbc.xml, spring-security.xml.</li>
<li>It is better to avoid version numbers in schema reference. This makes sure that we have the latest config files.</li>
<li>It is a good practice to configure bean dependencies as much as possible. Unless there is a good reason, we try to avoid autowiring.</li>
<li>For spring beans that are used in multiple contexts in Spring MVC, we can create them in root context and initialize with listener.</li>
<li>Spring framework provides many features and modules. We should just use what we need for our application. An extra dependency has 
to be removed</li>
<li>For application properties, it is good to create a property file and read it in Spring configuration file.</li>
<li>Annotations are useful for smaller applications, but for larger applications annotations can become an overhead. It is easier to
maintain if all the configurations are in xml files.</li>
<li>When we are doing AOP, we have to make sure to keep the Joinpoint as narrow as possible to avoid Advice on unwanted
methods.</li>
<li>We should use right annotation for components or services. For services use @Service and for DAO beans use @Repository.</li>
<li>Dependency Injection (DI) has to be used when there is real benefit. It should not be used just for the sake of loose coupling.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>208. What is Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Spring Boot is a ready made solution to create Spring applications with production grade features. It favors convention over configuration.<br/><br/> 
We can embed Tomcat or Jetty in in an application created with Spring Boot. Spring Boot automatically configures Spring in an application.<br/><br/> 
It does not require any code generation or xml configuration. It is an easy solution to create applications that can run stand-alone.
<!-- Answer ::: END -->
</div>
</div>