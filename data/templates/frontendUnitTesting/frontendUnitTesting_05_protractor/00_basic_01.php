<div><b>1. List Behavior-driven development (BDD) test frameworks supported By Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Protractor support Jasmine and Mocha BDD test frameworks.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. How to locate elements that have a specific class name.in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>webdriver.By.className</b></code> is used in Protractor to locates elements that have a specific class name.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is difference between WebDriver click() and JavaScript click()?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>WebDriver click()</b></code> simulates real user interaction with the UI whereas <code><b>JavaScript click()</b></code> executes 
JavaScript in the currently selected frame or window.
<!-- Answer ::: END -->
</div>
</div>


<div><b>4. How to cancel and accept Alert in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ol>
<li><b>Cancel an Alert:</b><br/><br/>
You can cancel Alert in Protractor by using <code><b>dismiss()</b></code>.<br/><br/>
<code><b>dismiss()</b></code> method is used to cancel the alert for handling alerts in Selenium. It is functional for all alert types: 
<code><b>prompt</b></code>, <code><b>alert</b></code>, and <code><b>confirmation</b></code> dialogue box.<br/><br/>
<b>Syntax looks like</b>,
<pre><code class="language-html hljs xml">driver.switchTo().alert().dismiss();</code></pre></li>
<li><b>Accept an Alert</b><br/><br/>
You can accept Alert in Protractor by using <code><b>accept()</b></code>.<br/><br/>
<code><b>accept()</b></code> method is used to accept an alert and continue with the webpage operation. It can be utilized for 
all JavaScript alert types. An alert command can be executed by using the variable for handling alerts in Selenium.<br/><br/>
<b>Syntax looks like</b>,
<pre><code class="language-html hljs xml">var myAlert = browser.switchTo().alert();
myAlert.accept();</code></pre></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>


<div><b>5. How to use Cucumber with Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To use <b>Cucumber. js</b>, you should update the framework and add a framework path, and then add a few cucumberOpts that specify where to find the 
step definition files such that it will now run the protractor cucumber.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. How to select an option from dropdown in Protractor e2e testing?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can select an option from the dropdown in Protractor e2e testing with the following step:
<ol>
<li>Find the dropdown using the element.</li>
<li>Click the dropdown.</li>
<li>Click the option.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. How can I get the current URL using a protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can get the current URL using protractor by using <code><b>browser.getCurrentUrl()</b></code> as follows:
<pre><code class="language-html hljs xml">expect(browser.getCurrentUrl()).toEqual("expectedUrl");</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. Major Difference Between Protractor and Selenium.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
<table class="table">
<thead><tr><th>S.No.</th><th>Selenium</th><th>Protractor</th></tr></thead>
<tbody>
<tr>
  <td>1</td>
  <td>It helps the framework which is used for unit testing.</td>
  <td>It provides support for frameworks like jasmine.</td>
</tr>
<tr>
  <td>2</td>
  <td>This is good framework when you are working with non-angular apps.</td>
  <td>This helps to build your application in both angular and non-angular apps.</td>
</tr>
<tr>
  <td>3</td>
  <td>It has less number of code lines as compared to a protractor.</td>
  <td>It has more number of code lines as compared to Selenium Webdriver.</td>
</tr>
<tr>
  <td>4</td>
  <td>This is easy to Understand as compared to a protractor.</td>
  <td>To understand this framework, it is quite complex as compared to Selenium Webdriver.</td>
</tr>
<tr>
  <td>5</td>
  <td>It takes less time to debug the app as compared to a protractor.</td>
  <td>It takes more time in debugging as compared to Selenium Webdriver.</td>
</tr>
<tr>
  <td>6</td>
  <td>Eclipse licensed this framework.</td>
  <td>Webstorm licensed this framework.</td>
</tr>
<tr>
  <td>7</td>
  <td>It can be used in various programming languages like java, python, etc.</td>
  <td>It can be used with Js only unlike Selenium Webdriver which supports different languages.</td>
