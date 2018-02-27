<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body>

<div class="container">
  <h2>Result</h2>

<?php
	//รับค่า POST
	
	$thb = $_POST['thb'];
	$typecal = $_POST['typecal'];

	echo "ค่าที่กรอก :".$thb;
	echo "<br>";
	echo "สกุลเงินที่ใช้คำนวณ : ".$typecal;
	echo "<br>";

	//__________01___________

	if ($typecal == "usd") {
		$result = $thb/31.2273;
	}elseif ($typecal == "jpy") {
		$result = $thb/28.9814;
	}elseif ($typecal == "krw") {
		$result = $thb/0.0293;
	}elseif ($typecal == "gbp") {
		$result = $thb/43.3292;
	}elseif ($typecal == "eur") {
		$result = $thb/38.2737;
	}

	echo "Result : ".$result."<br><br>";

	require 'connect.php';

	$sql = "INSERT INTO exch485_history(thb,calculated,currency) VALUES( $thb,$result,'$typecal')";

	$sql_exe = $conn -> query($sql);



	// //__________02__________
	// if ($typecal == "usd") {
	// 	$rete = 31.2273;
	// }elseif ($typecal == "jpy") {
	// 	$rete = 28.9814;
	// }elseif ($typecal == "krw") {
	// 	$rete = 0.0293;
	// }elseif ($typecal == "gbp") {
	// 	$rete = 43.3292;
	// }elseif ($typecal == "eur") {
	// 	$rete = 38.2737;
	// }

	// echo "Result : ".$thb/$rate;

	// //__________03__________
	// switch ($typecal) {
	// 	case 'usd':
	// 		$rete = 31.2273;
	// 		break;

	// 	case 'jpy':
	// 		$rete = 28.9814;
	// 		break;

	// 	case 'krw':
	// 		$rete = 0.0293;
	// 		break;

	// 	case 'gbp':
	// 		$rete = 43.3292;
	// 		break;
		
	// 	case 'eur':
	// 		$rete = 38.2737;
	// 		break;

	// 	default:
	// 		$rete = 0;
	// 		break;
	// }

	// echo "Result : ".$thb/$rate;

?>
<table class="table table-dark"> 
         <thead> 
             <tr> 
                 <th>Price</th> 
                 <th>Exchange</th> 
                 <th>Currency</th> 
                 <th>Datetime</th> 
                 <th>Delete</th> 
             </tr> 
         </thead> 

	<?php


	$sql = "SELECT * FROM exch485_history ORDER BY dateRecord DESC";

	$sql_exe = $conn -> query($sql);

	while($row = mysqli_fetch_assoc($sql_exe)) {

		echo $row['thb'].
		" exchange to ".
		$row['currency'].
		" = ".
		$row['calculated'].
		" ".
		$row['dateRecord'];
	?>
	<a href="delete.php?id=<?php echo $row['recordID'] ?>&thb=<?php echo $row['thb']?>">DETELE</a>

	 <?php  
 
          while ($row = mysqli_fetch_assoc($sql_exe)) { 
           echo "<tbody> 
           <td>".$row['thb']."</td>" 
           ."<td>".$row['calculated']."</td>" 
           ."<td>".$row['currency']."</td>" 
           ."<td>".$row['dateRecord']."</td>" 
           ."<td>"."<a href='delete.php?id=".$row['recordID']."&.thb=".$row['thb']."'>DELETE</a>"."</td></tbody>"; 
 
          } ?> 
     </table>

	<?php
		echo "<br>";
	}

	$conn -> close();
	?>
	</div>
</body>
</html>



