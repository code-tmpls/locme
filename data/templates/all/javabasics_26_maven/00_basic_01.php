
<div class="appQuestion"><b>269. What is Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven is a software project management tool. It is open source software from Apache software foundation.<br/><br/> 
It is used for building, reporting and documenting a Software project. It is mainly based on POM (Project Object Model).
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>270. What are the main features of Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the main features of Maven are :
<ol>
<li><b>Simple :</b> Maven provides simple project setup that is based on best practices.</li>
<li><b>Fast :</b> You can get a new project or module started in a few
seconds in Maven.
<li><b>Easy to learn :</b> Maven usage and commands are easy to learn across all projects. Therefore ramp up time for new
developers coming onto a project is very less.</li>
<li><b>Dependency management :</b> Maven provides superior dependency management including automatic updates and transitive dependencies.</li>
<li><b>Multiple Projects :</b> You can easily work with multiple projects at the same time by using Maven.</li>
<li><b>Large Library :</b> Maven has a large and growing repository of libraries and metadata to use out of the box.</li>
<li><b>Extensible :</b> Maven supports the ability to easily write plugins in Java or scripting languages for extending its core functionality.</li>
<li><b>Instant :</b> Maven is online and it provides instant access to new features with very less configuration.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>271. What areas of a Project can you manage by using Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven can help us manage following areas of a project :
<ol>
<li>Build</li>
<li>Testing</li>
<li>Release</li>
<li>Reporting</li>
<li>Software Change Management (SCM)</li>
<li>Documentation</li>
<li>Distribution</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>272. What are the main advantages of Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven has a long list of advantages for Software development.<br/><br/> 
Some of the main advantages are :
<ol>
<li><b>Common Project Structure :</b> By using Maven, every developer has a common project structure that helps in
understanding the code as well as developing new features in a new project.</li>
<li><b>Modular Design :</b> Maven promotes modular design that divides a complex project into multiple modules that are
easier to manage. By using Maven, it is easier to manage multiple modules for build, test, release etc.</li>
<li><b>Centralized Dependency Management :</b> With Maven, each developer does not have to include the jars separately.</li>
in each project or module. Maven provides a centralized dependency management that can help improve efficiency of software development.
<li><b>Fewer Decisions :</b> With Maven a developer has to make fewer decisions about things unrelated to software.</li>
development work. The project structure comes ready with Maven, dependency management is a uniform approach
and build/release are handled by Maven. So a developer can focus on core work of developing software.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>273. Why do we say "Maven uses convention over configuration"?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Convention over configuration is a Software Design Paradigm that decreases the number of decisions made by a software developer,
without losing flexibility.<br/><br/> 
In Maven, there are many conventions for setting up the project, building the artifacts, running unit tests and releasing the code.
These conventions lead to common process for Software development.<br/><br/> 
In case of other tools, there are a lot of configuration options are present. But most of the time, a developer uses same set of
configuration options. So it is better to make these as a default options. Maven uses default options from best practices and
provides right conventions for Software development.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>274. What are the responsibilities of a Build tool like Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Build tool like Maven helps us with following tasks :
<ol>
<li><b>Source Code :</b> A Build tool can generate source code based on templates.</li>
<li><b>Documentation :</b> We can get documentation files from source code by using a build tool. Example. Javadoc</li>
<li><b>Compilation :</b> Primary responsibility of a Build tool is to compile source code into executable code.</li>
<li><b>Packaging :</b> A Build tool packages compiled code into a deployable file like- jar, zip war etc.</li>
<li><b>Deployment :</b> We can deploy the packaged code on server by using a Build tool.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>275. What are the differences between Ant and Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Key differences between Ant and Maven are :
<ol>
<li>Ant is a Java library and command line toolbox for build process. Maven is a framework for many aspects of
software development like- project setup, compile, build, documentation etc.</li>
<li>Ant does not have any conventions for project structure or build processes. Maven has conventions for setting up
project structure as well as for build processes.</li>
<li>Ant is based on procedural programming. We have to write code for compilation build, copy etc. Maven is based on
declarative programming. We have to just configure it for our project setup and programming.</li>
<li>Ant does not impose any lifecycle. We need to create the sequence of tasks manually. Maven has a lifecycle for
software build processes. There are well-defined phases that we can use in Maven.</li>
<li>Ant scripts are not reusable in multiple projects. Maven has plugins that are reusable across multiple projects.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>276. What is MOJO in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
MOJO stands for Maven plain Old Java Object.<br/><br/> 
Every MOJO is an executable goal in Maven. It is like an annotated Java class. It specifies metadata about a goal like- goal name, phase
of lifecycle for goal and parameters required by goal.<br/><br/> 
A Maven plugin can contain multiple MOJOs.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>277. What is a Repository in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A repository is a location on file system where build artifacts, jars, dependencies and pom.xml files are stored.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>278. What are the different types of repositories in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are mainly two types of repositories in Maven :
<ol>
<li><b>Local Repository :</b> This is your local folder in which a copy of your installation and dependencies is stored.</li>
<li><b>Remote Repository :</b> This is a remote folder in which jars and other build artifacts are stored. These can be located
on servers within your organization.</li>
<li><b>Central Remote Repository :</b> This is the central Maven repository that is located on <code><b>repo.maven.apache.org</b></code> or
<code><b>uk.maven.org</b></code> or any other third party location. This where we can find artifacts from different providers that are
available for download and use. Like- Hibernate, Spring libraries etc.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>279. What is a local repository in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven local repository is a folder in your local files system in which your project’s installation, dependency jars, plugins etc. are stored.
Default location of Maven local repository is <code><b>.m2</b></code> folder. It can be located under following location on file system :<br/><br/> 
<b>Windows –</b> C:\{ username}\.m2<br/><br/>
<b>Unix/Linux/Mac –</b> ~/.m2
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>280. What is a central repository in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven central repository is a truly remote repository that is located on <code><b>repo.maven.apache.org</b></code> or <code><b>uk.maven.org</b></code> or 
any other third party location.<br/><br/> 
This contains the jars and artifacts provided by various software providers.<br/><br/> 
Central repository contains a large amount of data. Therefore it is not allowed to scrape the whole site. But you can use the relevant
jars that you want for download and use in your Maven project.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>281. What is a Remote repository in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Remote repository is a remote location on the internet where the jars and dependencies from different vendors are stored.<br/><br/> 
These files can be accessed by protocols like - <code><b>file://</b></code> or <code><b>http://</b></code> etc.<br/><br/> 
These can be truly remote repositories set up by third party vendors or locations inside your organization that contains the relevant jars
required by your project.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>282. Why we should not store jars in CVS or any other version control system instead of Maven repository?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven recommends storing jars in local repository instead of CVS or any other version control system. There are following advantages
of storing it in Maven repo vs. CVS :<br/><br/> 
<ul>
<li><b>Less Storage :</b> A repository is very large, but it takes less space because each JAR is stored only in one place. E.g. If we have 10
modules dependent on Spring jar, then they all refer to same Spring jar stored in local repository.</li>
<li><b>Quicker Checkout :</b> Project checkout is quicker from local repository, since there is not need to checkout jars if they are
already present in repo.</li>
<li><b>No need for versioning :</b> There is no need to version JARS since external dependencies do not change so often.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>283. Can anyone upload JARS or artifacts to Central Repository?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, we need special permissions to upload JARS and artifacts to Central Maven Repository.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>284. What is a POM?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
POM is an abbreviation for Project Object Model. This is the basic unit of work in Maven. It is an XMLfile with name pom.xml.<br/><br/> 
It contains details of project and project configuration that are used by Maven to build the project.<br/><br/> 
It also contains default values for many projects. E.g. target is the name of build directory for Java Maven project.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>285. What is Super POM?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Super POM is Maven’s default POM. All the POM files extend from Super POM.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>286. What are the main required elements in POM file?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Every POM file should have following required elements :
<ol>
<li>project root</li>
<li>modelVersion</li>
<li><b>groupID :</b> the id of the project's group.</li>
<li><b>artifactID :</b> the id of the artifact (project)</li>
<li><b>version :</b> the version of the artifact under the specified group</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>287. What are the phases in Build lifecycle in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Maven, each build lifecycle consists of many phases. Default build lifecycle has following phases :
<ol>
<li><b>validate :</b> In this phase, Maven validates that the project is correct and all necessary information is available to run next phase.</li>
<li><b>compile :</b> Maven compiles the source code of the project in this phase.</li>
<li><b>test :</b> This is the phase to run unit tests on the compiled source. There should not be any need to package or deploy
the code to run these tests.</li>
<li><b>package :</b> In this phase, Maven takes the compiled code and packages it in its distributable format, such as a JAR.</li>
<li><b>verify :</b> Maven runs any checks on results of integration tests to ensure that quality criteria are met.</li>
<li><b>install :</b> In this phase, Maven installs the package into local repository. After this it can be used as a dependency in other projects locally.</li>
<li><b>deploy :</b> In the build environment, Maven copies the final package to the remote repository for sharing with other developers and projects.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>288. What command will you use to package your Maven project?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To package a project into a distributable format we use following command:
<pre><code class="language-html hljs xml">mvn -package</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>289. What is the format of fully qualified artifact name of a Maven project?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Maven project has artifact name with following format :
<pre><code class="language-html hljs xml">&lt;groupId&gt;:&lt;artifactId&gt;:&lt;version&gt;</code></pre>
Following is the convention used by some organizations :<br/><br/>
<b>Parent pom</b>
<pre><code class="language-html hljs xml">groupId: org.Orgname.Projectname
artifactId: org.Orgname.Projectname
version: x.x.x</code></pre>
<i>Example.</i> 
<pre><code class="language-html hljs xml">org.Orgname.Projectname:org.Orgname.Projectname-1.0.0.pom</code></pre>
<b>Modules</b>
<pre><code class="language-html hljs xml">groupId: org.Orgname.Projectname
artifactId: org.Orgname.Projectname.Modulename
version: x.x.x</code></pre>
<i>Example.</i>
<pre><code class="language-html hljs xml">org.Orgname.Projectname:org.Orgname.Projectname.Modulename1.0.0.jar</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>290. What is an Archetype in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
As per official definition, an Archetype is a Maven project templating toolkit.<br/><br/> 
By using an Archetype, an author of Archetype can create a Project template. Users of this project template (archetype) can pass
different parameters to this template and start using it.<br/><br/> 
Archetype promotes consistency in the process of creating and working on a project. It also helps in reducing the ramp up time for
new developers to come on board on a project.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>291. What is the command in Maven to generate an Archetype?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Maven, we can use following command to generate an Archetype :
<pre><code class="language-html hljs xml">mvn archetype:generate</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>292. What are the three main build lifecycles of Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven has following three build lifecycles that further contain multiple phases :
<ol>
<li><b>clean :</b> In this lifecycle any files generated by previous builds are removed.</li>
<li><b>default :</b> This lifecycle is used for validating, compiling and creating the application. It has multiple phases likecompile, test, 
package inside it.</li>
<li><b>site :</b> Maven generates and deploys the documentation of a site in this phase.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>293. What are the main uses of a Maven plugin?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven is mainly a plugin execution framework. At the code of Maven all the work is done by plugins. A Maven plugin can be used for following purposes :
<ol>
<li>Cleaning up the code</li>
<li>Compiling the code</li>
<li>Creating a JAR file</li>
<li>Deploying the artifacts</li>
<li>Running the unit tests</li>
<li>Documenting the project</li>
<li>Generating the site of a project</li>
<li>Generating a WAR file</li>
<li>Generate a checkstyle report</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>294. How will you find the version of a plugin being used?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven Help Plugin has a describe goal. This can be used for listing the version of a plugin. Sample command for this is :
<pre><code class="language-html hljs xml">mvn -Dplugin=install help:describe</code></pre>
<b>Note :</b> In the above command replace Dplugin with the plugin prefix as the argument. Do not use the artifact ID of plugin here.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>295. What are the different types of profile in Maven? Where will you define these profiles?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Maven, we can have following types of Profile :
<ul>
<li><b>Per Project :</b><br/>
It is defined in the POM itself (pom.xml).</li>
<li><b>Per User :</b><br/>
We can define it in the Maven-settings<br/>
(%USER_HOME%/.m2/settings.xml).</li>
<li><b>Global :</b><br/>
It is defined in the global Maven-settings<br/>
(${maven.home}/conf/settings.xml).</li>
<li><b>Profile descriptor :</b><br/>
Descriptor is located in project basedir (profiles.xml)<br/> 
(It is not supported in Maven 3.0)</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>296. What are the different setting files in Maven? Where will you find these files?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven is very simple to use. At the core it has a setting file names settings.xml. This file contains the setting element that is used to
configure the Maven with different options.<br/><br/>
The main locations where this file can be found are:
<ul>
<li><b>Maven Installation directory :</b> ${maven.home}/conf/settings</li>
<li><b>User Home directory :</b> ${user.home}/ .m2 / settings.xml</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>297. What are the main elements we can find in settings.xml?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In settings.xml we can have all the configuration information for Maven. Some of the important elements are :<br/><br/>
<ul>
<li><b>localRepository :</b> The value of this element is the path of this build system’s local repository. The default value is
<code><b>${user.home}/.m2/repository</b></code>.<br/><br/>
It is used for a main build server to allow all logged-in users to build from a common local repository.</li>
<li><b>interactiveMode :</b> If it is true then Maven should attempt to interact with the user for input. If it is false then Maven does not interact
with the user. Default setting is true.</li>
<li><b>usePluginRegistry :</b> If it is true Maven uses the <code><b>${user.home}/.m2/plugin-registry.xml</b></code> file to manage plugin versions. 
By defaults it is false.</li>
<li><b>offline :</b> If it is true this build system should be able to operate in offline mode. By default it is false. This element is used for build
servers that cannot connect to a remote repository due to network setup or security reasons.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>298. How will you check the version of Maven in your system?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use following command in console to check the version of Maven in our system.
<pre><code class="language-html hljs xml">mvn -version</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>299. How will you verify if Maven is installed on Windows?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To check this, type mvn –version in cmd prompt of Windows. This will give you the version of Maven installed on Windows.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>300. What is a Maven artifact?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Maven artifact is a file that gets deployed to a Maven repository. In most cases it is a JAR file.<br/><br/> 
When Maven build runs, it creates one or more artifacts. In case of Java projects, it produces a compiled jar and a sources jar.<br/><br/> 
Every artifact in Maven has a group ID, an artifact ID and a version string. These three attributes uniquely identify an artifact.<br/><br/> 
In Maven, we specify a project's dependencies as artifacts.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>301. What are the different dependency scopes in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven supports following dependency scopes:
<ul>
<li><b>compile :</b> This is the default dependency scope in Maven. The compile level dependencies are available in all classpaths of a
project. These dependencies are also propagated to dependent projects.</li>
<li><b>provided :</b> This scope is similar to compile. But in this scope we expect the JDK or a container to provide the dependency at runtime.
E.g. While building a web application for the Java Enterprise Edition, we can set the dependency on the Servlet API and related
Java EE APIs to scope provided. The web container will provide these classes at runtime to our application.<br/>
This scope is only available on the compilation and test classpath, and is not transitive.</li>
<li><b>runtime :</b> The dependency in this scope is not required for compilation. It is required for execution. It is available in the
runtime and test classpaths. It is not present in the compile classpath.</li>
<li><b>test :</b> This scope is used for dependencies that are required for test compilation and execution phases. This scope is not transitive.</li>
<li><b>system :</b> This scope is same as provided scope, except that you have to provide the JAR that contains it explicitly. In this case, he artifact
is always available. There is no need to look it up in a repository.</li>
<li><b>import :</b> This scope is only used on a dependency of type pom in the <code><b>&lt;dependencyManagement&gt;</b></code> section. In this case, the specified POM
has to be replaced with the dependencies in that POM's <code><b>&lt;dependencyManagement&gt;</b></code> section. This scope is only available in Maven 2.0.9 
or later.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>302. How can we exclude a dependency in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To exclude a dependency we can add the <code><b>&lt;exclusions&gt;</b></code> tag under the <code><b>&lt;dependency&gt;</b></code> section of the pom.
Example.
<pre><code class="language-html hljs xml">&lt;dependencies&gt;
&lt;dependency&gt;
&lt;groupId&gt;test.ProjectX&lt;/groupId&gt;
&lt;artifactId&gt;ProjectX&lt;/artifactId&gt;
&lt;version&gt;1.0&lt;/version&gt;
&lt;scope&gt;compile&lt;/scope&gt;
&lt;exclusions&gt;
&lt;exclusion&gt; &lt;!-- exclusion is mentioned here --&gt;
&lt;groupId&gt;test.ProjectY&lt;/groupId&gt;
&lt;artifactId&gt;ProjectY&lt;/artifactId&gt;
&lt;/exclusion&gt;
&lt;/exclusions&gt;
&lt;/dependency&gt;
&lt;/dependencies&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>303. How Maven searches for JAR corresponding to a dependency?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Maven first looks for a JAR related to a dependency in the local repository. If it finds it there then it stops.<br/><br/>
If it does not find it in local repo, it looks for the JAR in the remote repository and downloads the corresponding version of JAR file.
From remote repository it stores the JAR into local repository
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>304. What is a transitive dependency in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Let say you have a Project A that depends on dependency B. The dependency B further depends on dependency C. So your
dependency C is a Transitive Dependency of your project A.<br/><br/>
In Maven, starting from 2.0, you do not have to specify transitive dependencies. You just mention your immediate dependencies in pom.xml.<br/><br/>
Maven takes care of resolving the Transitive dependencies and includes them automatically.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>305. What are Excluded dependencies in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Let say a project A depends on project B, and project B depends on project C. The developers of project A can explicitly exclude
project C as a dependency. We can use the "exclusion" element to exclude it.<br/><br/>
Such dependencies are called Excluded dependencies in Maven.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>306. What are Optional dependencies in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Let say a project B depends on project C. The developers of project B can mark project C as an optional dependency by using the "optional" element.<br/><br/> 
In case project A depends on project B, A will depend only on B and not on B's optional dependency C.<br/><br/> 
The developers of project A may then explicitly add a dependency on C. The dependency of B on C is known as Optional dependency in Maven.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>307. Where will you find the class files after compiling a Maven project successfully?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Once Maven completes the compilation successfully, it stores the files in target folder. The default location for class files is :
<pre><code class="language-html hljs xml">${basedir}/target/classes/</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>308. What are the default locations for source, test and build directories in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The default locations are as follows :<br/><br/>
<b>Source :</b> src/main/java<br/>
<b>Test :</b> src/main/test<br/>
<b>Build :</b> Target
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>309. What is the result of jar:jar goal in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Maven, jar:jar goal creates a jar file in the Maven build directory. Jar file is create with the name 
format <code><b>${project.id}-${project.currentVersion}.jar</b></code><br/><br/>  
The <code><b>id</b></code> and <code><b>currentVersion</b></code> are mentioned in the project.xml of the project being built.<br/><br/>  
<code><b>jar:jar</b></code> does not recompile sources. It just creates a jar from already compiled classes.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>310. How can we get the debug or error messages from the execution of Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
At times, project build or compile fails in Maven. At this time it is very helpful to see the debug or error messages from Maven execution.<br/><br/> 
To get the debug messages we can call Maven with <code><b>-X</b></code> option.<br/><br/>  
To get the error/exception messages we can call Maven with <code><b>-e</b></code> option.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>311. What is the difference between a Release version and SNAPSHOT version in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A SNAPSHOT version in Maven is the one that has not been released.<br/><br/> 
Before every release version there is a SNAPSHOT version. Before 1.0 release there will be 1.0-SNAPSHOT.<br/><br/> 
If we download 1.0-SNAPSHOT today then we may get different set of files than the one we get on downloading it yesterday.
SNAPSHOT version can keep getting changes in it since it is under development.<br/><br/>  
But release version always gives exactly same set files with each download.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>312. How will you run test classes in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We need Surefire plugin to run the test classes in Maven.<br/><br/>  
To run a single test we can call following command:
<pre><code class="language-html hljs xml">mvn -Dtest=TestCaseA test</code></pre>
We can also use patterns to run multiple test cases:
<pre><code class="language-html hljs xml">mvn -Dtest=TestCase* test</code></pre>
or
<pre><code class="language-html hljs xml">mvn -Dtest=TestCaseA,TestCaseB,TestImportant* test</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>313. Sometimes Maven compiles the test classes but doesn't run them? What could be the reason for it?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Maven, Surefire plugin is used for running the Tests.<br/><br/> 
We can configure it to run certain test classes. Sometimes we you may have unintentionally specified an incorrect value to <code><b>${test}</b></code> in
<code><b>settings.xml</b></code> or <code><b>pom.xml</b></code>.<br/><br/> 
We need to look for following in pom.xml / settings.xml and fix it:
<pre><code class="language-html hljs xml">&lt;properties&gt;
&lt;property&gt;
&lt;name&gt;test&lt;/name&gt;
&lt;value&gt;some-value&lt;/value&gt;
&lt;/property&gt;
&lt;/properties&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>314. How can we skip the running of tests in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use the parameter <code><b>-Dmaven.test.skip=true</b></code> or <code><b>-DskipTests=true</b></code> in the command line for skipping the tests.<br/><br/> 
The parameter <code><b>-Dmaven.test.skip=true</b></code> skips the compilation of tests.<br/><br/> 
The parameter <code><b>-DskipTests=true</b></code> skips the execution of tests Surefire plugin of Maven honors these parameters.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>315. Can we create our own directory structure for a project in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Yes, Maven gives us the flexibility of creating our own directory structure. We just need to configure the elements like
<code><b>&lt;sourceDirectory&gt;</b></code>, <code><b>&lt;resources&gt;</b></code> etc. in the <code><b>&lt;build&gt;</b></code> section of pom.xml.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>316. What are the differences between Gradle and Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Gradle is nowadays getting more popular. Google uses it for Android development and release. Companies like LinkedIn also use Gradle.<br/><br/> 
Gradle is based on Domain Specific Language (DSL). Maven is based on XML.<br/><br/> 
Gradle gives more flexibility to do custom tasks similar to ANT.<br/><br/> 
Maven scripts have predefined structure. So it is less flexible.<br/><br/> 
Maven is mainly used for Java based systems. Gradle is used for a variety of languages. It is a Polyglot build tool.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>317. What is the difference between Inheritance and Multi-module in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Maven, we can create a parent project that will pass its values to its children projects.<br/><br/>
A multi-module project is created to manage a group of other subprojects or modules. The multi-module relationship is like a tree
that starts from the topmost level to the bottom level. In a multimodule project, we specify that a project should include the
specific modules for build. Multi-module builds are used to group modules together in a single build.<br/><br/> 
Whereas in Inheritance, the parent-child project relationship starts from the leaf node and goes upwards. It deals more with the
definition of a specific project. In this case a child’s pom is derived from its parent’s pom.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>318. What is Build portability in Maven?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Maven, the portability of a build is the measure of how easy it is to take a particular project and build it in different environments.
A build that does not require any custom configuration or customization of properties files is more portable than a build that
requires a lot of custom work to build it from scratch.<br/><br/> 
Open source projects from Apache Commons are one of the most portable projects. These build can work just out of the box.
<!-- Answer ::: END -->
</div>
</div>
