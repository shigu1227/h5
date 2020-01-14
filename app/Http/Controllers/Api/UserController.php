<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Model\Common;

class UserController extends Controller
{
    public function reg()
    {
        $url = "http://1905ppt.com/user/reg";
        $data = [
            'user_name' => 'zhangsan3',
            'user_email' => 'zhang2@qq.com',
            'user_tel'=>'123123323',
            'user_pwd'=>'ljx123',
            'user_pwd1'=>'ljx123'
        ];

        $response = Common::curlPost($url,$data);
        print_r($response);
    }

    public function login()
    {
        $login_info = [
            'user_name'=>'zhangsan3',
            'user_pwd'=>'ljx123'
        ];
        $url = "http://1905ppt.com/user/login";
        $response = Common::curlPost($url,$login_info);
        print_r($response);
    }

    public function getData()
    {
        $token = '32c2328bdab85f26dec9deadde2f66eb ';
        $uid = '8';
        $url = "http://1905ppt.com/user/token";
        $header = [
            'token:'.$token,
            'uid:'.$uid
        ];
        $response = Common::curlGet($url,$header);
        print_r($response);
    }
}
