<?php
include('connection.php');
session_start();
if(!isset($_SESSION['oid'])){
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
            <a href="officerDashboard.php">
              <i class="fa fa-house"></i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="recordOnOfficerdash.php">
              <i class="fa fa-database"></i>
              <span class="nav-item">Record</span>
            </a>
          </li>
          <li>
            <a href="mCriminal.php">
              <i class="fa fa-handcuffs"></i>
              <span class="nav-item">Criminals</span>
            </a>
          </li>
          <li>
            <a href="logout.php" class="logout">
              <i class="fa fa-right-from-bracket"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>
      <?php
$criminal = "SELECT * FROM criminal";
$result=mysqli_query($con,$criminal);
$totalcriminal=mysqli_num_rows($result);

$complain = "SELECT * FROM complain";
$result=mysqli_query($con,$complain);
$totalcomplain=mysqli_num_rows($result);

?>
      <section class="main">
        <div class="main-top">
          <h1>Home</h1>
        </div>
        <div class="users">
          <div class="card">
            <img src="images/victim.png" />
            <p>Total Criminal</p>
            <h4><?php echo $totalcriminal ?></h4>
          </div>
          <div class="card">
            <img src="images/case.png" />
            <p>Total Case</p>
            <h4><?php echo $totalcomplain ?></h4>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
