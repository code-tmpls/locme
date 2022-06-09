
<div class="appQuestion"><b>319. How can we see n most recent commits in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use git log command to see the latest commits. To see the three most recent commits we use following command:
<pre><code class="language-html hljs xml">git log -3</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>320. How can we know if a branch is already merged into master in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use following commands for this purpose :
<ul>
<li><code><b>git branch --merged master</b></code> : This prints the branches merged into master</li>
<li><code><b>git branch --merged lists</b></code> : This prints the branches merged into HEAD (i.e. tip of current branch)</li>
<li><code><b>git branch --no-merged</b></code> : This prints the branches that have not been merged</li>
</ul>
By default this applies only to local branches.<br/><br/>
We can use -a flag to show both local and remote branches.<br/><br/>
Or we can use -r flag to show only the remote branches.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>321. What is the purpose of git stash drop?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In case we do not need a specific stash, we use git stash drop command to remove it from the list of stashes.<br/><br/> 
By default, this command removes to latest added stash.<br/><br/> 
To remove a specific stash we specify as argument in the git stash drop <code><b>&lt;stashname&gt;</b></code> command.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>322. What is the HEAD in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A HEAD is a reference to the currently checked out commit.<br/><br/> 
It is a symbolic reference to the branch that we have checked out.<br/><br/> 
At any given time, one head is selected as the ‘current head’ This head is also known as HEAD (always in uppercase).
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>323. What is the most popular branching strategy in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are many ways to do branching in GIT. One of the popular ways is to maintain two branches :
<ul>
<li><b>master :</b> This branch is used for production. In this branch HEAD is always in production ready state.</li>
<li><b>develop :</b> This branch is used for development. In this branch we store the latest code developed in project. This is work in progress code.</li>
</ul>
Once the code is ready for deployment to production, it is merged into master branch from develop branch.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>324. What is SubGit?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
SubGit is software tool used for migrating SVN to Git. It is very easy to use. By using this we can create a writable Git mirror of a Subversion repository.<br/><br/> 
It creates a bi-directional mirror that can be used for pushing to Git as well as committing to Subversion.<br/><br/> 
SubGit also takes care of synchronization between Git and Subversion.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>325. What is the use of git instaweb?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Git-instaweb is a script by which we can browse a git repository in a web browser.<br/><br/> 
It sets up the gitweb and a web-server that makes the working repository available online.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>326. What are git hooks?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Git hooks are scripts that can run automatically on the occurrence of an event in a Git repository. These are used for automation of workflow in GIT.<br/><br/> 
Git hooks also help in customizing the internal behavior of GIT.<br/><br/>
These are generally used for enforcing a GIT commit policy.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>327. What is GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT is a mature Distributed Version Control System (DVCS). It is used for Source Code Management (SCM).<br/><br/>
It is open source software. It was developed by Linus Torvalds, the creator of Linux operating system.<br/><br/>
GIT works well with a large number of IDEs (Integrated Development Environments) like- Eclipse, InteliJ etc.<br/><br/>
GIT can be used to handle small and large projects.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>328. What is a repository in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A repository in GIT is the place in which we store our software work.<br/><br/>
It contains a sub-directory called .git. There is only one .git directory in the root of the project.<br/><br/>
In .git, GIT stores all the metadata for the repository. The contents of .git directory are of internal use to GIT.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>329. What are the main benefits of GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are following main benefits of GIT :
<ol>
<li><b>Distributed System :</b> GIT is a Distributed Version Control System (DVCS). So you can keep your private work in
version control but completely hidden from others. You can work offline as well.
<li><b>Flexible Workflow :</b> GIT allows you to create your own workflow. You can use the process that is suitable for your
project. You can go for centralized or master-slave or any other workflow.</li>
<li><b>Fast :</b> GIT is very fast when compared to other version control systems.</li>
<li><b>Data Integrity :</b> Since GIT uses SHA1, data is not easier to corrupt.</li>
<li><b>Free :</b> It is free for personal use. So many amateurs use it for their initial projects. It also works very well with large size project.</li>
<li><b>Collaboration :</b> GIT is very easy to use for projects in which collaboration is required. Many popular open source software across the globe 
use GIT.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>330. What are the disadvantages of GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT has very few disadvantages. These are the scenarios when GIT is difficult to use. Some of these are :
<ol>
<li><b>Binary Files :</b> If we have a lot binary files (non-text) in our project, then GIT becomes very slow. E.g. Projects with a
lot of images or Word documents.</li>
<li><b>Steep Learning Curve :</b> It takes some time for a newcomer to learn GIT. Some of the GIT commands are non-intuitive to a fresher.</li>
<li><b>Slow remote speed :</b> Sometimes the use of remote repositories in slow due to network latency. Still GIT is better than other VCS in speed.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>331. What are the main differences between GIT and SVN?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main differences between GIT and SVN are :
<ol>
<li><b>Decentralized :</b> GIT is decentralized. You have a local copy that is a repository in which you can commit. In SVN
you have to always connect to a central repository for check-in.</li>
<li><b>Complex to learn :</b> GIT is a bit difficult to learn for some developers. It has more concepts and commands to learn.
SVN is much easier to learn.</li>
<li><b>Unable to handle Binary files :</b> GIT becomes slow when it deals with large binary files that change frequently. SVN
can handle large binary files easily.</li>
<li><b>Internal directory :</b> GIT creates only .git directory. SVN creates <code><b>.svn</b></code> directory in each folder.</li>
<li><b>User Interface :</b> GIT does not have good UI. But SVN has good user interfaces.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>332. How will you start GIT for your project?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use git init command in an existing project directory to start version control for our project.<br/><br/> 
After this we can use git add and git commit commands to add files to our GIT repository.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>333. What is git clone in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, we use git clone command to create a copy of an existing GIT repository in our local.<br/><br/> 
This is the most popular way to create a copy of the repository among developers.<br/><br/> 
It is similar to svn checkout. But in this case the working copy is a full-fledged repository
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>334. How will you create a repository in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To create a new repository in GIT, first we create a directory for the project. Then we run <code><b>git init</b></code> command.<br/><br/> 
Now, GIT creates .git directory in our project directory. This is how our new GIT repository is created.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>335. What are the different ways to start work in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can start work in GIT in following ways :
<ul>
<li><b>New Project :</b> To create a new repository we use git init command.</li>
<li><b>Existing Project :</b> To work on an existing repository we use git clone command.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>336. GIT is written in which language?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Most of the GIT distributions are written in C language with Bourne shell. Some of the commands are written in Perl language.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>337. What does ‘git pull’ command in GIT do internally?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, git pull internally does a git fetch first and then does a git merge.<br/><br/> 
So pull is a combination of two commands: fetch and merge.<br/><br/> 
We use git pull command to bring our local branch up to date with its remote version
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>338. What does ‘git push’ command in GIT do internally?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, git push command does following two commands :
<ol>
<li><b>fetch :</b> First GIT, copies all the extra commits from server into local repo and moves origin/master branch pointer to the end of commit chain.</li>
<li><b>merge :</b> Then it merges the origin/master branch into the master branch. Now the master branch pointer moves to the newly created commit. But 
the origin/master pointer remains there.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>339. What is git stash?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, sometimes we do not want to commit our code but we do not want to lose also the unfinished code. In this case we use git stash
command to record the current state of the working directory and index in a stash. This stores the unfinished work in a stash, and
cleans the current branch from uncommitted changes.<br/><br/>
Now we can work on a clean working directory.<br/><br/>
Later we can use the stash and apply those changes back to our working directory.<br/><br/>
At times we are in the middle of some work and do not want to lose the unfinished work, we use git stash command.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>340. What is the meaning of ‘stage’ in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, stage is a step before commit. To stage means that the files are ready for commit.<br/><br/> 
Let say, you are working on two features in GIT. One of the features is finished and the other is not yet ready. You want to commit and
leave for home in the evening. But you can commit since both of them are not fully ready. In this case you can just stage the feature
that is ready and commit that part. Second feature will remain as work in progress.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>341. What is the purpose of git config command?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can set the configuration options for GIT installation by using git config command.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>342. How can we see the configuration settings of GIT installation?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use ‘git config --list’ command to print all the GIT configuration settings in GIT installation.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>343. How will you write a message with commit command in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We call following command for commit with a message :
<pre><code class="language-html hljs xml">$/> git commit –m &lt;message&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>344. What is stored inside a commit object in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT commit object contains following information :
<ul>
<li><b>SHA1 name :</b> A 40 character string to identify a commit.</li>
<li><b>Files :</b> List of files that represent the state of a project at a specific point of time</li>
<li><b>Reference :</b> Any reference to parent commit objects</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>345. How many heads can you create in a GIT repository?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There can be any number of heads in a repository.<br/><br/> 
By default there is one head known as HEAD in each repository in GIT.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>346. Why do we create branches in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If we are simultaneously working on multiple tasks, projects, defects or features, we need multiple branches. In GIT we can
create a separate branch for each separate purpose.<br/><br/> 
Let say we are working on a feature, we create a feature branch for that. In between we get a defect to work on then we create another
branch for defect and work on it. Once the defect work is done, we merge that branch and come back to work on feature branch again.<br/><br/> 
So working on multiple tasks is the main reason for using multiple branches.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>347. What are the different kinds of branches that can be created in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can create different kinds of branches for following purposes in GIT :
<ul>
<li><b>Feature branches :</b> These are used for developing a feature.</li>
<li><b>Release branches :</b> These are used for releasing code to production.</li>
<li><b>Hotfix branches :</b> These are used for releasing a hotfix to production for a defect or emergency fix.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>348. How will you create a new branch in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use following command to create a new branch in GIT :
<pre><code class="language-html hljs xml">$/> git checkout –b &lt;branchname&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>349. How will you add a new feature to the main branch?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We do the development work on a feature branch that is created from master branch. Once the development work is ready we use git
merge command to merge it into master branch.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>350. What is a pull request in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A pull request in GIT is the list of changes that have been pushed to GIT repository. Generally these changes are pushed in a feature
branch or hotfix branch. After pushing these changes we create a pull request that contains the changes between master and our
feature branch. This pull request is sent to reviewers for reviewing the code and then merging it into develop or release branch.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>351.What is merge conflict in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A merge conflict in GIT is the result of merging two commits. Sometimes the commit to be merged and current commit have
changes in same location. In this scenario, GIT is not able to decide which change is more important. Due to this GIT reports a merge
conflict. It means merge is not successful. We may have to manually check and resolve the merge conflict.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>352. How can we resolve a merge conflict in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When GIT reports merge conflict in a file, it marks the lines as follows :<br/><br/>
Example.<br/>
The business days in this week are
<pre><code class="language-html hljs xml">&lt;&lt;&lt;&lt;&lt;&lt;&lt; HEAD
five
=======
six
&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch-feature</code></pre>
To resolve the merge conflict in a file, we edit the file and fix the conflicting change. In above example we can either keep five or six.<br/><br/>
After editing the file we run git add command followed by git commit command. Since GIT is aware that it was merge conflict, it links this change to 
the correct commit.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>353. What command will you use to delete a branch?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
After the successful merge of feature branch in main branch, we do not need the feature branch.<br/><br/>
To delete an unwanted branch we use following command :
<pre><code class="language-html hljs xml">git branch –d &lt;branchname&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>354. What command will you use to delete a branch that has unmerged changes?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To forcibly delete an unwanted branch with unmerged changes, we use following command :
<pre><code class="language-html hljs xml">git branch –D &lt;branchname&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>355. What is the alternative command to merging in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Another alternative of merging in GIT is rebasing. It is done by git rebase command.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>356. What is Rebasing in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Rebasing is the process of moving a branch to a new base commit.<br/><br/>
It is like rewriting the history of a branch.<br/><br/>
In Rebasing, we move a branch from one commit to another. By this we can maintain linear project history.<br/><br/>
Once the commits are pushed to a public repository, it is not a good practice to use Rebasing.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>357. What is the ‘Golden Rule of Rebasing’in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The golden rule of Rebasing is that we should never use git rebase on public branches. If other people are using the same branch then
they may get confused by looking at the changes in Master branch after GIT rebasing.<br/><br/>
Therefore, it is not recommended to do rebasing on a public branch that is also used by other collaborators.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>358. Why do we use Interactive Rebasing in place of Auto Rebasing?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
By using Interactive rebasing we can alter the commits before moving them to a new branch.<br/><br/>
This is more powerful than an automated rebase. It gives us complete control over the branch’s commit history.<br/><br/>
Generally, we use Interactive Rebasing to clean up the messy history of commits just before merging a feature branch into master.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>359. What is the command for Rebasing in Git?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Git command for rebasing is:
<pre><code class="language-html hljs xml">git rebase &lt;new-commit&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>360. What is the main difference between git clone and git remote?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The main difference between git clone and git remote is that git clone is used to create a new local repository whereas git remote is
used in an existing repository.<br/><br/>
git remote adds a new reference to existing remote repository for tracking further changes.<br/><br/>
git clone creates a new local repository by copying another repository from a URL.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>361. What is GIT version control?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT version control helps us in managing the changes to source code over time by a software team. It keeps track of all the changes
in a special kind of database. If we make a mistake, we can go back in time and see previous changes to fix the mistake.<br/><br/> 
GIT version control helps the team in collaborating on developing a software and work efficiently. Every one can merge the changes
with confidence that everything is tracked and remains intact in GIT version control. Any bug introduced by a change can be discovered
and reverted back by going back to a working version.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>362. What GUI do you use for working on GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are many GUI for GIT that we can use. Some of these are :
<ul>
<li>GitHub Desktop</li>
<li>GITX-dev</li>
<li>Gitbox</li>
<li>Git-cola</li>
<li>SourceTree</li>
<li>Git Extensions</li>
<li>SmartGit</li>
<li>GitUp</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>363. What is the use of git diff command in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, git diff command is used to display the differences between 2 versions, or between working directory and an index, or between
index and most recent commit.<br/><br/>
It can also display changes between two blob objects, or between two files on disk in GIT.<br/><br/>
It helps in finding the changes that can be used for code review for a feature or bug fix.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>364. What is git rerere?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, rerere is a hidden feature. The full form of rerere is “reuse recorded resolution”.<br/><br/>
By using rerere, GIT remembers how we’ve resolved a hunk conflict. The next time GIT sees the same conflict, it can automatically resolve it for us.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>365. What are the three most popular version of git diff command?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Three most popular git diff commands are as follows :
<ul>
<li><b><code>git diff</code> :</b> It displays the differences between working directory and the index.</li>
<li><b><code>git diff –cached</code> :</b> It displays the differences between the index and the most recent commit.</li>
<li><b><code>git diff HEAD</code> :</b> It displays the differences between working directory and the most recent commit.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>366. What is the use of git status command?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, git status command mainly shows the status of working tree. It shows following items :
<ol>
<li>The paths that have differences between the index file and the current HEAD commit.</li>
<li>The paths that have differences between the working tree and the index file.</li>
<li>The paths in the working tree that are not tracked by GIT.</li>
</ol>
Among the above three items, first item is the one that we commit by
using git commit command. Item two and three can be committed only after running git add command.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>367. What is the main difference between git diff and git status?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, git diff shows the differences between different commits or between the working directory and index.<br/><br/> 
Whereas, git status command just shows the current status of working tree.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>368. What is the use of git rm command in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, <code><b>git rm</b></code> command is used for removing a file from the working tree and the index.<br/><br/>
We use <code><b>git rm –r</b></code> to recursively remove all files from a leading directory.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>369. What is the command to apply a stash?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Sometimes we want to save our unfinished work. For this purpose we use git stash command. Once we want to come back and
continue working from the last place where we left, we use <code><b>git stash apply</b></code> command to bring back the unfinished work.
So the command to apply a stash is :
<pre><code class="language-html hljs xml">git stash apply</code></pre>
Or we can use
<pre><code class="language-html hljs xml">git stash apply &lt;stashname&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>370. Why do we use git log command?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use git log command to search for specific commits in project history.<br/><br/>
We can search git history by author, date or content. It can even list the commits that were done x days before or after a specific date.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>371. Why do we need git add command in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT gives us a very good feature of staging our changes before commit. To stage the changes we use git add command. This adds
our changes from working directory to the index.<br/><br/>
When we are working on multiple tasks and we want to just commit the finished tasks, we first add finished changes to staging area and
then commit it. At this time git add command is very helpful.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>372. Why do we use git reset command?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use <code><b>git reset</b></code> command to reset current HEAD to a specific state.
By default it reverses the action of <code><b>git add</b></code> command.<br/><br/> 
So we use git reset command to undo the changes of <code><b>git add</b></code> command.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>373. What does a commit object contain?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Whenever we do a commit in GIT by using git commit command, GIT creates a new commit object. This commit objects is saved to GIT repository.<br/><br/>
The commit object contains following information :<br/><br/>
<ul>
<li><b>HASH :</b> The SHA1 hash of the Git tree that refers to the state of index at commit time.</li>
<li><b>Commit Author :</b>  The name of person/process doing the commit and date/time.</li>
<li><b>Comment :</b> Some text messages that contains the reason for the commit.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>374. How can we convert git log messages to a different format?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use pretty option in git log command for this.
git log – pretty
This option converts the output format from default to other formats.<br/><br/>
There are pre-built formats available for our use.
<pre><code class="language-html hljs xml">git log –pretty=oneline</code></pre>
<i>Example.</i> 
<pre><code class="language-html hljs xml">git log --pretty=format:"%h - %an, %ar : %s"</code></pre>
ba72a6c - Dave Adams, 3 years ago : changed the version number
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>375. What are the programming languages in which git hooks can be written?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Git hooks are generally written in shell and PERL scripts. But these can be written in any other language as long as it has an executable.<br/><br/>
Git hooks can also be written in Python script.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>376. What is a commit message in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A commit message is a comment that we add to a commit. We can provide meaningful information about the reason for commit by
using a commit message.<br/><br/>
In most of the organizations, it is mandatory to put a commit message along with each commit.<br/><br/>
Often, commit messages contain JIRA ticket, bug id, defect id etc. for a project
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>377. How GIT protects the code in a repository?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT is made very secure since it contains the source code of an organization. All the objects in a GIT repository are encrypted with
a hashing algorithm called SHA1.<br/><br/>
This algorithm is quite strong and fast. It protects source code and other contents of repository against the possible malicious attacks.<br/><br/>
This algorithm also maintains the integrity of GIT repository by protecting the change history against accidental changes.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>378. How GIT provides flexibility in version control?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT is very flexible version control system. It supports non-linear development workflows. It supports flows that are compatible with external 
protocols and existing systems.<br/><br/>
GIT also supports both branching and tagging that promotes multiple kinds of workflows in version control.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>379. How can we change a commit message in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If a commit has not been pushed to GitHub, we can use <code><b>git commit --ammend</b></code> command to change the commit message.<br/><br/> 
When we push the commit, a new message appears on GitHub.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>380. Why is it advisable to create an additional commit instead of amending an existing commit?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Git amend internally creates a new commit and replaces the old commit. If commits have already been pushed to central repository,
it should not be used to modify the previous commits.<br/><br/>
It should be generally used for only amending the git comment.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>381. What is a bare repository in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A repository created with git init –bare command is a bare repository in GIT.<br/><br/>
The bare repository does not contain any working or checked out copy of source files. A bare repository stores git revision history in
the root folder of repository instead of in a <code><b>.git</b></code> subfolder.<br/><br/>
It is mainly used for sharing and collaborating with other developers.<br/><br/>
We can create a bare repository in which all developers can push their code.<br/><br/>
There is no working tree in bare repository, since no one directly edits files in a bare repository.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>382. How do we put a local repository on GitHub server?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To put a local repository on GitHub, we first add all the files of working directory into local repository and commit the changes.
After that we call git remote add &lt;Remote Repo URL&gt; command to add the local repository on GitHub server.<br/><br/>
Once it is added, we use git push command to push the contents of local repository to remote GitHub server.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>383. How will you delete a branch in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use git branch –d <branchname> command to delete a branch in GIT.<br/><br/>
In case a local branch is not fully merged, but we want to delete it by force, then we use git branch –D <branchname> command.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>384. How can we set up a Git repository to run code sanity checks and UAT tests just before a commit?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use git hooks for this kind of purpose. We can write the code sanity checks in script. This script can be called by pre-commit
hook of the repository.<br/><br/>
If this hook passes, then only commit will be successful.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>385. How can we revert a commit that was pushed earlier and is public now?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use git revert command for this purpose.<br/><br/>
Internally, git revert command creates a new commit with patches that reverse the changes done in previous commits.<br/><br/>
The other option is to checkout a previous commit version and then commit it as a new commit.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>386. In GIT, how will you compress last n commits into a single commit</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Tom compress last n commits a single commit, we use git rebase command. This command compresses multiple commits and creates
a new commit. It overwrites the history of commits.<br/><br/> It should be done carefully, since it can lead to unexpected results.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>387. How will you switch from one branch to a new branch in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, we can use git checkout <code><b>&lt;new branchname&gt;</b></code> command to switch to a new branch.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>388. How can we clean unwanted files from our working directory in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT provides <code><b>git clean</b></code> command to recursively clean the working tree. It removes the files that are not under version control 
in GIT.<br/><br/>
If we use <code><b>git clean –x</b></code>, then ignored files are also removed.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>389. What is the purpose of git tag command?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We use git tag command to add, delete, list or verify a tag object in GIT.<br/><br/>
Tag objects created with options –a, -s, -u are also known as annotated tags.<br/><br/>
Annotated tags are generally used for release
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>390. What is cherry-pick in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A git cherry-pick is a very useful feature in GIT. By using this command we can selectively apply the changes done by existing commits.<br/><br/>
In case we want to selectively release a feature, we can remove the unwanted files and apply only selected commits.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>391. What is shortlog in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A shortlog in GIT is a command that summarizes the git log output.<br/><br/>
The output of git shortlog is in a format suitable for release announcements.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>392. How can you find the names of files that were changed in a specific commit?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Every commit in GIT has a hash code. This hash code uniquely represents the GIT commit object.
We can use git diff-tree command to list the name of files that were changed in a commit.<br/><br/>
The command will be as follows:
<pre><code class="language-html hljs xml">git diff-tree -r &lt;hash of commit&gt;</code></pre>
By using <code><b>-r</b></code> flag, we just get the list of individual files.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>393. How can we attach an automated script to run on the event of a new commit by push command?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT we can use a hook to run an automated script on a specific event. We can choose between pre-receive, update or post-receive
hook and attach our script on any of these hooks.<br/><br/>
GIT will automatically run the script on the event of any of these hooks.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>394. What is the difference between pre-receive, update and post-receive hooks in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Pre-receive hook is invoked when a commit is pushed to a destination repository. Any script attached to this hook is executed
before updating any reference. This is mainly used to enforce development best practices and policies.<br/><br/>
Update hook is similar to pre-receive hook. It is triggered just before any updates are done. This hook is invoked once for every
commit that is pushed to a destination repository.<br/><br/>
Post-receive hook is invoked after the updates have been done and accepted by a destination repository. This is mainly used to
configure deployment scripts. It can also invoke Continuous Integration (CI) systems and send notification emails to relevant
parties of a repository.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>395. Do we have to store Scripts for GIT hooks within same repository?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Hook is local to a GIT repository. But the script attached to a hook can be created either inside the hooks directory or it can be
stored in a separate repository. But we have to link the script to a hook in our local repository.<br/><br/>
In this way we can maintain versions of a script in a separate repository, but use them in our repository where hooks are stored.<br/><br/>
Also when we store scripts in a separate common repository, we can reuse same scripts for different purposes in multiple repositories.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>396. How can we determine the commit that is the source of a bug in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT we can use git bisect command to find the commit that has introduced a bug in the system.<br/><br/>
GIT bisect command internally uses binary search algorithm to find the commit that introduced a bug.<br/><br/>
We first tell a bad commit that contains the bug and a good commit that was present before the bug was introduced.<br/><br/>
Then git bisect picks a commit between those two endpoints and asks us whether the selected commit is good or bad.<br/><br/>
It continues to narrow down the range until it discovers the exact commit responsible for introducing the bug.

