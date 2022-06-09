<div><b>2. What are tags and attributes in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Tags are the primary component of the HTML that defines how the content will be structured/ formatted, whereas Attributes are used along with the HTML tags
 to define the characteristics of the element. For example, <code>&lt;p align=” center”&gt;Interview questions&lt;/p&gt;</code>, in this the ''align' 
 is the attribute using which we will align the paragraph to show in the center of the view.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>4. What is the advantage of collapsing white space?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In HTML, a blank sequence of whitespace characters is treated as a single space character, Because the browser collapses multiple spaces 
into a single space character and this helps a developer to indent lines of text without worrying about multiple spaces and maintain readability 
and understandability of HTML codes.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>6. What are different types of lists in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are two types of List:
<ul>
<li>
<div><b>UnOrdered List -</b> They will be displayed in Bullets order.</div>
<div><b>Example:</b><br/>
<div class="table-responsive">          
<table class="table">
<thead>
 <tr>
    <th>Code</th>
    <th>Output</th>
 </tr>
</thead>
<tbody>
<tr>
<td>
<code>
&lt;ul&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #1&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #2&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #3&lt;/li&gt;<br/>
&nbsp;&lt;/ul&gt;<br/>
</code>
</td>
<td>
<code>
<ul>
<li>List #1</li>
<li>List #2</li>
<li>List #3</li>
</ul>
</code> 
</td>
</tr>
</tbody>
</table>
</div>  

</div>
</li>
<li>
<div><b>Ordered List -</b> They will be displayed in Numeric / Alphabetic / Roman order.</div>
<div><b>Example:</b><br/>
<div class="table-responsive">          
<table class="table">
<thead>
 <tr>
	<th>Order Type</th>
    <th>Code</th>
    <th>Output</th>
 </tr>
</thead>
<tbody>
<tr>
<td><b>Numeric Order<br/> (Default)</b></td>
<td>
<code>
&lt;ol type="1"&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #1&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #2&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #3&lt;/li&gt;<br/>
&nbsp;&lt;/ol&gt;
</code>
</td>
<td>
<code>
<ol>
<li>List #1</li>
<li>List #2</li>
<li>List #3</li>
</ol>
</code>
</td>
</tr>
<tr>
<td><b>Alphabetic Order<br/> (Capital Case)</b></td>
<td>
<code>
&lt;ol type="A"&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #1&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #2&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #3&lt;/li&gt;<br/>
&nbsp;&lt;/ol&gt;
</code>
</td>
<td>
<code>
<ol type="A">
<li>List #1</li>
<li>List #2</li>
<li>List #3</li>
</ol>
</code>
</td>
</tr>
<tr>
<td><b>Alphabetic Order<br/> (Small Case)</b></td>
<td>
<code>
&lt;ol type="a"&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #1&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #2&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #3&lt;/li&gt;<br/>
&nbsp;&lt;/ol&gt;
</code>
</td>
<td>
<code>
<ol type="a">
<li>List #1</li>
<li>List #2</li>
<li>List #3</li>
</ol>
</code>
</td>
</tr>
<tr>
<td><b>Roman Order<br/> (Capital Case)</b></td>
<td>
<code>
&lt;ol type="I"&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #1&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #2&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #3&lt;/li&gt;<br/>
&nbsp;&lt;/ol&gt;
</code>
</td>
<td>
<code>
<ol type="I">
<li>List #1</li>
<li>List #2</li>
<li>List #3</li>
</ol>
</code>
</td>
</tr>
<tr>
<td><b>Roman Order<br/> (Small Case)</b></td>
<td>
<code>
&lt;ol type="i"&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #1&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #2&lt;/li&gt;<br/>
&nbsp;&nbsp;&lt;li&gt;List #3&lt;/li&gt;<br/>
&nbsp;&lt;/ol&gt;
</code>
</td>
<td>
<code>
<ol type="i">
<li>List #1</li>
<li>List #2</li>
<li>List #3</li>
</ol>
</code>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</li>
<li>
<div><b>Definition List -</b> A Definition List or dl tag arrange the items in the way in which they are arranged in a dictionary.</div>
<div><b>Example:</b></div>
<div class="table-responsive">
<table class="table">
<thead>
 <tr>
    <th>Code</th>
    <th>Output</th>
 </tr>
