<?php

/*
	$handle = @fopen("http://download.finance.yahoo.com/d/quotes.csv?s={$_GET['symbol']}&f=e1l1", "r");
	if ($handle !== FALSE) {
		$data = fgetcsv($handle);
		if ($data !== FALSE && $data[0] !== "N/A")
			print($data[1]);
		fclose($handle);
	}


	//http://download.finance.yahoo.com/d/quotes.csv?s=FB&f=akj
	//

$s = urlencode($_GET['search']);
$url = "http://download.finance.yahoo.com/d/quotes.csv?s={$s}&f=akj";
$handle = fopen($url, 'r');
$row = fgetcsv($handle);
fclose($handle);
*/

header("Content-type: text/xml");

print("<quote symbol='{$_GET['symbol']}'>");

$handle = @fopen("http://download.finance.yahoo.com/d/quotes.csv?s={$_GET['symbol']}&f=akj", "r");
if ($handle !== FALSE){
	$data = fgetcsv($handle);
	if($data !== FALSE){
		print("<price>{$data[0]}</price>");
		print("<high>{$data[1]}</high>");
		print("<low>{$data[2]}</low>");
	}
	fclose($handle);
}
?>

