<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Dobrodosli </title>
   </head>
   
   <body>
      <h1>Dobrodosli korisnice <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Odjavi se.</a></h2>
   </body>
   
</html>