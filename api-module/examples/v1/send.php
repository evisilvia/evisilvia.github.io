<?php

/*
----------------------------------
Contoh implementasi API v1
----------------------------------
*/


// function kirim SMS dengan API v1

function sendsms($notujuan, $pesan){

	$username = "...";
	$apikey = "...";

	 
	$ch = curl_init();   
	 
	curl_setopt($ch, CURLOPT_URL, 
	"http://smsapi.rosihanari.net/restapi.php?action=sendsms&username=".$username."&apikey=".$apikey."&destination=".$notujuan."&message=".urlencode($pesan));
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	 
	$output = curl_exec($ch); 
	curl_close($ch); 
 
	return $output; 
}

// function kirim pesan WhatsApp dengan API v1

function sendwa($notujuan, $pesan){

	$username = "...";
	$apikey = "...";

	$ch = curl_init();   
	 
	curl_setopt($ch, CURLOPT_URL, "http://smsapi.rosihanari.net/restapi.php?action=sendwa&username=".$username."&apikey=".$apikey."&destination=".$notujuan."&message=".urlencode($pesan));
	 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$output = curl_exec($ch); 
	 
	curl_close($ch); 

	return $output; 
}

// kirim pesan via SMS
echo sendsms("08123456789", "Ini kirim pesan via SMS");

// kirim pesan via WA
echo sendwa("08123456789", "Ini kirim pesan via WA");

?> 