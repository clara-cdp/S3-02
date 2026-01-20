<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class oysterCard implements Transport
{
    public function movingAround()
    {
        return "...and Mind the gap. 🚇";
    }
}
