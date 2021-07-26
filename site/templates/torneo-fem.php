<?php snippet('header') ?>
<?= css('assets/css/brackets.css') ?>

<?= js('assets/js/tabletop.js') ?>

<style>
.equipos { grid-area: equipos;
}
.jugadores {
  grid-area: jugadores;
  overflow: auto !important;
  max-height: 288px;
}

.suspendidos {
  grid-area: suspendidos;
  overflow: auto !important;
  max-height: 288px;
}
.fairplay {
  grid-area: fairplay;
  overflow: auto !important;
  max-height: 288px;
}
.proximafecha{
  grid-area: proximafecha
}
.fixture{
  grid-area: fixture
}

p.proxDate {
  position: absolute;
  top: 10px;
  right: 10px;
}
.grid-container {
  grid-template-areas:
  'header header'
  'title title'
  'loader loader'
  'equipos jugadores'
  'bracketOro bracketOro'
  'bracketPlata bracketPlata'
  'fixture proximafecha'
  'fixture sponsors'
  'fixture fairplay'
  'fixture suspendidos'
  'fixture mapa'
  'fixture contacto'
  'fixture null'
  ;
  grid-template-columns: 60%;
}
.svgLoader{
  grid-area: loader;
}

.carousel {
  grid-area: fotos;
  height: 100px;
}

.contacto{
  grid-area: contacto;
  padding: 20px;
}
.contacto .poiret{
  zoom: 0.8;
}

.mapa{
  background: url('<?= $site->find('home')->mapa()->toFile()->url() ?>');
  padding: 50px 20px;
  grid-area: mapa;
}

.marquee {
  grid-area: quote;
  height: fit-content;
  margin: auto 0;
  display: flex;
  align-items: center;
}
#bracketOro {
  grid-area: bracketOro;
  padding: 0 20px;
}

#bracketPlata {
  grid-area: bracketPlata;
  padding: 0 20px;
}

@media only screen and (max-width: 768px) {
  .grid-container {
    grid-template-areas:
    'header'
    'title'
    'loader'
    'equipos'
    'bracketOro'
    'bracketPlata'
    'proximafecha'
    'jugadores'
    'sponsors'
    'fairplay'
    'suspendidos'
    'fixture'
    'mapa'
    'contacto'
    ;
    grid-template-columns: 100%;
  }
}
@media only screen and (max-width: 424px) {
  #tablaPos, #tablaJug, #tablaFair, .header-torneo h4{
    zoom: .75
  }
}



.tabla thead tr td, .bg-success, .page-title, .header-torneo, .header-sociales, footer {
    background: #E56399 !important;
  }

  body {
      background: #8A4F7D;
  }



</style>


</head>
<body>


  <div class="grid-container">
    <div class="svgLoader bitten">

      <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
      <path fill="#fff" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
      c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
      <animateTransform
      attributeName="transform"
      attributeType="XML"
      type="rotate"
      dur="2s"
      from="0 50 50"
      to="360 50 50"
      repeatCount="indefinite" />
    </path>
    <path fill="#fff" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
    c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
    <animateTransform
    attributeName="transform"
    attributeType="XML"
    type="rotate"
    dur="1s"
    from="0 50 50"
    to="-360 50 50"
    repeatCount="indefinite" />
  </path>
  <path fill="#fff" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
  L82,35.7z">
  <animateTransform
  attributeName="transform"
  attributeType="XML"
  type="rotate"
  dur="2s"
  from="0 50 50"
  to="360 50 50"
  repeatCount="indefinite" />
</path>
</svg>
</div>

<?php snippet('header-grid')?>



<h1 class="page-title">Futbol femenino</h1>

<div class="marquee poiret"><marquee scrollamount="10"><?= $site->find('home')->banner() ?></marquee></div>

