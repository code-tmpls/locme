
<div><b>1. What is OAuth 2.0?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
OAuth, also called <code><b>Open Authorization</b></code>, is an industry-standard protocol for Authorization.<br/><br/>
It enables third-party applications get limited access on the user information.<br/><br/>
It does so with the help of four components also called OAuth roles:<br/><br/>
<ol>
<li>Authorization Server</li>
<li>Resource Server</li>
<li>Resource Owner or User</li>
<li>Client (client application)</li>
</ol>
The OAuth2 protocol is all about how these different roles communicate with each other and completes the goal of limited access-control.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. How does OAuth 2.0 works?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Suppose, you are User (Resource Owner). You are using any website which has option "log-in with Google".<br/><br/>
So, Google will have Authorization and Resource server. User will be registered with Google.<br/><br/>
Now this is how it works :<br/><br/>
<ul>
<li><b>Client to User :</b><br/> Client asks for Authorization request from the User.<br/><br/></li>
<li><b>User to Client :</b><br/> User provides Authorization grant to the Client.<br/><br/></li>
<li><b>Client to Authorization Server :</b><br/> Client sends this Authorization Grant to the Authorization Server.<br/><br/></li>
<li><b>Authorization Server to Client :</b><br/> Authorization Server sends access token to the Client.<br/><br/></li>
<li><b>Client to Resource Server :</b><br/> Client sends access token to the resource server.<br/><br/></li>
<li><b>Resource Server to Client :</b><br/> Resource Server sends the resource to the Client.<br/><br/></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is Spring Security OAuth2?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Security OAuth2 is a sub-project under Spring Security whose target is to help build OAuth2 enabled Consumer and Provider Java application.<br/><br/>
We can add Spring Boot starter projects to enable Spring Security OAuth2 in Spring Boot.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. How to enable Spring Boot Security in a Spring Boot project?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are multiple ways in which we can configure Spring Boot Security in a Spring Boot project. Here is one example:<br/><br/>
<ul>
<li><b>Step 1:</b> Add the starter dependency.
<pre><code class="language-html hljs xml">&lt;dependency&gt;
 &lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
 &lt;artifactId&gt;spring-boot-starter-security&lt;/artifactId&gt;
&lt;/dependency&gt;</code></pre></li>
<li><b>Step 2:</b> Extend <code><b>WebSecurityConfigurerAdapter</b></code> and create a config class.
<pre><code class="language-java hljs xml">public class CustomSecurityConfig extends WebSecurityConfigurerAdapter {
 // ...
}</code></pre></li>
<li><b>Step 3:</b> Annotate it with <code><b>@Configuration</b></code>.
<pre><code class="language-html hljs xml">@Configuration
public class CustomSecurityConfig extends WebSecurityConfigurerAdapter {
 // ...
}</code></pre></li>
<li><b>Step 4:</b> Enable <code><b>WebSecurity</b></code>.
<pre><code class="language-html hljs xml">@EnableWebSecurity
@Configuration
public class CustomSecurityConfig extends WebSecurityConfigurerAdapter {
 // ...
}</code></pre></li>
<li><b>Step 5:</b> Override <code><b>WebSecurityConfigurerAdapter</b></code> methods and provide your custom logic.
<pre><code class="language-html hljs xml">@EnableWebSecurity
@Configuration
public class CustomSecurityConfig extends WebSecurityConfigurerAdapter {
 @Override
 protected void configure(HttpSecurity http) throws Exception {
  http.authorizeRequests()
      .antMatchers("/").permitAll()
      .anyRequest().authenticated()
      .and()
      .formLogin()
      .loginPage("/customURL")
      .permitAll()
 }
}</code></pre></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. How to create an OAuth2 client with Spring Boot Security?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Create an OAuth2 client with Spring Boot Security :</b><br/><br/>
<ul>
<li>You will need to import Spring Boot OAuth2 Starter project first:
<pre><code class="language-html hljs xml">&lt;dependency&gt;
 &lt;groupId&gt;org.springframework.boot&lt;/groupId&gt;
 &lt;artifactId&gt;spring-boot-starter-oauth2-client&lt;/artifactId&gt;
&lt;/dependency&gt;</code></pre></li>
<li>Then, you will need to implement WebSecurityConfigurerAdapter and override "configure" method as it should be.</li>
</ul>
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
