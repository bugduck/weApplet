<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2
 * Time: 11:22
 */

namespace app\api\Validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected $message = [
        'id' => 'ID必须为正整数'
    ];

    protected function isPositiveInteger($value, $rule, $data, $filed)
    {
        if(is_numeric($value) && is_int($value + 0) && ($value + 0)>0 ){
            return true;
        }else{
            return $filed.'必须为正整数';
        }
    }
}