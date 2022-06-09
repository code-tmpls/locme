<div><b>1. What is Auto-scaling?</b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div>During Heavy Business Hours, When we have heavy traffic to our 
Instances, AWS Auto-scaling monitors your Application and automatically 
adjusts the capacity by creating Instances. Auto-Scaling is of two types:
<ul>
<li><b><i>SCALE-IN:</i></b> Reducing the Instances</li>
<li><b><i>SCALE-OUT:</i></b> Increasing the Instances</li>
</ul> 
</div>
<!-- Answer ::: END -->
</div>
</div>

<div><b>3. Difference between Stopping and Terminating the Instances? </b></div>
<div class="list-group">
<div class="list-group-item">
<!-- Answer ::: START -->
<div class="table-responsive">
  <table class="table">
     <thead>
      <tr>
        <th>#</th>
        <th>STOP an Instance</th>
        <th>TERMINATE an Instance</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>
			<div>When you STOP an Instance, it is a Normal Shutdown.</div>
			<div>The corresponding EBS Volume attached to that Instance remains Attached
			and you can restart the Instance later.</div>
		</td>
        <td><div>When you TERMINATE an Instance, instance gets deleted.</div>
			<div>The corresponding EBS Volume attached to that Instance also gets
			deleted and the instance can't restart.</div></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- Answer ::: END -->
</div>
</div>