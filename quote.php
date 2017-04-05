<?php
/*
	$handle = @fopen("http://download.finance.yahoo.com/d/quotes.csv?s={$_GET['symbol']}&f=e1l1", "r");
	if ($handle !== FALSE) {
		$data = fgetcsv($handle);
		if ($data !== FALSE && $data[0] !== "N/A")
			print($data[1]);
		fclose($handle);
	}
*/

	//http://download.finance.yahoo.com/d/quotes.csv?s=FB&f=a

$s = urlencode($_GET['search']);
$url = "http://download.finance.yahoo.com/d/quotes.csv?s={$s}&f=a";
$handle = fopen($url, 'r');
$row = fgetcsv($handle);
fclose($handle);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Bla</title>
</head>
<body>
	The current price of a <?php echo (htmlspecialchars($_GET['search']))?> stock is $ <?php echo ($row[0]) ?>. 
</body>
</html>
