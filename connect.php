<?php
// A sample PHP Script to POST data using cURL
// Data in JSON format
 
$data = array(
    'username' => 'tecadmin',
    'password' => '012345678'
);
 
$payload = json_encode($data);
 
// Prepare new cURL resource
$ch = curl_init('https://clp-accept-user.my-clay.com/v1/sites/bddc76a3-8d16-44de-86df-79f4b1e19552/locks/a5091d73-d7ea-4eb7-b883-0a4d241584ca/locking');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
 
// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);
 
// Submit the POST request
$result = curl_exec($ch);
 
// Close cURL session handle
curl_close($ch);
 
?>