</thead>
<tbody>
<tr>
<td>
<code>
&lt;dl&gt;<br/>
&nbsp;&nbsp;&lt;dt&gt;Coffee&lt;/dt&gt;<br/>
&nbsp;&nbsp;&lt;dd&gt;Black hot drink&lt;/dd&gt;<br/>
&nbsp;&nbsp;&lt;dt&gt;Milk&lt;/dt&gt;<br/>
&nbsp;&nbsp;&lt;dd&gt;White cold drink&lt;/dd&gt;<br/>
&nbsp;&lt;/dl&gt;
</code>
</td>
<td>
<code>
<dl>
<dt>Coffee</dt>
<dd>Black hot drink</dd>
<dt>Milk</dt>
<dd>White cold drink</dd>
</dl>
</code> 
</td>
</tr>
</tbody>
</table>
</div>
</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>8. What is the difference between the id attribute and the class attribute of HTML elements?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Multiple elements in HTML can have the same class value, whereas a value of id attribute of one element cannot be associated with another HTML element.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>10. Describe HTML layout structure.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Every web page has different components to display the intended content and a specific UI. But still, there are few things which are templated and 
are globally accepted way to structure the web page, such as:
<ul>
<li>
<strong>&lt;header&gt;</strong>: Stores the starting information about the web page.</li>
<li>
<strong>&lt;footer&gt;</strong>: Represents the last section of the page.</li>
<li>
<strong>&lt;nav&gt;</strong>: The navigation menu of the HTML page.</li>
<li>
<strong>&lt;article&gt;</strong>: It is a set of information.</li>
<li>
<strong>&lt;section&gt;</strong>: It is used inside the article block to define the basic structure of a page.</li>
<li>
<strong>&lt;aside&gt;</strong>: Sidebar content of the page.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>12. What are the various formatting tags in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML has various formatting tags:
<ul>
<li>
<strong>&lt;b&gt;</strong> - makes text bold</li>
<li>
<strong>&lt;i&gt;</strong> - makes text italic</li>
<li>
<strong>&lt;em&gt;</strong> - makes text italic but with added semantics importance</li>
<li>
<strong>&lt;big&gt;</strong> - increases the font size of the text by one unit</li>
<li>
<strong>&lt;small&gt;</strong> - decreases the font size of the text by one unit</li>
<li>
<strong>&lt;sub&gt;</strong> - makes the text a subscript</li>
<li>
<strong>&lt;sup&gt;</strong> - makes the text a superscript</li>
<li>
<strong>&lt;del&gt;</strong> - displays as strike out text</li>
<li>
<strong>&lt;strong&gt;</strong> - marks the text as important</li>
<li>
<strong>&lt;mark&gt;</strong> - highlights the text</li>
<li>
<strong>&lt;ins&gt;</strong> - displays as added text</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>14. Please explain how to indicate the character set being used by a document in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The character set is defined in <code>&lt;meta&gt;</code> tag inside <code>&lt;head&gt;</code> element.
<pre><code class="language-html"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"UTF-8"</span>&gt;</span>
   ...
   ...
 <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
 ...
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>16. What is the significance of <code>&lt;head&gt;</code> and <code>&lt;body&gt;</code> tag in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code>&lt;head&gt;</code> tag provides the information about the document. It should always be enclosed in the <code>&lt;html&gt;</code> tag. This tag 
contains the metadata about the webpage and the tags which are enclosed by head tag like <code>&lt;link&gt;</code>, <code>&lt;meta&gt;</code>, 
<code>&lt;style&gt;</code>, <code>&lt;script&gt;</code>, etc. are not displayed on the web page. Also, there can be only 1 <code>&lt;head&gt;</code> 
tag in the entire Html document and will always be before the <code>&lt;body&gt;'</code> tag.<br/>
<code>&lt;body&gt;</code> tag defines the body of the HTML document. It should always be enclosed in the <code>&lt;html&gt;</code> tag. All the contents 
which needs to be displayed on the web page like images, text, audio, video, contents, using elements like <code>&lt;p&gt;</code>, 
<code>&lt;img&gt;</code>, <code>&lt;audio&gt;</code>, <code>&lt;heading&gt;</code>, <code>&lt;video&gt;</code>, <code>&lt;div&gt;</code>, etc. 
will always be enclosed by the <code>&lt;body&gt;</code> tag. Also, there can be only 1 body element in an HTML document and will always be after 
the <code>&lt;head&gt;</code> tag.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>18. How is Cell Padding different from Cell Spacing?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Cell Spacing is the space or gap between two consecutive cells. Whereas, Cell Padding is the space or gap between the text/ content of the cell 
and the edge/ border of the cell. Please refer to the above figure example to find the difference.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>20. Is it possible to change an inline element into a block level element?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, it is possible using the “display” property with its value as “block”, to change the inline element into a block-level element.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>22. In how many ways you can display HTML elements?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>
<strong>inline</strong>: Using this we can display any block-level element as an inline element. The height and width attribute values of the element will not affect.</li>
<li>
<strong>block</strong>: using this, we can display any inline element as a block-level element.&nbsp;</li>
<li>
<strong>inline-block</strong>: This property is similar to inline, except by using the display as inline-block, we can actually format the element using height and width values.</li>
<li>
<strong>flex</strong>: It displays the container and element as a flexible structure. It follows flexbox property.</li>
<li>
<strong>inline-flex</strong>: It displays the flex container as an inline element while its content follows the flexbox properties.</li>
<li>
<strong>grid</strong>: It displays the HTML elements as a grid container.</li>
<li>
<strong>none</strong>: Using this property we can hide the HTML element.</li>
</ol>
Below are some of the display types which are rarely used:
<ol>
<li>table</li>
<li>inline-table</li>
<li>table-cell</li>
<li>table-column</li>
<li>table-row</li>
<li>inline-grid</li>
<li>list-item</li>
<li>inherit</li>
<li>initial</li>
<li>table-caption</li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>24. How to specify the link in HTML and explain the target attribute?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML provides a hyperlink - <code>&lt;a&gt;</code> tag to specify the links in a webpage. The ‘href’ attribute is used to specify the link and the 
‘target’ attribute is used to specify, where do we want to open the linked document. The ‘target’ attribute can have the following values:
<ol>
<li>
<strong>_self</strong>: This is a default value. It opens the document in the same window or tab as it was clicked.</li>
<li>
<strong>_blank</strong>: It opens the document in a new window or tab.</li>
<li>
<strong>_parent</strong>: It opens the document in a parent frame.</li>
<li>
<strong>_top</strong>: It opens the document in a full-body window.</li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>26. Difference between link tag <code>&lt;link&gt;</code> and anchor tag <code>&lt;a&gt;</code>?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The anchor tag <code>&lt;a&gt;</code> is used to create a hyperlink to another webpage or to a certain part of the webpage 
and these links are clickable, whereas, link tag <code>&lt;link&gt;</code> defines a link between a document and an external 
resource and these are not clickable.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>28. How to include javascript code in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML provides a <code>&lt;script&gt;</code> tag using which we can run the javascript code and make our HTML page more dynamic.
<pre><code class="language-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>This is a demo for <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-name">u</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"demo"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">u</span>&gt;</span>
   <span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">script</span>&gt;</span><span class="javascript">
       <span class="hljs-built_in">document</span>.getElementById(<span class="hljs-string">"demo"</span>).innerHTML = <span class="hljs-string">"script Tag"</span>
   </span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
   <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>30. How to handle events in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML allows event trigger actions in browsers using javascript or JQuery. There are a lot of events like ‘onclick’, ‘ondrag’, ‘onchange’, etc.
