<?php 
session_start();

if(!$_SESSION['user'])
{
	header('Location: auth.php');
} else {
	echo "hai " . $_SESSION['user']['nama'];
}

?>