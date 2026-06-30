<?php

declare(strict_types=1);

use Slim\App;
use Slim\Views\PhpRenderer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Registra todas las rutas de FénixCode.
 * Recibe $app y $renderer desde bootstrap.php.
 */
return function (App $app, PhpRenderer $renderer): void {

    // ─── HOME ────────────────────────────────────────────────────────────────
    $app->get('/', function (Request $request, Response $response) use ($renderer) {
        return view($renderer, $response, 'home.php', [
            'title'      => 'FénixCode — Desarrollo Web & Apps',
            'activePage' => 'home',
        ]);
    });

    // ─── SERVICIOS ───────────────────────────────────────────────────────────
    $app->get('/servicios', function (Request $request, Response $response) use ($renderer) {
        return view($renderer, $response, 'servicios.php', [
            'title'      => 'Servicios — FénixCode',
            'activePage' => 'servicios',
        ]);
    });

    // ─── TRABAJOS / PORTAFOLIO ───────────────────────────────────────────────
    $app->get('/trabajos', function (Request $request, Response $response) use ($renderer) {
        return view($renderer, $response, 'trabajos.php', [
            'title'      => 'Nuestros Trabajos — FénixCode',
            'activePage' => 'trabajos',
        ]);
    });

    // ─── EQUIPO ──────────────────────────────────────────────────────────────
    $app->get('/equipo', function (Request $request, Response $response) use ($renderer) {
        return view($renderer, $response, 'equipo.php', [
            'title'      => 'El Equipo — FénixCode',
            'activePage' => 'equipo',
        ]);
    });

    // ─── CONTACTO GET ────────────────────────────────────────────────────────
    $app->get('/contacto', function (Request $request, Response $response) use ($renderer) {
        return view($renderer, $response, 'contacto.php', [
            'title'      => 'Contacto — FénixCode',
            'activePage' => 'contacto',
            'mensaje'    => null,
            'error'      => null,
            'formData'   => [],
        ]);
    });

    // ─── CONTACTO POST ───────────────────────────────────────────────────────
    $app->post('/contacto', function (Request $request, Response $response) use ($renderer) {
        $data = (array) $request->getParsedBody();

        $nombre  = trim($data['nombre']  ?? '');
        $email   = trim($data['email']   ?? '');
        $asunto  = trim($data['asunto']  ?? '');
        $mensaje = trim($data['mensaje'] ?? '');

        $error = null;
        $exito = null;

        if (!$nombre || !$email || !$asunto || !$mensaje) {
            $error = 'Por favor completá todos los campos obligatorios.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'El email ingresado no es válido.';
        } else {
            // Aquí iría el envío real (mail(), PHPMailer, SMTP, etc.)
            $exito = '¡Mensaje recibido! Te contactaremos en menos de 24 horas.';
        }

        return view($renderer, $response, 'contacto.php', [
            'title'      => 'Contacto — FénixCode',
            'activePage' => 'contacto',
            'mensaje'    => $exito,
            'error'      => $error,
            'formData'   => $data,
        ]);
    });
};
