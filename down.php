<?php

$file = 'index.html';

if (file_exists($file) && !unlink($file)) {
    die( "Unable to remove $file" );
}

$url = '/';
header('Location: '.$url);
