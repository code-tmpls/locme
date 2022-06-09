<div class="appQuestion"><b>78. What is the purpose of package in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A package is used to encapsulate a group of classes, interfaces and sub-packages. Often, it is a hierarchical structure of storing information. 
It is easier to organize the related classes and sub-packages in this manner.<br/><br/> A Package also provides access protection for classes and interfaces. 
A package also helps in removing naming collision.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>79. What is java.lang package?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, java.lang package contains the classes that are fundamental to the design of Java programming language. The most important class in this 
package is Object class.<br/><br/> It also contains wrapper classes like - Integer, Boolean, Character etc. It provides Math class for mathematical 
operations.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>80. Which is the most important class in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
It is an open-ended question with many answers. In my view, Object class is the most important class of Java programming language. Itis the root of all 
the classes in Java. It provides some veryimportant and fundamental methods.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>81. Is it mandatory to import java.lang package every time?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No. By default, JVM loads it internally.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>82. Can you import same package or class twice in your class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If we import same package multiple times in a class, compiler includes it only once. So neither JVM nor Compiler gives anyerror/warning on including 
a package multiple times.<br/><br/>
If you have two classes with same name, then you may get name collision on importing the class erroneously.<br/><br/>
JVM internally loads the class only one time.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>83. What is a static import in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Static import is similar to normal import declaration. Normal import allows us to import classes from packages without using package qualifier. 
Static import allows us to import static members from a class without using class qualifier.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>84. What is the difference between import static com.test.Fooclass and import com.test.Fooclass?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<ul>
<li>First import is a static import and the second import is normal import of a class.</li>
<li>First import allows us to import static members of class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>
