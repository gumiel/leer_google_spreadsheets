<?php

require __DIR__ . '/vendor/autoload.php';


$client = new Google_Client();
$client->setAuthConfig('lector_de_excel-a48a4cfa9ce6.json');
$client->setApplicationName('theName');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);

$service = new Google_Service_Sheets($client);

$spreadsheetId = "2PACX-1vQD32FS1_p5_js5xJOAHO35K0ush1nVVHpld19TOAdO3BJEXMKDjgdO_rIcOx-iB4hUi5EeokR_qaIZ";

$range = "A1:A12";

$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
echo "<pre>";
var_dump($values);
echo "</pre>";

?>