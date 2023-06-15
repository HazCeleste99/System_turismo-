<?php

spl_autoload_register(function ($classe){


$directory = [
    'Libraries',
    'Helpers'
];

foreach($directory as $directorys):
    $file = (__DIR__.DIRECTORY_SEPARATOR.$directorys.DIRECTORY_SEPARATOR.$classe.'.php');

    if(file_exists($file)):
        require_once $file;
    endif;
endforeach;
});