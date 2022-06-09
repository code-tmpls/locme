
<div><b>1. Difference between Typescript and Javascript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Typescript is a superset of JavaScript whereas JavaScript is a scripting language.</li>
<li>Typescript has an interface concept but JavaScript havan't.</li>
<li>TypeScript doesn't run in the browser where JavaScript runs.</li>
<li>TypeScript has classes whereas JavaScript has functions.</li>
<li>Typescript support module whereas JavaScript doesn't support modules.</li>
<li>In typescript - Number and string are the interfaces whereas In, JavaScript - Number, string are the Object.</li>
</ul>
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>feature</th>
<th>typescript</th>
<th>javascript</th>
</tr>
</thead>
<tbody>
<tr>
<td>Language paradigm</td>
<td>Object oriented programming language</td>
<td>Scripting language</td>
</tr>
<tr>
<td>Typing support</td>
<td>Supports static typing</td>
<td>It has dynamic typing</td>
</tr>
<tr>
<td>Modules</td>
<td>Supported</td>
<td>Not supported</td>
</tr>
<tr>
<td>Interface</td>
<td>It has interfaces concept</td>
<td>Doesn't support interfaces</td>
</tr>
<tr>
<td>Optional parameters</td>
<td>Functions support optional parameters</td>
<td>No support of optional parameters for functions</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. How do you install TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">npm install -g typescript</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What are types in Typescript? </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Types in Typescript define the data-type. It helps in avoiding the wrong value passing. There are 2 different types:
<ul>
<li><b>Built-in :</b> <code><b>String</b></code>, <code><b>Number</b></code>, <code><b>boolean</b></code>, <code><b>Null</b></code>, 
<code><b>Undefined</b></code>, <code><b>any</b></code></li>
<li><b>User-Defined :</b> <code><b>Array</b></code>, <code><b>object</b></code>, <code><b>classes</b></code>, <code><b>interfaces</b></code></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What Are The Benefits Of Typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript has the following benefits:
<ul>
<li>Intellisense</li>
<li>Impose coding guidelines</li>
<li>Offers type checking</li>
<li>It helps in code structuring</li>
<li>Compile time error checking</li>
<li>Use class-based object-oriented programming</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What are Variables in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A variable is a named space in the memory which is used to store values. The type syntax for declaring a variable in TypeScript includes a 
colon (:) after the variable name, followed by its type.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What are Interfaces in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The interface is a structure that defines the contract in your application. It defines the syntax for classes to follow. It contains only the 
declaration of the members and it is the responsibility of the deriving class to define the members. The TypeScript compiler uses interface for 
type-checking and checks whether the object has a specific structure or not.
<!-- Answer ::: END -->
</div>
</div>


<div><b>7. What are Classes in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript introduced classes so that they can avail the benefits of object-oriented techniques like encapsulation and abstraction. The class in 
TypeScript is compiled to plain JavaScript functions by the TypeScript compiler to work across platforms and browsers.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What are the access modifiers supported by TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Public –</b> All the members of the class, its child classes, and the instance of the class can access.</li>
<li><b>Protected –</b> All the members of the class and its child classes can access them. But the instance of the class can not access.</li>
<li><b>Private –</b> Only the members of the class can access them.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What are modules in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A module is a powerful way of creating a group of related variables, functions, classes, and interfaces, etc. It can be executed within 
its own scope, but not in the global scope. Basically, you cannot access the variables, functions, classes, and interfaces declared in a 
module outside the module directly.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is namespace in Typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Namespace groups functionalities logically. These maintain the legacy code of typescript internally. It encapsulates the features and objects 
that share certain relationships. A namespace is also known as internal modules. A namespace can also include interfaces, classes, functions, 
and variables to support a group of related functionalities.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. Explain Decorators in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A Decorator is a special kind of declaration that can be applied to classes, methods, accessor, property, or parameter. Decorators are functions 
that are prefixed <code><b>@expression</b></code> symbol, where expression must evaluate to a function that will be called at runtime with information 
about the decorated declaration.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What are Mixins?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In Javascript, Mixins are a way of building up classes from reusable components and then build them by combining simpler partial classes.<br/><br/>
The idea is simple, instead of a class A extending class B to get its functionality, function B takes class A and returns a new class with this added 
functionality. Here, function B is a mixin.
<!-- Answer ::: END -->
</div>
</div>


<div><b>13. What is Scope variable?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The scope is a set of objects, variables, and function and the JavaScript can have a global scope variable and local scope variable.<br/><br/>
You can declare a variable in two different scopes such as:
<ul>
<li><b>Local Scope Variable –</b> It is a function object which is used within the functions.</li>
<li><b>Global Scope Variable –</b> You can use this window object out of function and within the functions.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is the TypeScript Definition Manager?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>TypeScript Definition Manager (TSD)</b></code> is a package manager used to search and install TypeScript definition files directly from the 
community-driven DefinitelyTyped repository.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What is tsconfig.json file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>tsconfig.json</b></code> file is a file which is in JSON format. In the tsconfig.json file, you can specify different options to tell 
the compiler how to compile the current project. The presence of a tsconfig.json file in a directory indicates that the directory is the root of a 
TypeScript project.
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. What are Generics in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript Generics is a tool that provides a way of creating reusable components. It is able to create components that can work with a variety of 
data types rather than a single data type. Also, it provides type safety without compromising the performance, or productivity. Generics allow us 
to create generic classes, generic functions, generic methods, and generic interfaces.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. What is JSX in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
JSX is an embeddable XML-like syntax and it is meant to be transformed into a valid JavaScript. JSX became popular with the React framework. 
TypeScript supports embedding, type checking, and compiling JSX directly into JavaScript.
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. What is a TypeScript Map file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript Map file is a source map file that holds information about our original files. The .map files are source map files that let tools map 
between the emitted JavaScript code and the TypeScript source files that created it. Also, debuggers can consume these files so we can debug the 
TypeScript file instead of the JavaScript file.
<!-- Answer ::: END -->
</div>
</div>


