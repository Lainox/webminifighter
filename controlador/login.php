<?php 


require '../includes/functions.php';


$user = $_POST['user'];
$pass = $_POST['pass'];




$var = validateUser($user,$pass);

if($var == '1')
{
    
	echo '1';
}
else if($var == '2') 
{
	echo '2';
}

 ?>