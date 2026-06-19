<div class="container my-5">
  <h1 class="mb-4">Contacto</h1>
  <p>¿Tenés dudas sobre un pedido o querés encargar algo a medida? Escribinos.</p>

  <form class="col-md-6" method="post" action="/contacto">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="mensaje" class="form-label">Mensaje</label>
      <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>