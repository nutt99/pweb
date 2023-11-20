<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Breakpoints</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  </head>
  <body class="p-5">
  <div class="text-center">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
    <?php
    for ($i = 10; $i < 20; $i++) {
    ?>
    <div class="col container mb-lg-3 mb-md-2 mb-4">
        <div class="p-3 container bg-danger"><?= $i;?></div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
