
<?php

$files = file('style.css');

$new_file = array();
foreach ($files as $line) {
 if (!preg_match('/border-radius/',$line)) { 
        $new_file[] = $line; 
   }
 }


file_put_contents('style.css', $new_file);
