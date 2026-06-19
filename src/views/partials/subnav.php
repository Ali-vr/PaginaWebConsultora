<nav class="subnav-categorias">
  <div class="container">
    <ul class="nav justify-content-center flex-wrap py-2">
      <?php foreach ($categorias as $slug => $nombre): ?>
        <li class="nav-item"><a class="nav-link <?= ($categoriaActiva ?? null) === $slug ? "active" : "" ?>" href="/categoria/<?= html($slug) ?>"><?= html($nombre) ?></a></li>
      <?php endforeach; ?>
      <li class="nav-item"><a class="nav-link" href="/contacto">Contacto</a></li>
    </ul>
  </div>
</nav>