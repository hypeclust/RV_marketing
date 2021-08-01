<?php
	include 'includes/session.php';
	$conn= mysqli_connect('localhost', 'root', '','ecomm');
if (isset($_POST['reset']))
{
	$email=$_POST['email'];
		
	$result=mysqli_query($conn,"select * from users where email='$email';");
	
	$rowcount=mysqli_num_rows($result);
	$id=mysqli_fetch_assoc($result);
	$uid=$id['id'];
	$set='1234567890';
	$code=substr(str_shuffle($set), 0, 4);
	if($rowcount==1)
	{
		$sql=mysqli_query($conn,"update users set reset_code=$code where id=$uid;");
		$subject="Reset Password";
		$message="Password Reset
					Your Account:
					<p>Email: ".$email."</p>
					<p>Please click the link below to reset your password.</p>
					<a href='http://localhost/ecommerce/password_reset.php?code=".$code."&user=".$uid."'>Reset Password</a>";
		$res=mail($email, $subject, $message);
		
		
			
			$_SESSION['success'] = 'Password reset link sent';

			
						
	}
	else
	{
		$_SESSION['error']='Email not found';
		
	}
	header('location: password_forgot.php');

}

?>