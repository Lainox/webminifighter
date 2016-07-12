<?php 


require '../includes/functions.php';


$user = sanitize($_POST['user']);
$pass = sanitize($_POST['pass']);




$var = createAccount($user, $pass);

if($var == '1')
{
    
	echo '1';
}
else if($var == '2') 
{
	echo '2';
}
else if($var == '3')
{
	echo '3';
}
else if($var == '4')
{
	echo '4';
}
 ?>