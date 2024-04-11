<?php
if( $argv[1] === "markdown") {
    require 'vendor/autoload.php';
    $parsedown = new Parsedown();
    $content = file_get_contents($argv[2]);
    $htmlContent = $parsedown->text($content);
    file_put_contents($argv[3], $htmlContent);
}