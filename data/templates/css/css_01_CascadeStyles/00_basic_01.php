<div><b>1. What Is CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
CSS (Cascading Style Sheet) -  a style sheet language that determines how the elements/contents in the page are looked/shown. 
It is used to develop a consistent look and feel for all the pages.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>3. What are the advantages of using CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The main advantages of CSS are given below:
<ul>
<li><b>Separation of content from presentation -</b> CSS provides a way to present the same content in multiple presentation formats in mobile or 
desktop or laptop.</li>
<li><b>Easy to maintain -</b> CSS, built effectively can be used to change the look and feel complete by making small changes. To make a global change, 
simply change the style, and all elements in all the web pages will be updated automatically.</li>
<li><b>Bandwidth -</b> Used effectively, the style sheets will be stored in the browser cache and they can be used on multiple pages, without having 
to download again.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>5. How to include CSS in the webpage?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are different ways to include a CSS in a webpage:
<ul>
<li><b>External Style Sheet:</b> An external file linked to your HTML document. Using <code>&lt;link&gt;</code> tag, we can link the style sheet 
to the HTML page. Syntax look like
<pre><code class="language-html hljs xml">&lt;link rel="stylesheet" type="text/css" href="mystyles.css" /&gt;</code></pre>
</li>
<li><b>Embed CSS with a style tag:</b> Syntax look like
<pre><code class="language-html hljs xml">&lt;style type="text/css"&gt;
/*Add style rules here*/
&lt;/style&gt;</code></pre>
Add your CSS rules between the opening and closing style tags and write your CSS exactly the same way as you do in stand-alone stylesheet files.
</li>
<li><b>Add inline styles to HTML elements(CSS rules applied directly within an HTML tag.):</b> Syntax look like
<pre><code class="language-html hljs xml">&lt;h2 style="color:red;background:black"&gt;Inline Style&lt;/h2&gt;</code></pre>
</li>
<li><b>Import a stylesheet (Add a new CSS file within CSS itself):</b>
<pre><code class="language-html hljs xml">@import "path/to/style.css";</code></pre>
</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>6. What are the different types of Selectors in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Types of CSS Selectors:
<ol>
<li>Universal Selector</li>
<li>Element Type Selector</li>
<li>Id Selector</li>
<li>Class Selector</li>
<li>Descendant Combinator</li>
<li>Child Combinator</li>
<li>General Sibling Combinator</li>
<li>Adjacent Sibling Combinator</li>
<li>Attribute Selector</li>
</ol>
<h5><b>1. UNIVERSAL SELECTOR: </b></h5> It works like a wildcard character, selecting all elements on a page and applies styles to all elements.<br/><br/>
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

<h5><b>2. ELEMENT TYPE SELECTOR:</b></h5> Here, Styles are applied to the HTML elements just like ul, div and so on. Syntax look like -<br/></br/>
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

<h5><b>3. ID SELECTOR: </b></h5> Syles are applied to the HTML Element that contains respective Id. Syntax look like -<br/><br/>
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

<h5><b>4. CLASS SELECTOR: </b></h5>Syles are applied to the HTML Element that contains Classname. Syntax look like -<br/><br/>
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

<h5><b>5. DESCENDANT COMBINATOR: </b></h5> It is a combination of two or more selectors (For selecting more specific).<br/><br/>
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

<h5><b>6. CHILD COMBINATOR: </b></h5> It targets child Elements from Parent Elements.<br/><br/>
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

<h5><b>7. GENERAL SIBLING COMBINATOR: </b></h5> Style is applied to the elements that are beside to respective Element.<br/><br/>
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

<h5><b>8. ADJACENT SIBLING COMBINATOR: </b></h5>
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

<h5><b>9. ATTRIBUTE SELECTOR: </b></h5>
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

