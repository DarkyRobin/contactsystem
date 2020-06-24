<?php 
  include_once('inc/database.php');
  include_once('inc/sessions.php');
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

            <div id="content">
                <div class="container-fluid">
                    <?php include("views/contactspage.php");?>
                </div>
            </div>
        </div>
        <script defer src="js/function.js"></script>
        <script defer src="vendors/jquery/jquery.min.js"></script>
        <script defer src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
