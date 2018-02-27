<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<style>
		input.form-control {
			width: 200px;
			margin-left: auto;
   			margin-right: auto;
		}
	</style>

</head>
<body>
	<div class="container">
		<div class="col-md-6">


		<form action="calculate-result.php" method="post" style="text-align: center;">

		<div class="panel panel-info" style="margin:10% 10%;">


		<h3 class="panel-heading">คำนวณอัตราการแลกเปลี่ยน</h3>

		<br>

		<label class="panel-body">จำนวนเงินไทย</label><br>
		<input class="form-control" placeholder="กรุณาใส่ค่า" aria-label="กรุณาใส่ค่าเป็นตัวเลข" aria-describedby="basic-addon2" type="text" name="thb">
		<br><br>


		<label for="ex1" >สกุลเงินที่ต้องการคำนวณ</label>
		<br><br>
		<select class="btn btn-default dropdown-toggle" name="typecal" style="width: 200px;">
			<option value="usd">USD</option>
			<option value="jpy">JPY</option>
			<option value="krw">KRW</option>
			<option value="gbp">GBP</option>
			<option value="eur">EUR</option>
		</select>

		<br><br><br>

		<button type="submit" class="btn btn-primary">Submit</button>

	</form>
	<br><br><br>

	</div>
	</div>
	</div>

</body>
</html>