<?php

require __DIR__.'/vendor/autoload.php';

error_reporting(E_ERROR | E_PARSE);

$path = $_SERVER['REQUEST_URI'];

define('LOCALE', $path?? $path == 'en'? 'en' : 'es');

use App\LOCALE;

$common = include_once 'assets/lang/en/common.php';
$footer = include_once 'assets/lang/en/footer.php';
$form = include_once 'assets/lang/en/form.php';
$about = include_once 'assets/lang/en/about.php';
$portfolios = [
    include_once 'assets/lang/en/portfolio 1.php',
    include_once 'assets/lang/en/portfolio 2.php',
    include_once 'assets/lang/en/portfolio 3.php',
    include_once 'assets/lang/en/portfolio 4.php',
    include_once 'assets/lang/en/portfolio 5.php',
    include_once 'assets/lang/en/portfolio 6.php',
];

include_once 'home.php';
