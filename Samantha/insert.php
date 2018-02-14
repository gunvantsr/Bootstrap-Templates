<?php
	$con = mysql_connect("localhost","root","");
	mysql_select_db("demodb");

	$name = $_POST['txtname'];
	$contact = $_POST['txtcontact'];
	$address = $_POST['txtaddress'];

	$cmd = insert into table1 ()
?>