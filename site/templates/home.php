<?php snippet('header') ?>

<link href="https://fonts.googleapis.com/css?family=Audiowide|Monoton|Poiret+One|Press+Start+2P" rel="stylesheet">

<style>
p.slider-text {
  font-size: 20px;
  text-shadow: 0 0 10px #000;
  max-width: 50%;
}
.mapa{
  background: url('<?php echo url('assets/images/mapa.png') ?>');
}

.carousel { grid-area: fotos; }
.marquee {
  grid-area: quote;
  height: fit-content;
  margin: auto 0;
  display: flex;
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
  grid-template-columns: 60%;
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
    grid-template-columns: 50%;
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

    <h1 class="page-title">Contacto</h1>

    <div class="mapa bitten">
      <h2 class="">cómo llegar?</h2>
    </div>

    <div class="contacto bitten">
      <h4>Los Lagartos Country Club</h4>
      <h5>Ramal Pilar Km 46, Pilar, Buenos Aires</h5>
      <div class="poiret">

        <h3>futbollagartos@gmail.com</h3>
        <p>@futbollagartos</p>
      </div>
    </div>




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


      <div class="marquee poiret"><marquee scrollamount="10">Fecha suspendida por lluvia!</marquee></div>
      <div class="torneodiv bitten"><p class="slider-text">Fútbol 7 Masculino</p></div>
      <div class="textodiv bitten" style="padding: 20px; text-align: left">

        <p class="poiret">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

      </div>
      <div class="sponsordiv">
        <div class="row">
          <div class="col sponsorcol">
            <img class="sponsor w-100" src="<?php echo url('assets/images/quilmes.jpg') ?>" alt="">
          </div>
          <div class="col sponsorcol">
            <img class="sponsor w-100" src="<?php echo url('assets/images/quilmes.jpg') ?>" alt="">
          </div>
          <div class="col sponsorcol">
            <img class="sponsor w-100" src="<?php echo url('assets/images/quilmes.jpg') ?>" alt="">
          </div>
          <div class="col sponsorcol">
            <img class="sponsor w-100" src="<?php echo url('assets/images/quilmes.jpg') ?>" alt="">
          </div>
        </div>
      </div>


      <!-- container grid -->
    </div>

    <?php snippet('footer') ?>
