
<div class="appQuestion"><b>87. What is the Serialization?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Serialization is a process converting an object into a byte array. This byte array represents the class, version and internal state of the object. 
JVM can use this byte array to transmit/read the object overa network.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>88. What is the purpose of Serialization?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the uses of serialization are:
<ol>
<li><b>Communication : </b> It is used for transmitting an object overnetwork between two machines.</li>
<li><b>Persistence :</b> We can store the object’s state in a database and retrieve it from database later on.</li>
<li><b>Caching :</b> Serialization can be used for caching to improve performance. We may need 10 minutes to build an object, but it may take just 10 seconds 
to de-serialize the object.</li>
<li><b>Cross JVM Synchronization :</b> It can be used in same wayacross multiple JVM that follow different architecture.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>89. What is Deserialization?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Deserialization is the process of reconstructing the object from theserialized state. It is the reverse process of serialization.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>90. What is Serialization and Deserialization conceptually?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Serialization is to convert Object data into a stream of bytes.<br/><br/> 
Deserialization is to convert a stream of bytes back into a copy ofthe original object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>91. Why do we mark a data member transient?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Member variables of an object are marked transient to indicate that they should not be serialized.<br/><br/> 
During serialization process the transient variables are not considered part of the persistent state of an object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>92. Is it allowed to mark a method as transient?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, Java does not allow marking a method as transient. Thetransient keyword is valid only for member variables.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>93. How does marking a field as transient makes it possible to serialize an object?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Let say we have a class ABC that implements Serializable interface, but it contains a member variable object of class XYZ that does not implement 
Serializable interface. Due to this it is not possible to Serialize the class ABC.<br/><br/> 
To solve this issue, we can mark the member variable XYZ as Transient in class ABC. This will allow us to serialize the class ABC.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>94. What is Externalizable interface in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Externalizable interface extends Serializable interface in Java. It is used for giving the Class control over saving and restoring the contents of its 
instances.<br/><br/> A class implements methods <code><b>writeExternal()</b></code> and <code><b>readExternal()</b></code> to store and restore the object.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>95. What is the difference between Serializable and Externalizable interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<ul>
<li>Serializable is a marker interface but Externalizable is not a marker interface.</li>
When we implement Serializable interface, the class is serialized automatically by default. We can override <code><b>writeObject()</b></code> and 
<code><b>readObject()</b></code> methods to control more complex object Serialization process.</li>
<li>In case of Externalizable, we use readExternal() and writeExternal() methods to give control to class for class's serialization process.</li>
<li>Serializable interface is based on recursive algorithm.</li>
<li>Serializable gives you two options -
One option is to provide custom way of serialization, the other default way.<br/> 
In Externalizable, youhave to always implement <code><b>readExternal()</b></code> and <code><b>writeExternal()</b></code> methods.</li>
<li>A public no-arg constructor is needed while using Externalizable interface.</li>
<li>In Serialization, we need to define serialVersionUID. If it is not explicitly defined it will be generated automatically based on all the fields, 
methods of the class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>
