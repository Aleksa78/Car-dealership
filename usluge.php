<?php
include("config.php");

// Create connection

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$sql = "SELECT id, username, email,passwordd FROM korisnici";
$result = $db->query($sql);


?> 

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prodaja automobila | Pocetna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Include the above in your HEAD tag -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">


    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.jpg" width="70">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Početna</a>
                    </li>
                    <li>
                        <a href="about.html">O nama</a>
                    </li>
                    <li>
                        <a href="usluge.html">Usluge</a>
                    </li>
                    <li>
                        <a href="contact.html">Kontakt</a>
                    </li>
                    <li>
                        <a class="btn btn-default btn-outline btn-circle" href="login.html">Prijavi se!</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="container" style="margin: 25px auto;">
    <h1 class="text-center">Prikaz podataka iz tabele</h1>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Sifra</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<br> <tr><td>". $row["id"]. "</td> <td> ". $row["username"]. "</td> <td>" . $row["email"] . "</td><td>". $row["passwordd"] . "</td></tr><br>";
    }
} else {
    echo "0 results";
}

$db->close();
?>
            </tbody>
        </table>

    </div>
    <!--container-->


    <!-- jQuery (cessary for Bootstrap's JavaScript plugins) -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>

</body>