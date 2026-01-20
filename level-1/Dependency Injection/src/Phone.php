<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class Phone implements Item
{

    public function takeItem()
    {
        return "grabbing the phone, what else?";
    }
}