<pre><code class="language-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">body</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"padding-top:50px"</span>&gt;</span>
       <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"event_demo"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
       <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">onclick</span>=<span class="hljs-string">"myFunction()"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Click Me"</span> /&gt;</span>
       <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"reset"</span> <span class="hljs-attr">onclick</span>=<span class="hljs-string">"reset()"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Reset"</span> /&gt;</span>
   <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
   
   <span class="hljs-tag">&lt;<span class="hljs-name">script</span>&gt;</span><span class="javascript">
       <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">myFunction</span>(<span class="hljs-params"></span>) </span>{
           <span class="hljs-keyword">var</span> value = <span class="hljs-built_in">document</span>.getElementById(<span class="hljs-string">"event_demo"</span>).innerHTML
           value = <span class="hljs-built_in">parseInt</span>(value) + <span class="hljs-number">1</span>;
           <span class="hljs-built_in">document</span>.getElementById(<span class="hljs-string">"event_demo"</span>).innerHTML = value;
       }
       <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">reset</span>(<span class="hljs-params"></span>) </span>{
           <span class="hljs-built_in">document</span>.getElementById(<span class="hljs-string">"event_demo"</span>).innerHTML = <span class="hljs-number">0</span>;
       }
   </span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>32. What are some of the advantages of HTML5 over its previous versions?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Some advantages of HTML5 are
<ul>
<li>It has Multimedia Support.</li>
<li>It has the capabilities to store offline data using SQL databases and application cache.</li>
<li>Javascript can be run in the background.</li>
<li>HTML5 also allows users to draw various shapes like rectangles, circles, triangles, etc.</li>
<li>Included new Semantic tags and form control tags.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>34. How can we include audio or video in a webpage?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML5 provides two tags: <code>&lt;audio&gt;</code> and <code>&lt;video&gt;</code> tags using which we can add the audio or video directly in the webpage.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>36. Inline and block elements in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
  <table class="table">
<thead><tr>
<th>Inline</th>
<th>Block</th>
</tr></thead>
<tbody><tr>
<td>Inline elements just take up the space that is absolutely necessary for the content and does not start from a new line.<br>Example:- &lt;span&gt;, &lt;a&gt;, &lt;strong&gt;, &lt;img&gt;, &lt;button&gt;, &lt;em&gt;, &lt;select&gt;, &lt;abbr&gt;, &lt;label&gt;, &lt;sub&gt;, &lt;cite&gt;, &lt;abbr&gt;, &lt;script&gt;, &lt;label&gt;, &lt;i&gt;, &lt;input&gt;, &lt;output&gt;, &lt;q&gt;, etc.</td>
<td>Block elements start on a new line and consume the full width of the page available.<br>Example:- &lt;div&gt;, &lt;p&gt;, &lt;header&gt;, &lt;footer&gt;, &lt;h1&gt;...&lt;h6&gt;, &lt;form&gt;, &lt;table&gt;, &lt;canvas&gt;, &lt;video&gt;, &lt;blockquote&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;figcaption&gt;, &lt;figure&gt;, &lt;hr&gt;, &lt;article&gt;, &lt;section&gt;, etc.</td>
</tr></tbody>
</table>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>38. What are Semantic Elements?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Semantic elements are those which describe the particular meaning to the browser and the developer. Elements like <code>&lt;form&gt;</code>, 
<code>&lt;table&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;figure&gt;</code>, etc., are semantic elements.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>40. Is drag and drop possible using HTML5 and how?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, in HTML5 we can drag and drop an element. This can be achieved using the drag and drop-related events to be used with 
the element which we want to drag and drop.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>42. What type of audio files can be played using HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML5 supports the following three types of audio file formats:
<ol>
<li>Mp3</li>
<li>WAV</li>
<li>Ogg</li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>44. Explain the concept of web storage in HTML5.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
This web storage helps in storing some of the static data in the local storage of the browser so that we do not need to fetch it 
from the server every time we need it. There is a size limit based on different browsers. This helps in decreasing the load time 
and a smooth user experience. There are two types of web storage that are used to store data locally in HTML5:
<ul>
<li>
<strong>Local Storage</strong> - This helps in storing data that will be retained even though the user reopens the browser. 
It is stored for each webapp on different browsers.</li>
<li>
<strong>Session Storage</strong> - This is used for one session only. After the user closes the browser this gets deleted.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>46. Which tag is used for representing the result of a calculation? Explain its attributes.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code>&lt;output&gt;</code> tag is used for representing the result of a calculation. It has the following attributes:
<ul>
<li>
<strong>for</strong> - It defines the relationship between the elements used in calculation and result.</li>
<li>
<strong>form </strong>- This is used to define the form the output element belongs to.</li>
<li>
<strong>name</strong> - The name of the output element.</li>
</ul>
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">oninput</span> = <span class="hljs-string">"result.value=parseInt(n1.value)+parseInt(n2.value)"</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span> = <span class="hljs-string">"number"</span> <span class="hljs-attr">name</span> = <span class="hljs-string">"n1"</span> <span class="hljs-attr">value</span> = <span class="hljs-string">"1"</span> /&gt;</span> +
     <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span> = <span class="hljs-string">"number"</span> <span class="hljs-attr">name</span> = <span class="hljs-string">"n2"</span> <span class="hljs-attr">value</span> = <span class="hljs-string">"2"</span> /&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span> /&gt;</span>
     The output is: <span class="hljs-tag">&lt;<span class="hljs-name">output</span> <span class="hljs-attr">name</span> = <span class="hljs-string">"result"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">output</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>48. Explain HTML5 Graphics.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML5 supports two kinds of graphics:
