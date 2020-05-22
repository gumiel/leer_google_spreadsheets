<?php

require __DIR__."/vendor/autoload.php";

$client = new Google_Client();
var_dump($client);
$client->setApplicationName('Google Sheets API PHP Quickstart');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAccessType('offline');

$tokenPath =__DIR__.'/lector_de_excel-a48a4cfa9ce6.json';
if (file_exists($tokenPath)) {
    $accessToken = json_decode(file_get_contents($tokenPath), true);
    var_dump($accessToken);

    $client->setAccessToken($accessToken);
}
exit;
$client->setAccessType(__DIR__.'/lector_de_excel-a48a4cfa9ce6.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1mUHh5HXFcrjUdWhpC2-T2uy3hKh4D2etMM6R5Gybh6A";

$range = "congress!S2:F8";

$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();


?>