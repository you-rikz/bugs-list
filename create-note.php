<?php
$client = new Client();
$headers = [
  'Authorization' => TOKEN,
  'Content-Type' => 'application/json'
];
$body = '{
  "lim.arnoldnicholas@auf.edu.ph": "test note",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', '{{url}}/api/rest/issues/[ISSUE_NUMBER]/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
