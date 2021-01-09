<?php

/*
----------------------------------
Contoh implementasi API v2
----------------------------------
*/

// function kirim SMS dengan API v2

function sendsms($notujuan, $pesan){

	$username = "...";
	$apikey = "...";

	$postRequest = array(
	    'action' => 'sendsms',
	    'username' => $username,
	    'apikey' => $apikey,
	    'destination' => $notujuan,
	    'message' => $pesan,
	);

	$ch = curl_init(); 

	curl_setopt($ch, CURLOPT_URL, "http://smsapi.rosihanari.net/v2/restapi.php");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postRequest);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);

	return $output;
}



// function kirim WhatsApp dengan API v2

function sendwa($notujuan, $pesan, $filename="", $filecontent=""){

	$username = "...";
	$apikey = "...";

	$postRequest = array(
	    'action' => 'sendwa',
	    'username' => $username,
	    'apikey' => $apikey,
	    'destination' => $notujuan,
	    'message' => $pesan,
	    'filename' => $filename,
	    'filecontent' => $filecontent
	);

	$ch = curl_init(); 

	curl_setopt($ch, CURLOPT_URL, "http://smsapi.rosihanari.net/v2/restapi.php");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postRequest);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);

	return $output;
}



// kirim image atau file via Whatsapp
// pastikan file berada di dalam folder yang sama dg script ini
$filename = 'logo.jpg';
$img = file_get_contents($filename);
$mime = mime_content_type($filename);
$filecontent = "data:".$mime.";base64,".base64_encode($img);

// kirim file dengan caption via WhatsApp
echo sendwa("08123456789", "Ini caption dari file", $filename, $filecontent);

// kirim pesan via Whatsapp 
echo sendwa("08123456789", "Ini kirim pesan via WA");

// kirim pesan via SMS
echo sendsms("08123456789", "Ini kirim pesan via SMS");

?>
