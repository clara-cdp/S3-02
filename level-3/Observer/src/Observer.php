<?php

interface Observer
{
    public function submittedTask(Task $task);
}
