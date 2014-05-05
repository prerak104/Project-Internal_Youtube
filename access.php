<?php

include 'connect1.php';
include 'functions.php';


$u_id=$_GET['u_id'];
$type=$_GET['type'];
$v_id=$_GET['v_id'];

//echo $u_id;


$count=$_GET['count'];

if($count==1)

{
//echo "Deactivating";
mysql_query("UPDATE users set access=replace(access,'$v_id','') where id='$u_id'");
mysql_query("UPDATE users set access=replace(access,',,','') where id='$u_id'");
header('location:uploads.php?type=user');



}

else if($count==0)

{

//echo "Activating";
mysql_query("UPDATE users set access=CONCAT(access,',$v_id') where id='$u_id'");
header('location:uploads.php?type=user');




}


?>