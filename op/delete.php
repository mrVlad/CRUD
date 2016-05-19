<?php

$sth = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$sth->execute(array(':id' => $_GET['id']));

if ($repo = $sth->fetch(PDO::FETCH_ASSOC)) {

  if (!empty($_POST['delete'])) {

    $sth = $pdo->prepare('DELETE FROM products WHERE id = :id');
    $sth->execute(array(':id' => $_GET['id']));

    header('Location: index.php');
    exit;
  }
  elseif (!empty($_POST['cancel'])) {
    header('Location: index.php');
    exit;
  }

  ob_start();

  require __DIR__ . '/../view/op_delete.php';

  $content = ob_get_clean();

  require __DIR__ . '/../view/main.php';
}
