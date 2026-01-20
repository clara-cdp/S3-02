<?php


spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class Wallet implements Item
{

    public function takeItem()
    {
        return "💸 That clinking, clanking sound, Can make the world go 'round ! 💸";
    }
}
