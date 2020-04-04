<?php


function printH1()
{
    echo '<h1> Numbers will be printed :</h1>';
}


add_action('before_printing_numbers' , 'printH1');




function printH1After()
{
    echo '<h1> Numbers printed </h1>';
}


add_action('after_printing_numbers' , 'printH1After');


