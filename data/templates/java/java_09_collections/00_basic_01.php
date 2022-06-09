<div><b>1. What are the basic interfaces of Java Collections Framework?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Java Collections Framework</b></code> provides a well designed set of interfaces and classes that support operations on a collections of 
objects. The most basic interfaces that reside in the Java Collections Framework are:
<ul>
<li><code><b>Collection</b></code>, which represents a group of objects known as its elements.</li>
<li><code><b>Set</b></code>, which is a collection that cannot contain duplicate elements</li>
<li><code><b>List</b></code>, which is an ordered collection and can contain duplicate elements.</li>
<li><code><b>Map</b></code>, which is an object that maps keys to values and cannot contain duplicate keys.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. Why Collection doesn’t extend Cloneable and Serializable interfaces?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>Collection</b></code> interface specifies groups of objects known as elements. Each concrete implementation of a Collection can choose 
its own way of how to maintain and order its elements. Some collections allow duplicate keys, while some other collections don’t. 
The semantics and the implications of either cloning or serialization come into play when dealing with actual implementations. 
Thus, the concrete implementations of collections should decide how they can be cloned or serialized.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is an Iterator?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>Iterator</b></code> interface provides a number of methods that are able to iterate over any Collection. Each Java 
<code><b>Collection</b></code> contains the iterator method that returns an Iterator instance. Iterators are capable of removing elements from the 
underlying collection during the iteration.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What differences exist between Iterator and ListIterator?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The differences of these elements are listed below:
<ul>
<li>An <code><b>Iterator</b></code> can be used to traverse the <code><b>Set</b></code> and <code><b>List</b></code> collections, while the 
<code><b>ListIterator</b></code> can be used to iterate only over <code><b>List</b></code></li>
<li>The <code><b>Iterator</b></code> can traverse a collection only in forward direction, while the <code><b>ListIterator</b></code> can traverse a 
<code><b>List</b></code> in both directions.</li>
<li>The <code><b>ListIterator</b></code> implements the <code><b>Iterator</b></code> interface and contains extra functionality, such as adding an 
element, replacing an element, getting the index position for previous and next elements, etc.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What is difference between fail-fast and fail-safe?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>Iterator</b></code>’s fail-safe property works with the clone of the underlying collection and thus, it is not affected by any modification 
in the collection. All the collection classes in <code><b>java.util package</b></code> are fail-fast, while the collection classes in 
<code><b>java.util.concurrent</b></code> are fail-safe. Fail-fast iterators throw a <code><b>ConcurrentModificationException</b></code>, while fail-safe 
iterator never throws such an exception.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. How HashMap works in Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A <code><b>HashMap</b></code> in Java stores <code><b>key-value</b></code> pairs. The HashMap requires a hash function and uses <code><b>hashCode</b></code> 
and equals methods, in order to put and retrieve elements to and from the collection respectively. When the put method is invoked, the <code><b>HashMap</b></code>
calculates the hash value of the key and stores the pair in the appropriate index inside the collection. If the key exists, its value
is updated with the new value. Some important characteristics of a <code><b>HashMap</b></code> are its capacity, its load factor and the threshold
resizing.

