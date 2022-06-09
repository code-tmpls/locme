<div><b>2. What is the Box model in CSS? Which CSS properties are a part of it?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A rectangle box is wrapped around every HTML element. The box model is used to determine the height and width of the rectangular box. 
The CSS Box consists of Width and height (or in the absence of that, default values and the content inside), padding, borders, margin.
<ul>
<li><b>Content:</b>  Actual Content of the box where the text or image placed.</li>
<li><b>Padding:</b> Area surrounding the content (Space between the border and content).</li>
<li><b>Border:</b> Area surrounding the padding.</li>
<li><b>Margin:</b> Area surrounding the border.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>4. What are the limitations of CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Disadvantages of CSS:</b>
<ul>
<li><b>Browser Compatibility:</b> Some style selectors are supported and some are not. We have to determine which style is supported 
or not using the @support selector).</li>
<li><b>Cross Browser issue:</b> Some selectors behave differently in a different browser).</li>
<li><b>There is no parent selector:</b> Currently, Using CSS, you can’t select a parent tag (This means, CSS can be written from Parent Element to
 Child Element but not from Child to Parent Element).</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>7. What is Universal Selector in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>UNIVERSAL SELECTOR: </b></h5> It works like a wildcard character, selecting all elements on a page and applies styles to all elements.<br/><br/>
<b>CSS:</b><br/>
<pre><code class="language-css hljs xml">* {
 background-color:yellow;
}</code></pre>
It written with star operator(*), it will be applied to all elements in the HTML Page.<br/><br/>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;p&gt;Content-1&lt;/p&gt;
&lt;div&gt;Content-2&lt;/div&gt;
&lt;p&gt;Content-3&lt;/p&gt;
</code></pre>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
.element-demo-p {  background-color:yellow; }
</style>
<p class="element-demo-p">Content-1</p>
<p class="element-demo-p">Content-2</p>
<p class="element-demo-p">Content-3</p>
</code></pre>
</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>8. What is Element Type Selector in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>ELEMENT TYPE SELECTOR:</b></h5> Here, Styles are applied to the HTML elements just like ul, div and so on. Syntax look like -<br/></br/>
<b>CSS:</b><br/>
<pre><code class="language-css hljs xml">p {
 background-color:yellow;
}</code></pre>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;p&gt;Content-1&lt;/p&gt;
&lt;div&gt;Content-2&lt;/div&gt;
&lt;p&gt;Content-3&lt;/p&gt;
</code></pre>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
.element-demo-p {  background-color:yellow; }
</style>
<p class="element-demo-p">Content-1</p>
<p>Content-2</p>
<p class="element-demo-p">Content-3</p>
</code></pre>
</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>9. What is ID Selector in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>ID SELECTOR: </b></h5> Syles are applied to the HTML Element that contains respective Id. Syntax look like -<br/><br/>
<b><i>CSS:</i></b><br/>
<pre><code class="language-css hljs xml">#container-j {
  background-color:yellow; 
}</code></pre>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;div id="container-j"&gt;Heading - 1&lt;/div&gt;</code></pre>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
#container-j {  background-color:yellow; }
</style>
<div id="container-j">Heading - 1</div>
</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>10. What is Class Selector in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>CLASS SELECTOR: </b></h5>Syles are applied to the HTML Element that contains Classname. Syntax look like -<br/><br/>
<b><i>CSS:</i></b><br/>
<pre><code class="language-css hljs xml">.container-i {
  background-color:yellow;
}</code></pre>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;div id="header1" class="container-i"&gt;Heading - 1&lt;/div&gt;
&lt;div id="header2" &gt;Heading - 2&lt;/div&gt;
&lt;div id="header3"class="container-i"&gt;Heading - 3&lt;/div&gt;</code></pre>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
.container-i {  background-color:yellow; }
</style>
<div id="header1" class="container-i">Heading - 1</div>
<div id="header2" >Heading - 2</div>
<div id="header3"class="container-i">Heading - 3</div>
</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>11. What is Descendant Combinator in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>DESCENDANT COMBINATOR: </b></h5> It is a combination of two or more selectors (For selecting more specific).<br/><br/>
<b><i>CSS:</i></b><br/>
<pre><code class="language-css hljs xml">#container-m .box {
 background-color:yellow;
}</code></pre>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;!--CSS Applied to the .box in the container Div --&gt;
&lt;div&gt;
 &lt;div id="container-m"&gt;	
  &lt;div class="box"&gt;Hello World - 1&lt;/div&gt;
  &lt;div class="box-2"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="box"&gt;Hello World - 2&lt;/div&gt;
