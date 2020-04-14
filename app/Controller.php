<?php
namespace app;

class Controller
{
    protected $app;
    protected $request;
    protected $response;
    protected $initData;
    public function __construct($app)
    {
        $this->app = $app;
        $this->request = $this->app->request();
        $this->response = $this->app->response();
    }
    public function __default()
    {

    }
    /**
     * 控制器前置Init方法
     *
     * @return void
     */
    public function __init()
    {
        $this->initData = null;
    }
}