<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What is the importance of hashCode() and equals() methods?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In Java, a <code><b>HashMap</b></code> uses the <code><b>hashCode</B></code> and <code><b>equals</b></code> methods to determine the index of the 
key-value pair and to detect duplicates.
More specifically, the <code><b>hashCode</b></code> method is used in order to determine where the specified key will be stored. Since different keys 
may produce the same hash value, the <code><b>equals</b></code> method is used, in order to determine whether the specified key actually exists in 
the collection or not. Therefore, the implementation of both methods is crucial to the accuracy and efficiency of the <code><b>HashMap</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What differences exist between HashMap and Hashtable?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Both the <code><b>HashMap</b></code> and <code><b>Hashtable</b></code> classes implement the Map interface and thus, have very similar characteristics. 
However, they differ in the following features:
<ul>
<li>A <code><b>HashMap</b></code> allows the existence of null keys and values, while a <code><b>Hashtable</b></code> doesn’t allow neither null keys, 
nor null values.</li>
<li>A <code><b>Hashtable</b></code> is synchronized, while a <code><b>HashMap</b></code> is not. Thus, <code><b>HashMap</b></code> is preferred in 
single-threaded environments, while a <code><b>Hashtable</b></code> is suitable for multi-threaded environments.</li>
<li>A <code><b>HashMap</b></code> provides its set of keys and a Java application can iterate over them. Thus, a <code><b>HashMap</b></code> is 
fail-fast. On the other hand, a Hashtable provides an <code><b>Enumeration</b></code> of its keys.</li>
<li>The <code><b>Hashtable</b></code> class is considered to be a legacy class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is difference between Array and ArrayList ? When will you use Array over ArrayList?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>Array</b></code> and <code><b>ArrayList</b></code> classes differ on the following features:
<ul>
<li><code><b>Arrays</b></code> can contain primitive or objects, while an <code><b>ArrayList</b></code> can contain only objects.</li>
<li><code><b>Arrays</b></code> have fixed size, while an <code><b>ArrayList</b></code> is dynamic.</li>
<li>An <code><b>ArrayList</b></code> provides more methods and features, such as <code><b>addAll</b></code>, <code><b>removeAll</b></code>, 
<code><b>iterator</b></code>, etc</li>
<li>For a list of primitive data types, the collections use autoboxing to reduce the coding effort. However, this approach makes 
them slower when working on fixed size primitive data types.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is difference between ArrayList and LinkedList?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Both the <code><b>ArrayList</b></code> and <code><b>LinkedList</b></code> classes implement the List interface, but they differ on the following features:
<ul>
<li>An <code><b>ArrayList</b></code> is an index based data structure backed by an <code><b>Array</b></code>. It provides random access to its elements  
with a performance equal to O(1). On the other hand, a <code><b>LinkedList</b></code> stores its data as list of elements and every element is linked 
to its previous and next element. In this case, the search operation for an element has execution time equal to O(n).
</li>
<li>The Insertion, addition and removal operations of an element are faster in a <code><b>LinkedList</b></code> compared to an <code><b>ArrayList</b></code>, 
because there is no need of resizing an array or updating the index when an element is added in some arbitrary position inside the collection.</li>
<li>A <code><b>LinkedList</b></code> consumes more memory than an <code><b>ArrayList</b></code>, because every node in a <code><b>LinkedList</b></code> stores 
two references, one for its previous element and one for its next element.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What is Comparable and Comparator interface ? List their differences.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Java provides the <code><b>Comparable</b></code> interface, which contains only one method, called <code><b>compareTo</b></code>. This method compares 
two objects, in order to impose an order between them. Specifically, it returns a negative integer, zero, or a positive integer to indicate that the 
input object is less than, equal or greater than the existing object. Java provides the <code><b>Comparator</b></code> interface, which contains two 
methods, called <code><b>compare</b></code> and <code><b>equals</b></code>. The first method compares its two input arguments and imposes an order between  
them. It returns a negative integer, zero, or a positive integer to indicate that the first argument is less than, equal to, or greater than 
the second. The second method requires an object as a parameter and aims to decide whether the input object is equal to the 
comparator. The method returns true, only if the specified object is also a comparator and it imposes the same ordering as the comparator.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. What is Java Priority Queue?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>PriorityQueue</b></code> is an unbounded queue, based on a priority heap and its elements are ordered in their natural order. At the time 
of its creation, we can provide a Comparator that is responsible for ordering the elements of the <code><b>PriorityQueue</b></code>. A 
<code><b>PriorityQueue</b></code> doesn’t allow <code><b>null</b></code> values, those objects that doesn’t provide natural ordering, or those objects 
that don’t have any comparator associated with them. Finally, the Java <code><b>PriorityQueue</b></code> is not thread-safe and it requires O(log(n)) 
time for its enqueing and dequeing operations.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. What do you know about the big-O notation and can you give some examples with respect to different data structures?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The Big-O notation simply describes how well an algorithm scales or performs in the worst case scenario as the number of elements in a data structure 
increases. The Big-O notation can also be used to describe other behavior such as memory consumption.<br/><br/> 
Since the collection classes are actually data structures, we usually use the Big-O notation to chose the best implementation to use, based on time, 
memory and performance. Big-O notation can give a good indication about performance for large amounts of data
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is the tradeoff between using an unordered array versus an ordered array?
</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The major advantage of an ordered array is that the search times have time complexity of O(log n), compared to that of an 
unordered array, which is O (n). The disadvantage of an ordered array is that the insertion operation has a time complexity of 
O(n), because the elements with higher values must be moved to make room for the new element. Instead, the insertion operation 
for an unordered array takes constant time of O(1).
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What are some of the best practices relating to the Java Collection framework?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Choosing the right type of the collection to use, based on the application’s needs, is very crucial for its performance. For
example if the size of the elements is fixed and know a priority, we shall use an <code><b>Array</b></code>, instead of an <code><b>ArrayList</b></code>.</li>
<li>Some collection classes allow us to specify their initial capacity. Thus, if we have an estimation on the number of elements
that will be stored, we can use it to avoid rehashing or resizing.</li>
<li>Always use Generics for type-safety, readability, and robustness. Also, by using Generics you avoid the <code><b>ClassCastException</b></code>
during runtime.</li>
<li>Use immutable classes provided by the Java Development Kit (JDK) as a key in a Map, in order to avoid the implementation
of the <code><b>hashCode</b></code> and equals methods for our custom class.</li>
<li>Program in terms of interface not implementation.</li>
<li>Return zero-length collections or arrays as opposed to returning a null in case the underlying collection is actually empty.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. What’s the difference between Enumeration and Iterator interfaces?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>Enumeration</b></code> is twice as fast as compared to an <code><b>Iterator</b></code> and uses very less memory. However, the Iterator is much 
safer compared to Enumeration, because other threads are not able to modify the collection object that is currently traversed by the iterator. Also, 
Iteratorsallow the caller to remove elements from the underlying collection, something which is not possible with Enumerations.
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. What is the difference between HashSet and TreeSet?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>HashSet</b></code> is Implemented using a hash table and thus, its elements are not ordered. The add, remove, and contains methods of 
a HashSet have constant time complexity O(1). On the other hand, a <code><b>TreeSet</b></code> is implemented using a tree structure. The elements 
in a TreeSet are sorted, and thus, the add, remove, and contains methods have time complexity of O(logn).
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. What is collections framework?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A framework is set of classes and interfaces to build a functionality. Java collections framework provides 
set of interfaces and classes for storing and manipulating collections. Collection framework contains 
classes and interfaces in java.util package and java.util.concurrent packages.<br/><br/>
<b>Advantages or benefits of Collections framework :</b><br/><br/>
<ol>
<li>High performance</li>
<li>Using this framework we can create different types of collections.</li>
<li>We can create our own collection and we can extend a collection.</li>
<li>Reduces programming effort.</li>
<li><b>Increases speed and quality :</b> Collections framework provides high performance, implementations of useful data structures and algorithms.</li>
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. What is collection?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A collection is a container which holds group of objects. Collection provides a way to manage objects easily. Collections manages group of objects as 
single unit.<br/><br/>
<b>Examples</b> include list of strings, integers etc.<br/><br/>
Here are few basic operations we do on collections :<br/><br/>
<ol>
<li>Adding objects to collection.</li>
<li>Removing or deleting objects from collection.</li>
<li>Retrieving object from collection.</li>
<li>Iterating collection.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. Difference between collection, Collection and Collections in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>collection :</b> represent group of objects where objects are stored.</li>
<li><b>Collection :</b> This is one of the core interface which provides basic functionality for collection.</li>
<li><b>Collections :</b> Collections contains some utility static methods that operate on collections.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. Explain about Collection interface in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Collection is the fundamental and root interface in Collections framework. Collection extends Iterable interface and inherits iterator method which 
returns Iterator object.<br/><br/>
<b>Syntax :</b>
<pre><code class="language-html hljs xml">public interface Collection<E> extends Iterable<E> {
 // ...
}</code></pre>
<b>Methods in Collection interface :</b>
<div class="table-responsive">          
<table class="table">
<tbody>
 <tr>
  <td>boolean add(E e);</td>
  <td>Adds an element to the collection. Returns true if element is added.</td>
 </tr>
 <tr>
  <td>boolean remove(Object o);</td>
  <td>Removes an object from collection if that object is present in collection. Return true if matching object is removed from collection.</td>
 </tr>
 <tr>
  <td>boolean addAll(Collection&lt;? extends E&gt; c);</td>
  <td>Adds all the elements specified in the collection to this collection.Returns true if all elements are added.</td>
 </tr>
 <tr>
  <td>boolean removeAll(Collection&lt;?&gt; c);</td>
  <td>Removes all the elements from this collection that are specified in other collection.Returns true if all the elements are removed.</td>
 </tr>
 <tr>
  <td>int size();</td>
  <td>Returns number of elements in collection.</td>
 </tr>
 <tr>
  <td>boolean isEmpty();</td>
  <td>Checks whether collection contains elements or not. If no elements are present it returns false.</td>
 </tr>
 <tr>
  <td>boolean contains(Object o);</td>
  <td>Checks whether specified object is in collection or not. Return true if object is in collection.</td>
 </tr>
 <tr>
  <td>Iterator&lt;E&gt; iterator();</td>
  <td>Used to iterator over collection. No guarantee on order of elements iterated.</td>
 </tr>
 <tr>
  <td>boolean retainAll(Collection&lt;?&gt; c);</td>
  <td>Removes all the elements which are not in specified collection. Returns only elements specified in collection removing other elements.</td>
 </tr>
 <tr>
  <td>Object[] toArray();</td>
  <td>Returns an array of elements in collection.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. List the interfaces which extends collection interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>List</li>
