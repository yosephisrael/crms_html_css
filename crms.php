<?php
include('connection.php');
?>
<!DOCTYPE html>
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
    <title>Document</title>
    <style>
      .end
{
	height: 280px;
	background-color: rgb(27, 81, 83);
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
    outline:none;
    border-width:0;
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
    <section class="header" id="header">
      <nav>
        <a href="crms.html"><img src="images/logo.png" /></a>
        <div class="nav-links" id="navlinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="#header">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#service">SERVICES</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="firstlogin.php">LOGIN</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <div class="text">
        <h1>Welcome To</h1>
        <p class="one">
          HU CRMS
          <br />
          <em>Let's Fight Crime Together!</em>
        </p>
        <br />
        <p class="two">Our Aim is To Protect and to Serve the Society</p>
        <br /><br /><br />
        <a href="#overview" class="downarrow"
          ><i class="fa-sharp fa-solid fa-chevron-down fa-3x"></i
        ></a>
      </div>
    </section>
    <!------Police Station Overview------>
    <section class="overview" id="overview">
      <h1>Police Station Overview</h1>
      <div class="orow">
        <div class="ocol">
          <div class="icon"><img src="images/background.png" /></div>
          <div class="content">
            <h3>Background</h3>
            <p>
            Haramaya city Police station is a police station found at the city of Haramaya, and 
            this organization was formed in 1996 E.C.
            </p>
          </div>
        </div>
        <div class="ocol">
          <div class="icon"><img src="images/hierarchy.png" /></div>
          <div class="content">
            <h3>Organizational Hierarchy</h3>
            <p>
              Haramaya Police Station's Organizational Hierarchy is well organized in such a way that 
              a super authority commander is responible to take number of serious actions and to control
              officers working beneath him/her.
            </p>
          </div>
        </div>
        <div class="ocol">
          <div class="icon"><img src="images/abera.png" /></div>
          <div class="content">
            <h3>Current Commander</h3>
            <p>
             Inspector Abeza Dereje
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--About Us-->
    <section class="about" id="about">
      <h1>About Us</h1>
      <div class="arow">
        <div class="acol">
          <img src="images/haro.jpg" />
        </div>
        <div class="acol">
          <p>
            <em>Haramaya Police Station </em><br />
            Haramaya city Police station is a police staion found at the city of
            Haramaya , and this organization was formed in 1996 E.C , and the
            organization was simply as what we call Kebele Police station’
            because Haramaya by itself was not an officially stated as a city
            but now the organization have recently developed into Woreda Police
            station and manage different branches under itself. This
            organization have many organizational structure under it meaning
            hierarchy of job positions like Administrator , Inspector ,
            Investigator, and commander those are some of the job positions
            found under this organization . and these authorities related
            together to accomplish an organizational goal which is crime
            investigating and giving the correctified result or punishment to
            those who have passed the law .
          </p>
        </div>
      </div>
    </section>

    <!------Services------>
    <section class="service" id="service">
      <h1>Services</h1>
      <div class="row">
        <div class="service-col">
          <img src="images/casekeeping.jpg" />
          <div class="layer">
            <h3>Record keeping</h3>
          </div>
        </div>
        <div class="service-col">
          <img src="images/recordmanage.jpg" />
          <div class="layer">
            <h3>Case management</h3>
          </div>
        </div>
        <div class="service-col">
          <img src="images/crime.jpg" />
          <div class="layer">
            <h3>Incident reporting</h3>
          </div>
        </div>
      </div>
    </section>
    <!------Contact------>
    <section class="contact" id="contact">
      <h1>Contact Us</h1>
      <div class="containe">
        <div class="center">
          <p>Send Us your subject through email to contact Us</p>
        </div>

        <div class="action">
          <?php $s= $_SERVER['PHP_SELF']?>
          <form action="<?php $s ?>" method="POST">
            <input type="email" name="email" placeholder="Enter Your email" required />
            <textarea placeholder="Subject" name="subject"></textarea>
            <button id="submit" type="submit" name="submit">Send</button>
          </form>
          <?php
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $subject=$_POST['subject'];
$sql="INSERT INTO mail(email,subject) 
VALUES('$email','$subject')";
mysqli_query($con,$sql);

}
?>
        </div>
      </div>
    </section>
    <!---Footer--->
    <footer class="end">
      <div class="contactme">
        <h2>Contact Us</h2>
        <hr />
        <ul>
          <li>
            <i class="fa-solid fa-location-crosshairs fa-1x"></i
            >&nbsp;Ethiopia&nbsp; Hararghe&nbsp;Zone,Haramaya
          </li>
          <li>Reception: +251983318717</li>
          <li>Email: <a href="#">mrnb2615@gmail.com</a></li>
        </ul>
      </div>
      <div class="social">
        <h2>Go Social</h2>
        <hr />
        <p>Stay in touch with Us:</p>
        <p>
          <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fa-brands fa-square-instagram fa-2x"></i></a>
          <a href="#"><i class="fa-brands fa-telegram fa-2x"></i></a>
          <a href="#"><i class="fa-brands fa-square-whatsapp fa-2x"></i></a>
          <a href="#"><i class="fa-brands fa-youtube fa-2x"></i></a>
        </p>
      </div>
      <div class="copy">
        <p>
          HPD CRMS &nbsp; &copy;2023.
          <a href="#">Privacy Policy</a> |
          <a href="#">Terms of Service</a>
        </p>
      </div>
    </footer>
    <!--JS For Menu Bar-->
    <script src="java.js"></script>
  </body>
</html>
