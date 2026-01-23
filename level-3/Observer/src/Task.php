<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});


class Task
{
    protected $title;
    private $studentName;

    public function __construct(string $title, string $studentName)
    {
        $this->title = $title;
        $this->studentName = $studentName;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getStudent()
    {
        return $this->studentName;
    }
}