<div><b>19. What is "as" syntax in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The "as" is the additional syntax for Type assertion in TypeScript. The reason for introducing the as-syntax is that the original syntax conflicted with JSX.
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. Explain Enum in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Enums or enumerations are a TypeScipt data type that allows us to define a set of named constants. Using enums make it easier to document intent, or 
create a set of distinct cases. It is a collection of related values that can be numeric or string values.
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. What is an anonymous function?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An anonymous function is a function that is declared without any named identifier. These functions are dynamically declared at runtime. Also, 
anonymous functions can accept inputs and return outputs, just as standard functions do. It is usually not accessible after its initial creation.
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. What is Lambda/Arrow function?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
ES6 version of TypeScript provides shorthand syntax for defining the anonymous function, i.e., for function expressions. These arrow functions 
are also called lambda functions. A lambda function is a function without a name. Whereas, the arrow function omits the function keyword.
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. What is Compilation Context?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The compilation context is basically grouping of the files that TypeScript will parse and analyze to determine what is valid and what isn’t. 
Along with the information about which files, the compilation context contains information about which compiler options. A great way to define 
this logical grouping is using a tsconfig.json file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. What is Triple-Slash Directive?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Triple-slash directives are single-line comments containing a single XML tag. The contents of the comment are used as compiler directives.
<!-- Answer ::: END -->
</div>
</div>


<div><b>25. Why TypeScript is referred as Optionally Statically Typed Language?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript is referred as optionally statically typed, which means we can make the compiler to ignore the type of a variable optionally. Using "any" 
data type, we can assign any type of value to the variable. TypeScript will not give any error checking during compilation.
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. How to Call Base Class Constructor from Child Class in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>super()</b></code> function is used to called parent or base class constructor from Child Class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. What is default visibility for properties/methods in TypeScript classes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>public</b></code> is the default visibility for properties/methods in TypeScript classes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>28. Does TypeScript support all object-oriented principles?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, TypeScript support all object-oriented principles.<br/><br/>
There are four main principles to object-oriented programming:
<ul>
<li>Encapsulation</li>
<li>Inheritance</li>
<li>Abstraction</li>
<li>Polymorphism</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. What is Type assertions in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Type assertion works like a typecasting in other languages, but it doesn't perform type checking or restructuring of data just like other languages 
can do like C# and Java. The typecasting comes with runtime support whereas type assertion has no impact on runtime. However, type assertions are used 
purely by the compiler and provide hints to the compiler on how we want our code to be analyzed.
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. What is Rest parameters?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The rest parameter is used to pass zero or more values to a function. It is declared by prefixing the three dot characters ('...') before the parameter. 
It allows the functions to have a variable number of arguments without using the arguments object. It is very useful where we have an undetermined number 
of parameters
<!-- Answer ::: END -->
</div>
</div>


<div><b>31. What is Declaration Merging?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Declaration merging is the process followed by the compiler to merge two or more separate declarations. The declaration declared with the same name 
into a single definition. This merged definition has the features of both of the original declarations.<br/><br/>
The simplest, and perhaps most common, type of declaration merging is interface merging. At the most basic level, the merge mechanically joins the 
members of both declarations into a single interface with the same name.
<!-- Answer ::: END -->
</div>
</div>

<div><b>32. What is getters/setters in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript supports getters/setters as a way of intercepting accesses to a member of an object. This gives you a way of having finer-grained 
control over how a member is accessed on each object.
<!-- Answer ::: END -->
</div>
</div>

<div><b>33. What is duck typing in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Duck-typing used to check the type compatibility for more complex variable types in typescript. This method checks the type matching between 
two objects. If the property contains more or less or not match then a compile-time error occurred.
<!-- Answer ::: END -->
</div>
</div>

<div><b>34. What is an implicit Module in Typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A module is used to create a set of related variables, functions, classes, and interfaces, etc in the Typescript. The internal and external 
module has two categories of Typescript.
<!-- Answer ::: END -->
</div>
</div>

<div><b>35. What are TypeScript Optional Properties / Optional Parameters?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The optional properties use as an optional thing. The interface typescript has many properties but every property not required. You can pass 
the object into interface using ( ? ) question mark symbol.
<!-- Answer ::: END -->
</div>
</div>

<div><b>36. What are Closures in Javascript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Closures are nothing but a statefull functions.<br/><br/>
A closure is an inner function that has access to outer function’s variables in addition to it’s own variable and global variables. In simple term, 
a closure is a function inside a function.Closures using Lexical scoping in which function have access to global and outer variables.
<!-- Answer ::: END -->
</div>
</div>


<div><b>37. What is Asynchronous Module Definition (AMD) in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In Typescript, the Asynchronous Module Definition (AMD) is used to specify a process for defining modules in a manner such that modules and their 
dependencies can be loaded asynchronously. This is greatly helpful in a browser environment where performance, usability, debugging, and access 
to cross-domain problems occur due to the synchronous loading of modules.
<!-- Answer ::: END -->
</div>
</div>

<div><b>38. What is the advantage of Arrow function in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The two significant benefits that Arrow function in TypeScript offers:
<ul>
<li>They are less verbose compared to traditional functions.</li>
<li>This function takes the “this” from its surroundings.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>39. Why is TypeScript strongly typed?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript is strongly typed to syntactical benefits to this language while still allowing users to write normal JavaScript. It also ensures the 
production of predictable results with fewer errors and more secure.
<!-- Answer ::: END -->
</div>
</div>

<div><b>40. What is static typing in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In TypeScript, static typing means parameters, variables, and object members have types that compiler recognizes at the time of compile. This helps in 
detecting early errors faster than unit test runs. It also greatly helps IDEs with auto-completion and API exploration with statically typed DOM.
<!-- Answer ::: END -->
</div>
</div>

