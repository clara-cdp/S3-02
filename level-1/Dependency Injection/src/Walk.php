<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class Walk implements Transport
{
    public function movingAround()
    {
        return "such a nice day! Today, I walk 😎 ";
    }
}
