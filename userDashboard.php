<?php
include('connection.php');
session_start();
if(!isset($_SESSION['username'])){
  header("Location:firstlogin.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="dash.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <title>Document</title>
  </head>
  <style>
    h1 {
      text-align: center;
    }
  </style>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
              <img src="images/logos.png" />
              <span class="nav-item">Admin</span>
            </a>
          </li>
          <li>
            <a href="userDashboard.php">
              <i class="fa fa-house"></i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="complain.php">
              <i class="fa fa-database"></i>
              <span class="nav-item">Comlpain Form</span>
            </a>
          </li>
          <li></li>
          <li>
            <a href="logout.php" class="logout">
              <i class="fa fa-right-from-bracket"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h1>Home</h1>
        </div>
        <section class="second">
          <div class="second-list"><h1>Welcome To HU CRMS</h1></div>
        </section>
      </section>
    </div>
  </body>
</html>
