<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINGO FOOD - Food Ordering System</title>
</head>
<style>
    body{margin-top:20px;}
    @import url('https://fonts.googleapis.com/css?family=Abel');

    html, body {
    background:#c4afab;
    font-family: Abel, Arial, Verdana, sans-serif;
    }

    .center {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    }

    .card {
    width: 450px;
    height: 250px;
    background-color: #fff;
    background: linear-gradient(#f8f8f8, #fff);
    box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
    border-radius: 6px;
    overflow: hidden;
    position: relative;
    margin: 1.5rem;
    }

    .card h1 {
    text-align: center;
    }

    .card .additional {
    position: absolute;
    width: 150px;
    height: 100%;
    background: linear-gradient(#3b5f80, #EE786E);
    transition: width 0.4s;
    overflow: hidden;
    z-index: 2;
    }

    .card.green .additional {
    background: linear-gradient(#92bCa6, #3b5f80s);
    }


    .card:hover .additional {
    width: 100%;
    border-radius: 0 5px 5px 0;
    }

    .card .additional .user-card {
    width: 150px;
    height: 100%;
    position: relative;
    float: left;
    }

    .card .additional .user-card::after {
    content: "";
    display: block;
    position: absolute;
    top: 10%;
    right: -2px;
    height: 80%;
    border-left: 2px solid rgba(0,0,0,0.025);
    }

    .card .additional .user-card .level,
    .card .additional .user-card .points {
    top: 15%;
    color: #fff;
    text-transform: uppercase;
    font-size: 0.75em;
    font-weight: bold;
    background: rgba(0,0,0,0.15);
    padding: 0.125rem 0.75rem;
    border-radius: 100px;
    white-space: nowrap;
    }

    .card .additional .user-card .points {
    top: 85%;
    }

    .card .additional .user-card svg {
    top: 50%;
    }

    .card .additional .more-info {
    width: 300px;
    float: left;
    position: absolute;
    left: 150px;
    height: 100%;
    }

    .card .additional .more-info h1 {
    color: #fff;
    margin-bottom: 0;
    }

    .card.green .additional .more-info h1 {
    color: #fff;
    }

    .card .additional .coords {
    margin: 0 1rem;
    color: #fff;
    font-size: 1rem;
    }

    .card.green .additional .coords {
    color: #325C46;
    }

    .card .additional .coords span + span {
    float: right;
    }

    .card .additional .stats {
    font-size: 2rem;
    display: flex;
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    right: 1rem;
    top: auto;
    color: #fff;
    }

    .card.green .additional .stats {
    color: #325C46;
    }

    .card .additional .stats > div {
    flex: 1;
    text-align: center;
    }

    .card .additional .stats i {
    display: block;
    }

    .card .additional .stats div.title {
    font-size: 0.75rem;
    font-weight: bold;
    text-transform: uppercase;
    }

    .card .additional .stats div.value {
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5rem;
    }

    .card .additional .stats div.value.infinity {
    font-size: 2.5rem;
    }

    .card .general {
    width: 300px;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1;
    box-sizing: border-box;
    padding: 1rem;
    padding-top: 0;
    }

    .card .general .more {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    font-size: 0.9em;
    }
    .img-thumbnail {
  width: 110px;
  height: 110px;
  margin-top: 50%;
  margin-left: 20px;
  border-radius: 50%;
  object-fit: cover;
}

</style>
<body>
<div class="center">
  <div class="card">
    <div class="additional">
      <div class="user-card">
        <div class="level center">
          Admin
        </div>
       
        <img src="/img/icon2.png" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
      </div>
      <div class="more-info">
        <h1>Login As Admin</h1>
        <div class="stats">
          <div>
            <div class="title"><a style="color: white; text-decoration: none;" href="ApplicationLayer/ManageAdminInterface/adminLogin.php">Login</a></div>
            <i class="fa fa-trophy"></i>
          </div>
          
        </div>
      </div>
    </div>
    <div class="general">
      <h1 style="margin-top: 80px;">Dingo Food System</h1>
    </div>
  </div>


  <div class="card green">
    <div class="additional">
      <div class="user-card">
        <div class="level center">
          User
        </div>
        
        <img src="/img/icon1.png" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
      </div>
      <div class="more-info">
        <h1>Login As a Customer</h1>
        
        <div class="stats">
          <div>
            <div class="title"><a style="color: white; text-decoration: none;" href="ApplicationLayer/ManageCustomerInterface/login.php">Login</a></div>
            <i class="fa fa-trophy"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="general">
      <h1 style="margin-top: 80px;">Dingo Food System</h1>
    </div>
  </div>
</div>
</body>
</html>