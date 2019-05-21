<!-- Navigation -->
<nav class="bg-success navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?= $site->url() ?>">
      Fútbol Lagartos
      <!-- <img src="<?= $kirby->url() ?>/assets/images/logo.png" alt=""> -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?= $site->url() ?>">Inicio
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="<?= $site->children()->find('futbol-7-masculino')->url() ?>">Fútbol Masculino</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $site->children()->find('faq')->url() ?>">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $site->children()->find('reglamento')->url() ?>">Reglamento</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
