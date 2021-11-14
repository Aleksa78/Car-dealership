<?php include('skripta.php') ?>

<html>

<link href="login.css" rel="stylesheet">
<link href="rejv3.jpg" rel="shortcut icon">



<body>



<br><br><br><br><br><br><br>

 <div class="container">
  	<h2>Login</h2>
  
	  
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div>
  		<label>Username</label>
  		<input type="text" name="username">
  	</div>
  	<div>
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
       
  	<div>
        <button type="submit" name="login_user">Log in</button>
  	
      </div>
    <br>
  	<div>
        <a href="register.php" class="w3-bar-item w3-button">Registruj se</a>
       
  	
      </div>
      <li><a href=adminlogin.html>Admin</a></li>
     
  </form>
     </div>
</body>
</html>
