<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
 <div class="row">
	<div class="col-md-12">
	
<div align="center"><b>BASIC</b></div>
<!-- -->
<b>1. Define and explain the three basic types of cloud services and the AWS products that are built based on them?</b>
<div>The three basic types of cloud services are:</div>
<ul>
<li><b>Computing - </b> These include EC2, Elastic Beanstalk, Lambda, Auto-Scaling, and Lightsat.</li>
<li><b>Storage -</b> These include S3, Glacier, Elastic Block Storage, Elastic File System.</li>
<li><b>Networking - </b> These include VPC, Amazon CloudFront, Route53</li>
</ul>

<b>2. What is the relation between the Availability Zone and Region?</b>
<div class="table-responsive">
<table class="table">
<thead><tr><th>#</th><th>Region</th><th>Availability Zone</th></tr></thead>
<tbody>
<tr>
<td>1</td>
<td>AWS regions are separate geographical areas, like the US-West 1 (North California) and Asia South (Mumbai).<br/>
<i>Example:</i> US-West 1 (North California) and Asia South (Mumbai)</td>
<td>Each AWS Region has multiple isolated locations known as Availiability Zones.<br/>
All Availability Zones inside One Region are isolated from one another in terms of failure.</td>
</tr>
</tbody>
</table>
</div>
	
	
<b>3. What is Auto-scaling?</b>
<div>Auto-scaling is a function that allows you to provision and launch new instances whenever there is a demand. It allows you to automatically increase or decrease resource capacity in relation to the demand.</div>
	
	
<b>4. What is geo-targeting in CloudFront?</b>
<div>Geo-Targeting is a concept where businesses can show personalized content to their audience based on their geographic location without changing the URL. This helps you create customized content for the audience of a specific geographical area, keeping their needs in the forefront.</div>
	
	
<b>5. What are the steps involved in a CloudFormation Solution?</b>
<div>The steps involved in a CloudFormation solution:
<ul>
 <li>Create or use an existing CloudFormation template using JSON or YAML format.</li>
 <li>Save the code in an S3 bucket, which serves as a repository for the code.</li>
 <li>Use AWS CloudFormation to call the bucket and create a stack on your template.</li>
 <li>CloudFormation reads the file and understands the services that are called, their order, 
 the relationship between the services, and provisions the services one after the other.</li>
</ul>
</div>

<b>6. How do you upgrade or downgrade a system with near-zero downtime?</b>
<div>You can upgrade or downgrade a system with near-zero downtime using the steps of migration:
<ul>
<li>Open EC2 console.</li>
<li>Choose Operating System AMI.</li>
<li>Launch an instance with the new instance type.</li>
<li>Install all the updates.</li>
<li>Install applications.</li>
<li>Test the instance to see if it’s working.</li>
<li>If working, deploy the new instance and replace the older instance.</li>
<li>Once it’s deployed, you can upgrade or downgrade the system with near-zero downtime.</li>
</ul>
</div>


<b>7. What are the tools and techniques that you can use in AWS to identify if you are paying more than you should be, and how to correct it?</b>
<div>You can know that you are paying the correct amount for the resources that you are using by using the resources:
<ul>
<li><b>Check the Top Services Table:</b><br/>
It is a dashboard in the cost management console that shows you the top five most used services. This will let you know how much money you are 
spending on the resources in question.</li>
<li><b>Cost Explorer:</b><br/>
There are cost explorer services available that will help you to view and analyze your usage costs for the last 13 months. You can also get 
a cost forecast for the upcoming three months.</li>
<li><b>AWS Budgets:</b><br/>
This allows you to plan a budget for the services. Also, it will enable you to check if the current plan meets your budget and the details 
of how you use the services.</li>
<li><b>Cost Allocation Tags:</b><br/>
This helps in identifying the resource that has cost more in a particular month. It lets you organize your resources and cost allocation 
tags to keep track of your AWS costs.</li>
</ul>
</div>

<b>8. Is there any other alternative tool to log into the cloud environment other than console?</b>
<div>The that can help you log into the AWS resources are:
<ul>
<li>Putty</li>
<li>AWS CLI for Linux</li>
<li>AWS CLI for Windows</li>
<li>AWS CLI for Windows CMD</li>
<li>AWS SDK</li>
<li>Eclipse</li>
</ul>
</div>

<b>9. What services can be used to create a centralized logging solution?</b>
<div>The essential services that you can use are Amazon CloudWatch Logs, store them in Amazon S3, and then use Amazon Elastic Search 
to visualize them. You can use Amazon Kinesis Firehose to move the data from Amazon S3 to Amazon ElasticSearch.
</div>

<b>10. What are the native AWS Security logging capabilities?</b>
<div>Most of the AWS services have their logging options. Some of them have an account level logging, just like AWS CloudTrail, 
AWS Config.
<ul>
<li><b>AWS CloudTrail:</b><br/>
This is a service that provides a history of the AWS API calls for every account. It lets you perform security analysis, resource 
change tracking, and compliance auditing of your AWS environment as well. The best part about this service is that it enables you to 
configure it to send notifications via AWS SNS when new logs are delivered.</li>
<li><b>AWS Config:</b><br/>
This helps you understand the configuration changes that happen in your environment. This service provides an AWS inventory that 
includes configuration history, configuration change notification, and relationships between AWS resources. It can also be configured 
to send information via AWS SNS when new logs are delivered.</li>
</ul>
</div>

