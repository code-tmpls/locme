
<div class="appQuestion"><b>96. What is Reflection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Reflection is Java language's ability to inspect and dynamically callclasses, methods, attributes etc. at Runtime. It helps in examining or modifying 
the Runtime behavior of a class at Runtime.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>97. What are the uses of Reflection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Reflection is often used in Testing, Debugging and in Integrated Development Environment (IDE).<br/><br/>
Reflection allows you to write programs that do not have to "know" everything at compile time. It makes programs more dynamic, since they can be tied 
together at runtime.<br/><br/> Many modern frameworks like Spring etc. use Reflection. Somemodern languages like Python etc. also use Reflection.<br/><br/> 
JAVA API for XML Parsing (JAXP) also uses Reflection.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>98. How can we access private method of a class from outside the class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use Reflection to access private method of a class from outside the class. In Java, we use <code><b>getDeclaredMethod()</b></code> to getinstance 
of a private method. Then we mark this method accessible and finally invoke it.<br/><br/> In following sample code, we are accessing private 
<code><b>methodmessage()</b></code> of class Foo by Reflection.<br/><br/> 

<pre><code class="language-html hljs xml">public class Foo { 
 private void message(){ 
  System.out.println("hello java"); 
 } 
}</code></pre>
<div align="center"><i>FileName:</i> Foo.java</div>
<pre><code class="language-html hljs xml">import java.lang.reflect.Method;
public class FooMethodCall { 
  public static void main(String[] args) throws Exception { 
    Class c = Class.forName("Foo");
	Object o = c.newInstance();
	Method m = c.getDeclaredMethod("message", null);
	   m.setAccessible(true);
	   m.invoke(o, null);
  }
}</code></pre>
<div align="center"><i>FileName:</i> FooMethodCall.java</div>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>99. How can we create an Object dynamically at Runtime in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use Reflection to create an Object dynamically at Runtime in Java. We can use <code><b>Class.newInstance()</b></code> or 
<code><b>Constructor.newInstance()</b></code> methods for creating such Objects.
<!-- Answer ::: END -->
</div>
</div>
