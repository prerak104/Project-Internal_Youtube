<html>
<head>
<title>Profile Panel</title>
</head>
<body>
<?php include 'connect1.php' ?>

<?php include 'functions.php' ?>

<?php include 'titlebar.php' ?>

<?php

if(!loggedin())
{
header('location:1.php');
}
?>
<h3>Profile </h3>





<p>You are logged in as <b><?php echo $username?></b>[<?php echo $level_name;?>]</p>


<p>
<?php
if($user_level==1)
{
echo "<a href='admin.php'>Admin Panel</a>";
}



?>
</p>
</body>
</html>