<div><b>1. What is ES / ECMASCRIPT / ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When Javascript was developed, the name itself was chosen for marketing reasons since Java was getting popular around the time. 
But to standardize the language and its specification, it was submitted to ECMA International (European Computer Manufacturers Association), 
a body for standardization of information and communication technology. Eventually the language standardized in ECMA is called ECMAScript (ES).
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What are the some of the features of ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Some of the new Features of ES6 are 
<ul>
<li>Support for Constants (also known as <code><b>Immutable Variables</b></code>)</li>
<li>Block-scope support for both variables, constants, functions</li>
<li>Arrow Functions</li>
<li>Extended Paramter Handling</li>
<li>Templates Literals and Extended Literals</li>
<li>Enhanced Regular Expression</li>
<li>Destructuring Assignment</li>
<li>Modules. Classes, Iterators, Generators</li>
<li>Enhanced Object Properties</li>
<li>Support for Map?Set & WeakMap/WeakSet</li>
<li>Promises, Meta-programming, Internationalization and Localization</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. How ES6 works?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Since its release, many javascript environments like Browsers and Node.js are actively working on implementing the language features. As of now, 
the Chrome and Safari Browsers has nearly 100% support for ES6 Features. And also ES6 is backward compatible which means our old code is still valid in ES6.
But, in order to use it across all platforms, we need to transpile (That means, Transformation + Compiling) the ES6 Code to ES5.<br/><br/>
Babel is an awesome tool that let us do this job.<br/><br/>
We can install babael globally through npm and can integrate it with our task runner or bundler like webpack to automatically transpile our code into 
ES5 for Production.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What are the object oriented features supported in ES6.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The object-oriented features supported in ES6 are:<br/></br/>
<ol>
<li><b>Classes:</b> We can create classes in ES6. The class function essentially builds a template from which we may later create objects. When a 
new instance of the class is created, the constructor method is invoked.<br/><br/></li>
<li><b>Methods:</b> Static methods can also be found in classes. A static method, unlike an object, is a function that is bound to the class. A static method 
can't be called from a class instance.<br/></br> Let's take a look at getters and setters for a moment.<br/><br/> 
<b>Encapsulation</b> is a fundamental notion in OOP. Data 
(object properties) should not be directly accessed or updated from outside the object, which is a crucial aspect of encapsulation. A getter 
(access) or a setter (modify) are particular methods we define in our class to access or edit a property.<br/><br/></li>
<li><b>Inheritance:</b> It is also possible for classes to inherit from one another. The parent is the class that is being inherited from, and 
the child is the class that is inheriting from the parent.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. Difference between EcmaScript 5 (ES 5) and EcmaScript 6 (ES 6).</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
<table class="table">
<thead><tr><th>EcmaScript 5</th><th>EcmaScript 6</th></tr></thead>
<tbody>
<tr>
 <td>It is introduced in 2009</td>
 <td>It is introduced in 2015</td>
</tr>
<tr>
 <td>Primitive data types that are <code><b>string</b></code>, <code><b>boolean</b></code>, <code><b>number</b></code>, <code><b>null</b></code>, and 
 <code><b>undefined</b></code> are supported by ES5.</td>
 <td>There are a few additions to the JavaScript data types in ES6.  For supporting unique values, a new primitive data type <code><b>'symbol'</b></code> 
 was introduced.</td>
</tr>
<tr>
 <td>In ES5, we could define the variables by using the <code><b>var</b></code> keyword only.</td>
 <td>In ES6, in addition to var, there are two new methods to define variables: <code><b>let</b></code> and <code><b>const</b></code>.</td>
</tr>
<tr>
 <td>Both <code><b>function</b></code> and <code><b>return</b></code> keywords are used in order to define a function in ES5.</td>
 <td>An arrow function is a newly added feature in ES6 in which we don't require the <code><b>function</b></code> keyword in order to define the function.</td>
</tr>
<tr>
 <td>In ES5, a <code><b>for</b></code> loop is used to iterate over elements.</td>
 <td>ES6 introduced the idea of <code><b>for...of</b></code> loop in order to iterate over the values of the iterable objects.</td>
