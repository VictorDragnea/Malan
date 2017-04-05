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
	//

$s = urlencode($_GET['search']);
$url = "http://download.finance.yahoo.com/d/quotes.csv?s={$s}&f=a";

$cSession = curl_init();
curl_setopt($cSession,CURLOPT_URL,$url);
curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cSession, CURLOPT_HEADER, false);
$result=curl_exec($cSession);
curl_close($cSession);
echo $result;



$handle = fopen($url, 'r');
$row = fgetcsv($handle);
var_dump($row);
fclose($handle);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bla</title>
</head>
<body>
	The current price of <?= htmlspecialchars($_GET['search'])?> is $ <?= $row[0] ?>. 
</body>
</html>
