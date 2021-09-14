<?php require("config.php") ?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
            <link rel="stylesheet" href="log.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
            <title>FOODIES</title>
        </head>
      <style> 
       .nav-item.nav-link{
    font-size: 25px;
font-weight: 700;
color:yellowgreen;
height: 130px;
padding-top: 50px;
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

*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body{
  background-image:url(img/.jpg);
}
img{
  border-radius: 30px;
  margin-top: 170px;
  margin-left: 50px;
  margin-bottom: 90px;
}

.Form{
  padding-right: 180px;
  margin-bottom: 40px;
}
   
    
     </style>
     <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav m-auto"> 
      <a class="nav-item nav-link " href="front.php">HOME</a>
      <a class="nav-item nav-link" href="about.php">ABOUT</a>
      <a class="nav-item nav-link" href="recipe.php">RECIPES</a>
      <a class="nav-item nav-link" href="contact.php">CONTACT</a>
      <a class="nav-item nav-link" href="#">LOGIN</a>
    </div>
  </div>
        </nav>

 

<br><br><br><br><br><br>

<section class="Form">
  <div class="container">
  <div class="row">
      <div class="col-lg-1">
      <img src="img/30.jpg">
    </div>
  <div class="col-lg-5">
                <form class="codehim-form">
              
                <div class="form-title">
                   <div class="user-icon gr-bg">
                      <i class="fas fa-user"></i>
                   </div>
                   <h1>WELCOME TO THE FOODIES</h1>
                </div>
                <br>
                <label for="email" style="color: black;"><i class="fas fa-envelope" style="color:black"></i> <b>Email:</b></label>
                <input type="email" id="email" class="cm-input" name="email_id" required placeholder="Enter your email address">
                <label for="pass"style="color: black;"><i class="fas fa-lock"style="color: black;"></i><b>Password:</b></label>
                <input id="pass" type="password" class="cm-input" name="pass" required placeholder="Enter password" id="passfield">
                
               
                <i class="far fa-" id="togglePassword"></i>
                                                
                <button type="submit" name="ok" style="color: black;" class="btn-login  gr-bg"><b>Log In</b></button>
                </form>
  </div>
</div>

<?php
        if (isset($_POST['ok'])) {
            $email_id = $_POST['email_id'];
            $pass = $_POST['pass'];
            $src = "SELECT * FROM user WHERE email_id='$email_id' AND pass='$pass'";
            $rs = mysqli_query($con, $src) or die(mysqli_error($con));
            if (mysqli_num_rows($rs) > 0) {
                $rec = mysqli_fetch_assoc($rs);
                $_SESSION['u_info'] = $rec;
                header('location:reg.php');
            } else {
        ?>
                <div class="alert alert-danger">
                    <strong>Invalid email or password</strong>
                </div>
        <?php
            }
        }
        ?>


  </div>
</section>
             <br>
            
 
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
          