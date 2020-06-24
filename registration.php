<?php 
  include_once('inc/database.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>CONTACT SYSTEM</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    </head>

    <body id="page-top">
        <div id="wrapper">
            <!-- sidebar -->
            <?php include_once('inc/sidebar.php');?>

            <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <div class="container-fluid">
                <?php include("views/registration.php");?>
                </div> 
            </div>
        </div>

        <script defer src="js/functions.js"></script>
        <script defer src="vendors/jquery/jquery.min.js"></script>
        <script defer src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script defer src="js/jquery-ui.js"></script>
        <script defer src="views/registration.js"></script>
    </body>

</html>
