<?php

$file = 'extras/user.txt';

if(file_exists($file)){
    // echo readfile($file);

    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
}else{
    $handle = fopen($file, 'w');
    $content = 'nish' . PHP_EOL .'singh' . PHP_EOL .'yadav' . PHP_EOL .'Nishant';
    fwrite($handle, $content);
    fclose($handle);

}