<div><b>16. What is a CSS Preprocessor? What are Sass, Less, and Stylus? Why do people use them?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A CSS Preprocessor is a tool used to extend the basic functionality of default vanilla CSS through its own scripting language. It helps us to use 
complex logical syntax like – variables, functions, mixins, code nesting, and inheritance to name a few, supercharging your vanilla CSS.<br/><br/>
<b>SASS:</b> Sass is the acronym for "Syntactically Awesome Style Sheets". SASS can be written in two different syntaxes using SASS or SCSS.
<h5><b>SASS vs SCSS</b></h5>
<ul>
<li>SASS is based on indentation and SCSS(Sassy CSS) is not.</li>
<li>SASS uses .sass extension while SCSS uses .scss extension.</li>
<li>SASS doesn’t use curly brackets or semicolons. SCSS uses it, just like the CSS.</li>
</ul>
<h5><b>SASS Syntax</b></h5>
<pre><code class="language-css hljs xml">$font-color: #fff 
$bg-color: #00f

#box
  color: $font-color
  background: $bg-color
</code></pre>
<h5><b>SCSS Syntax</b></h5>
<pre><code class="language-css hljs xml">$font-color: #fff;
$bg-color: #00f;

#box
  color: $font-color;
  background: $bg-color;
</code></pre>

<h5><b>LESS</b></h5>
LESS is an acronym for "Leaner Stylesheets". LESS is easy to add to any javascript projects by using NPM or less.js file. It uses the extension .less.<br/>
LESS syntax is the same as the SCSS with some exceptions. LESS uses @ to define the variables.
<pre><code class="language-css hljs xml">@font-color: #fff;
@bg-color: #00f;

#box{
  color: @font-color;
  background: @bg-color;
}</code></pre>

<h5><b>STYLUS</b></h5>
Stylus offers a great deal of flexibility in writing syntax, supports native CSS as well as allows omission of brackets, 
colons, and semicolons. It doesn’t use @ or $ for defining variables.
<pre><code class="language-css hljs xml">/* STYLUS SYNTAX WRITTEN LIKE NATIVE CSS */
font-color= #fff;
bg-color = #00f;

#box {
  color: font-color;
  background: bg-color;
}

/* OR */

/* STYLUS SYNTAX WITHOUT CURLY BRACES */
font-color= #fff;
bg-color = #00f;

