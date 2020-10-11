<?php

session_start();

require_once 'url_base.php';

spl_autoload_register(function ($class_name) {
    $array_path = [
        'app/classes/',
        'database/',
        'models/',
        'controllers/',
    ];

    $parts = explode('\\', $class_name);
    $name  = array_pop($parts);

    foreach ($array_path as $path) {
        $file = sprintf($path . '%s.php', $name);
        if (is_file($file)) {
            include_once $file;
        }
    }
});
