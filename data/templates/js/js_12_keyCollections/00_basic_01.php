<div><b>1. What is a WeakMap in ES6? How is it different from a Map?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The WeakMap is a collection of key/value pairs, just like the Map. The keys of WeakMap, on the other hand, must be objects, whereas the 
values can be anything. The object references in the keys are held weakly, which means that if there is no other reference to the object, 
it will be eligible for garbage collection. WeakMap, but not Map, permits the garbage collector to complete its duty. The array of keys 
would preserve references to key objects in manually constructed maps, prohibiting them from being garbage collected. References to key 
objects in native WeakMaps are held "weakly," which means they do not hinder garbage collection if there is no other reference to the 
object. The Map API and the WeakMap API are the same.<br/><br/>
WeakMap keys, on the other hand, are not enumerable, unlike Map objects. There are also no methods that return a list of keys. If they 
were, the list would be non-deterministic because it would be dependent on the state of garbage collection. A Map should be used if we 
need a list of keys.
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