
<div class="appQuestion"><b>419. What do you know about AWS Region?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
An AWS Region is a completely independent entity in a geographical area. There are two more Availability Zones in an AWS Region.<br/><br/>
Within a region, Availability Zones are connected through lowlatency links. Since each AWS Region is isolated from another Region, it
provides very high fault tolerance and stability. For launching an EC2 instance, we have to select an AMI within the same region.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>420. What are the important components of IAM?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
The important components of IAM are as follows :
<ol>
<li><b>IAM User :</b> An IAM User is a person or service that will interact with AWS. User can sign into AWS Management Console for performing tasks in AWS.</li>
<li><b>IAM Group :</b> An IAM Group is a collection of IAM users. We can specify permission to an IAM Group. This helps in managing large number of IAM users.</li>
We can simply add or remove an IAM User to an IAM Group to manage the permissions.</li>
<li><b>IAM Role :</b> An IAM Role is an identity to which we give permissions. A Role does not have any credentials
(password or access keys). We can temporarily give an IAM Role to an IAM User to perform certain tasks in AWS.</li>
<li><b>IAM Permission :</b> In IAM we can create two types of Permissions. Identity based and Resource based. We can
create a Permission to access or perform an action on an AWS Resource and assign it to a User, Role or Group. We
can also create Permissions on resources like S3 bucket, Glacier vault etc and specify who has access to the resource.</li>
<li><b>IAM Policy :</b> An IAM Policy is a document in which we list permissions to specify Actions, Resources and Effects. This
document is in JSON format. We can attach a Policy to an IAM User or Group.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>421. What are the important points about AWS IAM?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the important points about AWS IAM are as follows :
<ol>
<li>A new User in IAM does not have any permission.</li>
<li>AWS IAM assigns an Access Key and a Secret Access Key to a new User.</li>
<li>An Access Key cannot be used to login to AWS Console.</li>
<li>We use Access Key to access AWS via an APIs or Command Line interface.</li>
<li>IAM is a universal application. It is common across all the regions in AWS.</li>
<li>When we first setup our AWS account, we get a root account that has complete Admin access.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>422. What are the important features of Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the important features of Amazon S3 are as follows :
<ol>
<li>Amazon S3 provides unlimited storage for files.</li>
<li>File size in Amazon S3 can vary from 0 Bytes to 5 Terabytes.</li>
<li>We have store files in Buckets in Amazon S3.</li>
<li>In Amazon S3, names of buckets have to be unique globally.</li>
<li>Amazon S3 is Object Based storage.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>423. What is the scale of durability in Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Amazon S3 supports durability at the scale of 99.999999999% of time. This is 9 nines after decimal.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>424. What are the Consistency levels supported by Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Amazon S3 supports Read after Write consistency when we create a new object by PUT. It means as soon as we Write a new object, we can access it.
Amazon S3 supports Eventual Consistency when we overwrite an existing object by PUT. Eventual Consistency means that the effect of overwrite will
not be immediate but will happen after some time.<br/><br/>
For deletion of an object, Amazon S3 supports Eventual Consistency after <code><b>DELETE</b></code>.
<!-- Answer ::: END -->
</div>
</div>


