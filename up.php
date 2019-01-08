<?php

$src = 'error/200.html';
$file = 'index.html';
$contents = file_get_contents($src);

if (!file_put_contents($file,$contents)) {
    die( "Unable to create $file" );
}

$url = '/';
header('Location: '.$url);

