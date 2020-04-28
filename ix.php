<html>
<head>

<title>project</title>
</head>
<body>
	
	<?php
include 'class/conn.php';
$conn = new conn();
$conn = $conn->createConnection();
if($conn){
	echo 'connection is get';
}
else{
	echo 'connection not got';
}
	?>

</body>

</html>