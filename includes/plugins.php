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
            if(function_exists($funcName)){
                call_user_func($funcName);
            }
        }
    }
}



// filters

$filters = array();

/**
 * add new filter to array
 */
function add_filter($hook , $functionName)
{
    global $filters;
    $filters[$hook][] = $functionName;
}

/**
 * Exceute Filter
 */
function do_filter($hook , $content)
{
    global $filters;
    if(isset($filters[$hook])){
        foreach($filters[$hook] as $funcName){
            if(function_exists($funcName))
            {
                $content = call_user_func($funcName , $content);
            }
        }
    }
    return $content;
}


foreach(glob('plugins/*.php') as $file)
{
    include($file);
}