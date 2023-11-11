<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Breakpoints</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  </head>
  <body>
  <div class="container text-center">
  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
    <?php
    for ($i = 1; $i < 10; $i++) {
    ?>
    <div class="col mb-lg-3 mb-md-2 mb-4">
        <div class="p-3 container border border-warning bg-danger"><?= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate fuga quam, voluptatum unde eveniet commodi molestiae consectetur illum pariatur, consequatur consequuntur. Quo, error illum. Maiores quisquam voluptatem ducimus laudantium eum!
Accusamus, officia iure non ab, delectus tempore similique quos facere nostrum labore libero consequatur laborum quidem quia maxime atque velit quas nemo facilis animi amet ad corporis eos. Nobis, nihil?
Natus quo nostrum quam,  deleniti minima ipsum nemo sint.
";?></div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
