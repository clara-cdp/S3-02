<?php

spl_autoload_register(function ($class_name) {

    $directory = 'src/';

    $file = $directory . $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

$task = new Task('Observer, patterns', 'Clara cdp');
$mentor = new Mentor('Ruben');

$moodlePost = new Moodle();
$moodlePost->attach($mentor);

$moodlePost->addTask($task);

echo $moodlePost->addTask($task);
