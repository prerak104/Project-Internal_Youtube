<html>
<head>
<title>LOGIN  -  Internal Youtube</title>
</head>
<body>
<?php include 'connect1.php' ?>

<?php include 'functions.php' ?>

<?php include 'titlebar.php' ?>


<h3>Login Here:</h3>

<form method='post'>
<?php
	
if(isset($_POST['submit']))
{

$username=$_POST['username'];	
$password=md5($_POST['password']);
if(empty($username) or empty($password))

{
	echo "<p>Field Empty !</p>";
}
else
{
	 $check_login = mysql_query("select id,type from users where username='$username' and 
	 password='$password'");
	 
	 if(mysql_num_rows($check_login)==1)
	 {
			$run=mysql_fetch_array($check_login);
			$user_id=$run['id'];
			$type=$run['type'];
			
			if($type=='d')
			{
			
			  echo "<p>Your account is deactivated by the site admin</p>";
			}
			else{
				
				$_SESSION['user_id']=$user_id;
				//echo $user_id;
				header('location:test101.php?type=$user_id');  
			}
		 
	 }
	 else{
	 
		echo "<p>Wrong Username or Password</p>";
	 }
	
}	

}

?>

User Name:</br>
<input type='text' name='username'/>
<br/><br/>
Password: <br/>
<input type='password' name='password'/>
<br/><br/>
<input type='submit' name='submit' value='Login'/>
</form>
	 

</body>
</html> 