<?php
namespace fuck;

require 'vendor/autoload.php';
$app = new App();
$response = $app->run();
// print_r($response);die;
$response->end();
