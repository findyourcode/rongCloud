<?php
/**
 * 融云 Server API PHP 客户端
 * create by kitName
 * create datetime : 2016-09-05
 *
 * v2.0.1
 */

namespace RongCloud;

use \Exception;

include 'SendRequest.php';
include 'methods/User.php';
include 'methods/Message.php';
include 'methods/Wordfilter.php';
include 'methods/Group.php';
include 'methods/Chatroom.php';
include 'methods/Push.php';
include 'methods/SMS.php';

class RongCloud
{
    /**
     * 参数初始化
     * @param $appKey
     * @param $appSecret
     * @param string $format
     */
    public function __construct($appKey, $appSecret, $format = 'json')
    {
        $this->SendRequest = new SendRequest($appKey, $appSecret, $format);
    }

    /**
     * 用戶模塊
     *
     * @return User
     */
    public function User()
    {
        $User = new User($this->SendRequest);
        return $User;
    }

    /**
     * 消息模塊
     *
     * @return Message
     */
    public function Message()
    {
        $Message = new Message($this->SendRequest);
        return $Message;
    }

    /**
     * 敏感詞模塊
     *
     * @return Wordfilter
     */
    public function Wordfilter()
    {
        $Wordfilter = new Wordfilter($this->SendRequest);
        return $Wordfilter;
    }

    /**
     * 群組模塊
     *
     * @return Group
     */
    public function Group()
    {
        $Group = new Group($this->SendRequest);
        return $Group;
    }

    /**
     * 聊天室模塊
     *
     * @return Chatroom
     */
    public function Chatroom()
    {
        $Chatroom = new Chatroom($this->SendRequest);
        return $Chatroom;
    }

    /**
     * 廣播消息模塊
     *
     * @return Push
     */
    public function Push()
    {
        $Push = new Push($this->SendRequest);
        return $Push;
    }

    /**
     * 短信模塊
     *
     * @return SMS
     */
    public function SMS()
    {
        $SMS = new SMS($this->SendRequest);
        return $SMS;
    }

}
