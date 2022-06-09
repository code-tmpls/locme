<div><b>1. What is the Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot is a production-ready framework for building and running Spring Applications. Spring Boot is not a framework for writing applications, think of 
Spring Boot as a tool which can do these initial tasks for us automatically. While working on big enterprise projects involving several frameworks, it is very 
complex to handle all configurations and making sure required dependencies are in place. Spring Boot focuses on developer productivity by providing smart 
auto configuration modules and handling all configurations and dependencies for us.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What are the advantages of Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Advantages of Spring Boot :</b><br/><br/>
<ol>
<li>It simplifies Spring dependencies by taking the opinionated view.
2. Spring Boot provides a preconfigured set of technologies/framework to
reduces error-prone configuration so we as a developer focused on
building our business logic and not thinking of project setup.
3. It reduces development code by avoiding a lot of boilerplate code.
4. Easier to integrate Spring Boot Application with Spring Ecosystem like
Spring JDBC, Spring ORM, Spring Data, Spring Security etc.
5. You really don’t need those big XML configurations for your project.
6. Embed Tomcat, Jetty or Undertow directly.
7. Provide opinionated Maven POM to simplify your configuration.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What are the different Spring Boot Components?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Different Spring Boot Components :</b><br/><br/>
<ol>
<li>Boot Initializer</li>
<li>Spring Boot Starter</li>
<li>Auto Configurator</li>
<li>Spring Boot CLI</li>
<li>Actuator</li>
</ol>

<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What are Spring Boot Starters?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot Starters are the set of convenient dependency descriptors which can be easily included in any level of application. These starters work as a 
bootstrapping process for the Spring related technologies, we no longer need to worry about the dependencies and they will be automatically managed by 
Spring Boot Starters.
The starters contain a lot of the dependencies that you need to get a project up and running quickly and with a consistent, supported a set of managed 
transitive dependencies. To summarize, Spring Boot Starters are just JAR files used by Spring Boot for auto-dependency.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. Name some of the starter provided by Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>spring-boot-starter-web – Web and RESTful applications</li>
<li>spring-boot-starter-security – Spring Security</li>
<li>spring-boot-starter-data-jpa – Spring Data JPA</li>
<li>spring-boot-starter-test – Unit testing</li>
<li>spring-boot-starter-hateoas – Add HATEOAS features</li>
<li>spring-boot-starter-data-jpa – Spring Data JPA with Hibernate</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>6. What is Auto-Configuration in Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It takes a lot of configurations and boilerplate code create a simple Spring MVC 
application without Spring Boot. Spring Boot Auto Configuration provides an 
opinionated approach to bootstrap your application. Auto-Configuration will 
attempt to automatically try to set up our application with default behaviour 
based on the jars in the classpath.<br/><br/>
For example, if Spring Boot finds HSQLDB in our classpath, it will automatically 
configure an in-memory database for us. Think of the auto-configuration as an 
intelligent system which can provide ready to use the application to us based on 
the configured jars in our classpath.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. Can we use Spring Boot for non-Spring application?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No, Spring Boot has limited to Spring based application only. We cannot use Spring Boot for non-Spring applications.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What are the different options for creating the Spring Boot application?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are multiple options to create a Spring Boot application. We can use any of the following approaches :
<ul>
<li>Spring Initializer</li>
<li>Boot CLI</li>
<li>Using Maven</li>
<li>IDE project wizard</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is the Spring Boot Initilizr?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot Initilizr is a Spring Boot tool to bootstrap Spring Boot or Spring Applications very easily. Spring Initializr is also integrated with all 
major Java IDEs along with CLI.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10.  What are the advantages of Spring Boot Initializr?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot Initializr provides a simple interface to quickly bootstrap a Spring Boot application. Here are some of the benefits or advantages of using 
Initilizr.
<ul>
<li>Spring Initializr provides an extensible API to generate quick start projects.</li>
<li>Reduce time to create an application setup. Application setup can be created using a few clicks.</li>
<li>It increases Productivity.</li>
<li>Initializr offers a configuration structure to define all the aspects related to the project to generate: list of dependencies, supported java 
and boot versions.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. How can I reload my Spring Boot changes without restarting the server?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This is achievable by Spring Boot Dev Tools module. It’s a powerful tool for development. It helps developers to shorten the development cycle and enable
easy deployment and testing during development.<br/><br/>
To enable this feature, add the following dependency to the Maven POM file.<br/><br/>
<pre><code class="language-html hljs xml">&lt;dependencies&gt;
 &lt;dependency&gt;
  &lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
  &lt;artifactId&gt;spring-boot-devtools&lt;/artifactId&gt;
 &lt;/dependency&gt;
