<?php

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
  attributes: ["title" => "FénixCode — Desarrollo Web & Apps"],
);

// ─── HOME ─────────────────────────────────────────────────────────────────
$app->get("/", function ($request, $response) use ($renderer) {
  return $renderer->render($response, "home.php", [
    "activePage" => "home",
    "title"      => "FénixCode — Desarrollo Web & Apps",
  ]);
});

// ─── SERVICIOS ────────────────────────────────────────────────────────────
$app->get("/servicios", function ($request, $response) use ($renderer) {
  return $renderer->render($response, "servicios.php", [
    "activePage" => "servicios",
    "title"      => "Servicios — FénixCode",
  ]);
});

// ─── TRABAJOS ─────────────────────────────────────────────────────────────
$app->get("/trabajos", function ($request, $response) use ($renderer) {
  return $renderer->render($response, "trabajos.php", [
    "activePage" => "trabajos",
    "title"      => "Nuestros Trabajos — FénixCode",
  ]);
});

// ─── EQUIPO ───────────────────────────────────────────────────────────────
$app->get("/equipo", function ($request, $response) use ($renderer) {
  return $renderer->render($response, "equipo.php", [
    "activePage" => "equipo",
    "title"      => "El Equipo — FénixCode",
  ]);
});

// ─── CONTACTO GET ─────────────────────────────────────────────────────────
$app->get("/contacto", function ($request, $response) use ($renderer) {
  return $renderer->render($response, "contacto.php", [
    "activePage" => "contacto",
    "title"      => "Contacto — FénixCode",
    "mensaje"    => null,
    "error"      => null,
    "formData"   => [],
  ]);
});

// ─── CONTACTO POST ────────────────────────────────────────────────────────
$app->post("/contacto", function ($request, $response) use ($renderer) {
  $data = (array) $request->getParsedBody();

  $nombre  = trim($data["nombre"]  ?? "");
  $email   = trim($data["email"]   ?? "");
  $asunto  = trim($data["asunto"]  ?? "");
  $mensaje = trim($data["mensaje"] ?? "");

  $error = null;
  $exito = null;

  if (!$nombre || !$email || !$asunto || !$mensaje) {
    $error = "Por favor completá todos los campos obligatorios.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "El email ingresado no es válido.";
  } else {
    $exito = "¡Mensaje recibido! Te contactaremos en menos de 24 horas.";
  }

  return $renderer->render($response, "contacto.php", [
    "activePage" => "contacto",
    "title"      => "Contacto — FénixCode",
    "mensaje"    => $exito,
    "error"      => $error,
    "formData"   => $data,
  ]);
});

$app->addErrorMiddleware($debug, true, true);

return $app;