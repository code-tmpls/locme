<div><b>1. What Are Protractor, Jasmine, And Mocha? How Can We Use Them?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Protractor –</b> It is the node.js implementation of webdriver.io, which is in turn the .js implementation of Selenium. So in short, it is in 
fact, the Selenium implementation in .js optimised for Angular or Angular JS applications. It is the overall framework that provides with the baseline 
methods and functions to interact with the HTML/DOM elements on a web page.<br/><br/>
<b>Jasmine –</b> It is a test framework, like Junit (Java) and Unit Test (Python). It comes bundled with a lot of assertions and it is the 
default framework when working with Protractor. Jasmine supports BDD- styled tests using the describe- it syntax.<br/><br/>
<b>Mocha –</b> Mocha is a test runner. Many people confuse it with Jasmine as a test framework. It is not a framework. Although it gives we a lot 
of features like a Test frameworks like hooks, the describe-it syntax, but it can not add assertions and other key unit testing components. You will 
always need it to pair with something like chai or chai-as-promised.
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. Difference between acceptance test and functional test?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Functional testing:</b><br/><br/> This is a <i>verification activity</i>; did we build a correctly working product? Does the software meet 
the business requirements? A functional test verifies that the product actually works as we (the developer) think it does.<br/><br/></li>
<li><b>Acceptance testing:</b><br/><br/> This is a <i>validation activity</i>; did we build the right thing? Is this what the customer really needs? 
Acceptance tests verify the product actually solves the problem it was made to solve. This can best be done by the user (customer), for instance 
performing his/her tasks that the software assists with.
</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What is Mocking?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Mocking</b> is primarily used in unit testing. An object under test may have dependencies on other (complex) objects. To isolate the behavior of 
the object we want to replace the other objects by mocks that simulate the behavior of the real objects. This is useful if the real objects are 
impractical to incorporate into the unit test.<br/><br/>
In short, <i>Mocking</i> is creating objects that simulate the behavior of real objects.
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is the difference between unit tests and functional tests?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><b>Unit Test -</b> testing an individual unit, such as a method (function) in a class, with all dependencies mocked up.</li>
<li><b>Functional Test -</b> AKA Integration Test, testing a slice of functionality in a system. This will test many methods and may interact with 
dependencies like Databases or Web Services.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. How would we unit test - private methods?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If we want to unit test a private method, something may be wrong. Unit tests are (generally speaking) meant to test the interface of a class, meaning 
its public (and protected) methods. You can of course "hack" a solution to this (even if just by making the methods public), but we may also want 
to consider:<br/><br/>
<ol>
<li>If the method we'd like to test is really worth testing, it may be worth to move it into its own class.</li>
<li>Add more tests to the public methods that call the private method, testing the private method's functionality. (As the commentators indicated, 
we should only do this if these private methods's functionality is really a part in with the public interface. If they actually perform functions 
that are hidden from the user (i.e. the unit test), this is probably bad).</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. What is a reasonable code coverage % for unit tests (and why)?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Code coverage is great, but functionality coverage is even better. I don't believe in covering every single line I write. But I do believe in writing 
100% test coverage of all the functionality I want to provide (even for the extra cool features I came with myself and which were not discussed during 
the meetings).<br/><br/>
I don't care if I would have code which is not covered in tests, but I would care if I would refactor my code and end up having a different behaviour. 
Therefore, 100% functionality coverage is my only target.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What are best practices for Unit Testing methods that use cache heavily?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
If you want true Unit Tests, then you have to mock the cache: write a mock object that implements the same interface as the cache, but instead of 
being a cache, it keeps track of the calls it receives, and always returns what the real cache should be returning according to the test case.<br/><br/>
Of course the cache itself also needs unit testing then, for which you have to mock anything it depends on, and so on.<br/><br/>
What you describe, using the real cache object but initializing it to a known state and cleaning up after the test, is more like an integration test, 
because you are testing several units in concert.
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What is Unit test, Integration Test, Smoke test, Regression Test and what are the differences between them?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Unit test:</b> Specify and test one point of the contract of single method of a class. This should have a very narrow and well defined scope. Complex 
dependencies and interactions to the outside world are stubbed or mocked.<br/><br/>

