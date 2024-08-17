<?php
include('connection.php');
?>
<?php
if(isset($_POST['submit'])){
    $crimetype=$_POST['crimetype'];
    $crimelocation=$_POST['crimelocation'];
    $nameofaccused=$_POST['nameofaccused'];
    $name=$_POST['name'];
    $mobilenum=$_POST['mobilenumber'];
    $address=$_POST['address'];  
    $relation=$_POST['relation'];
$sql="INSERT INTO complain(crimetype,crimelocation,nameofaccused,name,mobilenum,address,relation) 
VALUES('$crimetype','$crimelocation','$nameofaccused','$name','$mobilenum','$address','$relation')";
mysqli_query($con,$sql);
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
    <style>
      .addfir {
        padding-top: 20px;
        margin-left: 170px;
      }
      .addfir input {
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
      }
      button {
        margin: 20px auto;
        font-size: 15px;
        background-color: rgb(48, 154, 160);
        color: white;
        padding: 10px 45px;
        border-radius: 18px;
        box-shadow: 0 0 2px rgb(117, 113, 113);
        border: none;
        cursor: pointer;
        transition: 0.5s;
      }
      button:hover {
        background-color: rgb(48, 154, 160);
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
            <a href="userDashboard.php">
              <i class="fa fa-house"></i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="complian.php">
              <i class="fa fa-database"></i>
              <span class="nav-item">Comlpain Form</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h1>Add new Complain</h1>
        </div>

        <section class="second">
          <div class="second-list">
            <fieldset class="crimefield">
              <legend><h1>FIR Form</h1></legend>
              <?php $s = $_SERVER['PHP_SELF'];?>
              <form class="addfir" action="<?php $s ?>" method="POST">
                <label>Crime type:</label>
                <select name="crimetype" required>
                <option value="murder">Murder</option>
                  <option value="rape">Rape</option>
                  <option value="Theft">Theft</option> 
                </select>
                <br /><br />
                <label>Crime Location:</label>
                <input type="text" name="crimelocation" required/>
                <br /><br />
                <label>Name of Accused:</label>
                <input type="text" name="nameofaccused" required/>
                <br /><br />
              <legend class="l2"><h1>Comliant Details</h1></legend>
                <label>Name:</label>
                <input type="text" name="name" placeholder="Enter  Name" required/>
                <br /><br />
                <label>Mobile Number:</label>
                <input
                  type="text"
                  name="mobilenumber"
                  placeholder="Enter Mobile Number"
                  required
                />
                <br /><br />
                <label>Address:</label>
                <input
                  type="text"
                  name="address"
                  placeholder="Enter Address"
                  required
                /><br /><br />
                <label>Relation with Accused Person:</label>
                <input type="text" name="relation" required/>
                <br /><br />
                <button id="submit" type="submit" name="submit">Add</button>
              </form>
            </fieldset>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
