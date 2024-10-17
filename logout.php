<?php 

//logout.php

session_start();

session_destroy();

header('location:user_login.php');
echo '<script language="javascript">';
echo 'alert("user log out successfull")';
echo '</script>';

?>