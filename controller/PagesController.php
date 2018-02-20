<?php

/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 20.02.18
 * Time: 12:32
 */
class PagesController
{
    public function home()
    {
        require_once('views/pages/home.php');
    }

    public function showArticles()
    {
        require_once('views/pages/home.php');
    }

    public function addArticle()
    {
        require_once('views/pages/home.php');
    }

    public function error()
    {
        require_once('views/pages/error.php');
    }

}