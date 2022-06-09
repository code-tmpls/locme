<div><b>1. Are the HTML tags and elements the same thing?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No. HTML elements are defined by a starting tag, may contain some content and a closing tag.
For example, <code>&lt;h1&gt;Heading 1&lt;/h1&gt;</code> is a HTML element but just <code>&lt;h1&gt;</code> 
is a starting tag and <code>&lt;/h1&gt;</code> is a closing tag.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>3. What are void elements in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML elements which do not have closing tags or do not need to be closed are Void elements. For Example 
<code>&lt;br /&gt;</code>, <code>&lt;img /&gt;</code>, <code>&lt;hr /&gt;</code>, etc.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>5. What are HTML Entities?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div>
In HTML some characters are reserved like ‘<’, ‘>’, ‘/’, etc. To use these characters in our webpage we need to use the character entities called 
HTML Entities. Below are a few mapping between the reserved character and its respective entity character to be used.
<div class="table-responsive">          
  <table class="table">
<thead><tr>
<th>Character</th>
<th>Entity Name</th>
<th>Entity Number</th>
</tr></thead>
<tbody>
<tr>
<td>&lt;</td>
<td>&amp;lt;</td>
<td>&amp;#60;</td>
</tr>
<tr>
<td>&gt;</td>
<td>&amp;gt;</td>
<td>&amp;#62;</td>
</tr>
<tr>
<td>&amp;</td>
<td>&amp;amp;</td>
<td>&amp;#38;</td>
</tr>
<tr>
<td>(non-breaking space) Eg. 10 &nbsp;PM</td>
<td>&amp;nbsp; Eg. &lt;p&gt;10&amp;nbsp&amp;nbspPM&lt;/p&gt;</td>
<td>&amp;#160;</td>
</tr>
</tbody>
</table>
  </div>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>7. What is the class attribute in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The class attribute is used to specify the class name for an HTML element. Multiple elements in HTML can have the same class value. 
