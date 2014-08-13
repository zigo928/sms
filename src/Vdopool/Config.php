<?php
namespace Vdopool;

/**
 * 配置文件
 **/
class Config
{
  // 访问key
  public static $access_key    = 'xaeL7591aE1uNvwV';

  // 私有密钥
  public static $secret_key = 'sp8sGL5qH0zGUlnpKrR8SNzvIy4ORqMbS7vMcPiZ';

  // 商户设置的回调地址
  // public static $notify_url = 'http://payment.211.100.56.140.xip.io/test/notify';

  // 发送地址
  public static $sendsms_url  = 'http://114.112.84.135:8081/api/v1/sendsms';

  // 验证地址
  public static $verify_url  = 'http://114.112.84.135:8081/api/v1/verify';
}