<ul><li>
<strong>Canvas</strong> - It is like drawing on a whitepaper or a blank webpage. We can add different graphic designs on web pages with available 
methods for drawing various geometrical shapes.
<pre><code class="language-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">HTML</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">canvas</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"300"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"100"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"border:2px solid;"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">canvas</span>&gt;</span>  
 <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</li></ul>
<ul><li>
<strong>SVG</strong> - Scalable Vector Graphics are used mostly for diagrams or icons. It follows the XML format.
<pre><code class="language-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">svg</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"400"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"110"</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">rect</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"300"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"100"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"fill:#FFF;stroke-width:2;stroke:#000"</span> /&gt;</span>
   <span class="hljs-tag">&lt;/<span class="hljs-name">svg</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
</li></ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>50. What are the New tags in Media Elements in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>
<strong>&lt;audio&gt;</strong> - Used for sounds, audio streams, or music, embed audio content without any additional plug-in.</li>
<li>
<strong>&lt;video&gt;</strong> - Used for video streams, embed video content etc.</li>
<li>
<strong>&lt;source&gt;</strong> - Used for multiple media resources in media elements, such as audio, video, etc.</li>
<li>
<strong>&lt;embed&gt;</strong> - Used for an external application or embedded content.</li>
<li>
<strong>&lt;track&gt;</strong> - Used for subtitles in the media elements such as video or audio.</li>
</ul>
<b>Example:</b>
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>
       Video:
   <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">video</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"320"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"240"</span> <span class="hljs-attr">controls</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">source</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"video.mp4"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"video/mp4"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">track</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"subtitles.vtt"</span> <span class="hljs-attr">kind</span>=<span class="hljs-string">"subtitles"</span> <span class="hljs-attr">srclang</span>=<span class="hljs-string">"en"</span> <span class="hljs-attr">label</span>=<span class="hljs-string">"English"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">video</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>
        Embed:
    <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">embed</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"video/webm"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://www.youtube.com/embed/MpoE6s2psCw"</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"400"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"300"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>
        Audio:
    <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">audio</span> <span class="hljs-attr">controls</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">source</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"audio.mp3"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"audio/mpeg"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">audio</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>52. Why do we need the MathML element in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