&lt;/div&gt;</code></pre>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
#container-m>.box {
 background-color:yellow;
}
</style>
<div>
 <div id="container-m">	
	<div class="box">Hello World - 1</div>
	<div class="box-2"></div>
 </div>
 <div class="box">Hello World - 2</div>
</div>
</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>12. What is Child Combinator in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>CHILD COMBINATOR: </b></h5> It targets child Elements from Parent Elements.<br/><br/>
<b><i>CSS:</i></b><br/>
<pre><code class="language-css hljs xml">#container-h>.box {
 background-color:yellow;
}</code></pre>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;!--CSS Applied to the .box in the container Div and CSS not applied for .box Div (Second one too) --&gt;
&lt;div&gt;
 &lt;div id="container-h"&gt;	
  &lt;div class="box"&gt;Hello World - 1&lt;/div&gt;
  &lt;div class="box-2"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="box"&gt;Hello World - 2&lt;/div&gt;
&lt;/div&gt;</code></pre>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
#container-h>.box {
 background-color:yellow;
}
</style>
<div>
 <div id="container-h">	
	<div class="box">Hello World - 1</div>
	<div class="box-2"></div>
 </div>
 <div class="box">Hello World - 2</div>
</div>
</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>13. What is General Sibling Combinator in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>GENERAL SIBLING COMBINATOR: </b></h5> Style is applied to the elements that are beside to respective Element.<br/><br/>
<b><i>CSS:</i></b><br/>
<pre><code class="language-css hljs xml">h2 ~ p {
 background-color:yellow;
}</code></pre>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;h2&gt;Title&lt;/h2&gt;
&lt;p&gt;Paragraph example.&lt;/p&gt;
&lt;p&gt;Paragraph example.&lt;/p&gt;
&lt;div&gt;
 &lt;p&gt;Paragraph example.&lt;/p&gt;
 &lt;p&gt;Paragraph example.&lt;/p&gt;
&lt;/div&gt;</code></pre>
Here, CSS is applied to all the <code>&lt;p&gt;&lt;/p&gt;</code> HTML Element beside <code>&lt;h2&gt;&lt;/h2&gt;</code>.<br/><br/>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
h2 ~ p { background-color:yellow; }
</style>
<h2>Title</h2>
<p>Paragraph example.</p>
<p>Paragraph example.</p>
<div>
<p>Paragraph example.</p>
<p>Paragraph example.</p>
</div>
</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>14. What is Adjacent Sibling Combinator in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>ADJACENT SIBLING COMBINATOR: </b></h5>
A selector that uses the adjacent sibling combinator uses the plus symbol (+), and is almost the same as the general sibling selector. 
The difference is that the targeted element must be an immediate sibling, not just a general sibling.
<b><i>CSS:</i></b><br/>
<pre><code class="language-css hljs xml">p + p {
 text-indent: 1.Sem;
 margin-bottom: 0;
}</code></pre>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;h4>Title&lt;/h4&gt;

&lt;p&gt;1. Paragraph example.&lt;/p&gt;
&lt;p&gt;2. Paragraph example.&lt;/p&gt;

&lt;div&gt;Para Separator&lt;/div&gt;

&lt;p&gt;3. Paragraph example.&lt;/p&gt;
&lt;p&gt;4. Paragraph example.&lt;/p&gt;

&lt;div class="box"&gt;
 &lt;p&gt;5. Paragraph example.&lt;/p&gt;
 &lt;p&gt;6. Paragraph example.&lt;/p&gt;
 &lt;p&gt;7. Paragraph example.&lt;/p&gt;
 &lt;p&gt;8. Paragraph example.&lt;/p&gt;
&lt;/div&gt;</code></pre>
This means the first paragraph element on a page would not receive these styles. Also, if another element appeared between two paragraphs, 
the second paragraph of the two wouldn’t have the styles applied.<br/><br/>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
p.adjSiblingCombo + p.adjSiblingCombo {
  background-color:yellow;
}
</style>
<h4>Title</h4>
<p class="adjSiblingCombo">1. Paragraph example.</p>
<p class="adjSiblingCombo">2. Paragraph example.</p>
<div class="mbot5p">Para Separator</div>
<p class="adjSiblingCombo">3. Paragraph example.</p>
<p class="adjSiblingCombo">4. Paragraph example.</p>

