<?php

function carritoAgregar(int $productoId, int $cantidad = 1): void
{
  if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
  }

  if (isset($_SESSION["carrito"][$productoId])) {
    $_SESSION["carrito"][$productoId] += $cantidad;
  } else {
    $_SESSION["carrito"][$productoId] = $cantidad;
  }
}

function carritoEliminar(int $productoId): void
{
  unset($_SESSION["carrito"][$productoId]);
}

function carritoVaciar(): void
{
  $_SESSION["carrito"] = [];
}

// Cruza lo guardado en sesión con los datos reales de productos
function carritoObtenerItems(array $productos): array
{
  $carrito = $_SESSION["carrito"] ?? [];
  $items = [];

  foreach ($carrito as $productoId => $cantidad) {
    foreach ($productos as $producto) {
      if ($producto["id"] === $productoId) {
        $items[] = [
          "producto" => $producto,
          "cantidad" => $cantidad,
          "subtotal" => $producto["precio"] * $cantidad,
        ];
        break;
      }
    }
  }

  return $items;
}

function carritoTotal(array $items): float
{
  return array_sum(array_column($items, "subtotal"));
}

function carritoCantidadTotal(): int
{
  return array_sum($_SESSION["carrito"] ?? []);
}