<html>
<head>
<title>Video Upload </title>
<link rel='stylesheet' href='style.css'/>
</head>
<body>


<?php
include 'connect.php';

?>

<div id='box'>

<form method='post' enctype="multipart/form-data">
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
			 move_uploaded_file($tmp,$random_name.'.'.$type);
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

</body>
</html>
