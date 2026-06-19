<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

Dotenv::createImmutable(__DIR__ . '/..')->safeLoad();

$env = $_ENV["APP_ENV"] ?? "prod";
$allowedEnvs = ["dev", "prod"];

if (!in_array($env, $allowedEnvs, true)) {
  throw new RuntimeException("APP_ENV inválido: $env");
}

$debug = $env === "dev";

$app = AppFactory::create();

$renderer = new PhpRenderer(
  templatePath: __DIR__ . "/views",
  attributes: ["title" => "Maderas Artesanales | Tienda Online"],
);

// Datos del catálogo (a futuro: reemplazar estos requires por consultas a la DB)
$categorias = require __DIR__ . "/data/categorias.php";
$productos = require __DIR__ . "/data/productos.php";

// Wrapper sobre view() que siempre manda $categorias (la usa el header en cada página)
$render = function (
  ResponseInterface $response,
  string $template,
  array $data = [],
  ?string $layout = null,
) use ($renderer, $categorias): ResponseInterface {
  return view($renderer, $response, $template, [...$data, "categorias" => $categorias], $layout);
};

// Página principal
$app->get("/", function ($request, $response) use ($render, $productos) {
  return $render($response, "index.php", [
    "productos" => $productos,
  ]);
});

// Categorías (acá se filtra: solo productos de esa categoría)
$app->get("/categoria/{slug}", function ($request, $response, array $args) use ($render, $categorias, $productos) {
  $slug = $args["slug"];

  if (!array_key_exists($slug, $categorias)) {
    return $render($response->withStatus(404), "404.php", [
      "title" => "Página no encontrada",
    ]);
  }

  $productosFiltrados = array_values(array_filter(
    $productos,
    fn(array $producto): bool => $producto["categoria"] === $slug,
  ));

  return $render($response, "categoria.php", [
    "categoriaSlug" => $slug,
    "categoriaNombre" => $categorias[$slug],
    "productos" => $productosFiltrados,
    "title" => $categorias[$slug] . " | Maderas Artesanales",
  ]);
});

// Contacto
$app->get("/contacto", function ($request, $response) use ($render) {
  return $render($response, "contacto.php", [
    "title" => "Contacto | Maderas Artesanales",
  ]);
});

$app->addErrorMiddleware($debug, true, true);

return $app;