<?php snippet('header') ?>

<?= js('assets/js/tabletop.js') ?>

<style>
.equipos { grid-area: equipos;
}
.jugadores {
  grid-area: jugadores;
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
  'fixture proximafecha'
  'fixture sponsors'
  'fixture null'
  ;
  grid-template-columns: 60%;
}
.svgLoader{
  grid-area: loader;
}

@media only screen and (max-width: 768px) {
  .grid-container {
    grid-template-areas:
    'header header'
    'title title'
    'loader loader'
    'equipos equipos'
    'jugadores jugadores'
    'proximafecha proximafecha'
    'sponsors sponsors'
    'fixture fixture'
    ;
    grid-template-columns: 50%;
  }
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



    <h1 class="page-title">Futbol 7 masculino</h1>

    <div class="equipos p-0 bitten" style="overflow: auto">
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
          <h2 class="tabla-header">goleadores</h2>
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



          <div class="fixture bitten">
            <h2 class="tabla-header">fixture</h2>
            <div id="fechas">


                            </div>

                          </div>

                          <div class="sponsors">
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
                          </div>


                          <?php snippet('tabletop') ?>


                          <?php snippet('footer') ?>
