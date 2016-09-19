<?php 

// load neccesary files
require 'vendor/autoload.php';
use Philo\Blade\Blade;

// configure blade engine
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new Blade($views, $cache);

// pass data
$vars = [
	'title' => 'Welcome!', 
];

// output everything
echo $blade->view()->make('login')->with($vars)->render();