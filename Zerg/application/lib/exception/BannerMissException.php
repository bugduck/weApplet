<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2
 * Time: 15:58
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 400;
    public $msg = 'Impossible Banner';
    public $errorCode = 999;
}