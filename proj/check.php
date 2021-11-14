<?php
$username=$_POST['username'];
$password=$_POST['password'];

if($username==("necapereca") & $password==("jasamadmin") ) {

$_SESSION['username']="username";
$_SESSION['password']="password";
header("location:admin.php");
}

else echo 'Pokusajte ponovo!'
?> 

<html>
<head>
</head>
<body>
<a href="index.php"> Pocetna</a>
</body>
</html>