<?php

namespace app\controllers;

class Site
{
    public function home()
    {
        require_once __DIR__ . '/../views/home.php';
    }

    public function materias()
    {
        require_once __DIR__ . '/../views/post.php';
    }
}
