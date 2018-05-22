<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2017 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2017-11-15 14:04
 * 作为模板配置参考
 *********************************
 ********1.0.1********************
 *
 *********************************
 */


defined("BY_DS") or define('BY_DS', DIRECTORY_SEPARATOR);
defined("BY_SDK_PATH") or define('BY_SDK_PATH', dirname(__DIR__) . BY_DS);
defined("BY_EXT") or define('BY_EXT', '.php');


return [
    'by_sdk_version' => 'v1.0.0',

    'lang' => 'zh-cn', // 默认语言包
    'default_timezone' => 'UTC',// 默认时区 Etc/GMT
    // 接口网关请求地址
    'by_api_gateway_uri' => 'http://dev.sale.sunsunxiaoli.com/index.php',
    // client_id
    'by_client_id' => 'by58018f50cfcae1',
    // client_secret
    'by_client_secret' => 'cb0bfaf5b9b2f53a216bf518e18fef18',
    // md5_v3 通信算法
    'by_alg' => 'md5_v3',
    // api 是否调试模式
    'by_api_debug' => false,
];