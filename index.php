<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 20/02/2018
 * Time: 12:32
 */

require_once 'init.php';

//$smarty->debugging = true;

$smarty->display(realpath($template_dir . DIRECTORY_SEPARATOR . 'index.tpl'));



# add page controller