<div class="box">
 <p class="adjSiblingCombo">5. Paragraph example.</p>
 <p class="adjSiblingCombo">6. Paragraph example.</p>	
 <p class="adjSiblingCombo">7. Paragraph example.</p>
 <p class="adjSiblingCombo">8. Paragraph example.</p>
</div>

</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>15. What is Attribute Selector in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>ATTRIBUTE SELECTOR: </b></h5>
The attribute selector targets elements based on the value of HTML attributes using square brackets.<br/><br/>
<b><i>HTML:</i></b><br/>
<pre><code class="language-html hljs xml">&lt;label&gt;Your Name:&lt;/label&gt;
&lt;input id="specialTxtView" type="text" 
	class="form-control" placeholder="Enter your Name"/&gt;
</code></pre>
<b><i>CSS:</i></b><br/>
<pre><code class="language-html hljs xml">input[type="text"] {
 background-color:yellow;
}
</code></pre>
<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>
input[id="specialTxtView"] {
	background-color: yellow;
	width: 200px;
}
</style>
<label>Your Name:</label>
<input id="specialTxtView" type="text" class="form-control" placeholder="Enter your Name"/>
</div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>17. What is VH/VW (viewport height/ viewport width) in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It’s a CSS unit used to measure the height and width in percentage with respect to the viewport. It is used mainly in responsive design 
techniques. The measure VH is equal to 1/100 of the height of the viewport. If the height of the browser is 1000px, 1vh is equal to 10px. 
Similarly, if the width is 1000px, then 1 vw is equal to 10px.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>18. Difference between reset vs normalize CSS?. How do they differ?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Reset CSS:</b> CSS resets aim to remove all built-in browser styling. For example margins, paddings, font-sizes of all elements are reset to be the same.<br/>
<b>Normalize CSS:</b> Normalize CSS aims to make built-in browser styling consistent across browsers. It also corrects bugs for common browser dependencies.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>19. What is the difference between inline, inline-block, and block?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Block Element:</b> The block elements always start on a new line. They will also take space for an entire row or width. 
List of block elements are <code>&lt;div&gt;</code>, <code>&lt;p&gt;</code>.<br/><br/>
<b>Inline Elements:</b> Inline elements don't start on a new line, they appear on the same line as the content and tags beside them. 
Some examples of inline elements are <code>&lt;a&gt;</code>, <code>&lt;span&gt;</code>, <code>&lt;strong&gt;</code>, and <code>&lt;img&gt;</code> tags.<br/><br/>
<b>Inline Block Elements:</b> Inline-block elements are similar to inline elements, except they can have padding and margins and set height and width values.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>20. Is it important to test the webpage in different browsers?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It’s most important to test a website in different browsers when you’re first designing it, or when making major changes. However, it’s also important 
to repeat these tests periodically, since browsers go through a lot of updates and changes.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>21. What are Pseudo elements and Pseudo classes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<h5><b>Pseudo Elements:</b></h5>
Pseudo-elements allows us to create items that do not normally exist in the document tree such as:
<ul>
<li><code><b>::before</b></code></li>
<li><code><b>::after</b></code></li>
<li><code><b>::first-letter</b></code></li>
<li><code><b>::first-line</b></code></li>
<li><code><b>::selection</b></code></li>
</ul>

<b>Example:</b><br/><br/>
<b>CSS:</b><br/>
<pre><code class="language-css hljs xml">p::first-line {
 background-color:yellow;
 font-variant: small-caps;
}</code></pre>

<b>HTML:</b><br/>
<pre><code class="language-html hljs xml">
&lt;p&gt;Welcome to Helloworld,&lt;br/&gt;Good Morning&lt;/p&gt;
</code></pre>

<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>p.pfirstlinecss::first-line { background-color:yellow;font-variant: small-caps; }</style>
<p class="pfirstlinecss">Welcome to Helloworld, <br/> Good Morning</p>
</div>
</div>

<h5><b>Pseudo Classes:</b></h5>
Selects regular elements but under certain conditions like when the user is hovering over the link.
<ul>
<li>:link</li>
<li>:visited</li>
<li>:hover</li>
<li>:active</li>
<li>:focus</li>
</ul>