<li>Set</li>
<li>Queue</li>
<li>Deque ( From Java 6)</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. Explain List interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
List interface extends collection interface used to store sequence of elements in collection.<br/><br/>
We can even store duplicate elements in list.<br/><br/>
We can insert or access elements in list by using index as we do in arrays.<br/><br/>
List is an ordered collection.<br/><br/>
The main difference between List and non list interface are methods based on position.<br/><br/>
Some of the operations we can perform on List :<br/><br/>
<ol>
<li>Adding an element at specified index.</li>
<li>Removing an element at specified index.</li>
<li>To get the index of element.</li>
</ol>
List contains some specific methods apart from Collection interface methods.
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. Explain methods specific to List interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Method</th><th>Method Description</th></tr></thead>
<tbody>
 <tr>
  <td>boolean addAll(int index, Collection&lt;? extends E&gt; c);</td>
  <td>This method inserts all the elements in specified collection to the list at specified position.</td>
 </tr>
 <tr>
  <td>E get(int index);</td>
  <td>This method returns an element at specified position in the list.</td>
 </tr>
 <tr>
  <td>E set(int index, E element);</td>
  <td>This method replaces the element at specified position in the list with the specified element.</td>
 </tr>
 <tr>
  <td>void add(int index, E element);</td>
  <td>This method inserts the specified element with the index specified.</td>
 </tr>
 <tr>
  <td>E remove(int index);</td>
  <td>This method removes the element at specified index and returns the element removed.</td>
 </tr>
 <tr>
  <td>int indexOf(Object o);</td>
  <td><code><b>indexOf()</b></code> method returns the index of last occurrence of specified element. If there is no element in the list it 
  removes the element.</td>
 </tr>
 <tr>
  <td>ListIterator&lt;E&gt; listIterator();</td>
  <td>Returns a list iterator of elements in list.</td>
 </tr>
 <tr>
  <td>List&lt;E&gt; subList(int fromIndex, int toIndex);</td>
  <td>This method returns list of elements between indexes specified.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>25. List implementations of List Interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>ArrayList</li>
