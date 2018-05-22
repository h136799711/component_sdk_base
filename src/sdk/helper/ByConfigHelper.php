<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2017-06-14
 * Time: 13:39
 */

namespace by\sdk\helper;

/**
 * Class ByConfigHelper
 * sdk的配置管理帮助类
 * @package by\sdk\helper
 */
class ByConfigHelper
{

    public static $config;
    private static $instance;

    public function __construct($config = [])
    {
        if (empty(self::$config)) {
            self::$config = include(BY_SDK_PATH . '/config/config.php');
        }
        // 可定制配置信息
        if (!empty($config)) {
            if (empty(self::$config)) {
                self::$config = [];
            }
            self::$config = array_merge(self::$config, $config);
        }
    }

    public static function getInstance($config = [])
    {
        if (!(self::$instance)) {
            self::$instance = new ByConfigHelper($config);
        }
        return self::$instance;
    }


    /**
     * api 网关地址
     * @return string 网关地址
     */
    public static function getApiGatewayUri()
    {
        return self::getValue('by_api_gateway_uri');
    }

    private static function getValue($name)
    {
        if (array_key_exists($name, self::$config)) {
            return self::$config[$name];
        }
        return "";
    }

    /**
     * client_id
     * @return string 应用标识
     */
    public static function getClientId()
    {
        return self::getValue('by_client_id');
    }

    /**
     * client_secret
     * @return string 应用密钥
     */
    public static function getClientSecret()
    {
        return self::getValue('by_client_secret');
    }

    /**
     * 获取SDK版本
     */
    public static function getSdkVersion()
    {
        return self::getValue('by_sdk_version');
    }
}