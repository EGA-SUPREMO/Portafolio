<?php

require __DIR__.'/vendor/autoload.php';

error_reporting(E_ERROR | E_PARSE);

$path = $_SERVER['REQUEST_URI'];

define('LOCALE', $path ?? $path == 'en'? 'en' : 'es');

$common = include_once 'assets/lang/'.LOCALE.'/common.php';
$footer = include_once 'assets/lang/'.LOCALE.'/footer.php';
$form = include_once 'assets/lang/'.LOCALE.'/form.php';
$about = include_once 'assets/lang/'.LOCALE.'/about.php';
$portfolios = [
    include_once 'assets/lang/'.LOCALE.'/portfolio 1.php',
    include_once 'assets/lang/'.LOCALE.'/portfolio 2.php',
    include_once 'assets/lang/'.LOCALE.'/portfolio 3.php',
    include_once 'assets/lang/'.LOCALE.'/portfolio 4.php',
    include_once 'assets/lang/'.LOCALE.'/portfolio 5.php',
    include_once 'assets/lang/'.LOCALE.'/portfolio 6.php',
];
$imgInfos = [
    include_once 'assets/lang/img-info 1.php',
    include_once 'assets/lang/img-info 2.php',
    include_once 'assets/lang/img-info 3.php',
    include_once 'assets/lang/img-info 4.php',
    include_once 'assets/lang/img-info 5.php',
    include_once 'assets/lang/img-info 6.php',
];

include_once 'views/home.php';
