<?php
namespace Vdopool;

class Service {

  /**
   * 发短信
   *
   * @param array $data 发送短信需要的数据
   *
   * @return string
   * @author Me
   **/
  public static function sendsms($data)
  {
    $sign = Helper::hmacSign('POST', $data, Config::$secret_key);
    $data['signature'] = $sign;

    $client = new \GuzzleHttp\Client;

    $request = $client->createRequest('POST', Config::$sendsms_url);
    $postBody = $request->getBody();

    // $postBody is an instance of GuzzleHttp\Post\PostBodyInterface
    foreach ($data as $k => $v) {
      $postBody->setField($k, $v);
    }
    // Send the POST request
    $response = $client->send($request);
    return $response->getBody();
  }

  /**
   * verify
   *
   * @param array $data 验证需要的数据
   *
   * @return string
   * @author Me
   **/
  public static function verify($data)
  {
    $sign = Helper::hmacSign('POST', $data, Config::$secret_key);
    $data['signature'] = $sign;

    $client = new \GuzzleHttp\Client;

    $request = $client->createRequest('POST', Config::$verify_url);
    $postBody = $request->getBody();

    // $postBody is an instance of GuzzleHttp\Post\PostBodyInterface
    foreach ($data as $k => $v) {
      $postBody->setField($k, $v);
    }
    // Send the POST request
    $response = $client->send($request);
    return $response->getBody();
  }
}

