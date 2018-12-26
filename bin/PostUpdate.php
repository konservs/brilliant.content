#!/bin/env php
<?php
error_reporting(E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );
define('BEXEC', 1);
define('BROOTPATH', realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);
define('BFRAMEWORKPATH', BROOTPATH.'vendor'.DIRECTORY_SEPARATOR.'konservs'.DIRECTORY_SEPARATOR.'brilliant.framework'.DIRECTORY_SEPARATOR);

echo('================================='.PHP_EOL);
echo('BROOTPATH:'.BROOTPATH.PHP_EOL);
echo('================================='.PHP_EOL);


#define('BCOMPONENTSFRAMEWORKPATH', BFRAMEWORKPATH.'components'.DIRECTORY_SEPARATOR);
#define('BLIBRARIESFRAMEWORKPATH',  BFRAMEWORKPATH.'libraries'.DIRECTORY_SEPARATOR);

//Initialize autoloader
$loader=require(BROOTPATH.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');
Brilliant\MVC\BMVCManager::componentPathAdd();
