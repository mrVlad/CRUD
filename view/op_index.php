<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="center">
  <div class="content">
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Storage</th>
        <th>Sity</th>
        <th>Operations</th>
      </tr>
      <?php foreach ($repo as $value) : ?>
      <tr>
        <td><?php print htmlspecialchars($value['id']); ?></td>
        <td><?php print htmlspecialchars($value['name']); ?></td>
        <td><?php print htmlspecialchars($value['price']); ?>$</td>
        <td><?php print htmlspecialchars($value['storage']); ?></td>
        <td><?php print htmlspecialchars($value['sity']); ?></td>
        <td>
          <a href="index.php?op=update&id=<?php print htmlspecialchars($value['id']); ?>">Edit</a>
          <a href="index.php?op=delete&id=<?php print htmlspecialchars($value['id']); ?>">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>

    <div class="create_btn">
      <a href="index.php?op=create">Create</a>
    </div>
  </div>
</div>
</body>
</html>