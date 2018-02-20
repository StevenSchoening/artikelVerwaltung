<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 20/02/2018
 * Time: 12:31
 */

require_once 'smarty/Smarty.class.php';

$template_dir = 'C:\xampp\htdocs\artikelverwaltung\templates\\';

$smarty = new Smarty;

$rootDir = __DIR__;

spl_autoload_register(function($class)
{
    global $rootDir;
    include  "$rootDir\\classes\\$class.php ";
});