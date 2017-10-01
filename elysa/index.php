#!/usr/local/bin/php
<?php

/**
 * Class Elysa
 */
class Elysa
{
    /**
     * @param $argc
     * @param $argv
     */
    public function parse($argc, $argv)
    {
        for ($i = 0; $i <= $argc - 1; ++$i) {
            print "$i: $argv[$i]\n";
        }
    }
}

$elysa = new Elysa();
$elysa->parse($argc, $argv);
?>