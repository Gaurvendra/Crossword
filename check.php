<?php
require_once('db.php');
session_start();
$answer = $_POST['ans'];
$question = $_POST['q'];

$email = $_SESSION['email'];
$sql = mysql_query("SELECT * FROM `solutions` WHERE `question`= '".$question."'") or die("Cannot connect to dfgjhfcatabase!");
$row = mysql_fetch_array($sql);

$solution = strtolower($row['solution']);

if ($solution === strtolower($answer)) {
    $result = mysql_query("UPDATE `checkans` SET `".$question."`= 1,`score` = `score`+ 50 WHERE `email`= '".$email."'") or die("Cannot connect to datjnnm,abase!");
       header('location:dashboard.php');
}
else{
     header('location:dashboard.php');
}
