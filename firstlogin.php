<!DOCTYPE html>
<html lang="en">
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
  </head>
  <style>
    body {
      background: white;
      background-position: center;
      background-size: cover;
    }
    .lrow {
      display: flex;
      margin-top: 15%;
      width: 90%;
    }
    .lcol {
      flex-basis: 31%;
      border-radius: 20px;
      margin-bottom: 5%;
      margin-left: 10%;
      padding: 20px 12px;
      text-align: center;
      box-sizing: border-box;
      background: white;
      height: 250px;
      box-shadow: 5px 5px 5px 0 darkgray;
      transition: 0.5s;
    }
    .lcol:hover {
      box-shadow: 0 0 20px 0px darkgrey;
    }
    img {
      border-radius: 50%;
      width: 90px;
      height: 90px;
      align-items: center;
    }
    p {
      margin-top: 20px;
      font-size: 20px;
      font-weight: 600;
    }
    input {
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
    input:hover {
      background-color: rgb(48, 154, 160);
      transform: scale(1.1);
    }
    a {
      color: black;
      margin-left: 20px;
    }
    a:hover {
      color: rgb(48, 154, 160);
    }
    @media screen and (max-width: 700px) {
      .lrow {
        flex-direction: column;
      }
    }
  </style>
  <body>
    <a href="crms.php"
      ><i class="fa-sharp fa-solid fa-house-chimney fa-2x"></i
    ></a>
    <div class="lrow">
      <div class="lcol">
        <img src="images/admin-icon.png" />
        <p>Administrator</p>
        <a href="adminlogin.php"><input type="button" value="Login" /></a>
      </div>
      <div class="lcol">
        <img src="images/police.png" />
        <p>Police</p>
        <a href="officerlogin.php"><input type="button" value="Login" /></a>
      </div>
      <div class="lcol">
        <img src="images/maleuser.png" />
        <p>User</p>
        <a href="userlogin.php"><input type="button" id="user" value="Login" /></a>
      </div>
    </div>
  </body>
</html>
