<?php 
	
	$r=mysql_connect("localhost","root","");
	if($r==false)
		die("Step 1 Failed");
	
	$r=mysql_select_db("weblinedb");
	if($r==false)
		die("Step 2 Failed");
?>
