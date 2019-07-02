<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2
 * Time: 15:26
 */

namespace app\api\model;


use think\Model;

class BannerItem extends BaseModel
{
    protected $hidden = ['id', 'img_id', 'delete_time', 'update_time', 'banner_id'];

    public function img()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}