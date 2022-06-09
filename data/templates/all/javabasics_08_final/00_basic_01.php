
<div class="appQuestion"><b>70. How can you change the value of a final variable in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Java does not allow changing the value of a final variable. Once the value is set, it cannot be changed.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>71. Can a class be marked final in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, a class can be marked final in Java. Once a class is marked final, it cannot be extended.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>72. How can we create a final method in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To mark a method, add modifier final to that method. A final method can not be overridden by a child class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>73. How can we prohibit inheritance in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If you mark a class final, it cannot be extended. This will prohibit the inheritance of that class in Java.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>74. Why Integer class in final in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Integer class is a wrapper for int. If it is not marked final, then anyother class can extend it and modify the behavior of Integer operations. 
To avoid this Integer wrapper class is marked as final.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>75. What is a blank final variable in Java?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When we declare a final variable without giving any initial value, then it is called blank final variable.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>76. How can we initialize a blank final variable?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A blank final instance variable can be initialized in a constructor. A blank final static variable can be initialized in the static block of class.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>77. Is it allowed to declare main method as final?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, we can mark the main method as final.
<!-- Answer ::: END -->
</div>
</div>
