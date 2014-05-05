<html>
<head>
<title>My Uploads</title>
</head>
<body>
<?php include 'connect1.php' ?>

<?php include 'functions.php' ?>

<?php include 'titlebar.php' ?>
<h3>Change User Access to Videos</h3>

<?php
if($user_level !=1)
{
header('location:profile.php');
}
?>

<p>
<?php
if(isset($_GET['type']) && !empty($_GET['type'])) 
{
?>
<table>
<tr><td width='150px' >Videos</td><td width='150px'>Options</td></tr>
<?php
$list_query=mysql_query("select id,name from videos");
while($run_list=mysql_fetch_array($list_query))
{
	$v_id=$run_list['id'];
	$v_name=$run_list['name'];
	
?>
<tr><td><?php  echo "<b>".$v_name."</b>"; ?></td><td>
<?php
$query1=mysql_query("select id,username,type,access from users");
while($query=mysql_fetch_array($query1))
{
	$count=0;
	$u_id=$query['id'];
	$u_username=$query['username'];
	$u_type=$query['type'];	
	$u_access=$query['access'];
?>
<tr><td><?php echo $u_username?></td><td>
<?php

	 $arr=explode(',',$u_access);
	 for($x=0;$x<sizeof($arr);$x++)
	 {
	// echo $arr[$x]." ".$v_id." "	;	
	 if($arr[$x]==$v_id)
	 {
	 //echo "HI";
	 $count=1;
	 }
	 }
	 
	 if($count==1)
	 {
	 echo "<a href='access.php?u_id=$u_id&type=$u_type&v_id=$v_id&count=1'>Deactivate</a>";
	 }
	else
	 {
	 echo "<a href='access.php?u_id=$u_id&type=$u_type&v_id=$v_id&count=0'>Activate</a>";
	 }
?>
</td></tr>
<?php
}
?>
<?php
}
?>
</table>
<?php	
}
?>
</p>
</body>
</html>