<b>Example:</b><br/><br/>
<b>CSS:</b><br/>
<pre><code class="language-css hljs xml">/* mouse over link */
a:hover {
  background-color: yellow;
}</code></pre>

<b>HTML:</b><br/>
<pre><code class="language-html hljs xml">&lt;a href="#"&gt;Helloworld&lt;/a&gt;</code></pre>

<b><i>OUTPUT:</i></b><br/>
<div class="list-group">
<div class="list-group-item output-bg">
<style>a:hover { background-color: yellow; }</style>
<a href="#">Helloworld</a>
</div>
</div>

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>25. What are the differences between Adaptive Design and Responsive Design?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
<table class="table">
<thead><tr><th>Adaptive Design</th><th>Responsive Design</th></tr></thead>
<tbody>
<tr>
<td>Adaptive design focuses on developing websites based on multiple fixed layout sizes.</td>
<td>Responsive design focuses on showing content on the basis of available browser space.</td>
</tr>
<tr>
<td>When a website developed using adaptive design is opened on the desktop browser, first the available space is detected and then the layout 
with most appropriate sizes are picked and used for the display of contents. Resizing of browser window has no affect on the design.</td>
<td>When a website developed using responsive design is opened on a desktop browser and when we try to resize the browser window, the content 
of the website is dynamically and optimally rearranged to accomodate the window.</td>
</tr>
<tr>
<td>Usually, Adaptive Designs use six standard screen widths - 320 px, 480 px, 760 px, 960 px, 1200 px, 1600 px. These sizes are detected and 
appropriate layouts are loaded.</td>
<td>This design makes use of CSS media queries for changing styles depending on the target devices properties for adapting to different screens.</td>
</tr>
<tr>
<td>It takes a lot of time and effort to first examine the options and realities of the end users and then design best possible adaptive solutions them.</td>
<td>Generally, Responsive design takes much less work to build and design fluid websites that can accomodate content from screen depending on the screen size.</td>
</tr>
<tr>
<td>Gives a lot of control over the design to develop sites for specific screens.</td>
<td>No much control over the design is offered here.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>27. How is border-box different from content-box?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>content-box</b></code> is the default value box-sizing property. The height and the width properties consist only of the content by 
excluding the border and padding.<br/>
Here, the box-sizing for the div element is given as content-box. That means, the height and width considered for the div content exclude the 
padding and border.<br/><br/>
<code><b>border-box</b></code> property includes the content, padding and border in the height and width properties.<br/>
Here, the box-sizing for the div element is given as border-box. That means the height and width considered for the div content will also include 
the padding and border.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>29. Why should we use float property in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The float property is used for positioning the HTML elements horizontally either towards the left or right of the container. For example,
<pre><code class="language-css hljs xml">div {
 float: right; 
}</code></pre>
Here, the element to which the class is applied ensures that the element is positioned on the right of the container. If you specify the 
value of float as left, then the element will be placed on the left side of the container.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>30. What is a z-index, how does it function?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML Pages display in 2-dimensions: Horizontal (X-Axis) and Vertical (Y-Axis). To set the Elements in the 3-dimension, we use <code><b>z-index</b></code>.
The default value of this property is 0 and can be either positive or negative. Apart from 0, the values of the z-index can be:
<ul>
<li><b>Auto:</b> The stack order will be set equal to the parent.</li>
<li><b>Number:</b> The number can be positive or negative. It defines the stack order.</li>
<li><b>Initial:</b> The default value of 0 is set to the property.</li>
<li><b>Inherit:</b> The properties are inherited from the parent.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>31. What are the properties of flexbox?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Flexbox stands for flexible box and it was introduced around 2017 in CSS with the purpose of providing an efficient way to handle layouts, 
align elements within them and distribute spaces amongst the items in dynamic/responsive conditions. It provides an enhanced ability to 
alter the dimensions of the items and make use of the available space in the container efficiently. In order to achieve this, CSS3 provides 
some properties.<br/>
The properties of flexbox are:
<ul>
<li><b>flex-direction:</b> This property helps in defining the direction the container should stack the items targetted for flex. 
The values of this property can be
<ul>
<li><i>row:</i> Stacks items horizontally from left to right in the flex container.</li>
<li><i>column:</i> Stacks items vertically from top to bottom in the flex container.</li>
<li><i>row-reverse:</i> Stacks items horizontally from right to left in the flex container.</li>
<li><i>column-reverse:</i> Stacks items vertically from bottom to top in the flex container.</li>
</ul>
</li>
<li><b>flex-wrap:</b> This property specifies of the flex items should be wrapped or not. Possible values are:
<ul>
<li><i>wrap:</i> The flex items would be wrapped if needed.</li>
<li><i>nowrap:</i> This is the default value that says the items won’t be wrapped.</li>
<li><i>wrap-reverse:</i> This specifies that the items will be wrapped if needed but in reverse order.</li>
</ul>
</li>
<li><b>flex-flow:</b> This property is used for setting both flex-direction and flex-wrap properties in one statement.</li>
<li><b>justify-content:</b> Used for aligning the flex items. Possible values are:
<ul>
<li><i>center:</i> It means that all the flex items are present at the center of the container.</li>
<li><i>flex-start:</i> This value states that the items are aligned at the start of the container. This is the default value.</li>
<li><i>flex-end:</i> This value ensures the items are aligned at the end of the container.</li>
<li><i>space-around:</i> This value displays the items having space between, before, around the items.</li>
<li><i>space-between:</i> This value displays items with spaces between the lines.</li>
</ul></li>
<li><b>align-items:</b> This is used for aligning flex items</li>
<li><b>align-content:</b> This is used for aligning the flex lines</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->




