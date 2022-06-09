<div><b>1. What is a class expression?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In ES6, one way to define a class is to use the Class expression. Class expressions, like function expressions, can be named or unnamed. 
If the class is named, the name is unique to the class body. Prototype-based inheritance is used in JavaScript classes.
<pre><code class="language-html hljs xml">var Product = class {
 constructor (num1, num2) {
  this.num1 = num1;
  this.num2 = num2;
 }
 multiplication() {
  return this.num1 * this.num2;
 }
}
console.log(new Product(5,8).multiplication());
// expected output: 40</code></pre>
The syntax of a class expression is similar to that of a class statement (declaration). Class expressions, on the other hand, 
allow you to omit the class name <code><b>("binding identifier")</b></code>, which is not possible with class statements. Additionally, unlike class 
declarations, class expressions allow you to redefine/re-declare classes without causing any type errors. It is not required to use 
the constructor property. The type of classes created with this keyword will always be <code><b>"function"</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. Which keyword can be used to deploy inheritance in ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>extend</b></code> keyword is used to implement inheritance in the ES6 language. There was no idea of classes in prior versions of 
Javascript, but with the release of ES6, Pure Object Oriented elements were added to the language.
<pre><code class="language-html hljs xml">class Classroom {
 constructor(students) {
  this.students = students;
 }
 room() {
  console.log('This class has  ' + this.students + ' students');
 }
}

class SectionA extends Classroom {
 constructor(students) {
  super(students);
 }
 sec() {
  console.log('section A');
 }
}
  
let secA = new SectionA(40);
 
secA.room();
secA.sec();</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. Compare the ES5 and ES6 codes for object initialization and parsing returned objects.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Object initialization:</b><br/><br/> Variables with the same name are frequently used to create object properties.<br/><br/> 
Consider the following scenario:
<pre><code class="language-html hljs xml">// ES5 code
var
  x = 1, y = 2, z = 3;
  ob = {
    x : a,
    y : b,
    z : z
  };

// ob.x = 1, ob.y = 2, ob.z = 3</code></pre>
In ES6, there's no need for tedious repetition!<br/>
<pre><code class="language-html hljs xml">// ES6 code
const
  x = 1, y = 2, z = 3;
  ob = {
    x
    y
    z
  };

// ob.x = 1, ob.y = 2, ob.z = 3</code></pre><br/><br/>
<b>Parsing returned objects:</b><br/><br/> Only one value can be returned by a function, but that value could be an object with hundreds of 
properties and/or methods. In ES5, you must first get the returned object and then extract values from it.<br/><br/>
Consider the following scenario:
<pre><code class="language-html hljs xml">// ES5 code
var
  ob = getObject(),
  a = ob.a,
  b = ob.b,
  c = ob.c;</code></pre>
This is made easier by ES6 destructuring, which eliminates the need to keep the object as a variable:
<pre><code class="language-html hljs xml">// ES6 code
const { a , b , c } = getObject();</code></pre>
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