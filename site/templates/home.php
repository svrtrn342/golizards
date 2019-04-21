<?php snippet('header') ?>

<link href="https://fonts.googleapis.com/css?family=Audiowide|Monoton|Poiret+One|Press+Start+2P" rel="stylesheet">

<style>
a.slider-text,p.slider-text  {
  font-size: 20px;
  text-shadow: 0 0 10px #000;
  max-width: 50%;
  text-decoration: none;
  color: #fff
}
.mapa{
  background: url('<?= $page->mapa()->toFile()->url() ?>');
  padding: 20px;
}

.carousel { grid-area: fotos; }
.marquee {
  grid-area: quote;
  height: fit-content;
  margin: auto 0;
  display: flex;
  align-items: center;
}
.torneodiv { grid-area: torneos;
  /* padding: 10px; */
  height: 90px;
  background: url('<?php echo url('assets/images/fooball.jpg') ?>');
  background-size: cover;
  background-position: 50% 50%;
  color: #fff;
  transition: all ease 0.5s;
  padding: 20px !important;
  text-align: left !important;
}
.torneodiv:hover{
  /* background-position: 55% 55% !important */
}
.textodiv { grid-area: texto; }
.sponsordiv { grid-area: sponsors;
  padding: 0 !important;
  background: 0 !important;
  box-shadow: 0 0 !important;
  display: flex;
  align-items: center;
}
.contacto{
  grid-area: contacto;
  padding: 20px;
  zoom: 0.8;
}

.grid-container {
  display: grid;
  grid-template-areas:
  'header header'
  'fotos torneos'
  'fotos texto'
  'fotos sponsors'
  'quote sponsors'
  'title title'
  'mapa contacto'
  ;
  grid-gap: 5px;
  padding: 10px;
  grid-template-columns: 50%;
}
@media only screen and (max-width: 768px) {
  .grid-container {
    grid-template-areas:
    'header header'
    'fotos fotos'
    'torneos torneos'
    'sponsors sponsors'
    'quote quote'
    'title title'
    'mapa contacto'
    'texto texto'
    ;
    grid-template-columns: 40%;
  }
}

h6{
  margin: 20px;
}
h6:hover {
  /*text-decoration: underline;*/
}

</style>

</head>
<body>

  <div class="grid-container">
    <?php snippet('header-grid') ?>

    <div class="carousel p-0">
      <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
        <div class="carousel-inner h-100">
          <?php foreach ($page->children()->find('carousel')->images() as $slide): ?>
            <div class="carousel-item h-100">
              <div class="h-100" style="background: url('<?= $slide->url() ?>'); background-size: cover; color: #fff; text-align: left; padding: 20px">
                <p class="slider-text"><?= $slide->text() ?>
                </div>
                <!-- <img class="d-block w-100" src="<?= $slide->url() ?>" alt="First slide"> -->
              </div>
          <?php endforeach ?>
          <script type="text/javascript">
            $('.carousel-item').first().toggleClass('active')
          </script>

          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>


      <div class="marquee poiret"><marquee scrollamount="10"><?= $page->banner() ?></marquee></div>
      <div class="torneodiv bitten"><a href="<?= $site->children()->find('futbol-7-masculino')->url() ?>" class="slider-text">Fútbol 7 Masculino</a></div>
      <div class="textodiv bitten" style="padding: 20px; text-align: left">

        <p class="poiret"><?= $page->text() ?></p>

      </div>
      <div class="sponsordiv">
        <div class="row">

          <?php foreach ($site->children()->find('sponsors')->images() as $sponsor): ?>
            <div class="col sponsorcol">
              <img class="sponsor w-100" src="<?= $sponsor->url() ?>" alt="">
            </div>
          <?php endforeach ?>

        </div>
      </div>

      <h1 class="page-title">Contacto</h1>

      <a href="https://goo.gl/maps/BtPVAc6KGZP7ZhgGA" target="_blank" class="mapa bitten">
        <h2 class="">cómo llegar?</h2>
      </a>

      <div class="contacto bitten">
        <h4>Los Lagartos Country Club</h4>
        <h5>Ramal Pilar Km 46, <br>Pilar, Buenos Aires</h5>
        <div class="poiret">
          <?= $page->mail()->kirbytext() ?>
        </div>
      </div>

      <!-- container grid -->
    </div>

    <?php snippet('footer') ?>
