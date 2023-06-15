
<?php

//logout.php
session_start(); 
session_unset();
session_destroy(); 
header('location: /Dingo/ApplicationLayer/ManageCustomerInterface/login.php');
exit();
?>
