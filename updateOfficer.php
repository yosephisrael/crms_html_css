<?php
include("connection.php");
$con= mysqli_connect($servername,$username,$password,$db); 
?>
<?php
$id = $_GET["oid"];
$sql = "SELECT * FROM officer where officer_id=$id";
$result=mysqli_query($con,$sql);
$Rr= mysqli_fetch_array($result);


    if(isset($_POST['submit'])){
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $mobilenum=$_POST['mobilenumber'];
      $address=$_POST['address'];
        $sql="UPDATE officer set firstname='$firstname', lastname='$lastname',email='$email', mobile_num='$mobilenum', officer_address='$address' where officer_id='$id'";
        $result=mysqli_query($con,$sql);
    }
    ?>
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
  <style>
      .addofficer {
        padding-top: 20px;
        margin-left: 170px;
      }
      .addofficer input {
        align-items: center;
        margin-left: 20px;
        width: 40%;
        border-style: solid;
        border-color: gray;
        border-width: 1px;
        border-radius: 5px;
        padding: 5px;
        box-shadow: 1px 1px 1px 0 gray;
      }
      label {
        width: 140px;
        display: inline-block;
      }
      .box {
        box-shadow: 0 0 20px 0 gray;
        border-radius: 20px;
      }
      button#submit {
        margin-top: 18px;
        margin-bottom:10px;
        padding: 7px;
        cursor: pointer;
        border-radius: 10px;
        background-color: rgb(48, 154, 160);
        color: #fff;
        width: 100px;
      }
      button#submit:hover {
        background-color: rgb(48, 154, 160);
        transform: scale(1.1);
        color: #fff;
        transition: 0.5s;
      }
    </style>
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
            <a href="adminDashboard.php">
              <i class="fa fa-house"></i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="record.php">
              <i class="fa fa-database"></i>
              <span class="nav-item">Record</span>
            </a>
          </li>
          <li>
            <a href="mOfficer.php">
              <i class="fa fa-users"></i>
              <span class="nav-item">Officers</span>
            </a>
          </li>
          <li>
            <a href="manageUsers.php">
              <i class="fa fa-list"></i>
              <span class="nav-item">Users</span>
            </a>
          </li>
          <li>
            <a href="criminal.php">
              <i class="fa fa-handcuffs"></i>
              <span class="nav-item">Criminals</span>
            </a>
          </li>
          <li>
            <a href="mail.php">
            <i class="fa  fa-envelope"></i>
              <span class="nav-item">Mails</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h1>Update Officer</h1>
        </div>

        <section class="second">
          <div class="second-list">
            <div class="box">
            <?php
        $S=$_SERVER['PHP_SELF'];
        ?>
        <form class="addofficer" method="post" action="<?php $S ?>">
                <label>Officer Id:</label>
                <input
                  type="text"
                  name="oid"
                  placeholder="Enter OID"
                  readonly
                  value="<?php echo $Rr['officer_id'];?>"
                /><br /><br />
                <label>First Name:</label>

                <input
                  type="text"
                  name="firstname"
                  placeholder="Enter First Name"
                  required
                  value="<?php echo $Rr['firstname'];?>"
                /><br /><br />
                <label> Last Name:</label>

                <input
                  type="text"
                  name="lastname"
                  placeholder="Enter Last Name"
                  required
                  value="<?php echo $Rr['lastname'];?>"
                /><br /><br />
                <label>Email:</label>

                <input
                  type="text"
                  name="email"
                  placeholder="Enter Email"
                  required
                  value="<?php echo $Rr['email'];?>"
                /><br /><br />
                <label>Mobile Number:</label>

                <input
                  type="text"
                  name="mobilenumber"
                  placeholder="Enter Mobile Number"
                  required
                  value="<?php echo $Rr['mobile_num'];?>"
                /><br /><br />
                <label>Address:</label>

                <input
                  type="text"
                  name="address"
                  placeholder="Enter Address"
                  required
                  value="<?php echo $Rr['officer_address'];?>"
                /><br /><br />
                 <button id="submit" type="submit" name="submit">Update</button>
              </form>
            </div>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
