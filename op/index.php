<?php

$sth = $pdo->prepare('SELECT 
 p.id,
 p.name,
 p.price,
 p.storage,
 s.name AS storage,
 s.sity AS sity
FROM products p
INNER JOIN storage s ON p.storage = s.id_storage
ORDER BY p.id ASC');
$sth->execute();

$repo = array();
while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
  $repo[] = $row;
}

ob_start();

require __DIR__ . '/../view/op_index.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
