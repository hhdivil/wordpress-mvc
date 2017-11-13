<?php

spl_autoload_register(function ($class) {
    $file = MVC_LIB_DIR . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
