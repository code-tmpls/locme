
<div class="appQuestion"><b></b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>461. What is Docker?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Docker is Open Source software. It provides the automation of Linux application deployment in a software container.<br/><br/>
We can do operating system level virtualization on Linux with Docker.<br/><br/>
Docker can package software in a complete file system that contains software code, runtime environment, system tools, & libraries that
are required to install and run the software on a server.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>462. What is the difference between Docker image and Docker container?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Docker container is simply an instance of Docker image.<br/><br/>
A Docker image is an immutable file, which is a snapshot of container. We create an image with build command.<br/><br/>
When we use run command, an Image will produce a container.<br/><br/>
In programming language, an Image is a Class and a Container is an instance of the class
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>463. How will you remove an image from Docker?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use docker rmi command to delete an image from our local system.<br/><br/>
Exact command is:
<pre><code class="language-html hljs xml">% docker rmi &lt;Image Id&gt;</code></pre>
If we want to find IDs of all the Docker images in our local system, we can user docker images command.
<pre><code class="language-html hljs xml">% docker images</code></pre>
If we want to remove a docker container then we use docker rm command.
<pre><code class="language-html hljs xml">% docker rm &lt;Container Id&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>464. How is a Docker container different from a hypervisor?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Hypervisor environment we first create a Virtual Machine and then install an Operating System on it. After that we deploy the
application. The virtual machine may also be installed on different hardware configurations.<br/><br/>
In a Docker environment, we just deploy the application in Docker.<br/><br/>
There is no OS layer in this environment. We specify libraries, and rest of the kernel is provided by Docker engine.<br/><br/>
In a way, Docker container and hypervisor are complementary to each other.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>465. Can we write compose file in json file instead of yaml?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes. Yaml format is a superset of json format. Therefore any json file is also a valid Yaml file.<br/><br/>
If we use a json file then we have to specify in docker command that we are using a json file as follows:
<pre><code class="language-html hljs xml">% docker-compose -f docker-compose.json up</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>466. Can we run multiple apps on one server with Docker?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, theoretically we can run multiples apps on one Docker server.<br/><br/>
But in practice, it is better to run different components on separate containers.<br/><br/>
With this we get cleaner environment and it can be used for multiple uses.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>467. What are the common use cases of Docker?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the common use cases of Docker are as follows :
<ul>
<li><b>Setting up Development Environment :</b> We can use Docker to set the development environment with the applications on which our code is dependent.</li>
<li><b>Testing Automation Setup :</b> Docker can also help in creating the Testing Automation setup. We can setup
different services and apps with Docker to create the automation testing environment.</li>
<li><b>Production Deployment :</b> Docker also helps in implementing the Production deployment for an
application. We can use it to create the exact environment and process that will be used for doing the production deployment.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>468. What are the main features of Docker-compose?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the main features of Docker-compose are as follows :
<ol>
<li><b>Multiple environments on same Host :</b> We can use it to create multiple environments on the same host server.</li>
<li><b>Preserve Volume Data on Container Creation :</b> Docker compose also preserves the volume data when we create a container.</li>
<li><b>Recreate the changed Containers :</b> We can also use compose to recreate the changed containers.</li>
<li><b>Variables in Compose file :</b> Docker compose also supports variables in compose file. In this way we can create variations of our containers.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>469. What is the most popular use of Docker?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The most popular use of Docker is in build pipeline. With the use of Docker it is much easier to automate the development to deployment
process in build pipeline.<br/><br/>
We use Docker for the complete build flow from development work, test run and deployment to production environment.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>470. What is the role of open source development in the popularity of Docker?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Since Linux was an open source operating system, it opened new opportunities for developers who want to contribute to open source systems.<br/><br/>
One of the very good outcomes of open source software is Docker. It has very powerful features.<br/><br/>
Docker has wide acceptance due to its usability as well as its open source approach of integrating with different systems.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>471. What is the difference between Multi-tasking and Multi-user environment?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In a Multi-tasking environment, same user can submit more than one tasks and operating system will execute them at the same time.<br/><br/>
In a Multi-user environment, more than one user can interact with the operating system at the same time.
<!-- Answer ::: END -->
</div>
</div>
