<?php
namespace app\admin\controller;

use fuck\Response;

class Test
{
    public function __construct($app)
    {
        // print_r($app);die;
    }
    public function test()
    {
        $response = new Response();
        return $response->json([
            'code' => 0,
            'msg' => 'success',
        ]);
    }
}