MathML stands for Mathematical Markup Language. It is used for displaying mathematical expressions on web pages. For this <code>&lt;math&gt;</code> tag is used.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>54. What are Web Workers?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
These are added to bring parallelism and async capability. It runs in the background to do the computationally expensive tasks without yielding to 
make the page responsive. It is achieved by starting a separate thread for such tasks. These are not meant to perform UI operations. There are three 
types of web workers:
<ul>
<li>
<strong>Dedicated Workers </strong>- These are workers that are utilized by a single script.</li>
<li>
<strong>Shared Workers</strong> -These are workers that are utilized by multiple scripts running in different windows, IFrames, etc.</li>
<li>
<strong>Service Workers</strong> - These act as proxy servers between web applications, the browser, and the network. Mostly used for push 
notifications and sync APIs.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>56. What are raster images and vector images?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Raster Images -</b> The raster image is defined by the arrangement of pixels in a grid with exactly what color the pixel should be. 
Few raster file formats include PNG(.png), JPEG(.jpg), etc.
<b>Vector Images -</b> The vector image is defined using algorithms with shape and path definitions that can be used to render the 
image on-screen written in a similar markup fashion. The file extension is .svg
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>58. What are different approaches to make an image responsive?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul><li>
<strong>Art direction</strong> - Using &lt;picture&gt; element the landscape image fully shown in desktop layout can be zoomed in with the 
main subject in focus for a portrait layout.
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">picture</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">source</span> <span class="hljs-attr">media</span>=<span class="hljs-string">"(min-width: 650px)"</span> <span class="hljs-attr">srcset</span>=<span class="hljs-string">"img_cup.jpg"</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"img_marsh.jpg"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"width:auto;"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">picture</span>&gt;</span></code></pre>
</li>
<li>
<strong>Resolution switching </strong>- Instead of zoom and crop the images can be scaled accordingly using vector graphics. Also, 
this can be further optimized to serve different pixel density screens as well.&nbsp;
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">svg</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"100"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"100"</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">circle</span> <span class="hljs-attr">cx</span>=<span class="hljs-string">"50"</span> <span class="hljs-attr">cy</span>=<span class="hljs-string">"50"</span> <span class="hljs-attr">r</span>=<span class="hljs-string">"40"</span>
 <span class="hljs-attr">stroke</span>=<span class="hljs-string">"green"</span> <span class="hljs-attr">stroke-width</span>=<span class="hljs-string">"4"</span> <span class="hljs-attr">fill</span>=<span class="hljs-string">"yellow"</span> /&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">svg</span>&gt;</span></code></pre>
</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>60. What is the Geolocation API in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Geolocation API is used to share the physical location of the client with websites. This helps in serving locale-based content and a unique 
experience to the user, based on their location. This works with a new property of the global navigator object and most of the modern browsers 
support this.
<pre><code class="language-javascript hljs"><span class="hljs-keyword">var</span> geolocation = navigator.geolocation;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>62. How many types of heading does an HTML contain??</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The HTML contains six types of headings which are defined with the <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> tags. 
Each type of heading tag displays different text size from another. So, <code>&lt;h1&gt;</code> is the largest heading tag and 
<code>&lt;h6&gt;</code> is the smallest one. For example:
<pre><code class="language-html hljs">&lt;h1&gt;Heading no. 1&lt;/h1&gt;   
&lt;h2&gt;Heading no. 2&lt;/h2&gt;
&lt;h3&gt;Heading no. 3&lt;/h3&gt; 
&lt;h4&gt;Heading no. 4&lt;/h4&gt; 
&lt;h5&gt;Heading no. 5&lt;/h5&gt; 
&lt;h6&gt;Heading no. 6&lt;/h6&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>63. How to create a hyperlink in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The HTML provides an anchor tag to create a hyperlink that links one page to another page. These tags can appear in any of the following ways:
<ul>
<li><code>Unvisited link -</code> It is displayed, underlined and blue.</li>
<li><code>Visited link -</code> It is displayed, underlined and purple.</li>
<li><code>Active link -</code> It is displayed, underlined and red.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>64. Which HTML tag is used to display the data in the tabular form??</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The HTML table tag is used to display data in tabular form (row * column). It also manages the layout of the page, e.g., header section, 
navigation bar, body content, footer section. Here is the list of tags used while displaying the data in the tabular form:
<div class="table-responsive">
<table class="table">
<tbody><tr><th>Tag</th><th>Description</th></tr>
<tr><td><code>&lt;table&gt;</code></td><td>It defines a table.</td></tr>
<tr><td><code>&lt;tr&gt;</code></td><td>It defines a row in a table.</td></tr>
<tr><td><code>&lt;th&gt;</code></td><td>It defines a header cell in a table.</td></tr>
<tr><td><code>&lt;td&gt;</code></td><td>It defines a cell in a table.</td></tr>
<tr><td><code>&lt;caption&gt;</code></td><td>It defines the table caption.</td></tr>
<tr><td><code>&lt;colgroup&gt;</code></td><td>It specifies a group of one or more columns in a table for formatting.</td></tr>
<tr><td><code>&lt;col&gt;</code></td><td>It is used with &lt;colgroup&gt; element to specify column properties for each column.</td></tr>
<tr><td><code>&lt;tbody&gt;</code></td><td>It is used to group the body content in a table.</td></tr>
<tr><td><code>&lt;thead&gt;</code></td><td>It is used to group the header content in a table.</td></tr>
<tr><td><code>&lt;tfooter&gt;</code></td><td>It is used to group the footer content in a table.</td></tr>
</tbody></table>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>67. Which HTML tag is used to display the data in the tabular form??</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The HTML table tag is used to display data in tabular form (row * column). It also manages the layout of the page, e.g., header section, 
navigation bar, body content, footer section. Here is the list of tags used while displaying the data in the tabular form:
<div class="table-responsive">
<table class="table">
<tbody><tr><th>Tag</th><th>Description</th></tr>
<tr><td><code>&lt;table&gt;</code></td><td>It defines a table.</td></tr>
<tr><td><code>&lt;tr&gt;</code></td><td>It defines a row in a table.</td></tr>
<tr><td><code>&lt;th&gt;</code></td><td>It defines a header cell in a table.</td></tr>
<tr><td><code>&lt;td&gt;</code></td><td>It defines a cell in a table.</td></tr>
<tr><td><code>&lt;caption&gt;</code></td><td>It defines the table caption.</td></tr>
<tr><td><code>&lt;colgroup&gt;</code></td><td>It specifies a group of one or more columns in a table for formatting.</td></tr>
<tr><td><code>&lt;col&gt;</code></td><td>It is used with &lt;colgroup&gt; element to specify column properties for each column.</td></tr>
<tr><td><code>&lt;tbody&gt;</code></td><td>It is used to group the body content in a table.</td></tr>
<tr><td><code>&lt;thead&gt;</code></td><td>It is used to group the header content in a table.</td></tr>
<tr><td><code>&lt;tfooter&gt;</code></td><td>It is used to group the footer content in a table.</td></tr>
</tbody></table>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>70. Name some new features which were not present in HTML but are added to HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Some new features in HTML5 include:
<ul>
<li><strong>DOCTYPE declaration</strong>: &lt;!DOCTYPE html&gt;</li>
<li><strong>section</strong>: Section tag defines a section in the document, such as a header, footer or in other sections of the document. It is used to define the structure of the document. <strong>&lt;section&gt;&lt;/section&gt;</strong></li>
<li><strong>header: </strong>Header tag defines the head section of the document. A header section always sticks at the top of the document. <strong>&lt;header&gt;&lt;/header&gt;</strong></li>
<li><strong>footer: </strong>Footer tag defines the footer section of the document. A footer section always sticks at the bottom of the document. <strong>&lt;footer&gt;&lt;/footer&gt;</strong></li>
<li><strong>article: </strong>Article tag defines an independent piece of the content of a document. <strong>&lt;article&gt; &lt;/article&gt;</strong></li>
<li><strong>main: </strong>The main tag defines the main section in the document which contains the main content of the document. <strong>&lt;main&gt;&lt;/main&gt;</strong></li>
<li><strong>figcaption: </strong>Figcaption tag defines the caption for the media elements such as an image or video. <strong>&lt;figcaption&gt;&lt;/figcaption&gt;</strong></li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>73. How can we write comment in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Comment is defined in following way:
<pre><code class="language-javascript hljs xml">&lt;!-- <span class="hljs-keyword">Mention your Comment here</span> --&gt;</code></pre>
Mention it as <i>"Lessthan Symbol, Exclaimatory Mark, two hyphens, <code>Mention your Comment here</code> and then, two hyphens and Greator than symbol"</i>.<br/>
<ul>
<li>It is used in an HTML document to make important notes and help developers mention any modification to be incorporated afterward. 
 They are not displayed in the browser when the code is executed.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>74. Can we change inline elements into block-level elements?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, we can change inline elements into block-level elements by adding display equal to block in its CSS tag. Writing it will 
