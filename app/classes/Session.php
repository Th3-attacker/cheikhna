<?php
class Session
{
    public static function setMessage($type, $message)
    {
        setcookie($type, $message, time() + 5, "/");
    }
}
