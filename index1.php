<html>
<head>
<title>Video Upload System</title>
<link rel='stylesheet' href='style.css'/>
</head>
<body>


<?php

include 'connect1.php';
include 'functions.php';
include 'titlebar.php';
?>
<?php
if($user_level !=1)
{
header('location:profile.php');
}
?>
<div id='box'>

<form method='post' enctype='multipart/form-data'>
	<?php
		
		
		
		if(isset($_FILES['video']))
		{	
			
			$name=$_FILES['video']['name'];
			echo $name.'<br/>';
			$type= explode('.',$name);
			$type= end($type);
			echo $type; 
			
			$size=$_FILES['video']['size'];
			$random_name= rand();
			$tmp=$_FILES['video']['tmp_name'];
			
			if($type!='mp4' && $type!='MP4' && $type!='flv')
			{
				$message="Bad Format!";
			}
			else
			{
			 move_uploaded_file($tmp,'videos/'.$random_name.'.'.$type);
			// echo "BYE".$name;
			 mysql_query("INSERT INTO videos VALUES('','$name','$random_name.$type')");
			 $message="Successfully Uploaded";
				
			 }
			 echo "$message <br/><br/>"; 
		}

	
	
	
	?>
	Select Video: <br/>
	<input type='file' name='video' />
	<br/><br/>
	<input type='submit' value='Upload'/>

</form>
</div>



<div id='box'>
   
   <h2>	All Uploads</h2>
   <?php
	
	$query=mysql_query("SELECT * FROM videos");
	
	while($run = mysql_fetch_array($query))
	
	{
	
	$video_id=$run['id'];
	$video_name=$run['name'];
	$video_url=$run['url'];
	//echo $video_url;
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
</body>
</html>