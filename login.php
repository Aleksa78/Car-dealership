<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['sifra']); 
      
      $sql = "SELECT id FROM korisnici WHERE (username = '$username' OR email = '$username') and passwordd = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      if(empty(trim($username)) || empty(trim($password))){
        echo "<script>
        alert('Morate popuniti sva polja.');
        window.location.href='login.html';  
        </script>";
      }else{
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //session_register("username");
         $_SESSION['login_user'] = $username;
         if($username == "admin" && $password == "admin"){
            header("location: admin.html");
         }else{
            header("location: welcome.php");
         }
         
      }else {
        //header("location: login.html");
        //echo "<script>alert('There are no fields to generate a report');</script>";
        $error = "Email ili sifra su pogresni. Pokusajte ponovo.";
        echo "<script>
        alert('$error');
        window.location.href='login.html';  
        </script>";
        
      }
   }
}
?>