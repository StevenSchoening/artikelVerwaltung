<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 20/02/2018
 * Time: 12:32
 */

require_once 'init.php';

$smarty->debugging = true;

$smarty->display($template_dir . 'index.tpl');