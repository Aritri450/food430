<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODIES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


   <style>
       .nav-item.nav-link{
    font-size: 25px;
font-weight: 700;
color:yellowgreen;
height: 130px;
padding-top: 50px;
}
.card{
    height: 440px;
    width: 320px;
    position: relative;
    transition: all 1s linear;
    transform-style: preserve-3d;
}
.front,
.back
{
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2em;
    font-family: 'lobster', cursive;
    border-radius: 10px;
    position: absolute;
    color: rgb(240 255 240);
    font-weight: bold;
}

.front{
    z-index: 2
}

.back{
   
  background-image: url("img/3.jpeg");
    z-index: 1;
    transform: rotateY(180deg);
    font-size: 2em;
   
}
.back a{
  text-decoration: none;
  color: orangered;
}

.container:hover .card{
    transform: rotateY(180deg);
  }
.container{
    perspective: 1000px;
}
.carousel-caption{
  padding-bottom: 250px;
}
.carousel-caption h2{
  font-size: 50px;
  text-transform: uppercase;
  color: rgb(255, 51, 51);
  font-family: "Brush Script MT", cursive;
}
.carousel-caption h3{
  font-size: 40px;
  text-transform: uppercase;
  color: rgb(255 218 185);
  font-family: Copperplate, Papyrus, fantasy;
}
.carousel-control.right{
  background-image: none;
}
.carousel-item{
  height: 120vh;
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
      <a class="nav-item nav-link " href="#">HOME</a>
      <a class="nav-item nav-link" href="about.php">ABOUT</a>
      <a class="nav-item nav-link" href="recipe.php">RECIPES</a>
      <a class="nav-item nav-link" href="contact.php">CONTACT</a>
      <a class="nav-item nav-link" href="log.php">LOGIN</a>
    </div>
  </div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/00.jpg" alt="First slide"> 
      <div class="carousel-caption">
      <h2 class="animated zoomIn" style="animation-delay: 1s">
Healthy Recipes</h2>
<h3 class="animated zoomIn" style="animation-delay: 2s">
for all the foodies</h3>
</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/01.jpg" alt="Second slide">
      <div class="carousel-caption">
      <h2 class="animated zoomIn" style="animation-delay: 1s">
Healthy Recipes</h2>
<h3 class="animated zoomIn" style="animation-delay: 2s">
for all the foodies</h3>
</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/02.jpg" alt="Third slide">
      <div class="carousel-caption">
      <h2 class="animated zoomIn" style="animation-delay: 1s">
Healthy Recipes</h2>
<h3 class="animated zoomIn" style="animation-delay: 2s">
for all the foodies</h3>
</div>
    </div>
  </div>
</div>


<br><br><br>
<div class="container">
<div class="row">
<div class="col-sm-4">
       <div class="card">
           <div class="front" style="background-image: url(img/3.jpeg);">BREAKFAST</div>
           <button class="back"style="background-image: url(img/8.jpg);"><a href="recipe.php#A">Read Recipe</a></button>
       </div>
   </div>


   <div class="col-sm-4">
       <div class="card">
           <div class="front"style="background-image: url(img/13.jpg);">LUNCH</div>
           <button class="back"style="background-image: url(img/6.jpg);"><a href="recipe.php#middle">Read Recipe</a></button>
       </div>
   </div>

   <div class="col-sm-4">
       <div class="card">
           <div class="front"style="background-image: url(img/10.jpg);">DINNER</div>
           <button class="back"style="background-image: url(img/5.jpg);"><a href="recipe.php#bottom">Read Receipe</a></button>
       </div>
   </div>
   </div>
</div><br<<br><br><br>

<footer>
  
<div class="footer-container">
        <div class="footer-left">
          <h4>Quick Links</h4>

          <ul>
            <li>
              <a href="#">Home</a>
            </li>

            <li>
              <a href="about.php">About</a>
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

</body>
</html>