<div class="equipos p-0 bitten" style="overflow-x: auto; overflow-y: hidden">
  <h2 class="tabla-header">tabla de posiciones</h2>
  <table class="tabla" id="tablaPos" border="1">
    <thead>
      <tr>
        <td>Equipo</td>
        <td>Pts</td>
        <td>PJ</td>
        <td>PG</td>
        <td>PE</td>
        <td>PP</td>
        <td>GF</td>
        <td>GC</td>
        <td>Dif</td>
        <td>FP</td>
        <!-- <td>Amarillas</td>
          <td>Rojas</td>
          <td>FairPlay</td> -->
        </tr>
      </thead>
      <!-- <tr><td>Cumbia</td><td>0</td><td>3</td><td>0</td><td>0</td><td>2</td><td>0</td><td>4</td><td>-4</td></tr><tr><td>Village</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>2</td><td>0</td><td>2</td></tr><tr><td>Cachengue</td><td>6</td><td>3</td><td>2</td><td>0</td><td>0</td><td>5</td><td>1</td><td>4</td></tr><tr><td>Carioca</td><td>0</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>3</td><td>-2</td></tr>
        <tr><td>Cumbia</td><td>0</td><td>3</td><td>0</td><td>0</td><td>2</td><td>0</td><td>4</td><td>-4</td></tr><tr><td>Village</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>2</td><td>0</td><td>2</td></tr><tr><td>Cachengue</td><td>6</td><td>3</td><td>2</td><td>0</td><td>0</td><td>5</td><td>1</td><td>4</td></tr><tr><td>Carioca</td><td>0</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>3</td><td>-2</td></tr> -->
      </table>

    </div>
    <div class="jugadores">
      <h2 class="tabla-header">goleadoras</h2>
      <table class="tabla" id="tablaJug" border="1">
        <thead>
          <tr>
            <td>Jugador</td>
            <td>Equipo</td>
            <td>Goles</td>
            <!-- <td>Amarillas</td>
              <td>Rojas</td> -->
            </tr>
          </thead>
          <!-- <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr>
            <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr>
            <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr> -->
          </table>
        </div>

        <div class="suspendidos" id="divSusp">
          <h2 class="tabla-header text-center">suspendidas</h2>
          <table class="tabla" id="tablaSusp" border="1">
            <thead>
              <tr>
                <td>Jugador</td>
                <td>Fechas</td>
                </tr>
              </thead>
              </table>
            </div>

        <div class="fairplay bitten">
          <h2 class="tabla-header">tarjetas</h2>
          <table class="tabla" id="tablaFair" border="1">
            <thead>
              <tr>
                <td>Jugador</td>
                <td>Equipo</td>
                <td><span class="tAmarilla"></span></td>
                <td><span class="tRoja"></span></td>
                <!-- <td>Amarillas</td>
                  <td>Rojas</td> -->
                </tr>
              </thead>
              <!-- <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr>
                <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr>
                <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr> -->
              </table>
            </div>



        <div class="fixture bitten">
          <h2 class="tabla-header">fixture</h2>
          <div id="fechas">


          </div>

        </div>

        <a href="https://goo.gl/maps/BtPVAc6KGZP7ZhgGA" target="_blank" class="mapa bitten">
          <h2 class="">cómo llegar?</h2>
        </a>

        <div class="contacto bitten" id="contacto">
          <h4>Los Lagartos Country Club</h4>
          <h5>Ramal Pilar Km 46, <br>Pilar, Buenos Aires</h5>
          <div class="poiret">
            <?= $site->find('home')->mail()->kirbytext() ?>
          </div>
        </div>

        <!-- <div class="carousel p-0">
          <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
            <div class="carousel-inner h-100">
              <?php foreach ($site->find('home')->children()->find('carousel')->images() as $slide): ?>
                <div class="carousel-item h-100">
                  <div class="h-100" style="background: url('<?= $slide->url() ?>'); background-size: cover; color: #fff; text-align: left; padding: 20px">
                    <p class="slider-text"><?= $slide->text() ?>
                    </div>
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
        </div> -->

        <?= snippet('sponsors') ?>

        <div class="proximafecha">
          <div id="proximaF">
            <p class="proxima-title">Fecha <span id="proximaFechaNumber"></span> <span class="poiret" id="proximaFechaFecha"></span></p>
            <table class="tabla" border="1" id="proximaFechaTabla"><thead><tr><td>Hora</td><td>Local</td><td>Visitante</td></tr></thead>
              <tbody>
                <!-- <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
                  <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr> -->
                </tbody>
              </table>
            </div>
          </div>

        <div id="bracketOro" class="bracket bitten" style="display:none">
          <h2 class="tabla-header">Copa Oro</h2>
          <div class="split split-one mb-3">
            <div class="round round-one current" id="semiCopaOro">
                <div>Semifinal <span class="poiret" id="semiFinalOroDate"></span></div>
            </div>
            <div class="round round-two" id="finalCopaOro">
              <div>Final <span class="poiret" id="finalOroDate"></span></div>
            </div>
          <div class="trophy">
            <i class="fa fa-trophy"></i>
          </div>
        </div>
      </div>

      <div id="bracketPlata" class="bracket bitten" style="display:none">
        <h2 class="tabla-header">Copa Plata</h2>
        <div class="split split-one mb-3">
          <div class="round round-one current" id="semiCopaPlata">
            <div>Semifinal <span class="poiret" id="semiFinalPlataDate"></span></div>
          </div>
          <div class="round round-two" id="finalCopaPlata">
            <div>Final <span class="poiret" id="finalPlataDate"></span></div>
          </div>
          <div class="trophy plata">
            <i class="fa fa-trophy"></i>
          </div>
        </div>
      </div>



</div>

        <script type="text/javascript">
          var public_spreadsheet_url = '<?= $page->gsheet() ?>';
          var myBase
        </script>




        <?php snippet('tabletop-semifinal') ?>


        <?php snippet('footer') ?>
