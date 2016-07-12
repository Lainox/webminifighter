<?php

function connectBD(){
	$serverName = "CLAUDIO-PC";

$connectionInfo=array('Database'=>'MiniFighter');

$conexion = sqlsrv_connect($serverName,$connectionInfo);
if($conexion == false) {
	echo "Error en la conexion";
	die(print_r(sqlsrv_errors(),TRUE));

}
else
{
	return $conexion;
}
	
}


function createAccount($pUserID, $pUserPassword) {
	$conexion = connectBD();		
	if (!empty($pUserID) && !empty($pUserPassword)) {
		
		$uLen = strlen($pUserID);
		
		$pLen = strlen($pUserPassword);		
		
		$sql = "SELECT UserID FROM UserInfo WHERE UserID='$pUserID'";
		$query = sqlsrv_query($conexion, $sql) or die( print_r( sqlsrv_errors(), true));
		$data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
			
		if ($uLen < 5 || $uLen > 15) {
			return '2';
		}elseif ($pLen < 6) {
			return '3';
		}elseif ($data['UserID'] == $pUserID) {
			return '4';
		}else {

			$sql = "INSERT INTO UserInfo (UserID, UserPassword, CN, NickName) VALUES ('" .$pUserID. "', '" .md5($pUserPassword). "', 0, 0);";
			$query = sqlsrv_query($conexion, $sql) or die( print_r( sqlsrv_errors(), true));
			
			if ($query) {
				
				session_start();
				$_SESSION['user'] = $pUserID;
				return '1';

			}	
		}
		sqlsrv_free_stmt($query);
		sqlsrv_close($conexion);
	}	
	return false;
}

function hashPassword($pPassword, $pSalt1="2345#$%@3e", $pSalt2="taesa%#@2%^#") {
	return sha1(md5($pSalt2 . $pPassword . $pSalt1));
}

function loggedIn() {
	if (isset($_SESSION['loggedin']) && isset($_SESSION['username'])) {
		return true;
	}
	
	return false;
}

function logoutUser() {
	unset($_SESSION['username']);
	unset($_SESSION['loggedin']);
	
	return true;
}

function validateUser($pUserID, $pUserPassword) {
	$conexion = connectBD();
	$pass = md5($pUserPassword);
	$sql = "SELECT * FROM UserInfo WHERE UserID ='$pUserID'";
	$query = sqlsrv_query($conexion, $sql) or die( print_r( sqlsrv_errors(), true));
//	$data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
	if($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
		if($row["UserPassword"] == $pass){
			session_start();
			$_SESSION['user'] = $pUserID;
			$_SESSION['loggedin'] = true;
			return '1';
		}
		else{
			return '2';
		}
	}
	sqlsrv_free_stmt($query);
	sqlsrv_close($conexion);
	return false;
}

function sanitize($data) {
	$data = trim($data);
	$data = htmlspecialchars($data);
	$data = stripslashes($data);
	mysql_real_escape_string($data);
    return $data;
}

?>