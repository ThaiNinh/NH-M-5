<?php
	session_start();
	$conn = new mysqli('localhost', 'root', '', 'xustorem');
	if(!$conn){
		die("Fatal Error: Connection Error!");
	}
	mysqli_query($conn,'set names utf8');
?>