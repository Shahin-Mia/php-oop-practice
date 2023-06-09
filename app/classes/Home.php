<?php

namespace App\Classes;

class Home
{

    public function index()
    {
        header("Location: route.php?page=home");
    }
}
