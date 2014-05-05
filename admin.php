<html>
<head>
<title>Profile Panel</title>
</head>
<body>
<?php include 'connect1.php' ?>

<?php include 'functions.php' ?>

<?php include 'titlebar.php' ?>
<h3>Admin Panel</h3>

<?php

if(!loggedin())
{
header('location:1.php');
}



if($user_level !=1)
{
header('location:profile.php');
}
?>


<p>
||||
<a href='admin.php?type=user'>User Settings</a> ||||
<!---<a href=''>Level Settings</a>					||||-->
<a href='index1.php'>Upload a new video</a>		||||
<a href='uploads.php?type=user'>Change User Access</a> ||||
<a href='admin.php?del=user'>Delete Video(s)</a>||||
</p>  


<p>
<?php
if(isset($_GET['type']) && !empty($_GET['type'])) 
{
?>
<table>
<tr><td width='150px' >Users</td><td width='150px'>Options</td></tr>
<?php
$list_query=mysql_query("select id,username,type,user_level from users");
while($run_list=mysql_fetch_array($list_query))
{
	$u_id=$run_list['id'];
	$u_username=$run_list['username'];
	$u_type=$run_list['type'];	
	$u_level=$run_list['user_level'];

?>
<tr><td><?php echo $u_username ?></td><td>
<?php
if($u_type=='a')
{
	 echo "<a href='option.php?u_id=$u_id&type=$u_type'>Deactivate</a>";
}
else{
	echo "<a href='option.php?u_id=$u_id&type=$u_type'>Activate</a>";
	}
?>

</td></tr>
<?php
}
?>

</table>

<?php	
}

?>
</p>



<p>
<?php
if(isset($_GET['del']) && !empty($_GET['del'])) 
{
?>
<table>
<tr><td width='150	px' ><b>Videos</b></td><td width='150px'><b>Delete</b></td></tr>
<?php
$list_query=mysql_query("select * from videos");


while($run_list=mysql_fetch_array($list_query))
{
	$v_id=$run_list['id'];
	$u_username=$run_list['name'];

?>
<tr><td><?php echo $u_username ?></td><td>
<?php

	 echo "<a href='del.php?v_id=$v_id'>Delete</a>";
	 
?>

</td></tr>
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