<div class="appQuestion"><b>425. What are the different tiers in Amazon S3 storage?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Different Storage tiers in Amazon S3 are as follows :
<ol>
<li><b>S3 Standard :</b> In this tier, S3 supports durable storage of files that become immediately available. This is used for frequently used files.</li>
<li><b>S3 Standard -Infrequent Access (IA) :</b> In this tier, S3 provides durable storage that is immediately available. But in this tier files are
infrequently accessed.</li>
<li><b>S3 Reduced Redundancy Storage (RRS) :</b> In this tier, S3 provides the option to customers to store data at lower levels of redundancy. In
this case data is copied to multiple locations but not on as many locations as standard S3.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>426. How will you upload a file greater than 100 megabytes in Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Amazon S3 supports storing objects or files up to 5 terabytes. To upload a file greater than 100 megabytes, we have to use Multipart upload utility from AWS.
By using Multipart upload we can upload a large file in multiple parts. Each part will be independently uploaded. It doesn’t matter in what order each
part is uploaded. It even supports uploading these parts in parallel to decrease overall time. Once all the parts are uploaded, this utility makes these as one
single object or file from which the parts were created.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>427. What happens to an Object when we delete it from Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Amazon S3 provides DELETE API to delete an object.<br/><br/>
If the bucket in which the object exists is version controlled, then we can specify the version of the object that we want to delete. The other versions of
the Object still exist within the bucket.<br/><br/>
If we do not specify the version, and just pass the key name, Amazon S3 will delete the object and return the version id. And the object will not appear on
the bucket.<br/><br/>
In case the bucket is Multi-factor authentication (MFA) enabled, then the DELETE request will fail if we do not specify a MFA token.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>428. What is the use of Amazon Glacier?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Amazon Glacier is an extremely low cost cloud based storage service provided by Amazon.<br/><br/>
We mainly use Amazon Glacier for long-term backup purpose.<br/><br/>
Amazon Glacier can be used for storing data archives for months, years or even decades.<br/><br/>
It can also be used for long term immutable storage based on regulatory and archiving requirements. It provides Vault Lock support for this purpose. In this
option, we write once but can read many times same data.<br/><br/>
One use case is for storing certificates that can be issued only once and only the original person keeps the main copy.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>429. Can we disable versioning on a version-enabled bucket in Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, we cannot disable versioning on a version-enabled bucket in Amazon S3.<br/><br/>
We can just suspend the versioning on a bucket in S3.<br/><br/>
Once we suspend versioning, Amazon S3 will stop creating new versions of the object. It just stores the object with null version ID.<br/><br/>
On overwriting an existing object, it just replaces the object with null version ID. So any existing versions of the object still remain in the bucket. 
But there will be no more new versions of the same object except for the null version ID object.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>430. What are the use cases of Cross Region Replication Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can use Cross Region Replication Amazon S3 to make copies of an object across buckets in different AWS Regions. This copying takes place
automatically and in an asynchronous mode.<br/><br/>
We have to add replication configuration on our source bucket in S3 to make use of Cross Region Replication. It will create exact replicas of the objects
from source bucket to destination buckets in different regions.<br/><br/>
Some of the main use cases of Cross Region Replication are as follows :
<ol>
<li><b>Compliance :</b> Some times there are laws/regulatory requirements that ask for storing data at farther geographic locations. This kind of
compliance can be achieved by using AWS Regions that are spread across the world.</li>
<li><b>Failover :</b> At times, we want to minimize the probability of system failure due to complete blackout in a region. We can use CrossRegion 
Replication in such a scenario.</li>
<li><b>Latency :</b> In case we are serving multiple geographies, it makes sense to replicate objects in the geographical Regions that are closer to end
customer. This helps in reducing the latency.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>431. Can we do Cross Region replication in Amazon S3 without enabling versioning on a bucket?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
No, we have to enable versioning on a bucket to perform Cross Region Replication.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>432. What are the different types of actions in Object Lifecycle Management in Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
There are mainly two types of Object Lifecycle Management actions in Amazon S3.
<ol>
<li><b>Transition Actions :</b> These actions define the state when an Object transitions from one storage class to another storage class. E.g. a new
object may transition to STANDARD_IA (infrequent access) class after 60 days of creation. And it can transition to GLACIER after 180
days of creation.</li>
<li><b>Expiration Actions :</b> These actions specify what happens when an Object expires. We can ask S3 to delete an object completely on
expiration.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>433. How do we get higher performance in our application by using Amazon CloudFront?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
If our application is content rich and used across multiple locations, we can use Amazon CloudFront to increase its performance. Some of the techniques
used by Amazon CloudFront are as follows :
<ol>
<li><b>Caching :</b> Amazon CloudFront caches the copies of our application’s content at locations closer to our viewers. By this caching our users get 
our content very fast. Also due to caching the load on our main server decreases.</li>
<li><b>Edge / Regional Locations :</b> CloudFront uses a global network of Edge and Regional edge locations to cache our content. These locations cater to 
almost all of the geographical areas across the world.</li>
<li><b>Persistent Connections :</b> In certain cases, CloudFront keeps persistent connections with the main server to fetch the content quickly.</li>
<li><b>Other Optimization :</b> Amazon CloudFront also uses other optimization techniques like TCP initial congestion window etc to deliver high performance
experience.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>434. What is the mechanism behind Regional Edge Cache in Amazon CloudFront?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
A Regional Edge Cache location lies between the main webserver and the global edge location. When the popularity of an object/content decreases, the
global edge location may take it out from the cache.<br/><br/>
But Regional Edge location maintains a larger cache. Due to this the object/content can stay for long time in Regional Edge location. Due to this
CloudFront does not have to go back to main webserver. When it does not find any object in Global Edge location it just looks for in 
Regional Edge location.<br/><br/>
This improves the performance for serving content to our users in Amazon CloudFront.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>435. What are the benefits of Streaming content?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
We can get following benefits by Streaming content :
<ol>
<li><b>Control :</b> We can provide more control to our users for what they want to watch. In a video streaming, users can select the locations in
video where they want to start watching from.</li>
<li><b>Content :</b> With streaming our entire content does not stay at a user’s device. Users gets only the part they are watching. Once the session is
over, content is removed from the user’s device.</li>
<li><b>Cost :</b> With streaming there is no need to download all the content to a user’s device. A user can start viewing content as soon as some part
is available for viewing. This saves costs since we do not have to download a large media file before starting each viewing session.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>436. What is Lambda@Edge in AWS?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In AWS, we can use Lambda@Edge utility to solve the problem of low network latency for end users.<br/><br/>
In Lambda@Edge there is no need to provision or manage servers. We can just upload our Node.js code to AWS Lambda and create functions that will be
triggered on CloudFront requests.<br/><br/>
When a request for content is received by CloudFront edge location, the Lambda code is ready to execute.<br/><br/>
This is a very good option for scaling up the operations in CloudFront without managing servers.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>437. What are the different types of events triggered by Amazon CloudFront?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Different types of events triggered by Amazon CloudFront are as follows :
<ol>
<li><b>Viewer Request :</b> When an end user or a client program makes an HTTP/HTTPS request to CloudFront, this event is triggered at the
Edge Location closer to the end user.</li>
<li><b>Viewer Response :</b> When a CloudFront server is ready to respond to a request, this event is triggered.</li>
<li><b>Origin Request :</b> When CloudFront server does not have the requested object in its cache, the request is forwarded to Origin
server. At this time this event is triggered.</li>
<li><b>Origin Response :</b> When CloudFront server at an Edge location receives the response from Origin server, this event is triggered.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>438. What is Geo Targeting in Amazon CloudFront?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
In Amazon CloudFront we can detect the country from where end users are requesting our content. This information can be passed to our Origin server by
Amazon CloudFront. It is sent in a new HTTP header.<br/><br/>
Based on different countries we can generate different content for different versions of the same content. These versions can be cached at different Edge
Locations that are closer to the end users of that country.<br/><br/>
In this way we are able to target our end users based on their geographic locations.
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>439. What are the main features of Amazon CloudFront?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Some of the main features of Amazon CloudFront are as follows :
<ol>
<li>Device Detection</li>
<li>Protocol Detection</li>
<li>Geo Targeting</li>
<li>Cache Behavior</li>
<li>Cross Origin Resource Sharing</li>
<li>Multiple Origin Servers</li>
<li>HTTP Cookies</li>
<li>Query String Parameters</li>
<li>Custom SSL</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>

<div class="appQuestion"><b>440. What are the security mechanisms available in Amazon S3?</b></div>
<div class="list-group">
<div class="list-group-item appAnswer">
<!-- Answer ::: START -->
Amazon S3 is a very secure storage service. Some of the main security mechanisms available in Amazon S3 are as follows :
<ol>
<li><b>Access :</b> When we create a bucket or an object, only the owner get the access to the bucket and objects.</li>
<li><b>Authentication :</b> Amazon S3 also support user authentication to control who has access to a specific object or bucket.</li>
<li><b>Access Control List :</b> We can create Access Control Lists (ACL) to provide selective permissions to users and groups.</li>
<li><b>HTTPS :</b> Amazon S3 also supports HTTPS protocol to securely upload and download data from cloud.</li>
<li><b>Encryption :</b> We can also use Server Side Encryption (SSE) in Amazon S3 to encrypt data.</li>
</ol>
<!-- Answer ::: END -->
</div>
</div>
