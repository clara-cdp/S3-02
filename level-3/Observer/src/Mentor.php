<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class Mentor implements Observer
{

    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function submittedTask(Task $task)
    {
        echo "Hi! " . $this->name . ", <br> You have a new task submitted by " .  $task->getStudent() . ": " . $task->getTitle();
    }
}
