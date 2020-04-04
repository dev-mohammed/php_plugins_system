<?php

function add_new_key($users)
{
    $new_users = array();
    foreach($users as $user)
    {
        if($user['age'] > 24)
        {
            $user['status'] = 'Age > 24';
            $user['name'] = strtoupper($user['name']);
            $new_users[] = $user;
        }
        elseif($user['age'] < 24){
            $user['status'] = 'Age < 24';
            $user['name'] = strtoupper($user['name']);
            $new_users[] = $user;
        }
        else{
            $user['statue'] = 'Age = 24';
            $user['name'] = strtoupper($user['name']);
            $new_users[] = $user;
        }
        
    }
    return $new_users;
}


add_filter('users_data' , 'add_new_key');