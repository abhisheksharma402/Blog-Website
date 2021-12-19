<?php

session_start();
unset($_SESSION['uname']);
unset($_SESSION['id']);

header('location: admin_login.php');

?>