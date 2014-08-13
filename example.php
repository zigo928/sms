<?php

require 'vendor/autoload.php';

$data['access_key'] = Vdopool\Config::$access_key;
$data['phone_number'] = '13693179034';
$data['timestamp'] = time();


try {
  $response = Vdopool\Service::sendsms($data);
  Vdopool\Helper::logResult('request.log', $response);
  echo $response;
} catch (\Exception $e) {
  var_dump($e->getMessage());
}



