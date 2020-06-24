<?php
    include_once('inc/db_cn.php');
    if (isset($_POST['emailaddress']) and isset($_POST['user_pass'])){
	    // print_r($_POST);
        // exit();
        session_start();
        // Assigning POST values to variables.
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['user_pass'];
        
        // CHECK FOR THE RECORD FROM TABLE
        $query = "SELECT * FROM `tbl_contacts` 
                  WHERE tbl_contacts.emailaddress='$emailaddress' 
                  AND tbl_contacts.password ='$password' 
                  AND tbl_contacts.status = 1";
         
        $result = mysqli_query($cn, $query) or die(mysqli_error($cn));
        $count = mysqli_num_rows($result);
        $res = $cn->query($query);
        $rows = array();
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        $_SESSION = array("emailaddress" => $rows[0]['emailaddress'],
                                    "password" => $rows[0]['password']);
        if ($count == 1){
            //echo "Login Credentials verified";
            echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
            header("Location: index.php");
            exit();
        }else{
            echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
            //echo "Invalid Login Credentials or account does not exist";
            header("Location: login.php");
            exit();
        }
    }
?>
<!DOCTYPE html >
<html>
    <head>
        <title>CONTACT SYSTEM</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" type="text/css" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body id="body_bg">
        <div align="center">
            <h3>Sign In</h3>
            <form id="login-form" method="post" >
                <table border="0.5" >
                    <tr>
                        <td><label for="emailaddress">Email Address</label></td>
                        <td><input type="email" name="emailaddress" id="emailaddress"></td>
                    </tr>
                    <tr>
                        <td><label for="user_pass">Password</label></td>
                        <td><input type="password" name="user_pass" id="user_pass"></input></td>
                    </tr>
                    
                    <tr>
                        
                        <td><input type="submit" value="Submit" />
                        
                    </tr>
                </table>
            </form>
        </div>
        <script defer src="vendors/jquery/jquery.min.js"></script>
        <script defer src="'vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