Also, it is mainly used to associate the styles written in the stylesheet with the HTML elements.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>9. Define multipart form data?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Multipart form data is one of the values of the enctype attribute. It is used to send the file data to the server-side for processing. 
The other valid values of the enctype attribute are text/plain and application/x-www-form-urlencoded.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>11. How to optimize website assets loading?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To optimize website load time we need to optimize its asset loading and for that:
<ul>
<li>
<strong>CDN hosting</strong> - A CDN or content delivery network is geographically distributed servers to help reduce latency.</li>
<li>
<strong>File compression</strong> - This is a method that helps to reduce the size of an asset to reduce the data transfer</li>
<li>
<strong>File concatenation</strong> - This reduces the number of HTTP calls</li>
<li>
<strong>Minify scripts</strong> - This reduces the overall file size of js and CSS files</li>
<li>
<strong>Parallel downloads</strong> - Hosting assets in multiple subdomains can help to bypass the download limit of 6 assets per domain of all modern browsers. This can be configured but most general users never modify these settings.</li>
<li>
<strong>Lazy Loading</strong> - Instead of loading all the assets at once, the non-critical assets can be loaded on a need basis.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>13. What are the different kinds of Doctypes available?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The three kinds of Doctypes which are available:
<ul>
<li>Strict Doctype </li>
<li>Transitional Doctype</li>
<li>Frameset Doctype</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>15. What is the difference between <code>&lt;strong&gt;</code>, <code>&lt;b&gt;</code> tags and <code>&lt;em&gt;</code>, <code>&lt;i&gt;</code> tags?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The effect on a normal webpage of the tags <code>&lt;strong&gt;</code>, <code>&lt;b&gt;</code> and <code>&lt;em&gt;</code>, <code>&lt;i&gt;</code> is the same. 
<code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> tags stands for bold and italic. These two tags only apply font styling and bold tag <code>&lt;b&gt;</code>, just adds 
more ink to the text, these tags don't say anything about the text. Whereas, <code>&lt;strong&gt;</code> and <code>&lt;em&gt;</code> tags represent that 
the span of text is of strong importance or more importance and emphatic stress respectively than the rest of the text. These tags have semantic meaning.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>17. Can we display a web page inside a web page or Is nesting of webpages possible?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, we can display a web page inside another HTML web page. HTML provides a tag <code>&lt;iframe&gt;</code> using which we can achieve this functionality.
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">iframe</span> <span class="hljs-attr">src</span>=<span class="hljs-string">”url</span> <span class="hljs-attr">of</span> <span class="hljs-attr">the</span> <span class="hljs-attr">web</span> <span class="hljs-attr">page</span> <span class="hljs-attr">to</span> <span class="hljs-attr">embed</span>” /&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>19. How can we club two or more rows or columns into a single row or column in an HTML table?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML provides two table attributes “rowspan” and “colspan” to make a cell span to multiple rows and columns respectively.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>21. In how many ways can we position an HTML element? Or what are the permissible values of the position attribute?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are mainly 7 values of position attribute that can be used to position an HTML element:
<ol>
<li>
<strong>static</strong>: Default value. Here the element is positioned according to the normal flow of the document.</li>
<li>
<strong>absolute</strong>: Here the element is positioned relative to its parent element. The final position is determined by the values of left, right, top, bottom.</li>
<li>
<strong>fixed</strong>: This is similar to absolute except here the elements are positioned relative to the &lt;html&gt; element.</li>
<li>
<strong>relative</strong>: Here the element is positioned according to the normal flow of the document and positioned relative to its original/ normal position.</li>
<li>
<strong>initial</strong>: This resets the property to its default value.</li>
<li>
<strong>inherit</strong>: Here the element inherits or takes the property of its parent.</li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>23. What is the difference between "display: none" and "visibility: hidden", when used as attributes to the HTML element?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When we use the attribute "visibility: hidden" for an HTML element then that element will be hidden from the webpage but still takes up space. 
Whereas, if we use the "display: none" attribute for an HTML element then the element will be hidden, and also it won’t take up any space on the webpage
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>25. In how many ways can we specify the CSS styles for the HTML element?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are three ways in which we can specify the styles for HTML elements:
<ul>
<li>
<strong>Inline</strong>: Here we use the ‘style’ attribute inside the HTML element.</li>
<li>
<strong>Internal:</strong> Here we use the &lt;style&gt; tag inside the &lt;head&gt; tag. To apply the style we bind the elements using ‘id’ or ‘class’ attributes.</li>
<li>
<strong>External</strong>: Here we use the &lt;link&gt; tag inside &lt;head&gt; tag to reference the CSS file into our HTML code. Again the binding between elements and styles is done using ‘id’ or ‘class’ attributes.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>27. When to use scripts in the head and when to use scripts in the body?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If the scripts contain some event-triggered functions or jquery library then we should use them in the head section. If the script writes the content 
on the page or is not inside a function then it should be placed inside the body section at the bottom. In short, follow below three points:
<ol>
<li>Place library scripts or event scripts in the head section.</li>
<li>Place normal scripts that do not write anything on the page, in the head section until there is any performance issue.</li>
<li>Place scripts that render something on the web page at the bottom of the body section.</li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>29. What are forms and how to create forms in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The HTML form is used to collect the user inputs. HTML provides a <code>&lt;form&gt;</code> tag to create forms. To take input from the user we use the 
<code>&lt;input&gt;</code> tag inside the form so that all collected user data can be sent to the server for processing. There are different input types 
like ‘button’, ‘checkbox’, ‘number’, ‘text’, ‘password’, ‘submit’ etc.
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">action</span>=<span class="hljs-string">"/submit_data.php"</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Enter your name: <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"name"</span> /&gt;</span> 
   <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Enter Mobile number <span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"number"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"mobile_no"</span>/&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"submit"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Submit"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>31. What is the difference between <code>&lt;figure&gt;</code> tag and <code>&lt;img&gt;</code> tag?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code>&lt;figure&gt;</code> tag specifies the self-contained content, like diagrams, images, code snippets, etc. <code>&lt;figure&gt;</code> tag 
is used to semantically organize the contents of an image like image, image caption, etc., whereas the <code>&lt;img&gt;</code> tag is used to embed 
the picture in the HTML5 document.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>33. How to specify the metadata in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To specify we can use <code>&lt;meta&gt;</code> tag which is a void tag,i.e., it does not have a closing tag. Some of the attributes used with meta 
tags are name, content, http-equiv, etc. The below image tells how to specify the metadata.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>35. Is the <code>&lt;datalist&gt;</code> tag and <code>&lt;select&gt;</code> tag same?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No. The <code>&lt;datalist&gt;</code> tag and <code>&lt;select&gt;</code> tag are different. In the case of <code>&lt;select&gt;</code> tag a user 
will have to choose from a list of options, whereas <code>&lt;datalist&gt;</code> when used along with the <code>&lt;input&gt;</code> tag provides 
a suggestion that the user selects one of the options given or can enter some entirely different value.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>37. Define Image Map?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Image Map lets a developer map/link different parts of images with the different web pages. It can be achieved by 
the <code>&lt;map&gt;</code> tag in HTML5, using which we can link images with clickable areas.
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">img</span>  <span class="hljs-attr">src</span>=<span class="hljs-string">”image_url”</span> ,  <span class="hljs-attr">usemap</span>=<span class="hljs-string">”#workspace”</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">map</span>  <span class="hljs-attr">name</span>=<span class="hljs-string">”workspace”</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">area</span> <span class="hljs-attr">shape</span>=<span class="hljs-string">”rect”</span>  <span class="hljs-attr">coords</span>=<span class="hljs-string">”34,</span> <span class="hljs-attr">44</span>, <span class="hljs-attr">270</span>, <span class="hljs-attr">350</span>” ,  <span class="hljs-attr">href</span>=<span class="hljs-string">”xyz.html”</span> /&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">area</span> <span class="hljs-attr">shape</span>=<span class="hljs-string">”rect”</span>  <span class="hljs-attr">coords</span>=<span class="hljs-string">”10,</span> <span class="hljs-attr">120</span>, <span class="hljs-attr">250</span>, <span class="hljs-attr">360</span>” ,  <span class="hljs-attr">href</span>=<span class="hljs-string">”xyz.html”</span> /&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">map</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>39. What is the difference between <code>&lt;meter&gt;</code> tag and <code>&lt;progress&gt;</code> tag?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code>&lt;progress&gt;</code> tag should be used when we want to show the completion progress of a task, whereas if we just want a scalar 
measurement within a known range or fraction value. Also, we can specify multiple extra attributes for <code>&lt;meter&gt;</code> tags like ‘form’, 
‘low’, ‘high’, ‘min’, etc.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>41. Difference between SVG and Canvas HTML5 element?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
  <table class="table">
