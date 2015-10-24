
<?php

/*

remover.php

Removes all instances of border-radius found from a give file. Modifies original file

*/

if (sizeof($argv) > 1 && file($argv[1])) {
 $borderRadius = 0;

 try {
  $files = file($argv[1]);
  $new_file = array();
  foreach ($files as $line) {
    if (!preg_match('/border-radius/',$line)) {
      $new_file[] = $line;
    }
    else {
      $borderRadius++;
    }
  }

  file_put_contents($argv[1], $new_file);
  if ($borderRadius > 0) {
    echo "Successfully removed ".$borderRadius." instances of border-radius from file ".$argv[1]."\n";
  }
  else {
    echo "Hooray! No border-radius found from file ".$argv[1]."\n";
  }

} catch (Exception $e) {
  echo "Panic! Unexpected error occurred \n";
}

}
else {
  echo "No input file specified or it was not found. Usage: php remover.php file \n";
}

