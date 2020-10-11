<?php

class Database
{
    public static function connect()
    {
        $db = new PDO('mysql:host=localhost;dbname=cheikhna', 'root', '');
        $db->exec('set names utf8');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
}
