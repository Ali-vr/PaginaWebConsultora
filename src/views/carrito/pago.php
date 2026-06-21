<div class="container my-5">
  <?= $this->fetch("partials/carrito-pasos.php", ["pasoActual" => 2]) ?>

  <form action="/carrito/pago" method="post" class="row g-4">
    <div class="col-lg-8">
      <h2 class="h5 mb-3">Dirección de envío</h2>

      <div class="bg-white rounded p-4 mb-4">
        <div class="row g-3">
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre y apellido</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="col-md-6">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
          </div>
          <div class="col-12">
            <label for="calle" class="form-label">Calle y número</label>
            <input type="text" class="form-control" id="calle" name="calle" required>
          </div>
          <div class="col-md-6">
            <label for="localidad" class="form-label">Localidad</label>
            <input type="text" class="form-control" id="localidad" name="localidad" required>
          </div>
          <div class="col-md-4">
            <label for="provincia" class="form-label">Provincia</label>
            <input type="text" class="form-control" id="provincia" name="provincia" required>
          </div>
          <div class="col-md-2">
            <label for="codigo_postal" class="form-label">CP</label>
            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
          </div>
        </div>
      </div>

      <h2 class="h5 mb-3">Método de pago</h2>

      <div class="mb-4">
        <label class="metodo-pago-card d-flex align-items-center gap-3 p-3 mb-2 rounded">
          <input type="radio" name="metodo_pago" value="tarjeta" checked>
          <span>Tarjeta de crédito/débito</span>
        </label>

        <label class="metodo-pago-card d-flex align-items-center gap-3 p-3 rounded">
          <input type="radio" name="metodo_pago" value="mercadopago">
          <span>Mercado Pago</span>
        </label>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="bg-white rounded p-4">
        <h2 class="h5 mb-3">Resumen</h2>

        <?php foreach ($items as $item): ?>
          <div class="d-flex justify-content-between small mb-2">
            <span><?= html($item["producto"]["nombre"]) ?> x<?= (int) $item["cantidad"] ?></span>
            <span>$<?= number_format($item["subtotal"], 0, ",", ".") ?></span>
          </div>
        <?php endforeach; ?>

        <hr>

        <div class="d-flex justify-content-between mb-3">
          <span>Total</span>
          <span class="fw-bold fs-5">$<?= number_format($total, 0, ",", ".") ?></span>
        </div>

        <button type="submit" class="btn btn-primary w-100">Confirmar pedido</button>
        <a href="/carrito" class="btn btn-link w-100 mt-2">Volver al carrito</a>
      </div>
    </div>
  </form>
</div>