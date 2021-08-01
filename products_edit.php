<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	$db = mysqli_connect('localhost', 'root', '','ecomm');
	if(isset($_POST['edit']))
	{
	$id=mysqli_real_escape_string($db, $_POST['id']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$slug = mysqli_real_escape_string($db,slugify($name));
	$nos = mysqli_real_escape_string($db, $_POST['nos']);
	$category = mysqli_real_escape_string($db, $_POST['category']);
	$price = mysqli_real_escape_string($db, $_POST['price']);
  	$description = mysqli_real_escape_string($db, $_POST['description']);
  	$ram = mysqli_real_escape_string($db, $_POST['ram']);
  	$rom = mysqli_real_escape_string($db, $_POST['rom']);
  	$battery = mysqli_real_escape_string($db, $_POST['battery']);
  	$chip = mysqli_real_escape_string($db, $_POST['chip']);
  	$camera = mysqli_real_escape_string($db, $_POST['camera']);
		
  			$res=mysqli_query($db, "UPDATE products SET name='$name',slug='$slug',counter='$nos',category_id='$category',price='$price',description='$description',ram='$ram',rom='$rom',battery='$battery',chip='$chip',camera='$camera' WHERE id='$id';");}
  	
		
		
	
if($res)
    {
  	  	 $_SESSION['success'] = "Product updated successfully";
    	  header("location:home.php");
    }
	
	else{
		$_SESSION['error'] = 'Fill up edit product form first';
		var_dump($db);var_dump($ram);

		}

	header('location: products.php');
	
?>