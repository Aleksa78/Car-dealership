<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
$_SESSION['msg'] = "You must log in first";
header('location: login.php');
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: login.php");
}
?>
<html>
<head>
    <link href="index.css" rel="stylesheet">
</head>
<body>    
    <br><br><br><br><br><br><br>
    <center>
<div class="welcome">
<?php if (isset($_SESSION['username'])) : ?>
<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> Trčiš pet minuta, ne možeš da dišeš? Igraš celu noć, možeš još toliko? Pridruži nam se i žurkajmo zajedno!</p>
    
<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?>
</div>
</center>
</body>
</html>