<li>Vector</li>
<li>LinkedList</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. Explain about ArrayList?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
ArrayList is an ordered collection which extends AbstractList and implements List interface.<br/><br/>
We use ArrayList mainly when we need faster access and fast iteration of elements in list.<br/><br/>
We can insert nulls in to arraylist.<br/><br/>
Arraylist is nothing but a growable array.<br/><br/>
<pre><code class="language-html hljs xml">public class ArrayList&lt;E&gt; extends AbstractList&lt;E&gt; implements List&lt;E&gt;, RandomAccess, Cloneable, java.io.Serializable{ 
 // ...
}</code></pre>
From java 1.4 ArrayList implements RandomAccess interface which is a marker interface which supports
fast and random access.<br/><br/>
<b>Advantages :</b><br/><br/>
<ol>
<li>Faster and easier access.</li>
<li>Used for Random access of elements.</li>
</ol>
<b>Drawbacks :</b><br/><br/>
<ol>
<li>We cannot insert or delete elements from middle of list.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. Difference between Array and ArrayList ?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Arrays are used to store primitives or objects of same type or variables that are subclasses of same type.<br/><br/>
<b>ArrayList :</b> It is an ordered collection which grows dynamically.<br/><br/>
In list we can insert nulls values and list allows duplicate elements.<br/><br/>
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Array</th><th>ArrayList</th></tr></thead>
<tbody>
 <tr>
  <td>While creating array we have to know the size.</td>
  <td>But it is not required to know size while creating ArrayList, because arraylist grows dynamically.</td>
 </tr>
 <tr>
  <td>To put an element in to array we use the following syntax :
<pre><code class="language-html hljs xml">String array[] = newString[5];
array[1] = "java";</code></pre>
  We must know specific location to insert an element in to array. If we try to put element in index which is out of range we get ArrayIndexOutOfBoundsException.</td>
  <td>We can add element to arraylist with following syntax :
<pre><code class="language-html hljs xml">List<String> stringList = new ArrayList<String>();
stringList.add(“java”);</code></pre></td>
 </tr>
 <tr>
  <td>Arrays are static.</td>
  <td>ArrayList is dynamic.</td>
 </tr>
 <tr>
  <td>We can store objects and primitives.</td>
  <td>We can store only primitives prior to 1.5 . From 1.5 we can store even objects also.</td>
 </tr>
 <tr>
  <td>We have to manually write logic for inserting and removing elements.</td>
  <td>Just a method call would add or remove elements from list.</td>
 </tr>
 <tr>
  <td>Arrays are faster.</td>
  <td>Arraylist is slower.</td>
 </tr>
 <tr>
  <td></td>
  <td>Arraylist is implemented using arrays.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>