<div><b>41. What is the prototype in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The prototype property in TypeScript allows users to include methods and properties to an object. It allows cloning objects (complex ones also) without 
coupling to their specific classes. Prototype objects can create full copies due to the accessibility of objects to each other’s private field.
<!-- Answer ::: END -->
</div>
</div>

<div><b>42. What is the callback function in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In TypeScript, the callback function is used to schedule a call after some asynchronous processing is completed. It is passed to another function as a 
parameter that allows callback function to be called when the process of asynchronous processing is completed.
<!-- Answer ::: END -->
</div>
</div>


<div><b>43. Explain access modifiers in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript developers can use the access modifiers to control the accessibility of the class members. There are two types of access modifiers in TypeScript; 
<code><b>private</b></code> and <code><b>public</b></code> modifiers. Class members are public by default, but users can add a private modifier if they wish.
<!-- Answer ::: END -->
</div>
</div>

<div><b>44. What is super in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Super is a TypeScript keyword which can be used by developers in expressions for base class constructor and base class properties reference. This call is 
only allowed in constructors of derived classes. Call for this keyword consist the keyword super with an argument list closed in parentheses.
<!-- Answer ::: END -->
</div>
</div>

<div><b>45. What is the export class in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In TypeScript, an extra line is added to the JS code using the export class which is then used to add an exported item within a module.
<!-- Answer ::: END -->
</div>
</div>

<div><b>46. Is it possible to merge multiple .ts files into a single .js file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, it's possible. To successfully merge multiple TS files together in a JS file, use a module bundler system or a Gulp Script to concatenate 
everything into a single JS file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>47. What is import and export in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>export</b></code> keyword is used to export any declaration such as function, variables, interface, or type alias. The export * from 
"module" can be used by a module to wrap one or more modules and combine together their exporting. Whereas, the <code><b>import</b></code> keyword 
is used to export declaration.
<!-- Answer ::: END -->
</div>
</div>

