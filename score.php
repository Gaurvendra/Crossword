<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }

require_once('db.php');

$score = $_POST['w'];
$email = $_SESSION['email'];
$result = mysql_query("UPDATE `users` SET `score`= '".$score."',`ind`= 1 WHERE `email`= '".$email."'") or die("Cannot connect to database!");
header('location: logout.php');


?>