change the inline elements into block elements and then inline elements will also take the full width of the container.
<pre><code class="language-javascript hljs xml">display: block;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>76. What are <code>&lt;br&gt;</code> tags in HTML? </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code>&lt;br&gt;</code> tags are used to enter a new line into the HTML contents. These tags are generally used to separate two different 
lines of text between each other.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>77. Why Meta tags are used in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Meta tags in HTML are used by the developer to tell the browser about the page description, author of the template, character set, keywords and many more.
Meta tags are used for search engine optimization to tell the search engine about the page contents.
<pre><code class="language-html hljs xml">&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale = 1.0"&gt;
&lt;meta name="description" content="HTML interview questions"&gt;
&lt;meta name="author" content="Author Name"&gt;
&lt;meta name="copyright" content="All Rights Reserved"&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>78. Define iframe in HTML.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Iframe tag is written as <code>&lt;iframe&gt;</code>.<br/>
An iframe is used to display different document content inside the different document content in a rectangular region in the browser. 
When different document content is embedded into a current HTML content, then it is known as an inline iframe.<br/>
The src attribute contains the path to the document that occupies the inline iframe.
<pre><code class="language-html hljs xml">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;HTML Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;                                
&lt;iframe src = "demo_iframe.htm" width = "300" height = "300"&gt;
&lt;/iframe&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>79. Define forms in HTML.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Forms in HTML are required when we want to collect the user information whenever a user fills any form or provides any details and 
when we want to save it into our database.<br/>
<b>Example:</b><br/>
<pre><code class="language-html hljs xml">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;HTML Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;                                
&lt;form &gt;
&lt;p&gt;Name:&lt;/p&gt;
&lt;input type = "text" name = "user_name" placeholder = "Enter Name"/&gt;
&lt;br/&gt;
&lt;br/&gt;
&lt;p&gt;Email: &lt;/p&gt;
&lt;input type = "email" name = "user_email" placeholder = "Enter email"/&gt;
&lt;br/&gt;
&lt;br/&gt;
&lt;p&gt;Password: &lt;/p&gt;
&lt;input type="password" name = "user_pwd" placeholder = "Enter Password" /&gt;
&lt;br/&gt;
&lt;button&gt; Submit &lt;/button&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>82. Differentiate between HTML and XHTML.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The differences between HTML and XHTML are:
<ul>
<li>HTML stands for Hypertext Markup Language, whereas XHTML stands for Extensible Markup Language.</li>
<li>A static webpage is an HTML web page and dynamic web pages are XHTML.</li>
<li>XHTML are more stricter than HTML.</li>
<li>An XML application of HTML is defined as XHTML.</li>
<li>All modern browsers support XHTML.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>83. What are Web Workers?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Web Workers is a code of JavaScript which runs in the background threads without disturbing the performance 
of the page. It is used for computing-heavy tasks like an access database or function.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>84. What is the SVG element?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
SVG is a followed XML format; it stands for Scalable Vector Graphics which is used to create vector graphics 
with the support for interactivity and animation.<br/>
SVG is resolution independent as it does not lose its quality when they are resized or zoomed.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>85. Explain about Canvas.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Canvas is a pixel-based graphics and it is one of the new features of HTML5.<br/>
It provides a space in the document where we can draw graphics by using JavaScript and 
it is resolution dependent, hence the quality will be affected when it’s zoomed or resized.
<b>Example:</b>
<pre><code class="language-html hljs xml">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
 
