<!--?php go($site->find('futbol-7-masculino')->url()) ?-->


<?php snippet('header') ?>


<link href="https://fonts.googleapis.com/css?family=Audiowide|Monoton|Poiret+One|Press+Start+2P" rel="stylesheet">

<style>
a.slider-text,p.slider-text  {
  font-size: 20px;
  text-shadow: 0 0 10px #000;
  max-width: 50%;
  text-decoration: none;
  color: #fff;
  position: absolute;
  bottom: 0;
  margin-right: 20px
}
.mapa{
  background: url('<?= $page->mapa()->toFile()->url() ?>');
  padding: 20px;
}

.carousel-div {
  grid-area: fotos;
  height: 500px;
}

.carousel-item > div{
  background-position: 50% !important;
  /* background: #000 !important */
}

.marquee {
  grid-area: quote;
  height: fit-content;
  margin: auto 0;
  display: flex;
  align-items: center;
}
.torneodiv-a { grid-area: torneos-a;
  /* padding: 10px; */
  /* height: 180px; */
  background: url('<?= $site->children()->find('masculino-a')->boton()->toFile()->url() ?>');
  background-size: cover;
  background-position: 50% 50%;
  color: #fff;
  transition: all ease 0.5s;
  padding: 20px !important;
  text-align: left !important;
}

.torneodiv-b { grid-area: torneos-b;
  /* padding: 10px; */
  /* height: 180px; */
  background: url('<?= $site->children()->find('masculino-b')->boton()->toFile()->url() ?>');
  background-size: cover;
  background-position: 50% 50%;
  color: #fff;
  transition: all ease 0.5s;
  padding: 20px !important;
  text-align: left !important;
}
.torneodiv-fem { grid-area: torneos-fem;
  /* padding: 10px; */
  /* height: 180px; */
  background: url('<?= $site->children()->find('futbol-femenino')->boton()->toFile()->url() ?>');
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

.contacto{
  grid-area: contacto;
  padding: 20px;
  /* zoom: 0.8; */
}

.grid-container {
  display: grid;
  grid-template-areas:
  'header header header'
  'fotos fotos fotos'
  'torneos-fem torneos-a torneos-b'
  'sponsors sponsors sponsors'
  'quote quote quote'
  'title title title'
  'mapa contacto contacto'
  ;
  /* 'fotos texto' */
  grid-gap: 5px;
  padding: 10px;
  grid-template-columns: 33%;
}
@media only screen and (max-width: 768px) {
  .carousel-div{
    height: 50vw
  }
  a.slider-text, p.slider-text {
    font-size: 12px;
  }
  .grid-container {
    grid-template-areas:
    'header header'
    'fotos fotos'
    'torneos-fem torneos-fem'
    'torneos-a torneos-a'
    'torneos-b torneos-b'
    'sponsors sponsors'
    'quote quote'
    'title title'
    'mapa mapa'
    'contacto contacto'
    'texto texto'
    ;
    grid-template-columns: 40%;
  }
  .contacto{
    padding: 10px;
    zoom: 0.8;
  }
  .torneodiv-a, .torneodiv-b, .torneodiv-fem{
    height: 50vw;
  }
}

.torneodiv-a, .torneodiv-b, .torneodiv-fem{
  position: relative;
  height: 200px;
}
h6{
  margin: 20px;
}
h6:hover {
  /*text-decoration: underline;*/
}

.sponsordiv .row {
  max-width: 700px;
  margin: auto;
}

</style>

</head>
<body>

  <div class="grid-container">
    <?php snippet('header-grid') ?>

    <div class="carousel-div p-0 mx-md-5 mx-sm-0">
      <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
        <div class="carousel-inner h-100">
          <?php foreach ($page->children()->find('carousel')->images()->sortBy('sort') as $slide): ?>
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

      <a href="<?= $site->children()->find('masculino-a')->url() ?>"  class="torneodiv-a bitten"><p class="slider-text">
        Fútbol 7 Masculino
      </p></a>
      <a  class="torneodiv-b bitten"><p class="slider-text">
        <!-- href="<?= $site->children()->find('masculino-b')->url() ?>"  -->
        Fútbol 7 Masculino B
      </p></a>
      <a href="<?= $site->children()->find('futbol-femenino')->url() ?>"   class="torneodiv-fem bitten"><p class="slider-text">
        Fútbol Femenino
      </p></a>
      <!-- <div class="textodiv bitten" style="padding: 20px; text-align: left">

        <p class="poiret"><?= $page->text() ?></p>

      </div> -->


      <?= snippet('sponsors') ?>

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
