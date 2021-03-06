<?php
/**
 * @Author: pizepei
 * @Date:   2018-02-22 14:32:06
 * @Last Modified by:   pizepei
 * @Last Modified time: 2018-04-21 23:51:46
 */
namespace app\login\controller;
use think\Controller;
use common\Redis\RedisModel;
use app\login\model\Login as Addlogout;
/**
 * 退出登录模块
 */
class Logout extends \common\VerifiController\AdminLoginVerifi
{

    /**
     * [title 标题]
     * @Effect
     * @return [type] [description]
     */
    static function title()
    {

        return[
        'logout'=>'退出登录接口',
        ];

    }
    /**
     * [logout 退出登录 清空]
     * @Effect
     * @return [type] [description]
     */
    public function logout()
    {
        $Addlogout = new Addlogout;
        return Result($Addlogout->logout($this->access_token,$this->UserData,'redis'));
    }
}