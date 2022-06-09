
<div><b>2. What is Reflection?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In computer programming, <code><b>Reflection</b></code> is the ability of a program to manipulate variables, properties, 
and methods of objects at runtime.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. Explain about Reflect in ES6.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
ES6 introduces a new global object called <code><b>Reflect</b></code> that allows you to call methods, construct objects, get and set properties, manipulate 
and extend properties.<br/><br/>
The <code><b>Reflect API</b></code> is important because it allows you to develop programs and frameworks that are able to handle dynamic code.<br/><br/>

<b>About Reflect (Global Object)</b><br/><br/>
<ul>
<li>All properties and methods of Reflect are static. Therefore, it cannot use with a <code><b>new</b></code> operator and it won't have Constructor.</li>
</ul>
<b>The Static Methods of Reflect  (Global Object)</b><br/><br/>
<ol>
<li><b>Reflect.apply() –</b> call a function with specified arguments.<br/><br/></li>
<li><b>Reflect.construct() –</b> act like the <code><b>new</b></code> operator, but as a function.<br/><br/></li>
<li><b>Reflect.defineProperty() –</b> return a Boolean value indicating whether or not the property was successfully defined on the object.<br/><br/></li>
<li><b>Reflect.deleteProperty() –</b> behave like the <code><b>delete</b></code> operator, but as a function.<br/><br/></li>
<li><b>Reflect.get() –</b> return the value of a property.<br/><br/></li>
<li><b>Reflect.getOwnPropertyDescriptor() –</b> returns a property descriptor of a property if the property exists on the object, or undefined otherwise.<br/><br/></li>
<li><b>Reflect.getPrototypeOf() –</b> is the same as <code><b>Object.getPrototypeOf()</b></code>.<br/><br/></li>
<li><b>Reflect.has() –</b> work like the <code><b>in</b></code> operator, but as a function. It returns a boolean indicating whether an property 
(either owned or inherited) exists.<br/><br/></li>
<li><b>Reflect.isExtensible() –</b> is the same as <code><b>Object.isExtensible()</b></code>.<br/><br/></li>
<li><b>Reflect.ownKeys() –</b> return an array of the owned property keys (not inherited) of an object.<br/><br/></li>
<li><b>Reflect.preventExtensions() –</b> is similar to <code><b>Object.preventExtensions()</b></code>. It returns a Boolean.<br/><br/></li>
<li><b>Reflect.set() –</b> assign a value to a property and return a Boolean value which is true if the property is set successfully.<br/><br/></li>
<li><b>Reflect.setPrototypeOf() –</b> set the prototype of an object.</li>
</ol>

<!-- Answer ::: END -->
</div>
</div>

<div><b>4. Difference between Proxy and Reflect in ES6</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Reflect and Proxy have completely different purposes and different capabilities.<br/><br/>
<b>Proxy</b> object is used to define custom behavior for fundamental operations (e.g. property lookup, assignment, 
enumeration, function invocation, etc).<br/><br/>
<b>Reflect</b> is a built-in object that provides access to other methods for interceptable JavaScript operations (operations that preventing in reaching 
their destination).
<!-- Answer ::: END -->
</div>
</div>

<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>