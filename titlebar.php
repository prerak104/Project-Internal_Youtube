<div

<?php
if(loggedin())
{
?>
<a href='1.php'></a>	|
<a href='test101.php'>Home</a>  |
<a href='profile.php'>Profile</a>  |
<a href='logout.php'>Log Out</a>	|
 
<?php
}else
{
?>
<a href='test101.php'></a>	|
<a href='1.php'>Home</a>  |
<a href='login.php'>Log in</a>  |
<a href='register.php'>Register</a> |
<?php
}
?>
</div>