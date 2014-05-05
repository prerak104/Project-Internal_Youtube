<html>
<head>
<title>TESTING</title>
</head>
<body>
<?php include 'connect1.php' ?>

<?php include 'functions.php' ?>

<?php include 'titlebar.php' ?>

<?php


$x=1;

$query=mysql_query("update users set access=concat(access,',$x') where id=6");





?>


</body>

</html>