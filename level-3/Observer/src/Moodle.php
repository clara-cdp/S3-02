<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});


class Moodle implements Observable
{
    protected $mentors = [];

    protected function sendNotification(Task $task)
    {
        foreach ($this->mentors as $mentor) {
            $mentor->submittedTask($task);
        }
    }

    public function attach(Observer $mentor)
    {
        $this->mentors[] = $mentor;
    }

    public function addTask(Task $task)
    {
        $this->sendNotification($task);
    }
}
