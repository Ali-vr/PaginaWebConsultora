<nav class="navbar navbar-expand-lg navbar-principal" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="/">🪵 Maderas Artesanales</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipal">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarPrincipal">
      <form class="d-flex mx-auto my-2 my-lg-0" style="max-width: 420px; width: 100%;" role="search">
        <input class="form-control" type="search" name="q" placeholder="Buscar productos..." aria-label="Buscar">
        <button class="btn btn-outline-light ms-2" type="submit">
          <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg>
        </button>
      </form>

      <a href="/carrito" class="btn-carrito ms-lg-3" aria-label="Carrito de compras">
        <svg width="22" height="22" viewBox="0 0 16 16" fill="currentColor">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 14a1 1 0 1 1 0 2 1 1 0 0 1 0-2m9 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
        </svg>
        <span class="badge bg-danger badge-carrito"><?= (int) $cantidadCarrito ?></span>
      </a>
    </div>
  </div>
</nav>