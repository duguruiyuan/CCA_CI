<?php
require_once('init.php');
$email = $_POST['email'];

$sql = "SELECT * FROM cca.org WHERE account =:account";

$query = $conn->prepare($sql);
$query->execute(array(':account' => $email));


if ( $query->rowCount()) {
		
	
	}
else {
	
	
	}
?>