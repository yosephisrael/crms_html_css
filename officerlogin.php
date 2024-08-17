<?php
session_start();
include('connection.php');
?>
<?php
if(isset($_POST['login']))
{
    $un=$_POST['oid'];
    $p=$_POST['pass'];
    $query="SELECT * FROM officer WHERE officer_id='$un' and pass='$p'";
    $result=mysqli_query($con,$query);
    if($row=mysqli_fetch_array($result)){
        header('Location:officerDashboard.php');
        $_SESSION['oid']=$row['officer_id'];
        $_SESSION['pass']=$row['pass'];
    }
}
?>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <style>
      body {
        background: white;
        background-size: cover;
        padding: 0;
        margin: 0;
        height: 100vh;
        width: 100vw;
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .container {
        background-color: white;
        width: 380px;
        margin: auto;
        height: 460px;
        border-radius: 25px;
        box-shadow: 0 0 20px 0 gray;
        margin-top: 90px;
      }
      #account {
        position: relative;
        font-size: 90px;
        color: beige;
        padding: 19px;
        background: rgb(48, 154, 160);
        border-radius: 10px;
        border-bottom-left-radius: 100px;
        border-bottom-right-radius: 100px;
        top: -60px;
        left: calc(50% - 74px);
        box-shadow: 0 0 5px black;
      }
      .tabs {
        display: flex;
        position: relative;
        top: -25px;
        justify-content: center;
        color: rgb(73, 71, 71);
        height: 25px;
      }
      .login-tab {
        width: 50%;
        text-align: center;
        padding-bottom: 10px;
        margin: auto 25px;
        cursor: pointer;
      }
      .login-tab:hover {
        color: rgb(48, 154, 160);
        border-bottom: 4px solid rgb(48, 154, 160);
      }

      #login-form {
        display: block;
        padding-top: 25px;
      }
      form {
        width: 90%;
        /* display: flex; */
        /* flex-direction: column; */
        margin: 15px auto;
        align-items: center;
        text-align: center;
      }
      input {
        height: 27px;
        margin: 5px;
        border-radius: 15px;
        border: none;
        outline: none;
        background-color: rgb(209, 209, 209);
        padding: 5px;
        font-size: 17px;
        color: rgb(73, 73, 73);
        text-align: center;
      }
      button {
        margin: 20px auto;
        font-size: 20px;
        background-color: rgb(48, 154, 160);
        color: white;
        padding: 10px 45px;
        border-radius: 18px;
        box-shadow: 0 0 2px 0 gray;
        border: none;
        cursor: pointer;
        transition: 0.5s;
      }
      button:hover {
        transform: scale(1.1);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <i id="account" class="fas fa-users"></i>
      <div class="tabs">
        <h2 class="login-tab">Login</h2>
      </div>
      <!-- login part -->
      <div id="login-form">
       <?php
        $S=$_SERVER['PHP_SELF'];
        ?>
        <form method="post" action="<?php $S ?>">
          <input
            type="text"
            name="oid"
            id="oid"
            placeholder="OID"
            required
          />
          <br />
          <input
            type="password"
            name="pass"
            id="pass"
            placeholder="password"
            required
          />
          <br />
          <button type="submit" name="login">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
