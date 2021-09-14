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
   #container {
    overflow:hidden;
   
width:90%;
min-width:800px;
margin-bottom:20px;
margin-top:100px;
margin-left:auto;
margin-right:auto;
}
#contains {
    overflow:hidden;
position:relative;
width:90%;
min-width:800px;
margin-bottom:30px;
margin-top:40px;
margin-left:auto;
margin-right:auto;
}
.leftimage {
width:450px;
height:350px;
padding-top: 30px;
}
h2 {   
    float: right; 
padding-right: 670px;
padding-top: 60px;
font-weight: 700;
font-size: 25px;
} 
ul{
    float: right;
padding-right: 590px;
padding-top: 30px;
font-weight: 400;
font-size: 22px;
}
.contain{
    background-color: rgb(255 250 240);
    height: 490px;
}
.cont{
    background-color: rgb(255 250 240);
    height: 470px;
}
h3{
    padding-left: 240px;
    padding-bottom: 30px;
  
} 
button{
    float: right; 
border-radius: 14px;
background-color: aquamarine;
color: orange;
border-color: lightsteelblue;
cursor: pointer;
font-size: 23px;
padding-top: 0.6px;
}
button:hover{
    background: lightsteelblue;
}



.typewriter {
    font-family: Courier, monospace;
	display: inline-block;
}

.typewriter-text {
    display: inline-block;
  	overflow: hidden;
  	letter-spacing: 2px;
 	animation: typing 2s, blink .30s;
    white-space: nowrap;
    font-size: 50px;
    font-weight: bolder;
    border-right: 4px solid orange;
    box-sizing: border-box;
    padding-left: 490px;
    color: orangered;
    -webkit-text-decoration-line: overline underline;
   text-decoration-line:  underline; 
}
@keyframes typing {
    from { 
        width: 0% 
    }
    to { 
        width: 100% 
    }
}

@keyframes blink {
    from, to { 
        border-color: transparent 
    }
    50% { 
        border-color: orange; 
    }
}


