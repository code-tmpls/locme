
<div><b>1. What is Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Security is a framework that focuses on providing both authentication and authorization to Java applications.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What is Authentication?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Authentication is the process where system validates the User using Credentials (<code><b>Username / Email</b></code> and <code><b>Password</b></code>).
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is Authorization?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Authorization is the process of validating <i>"What resources can you access"</i> in the application.<br/><br/>
After a user authenticates successfully with specific Credentials, the system provides certain set of authorities configured for the user.<br/><br/>
With the help of these authorities, user can access certain set of resources.<br/><br/>
These set of authorities are captured in terms of a Role.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. How do we plug-in Spring Security into Servlet container?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In the foundation, Spring Security uses Filter component of Java Servlet API.<br/><br/>
Servlets has the concept of FilterChain which has a list of Filters in an ordered manner. An HTTP request first go through the FilterChain and then proceed 
to the Controllers and handlers.<br/><br/>
We just hook a special Spring Security Filter, called DelegationFilterProxy in the Servlet‘s FilterChain and then process the security related logic in it.<br/><br/>
In this way, all the security related logic gets executed via. DelegationFilterProxy and it’s helper components.<br/><br/>
Using Servlet Filter as the base also means that we can plug-in Spring Security into a Servlet application without using Spring container and other modules.<br/><br/>
What you will require is just Servlet container to run this application and that’s it.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What is DelegatingFilterProxy in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It is one of the most popular Spring Security Interview Questions.<br/><br/>
<code><b>DelegatingFilterProxy</b></code> is the entry point of Spring Security in a Java web application.<br/><br/>
Spring Security is based on the concept of Servlet filters. So, DelegationFilterProxy is a Servlet Filter implementation which works as a root Filter.<br/><br/>
We register DelegationFilterProxy with the web application like this:
<pre><code class="language-html hljs xml">&lt;filter&gt;
&lt;filter-name&gt;rootSecurityFilter&lt;/filter-name&gt;
&lt;filter-class&gt;org.springframework.web.filter.DelegatingFilterProxy&lt;/filter-class&gt;
&lt;/filter&gt;
&lt;filter-mapping&gt;
&lt;filter-name&gt;rootSecurityFilter&lt;/filter-name&gt;
&lt;url-pattern&gt;/*&lt;/url-pattern&gt;
&lt;/filter-mapping&gt;</code></pre>
By doing this, it also works as bridge between web application and Spring IoC container (<i>ApplicationContext</i>) and it’s lifecycle.<br/><br/>
Once registered, it delegates all it’s work to a special Spring bean which is again a Filter implementation registered with Spring Container.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What is FilterChainProxy in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>FilterChainProxy</b></code> is a special bean to which DelegatingFilterProxy delegates all it’s incoming HTTP requests.<br/><br/>
In this way, you do not need to register all your security filters in <code><b>web.xml</b></code>. Instead, declare them in the Spring container under 
proper FilterChainProxy bean.<br/><br/>
FilterChainProxy then forwards all it’s requests to SecurityFilterChain.<br/><br/>
<b>Important Points :</b><br/><br/>
<ul>
<li>It works as starting point for all security specific logic.</li>
<li>If we are not sure about debugging point while troubleshooting an issue, we can start from here.</li>
<li>It applies <code><b>HTTP Firewall</b></code>.</li>
<li>It performs security logic which is global to the application.</li>
<li>Multiple <code><b>SecurityFilterChain</b></code> can be registered to it. In this context, it also takes the decision as to which 
<code><b>SecurityFilterChain</b></code> a request should go.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>


<div><b>7. What is SecurityFilterChain in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>SecurityFilterChain</b></code> is a FilterChain component which has zero or more Security Filters in an order.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. Name some of the built-in Security Filters?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Out of several, here are few Security Filters provided by Spring Security:<br/><br/>
<ol>
<li>X509AuthenticationFilter</li>
<li>OAuth2LoginAuthenticationFilter</li>
<li>Saml2WebSsoAuthenticationFilter</li>
<li>UsernamePasswordAuthenticationFilter</li>
<li>DigestAuthenticationFilter</li>
<li>BasicAuthenticationFilter</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is SecurityContext in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>SecurityContext</b> is an object which holds the information of Authenticated user.
<!-- Answer ::: END -->
</div>
</div>


<div><b>10. What is SecurityContextHolder?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It is a wrapper object for <code><b>SecurityContext</b></code> and <code><b>SecurityContextHolderStrategy</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What is SecurityContextHolderStrategy?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It represents the strategy by which <code><b>SecurityContext</b></code> will be created. In a typical security scenario, it is <code><b>ThreadLocal</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What are different SecurityContextHolder strategies?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>threadLocal</li>
<li>inheritable threadLocal</li>
<li>global</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>13. Explain the structure of Authentication object in Spring Security.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Authentication</b></code> is an interface.<br/><br/>
We have different types of objects depending upon different <code><b>Authentication</b></code> implementations.<br/><br/>
All these implementations have three parts:<br/><br/>
<ol>
<li>Principal</li>
<li>Credentials</li>
<li>Authorities</li>
</ol>
<b>Principal :</b><br/><br/>
A <i>Principal</i> represents a user’s identity.<br/><br/>
It can be a String object having username on a simple level or a complex UserDetails object.<br/><br/>
<b>Credentials :</b><br/><br/>
In simple terms, a Credential is a Password.<br/><br/>
<b>Authorities :</b><br/><br/>
A user is given zero or more GrantAuthority depending upon it’s access rights. Authentication object holds Collection of such GrantAuthority.
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is AuthenticationManager in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An <code><b>AuthenticationManager</b></code> is a Spring Security component which tells "How Authentication will happen". 
An AuthenticationManager has the reference to all the AuthenticationProviders in our application.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What is ProviderManager in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A ProviderManager is one of the commonly used implementation of AuthenticationManager.<br/><br/>
It has the list of Authentication to serve the request’s authentication.
<!-- Answer ::: END -->
</div>
</div>


<div><b>16. What is AuthenticationEntryPoint?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>AuthenticationEntryPoint</b></code> is the entry point to access the application resources.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. Who checks the user access of a resource?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>FilterSecurityInterceptor</b></code> in the <code><b>SecurityFilterChain</b></code> does this job.<br/><br/>
If user does not have access, it raises an exception.
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. Where do we configure AuthenticationEntryPoint?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We configure it with <code><b>ExceptionTranslationFilter</b></code>.<br/><br/>
When <code><b>FilterSecurityInterceptor</b></code> raises the exception, <code><b>ExceptionTranslationFilter</b></code> handles it and sends the 
configured <code><b>AuthenticationEntryPoint</b></code> to the user as response.
<!-- Answer ::: END -->
</div>
</div>


<div><b>19. How to protect passwords in a secured web application?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To protect the password:<br/><br/>
<ol>
<li>First thing we should do is not to have passwords in plain text.</li>
<li>We should use hashing or salting as preventive measure.</li>
</ol>
and Spring Security supports both hashing and Salting.
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. What is Hashing in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Hashing</b></code> is a general security concept wherein we convert a String into an encoded string, according to the Hashing algorithm used.<br/><br/>
There are many Hashing algorithms which can be applied.<br/><br/>
Hashing method should take password as input and outputs the hashed string. This hashed string should be stored in DB instead of plain text.<br/><br/>
Whenever user provides password to authenticate, in the back-end, we convert that password to the hashed string using the same hashing algorithm, and then 
match this to the stored string in the DB.
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. What is Salting and why do we use the process of Salting?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Salting</b></code> the process wherein we add an extra string with password to the hashing algorithm. And just by doing that, it is kind of 
impossible to get the combination of Password and Salt. In that way, it will be secure.
<!-- Answer ::: END -->
</div>
</div>


<div><b>22. What is "intercept-url" pattern?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>&lt;intercept-url&gt;</b></code> is the tag to configure authorization or access-control in a Spring Security application.<br/><br/>
For example,
<pre><code class="language-html hljs xml">&lt;http realm="An example" use-expressions="false"&gt;
 &lt;intercept-url pattern="/login.jsp*" access="IS_AUTHENTICATED_ANONYMOUSLY"/&gt;
 &lt;intercept-url pattern="/**" access="ROLE_USER"/&gt;
&lt;/http&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. What is expression based access control in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can use Spring EL (<i>Expression Language</i>) expressions to define our authorization configuration. To enable this Spring Security provides us different 
controls like: <code><b>hasRole</b></code>, <code><b>hasAnyRole</b></code>, <code><b>isAuthenticated</b></code>, <code><b>permitAll</b></code>.<br/><br/>
For example,
<pre><code class="language-html hljs xml">&lt;http realm="An example" use-expressions="true"&gt;
 &lt;intercept-url pattern="/login.jsp*" access="permitAll()"/&gt;
 &lt;intercept-url pattern="/**" access="hasRole('ROLE_USER')"/&gt;
&lt;/http&gt;</code></pre>
Advantage of using expression based access-control is that it allows us abstract complicated boolean logic in a single expression.
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. How to restrict URL access in Spring Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
For example,
<pre><code class="language-html hljs xml">&lt;http realm="An example" use-expressions="true"&gt;
    &lt;intercept-url pattern="/login.html*" access="permitAll()"/&gt;
    &lt;intercept-url pattern="/**" access="hasRole('ROLE_USER')"/&gt;
&lt;/http&gt;</code></pre>
In the above example, to access any URL (except <code><b>login.html</b></code>), user should have the role of ROLE_USER. Otherwise, he/she will not be 
able to access the URL.<br/>
In this way, we are restricting the access to the URL.
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. Does order matters in intercept-url pattern?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes. Ordering is very very important when we have multiple intercept-url patterns.<br/><br/>
Application will never match the pattern at 2nd line.<br/><br/>
Hence, the thumb rule is to define the pattern in the <i>order of most specific to least specific (general)</i>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. What is the difference between hasAuthority and hasRole?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>hasAuthority('ROLE_USER')</b></code> is similar to <code><b>hasRole('USER')</b></code> after Spring Security Version - 4. 
Prefix <code><b>ROLE_</b></code> will automatically be added to it in case of hasRole.<br/><br/>
So, it is just a semantic change in this context.
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. What is PreAuthorize?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>PreAuthorize</b> is a method level annotation which is used to restrict the access to the method invocation<br/><br/>
For example,
<pre><code class="language-html hljs xml">@PreAuthorize("hasRole('ROLE_USER')")
  public void aMethod(Params params);</code></pre>
Is user does not have the role of <code><b>ROLE_USER</b></code>, then application will not be able to invoke this method during this user activities.<br/><br/>
This annotation is part of Method security expressions.
<!-- Answer ::: END -->
</div>
</div>


<div><b>28. What is PostAuthorize?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. What is PreFilter?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. What is PostFilter?</b></div>
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


