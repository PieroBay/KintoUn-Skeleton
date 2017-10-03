<?php
chdir(dirname(__DIR__));
session_start();
$loader = require 'vendor/autoload.php';
require 'vendor/pierobay/kintoun/app/Kintoun.php';

$app = new \KintoUn\App();
$app->run();