<div><b>28. What is vector?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Vector is similar to arraylist used for random access.
Vector is a dynamic array like arraylist.
vector size increases or decreases when elements are added and removed .
Vector is synchronized .
vector and Hashtable are the only collections since 1.0.
Rest of the collections are added from 2.0.
<pre><code class="language-html hljs xml">public class Vector&lt;E&gt; extends AbstractList&lt;E&gt; implements List&lt;E&gt;, RandomAccess, Cloneable, java.io.Serializable {
 // ...	
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>29. Difference between arraylist and vector?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Both ArrayList and vector grows dynamically. The differences between arraylist and vector are :<br/><br/>
<ol>
<li>Arraylist is not synchronized and vector is synchronized.</li>
<li>Vector is legacy collection introduced in 1.0 and Arraylist introduced in java 2.0.</li>
</ol>
Performance wise it is recommended to use arraylist rather than vector because by default vector is
synchronized which reduces performance if only one thread accesses it.
<!-- Answer ::: END -->
</div>
</div>


<div><b>30. Define Linked List and its features with signature?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Linked list is used for storing a collection of objects that allows efficient addition and removal of elements 
in the middle of the collection.<br/><br/>
The main drawback with arrays is if we want to insert an element in the middle of the list we need to 
move each element to next position and insert the element. Similarly with remove if we want to remove 
an element we need to remove the element and move the list of elements.<br/><br/>
But with linked list we can insert and delete in the middle of the list efficiently by just updating the 
neighbouring node reference.<br/><br/>
Linked list class is in java.util package.<br/><br/>
Linked List class extends class extends AbstractSequentialList and Implements List, Deque, Cloneable and Serializable.<br/>
<pre><code class="language-html hljs xml">public class LinkedList&lt;E&gt; extends AbstractSequentialList&lt;E&gt; implements List&lt;E&gt;, Deque&lt;E&gt;, Cloneable, java.io.Serializable {
 // ...
}</code></pre>
<b>Important methods specific to LinkedList class :</b><br/><br/>
<ol>
<li><b>public E getFirst() :</b><br/><br/>
getFirst() will returns the first element in the list.</li>
<li><b>public E getLast() :</b><br/><br/>
getLast() returns the last element in the list.</li>
<li><b>public E removeFirst() :</b><br/><br/>
removeFirst() method removes the first element in the list.</li>
<li><b>public E removeLast() :</b><br/><br/>
removeLast() method removes the last element in the list.</li>
<li><b>public void addFirst(E e) :</b><br/><br/>
Inserts the element at beginning of the list.</li>
<li><b>public void addLast(E e) :</b><br/><br/>
Inserts the element at end of the list.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>31. Define Iterator and methods in Iterator?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we want to iterate through all the elements in collection we use Iterator. Iterator is a standard way to access elements one by one in collection. 
Iterator is an object associated with collection used to loop through the collection.<br/><br/>
<b>Steps for accessing elements in Iterator :</b><br/><br/>
<ol>
<li>Obtain Iterator object by calling iterator() method on collection.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">ArrayList <String> al=new ArrayList<String>();
Iterator itr=al.iterator();</code></pre></li>
<li>Call hasNext() method on iterator object in loop as long as hasNext() returns true.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">while(itr.hasNext()) {
 // ...
}</code></pre></li>
<li>Get each element by calling next() inside the loop.<br/><br/>
<b>Example :</b>
<pre><code class="language-html hljs xml">while(itr.hasNext()) {
 String str=itr.next();
}</code></pre></li>
</ol>
<b>Methods in iterator :</b>
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Method</th><th>Description</th></tr></thead>
<tbody>
 <tr>
  <td>boolean hasNext();</td>
  <td>This method returns true if there is next element.hasNext() points to position before first lement.If there are any elements if will return true.</td>
 </tr>
 <tr>
  <td>E next();</td>
  <td>Returns the next element in the iteration. . If there are no elements in the Iteration NoSuchElementException is thrown. next() will move the pointer 
  to next position and returns the element.</td>
 </tr>
 <tr>
  <td>void remove();</td>
  <td>Removes the element.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>
<b>Note :</b> If we call <code><b>next()</b></code> on last element it will throw <code><b>java.util.NoSuchElementException</b></code>. So before calling
<code><b>next()</b></code> first we should call <code><b>hasNext()</b></code> whether it has elements or not. If there is next element we can call
<code><b>next()</b></code>  so that we can avoid exception.
<div><b></b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>


<div><b>32. In which order the Iterator iterates over collection?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The order in which Iterator will iterate the collection depends on the traversal order of collection.<br/><br/>
<b>For example :</b><br/> for list traversal order will be sequential, and for set the order cannot be determined, and
for sorted sorted set will sort the elements in sorted order.<br/><br/>
So it all depends on the collection in which order iterator iterates.
<!-- Answer ::: END -->
</div>
</div>


