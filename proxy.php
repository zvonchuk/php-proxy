<?php


/*
if (isset ($_GET['type'])) header('Content-type: ' . $_GET['type'] . (isset ($_GET['charset']) ? '; charset=' . $_GET['charset'] : ''));


$ch = curl_init();

if(isset($_GET['refer'])) {
	curl_setopt($ch, CURLOPT_REFERER, $_GET['refer']);
}

if(isset($_GET['post'])) {
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"");
}


curl_setopt($ch, CURLOPT_URL, $_GET['query']);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36');

curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Requested-With: XMLHttpRequest'));
//curl_setopt($ch, CURLOPT_HEADER, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  FALSE);



$result=curl_exec ($ch);
if (curl_errno($ch))
	echo(curl_errno($ch)." - ".curl_error($ch));
curl_close ($ch);

echo $result;

*/

if (isset ($_GET['type'])) header('Content-type: ' . $_GET['type'] . (isset ($_GET['charset']) ? '; charset=' . $_GET['charset'] : ''));

$ch = curl_init();

if(isset($_GET['post'])) {
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
}

if(isset($_GET['refer'])) {
	curl_setopt($ch, CURLOPT_REFERER, $_GET['refer']);
}

curl_setopt($ch, CURLOPT_URL, $_GET['query']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Requested-With: XMLHttpRequest'));
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  FALSE);

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36');

$result = curl_exec($ch);
if (curl_errno($ch))
	echo(curl_errno($ch)." - ".curl_error($ch));
curl_close ($ch);

echo $result;
