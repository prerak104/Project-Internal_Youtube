<html>
<head>
<title>User Page</title>
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
echo "HI ".$username;

$query=mysql_query("select * from users where id='$my_id'");

while($run= mysql_fetch_array($query))
{

echo "<br/><br/>";
$arr=explode(',',$run['access']);

for($x=0;$x<sizeof($arr);$x++)
{
//echo $arr[$x]."<br/>";

$v_id=$arr[$x];

//echo $v_id."<br/>";

$p=mysql_query("select * from videos where id='$v_id'");
while($q=mysql_fetch_array($p))
{
$video_url= $q['url'];
$video_name=$q['name'];
?>
<a href='view.php?video=<?php echo $video_url; ?>'> 
		<div id='url'>

		<?php echo $video_name; ?> 

		</div> 
		</a>
		<?php
		}
	?>
	</div>


<?php

}
?>



<?php
}
?>


</body>

</html>