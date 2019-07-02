<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2
 * Time: 11:11
 */

namespace app\api\controller\v1;


use app\api\Validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;

class Banner
{
    /**
     * 根据BannerId获取Banner内容信息
     * @param $id
     * @return \think\response\Json
     * @throws BannerMissException
     * @throws \think\Exception
     */
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);
        if(!$banner){
            throw new BannerMissException();
        }
        $data = $banner->toArray();

        return json($data);
    }
}