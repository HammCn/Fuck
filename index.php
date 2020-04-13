<?php
namespace fuck;

require 'vendor/autoload.php';
$app = new App();
$response = $app->run();
<<<<<<< HEAD
// print_r($response);die;
=======
>>>>>>> 6a34eca1fecbab8a431f6885912182e61a87cd34
$response->end();
