<?php  
session_start();
unset($_SESSION['userid']);
unset($SESSION['email']);
unset($SESSION['role']);
session_destroy();
header('index.php');
exit();
?>