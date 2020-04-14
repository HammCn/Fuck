<?php
namespace app\admin\controller;

use app\Controller;
use fuck\Response;

class Test extends Controller
{
    public function __construct($app)
    {
        //别问我为什么不再这里做登录验证
    }
    public function __default()
    {
        //当访问的方法不存在时，会调用这个__default方法
        return 'default';
    }
    public function __init()
    {
        //整个控制器完成实例化之后会调用这个__init
        //这里可以按普通控制器进行数据返回或业务处理
        if ($isLogin) {
            $this->initData['login'] = true;
        } else {
            return $this->response->redirect("/user/login");
        }
    }
    public function test()
    {
        //实际调用URL   /admin/test/test
        return $this->response->json([
            'code' => 0,
            'msg' => $this->initData ?? "success",
        ]);
    }
}
