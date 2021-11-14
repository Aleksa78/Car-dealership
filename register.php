<?php
   include("config.php");

session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// REGISTER USER
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['sifra1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['sifra2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
$password = $password_1;
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM korisnici WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
        echo "<script>
        alert('Korisnik postoji.');
        window.location.href='register.html';  
        </script>";
    }

    if ($user['email'] === $email) {
        echo "<script>
        alert('Email postoji.');
        window.location.href='register.html';  
        </script>";
    }
  }

  // Finally, register user if there are no errors in the form
  
  	$query = "INSERT INTO korisnici (username, email, passwordd) VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    echo "<script>
    alert('Uspesno ste se registrovali.');
    window.location.href='login.html';  
    </script>";
  }

