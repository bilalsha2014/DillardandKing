<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subjectemail=$_POST['subject'];
		$msg=$_POST['msg'];

		$to='info@dillardandking.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission:Website';
		$message="Name :".$name."\n"."Email Address :".$email."\n"."Subject :".$subjectemail."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<script type='text/javascript'>alert('Thankyou!  $name Your Response has been recorded'); window.history.go(-1);</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('Something Went Wrong'); window.history.go(-1);</script>";
		}
	}
?>

