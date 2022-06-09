
<div><b>1. What is Spring Cloud?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li><code><b>Spring Cloud</b></code> is a microservice framework with a short life cycle, to quickly build applications that perform finite amounts of data processing.</li>
<li>Spring Cloud Stream App Starters are Spring Boot based Spring Integration applications that provide integration with external systems.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>2. What are the issues faced When developing distributed microservices with Spring Boot and How it can be overcome ?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
When developing distributed microservices with Spring Boot we face the following issues :<br/>
<ul>
<li><b>Complexity associated with distributed systems :</b><br/> This overhead includes network issues, Latency overhead, Bandwidth issues, 
security issues.<br/><br/></li>
<li><b>Service Discovery :</b><br/> Service discovery tools manage how processes and services in a cluster can find and talk to one another. It 
involves a directory of services, registering services in that directory, and then being able to lookup and connect to services in that directory.</li>
<li><b>Redundancy :</b><br/> Redundancy issues in distributed systems.<br/><br/></li>
<li><b>Loadbalancing :</b><br/> Load balancing improves the distribution of workloads across multiple computing resources, such as computers, a computer cluster, 
network links, central processing units, or disk drives.<br/><br/></li>
<li><b>Performance issues :</b><br/>Performance issues due to various operational overheads.<br/><br/></li>
<li><b>Deployment complexities :</b> Requirement of Devops skills.<br/><br/></li>
</ul>
Using <code><b>Spring Cloud Framework</b></code> (A microservice framework with a short life cycle) - this issues can be resolved.
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. What are the features of Spring Cloud?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Cloud has the following features:<br/><br/>
<ul>
<li>Versioned and distributed configuration.</li>
<li>Discovery of service registration.</li>
<li>Service to service calls.</li>
<li>Routing.</li>
<li>Circuit breakers and load balancing.</li>
<li>Cluster state and leadership election.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>4. What is the use of Spring Cloud stream?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring cloud stream allows to integrate microservices with message brokers.
<!-- Answer ::: END -->
</div>
</div>

<div><b>5. Explain load balancing? or What is load balancing?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Load balancing is a technique used to improve the distribution of workloads across several computing resources, such as a computer cluster, CPUs, 
network lines, and disk drives.<br/><br/>
We can implement load balancing in the Spring cloud using Netflix Ribbon.
<!-- Answer ::: END -->
</div>
</div>

<div><b>6. How load balancing is implemented in the Spring cloud?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
We can implement load balancing in the Spring cloud using Netflix Ribbon.
<!-- Answer ::: END -->
</div>
</div>

<div><b>7. What is meant by Service Registration (Service Registry) and Discovery?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Service Registration (Service Registry) :</b><br/><br/>
The <code><b>Service Registry</b></code> is simply an application that keep the track of services inside the microservice architecture, and It should be highly available 
and up to date. Normally in microservices, any service could go up and down, hence all the details regarding the status of those microservices 
should be communicated with the registry.<br/><br/>
There are two type of registrations in microservices :<br/><br/>
<ol>
<li><b>Self-registration –</b> This is service interacts with the registry by itself when going up and down.<br/><br/></li>
<li><b>Third-party registration –</b> This is the most used way in the service registry, and here there is a process or a service that manages 
registration. Here is the place where <code><b>Netflix Eureka</b></code> comes into the stage.<br/><br/></li>
</ol>
<br/>
<b>Service Discovery :</b><br/><br/>
When a client wants to access a service, <code><b>Service Discovery</b></code> must find out where the service is located.<br/><br/>
There are two types of service discovery :<br/><br/>
<ol>
<li><b>Client-side service discovery –</b> Clients query a discovery service before performing the actual requests.<br/><br/></li>
<li><b>Server-side service discovery –</b> This is the most used discovery pattern in microservices and API gateway. It is used to identify from service 
registry information and route the requests to the correct endpoint that coming into the API gateway.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div><b>8. What is Hystrix?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Hystrix is a fault-tolerance and latency library designed for isolating points of access to remote systems, third-party libraries, services, 
stopping cascading failures, and enabling resilience in complex distributed systems where failure is common and cannot be avoided. 
<!-- Answer ::: END -->
</div>
</div>

