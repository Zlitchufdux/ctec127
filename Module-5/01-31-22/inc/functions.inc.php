<?php

$message = "I am a message";

function hello()
{
    return "Hello World";
}

function goodbye()
{
    return "Goodbye";
}

function message()
{
    global $message;
    return $message;
}
