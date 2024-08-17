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
      #criminal {
        border-collapse: collapse;
        width: 100%;
      }

      #criminal td,
      #criminal th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #criminal tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      #criminal tr:hover {
        background-color: #ddd;
      }

      #criminal th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: rgb(48, 154, 160);
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
          <h1>Manage Criminal</h1>
        </div>

        <section class="second">
          <div class="second-list">
            <table id="criminal">
              <tr>
                <th>SN</th>
                <th>CID</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Actions</th>
              </tr>

              <?php
    $sql = "SELECT * FROM criminal";
    $result= mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $i=0;
        while($row=mysqli_fetch_array($result)){
            $i++;
            $cid=$row['cid'];
            $name=$row['name'];
            $mobilenum=$row['moblienum'];
            ?> 
             <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $cid ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $mobilenum ?></td>
                <td style="display:flex"><a class="aa"href="updateCriminal.php?cid=<?php echo $cid ?>"><i class="fa-solid fa-pen"></i></a></td>
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
