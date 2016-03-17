<?php
// functions.php

// include_once 'includme.php';
// require_once 'includethem.php';

// inputhaskey has to return a boolean TRUE or FALSE
// inputgetkey returns the value specifiekd by the key or null if the key is not set
// excape($input) returns the input as safeley escaped string.

// request is a super global
// $_request DOES NOT exist

// request is used as a (flip flop) / placeholder

function inputHas($key){
    return isset($_REQUEST[$key]);
}
function inputGet($key){
    $value = inputHas($key) ? $_REQUEST[$key] : '';
    return $value;
}
function escape($input){
    return htmlspecialchars(strip_tags($input));
}

// function pingPongIncrease(){

// }


?>
