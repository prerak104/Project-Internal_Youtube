<?php

include 'connect1.php';
include 'functions.php';


$u_id=$_GET['u_id'];
$type=$_GET['type'];

if($type=='a')
{
	mysql_query("UPDATE users set type='d' where id='$u_id'");
	header('location:	admin.php?type=user');
}

else if($type=='d')
{
	
mysql_query("UPDATE users set type='a' where id='$u_id'");
header('location:	admin.php?type=user');
}

?>