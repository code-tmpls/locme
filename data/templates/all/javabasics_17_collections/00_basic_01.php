
<div class="appQuestion"><b>144. What is the difference between Collection and Collections Framework in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, a Collection is an object that contains multiple elements of same type in a single unit. These multiple elements can be accessed through one 
Collection object.In Java Collections Framework is a library that provides common architecture for creating, updating and accessing different types of 
collections. In Collections framework there are common methods that are frequently used by developers for working on a Collection object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>145. What are the main benefits of Collections Framework in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main benefits of Collections Framework in Java are as follows:
<ol>
<li><b>Reusability :</b> Java Collections Framework provides common classes and utility methods than can be used with different types of collections. 
This promotes the reusability of the code. A developer does not have to re-invent the wheel by writing the same method again.</li>
<li><b>Quality :</b> Using Java Collection Framework improves the program quality, since the code is already tested and used by thousands of developers.</li>
<li><b>Speed :</b> Most of programmers report that their development speed increased since they can focus on core logic and use the generic collections 
provided by Java framework.</li>
<li><b>Maintenance :</b> Since most of the Java Collections framework code is open source and API documents is widely available, it is easy to maintain 
the code written with the help of Java Collections framework. One developer can easily pick the code of previous developer.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>146. What is the root interface ofCollection hierarchy in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The root interface of Collection hierarchy in Java is Collection interface.<br/><br/> 
But the Collection interface extends Iterable interface. Due to this some people consider Iterable interface as the root interface.<br/><br/> 
Iterable interface is present in java.lang package but Collection interface is present in java.util package. Oracle Java API documention that 
Collection interface is a member of the JavaCollections framework. Whereas, Iterable interface is not stated as a part of JavaCollections framework 
in Java docs.<br/><br/> Due to this Collection interface is the root of Collections Framework.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>147. What are the main differences between Collection and Collections?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Collection and Collections are as follows:
<ol>
<li>Collection is an interface in Java. But Collections is aclass in Java.</li>
<li>Collection is a base interface. Collections is a utility classin Java.</li>
<li>Collection defines methods that are used for data structuresthat contain the objects. 
Collections defines the methodsthat are used for operations like access, find etc. on a Collection.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>148. What are the Thread-safe classes in Java Collections Framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The Thread-safe classes in Java Collections framework are:
<ul>
<li>Stack</li>
<li>Properties</li>
<li>Vector</li>
<li>Hashtable</li>
<li>BlockingQueue</li>
<li>ConcurrentMap</li>
<li>ConcurrentNavigableMap</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>149. How will you efficiently remove elements while iterating a Collection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The right way to remove elements from a collection while iteratingis by using <code><b>ListIterator.remove()</b></code> method.<br/><br/> 
<b>Example</b>
<pre><code class="language-html hljs xml">ListIterator&lt;Integer&gt; iter = myList.iterator();
while(iter.hasNext()) {
	itr.remove();
}</code></pre>
Some developers use <code><b>Iterator</b></code> as following code to remove an element which is incorrect:
<pre><code class="language-html hljs xml">Iterator<Integer> iter = myList.iterator();
while(iter.hasNext()) { 
 itr.remove(); 
}</code></pre>
By doing so we get ConcurrentModificationException. An iterator is first created to traverse the list. But at the same time the list is changed 
by <code><b>remove()</b></code> method. In Java, it is not allowed for a thread to modify a collection whileanother thread is iterating it.<br/><br/> 
ListIterator provides the capability of removing an object during traversal.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>150. How will you convert a List into an array of integers like- int[]?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use <code><b>ArrayUtils</b></code> class in <code><b>Apache Commons Lang</b></code> library.<br/><br/> 
<b>Sample code is :</b>
<pre><code class="language-html hljs xml">int[] intArray = ArrayUtils.toPrimitive( myList.toArray( newInteger[0] ));</code></pre>
If we use <code><b>List.toArray()</b></code>, it will convert List to <code><b>Integer[]</b></code>.<br/><br/> 
<b>Another option is :</b>
<pre><code class="language-html hljs xml">int[] intArray = new int[ myList.size() ];
for (int i=0; i &lt; myList.size(); i++) { 
 intArray [i] = myList.get(i); 
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>151. How will you convert an array of primitive integers int[] to a Listcollection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use ArrayUtils in Apache Commons Lang library for this purpose.<br/><br/> 
<b>Sample code is :</b>
<pre><code class="language-html hljs xml">List intList = Arrays.asList( ArrayUtils.toObject(intArray) );</code></pre>
The other option would be to use a for loop and explicitly adding integers to a List.<br/><br/> 
<b>Sample code is :</b>
<pre><code class="language-html hljs xml">int[] intArray = {10,20,30};
List&lt;Integer&gt; intList = new ArrayList&lt;Integer&gt;();
for (int i: intArray) { 
 intList.add(i);
}</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>152. How will you run a filter on a Collection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use <Code><b>CollectionUtils</b></code> of Apache for this purpose. We will have to create a Predicate that will define the condition for 
our filter. Then we can apply this Predicate in <code><b>filter()</b></code> method.<br/><br/> 
<b>Sample code is :</b><br/>
In this example we filter any names that are less than 5 characters long.<br/><br/> 
<pre><code class="language-html hljs xml">List&lt;String&gt; namesList = asList( "Red", "Blue", "Green" );

List&lt;String&gt; shortNamesList = new ArrayList&lt;String&gt;();
 shortNamesList.addAll( namesList );
 
CollectionUtils.filter( shortNamesList, new Predicate() { 
  public boolean evaluate( Object input ) { 
   return ((String) input).length() &lt; 5;}
  }
);</code></pre>
We can also use Google Guava library for this.<br/><br/>
In Java 8, we can use Predicate to filter a Collection through Stream.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>153. How will you convert a List to a Set?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are two ways to convert a List to a Set in Java.<br/><br/> 
<b>Option 1 : Use HashSet</b><br/>
<pre><code class="language-html hljs xml">Set &lt;Integer&gt; mySet = new HashSet&lt;Integer&gt;(myList);</code></pre>
In this case we put a list into a HashSet. Internally <code><b>hashCode()</b></code> method is used to identify duplicate elements.<br/><br/>
<b>Option 2 : Use TreeSet</b><br/><br/>
In this case we use our own comparator to find duplicate objects.
<pre><code class="language-html hljs xml">Set&lt;Integer&gt; mySet = new TreeSet&lt;Integer&gt;(myComparator); 
 mySet.addAll(myList);</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>154. How will you remove duplicate elements from an ArrayList?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The trick in this question is to use a collection that does not allow duplicate elements. So we use a Set for this purpose.<br/><br/> 
<b>Option 1: Use Set</b><br/>
If ordering of elements is not important then we just put the elements of ArrayList in a HashSet and then add them back to the ArrayList.<br/><br/> 
<b>Sample Code is :</b><br/>
<pre><code class="language-html hljs xml">ArrayList myList = new ArrayList&lt;Integer&gt;(); // ArrayList with duplicate elements 

Set&lt;Integer&gt; mySet = new HashSet&lt;Integer&gt;(myList);
  myList.clear();
  myList.addAll(mySet);</code></pre>
<br/>
<b>Option 2: Use LinkedHashSet</b><br/>
If ordering of elements is important then we put the elements of ArrayList in a LinkedHashSet and then add them back to the ArrayList.<br/> 
<b>Sample Code is :</b><br/> 
<pre><code class="language-html hljs xml">ArrayList myList = new ArrayList&lt;Integer&gt;(); // ArrayList with duplicate elements
 
Set&lt;Integer&gt; mySet = new LinkedHashSet&lt;Integer&gt;(myList);
  myList.clear();
  myList.addAll(mySet);</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>155. How can you maintain a Collection with elements in Sortedorder?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, there are many ways to maintain a Collection with elements in sorted order.<br/><br/> Some collections like TreeSet store elements in the natural 
ordering. In case of natural ordering we have to implement Comparable interface for comparing the elements.<br/><br/> 
We can also maintain custom ordering by providing a custom Comparator to a Collection.<br/><br/> 
Another option is to use the utility method <code><b>Collections.sort()</b></code> to sort a List.<br/> 
This sorting gives nlog(n) order of performance. But if wehave to use this method multiple times then it will be costly on performance.<br/><br/> 
Another option is to use a PriorityQueue that provides an ordered queue.<br/><br/>  
The main difference between PriorityQueue and <code><b>Collections.sort()</b></code> is that PriorityQueue maintains a queue in Order all the time, but we 
can only retrieve head element from queue. We cannot access the elements of PriorityQueue in Random order. We can use TreeSet to maintain sorted order of 
elements in collection if there are no duplicate elements in collection.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>156. What are the differences between the two data structures: a Vector and an ArrayList?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An ArrayList is a newer class than a Vector. A Vector is considered a legacy class in Java. The differences are:
<ol>
<li><b>Synchronization :</b> Vector is synchronized, but the ArrayList is not synchronized. So an ArrayList has faster operations than a Vector.</li>
<li><b>Data Growth :</b> Internally both an ArrayList and Vector usean array to store data. When an ArrayList is almost full it increases its size by 50% of 
the array size. Whereas a Vector increases it by doubling the underlying array size.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>157. What are the differences between Collection and Collections in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Collection and Collections are:
<ol>
<li><b>Type :</b> Collection is an interface in Java. Collections is a class.</li>
<li><b>Features :</b> Collection interface provides basic features of data structure to List, Set and Queue interfaces. Collections is a utility class 
to sort and synchronize collection elements. It has polymorphic algorithms to operate on collections.</li>
<li><b>Method Type :</b> Most of the methods in Collection are at instance level. Collections class has mainly static methods that can work on an instance 
of Collection.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>158. In which scenario, LinkedList is better than ArrayList in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ArrayList is more popular than LinkedList in Java due to its ease of use and random access to elements feature.<br/><br/> But LinkedList is better in 
the scenario when we do not need random access to elements or there are a lot of insertion, deletion of elements.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>159. What are the differences between a List and Set collection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between a List and a Set are:
<ol>
<li><b>Order :</b> List collection is an ordered sequence of elements. A Set is just a distinct collection of elements that is unordered.</li>
<li><b>Positional Access :</b> When we use a List, we can specify where exactly we want to insert an element. In a Set there is no order, so we can 
insert element anywhere without worrying about order.
<li><b>Duplicate :</b> In a List we can store duplicate elements. A Setcan hold only unique elements.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>160. What are the differences betweena HashSet and TreeSet collection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between a HashSet and TreeSet are:
<ol>
<li><b>Ordering :</b> In a HashSet elements are stored in a random order. In a TreeSet, elements are stored according to natural ordering.</li>
<li><b>Null Value Element :</b> We can store null value object in a HashSet. A TreeSet does not allow to add a null value object.</li>
<li><b>Performance :</b> HashSet performs basic operations like add(), remove(), contains(), size() etc in a constant size time. A TreeSet performs these 
operations at the order of log(n) time.</li>
<li><b>Speed :</b> A HashSet is better than a TreeSet in performance for most of operations like add(), remove(), contains(),size() etc.</li>
<li><b>Internal Structure :</b> a HashMap in Java internally backs a HashSet. A NavigableMap backs a TreeSet internally.</li>
<li><b>Features :</b> A TreeSet has more features compared to a HashSet. It has methods like <code><b>pollFirst()</b></code>, <code><b>pollLast()</b></code>, 
<code><b>first()</b></code>, <code><b>last()</b></code>, <code><b>ceiling()</b></code>, <code><b>lower()</b></code> etc.</li>
<li>Element Comparison: A HashSet uses equals() method forcomparison. A TreeSet uses compareTo() method for comparison to maintain ordering of elements
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>161. In Java, how will you decide whento use a List, Set or a Map collection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
<ol>
<li>If we want a Collection that does not store duplicate values, then we use a Set based collection.</li>
<li>If we want to frequently access elements operations based on an index value then we use a List based collection.<br/>
<i>Example:</i> ArrayList</li>
<li>If we want to maintain the insertion order of elements in a collection then we use a List based collection.</li>
<li>For fast search operation based on a key, value pair, we use a HashMap based collection.</li>
<li>If we want to maintain the elements in a sorted order, then we use a TreeSet based collection.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>162. What are the differences betweena HashMap and a Hashtable in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between a HashMap and a Hashtable are :
<ol>
<li><b>Synchronization :</b> HashMap is not a synchronized collection. If it is used in multi-thread environment, it may not provide thread safety. 
A Hashtable is a synchronized collection. Not more than one thread can access a Hashtable at a given moment of time. The thread that works on Hashtable 
acquires a lock on it and it makes other threads wait till its work is completed.</li>
<li><b>Null values :</b> A HashMap allows only one null key and any number of null values. A Hashtable does not allow nullkeys and null values.</li>
<li><b>Ordering :</b> A HashMap implementation by LinkedHashMap maintains the insertion order of elements. A TreeMap sorts the mappings based on the 
ascending order of keys. On the other hand, a Hashtable does not provide guarantee of any kind of order of elements. It does not maintain themappings of 
key values in any specific order.</li>
<li><b>Legacy :</b> Hashtable was not the initial part of collection framework in Java. It has been made a collection framework member, after being 
retrofitted to implement the Map interface. A HashMap implements Map interface and is a part of collection framework since the beginning.</li>
<li><b>Iterator :</b> The Iterator of HashMap is a fail-fast and it throws ConcurrentModificationException if any other Thread modifies the map by 
inserting or removing any element except iterator’s own <code><b>remove()</b></code> method. Enumerator of the Hashtable is not fail-fast.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>163. What are the differences between a HashMap and a TreeMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between a HashMap and a TreeMap in Java are :
<ol>
<li><b>Order :</b> A HashMap does not maintain any order of its keys. In a HashMap there is no guarantee that the element inserted first will be 
retrieved first.</li>
<li>In a TreeMap elements are stored according to natural ordering of elements. A TreeMap uses <code><b>compareTo()</b></code> method to store 
elements in a natural order.</li>
<li><b>Internal Implementation :</b> A HashMap uses Hashing internally. A TreeMap internally uses Red-Black tree implementation.</li>
<li><b>Parent Interfaces :</b> A HashMap implements Map interface. TreeMap implements NavigableMap interface.</li>
<li><b>Null values :</b> A HashMap can store one null key and multiple null values. A TreeMap can not contain null key but it may contain 
multiple null values.</li>
<li><b>Performance :</b> A HashMap gives constant time performance for operations like <code><b>get()</b></code> and <code><b>put()</b></code>. 
A TreeMap gives orderof log(n) time performance for <code><b>get()</b></code> and <code><b>put()</b></code> methods.</li>
<li><b>Comparison :</b> A HashMap uses <code><b>equals()</b></code> method to comparekeys. A TreeMap uses <code><b>compareTo()</b></code> method 
for maintaining natural ordering.</li>
<li><b>Features :</b> A TreeMap has more features than a HashMap. It has methods like <code><b>pollFirstEntry()</b></code>, <code><b>pollLastEntry()</b></code>, 
<code><b>tailMap()</b></code>, <code><b>firstKey()</b></code>, <code><b>lastKey()</b></code> etc. that are not provided by a HashMap.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>164. What are the differences between Comparable and Comparator?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Comparable and Comparator are :
<ol>
<li><b>Type :</b> Comparable&lt;T&gt; is an interface in Java where T isthe type of objects that this object may be compared to.</li>
<li>Comparator&lt;T&gt; is also an interface where T is the type of objects that may be compared by this comparator.</li>
<li><b>Sorting :</b> In Comparable, we can only create one sort sequence. In Comparator we can create multiple sort sequences.</li>
<li><b>Method Used :</b> Comparator&lt;T&gt; interface in Java has method 
<pre><code class="language-html hljs xml">public int compare (Object o1, Object o2)</code></pre> that returns a negative integer, 
zero, or a positive integer when the object o1 is less than, equal to, or greater than the object o2. A Comparable&lt;T&gt; interface has method 
<pre><code class="language-html hljs xml">public int compareTo(Object o)</code></pre>
that returns a negative integer, zero, or a positive integer when this object is less than, equal to, or greater than the object o.</li>
<li><b>Objects for Comparison :</b> The Comparator compares twoobjects given to it as input. Comparable interface compares "this" reference with the object 
given as input.</li>
<li><b>Package location :</b> Comparable interface in Java is defined in java.lang package. Comparator interface in Java is defined in java.util package.</li>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>165. In Java, what is the purpose of Properties file?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Properties file in Java is a list of key-value pairs that can beparsed by <code><b>java.util.Properties</b></code> class.<br/> 
Generally a Properties file has <code><b>extension.properties</b></code> e.g.myapp.properties.<br/> 
Properties files are used for many purposes in all kinds of Java applications. Some of the uses are to store configuration, initialdata, 
application options etc.<br/> 
When we change the value of a key in a properties file, there is noneed to recompile the Java application. So it provides benefit of changing values 
at runtime.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>166. What is the reason for overriding equals() method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The equals() method in Object class is used to check whether two objects are same or not. If we want a custom implementation we can override 
this method.<br/> 
For example, a Person class has first name, last name and age. If we want two Person objects to be equal based on name and age, thenwe can override 
equals() method to compare the first name, lastname and age of Person objects.<br/> 
Generally in HashMap implementation, if we want to use an object as key, then we override equals() method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>167. How does hashCode() method work in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Object class in Java has <code><b>hashCode()</b></code> method. This method returns ahash code value, which is an integer.<br/> 
The <code><b>hashCode()</b></code> is a native method and its implementation is not pure Java.<br/> 
Java doesn't generate <code><b>hashCode()</b></code>. However, Object generates a HashCode based on the memory address of the instance of the object.<br/> 
If two objects are same then their <code><b>hashCode()</b></code> is also same.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>168. Is it a good idea to use Genericsin collections?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. A collection is a group of elements put together in an order orbased on a property. Often the type of element can vary. But the properties and 
behavior of a Collection remains same. Therefore it is good to create a Collection with Generics so that it is type-safe and it can be used with wide 
variety of elements.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>169. What is the difference between Collections.emptyList() and creating new instance of Collection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In both the approaches, we get an empty list. But <code><b>Collections.emptyList()</b></code> returns an Immutable list. We cannot add new elements 
to an Immutable empty list.<br/><br/> <code><b>Collections.emptyList()</b></code> works like Singleton pattern. It does not create a new instance of List. 
It reuses an existing empty list instance.<br/><br/> Therefore, <code><b>Collections.emptylist()</b></code> gives better performance if we need to get an 
emptyList multiple times.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>170. How will you copy elements froma Source List to another list?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are two options to copy a Source List to another list.<br/><br/>
<b>Option 1 : Use ArrayList constructor</b><br/>
<pre><code class="language-html hljs xml">ArrayList&lt;Integer&gt; newList = new ArrayList&lt;Integer&gt;(sourceList);</code></pre>
<b>Option 2: Use Collection.copy()</b></br/> 
To use Collections.copy() destination list should be of same or larger size than source list.
<pre><code class="language-html hljs xml">ArrayList&lt;Integer&gt; newList = new ArrayList&lt;Integer&gt;( sourceList.size() );
Collections.copy(newList, sourceList);</code></pre>

<code><b>Collections.copy()</b></code> does not reallocate the capacity of destination List if it does not have enough space to contain all elements 
of source List. It throws IndexOutOfBoundsException.<br/><br/> The benefit of Collection.copy() is that it guarantees that the copy will happen in 
linear time. It is also good for the scenario when wewant to reuse an array instead of allocating more memory in the constructor of ArrayList.<br/><br/> 
One limitation of <code><b>Collections.copy()</b></code> is that it can accept only List as source and destination parameters.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>171. What are the Java Collection classes that implement List interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java classes that implement List interface are:
<ul>
<li>AbstractList</li>
<li>AbstractSequentialList</li>
<li>ArrayList</li>
<li>AttributeList</li>
<li>CopyOnWriteArrayList</li>
<li>LinkedList</li>
<li>RoleList</li>
<li>RoleUnresolvedList</li>
<li>Stack</li>
<li>Vector</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>172. What are the Java Collection classes that implement Set interface?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java classes that implement Set interface are:
<ul>
<li>AbstractSet</li>
<li>ConcurrentSkipListSet</li>
<li>CopyOnWriteArraySet</li>
<li>EnumSet</li>
<li>HashSet</li>
<li>JobStateReasons</li>
<li>LinkedHashSet</li>
<li>TreeSet</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>173. What is the difference between an Iterator and ListIterator in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Iterator and ListIterator are two interfaces in Java to traverse data structures. The differences between these two are:
<ol>
<li>ListIterator can be used to traverse only a List. But Iterator can be used to traverse List, Set, and Queue etc.</li>
<li>An Iterator traverses the elements in one direction only. It just goes. ListIterator can traverse the elements in two directions i.e. backward as 
well as forward directions.</li>
<li>Iterator cannot provide us index of an element in the DataStructure. ListIterator provides us methods like <code><b>nextIndex()</b></code> and 
<code><b>previousIndex()</b></code> to get the index of an element during traversal.</li>
<li>Iterator does not allow us to add an element to collection while traversing it. It throws ConcurrentModificationException. ListIterator allows use to 
add an element at any point of time while traversing alist.</li>
<li>An existing element’s value cannot be replaced by usingIterator. ListIterator provides the method <code><b>set(e)</b></code> to replacethe value 
of last element returned by <code><b>next()</b></code> or <code><b>previous()</b></code> methods.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>174. What is the difference between Iterator and Enumeration?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Both Iterator and Enumeration are interfaces in Java to access DataStructures. The main differences between these are :
<ol>
<li>Enumeration is an older interface. Iterator is a newer interface.</li>
<li>Enumeration can only traverse legacy collections. Iteratorcan traverse both legacy as well as newer collections.</li>
<li>Enumeration does not provide <code><b>remove()</b></code> method. So we cannot remove any element during traversal. Iterator provides 
<code><b>remove()</b></code> method.</li>
<li>Iterator is a fail-fast interface, it gives ConcurrentModificationException if any thread tries to modify an element in the collection being iterated. 
Enumeration is not fail-fast.</li>
<li>Method names in Iterator are shorter than in an Enumeration.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>175. What is the difference between an ArrayList and a LinkedList datastructure?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between ArrayList and LinkedList data structures are :
<ol>
<li><b>Data Structure :</b> An ArrayList is an indexed based dynamic array. A LinkedList is a Doubly Linked List datastructure.</li>
<li><b>Insertion :</b> It is easier to insert new elements in a LinkedList, since there is no need to resize an array. Insertion in ArrayList is O(n), 
since it may require resizing of array and copying its contents to new array.</li>
<li><b>Remove elements :</b> LinkedList has better performance inremoval of elements than ArrayList.</li>
<li><b>Memory Usage :</b> LinkedList uses more memory than ArrayList, since it has to maintain links for next andprevious nodes as well.</li>
<li><b>Access :</b> LinkedList is slower in accessing an element, since we have to traverse the list one by one to access the right location.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>176. What is the difference between a Set and a Map in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between a Set and a Map in Java are : 
<ol>
<li><b>Duplicate Elements :</b> A Set does not allow inserting duplicate elements. A Map does not allow using duplicate keys, but it allows inserting 
duplicate values for unique keys.</li>
<li><b>Null values :</b> A Set allows inserting maximum one null value. In a Map we can have single null key at most and any number of null values.</li>
<li><b>Ordering :</b> A Set does not maintain any order of elements. Some of sub-classes of a Set can sort the elements in an order like LinkedHashSet. 
A Map does not maintain any order of its elements. Some of its sub-classes like TreeMap store elements of the map in ascending order of keys.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>177. What is the use of a Dictionary class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The Dictionary class in Java is used to store key-value pairs. Any non-null object can be used for key or value. But we cannot insert a null key or 
null object in Dictionary.<br/><br/> Dictionary class is deprecated now. So it should not be used in newer implementations.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>178. What is the default size of load factor in a HashMap collection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Default value of load factor in a HashMap is 0.75.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>179. What is the significance of load factor in a HashMap in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A HashMap in Java has default initial capacity 16 and the load factor is 0.75f (i.e. 75% of current map size). The load factor of a HashMap is the level 
at which its capacity should be doubled.<br/><br/> For example, in a HashMap of capacity 16 and load factor 0.75. The capacity will become 32 when the 
HashMap is 75% full. Therefore, after storing the 12th key- value pair (16 * 0.75 = 12) into HashMap, its capacity becomes 32.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>180. What are the major differences between a HashSet and a HashMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main difference between a HashSet and a HashMap are : 
<ol>
<li><b>Base class :</b> A HashSet class implements the Set interface. Whereas a HashMap class implements the Map interface.</li>
<li><b>Storage :</b> A HashSet is used to store distinct objects. A HashMap is used for storing key & value pairs, so that these can be retrieved by 
key later on.</li>
<li><b>Duplicate Elements :</b> A HashSet does not allow storing duplicate elements. A HashMap also does not allow duplicate keys. But we can store 
duplicate values in a HashMap.</li>
<li><b>Null Elements :</b> In a HashSet we can store a single null value. In a HashMap we can store single null key, but any number of null values.</li>
<li><b>Element Type :</b> A HashSet contains only values of objects as its elements. Whereas a HashMap contains entries (key-value pairs).</li>
<li><b>Iteration :</b> By using an Iterator we can iterate a HashSet. But a HashMap has to be converted into Set for iteration.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>181. What are the similarities between a HashSet and a HashMap in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As the name suggests, HashSet and HashMap are Hashing based collections. Similarities between HashSet and HashMap are : 
<ol>
<li><b>Thread Safety :</b> Both HashMap and HashSet are not synchronized collections. Therefore they are not good for thread-safe operations. 
To make these thread-safe we need to explicitly use synchronized versions.</li>
<li><b>Order of Elements :</b> None of these classes guarantee the order of elements. These are unordered collections.</li>
<li><b>Internal Implementation :</b> A HashMap backs up a HashSet internally. So HashSet uses a HashMap for performing its operations.</li>
<li><b>Performance :</b> Both of these collections provide constant time performance for basic operations such as insertion and removal of elements.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>182. What is the reason for overriding equals() method?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The equals() method in Object class is used to check whether two objects are same or not. If we want a custom implementation we can override 
this method.<br/><br/> 
For example, a Person class has first name, last name and age. If we want two Person objects to be equal based on name and age, then we can override 
<code><b>equals()</b></code> method to compare the first name, lastname and age of Person objects. Generally in HashMap implementation, if we want to use 
an object as key, then we override equals() method.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>183. How can we synchronize the elements of a List, a Set or a Map?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Sometimes we need to make collections Thread-safe for use in Multi-threading environment. In Java, Collections class provides useful static methods to 
make a List, Set or Map as synchronized collections.<br/><br/> Some of these methods are :<br/><br/> 
<code><b>static&lt;T&gt; Collection&lt;T&gt; synchronizedCollection(Collection&lt;T&gt; c)</b></code> Returns a synchronized (thread-safe) collection 
backed by the specified collection.<br/><br/>  
<code><b>static&lt;T&gt; List&lt;T&gt; synchronizedList(List&lt;T&gt; list)</b></code> Returns a synchronized (thread-safe) list backed by the specifiedlist.<br/><br/>  
<code><b>static&lt;K,V&gt; Map&lt;K,V&gt; synchronizedMap(Map&lt;K,V&gt; m)</b></code> Returns a synchronized (thread-safe) map backed by the specifiedmap.<br/><br/>  
<code><b>static&lt;T&gt; Set&lt;T&gt; synchronizedSet(Set&lt;T&gt; s)</b></code> Returns a synchronized (thread-safe) set backed by the specifiedset.<br/><br/>  
<code><b>static&lt;K,V&gt;SortedMap&lt;K,V&gt; synchronizedSortedMap(SortedMap&lt;K,V&gt; m)</b></code> Returns a synchronized (thread-safe) sorted map backed by the 
specified sorted map.<br/><br/>  
<code><b>static&lt;T&gt; SortedSet&lt;T&gt; synchronizedSortedSet(SortedSet&lt;T&gt; s)</b></code> Returns a synchronized (thread-safe) sorted set backed by the specified 
sorted set.<br/><br/> 
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>184. What is Hash Collision? How Java handles hash-collision in HashMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Hashing scenario, at times two different objects may have same HashCode but they may not be equal. Therefore, Java will face issue while storing 
the two different objects with same HashCode in a HashMap. This kind of situation is Hash Collision.<br/><br/> There are different techniques of resolving or 
avoiding Hash Collision. But in HashMap, Java simply replaces the Object at old Key with new Object in case of Hash Collision.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>185. What are the Hash Collision resolution techniques?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To resolve a Hash Collision we can use one of the following techniques : 
<ul>
<li>Separate Chaining with Linked List</li>
<li>Separate Chaining with List Head Cells</li>
<li>Open Addressing with Coalesced Hashing</li>
<li>Open Addressing with Cuckoo Hashing</li>
<li>Hopscotch Hashing</li>
<li>Robinhood Hashing</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>186. What is the difference between Queue and Stack data structures?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Queue is a FIFO data structure. FIFO stands for First In First Out. It means the element added first will be removed first from the queue. A real world 
example of Queue is a line for buying tickets at a station. The person entering first in the Queue is served first.<br/><br/> 
Stack is a LIFO data structure. LIFO stands for Last In First Out. The element that is added last is removed first from the collection. In a Stack elements 
are added or removed from the top of stack.<br/><br/> 
A real world example of Stack is back button in browser. We can go back one by one only and it works in the reverse order of adding webpages to history.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>187. What is an Iterator in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Iterator is an interface in Java to access the elements in a collection.It is in <code><b>java.util</b></code> package.<br/><br/> 
It provides methods to iterate over a Collection class in Java.<br/><br/> 
Iterator interface in Java is based on Iterator design pattern. Byusing an Iterator one can traverse a container of objects and can also access the 
objects in the container. A container of objects is a Collection class in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>188. What is the difference between Iterator and Enumeration in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between Iterator and Enumeration in Java are : 
<ol>
<li><b>Version :</b> Enumeration interface is in Java since JDK 1.0. Iterator interface was introduced in Java 1.2.</li>
<li><b>remove() method :</b> The main difference between Enumeration and Iterator interface is <code><b>remove()</b></code> method. Enumeration can 
just traverse a Collection object. If we use Enumeration, we cannot do any modifications to a Collection while traversing the collection. Iterator 
interface provides remove() method to remove an element while traversing the Collection. There is not remove() method in Enumeration interface.</li>
<li><b>Method names :</b> Names of methods in Iterator interface are hasNext(), next(), remove(). Names of methods in Enumeration interface are 
hasMoreElements(), nextElement().</li>
<li><b>Legacy Interface :</b> Enumeration is considered as a legacy interface. It is used to traverse legacy classes like Vector, Stack and HashTable. 
Iterator is a newer interface that is used to traverse almost all of the classes in Java Collections framework.</li>
<li><b>Fail-fast vs. Fail-safe :</b> Iterator is based on fail-fast principle. It throws ConcurrentModificationException if a collection is modified during 
iteration over that collection. An Enumeration is based on fail-safe principle. It doesn’t throw any exception if a collection is modified during traversal.</li>
<li><b>Safety :</b> Since Iterator is fail-fast and does not allow modification of a collection by other threads, it is considered safer than Enumeration.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>189. What is the design pattern used in the implementation of Enumeration in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Enumeration is based on Iterator design pattern. Iterator design pattern provides a common interface with methods to traverse the collection of objects. 
It hides the underlying implementation details of the collection.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>190. Which methods do we need to override to use an object as key in a HashMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If we want to use an object as a key in a HashMap in Java, then we have to make sure that it has the implementation of <code><b>equals()</b></code> and 
<code><b>hashCode()</b></code> methods.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>191. How will you reverse a List in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Collections class, Java provides a method reverse(List list) that can be used to reverse a List.<br/><br/>
<b>Example:</b><br/> 
<pre><code class="language-html hljs xml">Collections.reverse(myList);</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>192. How will you convert an array of String objects into a List?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides Arrays class in <code><b>java.util</b></code> package. Arrays class has a method asList() that accepts an Array as input and returns a List 
as output. 
<pre><code class="language-html hljs xml">public static <T> List<T> asList(T... a);</code></pre>

<pre><code class="language-html hljs xml">String[] myArray = {"George" , "Jack" , "Ryan"};
List myList = Arrays.asList(myArray);</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>193. What is the difference between peek(), poll() and remove() methods of Queue interface in java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Java Queue, poll() and remove() methods can be used for removing the head object of Queue. The main difference arises in the case when Queue 
is empty().<br/><br/> If Queue is empty then poll() method returns null value. If Queue is empty then remove() method throws NoSuchElementException.<br/><br/> 
In a Java Queue, peek() method retrieves the head of Queue but it does not remove it. If queue is empty then peek() method returns null value.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>194. What is the difference between Array and ArrayList in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main differences between Array and ArrayList in Java are : 
<ol>
<li><b>Size :</b> Array in Java is fixed in size. We cannot change the size of array after creating it. ArrayList is dynamic in size. When we add elements 
to an ArrayList, its capacity increases automatically.</li>
<li><b>Performance :</b> In Java Array and ArrayList give different performance for different operations.</li>
<li><b>add() or get() :</b> Adding an element to or retrieving an element from an array or ArrayList object has similar performance. These are constant 
time operations.</li>
<li><b>resize() :</b> Automatic resize of ArrayList slows down the performance. ArrayList is internally backed by an Array. In resize() a temporary array is 
used to copy elements from old array to new array.</li>
<li><b>Primitives :</b> Array can contain both primitive data types as well as objects. But ArrayList cannot contain primitive data types. It contains 
only objects.</li>
<li><b>Iterator :</b> In an ArrayList we use an Iterator object to traverse the elements. We use for loop for iterating elements in an array.</li>
<li><b>Type Safety :</b> Java helps in ensuring Type Safety of elements in an ArrayList by using Generics. An Array can contain objects of same type 
of class.<br/>
If we try to store a different data type object in an Array then it throws ArrayStoreException.</li>
<li><b>Length :</b> Size of ArrayList can be obtained by using size() method. Every array object has length variable that is same as the length/size 
of the array.</li>
<li><b>Adding elements :</b> In an ArrayList we can use add() method to add objects. In an Array assignment operator is used for adding elements.</li>
<li><b>Multi-dimension :</b> An Array can be multi-dimensional. An ArrayList is always of single dimension.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>195. How will you insert, delete and retrieve elements from a HashMap collection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use following methods to insert, delete and retrieve elements in a HashMap.
<ol>
<li><b>Retrieve :</b> We use get() method to retrieve elements from a HashMap.
<pre><code class="language-html hljs xml">Value get(Object key)</code></pre></li>
<li><b>Insert :</b> We use put() method to insert a key value pair in aHashMap.
<pre><code class="language-html hljs xml">Value put(Key k, Value v)</code></pre></li>
<li><b>Delete :</b> We use remove() method to delete key-value pairfrom the HashMap.
<pre><code class="language-html hljs xml">Value remove(Object key)</code></pre>/li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>196. What are the main differences between HashMap and ConcurrentHashMap in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main differences between HashMap and ConcurrentHashMap are :
<ol> 
<li><b>Synchronization :</b> A HashMap is not synchronized. But a ConcurrentHashMap is a synchronized object.</li>
<li><b>Null Key :</b> A HashMap can have one null key and any number of null values. A ConcurrentHashMap cannot have null keys or null values.</li>
<li><b>Multi-threading :</b> A ConcurrentHashMap works well in a multi-threading environment.</li>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>197. What is the increasing order of performance for following collection classes in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The increasing order of performance is :
<ul>
<li>Hashtable</li>
<li>Collections.SynchronizedMap</li>
<li>ConcurrentHashMap</li>
<li>HashMap</li>
</ul>
Hashtable has the worst performance and HashMap has the best performance.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>198. Why does Map interface not extend Collection interface in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Map is a collection objects. But Map interface is not compatiblewith Collection interface in Java.<br/><br/> 
A Map requires key as well as a value. So it requires two parameters to add an element to a HashMap.<br/><br/> 
But Collection interface provides add(Object o) method with only one parameter.<br/><br/> 
Map collection has to provide methods like valueSet, keySet etc. These methods are specific to Map collection. Where as methods in Collection interface 
can be reused by a List, Set, Queue etc.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>199. What are the different ways to iterate elements of a list in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are mainly two ways to iterate the elements of list in Java : 
<ol>
<li><b>Iterator :</b> We can get an Iterator for list and use it to iterate the objects of the list.</li>
<li><b>For-each loop :</b> We can use for-each loop to traverse all the elements of a list.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>200. What is CopyOnWriteArrayList? How it is different from ArrayList in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
CopyOnWriteArrayList was introduced in Java 5 version. It is a thread-safe collection. It is similar to an ArrayList.<br/><br/> 
In CopyOnWriteArrayList, all mutative operations (add, set etc.) are implemented by making a fresh copy of the underlying array.<br/><br/> 
Iterator of CopyOnWriteArrayList is guaranteed to not throw ConcurrentModificationException. But Iterator also does not reflect any additions, 
removals that happened to list after the Iterator was created.<br/><br/> All elements including null are permitted in CopyOnWriteArrayList.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>201. How remove() method is implemented in a HashMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Remove() method in HashMap uses logic similar to the one used inget() method. First we locate the correct bucket in HashMap for an entry. 
Then within that bucket we remove the element e. It is similarto removing a node from a single-linked list.<br/><br/> 
If e is the first element in the bucket we set the correspondingelement of Hash to e.next. Else we set the next field of the element just 
before e to e.next.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>202. What is BlockingQueue in Java Collections?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
BlockingQueue was introduced in Java 1.5. It extends Queueinterface in Java.<br/><br/> 
BlockingQueue supports operations that wait for the queue to become non-empty when retrieving an element. Also it supports the operations that wait 
for space to become available in the queue while storing an element.<br/><br/> 
Some of the features of BlockingQueue are :
<ul> 
<li>It does not accept null elements.</li>
<li>Its main use is in producer-consumer problems.</li>
<li>BlockingQueue implementation is thread-safe.</li>
<li>It can be used in inter-thread communications.</li>
<li>It does not support any kind of "close" or "shutdown" operation to indicate that no more items will be added.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>203. How is TreeMap class implemented in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Internally, a TreeMap class in Java uses Red-Black tree.<br/><br/> 
It is a NavigableMap. The map sorts the keys in natural order or it can use a Comparator supplied at the creation time.<br/><br/> 
The implementation of TreeMap is not synchronized in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>204. What is the difference between Fail-fast and Fail-safe iterator in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Differences between Fail-fast and Fail-safe iterators are as follows :<br/><br/>  
Fail-fast iterator throws ConcurrentModificationException. But Fail-safe iterator does not throw this exception.<br/><br/>  
Fail-fast iterator does not clone the original collection. Fail-safe iterator creates a copy of the original collection of objects.<br/><br/> 
A Fail-fast iterator tries to immediately throw Exception when itencounters failure. A Fail-safe Iterator works on a copy of collection 
instead of original collection.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>205. How does ConcurrentHashMap work in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ConcurrentHashMap extends AbstractMap in Java. It was introduced in Java 1.5. It provides concurrency in a collection based on a HashMap.<br/><br/> 
All methods are thread-safe in ConcurrentHashMap.<br/><br/> 
Internally there is a Hashtable backing a ConcurrentHashMap. This Hashtable supports the concurrent methods for retrieval of data as well as updates 
on ConcurrentHashMap.<br/><br/> It has same functional specification as a Hashtable.<br/><br/> It also supports a set of sequential and bulk operations. 
These operations accept parallelism Threshold argument.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>206. What is the importance of hashCode() and equals() methods?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a HashMap collection it is very important for a key object to implement hashCode() method and equals() method. If hashCode() method returns same 
hashcode for all key objects then the hash collision will be high in HashMap. Also with same hashcode, wewill get same equals method that will make 
our HashMap inefficient.<br/><br/> 
The problem arises when HashMap treats both outputs same instead of different. It will overwrite the most recent key-value pair with the previous 
key-value pair.<br/><br/> So it is important to implement hashCode() and equals() methodscorrectly for an efficient HashMap collection.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>207. What is the contract of hashCode() and equals() methods in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Contract of hashCode() and equals() methods is as follows in Java :<br/><br/> 
If <code><b>object1.equals(object2)</b></code>, then <code><b>object1.hashCode() == object2.hashCode()</b></code> should always be true. 
It means if two objects are equal then their hashCode should be same.<br/><br/> 
If <code><b>object1.hashCode() == object2.hashCode()</b></code> is true, it does not guarantee that <code><b>object1.equals(object2)</b></code>. 
It means if two objects have same hashCode, then can still have different values so that may not be equal objects.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>208. What is an EnumSet in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Set: EnumSet is a specialized implementation of Set.
<ol>
<li><b>Use :</b> It is mainly used with enum types.</li>
<li><b>Single enum type :</b> All the elements in an EnumSet must come from a single enum type when the set is created.</li>
<li><b>Bit vector :</b> Internally, EnumSet is represented as bitvector.</li>
<li><b>Iterator :</b> The iterator of EnumSet traverses the elements in their natural order. (It is the order in which the enumconstants are declared).</li>
<li><b>Null :</b> In an EnumSet, null elements are not permitted. If wetry to insert a null element it throws NullPointerException.</li>
<li><b>Thread-safe :</b> EnumSet is not a synchronized collection. For use in multi-threading scenarios, EnumSet should be synchronized.</li>
<li><b>Bit flags :</b> EnumSet is a very good alternative to int based “bit flags” implementation.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>209. What are the main Concurrent Collection classes in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java 1.5 has provided new package java.util.concurrent. This package contains thread-safe collection classed. These collection classes can be 
modified while iterating. The iterator of these classes is fail-safe.<br/><br/> 
Main Concurrent Collection classes in Java 8 are :
<ul>
<li>ArrayBlockingQueue</li>
<li>CopyOnWriteArrayList</li>
<li>CopyOnWriteArraySet</li>
<li>ConcurrentHashMap</li>
<li>ConcurrentLinkedDeque</li>
<li>ConcurrentLinkedQueue</li>
<li>LinkedBlockingQueue</li>
<li>LinkedBlockingDeque</li>
<li>PriorityBlockingQueue</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>210. How will you convert a Collection to SynchronizedCollection in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java provides an easy method in <code><b>java.utils.Collections</b></code> class to create a Thread-Safe collection from a regular collection.<br/><br/> 
We can use the method <code><b>synchronizedCollection()</b></code> for this purpose.<br/><br/> 
For any class of type T we can use following method:<br/><br/> 
<pre><code class="language-html hljs xml">static&lt;T&gt; Collection&lt;T&gt; synchronizedCollection(Collection&lt;T&gt; c)</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>211. How IdentityHashMap is different from a regular Map in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
IdentityHashMap in Java implements Map interface. But it is not a general purpose implementation. It violates the general contract of Map interface 
by a different implementation of equals() method.<br/><br/> 
In an IdentityHashMap, two keys k1 and k2 are equal if and only <code><b>if (k1==k2)</b></code>. (In a normal Map implementation (like HashMap) two 
keys k1 and k2 are considered equal if and only <code><b>if (k1==null ?k2==null : k1.equals(k2))</b></code>)<br/><br/> 
It implements the Map interface with a hash table, using reference-equality in place of object-equality when comparing keys (and values).
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>212. What is the main use of IdentityHashMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Main uses of IdentityHashMap are : 
<ol>
<li><b>Topology Preservation :</b> The typical use of IdentityHashMap class is topology-preserving object graph transformations, such as serialization or 
deep-copying. In such a scenario, a program must maintain a "node table" to keep track of all the object references that have already been processed.</li>
<li>The node table should not considered distinct objects as equal even if they happen to be equal.</li>
<li><b>Proxy objects :</b> Another use of this class is to maintain proxy objects. A debugging program has to maintain a proxy object for each object in 
the program being debugged.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>213. How can we improve theperformance of IdentityHashMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
IdentityHashMap class has one tuning parameter for performance improvement: expectedMaxSize.<br/><br/> 
This parameter is the maximum number of key-value mappings that the map is expected to hold.<br/><br/> 
We can use this parameter is used to determine the number of buckets initially in the hash table. The precise relationship betweenthe expected maximum 
size and the number of buckets is unspecified.<br/><br/> 
If the number of key-value mappings exceeds the expected maximum size, the number of buckets is increased.<br/><br/> 
Increasing the number of buckets is also known as rehashing. Rehashing may be fairly expensive. So it is better to create identityhash maps with a 
sufficiently large expected maximum size.<br/><br/> 
But iteration over a Map collection requires time proportional tothe number of buckets in the hash table. So iteration may take extratime due to 
large number of buckets.<br/><br/> Therefore the value of expectedMaxSize should be set in consideration with both of these aspects.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>214. Is IdentityHashMap thread-safe?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The implementation of IdentityHashMap is not thread-safe, since its methods are not synchronized.<br/><br/> 
The iterators returned by the iterator method of IdentityHashMap are fail-fast. But the fail-fast behavior of an iterator cannot be guaranteed.<br/><br/> 
Since the Iterator is fail-fast, it throws ConcurrentModificationException.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>215. What is a WeakHashMap in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
WeakHashMap is a class similar to IdentityHashMap.<br/><br/> 
Internally, it is represented by a Hashtable.<br/><br/> 
It is not a synchronized class. We can make a WeakHashMap threadsafe by using <code><b>Collections.synchronizedMap()</b></code> method.<br/><br/> 
An entry in WeakHashMap is automatically removed when it is no longer in ordinary use.<br/><br/> 
The presence of a mapping for a given key does not prevent the key from being discarded by the garbage collector.<br/><br/> 
WeakHashMap also permits null keys and null values.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>216. How can you make a Collection class read Only in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, there are useful methods to make a Collection class read Only. We can make the Collection read Only by using one of the following methods :<br/> 
<ul>
<li><code><b>Collections.unmodifiableMap(Map m)</b></code></li>
<li><code><b>Collections.unmodifiableList(List l)</b></code></li>
<li><code><b>Collections.unmodifiableSet(Set s)</b></code></li>
<li><code><b>Collections.unmodifiableCollection(Collection c)</b></code></li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>217. When is UnsupportedOperationException thrown in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Java collection UnsupportedOperationException is thrown when the requested operation is not supported by the collection.<br/><br/> 
It is an unchecked exception that is thrown on optional operations.<br/><br/> 
If there is an optional add() or remove() methods in a read only collection, then this exception can be thrown.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>218. Let say there is a Customer class. We add objects of Customer class to an ArrayList. How can we sort the Customer objects in ArrayList by using customer FirstName attribute of Customer class?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are two ways to handle this scenario. We can use these options : 
<ul>
<li><b>Comparable :</b> Implement the Comparable interface for Customerclass and compare customer objects by firstName attribute.</li>
<li><b>Comparator :</b> Implement Comparator for comparing two Customerobjects on the basis of firstName attribute. Then use this comparator object 
in sort method of Collections class.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>219. What is the difference between Synchronized Collection and Concurrent Collection?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java 1.5 many Concurrent collection classes were added in SDK. Theseare <code><b>ConcurrentHashMap</b></code>, <code><b>CopyOnWriteArrayList</b></code>, 
<code><b>BlockingQueue</b></code> etc.<br/><br/> 
Java also provides utility methods to get a synchronized copy of collectionlike ArrayList, HashMap etc. by using 
<code><b>Collections.synchronizedList()</b></code>, <code><b>Collections.synchronizedMap()</b></code> methods.<br/><br/> 
The main difference is in performance. Concurrent collection classes have better performance than synchronized collection classes because they lock 
only a portion of the class to achieve concurrency and thread-safety.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>220. What is the scenario to use ConcurrentHashMap in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ConcurrentHashMap is more suited for scenarios where we have multiple reader threads and one writer thread. In this case map is locked only during 
the write operation.<br/><br/> If we have an equal number of reader and writer threads then ConcurrentHashMap performance is similar to a Hashtable 
or asynchronized HashMap.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>221. How will you create an empty Map in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are two ways to create an empty Map in Java.
<ol>
<li>Immutable: If we want an immutable empty Map, we canuse following code :
 <pre><code class="language-html hljs xml">myMap = Collections.emptyMap();</code></pre></li>
<li>Any map: For all other scenarios, we can use following code by using new method : 
 <pre><code class="language-html hljs xml">myMap = new HashMap();</code></pre></li>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>222. What is the difference between remove() method of Collection and remove() method of Iterator?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Collection interface, <code><b>remove(Object o)</b></code> method is used to remove objects from a Collection.<br/><br/> 
List interface also provides <code><b>remove(int index)</b></code> method to remove anobject at a specific index.<br/><br/> 
These methods are used to remove an entry from Collection, while no thread is iterating over it.<br/><br/> 
When we are iterating over a Collection, then we have to <code><b>remove()</b></code> method of Iterator. This method removes current element 
from Iterator’s point of view. If we use <code><b>remove( 0 )</b></code> method of Collection or List, then we will get 
ConcurrentModificationException.<br/><br/> 
Therefore, it is recommended to use <code><b>remove()</b></code> method of Iteratorduring the traversal of a Collection by an Iterator.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>223. Between an Array and ArrayList, which one is the preferred collection for storing objects?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An ArrayList is backed up by array internally. There are many usability advantages of using an ArrayList over an array in Java.<br/><br/> 
Array has a fixed length at the time of creation. Once it is created we cannot change its length.<br/><br/> 
ArrayList is dynamic in size. Once it reaches a threshold, it automatically allocates a new array and copies contents of old array to new array.<br/><br/> 
Also ArrayList provides support of Generics. But Array does not support Generics.<br/><br/> 
Example. If we store an Integer object in a String array at Runtime it will throw ArrayStoreException. Whereas, if we use ArrayList then as compile time 
we will get the error. This helps in preventing errors from happening at runtime.<br/><br/> 
If we know the size in advance and do not need re-sizing the collection then Array should be used in place of an ArrayList.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>224. Is it possible to replace Hashtable with ConcurrentHashMap in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, a ConcurrentHashMap can be replaced with Hashtable in Java.<br/><br/> 
But it requires careful observation, since locking behavior of Hashtable is different than that of ConcurrentHashmap.<br/><br/> 
A Hashtable locks whole Map instead of a portion of Map. Compound operations like <code><b>if (Hashtable.get(key) == null)</b></code>, 
<code><b>put(key,value)</b></code> work in Hashtable but not in ConcurrentHashMap.<br/><br/> 
In a ConcurrentHashMap we use <code><b>putIfAbsent()</b></code> method for such a scenario.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>225. How CopyOnWriteArrayList class is different from ArrayList and Vector classes?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
CopyOnWriteArrayList was introduced in Java 1.5. It implements List interface.<br/><br/> 
It provides better concurrent access methods than a SynchronizedList.<br/><br/> 
In CopyOnWriteList, concurrency is achieved by copying ArrayListover each write and replace with original instead of locking.<br/><br/> 
CopyOnWriteArrayList also does not throw any ConcurrentModificationException during Iteration.<br/><br/> 
It is a thread-safe list.<br/><br/> 
It is different from a Vector in terms of Concurrency.<br/><br/> 
CopyOnWriteArrayList provides better Concurrency by reducing contention among readers and writers.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>226. Why ListIterator has add() method but Iterator does not have?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
ListIterator can iterate in the both directions of a Collection. It maintains two pointer for previous and next element. In ListIterator we can use add() 
method to add an element into the list immediately before the element returned by <code><b>next()</b></code> method.<br/><br/> 
So a subsequent call to <code><b>next()</b></code> method will not be affected. And the call to <code><b>previous()</b></code> method will return the 
newly added element.<br/><br/> 
In Iterator we can only traverse in one direction. So there is nopurpose of <code><b>add()</b></code> method there.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>227. Why do we sometime get ConcurrentModificationException during iteration?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When we remove an object by using <code><b>remove()</b></code> method of aCollection or List while an Iterator thread is traversing it, we get 
ConcurrentModificationException. If an Iterator detects any structural change in Collection it can throw ConcurrentModificationException.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>228. How will you convert a Map to a List in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, a Map has three collection sets:
<ul>
<li>key set</li>
<li>value set</li>
<li>key-value set</li>
</ul>
Each of these Sets can be converted to List by using a constructor.
Sample code is as follows:
<pre><code class="language-html hljs xml">List keyList = new ArrayList(map.keySet());</code></pre>
<pre><code class="language-html hljs xml">List valueList = new ArrayList(map.values());</code></pre>
<pre><code class="language-html hljs xml">List entryList = new ArrayList(map.entrySet());</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>229. How can we create a Map with reverse view and lookup in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Map we can lookup for a value by using a distinct key. In a Map with reverse view and lookup, even the values are distinct. So there is one to one 
mapping between keys and values and vice version.<br/><br/> 
If we enable this constraint on a Map then we can look up a key by its value. Such data structure is called bi-directional map.<br/><br/> 
There is no built data structure similar to reverse lookup Map in JDK.<br/><br/> 
But Apache Common Collections and Guava libraries provide implementation of bidirectional map. It is called BidiMap and BiMap.<br/><br/>  
Both of these data structure enforce the constraint of one-to-one mapping between keys and values.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>230. How will you create a shallow copy of a Map?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, most implementations of Map interface provide a constructor to create copy of another map. But the copy method is not synchronized.<br/><br/> 
Therefore, when a thread is copying the map, another thread can modify it.<br/><br/> 
To prevent such a scenario,we should use <code><b>Collections.synchronizedMap()</b></code> method to first create a thread-safe map.<br/><br/> 
Another way of to create a shallow copy is by using <code><b>clone()</b></code> method. But it is not considered as a recommended approach.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>231. Why we cannot create a generic array in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java does not allow creation of array with generics as elements.<br/><br/> 
In Java an array has to know the type information of its elements at runtime.<br/><br/> 
This information is used at runtime to throw ArrayStoreException if data type of an element to be inserted does not match the type of Array.<br/><br/> 
In case of Generics, the type information of a collection is erased at runtime by Type Erasure. Due to this array cannot use generics as elements.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>232. What is a PriorityQueue in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A PriorityQueue is data structure based on Queue. Unlike Queue, the elements on PriorityQueue are not returned in FIFO order.<br/><br/> 
A PriorityQueue maintains the natural order of its elements or it uses a Comparator provided at initialization.<br/><br/> 
It is an unbounded queue based on a priority heap.<br/><br/> 
PriorityQueue does not allow null values. We cannot add any object that does not provide natural ordering to PriorityQueue.<br/><br/> 
PriorityQueue in Java is not thread-safe.<br/><br/> 
It gives O(log n) time for enqueing and dequeing operations.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>233. What are the important points to remember while using Java Collections Framework?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the important points to remember while using Java Collections Framework are :
<ol>
<li><b>Interfaces :</b> For Collections, we should write code with generic interfaces instead of concrete implementation. Due to this we maintain the flexibility 
of changing the implementation at a later point of time.</li>
<li><b>Generics :</b> We should use Generics for type-safety and to avoid ClassCastException at runtime.</li>
<li><b>Collections :</b> It is recommended to use Collections utility class for algorithms and various other common methods for Collections.</li>
<li><b>Right Type :</b> We have to choose the right type of Java collection based on our need. If size is fixed, we can useArray over ArrayList. If we do not 
want duplicate elements we use Set.If we need the ability to iterate the elements of a Map in the order of insertion then we use a TreeMap.</li>
<li><b>Initial Size :</b> In some collection classes we can specify the initial size/capacity. Therefore we should have an estimate of number of elements in 
a Collection before deciding the right collection type. We can use it to avoid rehashing or resizing.</li>
<li><b>Map :</b> We should use immutable classes provided by Javaas key elements in a Map.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>234. How can we pass a Collection as an argument to a method and ensure that method will not be able to modify it?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To ensure that a method is not able to modify a Collection passed as an argument, we have to make the Collection read only.<br/><br/> 
We can make a read only collection by using <code><b>Collections.unmodifiableCollection(Collection c)</b></code> method.<br/><br/> 
This will make sure that any operation to change the collection will throw UnsupportedOperationException.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>235. Can you explain how HashMap works in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Java, a HashMap works on the concept of hashing.<br/><br/> 
A HashMap in Java stores both key and value objects, in a bucket. It is stored as an Entry object that implements Map.Entry interface.<br/><br/> 
The key object used in a HashMap has to provide implementation for <code><b>hashCode()</b></code> and <code><b>equals()</b></code> methods.<br/><br/> 
When <code><b>put()</b></code> method is used to store a key-value pair, the HashMap implementation calls hashCode() method on Key object to calculate 
a hash that is used to find a bucket where Entry object will be stored.<br/><br/> 
When <code><b>get()</b></code> method is used to retrieve a value stored against a keyobject, we first calculate a hash of Key object. Then we use this 
hash to find the bucket in which that particular key is stored.<br/><br/> 
Once Key object’s location is found, it may happen that more than one Key is stored in same location. So now we use <code><b>equals()</b></code> method 
to find the exact Key object. Once the exact Key object is found we use it to get Value object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>236. Can you explain how HashSet is implemented in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Internally, a HashSet uses a HashMap to store the elements and to maintain the uniqueness of elements.<br/><br/> 
When we create a HashSet object, a corresponding HashMap object is also created.<br/><br/> 
When we insert an element in HashSet, it inserts it into corresponding HashMap.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>237. What is a NavigableMap in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As the name suggests, NavigableMap provides the capability tonavigate the keys of a Map in Java. A NavigableMap extends SortedMap interface.<br/><br/> 
Some of the interesting methods of a NavigableMap are <code><b>descendingKeySet()</b></code>, <code><b>descendingMap()</b></code>, <code><b>headMap()</b></code> 
and <code><b>tailMap()</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>238. What is the difference between descendingKeySet() and descendingMap() methods of NavigableMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The <code><b>descendingKeySet()</b></code> method of NavigableMap returns a NavigableSet in which the elements are stored in reversed order as compared 
to the original key set.<br/><br/> 
The returned view is internally represented by the original KeySet of NavigableMap. Therefore any changes to the descending set also get reflected in 
the original set.<br/><br/> But it is not recommended to remove elements directly from the keyset. We should use the <code><b>Map.remove()</b></code> 
method.<br/><br/> 
The descendingMap() method of NavigableMap returns a NavigableMap which is an inverse view of the original Map. The order of the elements in this view 
are in reverse order of the elements in original map. Any changes to this view are also reflected in the original map.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>239. What is the advantage of NavigableMap over Map?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main advantage of NavigableMap over Map is the Navigation capability.<br/><br/> 
It provides the capabilities of a Map, SortedMap and navigation in one collection.<br/><br/> 
It even returns the closest matches for given search targets.<br/><br/> 
Methods like lowerEntry, floorEntry, ceilingEntry, and higherEntry return <code><b>Map.Entry</b></code> objects associated with keys respectively 
less than, less than or equal, greater than or equal, and greater than a given key.<br/><br/> 
Methods like lowerKey, floorKey, ceilingKey, and higherKey return only the associated keys. All of these methods are designed for locating, not 
traversing entries.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>240. What is the difference between headMap(), tailMap() and subMap() methods of NavigableMap?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The headMap() method returns a view of the original NavigableMap that contains the elements that are less than a given element.
<pre><code class="language-html hljs xml">NavigableMap original = new TreeMap();
original.put("1", "1");
original.put("2", "2");
original.put("3", "3");</code></pre>
<pre><code class="language-html hljs xml">// this headmap1 will contain elements "1" and "2"
SortedMap headmap1 = original.headMap("3");</code></pre>
<pre><code class="language-html hljs xml">// this headmap2 will contain elements "1", "2", and "3" because "inclusive"=true 
NavigableMap headmap2 = original.headMap("3", true);</code></pre>
The tailMap() method works similar to headMap() method, but it returns all elements that are higher than the given input element.<br/><br/> 
The subMap() method accepts two parameters demarcating theboundaries of the view map to return.<br/><br/>
All the three methods return a subset of the original map in a viewform.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>241. How will you sort objects by Natural order in a Java List?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use <code><b>Collections.sort</b></code> method to sort the elements of a List in natural order. To use this method, we have to make sure 
that element objects implement <code><b>compareTo()</b></code> method.<br/><br/> 
We can also use a Comparator to define the natural ordering for elements of a List. Then we can use this Custom Comparator in sort method of 
Collections class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>242. How can we get a Stream from a List in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
From Java 8 onwards it is a very easy to get a Stream from a List.<br/><br/> 
We can just use <code><b>stream()</b></code> method to get a stream from a list of elements.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>243. Can we get a Map from a Stream in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, we can create a Map from the elements of a Stream. We can use map() method to get a Map.<br/><br/> 
<b>Example :</b> 
<pre><code class="language-html hljs xml">items.stream().map( item -> item.toLowerCase() )</code></pre> 
In this example, we are creating a map with each item object mapped to its LowerCase equivalent.<br/><br/> 
This is also used in Map-Reduce implementation on a Stream.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>244. What are the popular implementations of Deque in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The two most popular implementation of Deque interface in Java are :
<ol>
<li><b>ArrayDeque :</b> It is a resizable array implementation of Deque. The capacity of ArrayDeque can increase based on the need of the program. 
It is not thread safe implementation. Also the iterator on ArrayDeque is fail-fast.</li>
<li><b>LinkedList :</b> This is another popular implementation of Deque interface in Java. It is also not synchronized, so it is not thread-safe. 
It mainly provides functionality of a doubly linked list.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>
