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
      button#submit {
        margin-top: 18px;
        padding: 7px;
        cursor: pointer;
        border-radius: 10px;
        background-color: rgb(48, 154, 160);
        color: #fff;
        width: 200px;
      }
      button#submit:hover {
        background-color: rgb(48, 154, 160);
        transform: scale(1.1);
        color: #fff;
        transition: 0.5s;
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
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h1>Criminal</h1>
        </div>
        <div class="users">
          <div class="card">
            <img src="images/adduser.png" />
            <p>Add Criminal</p>
            <div class="per"></div>
            <form action="addCriminal.php">
                  <button id="submit">Add &nbsp;<i class="fa fa-arrow-right add"></i></button></form>  
          </div>
          <div class="card">
            <img src="images/police.png" />
            <p>Manage Criminal</p>
            <div class="per"></div>
            <form action="manageCriminal.php">
                  <button id="submit">Manage &nbsp;<i class="fa fa-arrow-right add"></i></button></form> 
          </div>
        </section>
      </section>
    </div>

  </body>
</html>
