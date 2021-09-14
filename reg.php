<?php require("config.php") ?>
<!DOCTYPE html>
<html lang="en">


        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
            <link rel="stylesheet" href="2.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
            <title>FOODIES</title>
<style>
     .nav-item.nav-link{
    font-size: 25px;
font-weight: 700;
color:yellowgreen;
height: 130px;
padding-top: 50px;
}
   body{
       background: burlywood;
   }
    .container{
        background-color: whitesmoke;
        border-radius: 15px;
        height: 620px;
        width: 600px;
        margin-top: 90px;
        padding-top: 30px;
    }
    h1{
        text-align: center;
        text-transform: uppercase;
        font-size: 35px;
       
    }
    .main{
        margin-top: 30px;
        padding: 10px;
    }
    p{
        padding-left: 80px;
        font-weight: bold;  
        font-size: 18px;
     }
    .txt{
        position: relative;
        left: 200px;
        top: -37px;
        border-color: brown;
        box-sizing: content-box;
        width: 230px;
    }
    .num{
        position: relative;
        left: 200px;
        top: -37px;
        border-color: brown;
        box-sizing: content-box;
        width: 230px;
    }
    
    button{
        text-align: center;
       text-transform: uppercase;
        border-radius: 12px;
        width: 80px;
        border: 2px solid;
        display: block;
        background-color: lightseagreen;
        color: white;
        padding: 7px 100px 7px 20px;
        font-size: 20px;
        cursor: pointer;
    }
    button:hover{
        background-color: lightslategrey;
    }

    footer {
  background: #111;
    color: #fff;
    font-family: "Open sans";
    padding-top: 36px;
    height: auto;
    width: 98.75vw;
  }

  footer a {
  color: #fcfcfc;
  text-decoration: none;
}

footer a:hover {
  text-decoration: underline;
}
footer .footer-container {
  display: flex;
  width: 900px;
  margin: 0 auto;
}

footer ul {
  list-style: none;
  margin-top: 16px;
  padding-left: 10px;
}
footer ul li {
  margin: 12px 8px;
}
footer .footer-left {
  padding-right: 100px;
  border-right: 1px solid #c4c4c4;
}

footer .footer-right {
  padding-left: 100px;
}
footer .social-icons {
  margin-top: 16px;
}

footer .social-icons a {
  text-decoration: none;
}
.fa-facebook-f {
  background: #3B5998;
  color: white;
}
.fa-twitter{
background: #55ACEE;
  color: white;
}
.fa-instagram {
  background:#8a3ab9;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}
footer .social-icons a i {
  margin: 0 16px;
  font-size: 1.9rem;
}

footer .footer-right p {
  margin-top: 32px;
}
  
  .footer-bottom{
    background: #000;
    width: 98.7vw;
    padding: 20px 0;
    text-align: center;
  }
  .footer-bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
    padding-top: 15px;
  }


 
   
</style>

        </head>
        <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <img src="img/115.png" style="height:70px; width:180px; text-align:center;"> 
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav m-auto"> 
      <a class="nav-item nav-link " href="front.php">HOME</a>
      <a class="nav-item nav-link" href="#">ABOUT</a>
      <a class="nav-item nav-link" href="recipe.php">RECIPES</a>
      <a class="nav-item nav-link" href="contact.php">CONTACT</a>
      <a class="nav-item nav-link" href="log.php">LOGIN</a>
    </div>
  </div>
        </nav>

        <br><br><br><br><br><br><br>



<div class="container">
    <h1>Register Here</h1>
    <a href="view data.php" class="btn btn-info">View details </a>
    <div class="main">
<form name="frm" method="post">
        <p>First name:</p>
        <input type="text" class="txt" placeholder="enter first name" name="first_name" style="text-align: center;" required>
        <p>Last name:</p>
        <input type="text" class="txt" placeholder="enter last name" name="last_name" style="text-align: center;" required>
        <p>Address:</p>
        <textarea name="address" class="txt" name="address" required></textarea>
        <p>Mobile no:</p>
        <input type="number" class="num"  name="number"   placeholder="enter your mobile no" style="text-align: center;"> 
      <p>Email_id:</p>
        <input type="email" class="txt" name="email_id" placeholder="jhon@gmail.com" style="text-align: center;" required>
        <p>Password:</p>
        <input type="password" class="txt"name="pass" placeholder="enter password"style="text-align: center;"  required>
    </div>
    <button type="submit">Register</button>
    </form>

    <?php
        if (isset($_POST['ok'])) {
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $address = $_POST['address'];
            $number = $_POST['number'];
            $email_id = $_POST['email_id'];
            $pass = $_POST['pass'];
            $sql = "INSERT INTO user (first name,last name,address,mobile_no, email_id, password) VALUES('$first_name','$last_name','$address','$number','$email_id','$pass')";
            $res = mysqli_query($con, $sql) or die(mysqli_error($con));
            if ($res == 1) {
        ?>
                <div class="alert alert-success">
                    <strong>registration successfull</strong>
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger">
                    <strong> registration is unsuccessfull</strong>
                </div>
        <?php
            }
        }
        ?>

</div>
<br><br><br><br><br>

<footer>
  
<div class="footer-container">
        <div class="footer-left">
          <h4>Quick Links</h4>

          <ul>
            <li>
              <a href="front.php">Home</a>
            </li>

            <li>
              <a href="#">About</a>
            </li>

            <li>
              <a href="contact.php">Contact</a>
            </li>

            <li>
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
        </div>

<div class="footer-right">
        <h3>Follow us on</h3>
        <div class="social-icons">
                  <a href="#">
              <i class="fab fa-facebook-f" alt=""> </i>
            </a>

            <a href="#">
              <i class="fab fa-twitter"> </i>
            </a>

            <a href="#">
              <i class="fab fa-instagram"> </i>
            </a>

            <a href="#">
              <i class="fab fa-youtube"> </i>
            </a>
                  </div>
          <p>This website is managed by Foodies</p>
          </div>
      </div>
         <div class="footer-bottom">
           <p>@copyright All rights reserved</p>
         </div>

</footer>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
           <script src="main.js"></script>
           </body>
           </html>
          