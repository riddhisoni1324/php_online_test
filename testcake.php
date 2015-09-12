<?php
phpinfo();
 if (!extension_loaded('Imagick')) {
   echo 'hiiiiii';     //Load some error.
  }
  
  
  
  if (extension_loaded('imagick')) {
    echo 'IMagick extension loaded okay.';
} else {
    echo 'IMagick extension not loaded! Meh!';
}
  print_r(get_loaded_extensions());
$image = new Imagick();


?>