

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
 CURLOPT_URL => "https://clp-accept-identityserver.my-clay.com/connect/token",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "grant_type=password&scope=user_api.full_access&username=kateryna%2B%40my-clay.com&password=HackCoworking123!",
 CURLOPT_HTTPHEADER => array(
   "Accept: */*",
   "Authorization: Basic OTJmNjcyNDEtOGM2MC0xMWU5LWFkNTctMDAwZDNhNDZhODgwOmFiYTc2MTYxLTRmM2QtNDdmNy1hMTU3LTkyN2EwMTJjNzRlNQ==",
   "Cache-Control: no-cache",
   "Connection: keep-alive",
   "Content-Type: application/x-www-form-urlencoded",
   "Host: clp-accept-identityserver.my-clay.com",
   "Postman-Token: d90dde35-352e-486c-83a3-8b171380c46a,b1505e96-65b0-4655-9f0f-c79b2e3cf8f2",
   "User-Agent: PostmanRuntime/7.15.0",
   "accept-encoding: gzip, deflate",
   "cache-control: no-cache",
   "content-length: 110",
   "cookie: ARRAffinity=feabb5fa0e4061d391726404a7f50bd7c7f586cb78cc51a12e3fb92bfb26b0eb"
 ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
 echo "cURL Error #:" . $err;
} else {
 echo $response;
} 

?>
