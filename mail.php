<?php
include('connection.php');
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
      #mail {
        border-collapse: collapse;
        width: 100%;
      }

      #mail td,
      #mail th {
        border: 1px solid #ddd;
        padding: 8px;
        text-transform:none;
      }

      #mail tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      #mail tr:hover {
        background-color: #ddd;
      }

      #mail th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color:  rgb(48, 154, 160);
        color: white;
      }
      .aa {
        font-size: 15px;
        cursor: pointer;
        transition: 0.5s;
        width:10px;
      }
      .aa:hover {
       background:transparent;
      }
      .icon:hover{
        color:red;
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
          <h1>Mails</h1s>
        </div>

        <section class="second">
          <div class="second-list">
            <table id="mail">
              <tr>
                <th>SN</th>
                <th>EID</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>

              <?php
    $sql = "SELECT * FROM mail";
    $result= mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
      $i=0;
        while($row=mysqli_fetch_array($result)){
          $i++; 
            $cid=$row['id'];
            $email=$row['email'];
            ?> 
             <tr>
             <td><?php echo $i ?></td>
                <td><?php echo $cid ?></td>
                <td><?php echo $email ?></td>
                <td style="display:flex"><a class="aa"href="viewMail.php?id=<?php echo $cid ?>"><i class="fa-solid fa-eye"></i></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="aa"href="deleteMail.php?id=<?php echo $cid ?>"><i class="fa-solid fa-trash icon"></i></a></td>
            </tr>
            <?php
        }
    }
    ?>
            </table>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
