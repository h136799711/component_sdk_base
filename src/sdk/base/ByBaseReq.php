<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2017 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2017-11-15 14:17
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\sdk\base;

/**
 * Class ByBaseReq
 * 请求信息类
 * @package by\sdk\base
 */
abstract class ByBaseReq
{
    private $notifyId;
    private $time;
    private $apiVer;
    private $type;
    private $client_id;
    private $session_id;
    private $uid;

    /**
     * 获取请求数据数组
     * @return array
     */
    abstract function getData();

    /**
     * @return mixed
     */
    public function getNotifyId()
    {
        if (empty($this->notifyId)) {
            $this->notifyId = time();
        }
        return $this->notifyId;
    }

    /**
     * @param mixed $notifyId
     */
    public function setNotifyId($notifyId)
    {
        $this->notifyId = $notifyId;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getApiVer()
    {
        return $this->apiVer;
    }

    /**
     * @param mixed $apiVer
     */
    public function setApiVer($apiVer)
    {
        $this->apiVer = $apiVer;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
    }

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * @param mixed $session_id
     */
    public function setSessionId($session_id)
    {
        $this->session_id = $session_id;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }
}