<b>Integration test:</b> Test the correct inter-operation of multiple subsystems. There is whole spectrum there, from testing integration between two classes, 
to testing integration with the production environment.<br/><br/>

<b>Smoke test (sanity check):</b> A simple integration test where we just check that when the system under test is invoked it returns normally and does not 
blow up.<br/><br/>

Smoke testing is both an analogy with electronics, where the first test occurs when powering up a circuit (if it smokes, it's bad!)...
... and, apparently, with plumbing, where a system of pipes is literally filled by smoke and then checked visually. If anything smokes, the 
system is leaky.<br/><br/>
<b>Regression test:</b> A test that was written when a bug was fixed. It ensures that this specific bug will not occur again. The full name is 
"non-regression test". It can also be a test made prior to changing an application to make sure the application provides the same outcome.<br/><br/>
In addition, we also have:<br/><br/>
<b>Acceptance test:</b> Test that a feature or use case is correctly implemented. It is similar to an integration test, but with a focus on the use case to 
provide rather than on the components involved.<br/><br/>

<b>System test:</b> Tests a system as a black box. Dependencies on other systems are often mocked or stubbed during the test (otherwise it would be more of an 
integration test).<br/><br/>

<b>Pre-flight check:</b> Tests that are repeated in a production-like environment, to alleviate the 'builds on my machine' syndrome. Often this is realized 
by doing an acceptance or smoke test in a production like environment.<br/><br/>
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What's the difference between faking, mocking, and stubbing?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Fake</b> objects actually have working implementations, but usually take some shortcut which makes them not suitable for production.<br/><br/>
<b>Stubs</b> provide canned answers to calls made during the test, usually not responding at all to anything outside what's programmed in for the test. 
Stubs may also record information about calls, such as an email gateway stub that remembers the messages it 'sent', or maybe only how many messages it 
'sent'.<br/><br/>
<b>Mocks</b> are what we are talking about here: objects pre-programmed with expectations which form a specification of the calls they are expected to 
receive.
<!-- Answer ::: END -->
</div>
</div>

<div><b>10. How do I test a private function or a class that has private methods, fields or inner classes in Java?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. Is Unit Testing worth the effort?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Yes. It heps us:
<ol>
<li>Unit Tests allows you to make big changes to code quickly. You know it works now because you've run the tests, when you make the changes you need 
to make, you need to get the tests working again. This saves hours.</li>
<li>TDD helps you to realise when to stop coding. Your tests give you confidence that you've done enough for now and can stop tweaking and move on to 
the next thing.</li>
<li>The tests and the code work together to achieve better code. Your code could be bad / buggy. Your TEST could be bad / buggy. In TDD you are banking
 on the chances of both being bad / buggy being low. Often it's the test that needs fixing but that's still a good outcome.</li>
<li>TDD helps with coding constipation. When faced with a large and daunting piece of work ahead writing the tests will get you moving quickly.</li>
<li>Unit Tests help you really understand the design of the code you are working on. Instead of writing code to do something, you are starting by 
outlining all the conditions you are subjecting the code to and what outputs you'd expect from that.</li>
<li>Unit Tests give you instant visual feedback, we all like the feeling of all those green lights when we've done. It's very satisfying. It's also much 
easier to pick up where you left off after an interruption because you can see where you got to - that next red light that needs fixing.</li>
<li>Contrary to popular belief unit testing does not mean writing twice as much code, or coding slower. It's faster and more robust than coding without 
tests once you've got the hang of it. Test code itself is usually relatively trivial and doesn't add a big overhead to what you're doing. This is one 
you'll only believe when you're doing it :)</li>
<li>I think it: "Imperfect tests, run frequently, are much better than perfect tests that are never written at all". I interpret this as giving me 
permission to write tests where I think they'll be most useful even if the rest of my code coverage is woefully incomplete.</li>
<li>Good unit tests can help document and define what something is supposed to do.</li>
<li>Unit tests help with code re-use. Migrate both your code and your tests to your new project. Tweak the code till the tests run again.</li>
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