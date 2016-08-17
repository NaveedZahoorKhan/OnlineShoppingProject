<?php
include('login.php'); // Includes Login Script
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Team Express</title>
<link rel="shortcut icon" href="images/favicon.ico">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="js/window loading.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>  
<header>
 <div class="header-area">
  <div class="container">
   <div class="row">
    <div class="col-md-3">
     <div class="logo">
      <a href="#"><img src="images/logo.png" alt="team express" class="img-responsive"></a>
     </div>
    </div>
    <div class="col-md-6"> 
      <form class="navbar-form navbar-left" role="search">
     <div class="form-group">
       <input type="text" class="form-control" placeholder="Search">
     </div>
       <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
     </div>
    <div class="col-md-3"> 
      <div class="form">
    <?php if(!isset($_SESSION['login_user'])){?>	

       <div class="login-tab">
        <h3>Login</h3>
         <div class="login-form">
          <form action="" method="post">
	     <label>UserName :</label>
	     <input id="name" name="username" placeholder="username" type="text">
	     <label>Password :</label>
	     <input id="password" name="password" placeholder="**********" type="password">
	     <input name="submit" type="submit" value=" Login ">
        </form>
	     <p><?php echo $error; ?></p>
       </div>
       </div>    
     <?php
     }
	 else
	 {
     ?>
     <div class="login-tab">
     <h3><?= $_SESSION['login_user']; ?></h3>
     </div>
     </div>
	 <?php 
	 }
	 ?>
     <div class="form">
      <?php if(!isset($_SESSION['login_user'])){?>
      <div class="login-tab">
       <h3>Register</h3>
        <div class="register-form">
       <form action="" method="post">
        <label>Username:</label><input type="text" name="username"/>
        <label>password:</label><input type="password" name="password"/>
        <input type="submit" name="submit"/>
       </form>
       <p><?php echo $error; ?></p>	
      </div>
      </div>
	 <?php } 
	 else
	 {
	  ?>
      <div class="login-tab">
      <h3><a href="logout.php">Logout</a></h3>
      </div>
    </div>

   <?php } ?>
         </div>
   </div>
  </div>
 </div>
</header>
<div class="main-nav">
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
   </div>                                                                                                          
   <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
    <div class="container">
     <ul class="nav navbar-nav">
      <li><a href="index.php">HOME</a></li>
      <li><a href="women-clothing.php">WOMEN</a></li>
      <li><a href="men-clothing.php">MEN</a></li>
      <li><a href="health-beauty.php">HEALTH & BEAUTY</a></li>
      <li><a href="home-garden.php">HOME & GARDEN</a></li>
      <li><a href="book-store.php">BOOK'S & STORE </a></li>
      <li><a href="bags-shoes.php">BAG'S & SHOES</a></li>
      <li><a href="health-beauty.php">HEALTH & BEAUTY</a></li>
      <li><a href="kids-baby.php">KIDS & BABY</a></li>
     </ul>
    </div>
   </div>
  </nav>
 </div>
<main class="content-div">
 <div class="container">
  <div class="categories">
   <h1>Categories</h1>
   <ul>
    <li id="women-sm-image"><a href="women-clothing.php">Women's Clothing</a></li>
    <li id="men-sm-image"><a href="men-clothing.php">Men's Clothing</a></li>
    <li id="health-sm-image"><a href="health-beauty.php">Health & Beauty</a></li>
    <li id="home-sm-image"><a href="home-garden.php">Home & Garden</a></li>
    <li id="book-sm-image"><a href="book-store.php">Books's Store</a></li>
    <li id="bags-sm-image"><a href="bags-shoes.php">Bag's & Shoes</a></li> 
    <li id="kids-sm-image"><a href="kids-baby.php">Kids & Baby</a></li>  
   </ul>
  </div>
  <div class="banner">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
     <div class="item active">
      <img src="images/banner-img-3.jpg" alt="">
     <div class="container"> 
     <div class="carousel-caption">
     </div>
    </div>
   </div>
   <div class="item">
     <img src="images/banner-img-2.jpg" alt="">
   <div class="container"> 
   <div class="carousel-caption">
   </div>
  </div>
 </div>
</div>
</div>
</div>
<div class="main-right">
 <a href="#"><img src="images/main-right.jpg" class="img-responsive"></a>
 </div>
</div>
</main>
<div class="heading-area">
 <h1>Men Top & Tees</h1>
</div>
<section class="product-pages">
 <div class="container">   
  <div class="product-area"> 
  <?php
   include("connection.php");
   $result = mysql_query("SELECT * FROM `top_tees`"); 
    while($extract = mysql_fetch_array($result)){
     echo  "<div class=product-product>";
     echo  "<a href='",$extract['link'],"'.><img src='",$extract['image'],"'/></a>";
     echo  "<h1><a href='",$extract['link'],"'>",$extract['description'],"</a></h1>";
     echo  "<h3><a href=''>Shipping: US $".$extract['price']."</a></h3>";
     echo  "</div>";
   }
?>
   </div>
  </div>
 </div>
</section>            
<footer>
	<div class="container">
    	<div class="row">
        	<div class="col-md-3">
            	<div class="f-logo">
                	<a href="index.html"><img src="images/logo.png" alt="Team express" class="img-responsive"></a>
                </div>
            </div>
        	<div class="col-md-9">
            	<div class="footer-nav">
                	<ul>
                    	<li><a href="about-us.html">Home</a></li>
                    	<li><a href="our-members.html">Men Clothing</a></li>
                    	<li><a href="services.html">Women Clothing</a></li>
                    	<li><a href="case-studies.html">Bags & Shoes</a></li>
                    	<li><a href="get-started.html">Kids & Baby</a></li>
                  	</ul>
                </div>
            </div>
        </div>
        <div class="row">
         <div class="col-md-10">
          <div class="address-div">
           <ul>
            <li class="location">560 W Lake St,<br> Chicago,IL 60661</li>
            <li class="phone">(312)906-2366</li>
            <li class="email"><a href="#">info@teamexpress.com</a></li>
           </ul>
          </div>
         </div>
        	<div class="col-md-2">
            	<div class="social-div">
                	<a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.gif" alt=""></a>
                	<a href="https://www.linkedin.com/" target="_blank"><img src="images/linkedin.gif" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$('#myCarousel').carousel({
		interval: 3000,
		cycle: true
	});
</script>
</body>
</html>