<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>397. How can we see differences between two commits in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use git diff command to see the differences between two commits.<br/><br/> The syntax for a simple git diff command to compare two
commits is :
<pre><code class="language-html hljs xml">git diff &lt;commit#1&gt; &;lt;commit#2&gt;</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>398. What are the different ways to identify a commit in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Each commit object in GIT has a unique hash. This hash is a 40 characters checksum hash. It is based on SHA1 hashing algorithm.
We can use a hash to uniquely identify a GIT commit.<br/><br/>
Git also provides support for creating an alias for a commit. This alias is known as refs. Every tag in GIT is a ref. These refs can also
be used to identify a commit. Some of the special tags in GIT are <code><b>HEAD</b></code>, <code><b>FETCH_HEAD</b></code> and <code><b>MERGE_HEAD</b></code>.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>399. When we run git branch with branchname, how does GIT know the SHA-1 of the last commit?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT uses the reference named HEAD for this purpose. The HEAD file in GIT is a symbolic reference to the current branch we are working on.<br/><br/>
A symbolic reference is not a normal reference that contains a SHA1 value. A symbolic reference contains a pointer to another reference.<br/><br/>
When we open head file we see :
<pre><code class="language-html hljs xml">$ cat .git/HEAD
ref: refs/heads/master</code></pre>
If we run git checkout branchA, Git updates the file to look like this:
<pre><code class="language-html hljs xml">$ cat .git/HEAD
ref: refs/heads/branchA</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>400. What are the different types of Tags you can create in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, we can create two types of Tags.
<ul>
<li><b>Lightweight Tag :</b> A lightweight tag is a reference that never moves.<br/>
We can make a lightweight tag by running a command similar to following:
<pre><code class="language-html hljs xml">$ git update-ref refs/tags/v1.0
dad0dab538c970e37ea1e769cbbde608743bc96d</code></pre></li>
<li><b>Annotated Tag :</b> An annotated tag is more complex object in GIT.<br/>
When we create an annotated tag, GIT creates a tag object and writes a reference to point to it rather than directly to the commit.<br/>
We can create an annotated tag as follows :
<pre><code class="language-html hljs xml">$ git tag -a v1.1 1d410eabc13591cb07496601ebc7c059dd55bfe9 -
m 'test tag</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>401. How can we rename a remote repository?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use command git remote rename for changing the name of a remote repository. This changes the short name associated with a
remote repository in your local. Command would look as follows :
<pre><code class="language-html hljs xml">git remote rename repoOldName repoNewName</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>402. Some people use git checkout and some use git co for checkout. How is that possible?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can create aliases in GIT for commands by modifying the git configuration.<br/><br/>
In case of calling git co instead of git checkout we can run following command:
<pre><code class="language-html hljs xml">git config --global alias.co checkout</code></pre>
So the people using git co have made the alias for git checkout in their own environment.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>403. How can we see the last commit on each of our branch in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When we run git branch command, it lists all the branches in our local repository. To see the latest commit associated with each
branch, we use option –v.<br/><br/>
Exact command for this is as follows :
<pre><code class="language-html hljs xml">git branch –v</code></pre>
It lists branches as:
<pre><code class="language-html hljs xml">issue75 83b576c fix issue
* master 7b96605 Merge branch 'issue75'
testing 972ac34 add dave to the developer list</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>404. Is origin a special branch in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, origin is not a special branch in GIT.<br/><br/>
Branch origin is similar to branch master. It does not have any special meaning in GIT.<br/><br/>
Master is the default name for a starting branch when we run git init command.<br/><br/>
Origin is the default name for a remote when we run git clone command. If we run <code><b>git clone -o myOrigin</b></code> instead, then we will 
have <code><b>myOrigin/master</b></code> as our default remote branch.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>405. How can we configure GIT to not ask for password every time?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
When we use HTTPS URL to push, the GIT server asks for username and password for authentication. It prompts us on the
terminal for this information.<br/><br/>
If we don’t want to type username/password with every single time push, we can set up a "credential cache".<br/><br/>
It is kept in memory for a few minutes. We can set it by running :
<pre><code class="language-html hljs xml">git config --global credential.helper cache</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>406. What are the four major protocols used by GIT for data transfer?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT uses following major protocols for data transfer :
<ol>
<li>Local</li>
<li>HTTP</li>
<li>Secure Shell (SSH)</li>
<li>Git</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>407. What is GIT protocol?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Git protocol is a mechanism for transferring data in GIT. It is a special daemon. It comes pre-packaged with GIT. It listens on a
dedicated port 9418. It provides services similar to SSH protocol.<br/><br/>
But Git protocol does not support any authentication.<br/><br/>
So on plus side, this is a very fast network transfer protocol. But it lacks authentication.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>408. How can we work on a project where we do not have push access?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In case of projects where we do not have push access, we can just fork the repository. By running git fork command, GIT will create a
personal copy of the repository in our namespace. Once our work is done, we can create a pull request to merge our changes on the real project.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>409. What is git grep?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT is shipped along with a grep command that allows us to search for a string or regular expression in any committed tree or the
working directory.<br/><br/>
By default, it works on the files in your current working directory.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>410. How can your reorder commits in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use git rebase command to reorder commits in GIT. It can work interactively and you can also select the ordering of commits.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>411. How will you split a commit into multiple commits?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
To split a commit, we have to use git rebase command in interactive mode. Once we reach the commit that needs to be split, we reset
that commit and take the changes that have been reset. Now we can create multiple commits out of that.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>412. What is filter-branch in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, filter-branch is another option to rewrite history. It can scrub the entire history. When we have large number of commits, we can
use this tool.<br/><br/>
It gives many options like removing the commit related changes to a specific file from history.<br/><br/>
You can even set you name and email in the commit history by using filter-branch.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>413. What are the three main trees maintained by GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT maintains following three trees :
<ul>
<li><b>HEAD :</b> This is the last commit snapshot.</li>
<li><b>Index :</b> This is the proposed next commit snapshot.</li>
<li><b>Working Directory :</b> This is the sandbox for doing changes.</li>
</ul>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>414. What are the three main steps of working GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT has following three main steps in a simple workflow :
<ol>
<li>Checkout the project from HEAD to Working Directory.</li>
<li>Stage the files from Working Directory to Index.</li>
<li>Commit the changes from Index to HEAD.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>415. What are ours and theirs merge options in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, we get two simple options for resolving merge conflicts: ours and theirs<br/><br/>
These options tell the GIT which side to favor in merge conflicts.<br/><br/>
In ours, we run a command like <code><b>git merge -Xours branchA</b></code><br/><br/>
As the name suggests, in ours, the changes in our branch are favored over the other branch during a merge conflict.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>416. How can we ignore merge conflicts due to Whitespace?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
GIT provides an option ignore-space-change in git merge command to ignore the conflicts related to whitespaces.<br/>
The command to do so is as follows:
<pre><code class="language-html hljs xml">git merge -Xignore-space-change whitespace</code><pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>417. What is git blame?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, git blame is a very good option to find the person who changed a specific line. When we call git blame on a file, it
displays the commit and name of a person responsible for making change in that line.<br/><br/>
<i>Following is a sample:</i>
<pre><code class="language-html hljs xml">$ git blame -L12,19 HelloWorld.java
^1822fe2 (Dave Adams 2016-03-15 10:31:28 -0700 12) public
class HelloWorld {
^1822fe2 (Dave Adams 2016-03-15 10:31:28 -0700 13)
^1822fe2 (Dave Adams 2016-03-15 10:31:28 -0700 14) public
static void main(String[] args) {
af6560e4 (Dave Adams 2016-03-17 21:52:20 -0700 16) // Prints
"Hello, World" to the terminal window.
a9eaf55d (Dave Adams 2016-04-06 10:15:08 -0700 17)
System.out.println("Hello, World");
af6560e4 (Dave Adams 2016-03-17 21:52:20 -0700 18) }
af6560e4 (Dave Adams 2016-03-17 21:52:20 -0700 19) }</code></pre>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>418. What is a submodule in GIT?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In GIT, we can create sub modules inside a repository by using git submodule command.<br/><br/>
By using submodule command, we can keep a Git repository as a subdirectory of another Git repository.<br/><br/>
It allows us to keep our commits to submodule separate from the commits to main Git repository.
<!-- Answer ::: END -->
</div>
</div>