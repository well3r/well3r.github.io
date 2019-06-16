<?php

$curl = curl_init();

curl_setopt_array($curl, array(
 CURLOPT_URL => "https://clp-accept-user.my-clay.com/v1/sites/bddc76a3-8d16-44de-86df-79f4b1e19552/locks/a5091d73-d7ea-4eb7-b883-0a4d241584ca/locking",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "PATCH",
 CURLOPT_POSTFIELDS => "{\n  \"locked_state\": \"unlocked\",\n  \"otp\": \"e0655\"\n}",
 CURLOPT_HTTPHEADER => array(
   "Authorization: Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6IjE2REVCRjUwMTJEMDBBREEwRDRCNERENUREQjdBNTNGQkY1NkE2RDciLCJ0eXAiOiJKV1QiLCJ4NXQiOiJGdDZfVUJMUUN0b05TMDNWM2JlbFA3OVdwdGMifQ.eyJuYmYiOjE1NjA2ODEyODMsImV4cCI6MTU2MDY4NDg4MywiaXNzIjoiaHR0cHM6Ly9jbHAtYWNjZXB0LWlkZW50aXR5c2VydmVyLm15LWNsYXkuY29tIiwiYXVkIjpbImh0dHBzOi8vY2xwLWFjY2VwdC1pZGVudGl0eXNlcnZlci5teS1jbGF5LmNvbS9yZXNvdXJjZXMiLCJ1c2VyX2FwaSJdLCJjbGllbnRfaWQiOiI5MmY2NzI0MS04YzYwLTExZTktYWQ1Ny0wMDBkM2E0NmE4ODAiLCJ0ZW5hbnRfaWQiOiJmOTYxNmJhNS00NDNhLTExZTYtYThiOS0wMDUwNTY4ZGEwOTciLCJzdWIiOiJhOTFkN2Q3Ny1hNjcyLTRjODUtOWRjNS1lY2Q4NzI3MDFiYmIiLCJhdXRoX3RpbWUiOjE1NjA2ODEyODMsImlkcCI6ImxvY2FsIiwiaWRlbnRpdHlfaWQiOiJhOTFkN2Q3Ny1hNjcyLTRjODUtOWRjNS1lY2Q4NzI3MDFiYmIiLCJzY29wZSI6WyJ1c2VyX2FwaS5mdWxsX2FjY2VzcyJdLCJhbXIiOlsicHdkIl19.fIQUYqzbfjoxJ6IPFnwhOPFFq0_O9y_rzCnySC_DutpnCUnP6ifndyzl_1mtr5H24B9-6B1XhkXjLAS0q5BvFjXOaCG23V3JEHt7qrQQbLzfuzLLFLneGC_S227I9vCNfdr7YZYdxZADJlNXwievAiXO-vR3bST1g-rtKzfbwH1xDgHRqU9kaMQg9l8I7f7A1Y5TL0tPUdceqryYA96SbSWQW2Q4DTXdFc1lSfMofIOekN8vWpUuefrz2aSS-Q2KSDbcBr8_fabwEv5-fCuY0hx-ctI0mEhPGadeiiGr_08EICTy6Jito6AhVBlFMZtQqB8PBZRw7_-_JRTjaIy8Acr54nfG8wpQ4v1oaVlmpntJ47XJOViXKtsrzOrDhLr3WU1gXPpSM2aS_83GBV_j8I10pQfYK-KnyEzYVQd3d9u6BOOcy3dvlKi4SzsC2S_i2hhASLZuWDiK8CCMuanRmn3dQrtHwu0JqONNcJbSoa6GJjIUvvMVQ_DDUrxo5d0pf6Q3_EtLJ6eRDh6_VeWzK9sQSVNhvz-tvYXOeNzEQ4ZZ2A_UcO99HDBEMz2IpEObjsPr-b-y7_ONBYoQsbwXSZdWq5iI8LjIOW7YQUoorvHgn_kGWDt1YILEBIo0q1PmbCJdQa2WycUN9ZmeLG8z342Ah3w97RIdbGlsP4QiAFo",
   "Content-Type: application/json",
   "Postman-Token: 04586b59-6a73-491a-a20b-f72f83fdbe9a",
   "cache-control: no-cache"
 ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
 echo "cURL Error #:" . $err;
} else {
 echo $response;
}?>


<html><head></head><body><script>


var d = new Date();
var YYYY = d.getUTCFullYear();
var mm = ('0' + (d.getUTCMonth() + 1)).slice(-2);
var DD = ('0' + (d.getUTCDate() + 1)).slice(-2);
var HH = ('0' + (d.getUTCHours() + 1)).slice(-2);
var mmm = ('0' + (d.getUTCMinutes() + 1)).slice(-2);
var ss = ('0' + (d.getUTCSeconds() + 1)).slice(-2);

var datetime = YYYY+mm+DD+HH+mmm+ss;

postman.setEnvironmentVariable('secret', '621307FFD49D448C')
console.log("hhelo")
var secret = '621307FFD49D448C';
var pin = "2019";
</script></body></html>
