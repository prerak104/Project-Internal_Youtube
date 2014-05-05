<html>
<head>
<title>Video Playback</title>
<link rel='stylesheet' href='style.css'/>

<link href="http://vjs.zencdn.net/4.5/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.5/video.js"></script>
 

</head>
<body>


<?php


include 'connect1.php';
include 'functions.php';
include 'titlebar.php';
?>

<div id='box'>

<?php
if(!loggedin())
{
header('location:1.php');
}
$video = $_GET['video']; 
 echo "<br/>"."<br/>"."<br/>"."<br/>";
?>
<video id="my_video_1" class="video-js vjs-default-skin" controls
 preload="auto" width="640" height="264" poster="my_video_poster.png"
 data-setup="{}">
 <source src="videos/<?php echo $video;?>" type='video/mp4'>

</video>
</div>


</body>
</html>
