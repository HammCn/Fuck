<?php
namespace fuck;

require 'vendor/autoload.php';
$app = new App();
$response = $app->run();
$response->end();
