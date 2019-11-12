
<?php
require_once('db.php');
$name = $_POST['Name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$result = mysql_query("SELECT * FROM `users` WHERE `email`= '".$email."' ") or die("Cannot connect to database!");

$user_count = mysql_num_rows($result);

if ($user_count==0) {
    $sql = mysql_query("INSERT into `users` (`email`, `password`, `name`, `contact`, `registration` ) values('".$email."','".$password."','".$name."','".$contact."','success')")or die("Cannot connect1 to database!");
    $sql1 = mysql_query("INSERT into `checkans` (`email`) values('".$email."')")or die("Cannot connect2 to database!");
   echo $sql;

    if ($sql) {
        session_start();
        $_SESSION['name'] = $name;
         $_SESSION['email'] = $email;
        $_SESSION['success'] = true;
        
        header('location:dashboard.php');
    }
} else{
    echo "The Email Id is already registered !!!!";
}

?>


