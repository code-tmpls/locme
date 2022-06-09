
<div class="appQuestion"><b>121. What is the meaning of Immutable in the context of String class in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An Immutable object cannot be modified or changed in Java. String is an Immutable class in Java.<br/><br/> 
Once a String object is created, it cannot be changed. When we assign the String to a new value, a new object is created.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>122. Why a String object is considered immutable in java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java language uses String for a variety of purposes. For this it has marked String Immutable.<br/><br/> 
There is a concept of String literal in Java.<br/><br/> 
Let say there are two String variables <code><b>A</b></code> and <code><b>B</b></code> that reference to a String object <i>“TestData”</i>. 
All these variables refer to same String literal. If one reference variable <code><b>A</b></code> changes the value of the String literal from 
<i>“TestData”</i> to <i>“RealData”</i>, then it will affect the other variable as well. Due to which String is considered Immutable.<br/><br/> 
In this case, if one variable <code><b>A</b></code> changes the value to <i>“RealData”</i>, then anew String literal with <i>“RealData”</i> is 
created and <code><b>A</b></code> will point to new String literal. While <code><b>B</b></code> will keep pointing to <i>“TestData“</i>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>123. Consider three s1, s2, s3 String variables with value "Hello World " are declared. How many String Object are created?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">String s1 = "HelloWorld";
String s2 = "HelloWorld";
String s3 = "HelloWorld";</code></pre>
The above code creates only one object. Since there is only oneString Literal“HelloWorld” created, all the references point tosame object.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>124. How many ways are there in Java to create a String object?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides two ways to create a String object. 
<ul>
<li>One is by using String Literal.</li>
<li>Other is by using new operator.</li>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>125. How many objects doesfollowing code created for - String s = new String("HelloWorld"); ?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
It creates two objects. One object is created in String constant pool and the other is created on the heap in non-pool area.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>126. What is String Interning?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
String Interning refers to the concept of using only one copy of a distinct String value that is Immutable. It provides the advantage of making 
String processing efficient in Time as well as Space complexity. But it introduces extra time in creation of String.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>127. Why Java uses String literal concept?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java uses String literal concept to make Java more efficient in memory. If same String already exists in String constant pool, it can be reused. 
This saves memory usage.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>128. What is the basic difference between a String and StringBuffer object?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
String is an immutable object. Its value cannot change after creation. StringBuffer is a mutable object. We can keep appending or modifying the 
contents of a StringBuffer in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>129. How will you create an immutable class in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, we can declare a class final to make it immutable. There are following detailed steps to make it Immutable : 
<ol>
<li>Add final modifier to class to prevent it from getting extended.</li>
<li>Add private modifier to all the fields to prevent direct access.</li>
<li>Do not provide any setter methods for member variables.</li>
<li>Add final modifier to all the mutable fields to assign value only once.</li>
<li>Use Deep Copy to initialize all the fields by a constructor.</li>
<li>In clone method, return a copy of object instead of the actual object reference.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>130. What is the use of toString() method in java ?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, Object class has toString() method. This method can be used to return the String representation of an Object. 
When we print an object, Java implicitly calls toString() method.<br/><br/> 
Java provides a default implementation for toString() method. Butwe can override this method to return the format that we want toprint.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>131. Arrange the three classes String, StringBuffer and StringBuilder in the order of efficiency for String processing operations?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
StringBuilder is the most efficient class. It does not have the overhead of Synchronization. StringBuffer is a Synchronized class.It has better 
performance than String but it is slower than StringBuilder. String is the slowest for any String processing operations, since it is leads to creation 
of new String literal with each modification.<br/><br/> 
So the decreasing order of efficiency is: <code><b>StringBuilder</b></code>, <code><b>StringBuffer</b></code>, <code><b>String</b></code>.
<!-- Answer ::: END -->
</div>
</div>