<div><b>48. Which keyword is used for inheritance in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript uses the keyword ‘extends’ to support inheritance. The syntax will be as following:
<pre><code class="language-html hljs xml">class ChildName extends ParentName {
 // ...	
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>49. What does the "Omit" type do?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It’s a new type where you can define some properties to be excluded from the original type.
<!-- Answer ::: END -->
</div>
</div>

<div><b>50. Where can decorators be applied to?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Classes</b></code>, <code><b>properties</b></code>, <code><b>methods</b></code>, and <code><b>method</b></code> arguments.
<!-- Answer ::: END -->
</div>
</div>

<div><b>51. What does the ‘Record’ type do?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It allows you to create a typed map .
<!-- Answer ::: END -->
</div>
</div>

<div><b>52. How can you access classes outside the module they are defined in?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Use the <code><b>export</b></code> keyword in front of the class.
<!-- Answer ::: END -->
</div>
</div>

<div><b>53. When to use the "unknown" keyword?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When you don’t want to use the "any" keyword or/and don’t know the exact type up front but want to assign it later on.
<!-- Answer ::: END -->
</div>
</div>

<div><b>54. What is the difference between var and let in Typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li><code><b>var</b></code> declaration is done at function scoped and <code><b>let</b></code> declaration is done at block scoped.</li>
<li><code><b>var</b></code> will allow you to re-declare the same variable in the same scope, whereas <code><b>let</b></code> will not.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>55. What are methods overriding in Typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If child class has the same method as declared in the parent class, it is known as method overriding.<br/><br/>
<b>Rules for Method Overriding :</b>
<ul>
<li>The method must have the same name as in the parent class</li>
<li>There must be an IS-A relationship</li>
<li>The method must have the same parameter as in the parent class</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>56. How to check null and undefined in typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
By using a juggling check, we can check both null and undefined: 
<pre><code class="language-html hljs xml">if ( x == null ){ }</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>57. What does it mean by Semantic HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Semantic HTML is a type of coding style in which tags will have texts that need to display on the user interface. Bold, Italic tags should not 
be used to represent Semantic HTML.
<!-- Answer ::: END -->
</div>
</div>

<div><b>58. List out all the components of TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Below are the components of TypeScript :
<ul>
<li>Language</li>
<li>TSC-(TypeScript Compiler)</li>
<li>TSLS- (TypeScript Language Service)</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>59. What are the file Naming Extension’s in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are two extension’s – <code><b>.tsx</b></code> , <code><b>.ts</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>60. What is tuple in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Tuple is collection of heterogeneous values or it store multiple different-different type data type values. Below is the example for the same.
<pre><code class="language-html hljs xml">var fileData = ["Alia",90,"Shweta",45];</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>61. Describe pop() and push() method in tuple.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>push() –</b> this used to append the value.</li>
<li><b>pop() -</b> this used to removed and return the last value.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>62. What are the different types supported by TypeScript ?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>String :</b> A string is a series of characters that are stored as UTF-16 Unicode code.</li>
<li><b>Number :</b> It reflects the values of the number form. The numbers are stored as floating-point values in TypeScript.</li>
<li><b>Boolean :</b> This can have values as true or false.</li>
<li><b>Array :</b> This can be a list of numbers together.</li>
<li><b>Enum :</b> This allows creating a user-defined data type.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>63. What are TypeScript collections ?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Like other programing languages Typescript also has support for Collection, like Map, Set etc.
<!-- Answer ::: END -->
</div>
</div>

<div><b>64. Is it possible to debug any TypeScript file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, it is possible.<br/><br/>
<ul>
<li>To debug it, you need the <code><b>.js</b></code> source map file. So compile the .ts file with the <code><b>--sourcemap</b></code> flag to generate a 
source map file.</li>
<li><pre><code class="language-html hljs xml">tsc -sourcemap file1.ts</code></pre> 
This will create <code><b>file1.js</b></code> and <code><b>file1.js.map</b></code>. And last line of <code><b>file1.js</b></code> would be reference of 
source map file.</li>
</ul>
<pre><code class="language-html hljs xml">sourceMappingURL=file1.js.map</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>65. How you can use TS with jQuery, Angularjs and Reactjs?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Angularjs is already integrated with Typescript. So, if you are using Angularjs CLI you don’t need to do anything special.</li>
<li>For React and jQuery - use Typescript’s <code><b>@types</b></code> and it will install all the dependencies - <code><b>@types/React</b></code>, 
<code><b>@types/jQuery</b></code>.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>66. How do you declare an undefined variable?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">var name : string; 
var phone : int;</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>67. How to declare and initialize an array in Typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<pre><code class="language-html hljs xml">var names:string[]; <span class="hljs-comment">// Declaration</span>
names=["a","b","c","d"];  <span class="hljs-comment">// Initialization</span></code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>68. What is union type?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Variable should be declared with union type if it can be set with values of different types. It can be useful when you need to return 
correct result or null value, for example in find function.
<!-- Answer ::: END -->
</div>
</div>

<div><b>69. How to pass options to TypeScript compiler?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Through command line arguments or tsconfig.json file. If file tsconfig.json located in some directory, that means this root of TypeScript 
project. There are such options available: <code><b>compilerOptions</b></code>, <code><b>files</b></code>, <code><b>typeRoots</b></code>, 
<code><b>include</b></code>, <code><b>exclude</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>70. What does the pipe(|) mean in typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This is called union type in typescript.<br/><br/>
A union type describes a value that can be one of several types.
<!-- Answer ::: END -->
</div>
</div>

<div><b>71. What are the primitive types in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript has three primitive types that are frequently used: string, number, and boolean. These correspond to the similarly named types in JavaScript.<br/><br/>
<ul>
<li><b>string :</b> represents text values such as "javascript", "typescript", etc.</li>
<li><b>number :</b> represents numeric values like 1, 2, 32, 43, etc.</li>
<li><b>boolean :</b> represents a variable that can have either a 'true' or 'false' value.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>72. Explain how the arrays work in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We use arrays to store values of the same type. Arrays are ordered and indexed collections of values. The indexing starts at 0, i.e., the first 
element has index 0, the second has index 1, and so on.<br/><br/>
Here is the syntax to declare and initialize an array in TypeScript.
<pre><code class="language-html hljs xml">let values: number[] = [];
values[0] = 10;
values[1] = 20;
values[2] = 30;</code></pre>
You can also create an array using the short-hand syntax as follows:
<pre><code class="language-html hljs xml">let values: number[] = [15, 20, 25, 30];</code></pre>
TypeScript provides an alternate syntax to specify the Array type.
<pre><code class="language-html hljs xml">let values: Array&lt;number&gt; = [15, 20, 25, 30];</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>73. What is any type, and when to use it?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are times when you want to store a value in a variable but don’t know the type of that variable in advance. For example, the value is coming from an 
API call or the user input. The ‘any’ type allows you to assign a value of any type to the variable of type any.
<pre><code class="language-html hljs xml">let person: any = "Foo";</code></pre>
Here is an example that demonstrates the usage of any type.
<pre><code class="language-html hljs xml"><span class="hljs-comment">// json may come from a third-party API</span>
const employeeData: string = `{"name": "John Doe", "salary": 60000}`;

<span class="hljs-comment">// parse JSON to build employee object</span>
const employee: any = JSON.parse(employeeData);

console.log(employee.name);
console.log(employee.salary);</code></pre>
TypeScript assumes a variable is of type any when you don’t explicitly provide the type, and the compiler cannot infer the type from the surrounding context. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>74. What is void, and when to use the void type?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The void indicates the absence of type on a variable. It acts as the opposite type to any. It is especially useful in functions that don’t return a value.
<pre><code class="language-html hljs xml">function notify(): void {
  alert("The user has been notified.");
}</code></pre>
If a variable is of type void, you can only assign the null or undefined values to that variable.
<!-- Answer ::: END -->
</div>
</div>

<div><b>75. What is an unknown type, and when to use it in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The unknown type is the type-safe counterpart of any type. You can assign anything to the unknown, but the unknown isn’t assignable to anything but 
itself and any, without performing a type assertion of a control-flow-based narrowing. You cannot perform any operations on a variable of an unknown 
type without first asserting or narrowing it to a more specific type.<br/><br/>
Consider the following example. We create the foo variable of unknown type and assign a string value to it. If we try to assign that unknown 
variable to a string variable bar, the compiler gives an error.
<pre><code class="language-html hljs xml">let foo: unknown = "Akshay";
let bar: string = foo; <span class="hljs-comment">// Type 'unknown' is not assignable to type 'string'</span></code></pre>
You can narrow down a variable of an unknown type to something specific by doing typeof checks or comparison checks or using type guards. 
For example, we can get rid of the above error by
<pre><code class="language-html hljs xml">let foo: unknown = "Akshay";
let bar: string = foo as string;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>76. What are the different keywords to declare variables in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Different keywords to declare variables in TypeScript :
<ul>
<li>var</li>
<li>let</li>
<li>const</li>
</ul>
<b>var :</b><br/>
Declares a function-scoped or global variable. You can optionally set its value during the declaration. Its behavior and scoping rules are 
similar to the var keyword in JavaScript. For example,
<pre><code class="language-html hljs xml">var foo = "bar";</code></pre>
<b>let :</b><br/>
Declares a block-scoped local variable. Similar to var, you can optionally set the value of a variable during the declaration. For example,
<pre><code class="language-html hljs xml">let a = 5;

if (true) {
  let a = 10;
  console.log(a);  // 10
}
console.log(a);  // 5</code></pre>
<b>const :</b><br/>
Declares a block-scoped constant value that cannot be changed after it’s initialized.  For example,
<pre><code class="language-html hljs xml">const a = 5;

if (true) {
  a = 10; // Error: Cannot assign to 'a' because it is a constant.(2588)
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>77. Provide the syntax of a function with the type annotations.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Functions are blocks of code to perform a specific code. Functions can optionally take one or more arguments, process them, and optionally return a value.<br/><br/>
Here’s the TypeScript syntax to create and call a function.
<pre><code class="language-html hljs xml">function greet(name: string): string {
  return `Hello, ${name}`;
}

let greeting = greet("Anders");
console.log(greeting);  <span class="hljs-comment">// "Hello, Anders"</span></code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>78. How to create objects in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Objects are dictionary-like collections of keys and values. The keys have to be unique. They are similar to arrays and are also sometimes called 
associative arrays. However, an array uses numbers to index the values, whereas an object allows you to use any other type as the key.<br/><br/>
In TypeScript, an Object type refers to any value with properties. It can be defined by simply listing the properties and their types. For example,
<pre><code class="language-html hljs xml">let pt: { x: number; y: number } = {
  x: 10,
  y: 20
};</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>79. How to specify optional properties in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An object type can have zero or more optional properties by adding a ‘?’ after the property name. 
<pre><code class="language-html hljs xml">let pt: { x: number; y: number; z?: number } = {
  x: 10,
  y: 20
};
console.log(pt);</code></pre>
In the example above, because the property ‘z’ is marked as optional, the compiler won’t complain if we don’t provide it during the initialization.
<!-- Answer ::: END -->
</div>
</div>

<div><b>80. Explain the concept of null and its use in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In programming, a null value indicates an absence of value. A null variable doesn’t point to any object. Hence you cannot access any properties 
on the variable or call a method on it.
In TypeScript, the null value is indicated by the ‘null’ keyword. You can check if a value is null as follows:
<pre><code class="language-html hljs xml">function greet(name: string | null) {
 if (name === null) {
  return "Name is not provided";
 } else {
  return "Good morning, " + name.toUpperCase();
 }
}

var foo = null;
greet(foo); <span class="hljs-comment">// Output : "Name is not provided"</span>

foo = "Anders";
greet(foo);  <span class="hljs-comment">// Output : "Good morning, ANDERS"</span></code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>81. What is undefined in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When a variable is declared without initialization, it’s assigned the undefined value. It’s not very useful on its own. A variable is 
undefined if it’s declared, but no value has been assigned to it. In contrast, null is assigned to a variable, and it represents no value. 
<pre><code class="language-html hljs xml">console.log(null == null); // true
console.log(undefined == undefined); // true
console.log(null == undefined); // true, with type-conversion
console.log(null === undefined); // false, without type-conversion
console.log(0 == undefined); // false
console.log('' == undefined); // false
console.log(false == undefined); // false</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>82. Explain the purpose of the never type in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
As the name suggests, the never type represents the type of values that never occur. For example, a function that never returns a 
value or that always throws an exception can mark its return type as never.
<pre><code class="language-html hljs xml">function error(message: string): never {
 throw new Error(message);
}</code></pre>
You might wonder why we need a ‘never’ type when we already have ‘void’. Though both types look similar, they represent two very 
different concepts.<br/><br/>
A function that doesn't return a value implicitly returns the value undefined in JavaScript. Hence, even though we are saying 
it’s not returning anything, it’s returning ‘undefined’. We usually ignore the return value in these cases. Such a function is 
inferred to have a void return type in TypeScript.
<pre><code class="language-html hljs xml">// This function returns undefined
function greet(name: string) {
console.log(`Hello, ${name}`);
}

let greeting = greet("David");
console.log(greeting);  // undefined</code></pre>
In contrast, a function that has a never return type never returns. It doesn't return undefined, either. There are two cases 
where functions should return never type:
<ul>
<li>In an unending loop - <i>Example</i> <code><b>while(true){ }</b></code> type loop.</li>
<li>A function that throws an error - <i>Example</i> <code><b>function foo(){ throw new Exception('Error message'); }</b></code>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>83. Explain how enums work in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Enums allow us to create named constants. It is a simple way to give more friendly names to numeric constant values. An enum 
is defined by the keyword enum, followed by its name and the members.<br/><br/>
Consider the following example that defines an enum Team with four values in it.
<pre><code class="language-html hljs xml">enum Team {
Alpha,
Beta,
Gamma,
Delta
}
let t: Team = Team.Delta;</code></pre>
By default, the enums start the numbering at 0. You can override the default numbering by explicitly assigning the values to its members.<br/><br/>
TypeScript also lets you create enums with string values as follows:
<pre><code class="language-html hljs xml">enum Author {
  Anders = "Anders",
  Hejlsberg = "Hejlsberg"
};</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>84. What is the typeof operator? How is it used in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Similar to JavaScript, the typeof operator in TypeScript returns the type of the operand as a string.
<pre><code class="language-html hljs xml">console.log(typeof 10);  // "number"

console.log(typeof 'foo');  // "string"

console.log(typeof false);  // "boolean"

console.log(typeof bar);  // "undefined"</code></pre>
In TypeScript, you can use the typeof operator in a type context to refer to the type of a property or a variable.
<pre><code class="language-html hljs xml">let greeting = "hello";
let typeOfGreeting: typeof greeting;  <span class="hljs-comment">// similar to let typeOfGreeting: string</span></code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>85. What is parameter destructuring?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Parameter destructing allows a function to unpack the object provided as an argument into one or more local variables.<br/><br/>
Lets consider an Example:
<pre><code class="language-html hljs xml">function multiply({ a, b, c }: { a: number; b: number; c: number }) {
console.log(a * b * c);
}

multiply({ a: 1, b: 2, c: 3 });</code></pre>
The Above example can be remodified by using an interface or a named type, as follows:
<pre><code class="language-html hljs xml">type ABC = { a: number; b: number; c: number };

function multiply({ a, b, c }: ABC) {
console.log(a * b * c);
}

multiply({ a: 1, b: 2, c: 3 });</code></pre>
This is Parameter destructing.
<!-- Answer ::: END -->
</div>
</div>

<div><b>86. Explain the different variants of the for loop in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript provides the following three ways to loop over collections.
<ul>
<li><b>for loop :</b>
<pre><code class="language-html hljs xml">let values = [10, "foo", true];
for(let i=0; i&lt;values.length; i++) {
  console.log(values[i]);  // 10, "foo", true
}</code></pre>
</li>
<li><b>forEach function :</b>
<pre><code class="language-html hljs xml">let values = [10, "foo", true];
values.forEach(val => {
    console.log(val);  // 10, "foo", true
})</code></pre>
</li>
<li><b>for..of statement :</b>
<pre><code class="language-html hljs xml">let values = [10, "foo", true];
for (let val of values) {
console.log(val); // 10, "foo", true
}</code></pre></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>87. Explain the symbol type in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Symbols were introduced in ES6 and are supported by TypeScript. Similar to numbers and strings, symbols are primitive types. 
You can use Symbols to create unique properties for objects.<br/><br/>
You can create symbol values by calling the <code><b>Symbol()</b></code> constructor, optionally providing a string key.
<pre><code class="language-html hljs xml">let foo = Symbol();
let bar = Symbol("bar"); // optional string key</code></pre>
A key characteristic of symbols is that they are unique and immutable.
<pre><code class="language-html hljs xml">let foo = Symbol("foo");
let newFoo = Symbol("foo");

let areEqual = foo === newFoo;
console.log(areEqual);  // false, symbols are unique</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>88. Explain how optional chaining works in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Optional chaining allows you to access properties and call methods on them in a chain-like fashion. You can do this using the ‘?.’ operator.<br/><br/>
TypeScript immediately stops running some expression if it runs into a ‘null’ or ‘undefined’ value and returns ‘undefined’ for the entire expression chain.<br/><br/>
Using optional chaining, the following expression :
<pre><code class="language-html hljs xml">let x = foo === null || foo === undefined ? undefined : foo.bar.baz();</code></pre>
can be expressed as:
<pre><code class="language-html hljs xml">let x = foo?.bar.baz()</code></pre>
This is Optional chaining in Typescript.
<!-- Answer ::: END -->
</div>
</div>

<div><b>89. Provide the TypeScript syntax to create function overloads.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Function overloading allows us to define multiple functions with the same name, as long as their number of parameters or the types of parameters 
are different.<br/><br/>
The following example defines two overloads for the function buildDate. The first overload takes a number as a parameter, whereas the second 
takes three numbers as parameters. These are called overload signatures.<br/><br/>
The body of the function also called an implementation signature, follows the overload signatures. You can’t call this signature directly, as 
it’s not visible from the outside. It should be compatible with the overload signatures.
<pre><code class="language-html hljs xml">function buildDate(timestamp: number): Date;
function buildDate(m: number, d: number, y: number): Date;
function buildDate(mOrTimestamp: number, d?: number, y?: number): Date {
if (d !== undefined && y !== undefined) {
  return new Date(y, mOrTimestamp, d);
} else {
  return new Date(mOrTimestamp);
}
}

const d1 = buildDate(87654321);
const d2 = buildDate(2, 2, 2);</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>90. What is meant by type inference?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript can infer the type of a variable when you don’t provide an explicit type. This is known as type inference. This is usually done when the 
variables or parameters are initialized during the declaration.<br/><br/>
For example, TypeScript knows that the variable foo is a string, even though we don’t mention string as a type.
<pre><code class="language-html hljs xml">let foo = "this is a string";
console.log(typeof foo);  // "string"</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>91. What is meant by contextual typing?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When the TypeScript compiler uses the location (or context) of a variable to infer its type, it’s called contextual typing.
<pre><code class="language-html hljs xml">window.onmousedown = function (e) {
console.log(e.button); // &lt;- OK
console.log(e.foo); // &lt;- Error!
};</code></pre>
In above example, TypeScript uses the Window.onmousedown function type information to infer the type of the function expression on the 
right-hand side of the assignment. This allows it to infer the type of the e parameter, which does have a button property but not a property 
named foo.
<!-- Answer ::: END -->
</div>
</div>

<div><b>92. What is the purpose of noImplicitAny?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Usually, when we don’t provide any type on a variable, TypeScript assumes ‘any’ type. For example, TypeScript compiles the following code, 
assuming the parameter ‘s’ is of any type. It works as long as the caller passes a string.
<pre><code class="language-html hljs xml">function parse(s) {
 console.log(s.split(' '));
}
parse("Hello world");  // ["Hello", "world"]</code></pre>
However, the code breaks down as soon as we pass a number or other type than a string that doesn’t have a <code><b>split()</b></code> method on it. 
For example,
<pre><code class="language-html hljs xml">function parse(s) {
 console.log(s.split(' '));  // [ERR]: s.split is not a function
}
parse(10);</code></pre>
<b>noImplicitAny</b><br/><br/>
<i>noImplicitAny</i> is a compiler option that you set in the tsconfig.json file. It forces the TypeScript compiler to raise an error whenever it 
infers a variable is of any type. This prevents us from accidentally causing similar errors.
<pre><code class="language-html hljs xml">// Parameter 's' implicitly has an 'any' type.(7006)
function parse(s) {
 console.log(s.split(' '));  // [ERR]: s.split is not a function
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>93. What is an interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An interface defines a contract by specifying the type of data an object can have and its operations. In TypeScript, you can specify an object’s 
shape by creating an interface and using it as its type. It’s also called <code><b>"duck typing"</b></code>.<br/><br/>
In TypeScript, you can create and use an interface as follows:
<pre><code class="language-html hljs xml">interface Employee {
name: string;
salary: number;
}

function process(employee: Employee) {
console.log(`${employee.name}'s salary = ${employee.salary}`);
}

let john: Employee = {
name: "John Doe",
salary: 150000
}

process(john);  // "John Doe's salary = 150000"</code></pre>
Interfaces are an effective way to specify contracts within your code as well as outside your code.
<!-- Answer ::: END -->
</div>
</div>

<div><b>94. Explain the various ways to control member visibility in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript provides three keywords to control the visibility of class members, such as properties or methods.
<ul>
<li><b>public :</b> You can access a public member anywhere outside the class. All class members are public by default.</li>
<li><b>protected :</b> A protected member is visible only to the subclasses of the class containing that member. Outside code that doesn’t extend 
the container class can’t access a protected member.</li>
<li><b>private :</b> A private member is only visible inside the class. No outside code can access the private members of a class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>95. Does TypeScript support static classes? If not, why?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript doesn’t support static classes, unlike the popular object-oriented programming languages like C# and Java.<br/><br/>
These languages need static classes because all code, i.e., data and functions, need to be inside a class and cannot exist independently. 
Static classes provide a way to allow these functions without associating them with any objects.<br/><br/>
In TypeScript, you can create any data and functions as simple objects without creating a containing class. Hence TypeScript doesn’t need 
static classes. A singleton class is just a simple object in TypeScript. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>96. What are abstract classes? When should you use one?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Abstract classes are similar to interfaces in that they specify a contract for the objects, and you cannot instantiate them directly. However, 
unlike interfaces, an abstract class may provide implementation details for one or more of its members.<br/><br/>
An abstract class marks one or more of its members as abstract. Any classes that extend an abstract class have to provide an implementation 
for the abstract members of the superclass.
<pre><code class="language-html hljs xml">abstract class Writer {
abstract write(): void;

greet(): void {
  console.log("Hello, there. I am a writer.");
}
}

class FictionWriter extends Writer {
write(): void {
  console.log("Writing a fiction.");
}
}

class RomanceWriter extends Writer {
write(): void {
  console.log("Writing a romance novel.");
}
}

const john = new FictionWriter();
john.greet();  // "Hello, there. I am a writer."
john.write();  // "Writing a fiction."

const mary = new RomanceWriter();
mary.greet();  // "Hello, there. I am a writer."
mary.write();  // "Writing a romance novel."</code></pre>
In an example of an abstract class Writer with two member functions. The write() method is marked as abstract, whereas the <code><b>greet()</b></code> 
method has an implementation. Both the FictionWriter and RomanceWriter classes that extend from Writer have to provide their specific implementation 
for the write method.
<!-- Answer ::: END -->
</div>
</div>


<div><b>97. What are intersection types?.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Intersection types let you combine the members of two or more types by using the ‘&’ operator. This allows you to combine existing types 
to get a single type with all the features you need.<br/><br/>
The following example creates a new type Supervisor that has the members of types Employee and Manager.
<pre><code class="language-html hljs xml">interface Employee {
 work: () => string;
}

interface Manager {
 manage: () => string;
}

type Supervisor = Employee & Manager;

// john can both work and manage
let john: Supervisor;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>98. What are type aliases? How do you create one?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Type aliases give a new, meaningful name for a type. They don’t create new types but create new names that refer to that type.<br/><br/>
For example, you can alias a union type to avoid typing all the types everywhere that value is being used.
<pre><code class="language-html hljs xml">type alphanumeric = string | number;
let value: alphanumeric = "";
value = 10;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>99. Explain how tuple destructuring works in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can destructure tuple elements by using the assignment operator (=). The destructuring variables get the types of the corresponding tuple elements.  
<pre><code class="language-html hljs xml">let employeeRecord: [string, number] = ["John Doe", 50000];
let [emp_name, emp_salary] = employeeRecord;
console.log(`Name: ${emp_name}`);  // "Name: John Doe"
console.log(`Salary: ${emp_salary}`);  // "Salary: 50000"</code></pre>
After destructuring, you can’t assign a value of a different type to the destructured variable. For example,
<pre><code class="language-html hljs xml">emp_name = true;  // Type 'boolean' is not assignable to type 'string'</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>100. How to enforce strict null checks in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Null pointers are one of the most common sources of unexpected runtime errors in programming. TypeScript helps you avoid them to a large 
degree by enforcing strict null checks.<br/><br/>
You can enforce strict null checks in two ways:
<ul>
<li>providing the <code><b>--strictNullChecks</b></code> flag to the TypeScript (tsc) compiler.</li>
<li>setting the <code><b>strictNullChecks</b></code> property to true in the <code><b>tsconfig.json</b></code> configuration file.</li>
</ul>
When the flag is false, TypeScript ignores null and undefined values in the code.<br/>
When the flag is true, null and undefined have their distinct types.<br/>
The compiler throws a type error if you try to use them where a concrete value is expected.
<!-- Answer ::: END -->
</div>
</div>

<div><b>101. How to make object properties immutable (read only) in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can mark object properties as immutable by using the readonly keyword before the property name. For example:
<pre><code class="language-html hljs xml">interface Coordinate {
 readonly x: number;
 readonly y: number;
}</code></pre>
When you mark a property as readonly, it can only be set when you initialize the object. Once the object is created, you cannot change it. 
<pre><code class="language-html hljs xml">let c: Coordinate = { x: 5, y: 15 };
c.x = 20; // Cannot assign to 'x' because it is a read-only property.</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>102. What is a type declaration file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A typical TypeScript project references other third-party TypeScript libraries such as JQuery to perform routine tasks. Having type information 
for the library code helps you in coding by providing detailed information about the types, method signatures, etc., and provides IntelliSense.<br/><br/>
A type declaration file is a text file ending with a .d.ts extension providing a way to declare the existence of some types or values without actually 
providing implementations for those values. It contains the type declarations but doesn’t have any source code. It doesn’t produce a .js file after 
compilation.
<!-- Answer ::: END -->
</div>
</div>


<div><b>103. Explain the purpose of the ‘in’ operator.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The in operator is used to find if a property is in the specified object. It returns true if the property belongs to the object. Otherwise, it returns false.
<pre><code class="language-html hljs xml">const car = { make: 'Hyundai', model: 'Elantra', year: 2017 };
console.log('model' in car);  // true
console.log('test' in car);  // false</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>104. What are the ‘implements’ clauses in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An implements clause is used to check that a class satisfies the contract specified by an interface. If a class implements an interface and doesn’t 
implement that interface, the TypeScript compiler issues an error.
<!-- Answer ::: END -->
</div>
</div>

<div><b>105. What are string literal types?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In TypeScript, you can refer to specific strings and numbers as types.
<pre><code class="language-html hljs xml">let foo: "bar" = "bar";

// OK
foo = "bar";

// Error: Type '"baz"' is not assignable to type '"bar"'.(2322)
foo = "baz";</code></pre>
String literal types on their own are not that useful. However, you can combine them into unions. This allows you to specify all the string values 
that a variable can take, in turn acting like enums. This can be useful for function parameters.
<pre><code class="language-html hljs xml">function greet(name: string, greeting: "hi" | "hello" | "hola") {
// ...
}

greet("John", "hello");

// Error: Argument of type '"Howdy?"' is not assignable to parameter of type '"hi" | "hello" | "hola"'.(2345)
greet("Mary", "Howdy?");</code></pre>
String literal types can help us spell-check the string values.
<!-- Answer ::: END -->
</div>
</div>

<div><b>106. What are template literal types?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Template literal types are similar to the string literal types. You can combine them with concrete, literal types to produce a new string literal 
type. Template literal types allow us to use the string literal types as building blocks to create new string literal types.
<pre><code class="language-html hljs xml">type Point = "GraphPoint";

// type Shape = "Grid GraphPoint"
type Shape = `Grid ${Point}`;</code></pre>
emplate literal types can also expand into multiple strings via unions. It helps us create the set of every possible string literal that each 
union member can represent.
<pre><code class="language-html hljs xml">type Color = "green" | "yellow";
type Quantity = "five" | "six";

// type ItemTwo = "five item" | "six item" | "green item" | "yellow item"
type ItemOne = `${Quantity | Color} item`;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>107. Explain the concept of inheritance in TypeScript.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Inheritance allows a class to extend another class and reuse and modify the behavior defined in the other class. The class which inherits another 
class is called the derived class, and the class getting inherited is called the base class.<br/><br/>
In TypeScript, a class can only extend one class. TypeScript uses the keyword ‘extends’ to specify the relationship between the base class and 
the derived classes.
<!-- Answer ::: END -->
</div>
</div>

<div><b>108. What are conditional types? How do you create them?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A conditional type allows you to dynamically select one of two possible types based on a condition. The condition is expressed as a type relationship test.
<pre><code class="language-html hljs xml">C extends B ? TypeX : TypeY</code></pre>
Here, if type C extends B, the value of the above type is TypeX. Otherwise, it is TypeY
<!-- Answer ::: END -->
</div>
</div>


<div><b>109. What is the Function type in TypeScript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Function is a global type in TypeScript. It has properties like bind, call, and apply, along with the other properties present on all function values.
<pre><code class="language-html hljs xml">function perform(fn: Function) {
 fn(10);
}</code></pre>
You can always call a value of the Function type, and it returns a value of ‘any’ type.
<!-- Answer ::: END -->
</div>
</div>

<div><b>110. List some of the utility types provided by TypeScript and explain their usage.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript provides various utility types that make common type transformations easy. These utility types are available globally. Here are some of 
the essential utility types included in TypeScript.
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Utility Type</th><th>Description</th></tr></thead>
<tbody>
 <tr>
  <td>Partial&lt;Type&gt;</td>
  <td>Constructs a type with all properties of Type set to optional.</td>
 </tr>
 <tr>
  <td>Required&lt;Type&gt;</td>
  <td>Constructs a type consisting of all properties of Type set to required.</td>
 </tr>
 <tr>
  <td>Readonly&lt;Type&gt;</td>
  <td>Constructs a type with all properties of Type set to readonly.</td>
 </tr>
 <tr>
  <td>Record&lt;Keys, Type&gt;</td>
  <td>Constructs an object type with property keys are of type Keys, and values are Type.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>111. What is Typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TypeScript is a typed superset of JavaScript created by Microsoft that adds optional types, classes, async/await, and many other features, and 
compiles to plain JavaScript. Angular built entirely in TypeScript and used as a primary language. You can install it globally as
<pre><code class="language-html hljs xml">npm install -g typescript</code></pre>
Let's see a simple example of TypeScript usage,
<pre><code class="language-html hljs xml">function greeting(name: string): string {
   return "Hello, " + name;
}

let user = "Sudheer";

console.log(greeting(user));</code></pre>
The greeting method allows only string type as argument.
<!-- Answer ::: END -->
</div>
</div>

<div><b>112. What are the advantages of typescript over javascript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Below are some of the advantages of typescript over javascript :
<ul>
<li>TypeScript is able to find compile time errors at the development time only and it makes sures less runtime errors. Whereas javascript is an 
interpreted language.</li>
<li>TypeScript is strongly-typed or supports static typing which allows for checking type correctness at compile time. This is not available in javascript.</li>
<li>TypeScript compiler can compile the .ts files into ES3,ES4 and ES5 unlike ES6 features of javascript which may not be supported in some browsers.</li>
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