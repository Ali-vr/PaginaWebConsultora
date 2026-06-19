<!doctype html>
<html lang="es" data-bs-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= html($title) ?></title>

    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,700&family=Work+Sans:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link href="/css/tienda.css" rel="stylesheet" />
  </head>
  <body>
    <?= $this->fetch("partials/navbar.php", ["categorias" => $categorias]) ?>
    <?= $this->fetch("partials/subnav.php", [
      "categorias" => $categorias,
      "categoriaActiva" => $categoriaSlug ?? null,
    ]) ?>

    <main><?= $content ?></main>

    <?= $this->fetch("partials/footer.php") ?>

    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>