<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Back Office</title>
<link rel="shortcut icon" href="images/favicon.ico">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
    <a href="#"><img src="images/logo.png" alt="team express" class="img-responsive"></a>
   </div>
      <div class="col-md-9"> 
       <form class="navbar-form navbar-left" role="search">
     <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
     </div>
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
     </form>
 
   <div class="form">
    <div class="login-tab">
     <h3><i><?php echo $login_session; ?></i></h3>
  
  </div>
 </div>
</div>
   <div class="form">
    <div class="login-tab">
     <i><a href="logout.php">Log Out</a></i>		
  </div>
 </div>
</div>
</div>
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
      <li><a href="about-us.html">ABOUT US</a></li>
      <li><a href="our-members.html">OUR MEMBERS</a></li>
      <li><a href="services.html">SERVICES</a></li>
      <li><a href="case-studies.html">CASE STUDIES</a></li>
      <li class="get-started"><a href="get-started.html">GET STARTED</a></li>
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
    <li id="women-sm-image"><a href="#">Women's Clothing</a></li>
    <li id="men-sm-image"><a href="#">Men's Clothing</a></li>
    <li id="men-sm-image"><a href="#">Phone's & Accesories</a></li>
    <li id="men-sm-image"><a href="#">Computer's & Office </a></li>
    <li id="men-sm-image"><a href="#">Books's Store</a></li>
    <li id="men-sm-image"><a href="#">Bag's & Shoes</a></li> 
    <li id="men-sm-image"><a href="#">Toy's Kids & Baby</a></li>  
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
 <div class="container">
  <h1>All Features</h1>
 </div>
</div>
<section class="product-pages">
 <div class="container">   
    <div class="product-area">
    
	   <?php
 $con = mysql_connect('localhost','root','');
 
 mysql_select_db('chatbox',$con);
  
 $result = mysql_query("SELECT * FROM `logs` ORDER by id DESC"); 
 while($extract = mysql_fetch_array($result)){
   echo  "<div class=product-product>";
   echo  "<a href='https://www.google.com'><img src='",$extract['msg'],"' /></a>";
   echo  "<h1><a href=''>",$extract['username'],"</a></h1>";
   echo  "<h3><a href=''>Shipping: US $15 /piece</a></h3>";
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
                	<a href="index.html"><img src="images/f-logo.gif" alt="The Back Office" class="img-responsive"></a>
                </div>
            </div>
        	<div class="col-md-9">
            	<div class="footer-nav">
                	<ul>
                    	<li><a href="about-us.html">ABOUT US</a></li>
                    	<li><a href="our-members.html">OUR MEMBERS</a></li>
                    	<li><a href="services.html">SERVICES</a></li>
                    	<li><a href="case-studies.html">CASE STUDIES</a></li>
                    	<li><a href="get-started.html">GET STARTED</a></li>
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
                    	<li class="email"><a href="mailto:info@backofficecooperative.com">info@backofficecooperative.com</a></li>
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