#box
  color: font-color;
  background: bg-color;</code></pre>

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>22. How do you specify units in the CSS?. What are the different ways to do it?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are different ways to specify units in CSS like px, em, pt, percentage (%). px(Pixel) gives fine-grained control and maintains alignment 
because 1 px or multiple of 1 px is guaranteed to look sharp. px is not cascade. em maintains relative size. you can have responsive fonts. 
Em, will cascade 1em is equal to the current font-size of the element or the browser default. If u sent font-size to 16px then 1em = 16px. 
The common practice is to set default body font-size to 62.5% (equal to 10px).<br/>
pt(point) are traditionally used in print. 1pt = 1/72 inch and it is a fixed-size unit.<br/>
%(percentage) sets font-size relative to the font size of the body. Hence, you have to set the font-size of the body to a reasonable size.<br/>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>23. Does margin-top or margin-bottom have an effect on inline elements?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No, it doesn’t affect the inline elements. Inline elements flow with the contents of the page.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>24. What property is used for changing the font face?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can use the font-family property for achieving this. The font-family property is used for specifying what font needs to be applied on the 
targetted DOM element. It can hold several font names as part of "fallback" mechanism in case the browser does not support the fonts. 
For example, we can use:
<pre><code class="language-css hljs xml">p {
 font-family: "Times New Roman", Times, serif;
}</code></pre>
In the above piece of code, we are applying font-family property to the paragraph element.
<ul>
<li>It tells the browser to look for "Times New Roman" font and apply it.</li>
<li>If the "Times New Roman" font is not installed or supported, then it asks the browser to use Times font.</li>
<li>If both "Times New Roman" and Times are not supported, then it asks the browser to use any supported generic font belonging to serif.</li>
</ul>
If you do not want the font-face of the paragraph element to be Times New Roman/Times/serif font, and you want to use the Arial/Helvetica/sans-serif font, 
then we can just update the CSS property of paragraph element as:
<pre><code class="language-css hljs xml">p {
 font-family: Arial, Helvetica, sans-serif;
}</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>26. How are the CSS selectors matched against the elements by the browser?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Browsers matches the CSS Selectors from <b>Right to Left</b>. For example:<br/>Lets consider the following code -<br/>
<b>CSS:</b><br/>
<pre><code class="language-css hljs xml">p span{ 
 background-color: yellow;
}</code></pre>
<b>HTML:</b><br/>
<pre><code class="language-html hljs xml"><span>Content #1</span>
<span>Content #2</span>
<p><span>Content #3</span></p></code></pre>
First, Browser checks for <code><b>&lt;span&gt;&lt;/span&gt;</b></code> tags in HTML Document and then, traversed up to the parent elements 
<code><b>&lt;p&gt;&lt;/p&gt;</b></code>. Then, it applies CSS to all matching elements - <code><b>p span</b></code>.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>28. How is opacity specified in CSS3?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Opacity refers to the degree to which the content is transparent or opaque. We can use the property named opacity which takes the values 
ranging from 0 to 1. 0 specifies that the element is completely transparent where 1 means that the element is completely opaque. We can use 
the opacity property as follows:
<pre><code class="language-css hljs xml">div { 
 opacity: 0.6;
}</code></pre>
In the above example, an opacity of 60% is applied to the div section. The opacity property is not supported by the internet explorer browser. 
To make it work there, we need to use filter property as polyfill as shown in the example below.
<pre><code class="language-css hljs xml">div { 
 opacity: 0.6;
 filter: alpha(opacity=60);
}</code></pre>
<div class="pad5p">Opacity looks like follows:</div> <img class="" src="<?php echo $PROJECT_IMG_PATH.'css/1.png'; ?>" />
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>32. What is cascading in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
"Cascading" refers to the process of going through the style declarations and defining weight or importance to the styling rules that help the 
browser to select what rules have to be applied in times of conflict. The conflict here refers to multiple rules that are applicable to a 
particular HTML element. In such cases, we need to let the browser know what style needs to be applied to the element. This is done by cascading 
down the list of style declarations elements.<br/>
For example, if we have the below style:
<pre><code class="language-html hljs xml">p{
  color:white;
}</code></pre>
and we also have the following declaration below it or in another stylesheet that has been linked to the page:
<pre><code class="language-html hljs xml">p{
  color:black;
}</code></pre>
We have a conflict in color property here for the paragraph elements. Here, the browser just cascades down to identify what is the most recent and 
most specific style and applies that. Since we have the <code><b>color:black;</b></code> as the most specific declaration, the color black is applied 
to the paragraph elements. Now if you want to ensure color white is applied to the paragraph, we can define weight to that style by adding 
<code><b>!important</b></code> as shown below:
<pre><code class="language-html hljs xml">p{
  color:white !important;
}</code></pre>
<code><b>!important</b></code> ensures that the property has the maximum weight in presence of other conflicting properties.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>34. When does DOM reflow occur?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Reflow is the name of the web browser process for re-calculating the positions and geometries of elements in the document, 
for the purpose of re-rendering part or all of the document.<br/>
Reflow occurs when:
<ul>
<li>Insert, remove or update an element in the DOM.</li>
<li>Modify content on the page, e.g. the text in an input box.</li>
<li>Move a DOM element.</li>
<li>Animate a DOM element.</li>
<li>Take measurements of an element such as offsetHeight or getComputedStyle.</li>
<li>Change a CSS style.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>35. Different Box Sizing Property?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The box-sizing CSS property sets how the total width and height of an element are calculated.
<ul>
<li><b>Content-box:</b> The default width and height values apply to the element's content only. The padding and border are added to the outside of the box.</li>
<li><b>Padding-box:</b> Width and height values apply to the element's content and its padding. The border is added to the outside of the box. Currently, 
only Firefox supports the padding-box value.</li>
<li><b>Border-box:</b> Width and height values apply to the content, padding, and border.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>36. How many ways, we can center align a div inside another div?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>HTML:</b><br/>
<pre><code class="language-html hljs xml">&lt;div class="cn"&gt;
&lt;div class="inner"&gt;your content&lt;/div&gt;
&lt;/div&gt;</code></pre>
CSS can be written in 4 ways:
<ul>
<li><b>Centering with Table:</b>
<pre><code class="language-css hljs xml">.cn {
 display: table-cell;
 width: 500px;
 height: 500px;
 vertical-align: middle;
 text-align: center;
}
.inner {
 display: inline-block;
 width: 200px; height: 200px;
}</code></pre>
</li>
<li><b>Centering with Transform:</b>
<pre><code class="language-css hljs xml">.cn {
 position: relative;
 width: 500px;
 height: 500px;
}
.inner {
 position: absolute;
 top: 50%; left: 50%;
 transform: translate(-50%,-50%);
 width: 200px;
 height: 200px;
}</code></pre>
</li>
<li><b>Centering with Flexbox:</b>
<pre><code class="language-css hljs xml">.cn {
 display: flex;
 justify-content: center;
 align-items: center;
}</code></pre>
</li>
<li><b>Centering with Grid:</b>
<pre><code class="language-css hljs xml">.cn {
 display: grid;
 place-content: center;
}</code></pre>
</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>45. What do CSS Custom properties variables mean?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Custom properties (sometimes referred to as CSS variables or cascading variables) are defined by users that contain specific values to be reused 
throughout a document. The value is set using -- notion. And the values are accessed using the var() function.
<pre><code class="language-css hljs xml">:root {
 --main-bg-color: brown
}
.one {
 color: white;
 background-color· var (--main-bg-color);
 margin: l0px;
 width: 50px;
 height: 5Opx;
 display: inline-block;
}</code></html>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->





