<?php
 
 include('connect.php');

 session_start();

 session_unset();

 header('location:signin.php');
    

?>