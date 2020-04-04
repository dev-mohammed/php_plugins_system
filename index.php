<?php

include('includes/plugins.php');
include('plugins/testActionsPlugin.php');
include('plugins/testFiltersPlugin.php');

function printNumbers($number)
{
    do_action('before_printing_numbers');
    for($i = 1 ; $i <= $number ; $i++)
    {
        echo $i . '<br>';
    }
    do_action('after_printing_numbers');
}

//printNumbers(10);


function printData()
{
    do_action('before_display_data');
    
    $users = array(
        array('name' => 'ahmed' , 'age' => 25),
        array('name' => 'adel' , 'age' => 24),
        array('name' => 'mohamed' , 'age' => 29),
    );

    $users = do_filter('users_data' , $users);

    foreach($users as $user){
        echo 'Name is : ' , $user['name'] , ' And Age is : ' , $user['age'] . '<br>';
    }

    var_dump($users);
    do_action('after_display_data');
}

printData();