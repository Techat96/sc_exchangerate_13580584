<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body>
	<div class="container" style="text-align: center;">
		<div class="panel panel-info" style="margin:10% 10%;">
			<br>
<?php

	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];


	$sql = "DELETE FROM exch485_history WHERE recordID = $id";

	require 'connect.php';

	$sql_exe = $conn -> query($sql);

	if($sql_exe) {
		echo "Delete complete <br>";
		echo "Delete ID".$id;
		echo "THB".$thb;
		header("Refresh:,url=index.php",true,5);
	}else{
		echo "Delete failed";
	//	echo $sql;
	}

?>

<br>
<br>

</div>
<br>
<a href="index.php?">BACK</a>
</div>

</body>
</html>





