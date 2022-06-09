
<div class="appQuestion"><b>484. What is a Microservice?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Microservice is a small and autonomous piece of code that does one thing very well. It is focused on doing well one specific task in a big system.<br/><br/>
It is also an autonomous entity that can be designed, developed and deployed independently.<br/><br/>
Generally, it is implemented as a REST service on HTTP protocol, with technology-agnostic APIs.<br/><br/>
Ideally, it does not share database with any other service.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>485. What are the benefits of Microservices architecture?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Microservices provide many benefits. Some of the key benefits are :
<ol>
<li><b>Scaling :</b> Since there are multiple Microservices instead of one monolith, it is easier to scale up the service that is being used more. 
Eg. Let say, you have a Product Lookup service and Product Buy service. The frequency of Product Lookup is much higher than Product Buy service. In this
case, you can just scale up the Product Lookup service to run on powerful hardware with multiple servers. Meanwhile, Product Buy service can remain on less
powerful hardware.</li>
<li><b>Resilience :</b> In Microservice architecture, if your one service goes down, it may not affect the rest of the system.
The other parts can keep functioning, business as usual (BAU). Eg. Let say, you have Product Recommendation
service and Product Buy service. If Product Recommendation service goes down, the Product Buy service can still keep running.</li>
<li><b>Technology Mix :</b> With so many changes in technology everyday, you can keep using the latest technology for your
new Microservices. You can adopt new technologies with less risk compared to Monolithic architecture. This is one of the best benefits of Microservices 
architecture.</li>
<li><b>Reuse :</b> Microservices help you in reusing the lessons learnt from one service to another.</li>
<li><b>Easy Deployment :</b> Microservices architecture, if done correctly, helps in making the deployment process smooth.
If anything goes wrong, it can be rolled back easily and quickly in Microservices.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>486. What is the role of architect in Microservices architecture?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Architects, in Microservices architecture, play the role of Town planners. They decide in broad strokes about the layout of the
overall software system.<br/><br/>
They help in deciding the zoning of the components. They make sure components are mutually cohesive but not tightly coupled. They
need not worry about what is inside each zone.<br/><br/>
Since they have to remain up to date with the new developments and problems, they have to code with developers to learn the challenges
faced in day-to-day life.<br/><br/>
They can make recommendations for certain tools and technologies, but the team developing a micro service is ultimately empowered to
create and design the service. Remember, a micro service implementation can change with time.<br/><br/>
They have to provide technical governance so that the teams in their technical development follow principles of Microservice.
At times they work as custodians of overall Microservices architecture.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>487. What is the advantage of Microservices architecture over Service Oriented Architecture (SOA)?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Service Oriented Architecture (SOA) is an approach to develop software by creating multiple services. It creates small parts of
services and promotes reusability of software. But SOA development can be slow due to use of things like communication
protocols SOAP, middleware and lack of principles.<br/><br/>
On the other hand, Microservices are agnostic to most of these things. You can use any technology stack, any
hardware/middleware, any protocol etc. as long as you follow the principles of Microservices.<br/><br/>
Microservices architecture also provides more flexibility, stability and speed of development over SOA architecture.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>488. Is it a good idea to provide a Tailored Service Template for Microservices development in an organization?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If your organization is using similar set of technologies, then it is a good idea to provide a Service Template that can be tailored by
development teams. It can make development faster. Also it can help in promoting adoption of various good practices that are
already built into template.<br/><br/>
But if your organization uses wide variety of technologies, then it may not be wise to produce and maintain a template for each
service. Instead of that, it is better to introduce tools that help in maintaining same set of practices related to Microservices among
all such technologies.<br/><br/>
There are many organizations that provide tailored templates for Microservices. Eg. Dropwizard, Karyon etc. You can use these
templates to make faster development of services in your organization.<br/><br/>
Also remember that template code should not promote shared code.<br/><br/>
This can lead to tight coupling between Microservices.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>489. What are the disadvantages of using Shared libraries approach to decompose a monolith application?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
You can create shared libraries to increase reuse and sharing of features among teams. But there are some downsides to it.
Since shared libraries are implemented in same language, it constrains you from using multiple types of technologies.
It does not help you with scaling the parts of system that need better performance.<br/><br/>
Deployment of shared libraries is same as deployment of Monolith application, so it comes with same deployment issues.
Shared libraries introduce shared code that can increase coupling in software.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>490. What are the characteristics of a Good Microservice?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Good Microservices have these characteristics :
<ol>
<li><b>Loose coupling :</b> A Microservice knows little about any other service. It is as much independent as possible. The
change made in one Microservice does not require changes in other Microservices.</li>
<li><b>Highly cohesive :</b> Microservices are highly cohesive so that each one of them can provide one set of behavior
independently.</li>
<li><b>Bounded Context :</b> A Microservice serves a bounded context in a domain and communicates with rest of the
domain by using an interface for that Bounded context.</li>
<li><b>Business Capability :</b> Microservices individually add business capability that is part of big picture in organization.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>491. What is Bounded Context?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A bounded context is like a specific responsibility that is developed within a boundary. In a domain there can be multiple bounded
contexts that are internally implemented.<br/><br/> 
Eg. A hospital system can have bounded contexts like- Emergency Ward handling, Regular vaccination, Out patient treatment etc. Within each bounded 
context, each sub-system can be independently designed and implemented.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>492. What are the points to remember during integration of Microservices?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the important points to remember during integration of Microservices are :
<ol>
<li><b>Technology Agnostic APIs :</b> Developing Microservices in a technology agnostic way helps in integration of multiple
Microservices. With time, the technology implementation can change but the interface between Microservices can remain same.
Breaking Changes: Every change in Microservice should not become a breaking change for client. It is better to minimize the
impact of a change on an existing client. So that existing clients’ do not have to keep changing their code to adapt to changes in a Microservice.</li>
<li><b>Implementation Hiding :</b> Each Microservice should hide its internal implementation details from another one. This helps in minimizing
the coupling between Microservices that are integrated for a common solution.</li>
<li><b>Simple to use :</b> A Microservice should be simple to use for a consumer, so that the integration points are simpler. It should allow
clients to choose their own technology stack.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>493. Is it a good idea for Microservices to share a common database?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Sharing a common database between multiple Microservices increases coupling between them. One service can start accessing
data tables of another service. This can defeat the purpose of bounded context. So it is not a good idea to share a common
database between Microservices.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>494. What is the preferred type of communication between Microservices? Synchronous or Asynchronous?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Synchronous communication is a blocking call in which client blocks itself from doing anything else, till the response comes back.<br/><br/>
In Asynchronous communication, client can move ahead with its work after making an asynchronous call. Therefore client is not blocked.<br/><br/>
In synchronous communication, a Microservice can provide instant response about success or failure. In real-time systems, synchronous
service is very useful. In Asynchronous communication, a service has to react based on the response received in future.<br/><br/>
Synchronous systems are also known as request/response based.<br/><br/>
Asynchronous systems are event-based.<br/><br/>
Synchronous Microservices are not loosely coupled.<br/><br/>
Depending on the need and critical nature of business domain, Microservices can choose synchronous or asynchronous form of communication.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>495. What is the difference between Orchestration and Choreography in Microservices architecture?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Orchestration, we rely on a central system to control and call various Microservices to complete a task. In Choreography, each
Microservice works like a State Machine and reacts based on the input from other parts.<br/><br/>
Orchestration is a tightly coupled approach for integrating Microservices. But Choreography introduces loose coupling. Also,
Choreography based systems are more flexible and easy to change than Orchestration based systems.<br/><br/>
Orchestration is often done by synchronous calls. But choreography is done by asynchronous calls. The synchronous calls are much
simpler compared to asynchronous communication.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>496. What are the issues in using REST over HTTP for Microservices?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In REST over HTTP, it is difficult to generate a client stub.<br/><br/>
Some Web-Servers also do not support all the HTTP verbs likeGET, PUT, POST, DELETE etc.<br/><br/>
Due to JSON or plain text in response, performance of REST over HTTP is better than SOAP. But it is not as good as plain binary communication.<br/><br/>
There is an overhead of HTTP in each request for communication.<br/><br/>
HTTP is not well suited for low-latency communications.<br/><br/>
There is more work in consumption of payload. There may be overhead of serialization, deserialization in HTTP.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>497. Can we create Microservices as State Machines?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, Microservices are independent entities that serve a specific context. For that context, the Microservice can work as a State
Machine. In a State Machine, there are lifecycle events that cause change in the state of the system.<br/><br/>
Eg. In a Library service, there is a book that changes state based on different events like- issue a book, return a book, lose a book, late
return of a book, add a new book to catalog etc. These events and book can form a state machine for Library Microservice.
<!-- Answer ::: END -->
</div>
</div>
