<?php
	$db = new mysqli("localhost","root","");

	$sql = "create database hotel3";
	$query = $db->query($sql);
	if($query){
		echo "database berhasil di buat";
	}
	else{
		echo "database gagal dibuat",$db->error;
	}
?>