</tr>
</tbody>
</table>
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. How to getText on an input in protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To get a text on an input in the protractor you can use <code><b>getText()</b></code> function.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. What is browser.ignoreSynchronization in protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>browser. ignoreSynchronization</b></code> is the driver method used directly to find the elements such that the system 
will try to find them without waiting for any ongoing <code><b>$http</b></code> requests to finish, It can be done by setting <br/>
<code><b>browser. ignoreSynchronization = true</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. How to set default browser window size in Protractor/WebdriverJS?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can use the following code to set the default window size in Protractor/WebdriverJs:
<pre><code class="language-html hljs xml">browser.executeScript('window.moveTo(0,0);' 
+ 'window.resizeTo(screen.width, screen.height);');</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. How to create promises in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
With the help of following syntax you can create a promise in protractor:
<pre><code class="language-html hljs xml">var deferred = protractor.promise.defer();
var promise = deferred.promise;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Enlist few locators available in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Few locators available in Protractor are
<ul>
<li>by.className</li>
<li>by.id</li>
<li>by.CSS</li>
<li>by.linkText</li>
<li>by.name</li>
<li>by.partialLinkText</li>
<li>by.tagName</li>
<li>by.xpath</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. What is use of browser.refresh in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>browser.refresh()</b></code> is used to refresh the current page or making a full reload of the current page in 
Protractor. It assumes that the current application is an angular application and waits to load before executing the next command.
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. List the different mouse actions that can be performed using protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Mouse actions are the demonstration of mouse activities (such as hover, clicking, drag, and drop) that can be easily simulated in 
Selenium Protractor with the predefined methods for mouse movement, clicking, and others.<br/><br/>
Different mouse actions that can be performed using protractor are
<ul>
<li>mouseMove()</li>
<li>dragAndDrop( source , target )</li>
<li>click()</li>
<li>doubleClick()</li>
<li>mouseUp()</li>
<li>mouseDown()</li>
<li>contextClick()</li>
<li>clickAndHold()</li>
<li>dragAndDropBy( source, xOffset, yOffset )</li>
<li>moveByOffset( xOffset, yOffset )</li>
<li>moveToElement( toElement )</li>
<li>release()</li>
<li>mouseMove()</li>
<li>mouseHover()</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. What is a Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Protractor</b> is an end-to-end test framework for Angular and AngularJS applications. It is built on top of WebDriverJs protocol 
which internally uses native events and browser-specific drivers to interact with our application. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>17. What are the features of Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Features of Protractor:</b>
<ul>
<li>It uses the simple syntax for writing test cases.</li>
<li>Have angular-specific locators like ng-model, ng-bind, etc.</li>
<li>Supports behavior-driven development tools like Jasmine/Mocha.</li>
<li>It supports parallel-execution.</li>
<li>It supports cross-browser testing.</li>
<li>It supports mobile browsers too. We can run the same script in mobile browser too without changing the code.</li>
<li>It supports Headless browser.</li>
<li>It supports cloud testing platforms such as crossbrowsertesting.com and SauceLabs.</li>
<li>We can deal easily with synchronization issue in AngularJS applications</li>
<li>Easily integrated with Jenkins/Browser, Stack/Grunt.</li>
<li>Support all latest browsers like Firefox, Chrome, Safari, Internet explorer.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>18. How can we set value to prompt Alert in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can use the <code><b>sendKeys()</b></code> command to set the value to prompt type javascript Alert in Protractor.
<!-- Answer ::: END -->
</div>
</div>

<div><b>19. What is a spec file in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A spec file is where we write actual test code. This file contains the logic and locators that assist in interacting 
with an application. It contains the specs or automated test cases that are known as <code><b>Test Scripts</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>20. What does directConnect do in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If you set directConnect: true in your config file, your test script will communicate directly with Chrome Driver or Firefox Driver. 
Settings for seleniumAddress and seleniumServerJar will be ignored if this is true.<br/><br/>
The use of directly connecting to browser drivers is that your test scripts may begin to run faster.
<!-- Answer ::: END -->
</div>
</div>

<div><b>21. How do you add a custom locator for Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
For Protractor, <code><b>addLocator</b></code> method can be used with <code><b>element(by.locatorName(args))</b></code> to add 
your own custom locator in the framework.
<!-- Answer ::: END -->
</div>
</div>

<div><b>22. Can you verify whether an element exists on a webpage using Protractor? If yes, then how?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, we can verify whether an element exists on a webpage using a Protractor. It can be done by using <code><b>isPresent()</b></code> function.
<!-- Answer ::: END -->
</div>
</div>

<div><b>23. How can you verify whether an element is enabled or not?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To verify whether an element is enabled or not, <code><b>isEnabled()</b></code> method is used in Protractor. This method returns a 
Boolean value. If the element is enabled, then it returns true. If the element is not enabled, then it returns false.
<!-- Answer ::: END -->
</div>
</div>