<div><b>49. What is specificity? How to calculate specificity?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A process of determining which CSS rule will be applied to an element. It actually determines which rules will take precedence. Inline style 
usually wins then ID then the class value (or pseudo-class or attribute selector), the universal selector (*) has no specificity. ID selectors 
have a higher specificity than attribute selectors.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>50. What is progressive rendering? How do you implement progressive rendering in the website?. What are the advantages of it?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Progressive rendering is the name given to techniques used to improve the performance of a webpage (in particular, improve perceived load time) to 
render content for display as quickly as possible.<br/>
We can implement the progressive rendering of the page by loading the lazy loading of the images.  We can use Intersection Observer API to lazy load 
the image. The API makes it simple to detect when an element enters the viewport and take an action when it does. Once the image enters the viewport, 
we will start loading the images.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>53. How to determine if the browser supports a certain feature? </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The @support in CSS can be very useful to scan if the current browser has support for a certain feature.
<pre><code class="language-css hljs xml">@supports (display: grid) {
 div {
  display: grid;
 }
}</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>54. How does the absolute positioning work?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Absolute positioning is a very powerful positioning mechanism that allows users to place any element wherever they want in an exact location. 
The CSS properties right, left, top, bottom and define the exact locations where you need to place the element. In absolute positioning, the 
following points need to be considered:
<ul>
<li>The element to which the absolute positioning is applied is removed from the normal workflow of the HTML document.
<ul><li>The HTML layout does not create any space for that element in its page layout.</li></ul></li>
<li>The element is positioned relative to the closest positioned ancestor. If no such ancestor is present, then the element is placed relative 
to the initial container block.</li>
<li>The final position of the element is determined based on values provided to the top, right, left, bottom.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>56. How will you align content inside the p tag at the exact center inside the div?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can add the <code><b>text-align: center</b></code> property inside the parent div for aligning the contents horizontally. But it will not align 
the contents vertically. We can align the content vertically by making the parent element have relative positioning and the child element have absolute 
positioning. The child element should have the values of top, bottom, right, left as 0 to center it in the middle vertically. Then we need to set the 
margin as auto. It is assumed that both the child and mother elements will have height and width values.<br/>
Consider we have a div element of height and width taking 20% of the screen size, and we have a paragraph element taking the height of 1.2em and 
width of 20%. If we want to align the paragraph element at the center (vertically and horizontally), we write the following styles:<br/>
<pre><code class="language-css hljs xml">div {
 position : relative;  // Make position relative
 height : 20%;
 width : 20%;
 text-align : center; //Align to center horizontally
}
p {
 position : absolute; // Make position absolute
 top:0;                // Give values of top, bottom,left, right to 0
 bottom:0;
 left:0;
 right:0;
 margin : auto;        // Set margin as auto
 height : 1.2 em;
 width : 20%;
}</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>58. What do you have to do to automatically number the heading values of sections and categories?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can use the concept of CSS counters. This lets us adjust the appearance of the content based on the location in a document. 
While using this, we need to first initialize the value of the counter-reset property which is 0 by default. The same property 
is also used for changing the value to any number that we need. Post initialization, the counter’s value can be incremented or 
decremented by using the counter-increment property. The name of the counter cannot be CSS keywords like "none", "initial", "inherit" etc. 
If the CSS keywords are used, then the declaration would be ignored.<br/>
Consider an example as shown below:
<pre><code class="language-css hljs xml">body {
 counter-reset: header;   /* define counter named 'header' whose initial value is 0 by default */
}

