<?php
session_start();

/// initalizing database
include('connection.php');


// initializing variables
$email_address    = "";
$user_id = "";
$errors = array(); 


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
  // $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
  $email_address = mysqli_real_escape_string($db, $_POST['email_address']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($full_name)) { array_push($errors, "full_name Field is required"); }
  // if (empty($user_id)) { array_push($errors, "User ID Field is required"); }
  if (empty($email_address)) { array_push($errors, "Email Field is required"); }
  if (empty($password1)) { array_push($errors, "Password Field is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email_address='$email_address' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    // if ($user['user_id'] === $user_id) {
    //   array_push($errors, "User ID already exists");
    // }

    if ($user['email_address'] === $email_address) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO users (full_name, email_address, password) 
  			  VALUES('$full_name', '$email_address', '$password1')";
  	mysqli_query($db, $query);
  	$_SESSION['email_address'] = $email_address;
    $_SESSION['full_name'] = $full_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email_address = mysqli_real_escape_string($db, $_POST['email_address']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email_address)) {
  	array_push($errors, "email Field is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password Field is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM users WHERE email_address='$email_address' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email_address'] = $email_address;
      $_SESSION['full_name'] = $full_name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../index.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

if (isset($_POST['google_signin'])) {
  $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
  $google_id = mysqli_real_escape_string($db, $_POST['google_id']);
  $email_address = mysqli_real_escape_string($db, $_POST['email_address']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE google_id='$google_id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    $_SESSION['email_address'] = $email_address;
    $_SESSION['full_name'] = $full_name;
    $_SESSION['success'] = "You are now logged in";
    header('location: ../index.php');
  } else {
    $query = "INSERT INTO users (full_name, google_id, email_address) 
  			  VALUES('$full_name', '$google_id', '$email_address')";
    mysqli_query($db, $query);
  	$_SESSION['email_address'] = $email_address;
    $_SESSION['full_name'] = $full_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.php');
  }
}

?>