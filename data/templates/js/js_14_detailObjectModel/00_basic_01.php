<div><b>1. What is the advantage of using the arrow syntax for a constructor method?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
The main benefit of utilising an arrow function as a method within a constructor is that the value of <code><b>this</b></code> is set at the 
moment of function generation and cannot be changed later. As a result, whenever the constructor is used to create a new object, <code><b>this</b></code> 
refers to that object.<br/><br/>
<i>For example,</i>
<pre><code class="language-html hljs xml">/* Created three Variables - shapeName, showName1, showName2 and a constant variables (Shape) is initialized with a function as shown below: */
var shapeName;
var showName1;
var showName2;

const Shape = function(sName) {
  this.shapeName = sName; // Assigned sName to shapeName
  
  // showName1 is initialized with a Function
  this.showName1 = function() { 
	console.log(this.shapeName); 
  };
  
  // showName2 is initialized with Arrow Function
  this.showName2 = () => { 
	console.log(this.shapeName); 
  };
};</code></pre>
Now, on above example,
<pre><code class="language-html hljs xml">// Created a Constructor
const circle = new Shape('Circle');

circle.showName1(); // Output shown as "Circle"
circle.showName1; // Output shown as "undefined"
circle.showName2; // Output shown as "Circle"</code></pre>
<br/>
The major point here is that for a normal function, <code><b>this</b></code> can be modified, but for an arrow function, the context is always the 
same. we won't have to worry about the context changing if we pass an arrow function around to other areas of our application.
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