h2::before {
 counter-increment: header;   /* The value of header counter by 1.*/
 content: "Header " counter(header) ": ";  /* To display word Header and the value of the counter with colon before it.*/
}</code></pre>
Here, we are trying to achieve auto count increment and display feature for the h2 tag. Wherever we use h2 tag, the content will 
be prefixed by "Header 1 : " , "Header 2 : ", "Header 3 : " etc.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>60. What is the importance of CSS Sprites?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
CSS sprites are used for combining multiple images in a single larger image. They are commonly used for representing icons 
that are used in the user interfaces. The main advantages of using sprites are:
<ul>
<li>It reduces the number of HTTP requests to get data of multiple images as they are acquired only by sending a single request.</li>
<li>It helps in downloading assets in advance that help display icons or images upon hover or other pseudo-states.</li>
<li>When there are multiple images, the browser makes separate calls to get the image for each of them. Using sprites, the images are combined 
in one and we can just call for that image using one call.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>61. What do you understand by tweening in CSS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Tweening is the process of filling the gaps between the key sequences, i.e between the keyframes that are already created. Keyframes are those 
frames that represent start and end point of animation action. Tweening involves generating intermediate keyframes between two images that give 
the impression that the first one has evolved smoothly to the second image. For this purpose, we use properties like transforms - matrix, translate, 
scale, rotate etc.<br/>
In the below example, we are generating intermediate frames of paragraph elements to slide through from the start to the right edge of the browser.<br/>
<pre><code class="language-html hljs xml">p {
 animation-duration: 2s;
 animation-name: slidethrough;
}
@keyframes slidethrough {
 from {
  margin-left: 100%;
  width: 300%; 
 }
 to {
  margin-left: 0%;
  width: 100%;
 }
}</code></pre>
Here, the paragraph element specifies that the animation process should take 2 seconds for execution from start to the finish. This is done 
by using the <code><b>animation-duration</b></code> property. The animation-name of the <code><b>@keyframes</b></code> is defined by using the property 
<code><b>animation-name</b></code>. The intermediate keyframes are defined by using <code><b>@keyframes</b></code> rule. In the example, we have just 
2 keyframes. The first keyframe starts at 0% and runs till the left margin of 100% which is the rightmost edge of the containing element. The second 
keyframe starts at 100% where the left margin is set as 0% and the width to be set as 100% which results in finishing the animation flush against the 
left edge of the container area.
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
