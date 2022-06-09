<div><b>What is Export Default and Named Export in ES6?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
With the help of the import statement, the export statement comes into picture when one needs to export functions, objects, and 
variables to other JavaScript modules. There are two methods for exporting:<br/><br/>
<ol>
<li><b>Named Export:</b> Named exports are useful when one has to export multiple values. The name of the imported module must match 
that of the exported module.<br/><br/>
Let us Consider two files Rectangle.js and Test.js:
<pre><code class="language-html hljs xml">function perimeter(x, y) {
  return 2 * (x + y);
}
function area(x, y) {
  return x * y;
}
export { perimeter, area };</code></pre>
<div align="center"><b>Rectangle.js</b></div>
<div align="center">(Exported <code><b>perimeter</b></code> and <code><b>area</b></code> functions in the Rectangle.js)</div><br/><br/>

<pre><code class="language-html hljs xml">import { perimeter, area } from './rectangle;
console.log(perimeter(4, 6)) //20
console.log(area(4, 6)) //24</code></pre>
<div align="center"><b>Test.js</b></div>
<div align="center">(Imported <code><b>perimeter</b></code> and <code><b>area</b></code> functions from Rectangle.js into Test.js File)<br/><br/></div>
</li>
<li><b>Default Export:</b> There is only one default export per module when it comes to default exports. A function, a class, an object, 
or anything else can be used as a default export. In default export, the naming of imports is fully autonomous, and we can choose any name we like.<br/><br/>
Let us Consider two files Module.js and Test.js:
<pre><code class="language-html hljs xml">var a = 6; 
export default a;</code></pre>
<div align="center"><b>Module.js</b></div>
<div align="center">(Exported variable <code><b>a</b></code> as a <code><b>default</b></code>)</div>
<br/><b>Output:</b>
<pre><code class="language-html hljs xml">20
24</code></pre>

<pre><code class="language-html hljs xml">import b from './Module'; 
console.log(b);   </code></pre>
<div align="center"><b>Test.js</b></div>
<div align="center">(Variable <code><b>a</b></code> from <code><b>Module.js</b></code> is  imported into <code><b>Test.js</b></code> in the form of 
<code><b>b</b></code>)</div>
<br/><b>Output:</b>
<pre><code class="language-html hljs xml">6</code></pre>
</li>
<li><b>Using Named and Default Exports at the same time:</b> In the same file, you can utilise both Named and Default exports. It means they'll 
both be imported into the same document.
<pre><code class="language-html hljs xml">var a = 3;
const b = 8;
function show() {
   return "This is a default export."
}
function product(a , b) {
  return a * b;
}
export { show as default, a, b, product };</code></pre>
<div align="center"><b>Index.js</b></div>
<pre><code class="language-html hljs xml">import any_other_name, { a, b, product} from './index.js';
console.log(any_other_name()); 
//This is a default export.
console.log(a); //3</code></pre>
<div align="center"><b>Test.js</b></div>
<div align="center">(<code><b>Index.js</b></code> exported Default and Name Exports at a time and <code><b>Test.js</b></code> imported it in this way.)</div>
<br/><b>Output:</b>
<pre><code class="language-html hljs xml">This is a default export
3</code></pre>
</li>
</ol>
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