<div><b>33. Explain CSS position property?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Absolute:</b> To place an element exactly where you want to place it. absolute position is actually set relative to the element's parent. If no parent 
is available then the relative place to the page itself (it will default all the way back up to the element).</li>
<li><b>Relative:</b> "Relative to itself". Setting position: relative; on an element and no other positioning attributes, it will no effect on its positioning. 
It allows the use of z-index on the element and it limits the scope of absolutely positioned child elements. Any child element will be absolutely 
positioned within that block.</li>
<li><b>Fixed:</b> The element is positioned relative to the viewport or the browser window itself. viewport doesn't change if you scroll and hence the fixed 
element will stay right in the same position. </li>
<li><b>Static:</b> Static default for every single page element. The only reason you would ever set an element to position: static is to forcefully remove 
some positioning that got applied to an element outside of your control.</li>
<li><b>Sticky:</b> Sticky positioning is a hybrid of relative and fixed positioning. The element is treated as relative positioned until it crosses a 
specified threshold, at which point it is treated as fixed positioned.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>37. Can you name the four types of @media properties?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The four types of @media properties are:
<ul>
<li><b>All -</b> It’s the default property. Used for all media-type devices.</li>
<li><b>Screen -</b> Used for computer screen, mobile screen.</li>
<li><b>Print -</b> Used for printers.</li>
<li><b>Speech -</b> Used for screen readers</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>38. What is the grid system?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
CSS Grid Layout is the most powerful layout system available in CSS. It is said to be a 2-dimensional system, meaning it can handle both columns 
and rows, unlike flexbox which is largely a 1-dimensional system.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>39. What are the different ways to hide the element using CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Using display property <b>(display: none)</b>. It’s not available for screen readers. The element will not exist in the DOM if display: none is used.</li>
<li>Using visibility property <b>(visibility: hidden)</b>, will take up the space of the element. It will be available to screen reader users. The element will 
actually be present in the DOM, but not shown on the screen.</li>
<li>Using position property <b>(position: absolute)</b>. Make it available outside the screen.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>40. What does the :root pseudo-class refer to?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code><b>:root selector</b></code> allows you to target the highest-level "parent" element in the DOM, or document tree. It is defined in the CSS Selectors 
Level 3 specification.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>41. What does Accessibility (a11y) mean?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Accessibility refers to how software or hardware combinations are designed to make a system accessible to persons with disabilities, such as 
visual impairment, hearing loss, or limited dexterity.<br/>
For example, a website developed with accessibility in mind might have text-to-speech capabilities. In the USA public websites have to have accessible 
compliance. It’s defined in 508 compliance. <br/>
It gives the guidelines and best practices for all website users that should be met with key areas of accessibility.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>42. How do I restore the default value of a property?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The keyword initial can be used to reset it to its default value.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>43. Difference between CSS grid vs flexbox?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>CSS Grid Layout</b> is a two-dimensional system, meaning it can handle both columns and rows. Grid layout is intended for larger-scale 
layouts which aren’t linear in design.</li>
<li><b>Flexbox</b> is largely a one-dimensional system (either in a column or a row). Flexbox layout is most appropriate to the components of an application</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>44. How does Calc work?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The CSS3 calc() function allows us to perform mathematical operations on property values. Instead of declaring, for example, static pixel values for an 
element's width, we can use calc() to specify that the width is the result of the addition of two or more numeric values.
<pre><code class="language-css hljs xml">.foo {
 Width: calc(100px + 50px)
}</code></html>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>46. What is the difference between CSS variables and preprocessor(SASS, LESS, Stylus) variables?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>CSS variables can be used without the need for a preprocessor. Currently, all the major browsers support the CSS variables.</li>
<li>CSS variable cascade. But the preprocessor variables don’t cascade.</li>
<li>CSS variable can be accessed and manipulated in javascript.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>47. What does * { box-sizing: border-box; } do? What are its advantages?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>It makes every element in the document include the padding and border in the element’s inner dimension for the height and width computation.</li>
<li>In box-sizing: border-box, The height of an element is now calculated by the content's height + vertical padding + vertical border width.</li>
<li>The width of an element is now calculated by the content's width + horizontal padding + horizontal border width.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>48. What does !important mean in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The style is having the important will have the highest precedence and it overrides the cascaded property.
<b>CSS:</b><br/>
<pre><code class="language-css hljs xml">p {
 	color: red !important;
 }
 #thing {
 	color: green;
 }
