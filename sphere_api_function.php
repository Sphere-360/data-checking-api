<?php

	//Version: 2.0.1
	//Sphere 360° API-Function

	//Disclaimer / Haftungsausschluss

	// This code-snippet will be provided without warranty and at your own risk!
	// Code provided by smart eIDentity UG (haftungsbeschränkt) #Sphere 360° (https://www.sphere-360.com)

	//Dieser Code-Schnippsel wird ohne Garantie auf Funktion und die Verwendung auf eigenes Risiko zur Verfügung gestellt. 
	//Herausgeber: smart eIDentity UG (haftungsbeschränkt) #Sphere 360° (https://www.sphere-360.com)

	//This Snippet can be included in your project by a require() function. 
	//Dieser Baustein kann über einen require() Aufruf in Ihr Projekt geladen werden.

	//Or use this code as copy and paste function. 
	//Oder Kopieren Sie diese Funktion einfach in Ihren Code.




// API-Interface function // API-Schnittstellen Funktion

function Sphere_API_Function($verify_data, $my_api_key, $cURL_error_reporting){
	

	//API-URL
	$sphere_url = 'https://api.sphere-360.com';

	$post_content = array('verify_data' => $verify_data,
						'key' => $my_api_key);

	//Init a CURL session / Initalisierung einer CURL Abfrage
	$channel = curl_init();

	//CURL Options / CURL Optionen
	curl_setopt($channel, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($channel, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($channel, CURLOPT_HEADER, 0);
	curl_setopt($channel, CURLOPT_URL, $sphere_url);
	curl_setopt($channel, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($channel, CURLOPT_POST, true);
	curl_setopt($channel, CURLOPT_POSTFIELDS, $post_content);

	// Execute of the CURL-query and safing the result into a variable / Ausführen der CURL Abfrage mit Speicherung des Ergebnisses in einer Variable 
	$curl_result = curl_exec($channel);


	//Error Detection if a CURL Timeout or no response happens // Fehlererkennung wenn ein Timeout bzw. keine Rückmeldung der CURL Abfrage auftritt.
	if ($curl_result === false) {

		if ($cURL_error_reporting == true) {
			
			//Create an error code / Generierung einer Fehlermeldung
			$error_data['error_details'] = curl_error($channel) . " (E000)";
			//Create an JSON Object / Generierung eines JSON Objektes
			$curl_result = json_encode($error_data); 

		}
		
	}

	//Close the CURL Connection / Beenden der CURL Verbindung
	curl_close($channel);

	//Decode of the JSON object and return the data / Dekodieren des JSON Objektes mit anschließender Ausgabe via Return.
	$obj = json_decode($curl_result, true);

	return $obj;
}


?>




<?php

	//Current JSON fields / Aktuelle JSON Felder
	//Replace the $obj value with your array description / Ersetzen Sie das $obj gegen Ihre Array Variable


	/*
	$obj['request_provided'];
	$obj['request_type'];
	$obj['spam_result'];
	$obj['spam_result_str'];
	$obj['spam_result_type'];
	$obj['error'];
	$obj['error_details'];
	$obj['api_version'];
	$obj['account_package'];
	$obj['account_query_status'];
	$obj['domain_name'];
	$obj['domain_tld_name'];
	$obj['phone_number'];
	$obj['phone_prefix'];
	$obj['phone_city'];
	$obj['phone_country_en'];
	$obj['phone_country_de'];
	$obj['phone_country_iso2'];
	$obj['phone_country_iso3'];
	$obj['phone_continent'];
	$obj['phone_zone'];
	$obj['phone_number_format_international'];
	$obj['phone_number_format_national'];
	$obj['phone_number_format_RFC3966'];
	$obj['phone_number_initial_provider'];
	$obj['phone_number_timezone'];
	$obj['phone_number_type'];

	*/


?>