.rate {
   float: right;
    padding-left: 1000px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
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
      <a class="nav-item nav-link" href="about.php">ABOUT</a>
      <a class="nav-item nav-link" href="#">RECIPES</a>
      <a class="nav-item nav-link" href="contact.php">CONTACT</a>
      <a class="nav-item nav-link" href="log.php">LOGIN</a>
    </div>
  </div>
</nav>

<br><br><br><br><br><br><br><br><br>

<div class="typewriter">
<div class="typewriter-text" style="color:brown"> <a name="top"> A healthy start to the day</a></div>
</div>


        <div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>1.5 cup Whole wheat Vermicelli</li>
  <li>1 small Chopped Onion</li>
  <li>1/2 cup Frozen Peas and carrots</li>
  <li>1/8 teaspoon Mustard seeds</li>
  <li>1 tablespoon Oil</li><br>
  <button ><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/16.jpg"></div>


<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

</div>
<h3>Vermicelli Upma</h3>

        </div>


        <div class="cont">
    <div id="contains">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>1 flour tortilla 8” in diameter </li>
  <li>2 large eggs </li>
  <li> 1 Pinch salt and pepper </li>
  <li>1/4 cup shredded cheese(1 oz)</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>  
                 <div class="leftimage"><img src="img/19.jpg"></div>

                 <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>



    </div>
    <h3> Quesadillas</h3>
        </div>


        <div class="cont">
    <div id="contains">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>1 cup mashed potatoes</li>
  <li>1 cup grated cheese</li>
  <li>3 tbsp chopped onion&carrots</li>
  <li>1 tsp salt</li>
  <li>1 tbsp chili flakes </li>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>  
                 <div class="leftimage"><img src="img/18.jpg"></div>

                 <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3>Veg cheese balls</h3>
        </div>


        <div class="cont">
    <div id="contains">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>2 slices bacon (cut in half)</li>
  <li>2 slices bread and 1 egg</li>
  <li>1 avocado </li>
  <li> 1 pinch salt and black pepper</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>  
                 <div class="leftimage"><img src="img/20.jpg"></div>

                 <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3>Avocado Toast</h3>
        </div>

<br><br><br>
        <a name="middle"></a>
        
        
<div class="typewriter">
<div class="typewriter-text" style="color:RGB(175, 105, 3 )">  Mouth watering Hot Recipes </div>
</div>

        <div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>¼ cup Coriander Leaves</li>
  <li>4-5 Green Chilies</li>
  <li>16– 18 Garlic Cloves</li>
  <li>3 inches Ginger Piece</li>
  <li>5-6 Cardamom and 6-8 cloves</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/21.jpg"></div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3>Mutton Biryani</h3>
        </div>


        <div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>1 cup basmati rice</li>
  <li>1 inch cinnamon,2 pinch saffron</li>
  <li>1 teaspoon shahi jeera</li>
  <li>1 tej patta,3 cloves</li>
  <li>2 to 3 tablespoons Ghee/oil</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/22.jpg"></div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3>Kashmiri Pulao</h3>
        </div>


        <div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>2 cups Cooked Rice (cold)</li>
  <li>1 tbsp. Tomato & Soya Sauce</li>
  <li>1 teaspoon Ginger and oil</li>
  <li>1 cup Mixed Vegetables</li>
  <li>2 tbsp. Schezwan Sauce</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/23.jpg"></div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3 style="padding-left: 200px;">Schezwan Fried Rice</h3>
        </div>
   
        <div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>12 oz rice noodles</li>
  <li>3 tablespoons vegetable oil</li>
  <li>2 tbsp. soy sauce & Ketchup </li>
  <li>1 cup broccoli, mushroom </li>
  <li>1/2 cup chicken broth</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/24.jpg"></div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3 style="padding-left: 120px;">Chicken Stir Fry with Rice Noodles</h3>
        </div>

        <br><br><br>

        <a name="bottom"></a>
<div class="typewriter">
<div class="typewriter-text" style="color:RGB(246, 66, 85 ); padding-left:370px"> Excellence taste in Every Bite</div>
</div>



<div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>3 cup Wheat Flour or aata</li>
  <li>3 tbsp Cooking Oil or ghee</li>
  <li>1 tsp Salt</li>
  <li>1 tbsp melted ghee for brushing</li>
  <li>Enough oil To Shallow fry</li>
  <br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/26.jpg"></div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3>Lachcha Paratha </h3>
        </div>


        <div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>4 cups All purpose flour</li>
  <li>½ tsp Baking soda and Salt</li>
  <li>1 tsp Baking powder and Sugar</li>
  <li>¼ cup Yogurt</li>
  <li>3 tbsp Garlic</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/27.jpg"></div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3>Garlic Naan</h3>
        </div>


        <div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>2 cups wheat flour or atta</li>
  <li>2 tablespoon curd or yogurt</li>
  <li>2 teaspoon oil or ghee</li>
  <li>Water as needed</li>
  <li>Salt as per taste</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/28.jpg"></div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3>Tandoori Roti</h3>
        </div>
   
        <div class="contain">
    <div id="container">
        <h2>INCREDIENTS </h2>   
<ul>
  <li>130 g plain flour (maida)</li>
  <li>100 g chicken breasts</li>
  <li>15 g dried red chillis </li>
  <li>4 chopped onions  </li>
  <li>3 tablespoon coriander leaves</li><br>
  <button><a href="reg.php"style="text-decoration: none;">see more</a></button>
</ul>
<div class="leftimage"><img src="img/29.png"></div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

    </div>
    <h3>Chicken Momo</h3>
        </div>
<br><br><br>

       
  
           <div class="footer-bottom">
             <p style="color: #c4c4c4;">@copyright All rights reserved</p>
           </div>
  




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>