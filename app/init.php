<?php
require_once 'config/config.php';

function core($class) {
    $file = __DIR__ . '/core/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('core');