<b>11. What is a DDoS attack, and what services can minimize them?</b>
<div>DDoS is a cyber-attack in which the perpetrator (A person who carries out a harmful, illegal, or immoral act.) accesses a website 
and creates multiple sessions so that the other legitimate users cannot access the service. The native tools that can help you deny the 
DDoS attacks on your AWS services are:
<ul>
<li>AWS Shield</li>
<li>AWS WAF</li>
<li>Amazon Route53</li>
<li>Amazon CloudFront</li>
<li>ELB (Elastic Load Balancing)</li>
<li>VPC (Virtual Private Cloud)</li>
</ul>
</div>

<b>12. You are trying to provide a service in a particular region, but you do not see the service in that region. Why is this happening, 
and how do you fix it?</b>
<div>Not all Amazon AWS services are available in all regions. When Amazon initially launches a new service, it doesn’t get immediately 
published in all the regions. They start small and then slowly expand to other regions. So, if you don’t see a specific service in your 
region, chances are the service hasn’t been published in your region yet. However, if you want to get the service that is not available, 
you can switch to the nearest region that provides the services.
</div>

<b>13. How do you set up a system to monitor website metrics in real-time in AWS?</b>
<div>Amazon CloudWatch helps you to monitor the application status of various AWS services and custom events. It helps you to monitor:
<ul>
<li>State changes in Amazon EC2</li>
<li>Auto-scaling lifecycle events</li>
<li>Scheduled events</li>
<li>AWS API calls</li>
<li>Console sign-in events</li>
</ul>
</div>

<b>14. What are the different types of virtualization in AWS, and what are the differences between them?</b>
<div>
The three major types of virtualization in AWS are: 
<ul>
<li><b>Hardware Virtual Machine (HVM):</b><br/>
It is a fully virtualized hardware, where all the virtual machines act separate from each other. These virtual machines boot by executing 
a master boot record in the root block device of your image.</li>
<li><b>Paravirtualization (PV):</b><br/>
Paravirtualization-GRUB is the bootloader that boots the PV AMIs. The PV-GRUB chain loads the kernel specified in the menu.</li>
<li><b>Paravirtualization on HVM:</b><br/>
PV on HVM helps operating systems take advantage of storage and network I/O available through the host.</li>
</ul>
</div>

<b>15. Name some of the AWS services that are not region-specific.</b>
<div>AWS services that are not region-specific are:
<ul>
<li>IAM</li>
<li>Route 53</li>
<li>Web Application Firewall</li>
<li>CloudFront</li>
</ul>
</div>

<b>16. What are the differences between NAT Gateways and NAT Instances?</b>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Feature</th>
        <th>NAT Gateway</th>
        <th>NAT Instance</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Availability</td><td>High</td><td>High</td></tr>
	  <tr><td>Bandwidth</td><td>Upto 45 Gbps</td><td>Depends on instance bandwidth</td></tr>
	  <tr><td>Maintainence</td><td>Managed by AWS</td><td>Managed by you</td></tr>
	  <tr><td>Performance</td><td>Very Good</td><td>Average</td></tr>
	  <tr><td>Cost</td><td>Number of Gateways, duration and amount of usage</td><td>Number of Instances, duration, amount and type of usage</td></tr>
	  <tr><td>Size and Load</td><td>Uniform</td><td>As per you need</td></tr>
	  <tr><td>Security Groups</td><td>Can't be assigned</td><td>can be assigned</td></tr>
    </tbody>
  </table>
 </div>
 
 <b>17. What is the difference between stopping and terminating an EC2 instance? </b>
 <div>While you may think that both stopping and terminating are the same, there is a difference. When you stop an EC2 instance, 
 it performs a normal shutdown on the instance and moves to a stopped state. However, when you terminate the instance, it is 
 transferred to a stopped state, and the EBS volumes attached to it are deleted and can never be recovered. 
 </div>
 
<b>18. What are the different types of EC2 instances based on their costs?</b>
<div>The three types of EC2 instances are:
<ul>
<li><b>On-demand Instance:</b>
It is cheap for a short time but not when taken for the long term.</li>
<li><b>Spot Instance:</b>
It is less expensive than the on-demand instance and can be bought through bidding.</li>
<li><b>Reserved Instance:</b>
If you are planning to use an instance for a year or more, then this is the right one for you.</li>
</ul>
</div>

<b>19. How do you set up SSH agent forwarding so that you do not have to copy the key every time you log in?</b>
<div>
Here’s how you accomplish this:
<ul>
<li>Go to your PuTTY Configuration.</li>
<li>Go to the category SSH -> Auth</li>
<li>Enable SSH agent forwarding to your instance.</li>
</ul>
</div>
	<!-- -->
	</div><!--/.col-md-12 -->
 </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>


