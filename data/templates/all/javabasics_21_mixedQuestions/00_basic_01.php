
<div class="appQuestion"><b>1. What are Wrapper classes in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java has concept of Wrapper classes to allow primitive types to be accessed as objects. Primitive types like boolean, int, double, float etc. have 
corresponding Wrappers classes- Boolean, Integer,Double, Float etc.<br/><br/> 
Many of these Wrapper classes are in <code><b>java.lang</b></code> package.<br/><br/> Java 5.0 has launched the concept of Autoboxing and Unboxing in Java 
for Wrapper classes.<br/><br/> 
Example :
<pre><code class="language-html hljs xml">public class WrapperTest { 
 public static void main(String args[]) { 
 
   //Converting int into Integer
   int count=50;
   
   Integer i=Integer.valueOf(count); //converting int into Integer
   Integer j = a; //autoboxing,now compiler wil lwrite
   Integer.valueOf(count); // internally
   System.out.println(count+" "+i+" "+j); 
 }
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>2. What is the purpose of native method in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The native keyword is used for applying to a method to indicate that the method is implemented in native code using JNI(Java Native Interface).<br/><br/> 
Therefore, native methods allow Java Developer to directly access platform specific APIs.<br/><br/> 
Often, native methods are linked to native library.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>3. What is System class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>System.class</b></code> is a final class provided by <code><b>java.lang</b></code> package. It contains several useful class fields 
and methods.<br/><br/> 
The purpose of System class is to provide access to system resources.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>4. What is System, out and println in System.out.println method call?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<code><b>System</b></code> is a final class provided by <code><b>java.lang</b></code> package.<br/><br/> 
<code><b>out</b></code> refers to PrintStream class and a static member of System class.<br/><br/> 
<code><b>println</b></code> is a method of PrintStream class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>5. What is the other name of ShallowCopy in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Object Cloning. A Shallow Copy just copies the values of references in a Class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>6. What is the difference between Shallow Copy and Deep Copy in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Shallow copy just copies the values of the references in the class. A Deep copy copies the values of the objects as well.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>7. What is a Singleton class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Singleton class in Java has maximum one instance of the class present in JVM, all the time. The constructor of this class is written in such a 
way that it never creates more than one object of same class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>8. What is the difference between Singleton class and Static class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A static class in Java has only static methods. It is a container of functions. It is created based on procedural programming design.<br/><br/> 
Singleton class is a pattern in Object Oriented Design. A Singleton class has only one instance of an object in JVM. This pattern is implemented 
in such a way that there is always only one instance of that class present in JVM.
<!-- Answer ::: END -->
</div>
</div>
