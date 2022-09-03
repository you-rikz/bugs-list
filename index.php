<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
$client = new Client();
define('TOKEN', 'Keb-FZ6XODa3lyX8_ei5t5bnpJIzj4zk');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');
$headers = [
  'Authorization' => TOKEN
  
];
$request = new Request('GET', MANTISHUB_URL . 'api/rest/issues?page_size=10&page=1', $headers);
$res = $client->sendAsync($request)->wait();
$bugs = $res->getBody()->getContents();





?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ipt10.local</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src='main.js'></script>
    <script>"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"</script>
</head>
<body>
    <div class="Text">
    <h1 style="font-size:50px; margin-left: 120px">IPT10 Bugs List</h1>
    <p style="font-size:25px; color:blue; margin-left: 120px"><a href=>ARNOLD NICHOLAS P. LIM</a></p>
    </div>

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Summary</th>
            <th scope="col">Severity</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
        $bugs_list = json_decode($bugs);

        foreach ($bugs_list->issues as $bug):
        ?>
        <tr>
          <td><?=$bug->id;?></td>
          <td><?=$bug->summary;?></td>
          <td><?=$bug->severity->name;?></td>
          <td><?=$bug->status->name;?></td>
        <?php endforeach; ?>
      
          <tr>
            <th scope="row">1</th>
            <td>My Bug</td>
            <td>Minor</td>
            <td>new</td>
          </tr>
        </tbody>
      </table>
    </div>
</body>
</html>


