<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://clp-accept-user.my-clay.com/v1.1/sites/bddc76a3-8d16-44de-86df-79f4b1e19552/locks/a5091d73-d7ea-4eb7-b883-0a4d241584ca/locking",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PATCH",
  CURLOPT_POSTFIELDS => "{\n \"locked_state\": \"unlocked\",\n \"otp\": \"{{otp}}\"\n}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6IjE2REVCRjUwMTJEMDBBREEwRDRCNERENUREQjdBNTNGQkY1NkE2RDciLCJ0eXAiOiJKV1QiLCJ4NXQiOiJGdDZfVUJMUUN0b05TMDNWM2JlbFA3OVdwdGMifQ.eyJuYmYiOjE1NjA2Nzc2MDUsImV4cCI6MTU2MDY4MTIwNSwiaXNzIjoiaHR0cHM6Ly9jbHAtYWNjZXB0LWlkZW50aXR5c2VydmVyLm15LWNsYXkuY29tIiwiYXVkIjpbImh0dHBzOi8vY2xwLWFjY2VwdC1pZGVudGl0eXNlcnZlci5teS1jbGF5LmNvbS9yZXNvdXJjZXMiLCJ1c2VyX2FwaSJdLCJjbGllbnRfaWQiOiI5MmY2NzI0MS04YzYwLTExZTktYWQ1Ny0wMDBkM2E0NmE4ODAiLCJ0ZW5hbnRfaWQiOiJmOTYxNmJhNS00NDNhLTExZTYtYThiOS0wMDUwNTY4ZGEwOTciLCJzdWIiOiJhOTFkN2Q3Ny1hNjcyLTRjODUtOWRjNS1lY2Q4NzI3MDFiYmIiLCJhdXRoX3RpbWUiOjE1NjA2Nzc2MDUsImlkcCI6ImxvY2FsIiwiaWRlbnRpdHlfaWQiOiJhOTFkN2Q3Ny1hNjcyLTRjODUtOWRjNS1lY2Q4NzI3MDFiYmIiLCJzY29wZSI6WyJ1c2VyX2FwaS5mdWxsX2FjY2VzcyJdLCJhbXIiOlsicHdkIl19.x4jC2t7A6PDkx28Eerwj1Q15pCj7PMlKiRX75HBFJoojlcPgtma8MOENTtbgiU7dSS9YRFXYbtZYLk47d1swE2eeS2sh9oPHfRvVx4kN60KQYAshvtMLeUwKrAO4dPJNZS4ZvjyGEj8_m_upCcd9ZrM_FmIXsg84O5eMjSLldvBVzPfLcMbCcF9NblNZhXq27_Zb2zrujGwXmOK9ER5xuWjRZwuLTLTSv_sl48VyiEevuCe9OMcDvKxNUHPzL_9wfQpBNLRMlhCOi4CzkU2inCxxR13XXjT1kOvu5Bb-YvEVYXlCKmSgZ7O5bQz5Thym2GOB7kMHmX8AjbJ_h4wzrzfx5STNDppR4uCo2XdLLWJGkqmTtl6VIlLI0NRV9IjkB1kxzC0LkXhyN7-VhhCYSn1dmgIv_L48qsC61Rs_4X9w2jkIyPQTC2Ylun6DZv4ouCpCO7Hp7d54-1JLxnAH-f25fXvl82XgPxrLKxS8u00wAnI5rEquQ0kz3m379CZhsH08lfQ9OydZ6J3EdXnG4crbn0r6MMPfvBvNKElz7KRkbQX4VH8PfdWoYE1URYafuPFK6HzgDLVLAm5v7akZ216YKkztuimpZlctWFWPFXQ1uuVhrOTTXxrhH-7pJBmvSm6WRd-2JpFB4caI7nNRSX01C3hiPIK8ou7d6G8wWeA",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 0609b1b9-752c-b4f5-4114-69b64a407103"
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