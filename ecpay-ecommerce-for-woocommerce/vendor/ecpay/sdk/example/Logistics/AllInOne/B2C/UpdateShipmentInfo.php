<?php

use Ecpay\Sdk\Factories\Factory;

require __DIR__ . '/../../../../vendor/autoload.php';

$factory = new Factory([
    'hashKey' => '5294y06JbISpM5x9',
    'hashIv' => 'v77hoKGq4kWxNNIS',
]);
$postService = $factory->create('PostWithAesJsonResponseService');

$data = [
    'MerchantID' => '2000132',
    'LogisticsID' => '1770237',
    'ShipmentDate' => '2021/10/25',
];
$input = [
    'MerchantID' => '2000132',
    'RqHeader' => [
        'Timestamp' => time(),
        'Revision' => '1.0.0',
    ],
    'Data' => $data,
];
$url = 'https://logistics-stage.ecpay.com.tw/Express/v2/UpdateShipmentInfo';

$response = $postService->post($input, $url);
var_dump($response);
