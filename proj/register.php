<?php include('skripta.php') ?>


<html>

<link href="register.css" rel="stylesheet">

<head>


</head>

<body>



<br><br><br><br>

<center>

<h2> Registracija </h2>

</center>


<br>



<form method="post" action="register.php">

<?php include('errors.php'); ?>

<center>
<div>

<label> Username </label>
<input type="text" name="username" style="font-size: 20px; color: #011936;">

</div>

</center>

<br>

<center>
<div>

<label> Email </label>
<input type="email" name="email" style="font-size: 20px; color: #011936;">

</div>
</center>


<br>


<center>
<div>

<label> Password </label>
<input type="password" name="password_1" style="font-size: 20px; color: #011936;">

</div>
</center>

<br>

<center>
<div>

<label> Ponovite password </label>
<input type="password" name="password_2" style="font-size: 20px; color: #011936;">

</div>
</center>


<br>

<center>
<div>
<button type="submit" name="reg_user"> Registracija </button>

</div>
</center>

<br>

<center>
<p>

Prijavi se 
<br>
<a href="login.php"> Sign in </a>

</p>
</center>
</form>
</body>
</html>