<thead><tr>
<th>SVG</th>
<th>Canvas</th>
</tr></thead>
<tbody>
<tr>
<td>SVG is a vector based i.e., composed of shapes.&nbsp;</td>
<td>It is Raster based i.e., composed of pixels.</td>
</tr>
<tr>
<td>SVG works better with a larger surface.</td>
<td>Canvas works better with a smaller surface.</td>
</tr>
<tr>
<td>SVG can be modified using CSS and scripts.</td>
<td>Canvas can only be modified using scripts.</td>
</tr>
<tr>
<td>SVG is highly scalable. So we can print at high quality with high resolution.</td>
<td>It is less scalable.</td>
</tr>
</tbody>
</table>
  </div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>43. What are the significant goals of the HTML5 specification?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
These were the target area of the HTML5 specs:
<ul>
<li>Introduction of new element tags to better structure the web page such as &lt;header&gt; tag.</li>
<li>Forming a standard in cross-browser behavior and support for different devices and platforms</li>
<li>Backward compatible with the older version HTML web pages</li>
<li>Introduction of basic interactive elements without the dependency of plugins such as &lt;video&gt; tag instead of the flash plugin.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>45. What is Microdata in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It is used to help extract data for site crawlers and search engines. It is basically a group of name-value pairs. The groups are called 
items, and each name-value pair is a property. Most of the search engines like Google, Microsoft, Yandex, etc follow schema.org vocabulary 
to extract this microdata.
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">itemscope</span> <span class="hljs-attr">itemtype</span>=<span class="hljs-string">"http://schema.org/SoftwareApplication"</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"name"</span>&gt;</span>Interviewbit Games<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> -
 REQUIRES <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"operatingSystem"</span>&gt;</span>ANDROID<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"applicationCategory"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"http://schema.org/GameApplication"</span>/&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"aggregateRating"</span> <span class="hljs-attr">itemscope</span> <span class="hljs-attr">itemtype</span>=<span class="hljs-string">"http://schema.org/AggregateRating"</span>&gt;</span>
RATING:
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"ratingValue"</span>&gt;</span>4.6<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> (
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"ratingCount"</span>&gt;</span>8864<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> ratings )
 <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"offers"</span> <span class="hljs-attr">itemscope</span> <span class="hljs-attr">itemtype</span>=<span class="hljs-string">"http://schema.org/Offer"</span>&gt;</span>
Price: Rs.<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"price"</span>&gt;</span>1.00<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">itemprop</span>=<span class="hljs-string">"priceCurrency"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"INR"</span> /&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
<ul>
<li>
<strong>itemid</strong> – The unique, global identifier of an item.</li>
<li>
<strong>itemprop</strong> – Used to add properties to an item.</li>
<li>
<strong>itemref</strong> – Provides a list of element ids with additional properties.</li>
<li>
<strong>itemscope</strong> – It defines the scope of the itemtype associated with it.</li>
<li>
<strong>itemtype</strong> – Specifies the URL of the vocabulary that will be used to define itemprop.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>47. What is new about the relationship between the <code>&lt;header&gt;</code> and <code>&lt;h1&gt;</code> tags in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
As HTML5 was all about better semantics and arrangements of the tags and elements, the <code>&lt;header&gt;</code> tag specifies the header section 
of the webpage. Unlike in previous version there was one <code>&lt;h1&gt;</code> element for the entire webpage, now this is the header for one 
section such as <code>&lt;article&gt;</code> or <code>&lt;section&gt;</code>. According to the HTML5 specification, each <code>&lt;header&gt;</code> 
element must at least have one <code>&lt;h1&gt;</code> tag.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>49. Explain new input types provided by HTML5 for forms?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Following are the significant new data types offered by HTML5:
<ul>
<li>Date - Only select date by using type = "date"</li>
<li>Week - Pick a week by using type = "week"</li>
<li>Month - Only select month by using type = "month"</li>
<li>Time - Only select time by using type = "time".</li>
<li>Datetime - Combination of date and time by using type = "datetime"</li>
<li>Datetime-local - Combination of &nbsp;date and time by using type = "datetime-local." but ignoring the timezone</li>
<li>Color - Accepts multiple colors using type = "color"</li>
<li>Email - Accepts one or more email addresses using type = "email"</li>
<li>Number - Accepts a numerical value with additional checks like min and max using type = "number"</li>
<li>Search - Allows searching queries by inputting text using type = "search"</li>
<li>Tel - Allows different phone numbers by using type = "tel"</li>
<li>Placeholder - To display a short hint in the input fields before entering a value using type = "placeholder"</li>
<li>Range - Accepts a numerical value within a specific range using type = "range"</li>
<li>Url - Accepts a web address using type = "url”</li>
</ul>
<b>Example:</b>
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>  
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Date:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"date"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"date"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Week:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"week"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"week"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Month:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"month"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"month"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Time:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"time"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"time"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Datetime:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"datetime"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"datetime"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Datetime Local:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"datetime-local"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"datetime-local"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Color:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"color"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"color"</span>/&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Email:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"email address"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Number:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"number"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"number"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Search:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"search"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"search"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Phone:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"tel"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"phone"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Phone Number"</span> <span class="hljs-attr">pattern</span>=<span class="hljs-string">"\d{10}$"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>Range:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"range"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"range"</span> /&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span>URL:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"url"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"url"</span>/&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>  
    <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>51. Why do you think the addition of drag-and-drop functionality in HTML5 is important? How will you make an image draggable in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The drag and drop functionality is a very intuitive way to select local files. This is similar to what most of the OS have copy functionality thus making 