<div><b>24. Can you verify whether an element is displayed on a webpage or not? If yes, then how?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Verifying whether an element is displayed on a webpage or not can be done using <code><b>isDisplayed()</b></code> in Protractor. This method 
returns a Boolean value as per the state of the element. It returns true if the element is displayed and returns false if the element is not displayed.
<!-- Answer ::: END -->
</div>
</div>


<div><b>25. Name the browsers supported by Protractor.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Protractor supports the two latest and major versions of <code><b>Chrome</b></code>, <code><b>Firefox</b></code>, <code><b>Safari</b></code> and <code><b>IE</b></code>. 
Protractor uses WebDriver to drive browsers and the issues related to WebDriver implementations. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>26. How to handle installation in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The node will install the specified version in our system when we use the <code><b>package.json</b></code> file as installation files and specify a 
version in <code><b>package json</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>27. How can you verify tooltip text using Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can verify tooltip text using Protractor, we need to fetch the value of <code><b>‘title’</b></code> attribute. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>28. Does Protractor handle Windows based popup?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
No. Windows based popup cannot be handled using Protractor as it is a web automation testing tool that supports only web application testing.
<!-- Answer ::: END -->
</div>
</div>

<div><b>29. How to find all the links on the webpage?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Anchor tag <code><b>‘a’</b></code> is used to form each link, and all the links have a href attribute with URL value. We can locate elements of 
tagName <code><b>‘a’</b></code> to find all the links on the webpage. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>30. What is WebElement in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Protractor converts ElementFinder into WebElement when we perform any action on ElementFinder. 
This method is called by every method before it operates on the webpage object. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>31. What is a Time-Out test in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Time-out test is the time allotted for performing unit testing. Protractor discontinues further testing if the unit test fails to meet the 
specified time limit and marks it as a failure. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>32. How to focus on an input element On- Page using Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
You can click the mouse on the element to focus on it.
<!-- Answer ::: END -->
</div>
</div>

<div><b>33. How to extract the CSS attribute of an element in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To extract the CSS attribute of an element in Protractor, <code><b>getCSSValue</b></code> can be used.
<!-- Answer ::: END -->
</div>
</div>

