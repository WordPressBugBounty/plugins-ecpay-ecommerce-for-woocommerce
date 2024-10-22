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
    'LogisticsID' => '1770265',
    'CVSPaymentNo' => 'C1234567',
    'CVSValidationNo' => '4111',
];
$input = [
    'MerchantID' => '2000132',
    'RqHeader' => [
        'Timestamp' => time(),
        'Revision' => '1.0.0',
    ],
    'Data' => $data,
];
$url = 'https://logistics-stage.ecpay.com.tw/Express/v2/CancelC2COrder';

$response = $postService->post($input, $url);
var_dump($response);
