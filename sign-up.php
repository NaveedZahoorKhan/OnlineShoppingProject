<?php
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = mysql_connect("localhost", "root", "toor");

$db = mysql_select_db("online_shopping", $connection);
$query = mysql_query("INSERT INTO `login`(`username`, `password`) VALUES ($username,$password)'", $connection);

}
}
?>