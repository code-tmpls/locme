<div><b>2. What are the advantages of using React JS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<i>In Model-View-Controller (MVC) Architecture, React deals with View.</i><br/><br/> The Advantage of React JS are
<ul>
<li><b>Use of Virtual DOM to improve efficiency</b><br/>
React uses virtual DOM to render the view. As the name suggests, virtual DOM is a virtual representation of the real DOM. Each time the data 
changes in a react app, a new virtual DOM gets created. Creating a virtual DOM is much faster than rendering the UI inside the browser. Therefore, 
with the use of virtual DOM, the efficiency of the app improves.
</li>
<li><b>Reusable components</b><br/>
React uses component-based architecture for developing applications. Components are independent and reusable bits of code. These components can be 
shared across various applications having similar functionality. The re-use of components increases the pace of development.</li>
<li><b>SEO friendly</b><br/>
React allows developers to develop engaging user interfaces that can be easily navigated in various search engines. It also allows server-side 
rendering, which boosts the SEO of an app.</li>
<li><b>Huge ecosystem of libraries to choose from</b><br/>
React provides you the freedom to choose the tools, libraries, and architecture for developing an application based on your requirement.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What are the features introduced in React JS Version-17?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Version-17:</b><br/><br/>
<ol>
<li><b>React v17 Allows Gradual React Upgrades:</b><br/>
The application may work well when you update your entire application from React 15 to 16 or from React 16 to 17. Yet, if the codebase was 
written more than a few years ago and is not regularly maintained, it may become increasingly difficult.<br/>
Although two versions of React can be used on the website, it was unstable and caused event issues until <code><b>React v17</b></code> came into the picture. 
Some improvements have been made to the <code><b>React event system</b></code> in order to allow gradual upgrades. React17 is an essential release because 
the changes could break down.<br/><br/>
</li>
<li><b>"Event root" Will no Longer be document.documentElement</b><br/>
Until now, when installing a React component, your event listener has been directly attached to the document level, which could have created 
several problems, such as inconsistencies with your other non-react code, javascript libraries, etc. but in <code><b>React v17</b></code>, it will 
attach them to the root DOM container into which your React tree is rendered.<br/><br/>
</li>
<li><b>Clean up in <code><b>useEffect()</b></code> Will Change from Synchronous to Asynchronous</b><br/>
Until the <code><b>React v17</b></code> came into the market, the cleanup mechanism used to run synchronously (identical to 
<code><b>componentWillUnmount</b></code> used in classes) which implies that when unmounting your components, react used to execute 
the cleanup function and then update the screen which used to slow down the heavy apps.<br/>
Now, the cleanup functions are going to run asynchronously, after the screen gets updated. This will improve the performance of the app.<br/><br/>
</li>
<li><b>Consistent Errors for Returning Undefined</b><br/>
<code><b>React v17</b></code> also includes error handling cases where undefined is returned from the rendering function. In React v16, Components 
that return undefined are considered as an error. Previously, React only did this for class and function components, but did not check the return 
values of <code><b>forwardRef</b></code> and <code><b>memo</b></code> components.<br/>
In React v17, the behavior for <code><b>forwardRef()</b></code> and code><b>memo()</b></code> components is consistent with regular function and 
class components. Returning undefined from them is an error.<br/><br/>
</li>
<li><b>New Changes in the Event System</b><br/>
A few changes can be observed in the event system, some of which we have listed down:
<ul>
<li>They took care of the problems faced at <code><b>onScroll</b></code> event. The problem was that OnScroll callback on the parent element fires when a 
children element is scrolled.</li>
<li><code><b>onFocus</b></code> and <code><b>onBlur</b></code> events have changed to use with native <code><b>focusin</b></code> and 
<code><b>focusout</b></code> events.</li>
<li><code><b>onClickCapture</b></code> will be used to capture browser phases.</li>
</ul><br/>
</li>
<li><b>No Event Pooling</b><br/>
React 17 deletes the optimization of <code><b>"event pooling"</b></code> from React. In major browsers, it does not improve efficiency and 
confuses even experienced react users.<br/>
React reused the event objects for output in older browsers between separate events and set all event fields to <code><b>null</b></code>.<br/>
While using React 16, you need to call <code><b>e.persist()</b></code> to use the event properly or read the property you want earlier.<br/><br/>
The old design of event pooling has been eliminated entirely, enabling us to read the event fields when you need them.<br/><br/>
</li>
<li><b>Removing Private Exports</b><br/>
React Native for Web was the only project that uses <code><b>private export</b></code> and that a migration to a new method has already 
been completed that does not rely on these private exports.<br/>
This implies that the old React Native Web version will not be compatible with React 17 but will work with the updated versions. It 
doesn’t affect too much in reality because React Native had to release new versions to adjust to changes in its internal react.<br/><br/>
</li>
<li><b>New Lifecycle Methods</b><br/>
The new lifecycle methods are switched with the deprecated lifecycle methods. These two methods are: <code><b>getDerivedStateFromProps</b></code> and 
<code>getSnapShotBeforeUpdate</code>.<br/>
The hazardous processes are replaced by these new lifecycle methods. For instance, <code><b>componentWillUpdate</b></code> can be replaced by using 
<code><b>getDerivedStateFromProps</b></code> together with <code><b>shouldComponentUpdate</b></code>, <code><b>componentWillMount</b></code> should 
be removed altogether for async rendering.<br/><br/>
</li>
<li><b>Native Component Stacks</b><br/>
Generally, the browser will give us a <code><b>Javascript function name</b></code> and <code><b>locations stack trace</b></code> when you toss 
an error in the browser.<br/>
In React 17, a different method is used for the component stacks to be generated that combine them from the regular native JavaScript stacks.
This helps us in a production environment to get the completely symbolic react component stack traces.<br/><br/>
</li>
<li><b>Changes to Event Delegation</b><br/>
In fact, React does not really connect them to the DOM nodes you declare on most events. Rather, React adds one handler per event type 
directly at the document node. It is known as the delegation for the event. It also makes it simpler to add new features such as replaying 
events, apart from its efficiency advantages for large applications.<br/>
Since its initial release, React has done event delegation automatically. When a DOM event initiates on the document, React understands 
which component to call, and then the React event goes upwards through your components. But, in reality, the native event has already 
bubbled up to the document level, where React installs its event handlers.<br/><br/>
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