&lt;/dependencies&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What are the embedded containers supported by Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot includes support for the following embedded containers<br/><br/>
<ol>
<li>Tomcat</li>
<li>Jetty</li>
<li>Undertow</li>
</ol>
<br/><br/>
Use the right "Starter" to configure the embedded container.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. What is the Spring Boot Actuator?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The actuator provides production-ready features for Spring Boot application. It 
will help us to check and manage our application in the production environment. 
We don’t need any code to get these features since they are available once the 
actuator dependency is in the class-path. The actuator provides features like 
auditing, health, metrics, environment information, thread dump etc. using 
HTTP endpoints.
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. How to run Spring Boot application to custom port?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Use the application.properties file to configure a custom port for Spring Boot
application. To change the server port, use <code><b>server.port</b></code> property.<br/><br/>
<pre><code class="language-html hljs xml">server.port=9001</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. How can we override default properties in Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot advocate convention over configuration. Spring Boot externalize application configurations through <code><b>application.properties</b></code> 
file. These properties work as default values for the Spring Boot application. To override these default values, Spring Boot provides the following options:
<ul>
<li>Create an application.properties file in the classpath for overriding specific properties for Spring Boot.
<ul>
<li>For Maven based project, this file will be under <code><b>/src/main/resource</b></code>.</li>
</ul>
</li>
<li><code><b>application.yml</b></code> file in the classpath for overriding specific properties for Spring Boot.
<ul>
<li>For Maven based project, this file will be under <code><b>/src/main/resource</b></code>.</li>
</ul>
</li>
<li>Through command line switches.</li>
</ul>
<b>Example :</b> Server HTTP port default to <code><b>8080</b></code> in the default <code><b>application.properties</b></code> file.
To change this port to <code><b>9090</b></code>, add below entry in the custom <code><b>application.properties</b></code> file :
<pre><code class="language-html hljs xml">server.port=9090</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. How can we create a custom endpoint in Spring Boot Actuator?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To create a custom endpoint using <code><b>Spring Boot 1.x</b></code>, we should expose the instance of the custom endpoint class as a bean. 
We need to implement <code><b>Endpoint&lt;T&gt;</b></code> interface.
<pre><code class="language-html hljs xml">@Component
public class CustomEndpoint implements Endpoint {
 // ...methodimplimentation
}</code></pre>
<code><b>Spring Boot 2.x</b></code> changed it completely by introducing <code><b>@Endpoint</b></code> annotation.
Spring Boot expose endpoints with <code><b>@Endpoint</b></code>, <code><b>@WebEndpointor</b></code> and
<code><b>@WebEndpointExtension</b></code> over HTTP using Jersey, Spring MVC, or Spring Web Flux.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. What logging support provided by Spring Boot? How can we control logging level in Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot provides options to use all popular logging API using the relevant starter, by default Spring Boot use Commons Logging for its internal logging. 
If we are using Spring Boot Starters for our application, Logback will be used for logging by default unless we want to use any other logging API. To use 
any other logging API, we need to add the correct starter in our application. In case we like to use Log4j2 for logging configuration, all you have to add 
the log4j2 starter in your application (You may have to exclude Logback using <code><b>pom.xml</b></code> file).<br/><br/>
Spring Boot provides an easy way to configure and set logging levels for your application. We can use application.properties file to configure the desired
Logging level for our application by using <code><b>logging.level.*=LEVEL</b></code>. 
<pre><code class="language-html hljs xml">logging.level.com.hello.example=WARN</code></pre>
<code><b>WARN</b></code> is applied to Java Classes under the package <code><b>com.hello.example</b></code>
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. How to implement security for Spring boot application?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Use the spring-boot-starter-security starter to enable the Spring security support in your Spring Boot application.
<pre><code class="language-html hljs xml">&lt;dependency&gt;
&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
&lt;artifactId&gt;spring-boot-starter-security&lt;/artifactId&gt;
&lt;/dependency&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. How to configure database using Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Spring Framework provides extensive support for working with SQL databases, from direct JDBC access using JdbcTemplate to complete 
<code><b>"object relational mapping"</b></code> technologies such as Hibernate. To connect configure the database for your Spring Boot application, 
use the <code><b>spring-boot-starter-jdbc</b></code> or <code><b>spring-boot-starter-data-jpa starters</b></code>. For datasource configuration, use the
<code><b>application.properties</b></code> file in your application.<br/><br/>
<pre><code class="language-html hljs xml">spring.datasource.url=jdbc:mysql://localhost/mysqlDb
spring.datasource.username=root
spring.datasource.password=
spring.datasource.driver-class-name=com.mysql.jdbc.Driver</code></pre>
Above example is to configure MySQL in your application. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. How can we use Jetty instead of tomcat in our web application?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot web starters use Tomcat as the default embedded servlet container. 
When switching to a different HTTP server, we need to exclude the default 
dependencies in addition to including the one we need. Spring Boot provides 
separate starters for HTTP servers to help make this process as easy as possible. 
To use Jetty, we need to exclude Tomcat and include Jetty in our application’s 
<code><b>pom.xml</b></code> file.<br/><br/>
<pre><code class="language-html hljs xml">&lt;dependency&gt;
&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
&lt;artifactId&gt;spring-boot-starter-web&lt;/artifactId&gt;
&lt;exclusions&gt;
&lt;!-- Exclude the Tomcat dependency --&gt;
&lt;exclusion&gt;
&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
&lt;artifactId&gt;spring-boot-starter-tomcat&lt;/artifactId&gt;
&lt;/exclusion&gt;
&lt;/exclusions&gt;
&lt;/dependency&gt;
&lt;!-- Use Jetty instead --&gt;
&lt;dependency&gt;
&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
&lt;artifactId&gt;spring-boot-starter-jetty&lt;/artifactId&gt;
&lt;/dependency&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. Why do we need spring-boot-maven-plugin?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot Maven plugin provides Spring Boot support in maven. This plugin provides options to create an executable jar or war files. Here are some of the
goals for this plugin.<br/><br/>
<ul>
<li>boot: run runs your Spring Boot application.</li>
<li>spring-boot:repackage repackages your jar/war to be executable.</li>
<li>spring-boot:start and spring-boot:stop to manage the lifecycle of your Spring Boot application (i.e. for integration tests).</li>
<li>spring-boot:build-info generates build information that can be used by the Actuator.</li>
</ul>
To include this plugin in your project, add XML in the plugins section of your <code><b>pom.xml</b></code>
<pre><code class="language-html hljs xml">&lt;plugins&gt;
&lt;plugin&gt;
&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
&lt;artifactId&gt;spring-boot-maven-plugin&lt;/artifactId&gt;
&lt;version&gt;2.0.5.RELEASE&lt;/version&gt;
&lt;executions&gt;
&lt;execution&gt;
&lt;goals&gt;
&lt;goal&gt;repackage&lt;/goal&gt;
&lt;/goals&gt;
&lt;/execution&gt;
&lt;/executions&gt;
&lt;/plugin&gt;
&lt;/plugins&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. How to disable specific auto-configuration in spring boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To exclude specific auto-configuration classes, use the exclude attribute of <code><b>@EnableAutoConfiguration</b></code> to disable them.
<pre><code class="language-html hljs xml">@Configuration
@EnableAutoConfiguration(exclude={DataSourceAutoConfiguration.class})
public class CustomConfiguration {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. What is the use of YAML in Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
YAML is a superset of JSON.Spring Boot YAML as an alternative to the <code><b>application.properties</b></code> file to define your project properties. The
SpringApplication class automatically supports YAML as an alternative to properties whenever you have the <code><b>SnakeYAML</b></code> library on your 
classpath.<br/><br/>
Let’s take the following example of the <code><b>application.properties</b></code> file.<br/><br/>
<pre><code class="language-html hljs xml">environments.dev.url=https://www.google.co.in/
environments.dev.name=Google Inc.</code></pre>
This can be represented in the YAML files :<br/><br/>
<pre><code class="language-html hljs xml">environments:
 dev:
  url: 'https://www.google.co.in/'
  name: 'Google Inc.'</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. What are the Features of Spring Boot 2.0?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot 2.0 brings a number of features changes to the Spring Boot framework.
<ul>
<li>Spring Boot 2.0 is baselined to Java 8. Therefore, Spring Boot 2.0 requires Java 8 or later. Consequently, it doesn’t support Java 6 and Java 7 anymore.</li>
<li>Java 9 is supported with Spring Boot 2.0.</li>
<li>Spring Boot 2.0 requires Spring Framework 5.0 with Reactive support.</li>
<li>Embedded servlet containers support got upgraded.
<ul>
<li>Minimum Tomcat version is 8.5</li>
<li>Jetty is 9.4</li>
</ul></li>
<li>Spring Boot 2.0 supports HTTP/2 with the help of <code><b>server.http2.enabledproperty</b></code>.</li>
<li>The framework requires Gradle 4.x in case you are using Gradle as your build tool.</li>
<li>Security configuration simplified in Spring Boot 2.0.</li>
<li>A brand-new actuator architecture, with support for <code><b>Spring MVC</b></code>, <code><b>Web Flux</b></code> and <code><b>Jersey</b></code>.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. Why is Spring Boot is opinionated?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It follows "Opinionated Defaults Configuration" Approach to reduce Developer effort. Due to opinionated view of spring boot, what is required to get 
started but also we can get out if not suitable for application.<br/><br/>
<ul>
<li>Spring Boot uses sensible defaults, "opinions", mostly based on the classpath contents.</li>
<li>For example, Sets up a JPA Entity Manager Factory if a JPA implementation is on the classpath.</li>
<li>Creates a default Spring MVC setup, if Spring MVC is on the classpath.</li>
<li>Everything can be overridden easily</li>
<li>But most of the time not needed</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. What is the difference between an embedded container and a WAR?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There is no force to go container less
<ul>
<li>Embedded container is just one feature of Spring Boot</li>
<li>Traditional WAR also benefits a lot from Spring Boot</li>
<li>Automatic Spring MVC setup, including DispatcherServlet</li>
<li>Sensible defaults based on the classpath content</li>
<li>Embedded container can be used during development</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. What is a Spring Boot starter POM? Why is it useful?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Starters are a set of convenient dependency descriptors that you can include in your application. The starters contain a lot of the dependencies that you 
need to get a project up and running quickly and with a consistent, supported set of managed transitive dependencies.<br/><br/>
The starter POMs are convenient dependency descriptors that can be added to your application’s Maven. In simple words, if you are developing a project 
that uses Spring Batch for batch processing, you just have to include spring-boot-starter-batch that will import all the required dependencies for the 
Spring Batch application. This reduces the burden of searching and configuring all the dependencies required for a framework.
<!-- Answer ::: END -->
</div>
</div>

<div><b>28. How to implement Spring web using Spring boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Web Application Convenience :</b>
<ul>
<li>Boot automatically configures</li>
<li>A DispatcherServlet & ContextLoaderListener</li>
<li>Spring MVC using same defaults as @EnableWebMvc</li>
</ul>
<b>Plus many useful extra features :</b>
<ul>
<li>Static resources served from classpath</li>
<li>/static, /public, /resources or /META-INF/resources</li>
<li>Templates served from /templates</li>
<li>If Velocity, Freemarker, Thymeleaf, or Groovy on classpath</li>
<li>Provides default /error mapping</li>
<li>Easily overridden</li>
<li>Default MessageSource for I18N</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. What is @SpringBootApplication annotation?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This is one of the most important and core annotations from Spring Boot. We use this annotation to mark the main class of our Spring Boot application.
<pre><code class="language-html hljs xml">@SpringBootApplication
public class SpringOrderAnnotationApplication {
 public static void main(String[] args) {
  SpringApplication.run(SpringOrderAnnotationApplication.class, args);
 }
}</code></pre>
<code><b>@SpringBootApplication</b></code> is a convenience annotation that is equal to declaring <code><b>@Configuration</b></code>, 
<code><b>@EnableAutoConfiguration</b></code> and <code><b>@ComponentScan</b></code> with their default attributes.<br/><br/>
You have the option to use <code><b>@Configuration</b></code>, <code><b>@EnableAutoConfiguration</b></code>, and <code><b>@ComponentScan</b></code> 
individually but the recommendation is to <code><b>@SpringBootApplication</b></code> annotation.
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. How to include custom static content in Spring Boot application (e.g. custom JS code)?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot search specific location in the project for serving static contents. By default, Spring Boot serves static content from a directory 
called <code><b>/static</b></code> (or <code><b>/public</b></code> or <code><b>/resources</b></code> or <code><b>/META-INF/resources</b></code>) in the 
classpath or from the root of the ServletContext.<br/><br/>
We can put our custom static content in any of the above folders. For example,
put the <code><b>custom.js</b></code> file under <code><b>/resources/static/custom.js</b></code>. To refer to
this file in the view, simply use the following code:
<pre><code class="language-html hljs xml">&lt;script src = "/js/test.js^&gt;&lt;/script&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>31.  How to use a profile with Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Boot provides multiple ways to active profile. We can pass profile information through the command line or use <code><b>application.properties</b></code>,
Spring Boot also provide a way to set profile programmatically.<br/><br/>
Use profile specific configuration files in out Spring Boot application. We need to the naming convention of <code><b>application-{profile}.properties</b></code> where
the profile defines the name of the intended profile. Profile specific files will be loaded from the same location as <code><b>application.properties</b></code> file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>32. How to generate a WAR file with Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can control the package type generation in our Spring Boot project using <code><b>spring-boot-maven-plugin</b></code> to build a war file, we need to 
follow these 2 steps:<br/><br/>
<ol>
<li>Set the packaging type as a war in our <code><b>pom.xml</b></code> file.</li>
<li>Mark the embedded container dependencies as "provided" (To build a war file that is both executable and deployable into an external container).
</ol>
Here is a snapshot from pom.xml:
<pre><code class="language-html hljs xml">&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;project xmlns="http://maven.apache.org/POM/4.0.0"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://maven.apache.org/POM/4.0.0
http://maven.apache.org/xsd/maven-4.0.0.xsd"&gt;
&lt;!-- ... --&gt;
&lt;packaging&gt;war&lt;/packaging&gt;
&lt;!-- ... --&gt;
&lt;dependencies&gt;
&lt;dependency&gt;
&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
&lt;artifactId&gt;spring-boot-starter-web&lt;/artifactId&gt;
&lt;/dependency&gt;
&lt;dependency&gt;
&lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
&lt;artifactId&gt;spring-boot-starter-tomcat&lt;/artifactId&gt;
&lt;scope&gt;provided&lt;/scope&gt;
&lt;/dependency&gt;
&lt;!-- ... --&gt;
&lt;/dependencies&gt;
&lt;/project&gt;</code></pre>
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