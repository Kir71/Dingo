<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'dingofood';
//$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$conn=mysqli_connect($host,$user,$pass,$database);
if($conn){
}else{
     echo"Connection not successful" . mysqli_error($conn);
     die($conn);
}

require_once 'C:/xampp/htdocs/Food-Ordering-System/libs/database.php';
require_once 'C:/xampp/htdocs/Food-Ordering-System/libs/adminSession.php';
require_once 'C:/xampp/htdocs/Food-Ordering-System/BusinessServiceLayer/controller/menuController.php';

$admin_username = $_SESSION['admin_username'];

$menu = new menuController();
$menu_id = $_GET['id']; 
//echo "This is menu id: " . $menu_name;
$data = $menu->viewMenu($menu_id);

// edit a specific menu details
if(isset($_POST['edit'])){
    $menu->editMenu();
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>

<title>Edit Menu</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
        
    <meta charset="UTF-8">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
                rel="stylesheet"  type='text/css'></link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/homePage.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
                rel="stylesheet"  type='text/css'>
        </link>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/Food-Ordering-System/css/home.css">

<!-- STYLE -->

<style>
  /*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
    height: 100%;
}

body {
    font-family: montserrat, arial, verdana;
}

#msform {
    width: 50%;
    margin: 50px auto;
    text-align: center;
    position: relative;
}
#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 3px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 100%;    
    
    /*stacking fieldsets above each other*/
    position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}
/*inputs*/
#msform input, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}
/*buttons*/
#msform .action-button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

#msform .action-button:hover {
  opacity: 0.7;
}

/*headings*/
.fs-title {
    font-size: 15px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
}
.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}
/* */
#div_pagination{
    width:100%;
    margin-top:5px;
    text-align:center;
}

<!-- BUTTON STYLE -->
.button {
    background-color: #e74c3c; /* Green */
    border: none;
    color: white;
    padding: 10px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 4px solid #e74c3c;
}

.button1:hover {
    background-color: #e74c3c;
    color: white;
}

<!-- RADIO BUTTON-->

/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    left: 26%;
    height: 25px;
    width: 25px;
    background-color: grey;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}

body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #c69f9f;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("/Food-Ordering-System/img/dingoLogo3.jfif");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

ul {
    list-style-type: none;

}  

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

</style>
</head>

<body>

<!-- HEADER DINGO -->

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:80px">D I N G O F O O D</h1>
    <p style="color: black">Everything's Fresh Here at DingoFood</p><br>
  </div>
</div>

<!-- NAVBAR -->

<div id="menu-nav">
  <div style="list-style-type: none;" id="navigation-bar">
    <ul>
      <li><a href="/Food-Ordering-System/ApplicationLayer/ManageUserInterface/adminHome.php"><i class="fa fa-home"></i><span>Home</span></a></li>
      <li><a href="/Food-Ordering-System/ApplicationLayer/ManageMenuInterface/listMenu.php"><i class="fa fa-list"></i><span>List</span></a></li>
      <li><a href="/Food-Ordering-System/ApplicationLayer/ManageMenuInterface/addMenu.php"><i class="fa fa-plus"></i><span>New Menu</span></a></li>
      <li><a href="/Food-Ordering-System/ApplicationLayer/ManageReportInterface/viewMenu.php"><i class="fa fa-bar-chart"></i><span>Report</span></a></li>
      <li><a href="logout.php" onclick="return confirm('Are you sure you want to sign out?')"><i class="fa fa-sign-out"></i><span>Sign Out</span></a></li>
      <a href="Food-Ordering-System/ApplicationLayer/ManageUserInterface/adminProfile.php" id="topnav-right"><i class="fa fa-user"></i><span>Hello  <?php echo $admin_username; ?></span></a>
    </ul>
  </div>
</div>


<!-- EDIT MENU FORM -->