<div><b>33. Explain ListIterator and methods in ListIterator?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
List Iterator is similar to Iterator but ListIterator is bidirectional.<br/><br/>
We can traverse through the collection in either forward or backward direction.<br/><br/>
List Iterator extends Iterator and all the methods in Iterator will be there in ListIterator too with some
additional methods.<br/><br/>
List Iterator doesn’t have current element .Position of List Iterator lies between two elements i.e previous
element and next element.<br/><br/>
<b>Features of ListIterator :</b><br/><br/>
<ol>
<li>Traversal of List in either direction.</li>
<li>Modification of its elements.</li>
<li>Access to elements position.</li>
</ol>
<pre><code class="language-html hljs xml">public interface ListIterator&lt;E&gt; extends Iterator&lt;E&gt; {
 // ...
}</code></pre>
<b>ListIterator methods :</b>
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Method</th><th>Description</th></tr></thead>
<tbody>
 <tr>
  <td>Void add(E obj)</td>
  <td>Inserts element in to the list infront of the element returned by call to next() and after the element returned by call to next().</td>
 </tr>
 <tr>
  <td>boolean hasNext();</td>
  <td>Returns true if there are more elements in the list instead of throwing exception if there are no elements.</td>
 </tr>
 <tr>
  <td>E next();</td>
  <td>Returns the next element . NoSuchElementException is thrown if there is no next element.</td>
 </tr>
 <tr>
  <td>boolean hasPrevious();</td>
  <td>Returns true if there are elements when iterating list in reverse direction.</td>
 </tr>
 <tr>
  <td>E previous();</td>
  <td>Returns the previous element in the list.</td>
 </tr>
 <tr>
  <td>int nextIndex();</td>
  <td>Returns the index of the element returned by next() method. If there are no elements it returns the size of the list.</td>
 </tr>
 <tr>
  <td>int previousIndex();</td>
  <td>Returns the index of the element returned by previous() method. If there are no elements it returns the size of the list. Returns -1 if the iterator is at beginning of list.</td>
 </tr>
 <tr>
  <td>void remove();</td>
  <td>Removes the element that was returned by calling next() or previous(). An Illegal state Exception will be thrown if remove() is called before next() or previous().</td>
 </tr>
 <tr>
  <td>void set(E e);</td>
  <td>This method replaces an element in the list with the specified element.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>


