<?php
$cn = mysqli_connect('localhost', 'root', '');
if (!$cn){
    die("Database Connection Failed" . mysqli_error($cn));
}
$select_db = mysqli_select_db($cn, 'contactsys_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($cn));
}