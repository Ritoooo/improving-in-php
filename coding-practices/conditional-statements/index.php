<?php
function test1($a)
{
    if ($a) {
        return true;
    } else {
        return false;
    }
}

// vs.

function test2($a)
{
    if ($a) {
        return true;
    }
    return false;    // else is not necessary
}

// or even shorter:

function test3($a)
{
    return (bool) $a;
}