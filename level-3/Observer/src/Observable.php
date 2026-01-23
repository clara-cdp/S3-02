<?php

interface Observable
{
    public function attach(Observer $mentor);
    public function addTask(Task $task);
}
