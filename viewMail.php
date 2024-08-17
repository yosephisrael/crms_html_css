<?php
include('connection.php');
?>
<?php
$id = $_GET["id"];
$sql = "SELECT * FROM mail where id=$id";
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
      .viewmail {
        padding-top: 20px;
        margin-left: 170px;
      }
      .viewmail input {
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
        margin-top: 30px;
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
      fieldset {
        box-shadow: 5px 0px 5px 0 gray;
      }
     
      legend {
        padding-top: 60px;
        padding-left: 30px;
        color: rgb(48, 154, 160);
        
      }
      .l2{
        padding-top: 20px;
        margin-left:-150px;
        color: rgb(48, 154, 160);
      }
      .textarea {
    max-width: 400px;
    padding: 12px 15px;
    border: solid;
    outline: none;
    margin: 10px 30px 20px 0;
    border-radius: 30px;
    border-width: 2px;
    box-shadow: 5px 5px 5px 0 gray;
    overflow:scroll;
  }
form input[type="email"] {
    max-width: 200px;
    width: 470px;
    padding: 12px 15px;
    border: solid;
    outline: none;
    margin: 10px 30px 20px 0;
    border-radius: 30px;
    border-width: 2px;
    box-shadow: 5px 5px 5px 0 gray;
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
          <h1>View Mails</h1>
        </div>

        <section class="second">
          <div class="second-list">
            <fieldset class="crimefield">
              <legend><h1>Sent Mail</h1></legend>
              <?php $s = $_SERVER['PHP_SELF'];?>
              <form class="viewmail" action="<?php $s ?>" method="POST">
              <input type="email" name="email" placeholder="Enter Your email" readonly value="<?php echo $Rr['email']?>" />
              <input class="textarea" type="text" name=subject readonly value="<?php echo $Rr['subject']?>"><br><br><br>
              </form>
            </fieldset>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
