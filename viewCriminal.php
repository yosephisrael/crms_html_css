<?php
include('connection.php');
?>
<?php
$id = $_GET["cid"];
$sql = "SELECT * FROM criminal where cid=$id";
$result=mysqli_query($con,$sql);
$Rr= mysqli_fetch_array($result);
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
    <style>
      .addcriminal {
        padding-top: 20px;
        margin-left: 170px;
      }
      .addcriminal input {
        align-items: center;
        width: 70%;
        border-style: solid;
        border-color: gray;
        border-width: 1px;
        border-radius: 5px;
        padding: 5px;
        box-shadow: 1px 1px 1px 0 gray;
        height: 30px;
      }
      label {
        width: 130px;
        display: inline-block;
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
      select {
        width: 70%;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: 1px 1px 1px 0 gray;
      }
      fieldset {
        box-shadow: 5px 0px 5px 0 gray;
        border-radius: 20px;
      }
      legend {
        padding-top: 60px;
        padding-left: 30px;
        color: rgb(48, 154, 160);
        text-align:center;
      }
      .l2{
        padding-top: 20px;
        margin-left:-150px;
        color: rgb(48, 154, 160);
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
            <a href="ManageUsers.php">
              <i class="fa fa-list"></i>
              <span class="nav-item">Users</span>
            </a>
          </li>
         
          <li>
            <a href="criminal.php
            ">
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
          <h1>View Criminal</h1>
        </div>

        <section class="second">
          <div class="second-list">
            <fieldset class="crimefield">
              <legend><h1>Crime Details</h1></legend>
              <?php $s = $_SERVER['PHP_SELF'];?>
              <form class="addcriminal" action="<?php $s ?>" method="POST">
                <label>Crime type:</label>
                <select name="crimetype" readonly value="<?php echo $Rr['crimetype']?>">
                  <option value="murder">Murder</option>
                  <option value="rape">Rape</option>
                  <option value="Theft">Theft</option>                 
                </select>
                <br /><br />
                <label>Crime Date:</label>
                <input type="text" name="crimedate" style="width: 15%" readonly value="<?php echo $Rr['crimedate']?>" />
                <label style="margin-left: 285px">Crime Time:</label>
                <input type="text" name="crimetime" style="width: 15%" readonly value="<?php echo $Rr['crimetime']?>"/>
                <br /><br />

            <legend class="l2"><h1>Criminal Details</h1></legend>             
                <label>Criminal Id:</label>
                <input type="text" name="cid" style="width: 15%" readonly
                value="<?php echo $Rr['cid']?>"/><br /><br />
                <label>Name:</label>
                <input
                  type="text"
                  name="name"
                  placeholder="Enter  Name"
                  style="width: 15%"
                  readonly
                  value="<?php echo $Rr['name']?>"
                />
                <label style="margin-left: 285px">Mobile Number:</label>
                <input
                  type="text"
                  name="mobnumber"
                  style="width: 15%"
                  readonly
                  value="<?php echo $Rr['moblienum']?>"
                /><br /><br />

                <label>Height:</label>
                <input type="text" name="height" style="width: 15%" readonly value="<?php echo $Rr['height']?>" />
                <label style="margin-left: 285px">Weight:</label>
                <input
                  type="text"
                  name="weight"
                  style="width: 15%"
                  readonly
                  value="<?php echo $Rr['weight']?>"
                /><br /><br />
                <label>Date of Birth:</label>
                <input type="text" name="dob" style="width: 15%" readonly value="<?php echo $Rr['dob']?>" />
                <label style="margin-left: 285px"
                  >Email
                  <em style="color: red; font-size: 15px">(if any)</em>:</label
                >
                <input type="email" name="email" style="width: 15%" readonly value="<?php echo $Rr['email']?>"/>
                <br /><br />
                <label style="font-size:18px ;color:rgb(48, 154, 160);">Address Info:</label><br /><br />
                <label>City:</label>
                <input type="text" name="city" style="width: 15%" readonly value="<?php echo $Rr['city']?>"/>
                <label style="margin-left: 285px">Country:</label>
                <input type="text" name="country" style="width: 15%" readonly value="<?php echo $Rr['country']?>"/>
                <br /><br />
                <label>Photo:</label>
                <img src="<?php echo $Rr['photo']?>" style="width:100px;height:150px;padding-top:30px"><br><br>
              </form>
           </fieldset> 
        </section>
      </section>
    </div>
  </body>
</html>
