<?php
include("sqlcon.php");
include("header.php");
if(isset($_POST['btnsend']))
{
	$date = date("d/m/y");
	$qry = "insert into tblcontact(cname,email, subject, cno,message,date) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['cno']."','".$_POST['message']."','".$date."')";
	if(mysqli_query($con, $qry))
	{ 
		echo "<script>alert('Thank you for your Feedback!!!');</script>";
	}
}
?>
<div class="contact">
	<h2> Contact</h2>
	<div class="map">
		
		<iframe src=" " frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

<div class="map-grids animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms" style="left: 7em;width: 82%;">
	
		
		<div class="col-md-8 map-middle">
			
			<form method="post" action="">
					<input type="text" name="name" placeholder="Name" required />
					<input type="email" name="email" placeholder="Email ID" required />
					<input type="text" name="cno" placeholder="Contact Number"   required >
					<input type="text" name="subject" placeholder="subject"  required >
					<textarea name="message" onfocus="this.value = '';" placeholder="Message" required ></textarea>
					<input type="submit" name="btnsend" value="Send" >
			</form>
		</div>
		<div class="col-md-4 map-left">
			<h3>Address</h3>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>+880 1703390338</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>Department of Computer Science and Engineering</li>
							<li>United International University</li>
							<li>100 feet, Madani Avenue, Vatara </li>
							<li>Dhaka-1212 , Bangladesh </li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
						    <li><a href="mailto:msahriare191235@bscse.uiu.ac.bd">msahriare191235@bscse.uiu.ac.bd</a></li>
							<li><a href="Web : ">Web:https://uiu.ac.bd </a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>

		</div>
		<div class="clearfix"></div>
	</div>

</div>
<!-- //map -->

 		<!--//content-slide-->
</div>
<?php
include("footer.php");
?>