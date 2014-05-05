<?php

include 'connect1.php';
include 'functions.php';


$v_id=$_GET['v_id'];



	
mysql_query("delete from videos where id='$v_id'");




//mysql_query("UPDATE users set access=replace(access,'$v_id','') where id='$u_id'");
header('location:admin.php?del=user');


?>