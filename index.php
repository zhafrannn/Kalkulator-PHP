<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
</head>
<body>
	<form action="Kalkulator.php" method="post">

		<h1>Kalkulator Sederhana</h1><hr>
		<input type="text" name="num1"/><br>
		<select name="operasi">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="/">/</option>
			<option value="*">*</option>
		</select>
		<input type="text" name="num2"/><br>
		<input type="submit" value="hitung">
	</form>

</body>
</html>