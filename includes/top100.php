
	<?php 
	include('includes/config.php');
		$sql ="select a.UserID, b.Experience, b.userlevel  from userinfo as a , UserInfoVariable as b where a.userindex=b.userindex ORDER BY b.Experience DESC;"; //30
	$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
$count=0;

echo "<table id='tabla2'><tr><th>Número</th><th>UserID</th><th>Level</th><th>Experience</th></tr>";

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)  and $count<100) {
	 
 	  $count +=1;
      echo "<div id='list'><tr><td><strong>".$count."</strong></td><td><strong>".$row['UserID']."</strong></td><td><strong>".$row['userlevel']."</strong></td><td><strong>".$row['Experience']."</strong></td></div><br />";
}
echo "</table>";
sqlsrv_free_stmt( $stmt);



	 ?>
