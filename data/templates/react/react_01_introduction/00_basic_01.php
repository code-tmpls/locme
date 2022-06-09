<div><b>1. What is React JS? Why it is used?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
React js is an open-source JavaScript library introduced by Facebook Company that is used for building user interfaces specifically 
for single-page applications.  It's used for handling the view layer for web and mobile apps. React also allows us to create reusable UI components.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What are the disadvantage of ReactJS?</b></div>
<div class="list-group">
<div class="list-group-item">
The disadvantages of ReactJS are
<ul>
<li><b>The high pace of development</b><br/>
Since the environment continually changes so fast, some of the developers not feeling comfortable to relearn the new ways of doing things 
regularly. It may be hard for them to adopt all these changes with all the continuous updates. They need to be always updated with their 
skills and learn new ways of doing things.
</li>
<li><b>Only View Part</b><br/>
ReactJS Covers only the UI Layers of the app and nothing else. So you still need to choose some other technologies to get a complete 
tooling set for development in the project.</li>
<li><b>JSX as a barrier</b><br/>
ReactJS uses JSX. It's a syntax extension that allows HTML with JavaScript mixed together. This approach has its own benefits, but 
some members of the development community consider JSX as a barrier, especially for new developers. Developers complain about its 
complexity in the learning curve.</li>
</ul>
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is Single Page Application (SPAs)?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A single-page application (SPA) is a web application or website that interacts with the user by dynamically rewriting the current 
web page with new data from the web server, instead of the default method of a web browser loading entire new pages. The goal is 
faster transitions that make the website feel more like a native app.<br/><br/>
In a SPA, a page refresh never occurs; instead, all necessary HTML, JavaScript, and CSS code is either retrieved by the browser 
with a single page load, or the appropriate resources are dynamically loaded and added to the page as necessary, usually in 
response to user actions.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. What are the features introduced in React JS Version-16?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Version-16:</b><br/><br/>
(<i>Facebook announced React Version 16 is a complete rewrite of the React library.</i>)<br/><br/>
<b>1. React Fiber Architecture</b><br/>
<ul>
<li>With this Version, the new core Architecture <code><b>React Fiber</b></code> was introduced that keeps most of the API 
intact and backward compatible.</li>
<li>The project that are using previous version of React can easily update their existing apps to React 16 without running into issues.</li>
</ul>
<b>2. Error Handling</b><br/>
<ul>
<li>One of the biggest changes is how React handles JavaScript errors.<br/><br/> Before version 16, a JavaScript error inside a component 
would break the entire app.<br/><br/>
React 16 provides a built-in solution for handling errors gracefully, with a new lifecycle method called <code><b>componentDidCatch()</b></code>. 
This lifecycle hook gets triggered whenever a component’s render() function throws an error.<br/><br/>
With <code><b>componentDidCatch()</b></code> comes a new concept of an Error Boundary. Error boundaries are wrapper components that use 
<code><b>componentDidCatch()</b></code> to capture errors anywhere in their child component tree.<br/><br/>
For example, you create an error boundary as a class component.We can wrap the error boundary around your entire app, or specific components as
<pre><code class="language-html hljs xml">&lt;ErrorBoundary&gt;
  &lt;MyForm /&gt;
&lt;/ErrorBoundary&gt;</code></pre>
</li>
</ul>
<b>3. Render Arrays, Strings and Numbers</b><br/>
<ul>
<li>Upto now, <code><b>render()</b></code> method returns a single React element. You’re now able to render multiple sibling elements without 
a wrapping element by returning an array.</li>
</ul>
<b>4. Portals</b><br/>
React 16 lets you insert a child element into a different location in the DOM, outside of your main DOM tree, that can be acheived 
with <code><b>"portals"</b></code>.<br/><br/>
<b>5. Custom DOM Attributes</b><br/>
Before React 16, any unrecognized attribute given to an element would be ignored by React. Now from React v.16, any standard or custom 
attribute will end up in the DOM. For example, you can provide a custom attribute to a DOM component, like a div:
<pre><code class="language-html hljs xml">&lt;div my-attribute="is-cool"&gt;...&lt;/div&gt;</code></pre>
React will pass the attribute through to the DOM.<br/>
Even though all attributes get rendered to the DOM, we should still use the canonical React naming for known attributes. 
For example, if we provide <code><b>class</b></code> and <code><b>tabindex</b></code> to a DOM component, React will warn 
us about using <code><b>tabIndex</b></code> and <code><b>className</b></code> instead.<br/><br/>
<b>6. Returning null from setState</b><br/>
From React v.16, we can check if the new value of state is the same as the existing one. If the values are the same, 
we can return <code><b>null</b></code> and it won’t re-render the component.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What are the limitations of React JS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Limitations of React:</b><br/><br/>
<ul>
<li>React is just a library, not a full-blown framework.</li>
<li>Its library is very large and takes time to understand.</li>
<li>It can be little difficult for the novice programmers to understand.</li>
<li>Coding gets complex as it uses inline templating and JSX</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9.  How React JS is different from Angular?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">          
<table class="table">
<thead><tr><th>Topic</th><th>React JS</th><th>Angular</th></tr></thead>
<tbody>
<tr>
 <td>Architecture</td>
 <td>In Model View Controller (MVC) Architecture, React JS deals only with View.</td>
 <td>In Model View Controller (MVC) Architecture, Angular deals with all Model, View and Controller.</td>
</tr>
<tr>
 <td>Rendering</td>
 <td>Server-side Rendering</td>
 <td>Client-side Rendering</td>
</tr>
<tr>
 <td>Document Object Model (DOM)</td>
 <td>Uses Virtual DOM</td>
 <td>Uses Real DOM</td>
</tr>
<tr>
 <td>Data Binding</td>
 <td>One way Data Binding</td>
 <td>Two way Data Binding</td>
</tr>
<tr>
 <td>Debugging</td>
 <td>Compile-time Debugging</td>
 <td>Run-time Debugging</td>
</tr>
<tr>
 <td>Author</td>
 <td>Designed and Introduced by Facebook</td>
 <td>Designed and Introduced by Google</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