</code></pre> 
<b>HTML:</b><br/>
<pre><code class="language-html hljs xml">&lt;p id="thing"&gt;Will be RED.&lt;/p&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>51. What are the advantages of using translate() instead of absolute position?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>translate()</b></code> does not cause the browser to trigger repaint and layout and instead only acts on the compositor. The absolute position 
triggers the repaint or DOM reflow. So, <code><b>translate()</b></code> gives better performance.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>52. Does style1.css have to be downloaded and parsed before style2.css can be fetched?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<pre><code class="language-css hljs xml">&lt;head&gt;
 &lt;link h ref=" stylel. css" rel=" stylesheet"/&gt;
 &lt;link href="style2.css" rel="stylesheet"/&gt;
&lt;/head&gt;</code></pre>
No, the browsers will download the CSS in the order of its appearance on the HTML page.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>55. How does this property work overflow: hidden?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The overflow property in CSS is used for specifying whether the content has to be clipped or the scrollbars have to be added to the content area when 
the content size exceeds the specified container size where the content is enclosed. If the value of overflow is hidden, the content gets clipped post 
the size of the container thereby making the content invisible. For example,
<pre><code class="language-css hljs xml">div {
 width: 150px;
 height: 50px;
 overflow: hidden;
}</code></pre>
If the content of the div is very large and exceeds the height of 50px, the content gets clipped post 50px and the rest of the content is not made visible.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>57. How is margin different from padding in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Margin property using which we can create space around the elements. We can also create space for borders defined at the exteriors. 
We have the following properties for defining the margin:
<ul>
<li>margin-top</li>
<li>margin-right</li>
<li>margin-bottom</li>
<li>margin-left</li>
</ul>
<br/>margin property by itself has the values as:
<ul>
<li><b>auto –</b> The browser auto-calculates the margin while we use this.</li>
<li><b>length –</b> The value of this property can be in px, pt, cm, em etc. The values can be positive or negative.</li>
<li><b>% –</b> We can also give percentage value as margin to the element.</li>
<li><b>inherit –</b> Using this property, the margin properties can be inherited from the parent elements.</li>
</ul>
<br/>The padding property is used for generating the space around the element’s content and inside any known border. 
The padding also has sub-properties like:
<ul>
<li>padding-top</li>
<li>padding-right</li>
<li>padding-bottom</li>
<li>padding-left</li>
</ul>
<br/>It is to be noted that the padding does not allow negative values.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>59. How is the nth-child() different from nth of type selectors?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Both are pseudo-classes (Pseudo-classes are those keywords that specifies the special state of the selected element). The <code><b>nth-child()</b></code>
pseudo-class is used for matching elements based on the number that represents the position of an element based on the siblings. The number is used to 
match an element on the basis of the element’s position amongst its siblings.<br/>
For example, in the below piece of code, if we give nth-child(4) for the example class, then the 4th child of the example class is selected 
irrespective of the element type. Here, the fourth child of the example class is the div element. The element is selected and a background of black
 is added to it.<br/>