<div><b>34. How to switch between frames using Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
To have your webdriver script switch between different frames, you can use the following code:
<pre><code class="language-html hljs xml">browser.switchTo().frame(element(by.xpath(“//iframe[@src=’demo.html’]”)).getWebElement())</code></pre>
<!-- Answer ::: END -->
</div>
</div>


<div><b>35. State the difference between "GET" and "NAVIGATE" to open a webpage in Protractor.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>get</b></code> method loads a page or gets the page source or gets text.<br/>
On the other hand, <code><b>navigate</b></code> method allows functions like refresh, back and forward. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>36. Can we set global variables in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It is possible to set global variables using params present in the conf file that can be accessed in the specs using <code><b>browser.params.glob</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>37. What is maxInstances in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
MaxInstances in Protractor is the number of browser instances that can run in parallel for the set of capabilities.
<!-- Answer ::: END -->
</div>
</div>

<div><b>38. How to set the geckodriver path in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
geckoDriver location finds the <code><b>geckodriver.exe</b></code> file. This gets passed to the Selenium jar as the 
<code><b>system property.webdriver.gecko.driver</b></code>. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>39. What is ElementFinder in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
ElementFinder refers to the elements present on the webpage. It can be used to build a chain of locators to find an element.
<!-- Answer ::: END -->
</div>
</div>

<div><b>40. What is an XPath in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
XPath is one of those locators that are supported by Protractor and is a query language for selecting nodes from XML documents. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>41. How can we run the headless browser mode in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
A headless browser mode means running web applications without a graphical user interface. The applications will get executed 
through commands via a command-line interface. In the headless browser mode, the Protractor executes the tests in the background. 
To start a browser in headless mode, we need to specify the <code><b>–headless</b></code> flag for the browser that you want 
in the Protractor config file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>42. Explain about group index in XPath in Protractor.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When we search for an element with the XPath index, we might get more than one element that is under different parents. The group index 
places all the resulting element matches into a list and gives indexes for them. The group index numbers start with 1. This way, there 
won’t be any duplicates in matches.
<!-- Answer ::: END -->
</div>
</div>

<div><b>43. What are the Selenium specific locators in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Here are the Selenium specific locators available in Protractor.
<ul>
<li>By Class Name</li>
<li>By CSS</li>
<li>By Id</li>
<li>By Link Text</li>
<li>By Name</li>
<li>By Partial Link Text</li>
<li>By Tag Name</li>
<li>By XPath</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>44. What is ElementArrayFinder in Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The ElementArrayFinder is used to identify an array of elements by setting up a chain of conditions. It searches for the elements all through 
the branches of DOM that satisfy the set conditions (i.e., all, filter, get). We can perform actions on an array of elements. You can retrieve 
all elements or apply some filters to return specific elements. When you perform an action on the ElementArrayFinder, it will apply to each 
element of the ElementArrayFinder, and the results will be returned as an array of the results.
<!-- Answer ::: END -->
</div>
</div>

<div><b>45. Can we perform drag and drop in Protractor? If yes, write the code for it.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes, we can implement drag and drop in Protractor using actions().<br/><br/>
<b>Syntax looks like,</b>
<pre><code class="language-html hljs xml">browser.actions().dragAndDrop(Element,Target).mouseUp().perform();</code></pre>
<br/><b>Element –</b> The element that you want to drag.<br/>
<b>Target –</b> Where you want to drop the element to.
<!-- Answer ::: END -->
</div>
</div>

<div><b>46. Why Protractor And Not Selenium With Any Other Language Like Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->

It totally depends on the choice of the team and the ease of the implementation for the QA team. There is a no hard and fast rule 
that you should use Protractor when the UI is built with Angular or Angular JS.<br/><br/>
The real benefit for using Protractor narrow down to the two major points that I think should be taken into consideration while 
deciding whether or not to use Protractor.<br/><br/>
Protractor handles the <code><b>$http</b></code> or <code><b>$timeout</b></code> synchronization issues arising out of Angular/Angular JS very well.<br/><br/>
Since Angular/Angular JS code is written in JavaScript/TypeScript, and Protractor supports both these languages, so there is sync between the 
developers and QA when using a single operating language for Frontend as well as the test framework.
<!-- Answer ::: END -->
</div>
</div>

<div><b>47. Difference between Element Finder And Element Array Finder.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Element Finder:</b><br/><br/>
<ul>
<li>The Element Finder simply represents a single element of an ElementArrayFinder (and is more like a convenience object). As a result, anything that 
can be done with an Element Finder can also be done using an ElementArrayFinder.</li>
<li>The Element Finder can be treated as a Web Element for most purposes; in particular, you may perform actions (i.e. click, get Text) on them as you 
would a Web Element. Once an action is performed on an Element Finder, the latest result from the chain can be accessed using the then method. 
Unlike a Web Element, an Element Finder will wait for angular to settle before performing finds or actions.</li>
</ul><br/>
<b>Element Array Finder:</b><br/>
<ul>
<li>ElementArrayFinder is used for operations on an array of elements (as opposed to a single element).</li>
<li>The ElementArrayFinder is used to set up a chain of conditions that identify an array of elements. In particular, you can call all (locator) and 
filter (filterFn) to return a new ElementArrayFinder modified by the conditions, and you can call get(index) to return a single Element Finder at 
position 'index'.</li>
<li>Similar to jquery, ElementArrayFinder will search all branches of the DOM to find the elements that satisfy the conditions (i.e. all, filter, 
get). However, an ElementArrayFinder will not actually retrieve the elements until an action is called, which means it can be set up in helper 
files (i.e. page objects) before the page is available, and reused as the page changes.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>48. Can I Use Protractor For Non Angularjs Apps?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Absolutely Yes. Protractor can be used for testing non Angularjs or non Angular apps.
<!-- Answer ::: END -->
</div>
</div>

<div><b>49. How To Assert Something In Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It depends on the assertion framework you’re using. In general, most of the e2e implementation done is based out of the 
default Jasmine 2.0, which provides the assertion in this format
<pre><code class="language-html hljs xml">expect (something).toEqual (someotherthing)</code></pre>
In case you’re using Mocha with a Chai as the assertion engine, you can use either of the three assertion types provided by Chai as
<ol>
<li><pre><code class="language-html hljs xml">expect(something).to.equal (someotherthing)</code></pre></li>
<li><pre><code class="language-html hljs xml">something.should.equal (someotherthing)</code></pre></li>
<li><pre><code class="language-html hljs xml">assert.equal (something, someotherthing)</code></pre></li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>50. Explain How You Can Set Up Protractor In Your Project?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
It is very simple to set up Protractor in your project. Protractor is a node.js program, so it can be easily installed via any package manager 
that supports node.js installation – both <code><b>npm</b></code> and <code><b>yarn</b></code> are the go-to package managers in most scenarios.<br/><br/>
Our system set up should have <code><b>node.js</b></code> runtime installed. Since <code><b>npm</b></code> comes by default with node.js, so you can use 
it or you can download and use <code><b>yarn</b></code>.<br/><br/>
In case of <code><b>npm</b></code>, installing Protractor is just a matter of running this simple command – for node v.8.0+
<pre><code class="language-html hljs xml">npm install -g protractor</code></pre>
This command installs both Protractor and Web driver-Manager.<br/><br/>
Once Protractor is installed, you can check the version using
<pre><code class="language-html hljs xml">protractor -version</code></pre>
Now, once Protractor is installed, we are not be ready for running the tests yet. we need the Chrome Driver or the Gecko Driver binaries for 
establishing connection with the browser. To achieve this, you’ll need to run
<pre><code class="language-html hljs xml">Web driver-manager update</code></pre>
This will install the web driver-server along with the browser dependencies.<br/><br/>
Once this is done, we will have Protractor set-up in your project. Now the next step is to write the test cases using the <code><b>spec.js</b></code> file 
and set up the Protractor configuration using the <code><b>conf.js</b></code> file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>52.  In Protractor, I Do Not Want To Start The Selenium Server Every Time. How Can I Overcome This?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In order to not have to do this, you need to set the <code><b>direct Connect flag</b></code> to <code><b>true</b></code> in your conf.js file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>53. What Frameworks Can Be Used With Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Protractor can be used with a variety of frameworks. By default, Protractor comes bundled with <code><b>Jasmine 2.0</b></code>. You can also pair Protractor to 
use <code><b>mocha</b></code>, <code><b>Cucumber JS</b></code>, <code><b>Serenity</b></code>.
If you want to use it with any other custom frameworks, then you can do that also.
<!-- Answer ::: END -->
</div>
</div>

<div><b>54. How Can You Do Reporting In Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Protractor doesn’t come bundled with any reporting tool. However based on the framework that you’re using, you can use a lot of reporters. 
For eg, you can use <code><b>Allure with Jasmine 2.0 with Protractor</b></code>, <code><b>Mochawesome</b></code> when using with <code><b>Mocha</b></code> 
and <code><b>Cucumber</b></code> specific reporters when working with <code><b>Cucumber</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>55. Can I Use Protractor With Typescript?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Absolutely Yes. You can use TypeScript with Protractor. There is a whole section in Protractor docs dedicated to configuration and examples on Protractor Website.  
We can also use this example to get configured.
<!-- Answer ::: END -->
</div>
</div>

<div><b>56. What Is The Default Time For A Protractor With Jasmine Spec To Fail And Can I Change It?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
By default, any spec in Protractor will fail after a period of 30 seconds because that is the default time out for a Jasmine spec to fail.<br/><br/>
Yes, this timeout period can be configured to be increased or decreased.  In order to change the default timeout period for all specs, in 
<code><b>conf.js</b></code> file, we need to add
<pre><code class="language-html hljs xml">JasmineNodeOpts: {defaultTimeoutInterval: timeout in millis}</code><pre>

Note: In case you’re using with Mocha, this can be set using mocha. Opts file.
<!-- Answer ::: END -->
</div>
</div>

<div><b>57. How To Run Multiple Specs In Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
In order to run multiple spec files in Protractor, you just need to mention them in the spec flag in an array.<br/><br/>
For eg, let’s say I have two different spec files <code><b>test1_spec.js</b></code> and <code><b>test2_spec.js</b></code>, so I can do this
<pre><code class="language-html hljs xml">Specs: ['. /test/test1_spec.js','./test/test2_spec.js']</code><pre>
This will make Protractor run these multiple spec files.
<!-- Answer ::: END -->
</div>
</div>

<div><b>58. How can we select A Checkbox Using Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We need to follow few steps to make sure that element is selected or not, Normally when we have this kind of scenarios what we do is, we will use 
<code><b>click()</b></code> method to select the check box. After this we might move on to next step of scenario.<br/><br/>
Sometimes not selecting will help you; you got to make sure that the checkbox is selected. To verify it we need to use the is <code><b>Selected()</b></code> 
method and get check whether it is really selected.
<!-- Answer ::: END -->
</div>
</div>

<div><b>59. What Is The Good Reporter In Market For Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
As of now, we can say <code><b>chercher-tech-jasmine-reporter</b></code> is more suitable report for the protractor and Jasmine combination.
<!-- Answer ::: END -->
</div>
</div>

<div><b>60. How Do You Handle A Text Area Element?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Textarea doesn't have much difference from text bar, so we can handle it like normal text box/text bar element.
<!-- Answer ::: END -->
</div>
</div>

<div><b>61. How Can We Find All The Links On A Web Page?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
All the links are formed using anchor tag <code><b>'a'</b></code> and all links will have href attribute with URL value. So by locating 
elements of tag Name <code><b>'a'</b></code> we can find all the links on a webpage.
<!-- Answer ::: END -->
</div>
</div>

<div><b>62. How To Verify Tool Tip Text Using Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Web elements have an attribute of type <code><b>'title'</b></code>. By fetching the value of <code><b>'title'</b></code> attribute we can verify 
the tooltip text in protractor.
<!-- Answer ::: END -->
</div>
</div>

<div><b>63. Write A Code To Wait For An Alert To Appear?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Waiting for an alert to appear on a page can be performed using explicit wait in protractor.
<pre><code class="language-html hljs xml">Browser. Wait (ExpectedConditions.alertIsPresent (), 30000)</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>64. Write A Code To Wait For A Particular Element To Be Visible On A Page Using Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Visibility means that the element is not only displayed but also has a height and width that is greater than 0. 
You can use visibility of function to check the visibility of the element
<pre><code class="language-html hljs xml">Let EC = Expected Conditions;
Let condition = EC.visibilityOf (element (by.id ("hidden")))
Browser. Wait (condition, 30000)</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div><b>65. Return Javascript Execution Result?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We need to return from your javascript snippet to return a value, so: 
<code><b>browser.executeScript ("document. title");</b></code> will return <code><b>null</b></code>, but: 
<code><b>browser.executeScript ("return document. title");</b></code> will return <code><b>the title of the document</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>66. What Is The Order Of Fastest Browser Implementation For Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>HTML Unit Driver</b></code> is the fastest browser implementation as it does not involves interaction with a browser; this is followed by 
<code><b>Firefox driver</b></code> and then <code><b>IE driver</b></code> which is slower than <code><b>FireFox driver</b></code> and runs only on Windows.
<!-- Answer ::: END -->
</div>
</div>

<div><b>67. What Are The Prerequisites To Run Protractor?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<code><b>JDK</b></code>, <code><b>Web Driver (selenium standalone jar file)</b></code>, <code><b>browser</b></code>, <code><b>application to be tested</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div><b>68. In Protractor, What Are The Web Pages Elements In Web Applications?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Link Button Image, Image Link, Image Button Text box Edit Box Text Area Check box Radio Button Drop down box List box Combo box Web table /HTML table Frame.
<!-- Answer ::: END -->
</div>
</div>

<div><b>69. In Protractor, What Is The Difference Between Browsers.Close() And Browser.Quit() Command?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Close ():</b><br/><br/> Protractor <code><b>close ()</b></code> method closes the web browser window that the user is currently working on or we 
can also say the window that is being currently accessed by the Web Driver. The command neither requires any parameter nor does is return any value.<br/><br/>
<b>Quit ():</b> Unlike <code><b>close ()</b></code> method, <code><b>quit()</b></code> method closes down all the windows that the program has opened. 
Same as close () method, the command neither requires any parameter nor does is return any value.
<!-- Answer ::: END -->
</div>
</div>

<div><b>70. Test Case Failed Saying "element Not Visible", But When Analyzed Manually Element Is Visible? How To Handle It?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
There are couples of things which may cause this issue.<br/><br/>
Element may not be visible in automation due to the speed of selenium.<br/><br/>
If you closed a hidden division pop up, and tried to perform action, then there is a chance that hidden division popup' animation went 
over which could cause this issue.<br/><br/>
There is could be an another element which has same XPath or locator in some other page.<br/><br/>
<b>Example:</b> Consider you have an element which has XPath as <code><b>//button [@id='abc']</b></code> on page X, by clicking some tab on page 
navigates the user to MY page, Now there is an element on Y page which have XPath same as <code><b>//button [@id='abc']</b></code>. But when you 
launch your application, application may be directly landed on page Y. So with this scenario, if you try to perform on element on Y page it could 
throw an Error.
<!-- Answer ::: END -->
</div>
</div>

<div><b>71. Using Protractor, How To Wait For Element To Be Available In Angular Applications?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
The application may load some elements late and your script needs to stop for the element to be available for next action.<br/><br/>
In below protractor code, the script is going to wait maximum 30 seconds for the element to be available. Feel free to change the maximum number per 
your application needs.
<pre><code class="language-html hljs xml">browser.wait (ExpectedConditions.presenceOf (element (by.id ("element-id"))), 30000)</code></pre>
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