</tr>
    </tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>


<div><b>6. What is the difference between let and const? What distinguishes both from var?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When declaring any variable in JavaScript, we used the <code><b>var</b></code> keyword.<br/><br/> 
<code><b>var</b></code> is a function scoped keyword. Within a function, we can access the variable. 
When we need to create a new scope, we wrap the code in a function.<br/><br/>
Both <code><b>let</b></code> and <code><b>const</b></code> have block scope. If you use these keywords to declare a variable, it will only 
exist within the innermost block that surrounds them.<br/>
If you declare a variable with let inside a block (for example, if a condition or a for-loop), it can only be accessed within that block.<br/><br/>
The variables declared with the let keyword are mutable, which means that their values can be changed. It's akin to the var keyword, but with the added 
benefit of block scoping. The variables declared with the const keyword are block-scoped and immutable. When variables are declared with the const keyword, 
their value cannot be modified or reassigned.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. Discuss the arrow function.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In ES6, arrow functions are introduced. The shorthand syntax for writing ES6 functions is arrow functions. 
The arrow function's definition consists of parameters, followed by an arrow (=>), and the function's body.
The 'fat arrow' function is another name for the Arrow function. We won't be able to employ them as constructors.
<pre><code class="language-html hljs xml">const function_name = (arg_1, arg_2, arg_3, ...) => {  
    //body of the function  
}</pre></code>
<b>Benefits:</b><br/><br/>
<ul>
<li>It reduces the size of the code.</li>
<li>For a single-line function, the return statement is optional.</li>
<li>Bind the context lexically.</li>
<li>For a single-line statement, functional braces are not required.</li>
<li>Doesn’t work with <code><b>new</b></code></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. When should one not use arrow functions?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
One should not use arrow functions in the following cases:<br/>
<ol>
<li><b>Function Hoisting, Named Functions:</b><br/>
As arrow functions are anonymous, we cannot use them when we want function hoisting or when we want to use named functions.</li>
<li><b>Object methods:</b>
<pre><code class="language-html hljs xml">var a = {
  b: 7,
  func: () => {
    this.b--;
  }
}</code></pre>
The value of b does not drop when you call a.func. It's because this isn't bound to anything and will inherit the value from its parent scope.
</li>
<li><b>Callback functions with dynamic context:</b>
<pre><code class="language-html hljs xml">var btn = document.getElementById('clickMe');
btn.addEventListener('click', () => {
  this.classList.toggle('on');
});</code></pre>
We'd get a TypeError if we clicked the button. This is due to the fact that this is not bound to the button, but rather to its parent scope.
</li>
<li><b>this/arguments:</b><br/>
Since arrow functions don’t have this/arguments of their own and they depend on their outer context, we cannot use them in cases where we 
need to use this/arguments in a function.
</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. Why should one use ES6 classes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Developers have discovered that ES6 classes are really handy. The following are some of the most common applications of ES6 classes:
<ul>
<li>The syntax of ES6 classes is simpler and less prone to errors.</li>
<li>When it comes to building up inheritance hierarchies, ES6 is the ideal option because it combines new and old syntax, reducing errors and 
simplifying the process.</li>
<li>ES6 classes prevent developers from making mistakes when using a new operator. If this proves to be an invalid object for the constructor, 
classes eliminate this issue by having the constructor throw an exception.</li>
<li>Classes can also be used to call a method from the prototype's version. With the new ES6 syntax, this version is significantly easier 
to use than previous versions.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. How can you create a class in ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The keyword class is used to create a class in ES6. We can use class expressions or class declarations to include classes in our code. 
Only functions and constructors are allowed in a class definition. These components are collectively referred to as the class's data members.<br/><br/>
Constructors in classes are responsible for allocating memory to the class's objects. A class's functions are in charge of performing actions 
on the objects.<br/><br/>
<b>Syntax: In ES5</b>
<pre><code class="language-html hljs xml">var varName = new className {    
}</code></pre>
<b>Syntax: In ES6 (Using class keyword)</b>
<pre><code class="language-html hljs xml">class className{    
}</code></pre>
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