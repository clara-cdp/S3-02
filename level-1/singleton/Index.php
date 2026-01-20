<?php

require('Tigger.php');

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();

echo $tigger->getCounter();
