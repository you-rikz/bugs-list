<?php
$client = new Client();
$headers = [
  'Authorization' => TOKEN,
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "arnoldlim",
  "password": "pass123",
  "real_name": "Arnold Nicholas Lim",
  "email": "lim.arnoldnicholas@.auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', '{{url}}/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