<?php

    foreach($data as $row){
?>

<form id="msform" action="" method="POST" onsubmit="return confirm('Are you sure want to update?');">

<fieldset>

<h2 style="text-align:center"><b>Edit Menu</b></h2>
<p style = "font-size: 15px; color:grey; text-align: center;">Save your edit when done!</p>
<p style = "font-size: 14px; color:red; text-align: center;"><b>* required</b></p><br>

<input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>"/>

<center><img src="../../img/<?php echo $row['menu_image'];?>" height="130" width="150"></center>  

<br>
<p style="font-size: 16px; color: grey;">Menu ID : <?= $row['menu_id']?></p>
<br>
<p style="font-size: 16px; color: black; text-align: left;"> Name <label style="font-size: 16px; color: red;"> * </label></p>
    <input type="text" id="menu_name" name="menu_name" value="<?php echo $row['menu_name']; ?>" /><br/>

<p style="font-size: 16px; color: black; text-align: left"> Price <label style="font-size: 16px; color: red;"> * </label></p>
    <input type="float" id="menu_price" name="menu_price" value="<?php echo $row['menu_price']; ?>" /><br/>

<p style="font-size: 16px; color: black; text-align: left"> Cost <label style="font-size: 16px; color: red;"> * </label></p>
    <input type="float" id="cost" name="cost" value="<?php echo $row['cost']; ?>" /><br/>

<p style="font-size: 16px; color: black; text-align: left"> Category <label style="font-size: 16px; color: red;"> * </label></p>
    <div style="display:flex; border: 1px solid lightgrey; padding: 13px; border-radius: 4px; font-size: 15px;">
    <label class="container">Cake
        <input type="radio" id="menu_category" name="menu_category" <?=$row['menu_category']=="Cake" ? "checked" : ""?> value="Cake">
       
        <span style="left: 12%" class="checkmark"></span>
    </label>
    <label class="container">Beverage
        <input type="radio" id="menu_category" name="menu_category" <?=$row['menu_category']=="Beverage" ? "checked" : ""?> value="Beverage">
        <span style="left:40%" class="checkmark"></span>
    </label>
    <label class="container">Mini Bites
        <input type="radio" id="menu_category" name="menu_category" <?=$row['menu_category']=="Mini Bites" ? "checked" : ""?> value="Mini Bites">
        <span style="left:69%" class="checkmark"></span>
    </label>
    </div><br/>

<p style="font-size: 16px; color: black; text-align: left"> Description <label style="font-size: 16px; color: red;"> * </label></p>
    <input type="text" id="menu_description" name="menu_description" value="<?php echo $row['menu_description']; ?>" /><br/>

<p style="font-size: 16px; color: black; text-align: left"> Status <label style="font-size: 16px; color: red;"> * </label></p>
    <div style="display:flex; border: 1px solid lightgrey; padding: 13px; border-radius: 4px; font-size: 15px;">
    <label class="container">Available
        <input type="radio" id="menu_status" name="menu_status" <?=$row['menu_status']=="Available" ? "checked" : ""?> value="Available">
        <span style="left: 18%" class="checkmark"></span>
    </label>
    <label class="container">Not available
        <input type="radio" id="menu_status" name="menu_status" <?=$row['menu_status']=="Not available" ? "checked" : ""?> value="Not available">
        <span style="left:59%" class="checkmark"></span>
    </label>
    </div><br/>

<p style="font-size: 16px; color: black; text-align: left"> Image <label style="font-size: 16px; color: red;"> * </label></p>
    <input type="text" id="menu_image" name="menu_image" value="<?php echo $row['menu_image']; ?>" /><br/>

<br><br>

<!-- ACTION BUTTON (SUBMIT EDIT MENU) -->

<input type="submit" class="action-button" name="edit" value="Save">
<a href="listMenu.php">Back</a>

<?php
    }
?>

</fieldset>
</form>

<!-- Footer -->
    <footer class="p-4 mb-0 bg-secondary">
     <div class="container">
       <p class="m-0 text-center text-white">&copy; 2021 DINGO FOOD. All Rights Reserved</p>
     </div>
    </footer>

</body>

</html>