it very easy for the user to comprehend. Before the native drag and drop API, this was achievable by writing complex Javascript programming or 
external frameworks like jQuery.<br/>
To enable this functionality there is a draggable attribute in the <code>&lt;img&gt;</code> tag and need to set ondrop and ondragover attribute to an 
eventhandler available in scripts.
<pre><code class="language-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">HTML</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">script</span>&gt;</span><span class="javascript">
     <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">allowDrop</span>(<span class="hljs-params">ev</span>) </span>{
       ev.preventDefault();
     }
     <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">drop</span>(<span class="hljs-params">ev</span>) </span>{
       ...
     }
   </span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
   ...
   <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"div1"</span> <span class="hljs-attr">ondrop</span>=<span class="hljs-string">"drop(event)"</span> <span class="hljs-attr">ondragover</span>=<span class="hljs-string">"allowDrop(event)"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"border: 1px solid #aaaaaa; width:350px; height: 70px;"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"drag1"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"img_logo.gif"</span> <span class="hljs-attr">draggable</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"336"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"69"</span>&gt;</span>
    ...
 <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>53. What are the server-sent events in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The events pushed from the webserver to the browsers are called server-sent events. DOM elements can be continuously updated using these events. 
This has a major advantage over straight-up polling. In polling, there is a lot of overhead since every time it is establishing an HTTP connection 
and tearing it down whereas, in server-sent events, there is one long-lived HTTP connection. To use a server-sent event, <eventsource> element is used. 
The src attribute of this element specifies the URL from which sends a data stream having the events.
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">eventsource</span> <span class="hljs-attr">src</span> = <span class="hljs-string">"/cgi-bin/myfile.cgi"</span> /&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>55. What is the usage of a novalidate attribute for the form tag that is introduced in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Its value is a boolean type that indicates whether or not the data being submitted by the form will be validated beforehand. By making this false, 
forms can be submitted without validation which helps users to resume later also.
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">action</span> = <span class="hljs-string">""</span> <span class="hljs-attr">method</span> = <span class="hljs-string">"get"</span> <span class="hljs-attr">novalidate</span>&gt;</span>
        Name:<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"name"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"sname"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
       Doubt:<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"number"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"doubt"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"submit"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Submit"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>57. How to support SVG in old browsers?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To support old browsers instead of defining the resource of svg in src attribute of <code>&lt;img&gt;</code> tag, it should be defined in srcset 
