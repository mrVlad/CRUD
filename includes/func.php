<?php

function get_available_products() {
  global $pdo;

  $sth = $pdo->prepare("SELECT * FROM storage ORDER BY id_storage ASC");
  $sth->execute();

  $storage = array();
  while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    $storage[] = $row;
  }

  return $storage;
}
