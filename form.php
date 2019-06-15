<?php
//Initialize the $query_string variable for later use
$query_string = "";
 
//If there are POST variables
if ($_POST) {
 
//Initialize the $kv array for later use
$kv = array();
 
//For each POST variable as $name_of_input_field => $value_of_input_field
foreach ($_POST as $key => $value) {
 
//Set array element for each POST variable (ie. first_name=Arsham)
$kv[] = stripslashes($key)."=".stripslashes($value);
 
}
 
//Create a query string with join function separted by &
$query_string = join("&", $kv);
}
//Check to see if cURL is installed ...
if (!function_exists('curl_init')){
die('Sorry cURL is not installed!');
}
 
//The original form action URL from Step 2 :)
$url = 'http://ec2-18-130-176-221.eu-west-2.compute.amazonaws.com:3000/api/BuildingId';
 
//Open cURL connection
$ch = curl_init();
 
//Set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, count($kv));
curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
 
//Set some settings that make it all work :)
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 
//Execute SalesForce web to lead PHP cURL
$result = curl_exec($ch);
 
//close cURL connection
curl_close($ch);
if($result=='ok')
{
//echo '&lt;script&gt;alert("Posted -- ")&lt;/script&gt;';
}
// Here you can write mysql query to insert data in table.
 
$insert_tbl_index_page= "insert into tbl_form_data(first_name,last_name,street,city,zip,phone,email)values('$first_name','$last_name','$street','$city','$zip','$phone','$email')";
?>