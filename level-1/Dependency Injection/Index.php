<?php

spl_autoload_register(function ($class_name) {

    $directory = 'src/';

    $file = $directory . $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});




$patrick = new User('Patrick', new Wallet(), new Keys(), new oysterCard(), new Phone());
$spongebob = new User('SpongeBob', new Wallet(), new Keys(), new Walk(), new Phone());

echo $patrick->exit();
echo $spongebob->exit();
