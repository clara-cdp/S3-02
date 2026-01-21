<?php

require('Tigger.php');

Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();

echo $tigger->getCounter();
