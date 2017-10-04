<?php

namespace KintoUnSkeleton;

chdir(dirname(__DIR__));
session_start();
require 'vendor/autoload.php';

$app = new \KintoUn\App();
$app->run();