<b>CSS:</b><br/>
<pre><code class="language-css hljs xml">.example:nth-child(4) {   
 background: black; 
}
</code></pre>
<b>HTML:</b><br/>
<pre><code class="language-html hljs xml">&lt;div class="example"&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt;
 &lt;div&gt;This is a div.&lt;/div&gt; &lt;!-- 4th Element to select and apply style--&gt;
 &lt;div&gt;This is a div.&lt;/div&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt;
 &lt;divThis is a div.&lt;/div&gt;
&lt;/div&gt;</code></pre>
The <code><b>nth-of-type()</b></code> pseudo-class is similar to the nth-child but it helps in matching the selector based on a number that represents the position of 
the element within the elements that are the siblings of its same type. The number can also be given as a function or give keywords like odd or even.<br/>
For example, in the below piece of code, if we give <code><b>p:nth-of-type(even)</b></code> for the example class, then all the even paragraph tags are selected within the 
example class and the style of background black is applied to them. The selected elements are marked in comments in the below code.
<b>CSS:</b><br/>
<pre><code class="language-css hljs xml">.example p:nth-of-type(even) { 
  background: black; 
}</code></pre>
<b>HTML:</b><br/>
<pre><code class="language-html hljs xml">&lt;div class="example"&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt; &lt;!-- Select this and apply style--&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt; 
 &lt;div&gt;This is a div.&lt;/div&gt;
 &lt;div&gt;This is a div.&lt;/div&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt; <!-- Select this and apply style-->
 &lt;p&gt;This is a paragraph.&lt;/p&gt; 
 &lt;div&gt;This is a div.&lt;/div&gt;
 &lt;p&gt;This is a paragraph.&lt;/p&gt; <!-- Select this and apply style-->
 &lt;div&gt;This is a div.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>62. How will you fix browser-specific styling issues?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Different ways to fix browser-specific issues:
<ul>
<li>We can write browser-specific styles separately in different sheets and load that only when the specific browser is used. 
This makes use of the server-side rendering technique.</li>
<li>We can use auto-prefix for automatically adding vendor prefixes in the code.</li>
<li>We can also use normalize.css or reset CSS techniques.</li>
</ul>
There are some ways for avoiding browser compatibility issues too. They are as follows:<br/>
<ul>
<li><b>Validate HTML and CSS:</b><br/> We know that the code will be read, interpreted and handled differently by different browsers. We need to 
validate our HTML and CSS files for the missing closing tags, or missing semicolons in the syntaxes because there are chances that the old 
browsers will throw errors while rendering the code. We can avoid those errors by:
<ul>
<li>Maintaining well-aligned code that helps in easy readability.</li>
<li>Inserting comments at necessary places.</li>
<li>Make use of validation tools like Jigsaw CSS validator, W3C HTML Validators to identify syntax issues in the code.</li>
</ul>
</li>
<li><b>Maintain Cross-Browser Compatibility in the Layouts:</b><br/> 
Cross-Browser compatibility is a must while developing web applications. We expect our application to be responsive across all 
devices, browsers and platforms. Some of the effects of layout incompatibilities are unresponsiveness of the layouts in mobile devices, 
the difference in layout rendering between modern and old browsers, etc. These incompatibilities can be avoided by using:
<ul>
 <li><b>CSS Multi-Column layouts -</b> For maintaining proper layouts w.r.t columns and containers.</li>
 <li><b>HTML viewport metatag –</b> For ensuring content is properly spanned across mobile devices.</li>
 <li><b>CSS Flexbox and Grids -</b> To layout child elements depending on the content and available space.</li>
 <li><b>CSS resets stylesheets -</b> For reducing browser inconsistencies in default line heights, font sizes, margins etc.</li>
<ul>
</li>
<li><b>Check JavaScript Library issues:</b> Ensure the libraries are used judiciously and the ones used are supported by the browsers.</li>
<li><b>Check DOCTYPE tag keyword:</b> The DOCTYPE keyword is meant for defining rules of what needs to be used in the code. Older browser versions 
check for DOCTYPE tag at the beginning and if not found, the application rendering won't be proper.</li>
<li><b>Test on real devices:</b> Although applications can be tested on virtual environments, it would be more beneficial if the testing is carried 
out on real devices and platforms. We can use tools like Testsigma for this purpose that enables us to test in real devices parallelly.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->




<div><b> </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->




<div><b> </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->




<div><b> </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b> </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->




<div><b> </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->




<div><b> </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->
