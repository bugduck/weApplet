<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2
 * Time: 14:16
 */

namespace app\api\Validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $params = Request::instance()->param();

        $result = $this->check($params);

        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        }else{
            return true;
        }
    }
}