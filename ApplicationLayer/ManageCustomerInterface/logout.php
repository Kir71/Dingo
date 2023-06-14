
<?php

//logout.php
session_start(); 
session_unset();
session_destroy(); 
header('location:    /ApplicationLayer/ManageCustomerInterface/login.php');
exit();
?>
