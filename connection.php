<?php
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 20.02.18
 * Time: 13:10
 */

class Db
{
    private static $instance = NULL;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=artikel_verwaltung', 'root', 'root', $pdo_options);
        }
        return self::$instance;
    }
}

