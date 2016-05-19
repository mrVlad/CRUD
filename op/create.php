<?php

$repo = array(
  'name' => '',
  'price' => 0,
);

if (!empty($_POST['save'])) {
  $sth = $pdo->prepare('INSERT INTO products (name, price, storage) VALUES (:name, :price, :storage)');
  $sth->execute(array(
    ':name' => $_POST['name'],
    ':price' => $_POST['price'],
    ':storage' => $_POST['storage'],
  ));

  header('Location: index.php');
  exit;
}

$storage = get_available_products();

ob_start();

require __DIR__ . '/../view/form.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
