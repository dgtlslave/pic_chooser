

<?php

  function resize_image($type, $path) {
    switch ($type) {
      case 'jpeg':
      $img = imagecreatefromjpeg($path);
      break;

      case 'png':
      $img = imagecreatefrompng($path);
      break;

      case 'gif':
      $img = imagecreatefromgif($path);
      break;
    }



  }

 ?>
