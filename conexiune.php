<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$db="cv-uri";

	$conexiune = mysqli_connect($hostname,$username,$password)
	or die ("Unable to connect to mysql");

	$baza=mysqli_select_db($conexiune,$db);
	?>