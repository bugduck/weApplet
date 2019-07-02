<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2
 * Time: 14:46
 */

namespace app\lib\exception;

use Exception;
use think\Config;
use think\exception\Handle;
use think\Request;

class ExceptionHandller extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {
        if($e instanceof BaseException){
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;

        }else{
            if(Config::get('app_debug')){
                return parent::render($e);
            }
            $this->code = 500;
            $this->msg = 'sorry，we make a mistake. ';
            $this->errorCode = 999;
        }

        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => Request::instance()->url()
        ];
        return json($result, $this->code);
    }
}
