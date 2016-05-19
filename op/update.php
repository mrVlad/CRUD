<?php

$sth = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$sth->execute(array(':id' => $_GET['id']));

if ($repo = $sth->fetch(PDO::FETCH_ASSOC)) {

  if (!empty($_POST['save'])) {
    $sth = $pdo->prepare('UPDATE products SET name = :name, price = :price, storage = :storage WHERE id = :id');
    $sth->execute(array(
      ':name' => $_POST['name'],
      ':price' => $_POST['price'],
      ':storage' => $_POST['storage'],
      ':id' => $_GET['id'],
    ));

    header('Location: index.php');
    exit;
  }

  $storage = get_available_products();

  ob_start();

  require __DIR__ . '/../view/form.php';

  $content = ob_get_clean();

  require __DIR__ . '/../view/main.php';
}
