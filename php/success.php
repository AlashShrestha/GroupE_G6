<?php
include 'setting.php';

$ref = $_GET['refId'];

$data = [
    'amt' => $actualamount,
    'rid' => $ref,
    'pid' => "ee2c3ca1-696b-4cc5-a6be-2c40d929d453",
    'scd' => $merchant_code
];

$curl = curl_init($fraudcheck_url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
echo $response;

curl_close($curl);

if (strpos($response, "Success") !== false) {
    header("Location: http://localhost/GroupE_G6/php/offence-detail1.php?id=1");
} else {
    header("Location: http://localhost/GroupE_G6/php/offence-detail1.php?id=1");
}
