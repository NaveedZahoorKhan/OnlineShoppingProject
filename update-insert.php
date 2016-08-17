<?php
 $id = $_REQUEST['id'];
 $description = $_REQUEST['description'];
 $image = $_REQUEST['image'];
 $link = $_REQUEST['link'];
 $price = $_REQUEST['price'];
   
   echo $id;
 $con = mysql_connect('localhost','root','');
 
 mysql_select_db('online_shopping',$con);
 mysql_query("INSERT INTO `top_tees` VALUES('$id','$description','$image','$link',$price)");
  
  $result = mysql_query("SELECT * FROM `top_tees` ORDER by id DESC"); 

  while($extract = mysql_fetch_array($result)){
	 
  echo $extract['id'] . ": " . $extract['description'] . ": " . $extract['image'] . ": " . $extract['link'] . ": " . $extract['price'] .  "<br>";
  
  }
