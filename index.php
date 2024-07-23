<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/larapack/dd/src/helper.php';


$name = new \app\Name();
dd($name->prepare("vladislav"));