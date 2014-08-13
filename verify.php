<?php

require 'vendor/autoload.php';


$data['timestamp'] = time();
$data['access_key'] = Vdopool\Config::$access_key;
$data['phone_number'] = '13693179034';
$data['code'] = '855747';

try {
  $response = Vdopool\Service::verify($data);
  /* Vdopool\Helper::logResult('request.log', $response); */
  echo $response;
} catch (\Exception $e) {
  var_dump($e->getMessage());
}