<div><b>34. Explain about Sets?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A set is a collection which does not allow duplicates. Set internally implements <code><b>equals()</b></code> method which 
doesn’t allow duplicates.Adding an duplicate element to a set would be ignored .Set interface is 
implemented in java.util.set package.Set interface does not have any additional methods . It has only 
collection methods. A set can contain atmost one null value.<br/><br/>
ArrayList is an ordered collection.In arraylists order remains same in which they are inserted. But coming
to set it is an unordered collection.<br/><br/>
<pre><code class="language-html hljs xml">public interface Set&lt;E&gt; extends Collection&lt;E&gt; {
 // ...
}</code></pre>
<b>Important operations that can be performed on set :</b><br/><br/>
<ol>
<li>Adding an element to set.</li>
<li>Removing an element from set.</li>
<li>Check if an element exist in set.</li>
<li>Iterating through set.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>35. Implementations of Set interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>HashSet</li>
<li>Linked HashSet</li>
<li>TreeSet</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>36. Explain HashSet and its features?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Hashset implements set interface and extends AbstractSet.<br/><br/>
<b>Features of Hashset :</b><br/><br/>
<ol>
<li>It does not allow duplicates.</li>
<li>It does not gurantee ordering of elements.</li>
<li>It is unsorted and unordered set.</li>
<li>Performance wise it is recommended to use hashset when compared to other sets because it internally uses hashing mechanism.</li>
<li>Allows insertion of nulls.</li>
</ol>
<b>Note :</b> For efficiency whenever objects are added to HashSet it need to implement the <code><b>hashCode()</b></code> method.
<pre><code class="language-html hljs xml">public class HashSet&lt;E&gt; extends AbstractSet&lt;E&gt; implements Set&lt;E&gt;, Cloneable, java.io.Serializable {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>37. Explain Tree Set and its features?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
TreeSet implements navigableSet interface and extends Abstract set.It creates collection that uses tree for storage.<br/><br/>
<b>Features of Treeset :</b><br/><br/>
<ol>
<li>It does not allow duplicates.</li>
<li>When we retrieve the elements in treeset we will get elements in sorted order.</li>
</ol>
<pre><code class="language-html hljs xml">public class TreeSet&lt;E&gt; extends AbstractSet&lt;E&gt; implements NavigableSet&lt;E&gt;, Cloneable, java.io.Serializable {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>38. When do we use HashSet over TreeSet?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we want to search for an element in collection and does not want any sorting order we go for HashSet.<br/><br/>
TreeSet is preferred :<br/><br/>
<ol>
<li>If elements are to be maintained in sorting order.</li>
<li>Fast insertion and retrieval of elements.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>39. What is Linked HashSet and its features?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
LinkedHashSet extends HashSet and implements Set interface.
<pre><code class="language-html hljs xml">public class LinkedHashSet&lt;E&gt; extends HashSet&lt;E&gt; implements Set&lt;E&gt;, Cloneable, java.io.Serializable {
 // ...
}</code></pre>
Linked HashSet is similar to HashSet but in linked HashSet we maintain order but in HashSet we don’t
maintain order. Maintaining order means elements will be retrieved in order which they are inserted.
<!-- Answer ::: END -->
</div>
</div>


<div><b>40. Explain about Map interface in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A map is an association of key-value pairs. Both keys and values in map are objects.<br/><br/>
<b>Features of map :</b><br/><br/>
<ol>
<li>Maps cannot have duplicate keys but can have duplicate value objects.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>41. What is linked hashmap and its features?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
LinkedHashMap extends HashMap and implements Map.lLinked hashmap gurantees order of elements.<br/><br/>
Elements are retrieved in same order they are inserted.Linked HashMap uses internally double linked lists
to keep insertion order.<br/><br/>
The differences between Hashmap and linked hashmap is<br/><br/>
<ol>
<li>LinkedHashMap maintains the insertion order while HashMap doesnot maintain order.</li>
<li>HashMap if faster for insertion and deletion of elements when compared to linked hashmap. Linked
hashmap is preferred only for faster iteration of elements.</li>
</ol>
<pre><code class="language-html hljs xml">public class LinkedHashMap&lt;K,V&gt; extends HashMap&lt;K,V&gt; implements Map&lt;K,V&gt; {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>42. What is SortedMap interface?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
SortedMap extends Map interface. Sorted Map <i>maintains sorted order of keys</i> in a map.<br/><br/>
By default, sorted map <i>maintains natural ordering</i> if we want custom order we can specify using comparator.
<pre><code class="language-html hljs xml">public interface SortedMap&lt;K,V&gt; extends Map&lt;K,V&gt; {
 // ...
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>43. What is Hashtable and explain features of Hashtable?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Hashtable was available before collection framework.<br/><br/>
When collection framework was started <code><b>Hashtable</b></code> extends <code><b>Dictionary</b></code> class and <code><b>Map</b></code> interface.<br/><br/>
Hashtable offers a convenient way of <i>storing key/ value pairs</i>.<br/><br/>
Hashtable <i>does not allow nulls either keys or values</i>.<br/><br/>
Hashtable is <i>synchronized</i>.
<!-- Answer ::: END -->
</div>
</div>


<div><b>44. Difference between HashMap and Hashtable?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Difference</th><th>HashMap</th><th>HashTable</th></tr></thead>
<tbody>
 <tr>
  <td>Synchronization</td>
  <td>HashMap is not synchronized.</td>
  <td>Hashtable is synchronized.</td>
 </tr>
 <tr>
  <td>Nulls</td>
  <td>HashMap allows atmost one null key and any number of null values.</td>
  <td>Hashtable does not allow null values.</td>
 </tr>
 <tr>
  <td>Performance</td>
  <td>Since HashMap is not synchronized its performance is faster than Hashtable.</td>
  <td>Performance is slower when compared to HashMap.</td>
 </tr>
 <tr>
  <td>Introduction</td>
  <td>HashMap introduced starting from collection framework.</td>
  <td>Hashtable is even before collection framework.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>


<div><b>45. Difference between Arraylist and Linkedlist?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Difference</th><th>Arraylist</th><th>LinkedList</th></tr></thead>
<tbody>
 <tr>
  <td>Access</td>
  <td>Implements RandomAccess interface we can <i>search randomly</i> all the elements in the list.</td>
  <td>It extends Abstract sequential List interface which provides <i>sequential access</i> to elements.</td>
 </tr>
 <tr>
  <td>Searching and retrieval of elements</td>
  <td><i>Searching and retrieval</i> of elements is <i>fast</i> since arraylist provides random access</td>
  <td><i>Searching and retrieval</i> of elements is <i>slow</i> because of sequential access to elements.</td>
 </tr>
 <tr>
  <td>Addition and removal of elements</td>
  <td><i>Adding and removal of elements in random positions is slow</i>. For example, if we want to add element to middle of the list we have to move the 
  elements in the list and then we need to insert the element. Similarly for removing the element we need to follow the same thing.</td>
  <td><i>Adding and removal of elements in random positions is fast</i> because there is no need of resizing the array just by updating the node structures 
  with new addresses.</td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>


<div><b>46. Difference between Comparator and Comparable in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<div class="table-responsive">          
<table class="table">
<thead><tr><th>S.No.</th><th>Comparator</th><th>Comparable</th></tr></thead>
<tbody>
 <tr>
  <td>1</td>
  <td>Defined in <i>java.util package</i>.</td>
  <td>Defined in <i>java.lang package</i>.</td>
 </tr>
 <tr>
  <td>2</td>
  <td>Comparator interface is used when <i>we want to compare two different instances</i>.</td>
  <td>Comparable is used <i>to compare itself with other instance</i>.</td>
 </tr>
 <tr>
  <td>3</td>
  <td>Comparator is used when we want <i>custom sorting</i>.<br/><br/>
  <b>Example :</b> If we take <code><b>Employee</b></code> class sorting by <code><b>name</b></code> and <code><b>age</b><code> we can say as custom sorting.</td>
  <td>Comparable is used for <i>natural sorting of objects</i>.<br/><br/>
  <b>Example :</b> If we take <code><b>Employee</b></code> class sorting by <code><b>employeeId</b></code> is natural sorting.</td>
 </tr>
 <tr>
  <td>4</td>
  <td>Should override <code><b>int compare(T o1, T o2)</b></code> method which takes two instances.</td>
  <td>Should override public <code><b>int compareTo(T o)</b></code> method which takes one instance.</td>
 </tr>
 <tr>
  <td>5</td>
  <td>For sorting objects we use <code><b>collections.sort(list,new Comparator);</b></code></td>
  <td>For sorting objects we use <code><b>collections.sort(list);</b></code></td>
 </tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>


<div><b>47. What is concurrent hashmap and its features?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Concurrent HashMap is implemented in <code><b>java.util.concurrent</b></code> package.<br/><br/>
Concurrent HashMap extends <code><b>AbstractMap</b></code> and implements <code><b>ConcurrentMap</b></code>.<br/><br/>
Concurrent HashMap is used in multi-threaded environment.<br/><br/>
It is similar to Hashtable and synchronized version of hashmap but with minor differences.<br/><br/>
Concurrent HashMap <i>does not allow null keys and values</i>.
<!-- Answer ::: END -->
</div>
</div>


<div><b>48. Difference between Concurrent HashMap and Hashtable and collections.synchronizedHashMap?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Locking Mechansim :</b><br/><br/> ConcurrentHashMap uses completely different hashing mechanism called <code><b>lock striping</b></code> which 
offers better concurrency and scalability.<br/><br/>
The main advantage of this mechanism is better concurrency instead of synchronizing every method by
using common lock which allows only one thread to access at a time, <i>it allows better concurrency by
allowing multiple threads to access</i>.<br/><br/>
<b>ConcurrentModificationException :</b><br/><br/> ConcurrentHashMap provides iterators which doesnot throw concurrent
modification exception which allows only one thread to access iterator, <i>while synchronized map may
throw concurrent modification exception</i>.
<!-- Answer ::: END -->
</div>
</div>


<div><b>49. Explain copyOnWriteArrayList and when do we use copyOnWriteArrayList?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>copyOnWriteArrayList</b></code> is used in multithreaded environment. If we want to iterate over arraylist ,but the
arraylist is updated by other threads to prevent concurrent modification exception we have two solutions :<br/><br/>
<ol>
<li>First one is we need to synchronize the list manually by using <code><b>collections.synchronized(list)</b></code> and
iterate over the list in synchronized block to avoid concurrent modification exception.</li>
<li>The second one is to use <code><b>copyOnWriteArrayList</b></code> which takes care of concurrency.</li>
</ol>
<code><b>The advantage of using copyOnWriteArrayList is no need to synchronize list explicitly.</b></code> So when we use
copyOnWriteArrayList when a thread modifies the list while the other thread was iterating it does not
modify original list but creates a copy of list with modified contents so that the iterator won’t know the
modifications made to original list.
<!-- Answer ::: END -->
</div>
</div>


<div><b>50. Explain about fail fast iterators in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When iterator iterates over collection, collection should not be modified except by that iterator.
Modification means collection cannot be modified by thread when other thread is iterating, if such
modification happens a concurrent modification exception will be thrown. Such kind of iterators are fail fast
iterators.<br/><br/>
<b>Example :</b> <code><b>ArrayList</b></code>, <code><b><HashSet</b></code>, <code><b>HashMap</b></code>.<br/><br/>
Almost all the iterators implemented in collections framework are fail fast.
<!-- Answer ::: END -->
</div>
</div>


<div><b>51. Explain about fail safe iterators in java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Fail safe iterators are iterators which does not throw concurrent modification exception, when one thread
modifies collection and other thread in the process of iterating the collection.<br/><br/>
It does not throw concurrent modification exception because when other thread was iterating it does not
modify original list but creates a copy of list with modified contents so that the iterator won’t know the
modifications made to original list.<br/><br/>
<b>Example :</b> <code><b>copyOnWriteArrayList</b></code>
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