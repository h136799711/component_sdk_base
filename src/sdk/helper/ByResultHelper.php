<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2017-06-14
 * Time: 10:31
 */

namespace by\sdk\helper;

use by\infrastructure\helper\CallResultHelper;
use by\sdk\constants\ByRetCode;

/**
 * Class ByResultHelper
 * 返回结果都以这种格式
 * @package by\sdk\helper
 */
class ByResultHelper
{
    /**
     * 操作成功 code = 0
     * @param $data
     * @param string $message
     * @internal param string $info
     * @return \by\infrastructure\base\CallResult
     */
    public static function success($data, $message = '')
    {
        return CallResultHelper::success($data, $message);
    }

    /**
     *
     * 操作失败 code != 0
     * 具体code 值参考 ByRetCode
     * @param string $message
     * @param int $code
     * @param array $data
     * @return \by\infrastructure\base\CallResult
     */
    public static function fail($message = '', $code = ByRetCode::FAILED, $data = [])
    {
        return CallResultHelper::fail($data, $message, $code);
    }
}