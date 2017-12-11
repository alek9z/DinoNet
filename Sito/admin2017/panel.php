<?php
	
	include_once ($_SERVER['DOCUMENT_ROOT'] ."/connect.php");
	include_once ($_SERVER['DOCUMENT_ROOT'] ."/classi/UserAdmin.php");	

	session_start();

	if(isset($_SESSION['user'])){
?>

	<!DOCTYPE html>
	<html xml:lang="it-IT" lang="it-IT">
	<head>
		<title>TecWeb</title>
		<meta name="description" content="Descrizione">
		<meta name="author" content="Alessandro Zangari, Cristiano Tessarolo, Matteo Rizzo">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="HTML, CSS, XML, JavaScript">
		<link rel="stylesheet" href="../css/index.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>

	<!-- Body -->

	<body>

	<?php include_once('../loading.php') ?>

	<?php include_once('menuadmin.php') ?>

	<div id="main" class="main">


	<!-- Content -->


	<!-- inclusione pagina da visualizzare -->

	<?php 
		if(isset($_GET["id"])){
			switch ($_GET["id"]) {
				case 'home':
					include_once('home.php');
					break;
				case 'user':
					include_once('user/user.php');
					break;
				case 'dino':
					include_once('dinosaur/dinosaur.php');
					break;
				case 'article':
					include_once('article/article.php');
					break;					
				case 'logout': default:
					include_once('logout.php');
					break;
			}
		}
		else{
			include_once('home.php');
		}
	?>

	<!-- /inclusione pagina da visualizzare -->


	<!-- /Content -->


	<?php include_once('../tothetop.php') ?>

	</div>

	<script>
	// Script to open and close sidebar
	function open_menu() {
		document.getElementById("sidebar").style.display = "block";
		document.getElementById("overlay").style.display = "block";
	}
	
	function close_menu() {
		document.getElementById("sidebar").style.display = "none";
		document.getElementById("overlay").style.display = "none";
	}
	</script>

	</body>

	<!-- /Body -->

	</html>

<?php
	}
	else{
		
		header("Location: http://". $_SERVER['HTTP_HOST']."/error.php");
		exit();
	}
?>