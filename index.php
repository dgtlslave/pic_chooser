<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Start</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="" />
	<link rel="icon" href="favicon.png"/>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/style.css" />

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<?php
	$row = '<div class="row"></div>';

	echo '<pre>';
	print_r ($_POST);
	echo '</pre>';



	function colMaker($c) {
		$col = '<img class="col" src="img/capture.jpg" alt="Paliament Aqua">';
		$col_array = [];

		for ($i=0; $i < $c; $i++) {
			if ($c > 0) {
				array_push($col_array, $col); // Записать в архив !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			} else if ($c <= 0) {
				echo 'Zero row selected!';
			}
			// foreach ($col__array as $value) {
			// 	echo $value;
			// }
		}
		return $col_array;
	}

	$arr = [];
	$arr = colMaker(5);

	 // foreach ($arr as $value) {
	 // 	echo $value;
	 // }

	 // function rowMaker($r, $ar_r) {
	 //     // $col = '<img class="col" src="img/capture.jpg" alt="Paliament Aqua">';
	 //   //  $row = '<div class="row">'.$ar_r  .'</div>';
	 //   $x = implode('', $ar_r);
	 //   for ($i=0; $i < $r; $i++)
	 //   {
	 //       if ($r > 0) {
	 //         echo '<div class="row">'.$x.'</div>';
	 //       } else if ($r <= 0) {
	 //         echo 'Zero row selected!';
	 //       }
	 //     }
	 //   }

	function rowMaker($r, $ar_r) {
		$result = '';

		foreach ($ar_r as $value) {
			$result .= $value;
		}

		return str_repeat('<div class="row">' . $result . '</div>', $r);
	}

	echo rowMaker($_POST['row'], $arr);
	colMaker($_POST['col']);
?>

<body>
<img src="" alt="">
	<form action="index.php" name="form" method="POST">
		<label for="row">Row q-ty:</label>
		<input type="text" name="row">
		<label for="col">Column q-ty:</label>
		<input type="text" name="col">

		<button type="submit">Go</button>
		<!-- <input type="submit" name="submit" value="go"> -->
	</form>


</body>
</html>
