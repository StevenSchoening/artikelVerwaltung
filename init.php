<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 20/02/2018
 * Time: 12:31
 */

require_once 'smarty/Smarty.class.php';


$smarty = new Smarty;

$rootDir = __DIR__;

$template_dir = realpath($rootDir . DIRECTORY_SEPARATOR . 'templates');

spl_autoload_register(function($class)
{
    global $rootDir;
    include  "$rootDir\\classes\\$class.php ";
});