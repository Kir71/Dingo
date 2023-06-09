<?php
// Author : NABILAH
// Page to display a single customer profile
require_once '../../libs/custSession.php';
require_once '../../BusinessServiceLayer/controller/customerProfileController.php';
$customer = new customerProfileController();
$data = $customer->my();
$name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en" >

<head>

  <script language="javascript" type="text/javascript">
  window.history.forward();
  </script>
  
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300'>

    <meta name="author" content="">

    <title>DINGO FOOD - Food Ordering System (FOS)</title>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
        rel="stylesheet"  type='text/css'>
    </link>
        <link href="  /vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="  /css/home.css">
    <link rel="stylesheet" href="  /css/profile.css">

<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("  /img/dingoLogo4.jfif");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-image2 {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("  /img/wall4.jpg");
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


/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 0 10%;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

</head>

<body>
<?php
require_once '../../libs/database.php';

 
  ?>
  <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:70px">D I N G O F O O D</h1>
    <p style="color: black">Everything's Fresh Here at DingoFood</p><br>
  </div>
</div>

  <div id="menu-nav">
  <div style="list-style-type: none;" id="navigation-bar">
    <ul>
                <li><a href="  /ApplicationLayer/ManageCustomerInterface/home.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="  /ApplicationLayer/ManageMenuInterface/viewMenu.php"><i class="fa fa-book"></i><span>Menu</span></a></li>
                <li><a href="  /ApplicationLayer/ManageOrderInterface/cart.php"><i class="fa fa-shopping-cart"></i><span>Cart</span></a></li>
                <li><a href="  /ApplicationLayer/ManageRefundInterface/refundList.php"><i class="fa fa-money"></i><span>Refund</span></a></li>
                <li><a href="  /ApplicationLayer/ManageCustomerInterface/logout.php" onclick="return confirm('Are you sure you want to sign out?')"><i class="fa fa-sign-out"></i><span>Sign Out</span></a></li>
                
                <a href="  /ApplicationLayer/ManageCustomerInterface/customerProfile.php" id="topnav-right"><i class="fa fa-user"></i><span>Hello <?php echo $name; ?></span></a>
            </ul>

  </div>
  
</div>

<!-- PROFILE -->
<div class="container">
    <div id="customer-profile">
      <div id="customer-nav" class="text-center">
        <!--<div class="profile-img border w-100">
        <img class="profile-img-backdrop" src="../../../uploads/<?php echo $data['image'] ?>" alt="" srcset="">
          <img class="profile-img-real" src="../../../uploads/<?php echo $data['image'] ?>" alt="" srcset="" onerror="this.src='../../../uploads/default.png';">
        </div>-->
        <div class="border w-100">
          <h5 class=" mt-2">Hello, <?php echo $name  ?></h5>
        </div>
        <div class="border w-100 py-2">
          <a class="cust-nav-active" href="customerProfile.php"><i class="fa fa-user" aria-hidden="true"></i>
            My Profile</a>
        </div>
        <div class="border w-100 py-2">
          <a class="cust-nav" href="customerProfileEdit.php"> <i class="fa fa-pencil" aria-hidden="true"></i>
            Edit Profile</a>
        </div>
      </div>
      <div id="customer-details" class="mx-4">
        <h4><i class="fa fa-user"></i>&nbsp My Profile</h4>
        <div id="customer-details-info" class=" mt-3">
          <p>Full name: <strong><?php echo $data["customer_name"]; ?></strong></p>
          <p>Email Address: <strong><?php echo $data["customer_email"] ?></strong></p>
          <p>Phone Number: <strong><?php echo $data["customer_phoneNo"] ?></strong></p>
          <p>Address: <strong><?php echo $data["customer_address"] ?></strong></p>
        </div>
      </div>
    </div>

  </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Footer -->
    <footer class="p-4 mb-0 bg-secondary">
     <div class="container">
       <p class="m-0 text-center text-white">&copy; 2021 DINGO FOOD. All Rights Reserved</p>
     </div>
    <!-- /.container -->
  </footer>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
   <!-- Bootstrap core JavaScript -->
    <script src="  /vendor/jquery/jquery.min.js"></script>
    <script src="  /vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="  /vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="  /js/jqBootstrapValidation.js"></script>
    <script src="  /js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="  /js/agency.min.js"></script>



</body>

</html>
