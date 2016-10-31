<DOCTYPE html>
<html>
<head>
<title>form2</title>
<?php
$cars= $_POST["cars"];
$yes= $_POST["yes"];
$text =$_POST["text"];
$password= $_POST["password"];
$passwordc= $_POST["passwordc"];
$email= $_POST["email"];
$date= $_POST["date"];


?>
</head>
<body>
<p><?php 
 if($password!=$passwordc){
	 echo "Passwords don't match";
 }

 ?></p>
<p><?php echo $cars ?></p>
<p><?php echo $yes ?></p>
<p><?php echo $text ?></p>
<p><?php echo $password ?></p>
<p><?php echo $passwordc ?></p>
<p><?php echo $email ?></p>
<p><?php echo $date ?></p>
<p>
 <?php

    

    $domains = array('gmail.com');

    $pattern = "/^[a-z0-9._%+-]+@[a-z0-9.-]*(" . implode('|', $domains) . ")$/i";

    if (preg_match($pattern, $email)) {
        echo 'valid';
    } else {
        echo 'not valid';
    }
    ?>
	</p>
</body>
</html>