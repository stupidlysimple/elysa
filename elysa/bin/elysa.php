#!/usr/bin/env php
<?php
include(__DIR__ . '/../vendor/autoload.php');
$elysa = new Core\Elysa();
$elysa->parse($argc, $argv);
?>