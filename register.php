
<?php
	

	include 'includes/session.php';

	if(isset($_POST['signup'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$adr = $_POST['address'];

		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['email'] = $email;
		$db = mysqli_connect('localhost', 'root', '','ecomm');
		

		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: signup.php');
		}
		 $result = mysqli_query($db, "select * from users where email='$email';");
 		 $user = mysqli_fetch_assoc($result);
 		
 		 if ($user['email'] == $email)
     		{
     		
      		$_SESSION['error'] = 'Email already exists';
			header('location: signup.php');
    		}
	
		else{
			$now = date('Y-m-d');
			$password = password_hash($password, PASSWORD_DEFAULT);

			//generate code
			$set='1234567890';
			$code=substr(str_shuffle($set), 0, 4);

			}
			$res=mysqli_query($db,"INSERT INTO users (email, password, firstname, lastname, reset_code,created_on,address) VALUES 
			('$email', '$password', '$firstname', '$lastname','$code', '$now','$adr');");
			//echo "INSERT INTO users (email, password, firstname, lastname, reset_code,created_on,address) VALUES 
			//('$email', '$password', '$firstname', '$lastname','$code' ,'$now','$adr');"; exit;
			}
	if($res)
	{
		$_SESSION['success']= 'Regestration successfully';
		header('location: login.php');
	}
	
	else
	{
	$_SESSION['error'] = 'Something went wrong';
	header('location: signup.php');
	}

?>