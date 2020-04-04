<?php

include('includes/plugins.php');
include('plugins/testActionsPlugin.php');

function printNumbers($number)
{
    do_action('before_printing_numbers');
    for($i = 1 ; $i <= $number ; $i++)
    {
        echo $i . '<br>';
    }
    do_action('after_printing_numbers');
}

printNumbers(10);