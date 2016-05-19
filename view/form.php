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

      <form method="post">
        <div class="create">
          <div>
            <label for="name">Name:</label>
            <input name="name" type="text" value="<?php print htmlspecialchars($repo['name']); ?>" id="name">
          </div>
  
          <div>
            <label for="price">Price</label>
            <input name="price" type="number" value="<?php print ($repo['price']); ?>" min="0" max="999999" id="price">
          </div>
  
          <div>
            <label for="storage">Storage</label>
            <select id="storage" name="storage">
              <?php foreach ($storage as $value) : ?>
              <option value="<?php print htmlspecialchars($value['id_storage']); ?>"><?php print htmlspecialchars($value['name']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          
          <div>
            <input type="submit" name="save" value="Save">
          </div>
        </div>  
      </form>
    </div>
  </div>
</body>
</html>
