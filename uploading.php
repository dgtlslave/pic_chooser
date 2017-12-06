

<?php

  session_start();



  if (!empty($_FILES['img']['tmp_name'])) {

    if ($_FILES['img']['error']) {
      $_SESSION['msg'] = 'Upload error!!!';
      header('Location:upload.php');
    }

    if ($_FILES['img']['size'] > 2 * 1024 * 1024) {
      $_SESSION['msg'] = 'Your file is too heavy.';
      header('Location:upload.php');
    }

    switch ($_FILES['img']['type']) {

      case 'image/jpeg':
      case 'image/pjpeg':
      $type = 'jpeg';
      break;

      case 'image/png':
      case 'image/x-png':
      $type = 'png';
      break;

      case 'image/gif':
      $type = 'gif';
      break;

      default:
      $_SESSION['msg'] = 'Wrong image type';
      header('Location:upload.php');
      break;
    }

    if (!move_uploaded_file($_FILES['img']['tmp_name'], 'img/original/'.$_FILES['img']['name'])) {
      $_SESSION['msg'] = 'File could not be loaded';
      header('Location:upload.php');
    }
      $_SESSION['msg'] = 'File uploaded successfully';
      header('Location:upload.php');
    


  } else {
    $_SESSION['msg'] = 'You did not upload the file!';
    header('Location:upload.php');
  }


 ?>
