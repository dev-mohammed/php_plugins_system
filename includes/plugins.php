<?php

// actions 

$actions = array(); // all actions

/**
 * add new action to array
 */
function add_action($hook , $functionName)
{
    global $actions;
    $actions[$hook][] = $functionName;
}

/**
 * excute all function related to hook
 */
function do_action($hook)
{
    global $actions;
    if(isset($actions[$hook])){
        foreach($actions[$hook] as $funcName){
            call_user_func($funcName);
        }
    }
}

