<?php
function startConnect(){
	$connect=new mysqli("127.0.0.1","root","","tecweb");
	if($connect->connect_error){
		echo "Errore di connessione: " . $connect->connect_error;
		$connect = null;
	}
	return $connect;
}

function closeConnect($connect){
	if(isset($connect)){	
		$connect->close();
	}
}
?>