attribute and in src the fallback png file should be defined.
<pre><code class="language-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"circle.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"circle"</span> <span class="hljs-attr">srcset</span>=<span class="hljs-string">"circle.svg"</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>59. What is a manifest file in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The manifest file is used to list down resources that can be cached. Browsers use this information to make the web page load 
faster than the first time. There are 3 sections in the manifest file.
<ul>
<li>
<strong>CACHE Manifest</strong> - Files needs to be cached</li>
<li>
<strong>Network</strong> - File never to be cached, always need a network connection.</li>
<li>
<strong>Fallback</strong> - Fallback files in case a page is inaccessible</li>
</ul>
<pre><code class="language-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">HTML</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">manifest</span>=<span class="hljs-string">"tutorial.appcache"</span>&gt;</span>
...
...
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>61. Explain Web Components and it’s usage.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
These are used to create reusable custom elements which are very difficult in traditional HTML. It consists of three technologies:
<ul>
<li>
<strong>Custom elements</strong> - These are JavaScript APIs that help in defining custom elements and their behavior.</li>
<li>
<strong>Shadow DOM</strong> - These are JavaScript APIs that attach an encapsulated shadow DOM tree to an element to keep the element’s features private and unaffected by other parts.</li>
</ul>
<pre><code class="language-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"utf-8"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">title</span>&gt;</span>composed and composedPath demo<span class="hljs-tag">&lt;/<span class="hljs-name">title</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">script</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"main.js"</span> <span class="hljs-attr">defer</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>composed<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> and <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>composedPath<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span> demo<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">open-shadow</span> <span class="hljs-attr">text</span>=<span class="hljs-string">"I have an open shadow root"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">open-shadow</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">closed-shadow</span> <span class="hljs-attr">text</span>=<span class="hljs-string">"I have a closed shadow root"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">closed-shadow</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
<pre><code class="language-javascript hljs">customElements.define(<span class="hljs-string">'open-shadow'</span>,
 <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">HTMLElement</span> </span>{
<span class="hljs-function"><span class="hljs-title">constructor</span>(<span class="hljs-params"></span>)</span> {
  <span class="hljs-built_in">super</span>();
  <span class="hljs-keyword">const</span> pElem = <span class="hljs-built_in">document</span>.createElement(<span class="hljs-string">'p'</span>);
  pElem.textContent = <span class="hljs-built_in">this</span>.getAttribute(<span class="hljs-string">'text'</span>);
  <span class="hljs-keyword">const</span> shadowRoot = <span class="hljs-built_in">this</span>.attachShadow({<span class="hljs-attr">mode</span>: <span class="hljs-string">'open'</span>});
  shadowRoot.appendChild(pElem);
}
 }
);
customElements.define(<span class="hljs-string">'closed-shadow'</span>,
 <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">HTMLElement</span> </span>{
<span class="hljs-function"><span class="hljs-title">constructor</span>(<span class="hljs-params"></span>)</span> {
  <span class="hljs-built_in">super</span>();
  <span class="hljs-keyword">const</span> pElem = <span class="hljs-built_in">document</span>.createElement(<span class="hljs-string">'p'</span>);
  pElem.textContent = <span class="hljs-built_in">this</span>.getAttribute(<span class="hljs-string">'text'</span>);
  <span class="hljs-keyword">const</span> shadowRoot = <span class="hljs-built_in">this</span>.attachShadow({<span class="hljs-attr">mode</span>: <span class="hljs-string">'closed'</span>});
  shadowRoot.appendChild(pElem);
}
 }
);
<span class="hljs-built_in">document</span>.querySelector(<span class="hljs-string">'html'</span>).addEventListener(<span class="hljs-string">'click'</span>, <span class="hljs-function"><span class="hljs-params">e</span> =&gt;</span> {
 <span class="hljs-built_in">console</span>.log(e.composed);
 <span class="hljs-built_in">console</span>.log(e.composedPath());
});</code></pre>
Here 2 custom elements are defined <code>&lt;open-shadow&gt;</code> and <code>&lt;closed-shadow&gt;</code> which takes their text content and 
inserts them into a shadow DOM as content of a <code>&lt;p&gt;</code> element.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>65. How to insert a copyright symbol on a browser page?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can insert a copyright symbol by using &copy; or &#169; in an HTML file.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>66. How to create a nested webpage in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The HTML iframe tag is used to display a nested webpage. In other words, it represents a webpage within a webpage. 
The HTML <code>&lt;iframe&gt;</code> tag defines an inline frame. For example:
<pre><code class="language-html hljs xml"><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">iframe</span> src="https://www.javatpoint.com/" height="300" width="400"&gt;&lt;/iframe&gt;</span> 
</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>68. What is HTML? What is it's current Version?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML stands for Hypertext Markup Language that is used to create website templates or WebPages to present the content on the World Wide Web.
HTML pages are saved by adding .html or .html in web page name.<br/>
The basic structure of the HTML template is:<br/>
<pre><code class="language-html hljs xml">&lt;html&gt;
&lt;head&gt;
&lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<b>Latest Version: </b> HTML 5<br/>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>69. What is Anchor tag and how can you open an URL into a new tab when clicked?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Anchor tag in HTML is used to link between two sections or two different web pages or website templates.
To open an URL into a new tab in the browser upon a click, we need to add target attribute equal to <b>_blank</b>.
<pre><code class="language-html hljs xml">&lt;a href=”#” target=”_blank”&gt;&lt;/a&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>71. Define attributes in HTML tag.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The HTML tag contains a field inside their tag which is called attributes of that tag.
For Example:
<code>&lt;img src=”#”&gt;</code> -  here in this tag src is img tag attributes.
<code>&lt;input type=” text”&gt;</code> - here in this tag type is input tag attributes.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>72. Can we modify the attribute’s value of the HTML tag dynamically?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, we can modify the value of the attributes by using JavaScript.<br/>
Below is the input element whose attribute will be modified from text to password, JS code to modify the attribute value:<br/>
<pre><code class="language-html hljs xml">&lt;input type=“text” id=“inputField”&gt;</code></pre>
<pre><code class="language-javascript hljs xml">document.getElementById(“inputField”).attr(“type”, “password”);</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>73. What are inline elements and block-level elements in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Block elements are the blocks that take the full available width and always start from a new line. It will stretch 
itself to the full available width of the available container width. Block-level elements are <code>&lt;div&gt;</code>, 
<code>&lt;p&gt;</code>, <code>&lt;img&gt;</code>, <code>&lt;section&gt;</code> and many more.<br/>
Inline elements are the elements that will only take the width that is required to fit into the container.<br/>
<b>For Example,</b> take the flow of text on the page. When the line of the text takes the full width of the container it 
wraps itself into a new line and again goes in the same way.<br/>
Whereas, the inline element will take only that much space or width that it is needed for them. Inline elements are 
<code>&lt;span&gt;</code>, <code>&lt;label&gt;</code>, <code>&lt;a&gt;</code>, <code>&lt;b&gt;</code> and many more.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b> 75. What are the different browsers that support HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
All modern browsers support HTML5 elements except some old browsers. But fortunately, most of the browsers will take html5 elements as inline elements.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>77. Explain the structure of the HTML webpage. </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The common structure which all HTML pages follow are enlisted below:
<ul>
<li><b>DOCTYPE –</b> It is a special tag in HTML which is always written at the top of the HTML document, i.e. at the start of the 
HTML template. DOCTYPE is used to convey to the browser about the HTML version.
<pre><code class="language-html hljs xml">&lt;!DOCTYPE html&gt;</code></pre>
</li>
<li><b>HTML –</b> After DOCTYPE tag, the HTML tag is written to start the template. All the code will be placed into this 
HTMLtag. It works as the container for the whole HTML page elements.
<pre><code class="language-html hljs xml">&lt;html&gt;
&lt;!-- Rest of the html code will come inside it --&gt;
&lt;/html&gt;</code></pre>
</li>
<li><b>HEAD –</b> <code>&lt;head&gt;</code> tag is the first element inside the <code>&lt;html&gt;</code> tag. It is used to provide information 
to the browser about the page and its contents.<br/>
Search Engine Optimization (SEO) techniques are written inside this tag. <code>&lt;title&gt;</code>, <code>&lt;meta&gt;</code> tags are written inside 
these tag. CSS and JS external links or internal CSS and JS are also written inside this tag.
<pre><code class="language-html hljs xml">&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale = 1.0"&gt;
&lt;title&gt;HTML Interview Questions&lt;/title&gt;
&lt;/head&gt;</code></pre>
</li>
<li><b>BODY –</b> &lt;body&gt; tags are written after the closing tag of the &lt;head&gt; tag, i.e. after &lt;/head&gt;. Whatever HTML code is 
written inside these tags will be shown by the browser as website content.
<pre><code class="language-html hljs xml">&lt;body&gt;
&lt;h2&gt;Top HTML Interview Questions&lt;/h2&gt;
&lt;p&gt;HTML stands for Hypertext Markup Language&lt;/p&gt;</code></pre>
</body>
</li>
</ul>
<b>Together the whole body will be:</b>
<pre><code class="language-html hljs xml">&lt;! DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale = 1.0"&gt;
&lt;title&gt;HTML Interview Questions&lt;/title&gt;
&lt;style type="text/css"&gt;
&lt;!-- CSS Code will be written into these --&gt;
h2{ color: #1855b5; }
p{ color: #3bd256;font-weight: 600; }
&lt;/style&gt;
&lt;script type="text/javascript"&gt;
&lt;!-- Javascript code will be written into these --&gt;
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Top HTML Interview Questions&lt;/h2&gt;
&lt;p&gt;HTML stands for Hypertext Markup Language&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>80. Why do we use the <code>required</code> attribute in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The required attribute is used in HTML to make the field mandatory. It forces the user to fill that particular field to submit the form.<br/>
If the field is input then it will throw a default HTML error.<br/>
<pre><code class="language-html hljs xml">&lt;input type="email" name = "user_email" required /&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>81. How can we include Google maps on a website?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
HTML code to include Google maps on our web page:
<pre><code class="language-html hljs xml">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1&gt;Google Map&lt;/h1&gt;
&lt;div id="map" style="width: 400px; height: 400px; background: yellow"&gt;&lt;/div&gt;
&lt;script&gt;
function myMap() {
 var mapOptions = { center: new google.maps.LatLng(51.5, -0.12),
                    zoom: 10 };
 var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
&lt;/script&gt;
&lt;script src= "https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>86. Explain new form elements in HTML5.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The new form elements that were added into HTML5 are:
<ul>
<li><strong>Datalist –</strong> It’s used as a list of options for input control.</li>
<li><strong>Keygen –</strong> This tag defines a key-pair generator (Private/Public) field.</li>
<li><strong>Output –</strong> It’s used to show the result of a calculation.</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>87. What is Quirks mode in HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we do not include the <code>&lt;!DOCTYPE&gt;</code> element in our HTML page or Document, it will go to Quirks Mode. 
In this mode, the HTML element depends on the browser. Hence the content will be displayed according to the browser.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>88. What is the difference between HTML elements and tags?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead>
<tr>
<th>HTML Elements</th>
<th>HTML Tags</th>
</tr>
</thead>
<tbody>
<tr><td>The element is an individual component of the HTML web page or document. It represents semantics or meaning. For example, the title element 
represents the title of the document.</td>
<td>It is the root of the HTML document which is used to specify that the document is HTML. For example, the Head tag is used to contain all 
the head element in the HTML file.</td></tr>
</tbody>
</table>
  </div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>89. What is a marquee?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Marquee is used for the scrolling text on a web page. It scrolls the image or text up, down, left or right automatically. 
You should put the text which you want to scroll within the Marquee.
<pre><code class="language-html hljs xml">&lt;marquee&gt;……&lt;/marquee&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>91. What is the difference between DIV and SPAN in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead>
<tr><th>Div</th><th>Span</th></tr>
</thead>
<tbody>
<tr><td><code>&lt;span&gt;</code> element is in-line and usually used for a small chunk of HTML inside a line,such as inside a paragraph</td>
	<td><code>&lt;div&gt;</code> element is block-line which is equivalent to having a line-break before and after it and used to group larger 
	  chunks of code.</td></tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->



<div><b>93. Why is a URL encoded in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An URL is encoded to convert non-ASCII characters into a format that can be used over the Internet because a URL is sent over the Internet 
by using the ASCII character-set only. If a URL contains characters outside the ASCII set, the URL has to be converted. The non-ASCII characters 
are replaced with a “%” followed by hexadecimal digits.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>95. Can you create a multi-colored text on a web page?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, we can create a multi-colored text on a web page.  To create a multicolor text, you can use 
<code>&lt;font color =”color”&gt;&lt;/font&gt;</code> for the specific texts that you want to color.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>97. What is the use of a span tag? Explain with example.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The <code>&lt;span&gt;</code> tag is used for following things:
<ul>
<li>For adding color on text</li>
<li>To add background on text</li>
<li>Highlight any color text</li>
</ul>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>99. When is it appropriate to use frames?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Frames can make navigating a site much easier. If the main links to the site are located in a frame that appears at the top or along the edge 
of the browser, the content for those links can be displayed in the remainder of the browser window.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>101. How are active links different from normal links?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The default color for normal and active links is blue. Some browsers recognize an active link when the mouse cursor is placed over that link. 
Whereas, others recognize active links when the link has the focus. Those that don’t have a mouse cursor over that link is considered a normal link.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>102. What is the advantage of grouping several checkboxes together?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The checkboxes don’t affect one another. But, grouping these checkboxes together help to organize them. <b>Checkbox</b> buttons can have their name 
and do not need to belong to a group. A single web page can have many different groups of checkboxes.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>104. What is button tag?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The button tag is used in HTML 5. It is used to create a clickable button within the HTML form on the web page. This tag creates a "submit" or "reset" button. 
The button tag code is as follows:
<pre><code class="language-html hljs xml">&lt;button name="button" type="button"&gt;Click Here&lt;/button&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>105. What are logical and physical tags in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Logical tags</b> are used to tell the meaning of the enclosed text. The example of the logical tag is &lt;strong&gt;&lt;/strong&gt; tag. 
When we enclose the text in the strong tag, it tells the browser that enclosed text is more important than other texts.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>107. Why is the Embed Tag Used in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
An Embed Tag is used for including a Video or Audio in an HTML Document. A source of audio or video file to be displayed on the webpage 
is defined within an Embed tag as:
<pre><code class="language-html hljs xml">&lt;embed&gt; Source &lt;/EMBED&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>109. How to give space in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In order to add a space in the webpage, Go  where you want to add the space and then use the spacebar. Normally, HTML displays one space 
between words, no matter how many times you have entered  the space bar.<br/>
Now if you Type &nbsp; to force an extra space.<br/>
This is known as a non-breaking space because it helps to prevent a line break at its location.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>111. How to change text color in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Using color property.
<pre><code class="language-html hljs xml">&lt;p style="color:red;"&gt;This is red&lt;/p&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>112. How to change font color in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code>&lt;font&gt;</code> tag, is used to specify the text color.<br/>
<b>Color with color Names</b>
<pre><code class="language-html hljs xml">&;t;font Color="Blue"&gt;Hello&lt;/font&gt;</code></pre>
<pre><code class="language-html hljs xml">&lt;font color="rgb(128,128,0)"&gt;Hello&lt;/font&gt;</code></pre>
<pre><code class="language-html hljs xml">&lt;font color="#00FF00"&gt;Hello&lt;/font&gt;</code></pre>

<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>113. How to change background color in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Using <code>background-color</code> property</b>,<br/>
<b>Syntax:</b><br/>
<pre><code class="language-html hljs xml">&lt;body style="background-color:powderblue;"&gt;...&lt;/body&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>115. How to add image in HTML from a folder?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li>Copy the image to your images folder in the project.</li>
<li><b>Following is the HTML code that inserts an image into the page:</b>  
<pre><code class="language-html hljs xml">&lt;img src="" alt="My Image Description"&gt;</code></pre></li>
<li>Insert the file path (folderName/fileName.jpg) into your HTML code between the double quote marks of the src="" code.<br/>Just like,
<pre><code class="language-html hljs xml">&lt;img src="folderName/fileName.jpg" alt="My Image Description"&gt;</code></pre>
</li>
</ol>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>117. How to underline text in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
&lt;u&gt; tag is used for underline the text. The <code>&lt;u&gt;</code> tag was deprecated in HTML, but then they re-introduced in HTML5.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>118. How to add a link in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To add links in html we use <code>&lt;a&gt;</code> and <code>&lt;/a&gt;</code> tags,  which are the tags used to define the links. 
The <code>&lt;a&gt;</code> tag indicates where the hyperlink starts and the <code>&lt;/a&gt;</code> tag indicates where it ends. 
Whatever text gets added inside these tags, will work as a hyperlink. Add the URL for the link in the <code>&lt;a href=” ”&gt;</code>.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>119. How to add favicon in HTML?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can create a .png image and then use f the following snippets between the <code>&lt;head&gt;</code> tags for the static HTML documents:
<b>Syntax:</b><br/>
<pre><code class="language-html hljs xml">&lt;link rel="icon" type="image/png" href="/favicon.png"/&gt;
&lt;link rel="icon" type="image/png" href="https://example.com/favicon.png"/&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>122. What is datalist tag?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The datalist tag is an HTML tag that lets the user auto-complete the form based on the predefined options. 
It presents the users with predefined options that they can choose from. An example of this can be as below:
<pre><code class="language-html hljs xml">&lt;datalist id="fruits"&gt;
&lt;option value="Apple"&gt;  
&lt;option value="Mango"&gt; 
&lt;option value="Grapes"&gt;
&lt;/datalist&gt;</code></pre>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>125. What is the difference between HTML4 and HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>HTML 4</th><th>HTML 5</th></tr></thead>
<tbody>
<tr>
<td>HTML 4 makes use of common structures like header and footer.</td>
<td>In addition to the common structures, HTML 5 makes use of new structures 
like drag and drop, section and much more.</td>
</tr>
<tr>
<td>Not capable of handling error due to inaccurate syntax.</td>
<td>Capable of handling inaccurate syntax error.</td>
</tr>
<tr>
<td>Unable to embed audio and video directly - Make use of Third Party Plugins like Flash.</td>
<td>Contains Embedded Audio/Video Tags to include audio and video without any Third Party Plugins.</td>
</tr>
<tr>
<td>HTML 4 has less simplified Syntax.</td>
<td>HTML 5 has much more simplified Syntax.</td>
</tr>
<tr>
<td>Doesn't support Local Storage unline HTML 5.</td>
<td>Supports local storage and hence prevents external plugins.</td>
</tr>
<tr>
<td>It doesn't have new advanced set of tags like <code>&lt;canvas&gt;</code> and so on.</td>
<td>It has a complete new set of attributes like <code>&lt;canvas&gt;</code>, 
<code>&lt;video&gt;</code> along with old ones.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>126. Which browsers support HTML5?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Currently, latest versions of Apple Safari, Google Chrome, Opera and Mozilla Firefox support many functionalities of HTML5. 
Internet Explorer 9.0 is also intended to have support for HTML features. Besides, the mobile web browsers that come pre-installed 
on Android phones, iPhones, and iPads, all provide excellent support for HTML5.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>127. What is the difference between HTML5 and CSS3?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Just like HTML5 is the fifth and the latest version of HTML, CSS is the third and the latest version of CSS. HTML5 includes a 
number of advanced elements to facilitate easy coding of web pages. Likewise, CSS3 encompasses the concept of modules that aid 
efficient designing in less time. HTML5 contains cascaded CSS3 to specify the style and structure of the site or app. HTML5 and 
CSS3 files are kept separated though.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->


<div><b>128. Do all HTML tags have an end tag?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No, all HTML tags do not have an end tag. For example, <br> tag is used to break the line, <code>&lt;image&gt;</code> tag is used 
to insert an image into a document. They are considered as self-closing tags and do not require an end tag. 
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->

<div><b>131. What is the relationship between the border and rule attributes?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Default cell borders, with a thickness of 1 pixel, are automatically added between cells if the border attribute is set to a nonzero value. 
Likewise, If the border attribute is not included, a default 1-pixel border appears if the rules attribute is added to the <code>&lt;table&gt;</code> tag.
<!-- Answer ::: END -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->