<div><b>9. What is Eureka in Spring Cloud?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Eureka Server is an application which holds the information about all client-service applications.</li>
<li>Every Micro service will register into the Eureka server and Eureka server knows all the client applications running on each port and IP address.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>
<div><b>10. What is the purpose of the Hystrix circuit breaker?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Netflix's Hystrix library provides an implementation of the circuit breaker pattern. If you apply a circuit breaker to a method, Hystrix watches 
for failing calls to that method, and, if failures build up to a threshold, Hystrix opens the circuit so that subsequent calls automatically fail.<br/><br/>
The purpose of the Hystrix circuit breaker is to provide the first-page method or any other methods that the method in the first page might be calling 
and is causing the exception to recover. The chances of exception to recovery may increase because of less load. You can further see Master Microservices 
with Spring Boot and Spring Cloud course to learn more about Fault tolerance.
<!-- Answer ::: END -->
</div>
</div>

<div><b>11. What is the use of the Spring cloud bus?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Cloud Bus links the nodes of a distributed system with a lightweight message broker.A key idea is that the bus is like a distributed actuator for 
a Spring Boot application that is scaled out.It can also be used as a communication channel between apps.<br/><br/>
Spring Cloud is a framework for building robust cloud applications.Applications that run with microservices architecture aim to simplify development, 
deployment, and maintenance. The decomposed nature of the application allows developers to focus on one problem at a time.
<!-- Answer ::: END -->
</div>
</div>

<div><b>12. How does Spring Cloud Gateway Limit Request Payload Size?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
Spring Cloud Gateway is built on <code><b>Spring Boot 2.x</b></code>, <code><b>Spring WebFlux</b></code> and <code><b>Project Reactor</b></code>. 
It is the permissible size limit of the request defined in bytes. <code><b>... filter</b></code> filter to modify the request body before it is 
sent downstream by the gateway.
<!-- Answer ::: END -->
</div>
</div>

<div><b>13. Name the services that provide service registration and discovery.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Eureka</li>
<li>Zookeeper</li>
</ul>
<b>Benefits of Eureka and Zookeeper :</b>
<ul>
<li>Eureka guarantees high availability and usability.</li>
<li>Zookeeper guarantees consistency and partition fault tolerance.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>14. Give the benefits of Eureka and Zookeeper.</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Benefits of Eureka and Zookeeper :</b>
<ul>
<li>Eureka guarantees high availability and usability.</li>
<li>Zookeeper guarantees consistency and partition fault tolerance.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>15. What is the major difference between Spring Cloud and Spring Boot?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<ul>
<li>Spring Boot is used to develop these microservices.</li>
<li>Spring Cloud is a microservice management and coordination framework used to integrate and manage individual microservices.</li>

</ul>
<!-- Answer ::: END -->
</div>
</div>

<div><b>16. What are some common Spring cloud annotations?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<b>Few Spring Cloud Annotations :</b><br/>
<ol>
<li><b>@EnableConfigServer -</b> It makes your Spring Boot application act as a Configuration Server.</li>
<li><b>@EnableEurekaServer -</b> It makes your Spring Boot application act as a Eureka Server.</li>
<li><b>@EnableDiscoveryClient -</b>It is used to discover service instances from the Eureka Server.</li>
<li><b>@EnableCircuitBreaker -</b>It enables a CircuitBreaker implementation. It makes the class be able to redirect the traffic in case of any failure.</li>
<li><b>@HystricCommand -</b> This is the Annotation used as a part of <code><b>@EnableCircuitBreaker</b></code> Implementation. <code><b>@HystricCommand</b></code> 
contains a parameter <code><b>fallbackMethod</b></code> which is the name of the method to which the request will be redirected.</li>
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
