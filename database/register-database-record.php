<?php
session_start();

/// initalizing database
include('connection.php');


// initializing variables
$email_address    = "";
$user_id = "";
$errors = array(); 

$time = date("Y-m-d H:i:s");


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
  	

    //// register
    $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
  	$query = "INSERT INTO users (full_name, email_address, password, last_login_time) 
  			  VALUES('$full_name', '$email_address', '$hashed_password', '$time')";
  	mysqli_query($db, $query);


    /// login after register
    $query = "SELECT * FROM users WHERE email_address='$email_address' AND password='$hashed_password'";
  	$results = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($results);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email_address'] = $user['email_address'];
    $_SESSION['full_name'] = $user['full_name'];
    $_SESSION['success'] = "You are now logged in";

  	header('location: ../mypage');
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
  	
  	$query = "SELECT * FROM users WHERE email_address='$email_address' AND google_id IS NULL;";
  	$results = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($results);

  	if ($user && password_verify($password, $user['password'])) {
      
  	  $_SESSION['user_id'] = $user['id'];
      $_SESSION['email_address'] = $user['email_address'];
      $_SESSION['full_name'] = $user['full_name'];
      $_SESSION['success'] = "You are now logged in";

      $query = "UPDATE users SET last_login_time='$time' WHERE id=". $user['id'];
      mysqli_query($db, $query);

  	  header('location: ../mypage');
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
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email_address'] = $user['email_address'];
    $_SESSION['full_name'] = $user['full_name'];
    $_SESSION['success'] = "You are now logged in";

    $query = "UPDATE users SET last_login_time='$time' WHERE id=". $user['id'];
    mysqli_query($db, $query);

    header('location: ../mypage');
  } else {
    $query = "INSERT INTO users (full_name, google_id, email_address) 
  			  VALUES('$full_name', '$google_id', '$email_address')";
    mysqli_query($db, $query);

    $user_check_query = "SELECT * FROM users WHERE google_id='$google_id' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

  	$_SESSION['user_id'] = $user['id'];
    $_SESSION['email_address'] = $user['email_address'];
    $_SESSION['full_name'] = $user['full_name'];
    $_SESSION['success'] = "You are now logged in";

    $query = "UPDATE users SET last_login_time='$time' WHERE id=". $user['id'];
    mysqli_query($db, $query);

  	header('location: ../mypage');
  }
}

?>