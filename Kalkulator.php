<?php
	if (isset($_POST)) {
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$operasi= $_POST['operasi'];
		switch ($operasi) {
			case '+':
				$hasil= $num1+$num2;
				echo "<b>Hasilnya</b> $hasil";
				break;


			case '+':
				$hasil= $num1+$num2;
				echo "<b>Hasilnya</b> $hasil";
				break;
			case '-':
				$hasil= $num1-$num2;
				echo "<b>Hasilnya</b> $hasil";
				break;

			case '*':
				$hasil= $num1*$num2;
				echo "<b>Hasilnya</b> $hasil";
				break;

			case '/':
				$hasil= $num1/$num2;
				echo "<b>Hasilnya</b> $hasil";
				break;

			default:
				echo "Salah input";
				break;
		}
		
	}
?>