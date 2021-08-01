
<?php
include 'includes/session.php';
include 'includes/slugify.php';



// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '','ecomm');

// REGISTER USER
if (isset($_POST['add']))
{
  // receive all input values from the form
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$slug = mysqli_real_escape_string($db,slugify($name));
  $nos = mysqli_real_escape_string($db, $_POST['nos']);
	$category = mysqli_real_escape_string($db, $_POST['category']);
	$price = mysqli_real_escape_string($db, $_POST['price']);
  	$description = mysqli_real_escape_string($db, $_POST['description']);
  	$filename = mysqli_real_escape_string($db, $_FILES['photo']['name']);
  	$ram = mysqli_real_escape_string($db, $_POST['ram']);
    $rom = mysqli_real_escape_string($db, $_POST['rom']);
    $battery = mysqli_real_escape_string($db, $_POST['battery']);
    $chip = mysqli_real_escape_string($db, $_POST['chip']);
    $camera = mysqli_real_escape_string($db, $_POST['camera']);
  /*if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }*/
    foreach ($errors as $error)  
      echo $error;  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
  {
  	$res=mysqli_query($db, "insert into products (name,slug,counter,category_id,price,description,photo,ram,rom,battery,chip,camera) 
          VALUES('$name','$slug','$nos',$category,'$price','$description','$filename', '$ram', '$rom','$battery','$chip','$camera');");
  	$row=mysqli_num_rows($res);

	if($row > 0)
	{
		$_SESSION['error'] = 'Product already exist';
	}
	else
	{
		if(!empty($filename))
		{
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$new_filename = $slug.'.'.$ext;
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$new_filename);	
		}
		else
		{
			$new_filename = '';
		}
	}

    if($res)
    {
  	  	 $_SESSION['success'] = "Product added successfully";
    	  header("location:home.php");
    }
}  
}var_dump($db);