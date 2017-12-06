<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload image</title>
  </head>
  <body>

<?php

  if (isset($_SESSION['msg'])) {
    echo '<b>'.$_SESSION['msg'].'</b></br>';
    unset($_SESSION['msg']);
  }

 ?>

    <form enctype="multipart/form-data" action="uploading.php" method="post">
      <p><input type="file" name="img"></p>
        <input type="submit" value="Upload">
    </form>

  </body>
</html>
