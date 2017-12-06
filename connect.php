
<?php
try {
  $pdo_connect = new PDO('mysql:host=localhost;dbname=pic_data', 'spacious', 'spacious');
  // echo 'Соединение установлено.';
} catch (PDOException $r) {
  echo 'Возникла ошибка соединения: '.$r->getMessage();
  exit;
}

$sql = 'SELECT user_lastname, user_mail FROM users';
$query = $pdo_connect->query($sql);

// while($row = $query->fetch(PDO::FETCH_ASSOC)) {
//   echo "{$row['user_lastname']}"." : "."{$row['user_mail']}</br>";
// }

$rows = $query->fetchAll(PDO::FETCH_OBJ);
echo '<pre>';
print_r($rows);
echo '</pre>';
?>