&lt;canvas id="myCanvas" width="300" height="200" style="border:1px solid #d3d3d3; color: #c9cc18;"&gt;
Your browser does not support the HTML5 canvas tag.&lt;/canvas&gt;
 
&lt;script&gt;
var can = document.getElementById("myCanvas");
var canvas = can.getContext("2d");
canvas.font = "20px Hind-sanserif";
canvas.fillText("Canvas Example",30,60);
&lt;/script&gt;
&lt;/body&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>90. What are the tags used to separate a section of texts?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are three tags that can be used to separate the texts:
<ul>
<li><strong>&lt;br&gt;</strong> tag – Usually &lt;br&gt; tag is used to <strong>separate</strong> the <strong>line of text</strong>. 
It breaks the current line and conveys the flow to the next line</li>
<li><strong>&lt;p&gt;</strong> tag – This contains the <strong>text</strong> in the form of a new <strong>paragraph</strong>.</li>
<li><strong>&lt;blockquote&gt;</strong> tag – It is used to define a large quoted section. If you have a large quotation, then put the 
entire text within <strong>&lt;blockquote&gt;……….&lt;/blockquote&gt;</strong> tag.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>92. Is the <code>&lt;!DOCTYPE html&gt;</code> tag considered as a HTML tag?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No, the <code>&lt;!DOCTYPE html&gt;</code> declaration is not an HTML tag.<br/>
There are many type of HTML, such as, HTML 4.01 Strict, HTML 4.01 Transitional, HTML 4.01 Frameset, XHTML 1.0 Strict, 
XHTML 1.0 Transitional, XHTML 1.0 Frameset, XHTML 1.1 etc. So, <!DOCTYPE html> is used to instruct the web browser about the HTML page.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>94. What is the use of an iframe tag?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An iframe is used to display a web page within a web page.<br/>
<b>Syntax:</b>
<pre><code class="language-html hljs xml">&lt;iframe src="URL"&gt;&lt;/iframe&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>96. How to make a picture of a background image of a web page?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To make a picture a background image on a web page, you should put the following tag code after the <code>&lt;/head&gt;</code> tag.
<pre><code class="language-html hljs xml">&lt;body background = "image.gif"&gt;
...
&lt;/body&gt;</code></pre>
Here, replace the "image.gif" with the name of your image file which you want to display on your web page.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>98. Is there any way to keep list elements straight in an HTML file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
By using indents, you can keep the list elements straight. If you indent each sub nested list in further than 
the parent list, you can easily determine the various lists and the elements that it contains.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>100. How do you create text on a webpage that allows you to send an email when clicked?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To change the text into a clickable link to send an email, you need to use the mailto command within the href tag. 
You can write it in the following way:
<pre><code class="language-html hljs xml">&lt;a href=”mailto:youremailaddress”&gt;text to be clicked&lt;/a&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>103. What happens if there is no text between the tags? Does this affect the display of the HTML file?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If there is no text present between the tags, there is nothing to format. Therefore, no formatting will appear. Some tags, 
such as the tags without a closing tag like the <code>&lt;img&gt;</code> tag, do not require any text between them.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>106. What is a HTML Tag?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In an HTML page, tags used are to place the content and format the pages. They always defined between (&lt;) and (&gt;) symbols. 
For example, &lt;h1&gt;text&lt;/h1&gt;.<br/>
An opening tag must be preceded with a closing tag and indicated with a ‘/’ symbol.<br/>
A tag instructs the browser to format the HTML. Tags have many uses, such as changing the appearance of text, displaying a graphic, 
or linking another page.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>108. How to insert an image in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code>&lt;img&gt;</code> tag is used to add an image in a web page.<br/>
Images are not inserted into a web page basically they are linked to web pages. The <code>&lt;img&gt;</code> tag helps to create a 
holding space for the referenced image.<br/>
The <code>&lt;img&gt;</code> tag is normally empty, it has attributes only, and does not have a closing tag.<br/>
<code>&lt;img&gt;</code> tag has two required parameters:
<ul>
<li><b>src –</b> The path to the image</li>
<li><b>alt –</b> An alternate text for the image</li>
</ul>
To insert a image in html you need to use img tag:<br/>
<pre><code class="language-html hljs xml">&lt;img src="image path" alt="Italian Trulli"&gt;
&lt;img src="demo.jpg" alt="Italian Trulli"&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>110. In How many ways, a text can be aligned in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Center:</b>
<pre><code class="language-html hljs xml">div.a {
  text-align: center;
}</code></pre>
</li>
<li><b>Left:</b>
<pre><code class="language-html hljs xml">div.b {
  text-align: left;
}</code></pre>
</li>
<li><b>Right:</b>
<pre><code class="language-html hljs xml">div.c {
  text-align: right;
}</code></pre>
</li>
<li><b>Justify:</b>
<pre><code class="language-html hljs xml">div.d {
  text-align: justify;
}</code></pre>
</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>114. How to change font style in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Using <code>font-family</code> property,</b><br/>
<b>Syntax:</b><br/>
<pre><code class="language-html hljs xml">&lt;p style="font-family:georgia,garamond,serif;"&gt;&lt;/p&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>116. How to change font size in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Using <code>font-size</code> property,</b><br/>
<b>Syntax:</b><br/>
<pre><code class="language-html hljs xml">&lt;p style="font-size:16px;"&gt;&lt;/p&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>116. What is the difference between html and html5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When HTML5 was released that time  the primary objective was to improve the World Wide Web experience for developers and end-users.
<ul>
<li>HTML5 supports SVG (Scalable Vector Graphics), canvas, and also  other virtual vector graphics, but in HTML, make use of vector graphics 
was only possible by using it in conjunction with different technologies like Flash, VML (Vector Markup Language), or Silverlight.</li>
<li>Web SQL databases are normally  used in HTML5 for storing the data temporarily. In the older version of HTML we were only able to use 
browser cache and could be utilized for this purpose.</li>
<li>In HTML5 the main advantage is  JavaScript can run within a web browser, while when we talk about the older version of  HTML only allows JavaScript 
to run in the browser interface thread.</li>
<li>HTML5 is not based on SGML (Standard Generalized Markup Language). The language has improved parsing rules which helps to provide 
enhanced compatibility.</li>
</ul>

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>120. How can you insert a copyright symbol in HTML webpage?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To insert the copyright symbol you can use the "&#169" or "&copy" in the HTML file.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>121. Is it possible to change the color of the bullet?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To change the color of the bullet, you need to change the text color of 
the first line in the list. The bullet takes the color from the first line of the list.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>123. What is the use of figure tag in HTML 5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The HTML figure tag is used for adding self-contained content such as illustrations, photos, diagrams, 
or code listings. HTML figure tag contains two tags such img src and figcaption. Img src is used for 
adding image source in a document; while figcaption is used for setting caption to an image.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>124. What is the difference between HTML and HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>HTML</th><th>HTML 5</th></tr></thead>
<tbody>
<tr>
<td>No Support for Audio and Video</td>
<td>Supports High Quality Audio and Video</td>
</tr>
<tr>
<td>Doesn't have any STandard Process to handle the codes that 
have structural error</td>
<td>Have Suport for persistent Error handler through improvised error 
handling process.</td>
</tr>
<tr>
<td>It doesn't allow Javascript to run in the Browser.</td>
<td>It allows Javascript to run in the background.</td>
</tr>
<tr>
<td>Make the use of vector graphics possible when concurrently used 
with Flash, Silverlight or some other third party plugins.</td>
<td>Scalar Vector Graphics (SVG) Comes as an integral part of this 
version without any third party plugins.</td>
</tr>
<tr>
<td>HTML is not a mobile & Tablet friendly markup language</td>
<td>HTML 5 is quite Mobile & Tablet Friendly</td>
</tr>
<tr>
<td>DocType Declaration and Character encoding are way too long.</td>
<td>DocType Declaration and Character encoding are very short and simple.</td>
</tr>
<tr>
<td>Low Storage Efficiency</td>
<td>High Storage Efficiency</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>129. What is the difference between LocalStorage and SessionStorage Objects?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>LocalStorage</th><th>SessionStorage</th></tr></thead>
<tbody>
<tr>
<td>It stores the data without an expiry date.</td>
<td>Stores the data for only one session.</td>
</tr>
<tr>
<td>The data can be shared between multiple windows of the browser.</td>
<td>Data is accessible only in the current window of the browser.</td>
</tr>
<tr>
<td>Data is not deleted when the browser window closes.</td>
<td>The data is deleted if the browser window closes.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>130. Do all character entities display properly on all systems?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No, there are some character entities that cannot be displayed when the operating system that the browser 
is running on does not support the characters. When that happens, these characters are displayed as boxes.<br/>
 If their operating system does not support a particular character, it is still possible to display that 
 character by showing it as an image instead.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>132. Can attribute values be set to anything or are there specific values that they accept?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Some attribute values can be set to only predefined values. Other attributes can accept any numerical value 
that represents the number of pixels for a size.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>133. What is HTML 5? And what are its new features?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML is a markup language designed for processing, defining, presenting and formatting the text. The HTML 5 is the latest version and has features like:
<ul>
<li>Local Storage</li>
<li>New Form Elements like date, time, url, range, color.</li>
<li>Canvas for 2D drawing</li>
<li>Media Elements like audio and video</li>
<li>New Semantic Elements like <code><b>nav</b></code>,<code><b>header</b></code>,<code><b>footer</b></code>,<code><b>section</b></code>,
<code><b>article</b></code>.</li>
<li>Local Storage and Session Storage instead of cookies.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>


