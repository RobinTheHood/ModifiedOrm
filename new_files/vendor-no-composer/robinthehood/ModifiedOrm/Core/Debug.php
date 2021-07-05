<?php

namespace RobinTheHood\ModifiedOrm\Core;

class Debug
{
    public static function out($value, $verbose = true)
    {
        if ($verbose) {
            echo('<code><pre>');
            print_r($value);
            echo('</pre></code>');
        }
    }

    public static function outDie($value, $verbose = true)
    {
        if ($verbose) {
            self::out($value, true);
            die();
        }
    }
}
