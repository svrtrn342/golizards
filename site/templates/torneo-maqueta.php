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
  'equipos jugadores'
  'fixture proximafecha'
  'fixture sponsors'
  'fixture null'
  ;
  grid-template-columns: 60%;
}

@media only screen and (max-width: 768px) {
  .grid-container {
    grid-template-areas:
    'header header'
    'title title'
    'equipos equipos'
    'proximafecha proximafecha'
    'jugadores jugadores'
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

    <?php snippet('header-grid')?>

      <h1 class="page-title">Futbol 7 masculino</h1>

    <div class="equipos p-0 bitten" style="overflow-x: auto">
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
        <tr><td>Cumbia</td><td>0</td><td>3</td><td>0</td><td>0</td><td>2</td><td>0</td><td>4</td><td>-4</td></tr><tr><td>Village</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>2</td><td>0</td><td>2</td></tr><tr><td>Cachengue</td><td>6</td><td>3</td><td>2</td><td>0</td><td>0</td><td>5</td><td>1</td><td>4</td></tr><tr><td>Carioca</td><td>0</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>3</td><td>-2</td></tr>
        <tr><td>Cumbia</td><td>0</td><td>3</td><td>0</td><td>0</td><td>2</td><td>0</td><td>4</td><td>-4</td></tr><tr><td>Village</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>2</td><td>0</td><td>2</td></tr><tr><td>Cachengue</td><td>6</td><td>3</td><td>2</td><td>0</td><td>0</td><td>5</td><td>1</td><td>4</td></tr><tr><td>Carioca</td><td>0</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>3</td><td>-2</td></tr></table>

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
          <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr>
          <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr>
          <tr><td>Bana</td><td>Cachengue</td><td>4</td></tr><tr><td>Noni</td><td>Cachengue</td><td>1</td></tr><tr><td>Pochi</td><td>Cumbia</td><td>2</td></tr><tr><td>Palga</td><td>Village</td><td>2</td></tr><tr><td>Susi</td><td>Village</td><td>3</td></tr>
        </table>
        </div>



        <div class="fixture bitten">
          <h2 class="tabla-header">fixture</h2>
          <div id="fechas">
            <div class="fixture-div">
            <p>Fecha 1 <span class="poiret">4/10/19</span></p>
            <table align="center" class="tabla" id="fecha1" border="1">
              <thead><tr><td>Local</td><td></td><td></td><td>Visitante</td></tr></thead>
              <tbody>
                <tr><td>Cachengue</td><td>3</td><td>1</td><td>Carioca</td></tr><tr><td>Cumbia</td><td>0</td><td>2</td><td>Village</td></tr>
                <tr><td>Cachengue</td><td>3</td><td>1</td><td>Carioca</td></tr><tr><td>Cumbia</td><td>0</td><td>2</td><td>Village</td></tr>
              </tbody></table>
          </div>
          <div class="fixture-div">
          <p>Fecha 2 <span class="poiret">4/10/19</span></p>
          <table class="tabla" align="center" id="fecha1" border="1">
            <thead><tr><td>Local</td><td></td><td></td><td>Visitante</td></tr></thead>
            <tbody>
              <tr><td>Cachengue</td><td>3</td><td>1</td><td>Carioca</td></tr><tr><td>Cumbia</td><td>0</td><td>2</td><td>Village</td></tr>
              <tr><td>Cachengue</td><td>3</td><td>1</td><td>Carioca</td></tr><tr><td>Cumbia</td><td>0</td><td>2</td><td>Village</td></tr>
            </tbody></table>
        </div>
        <div class="fixture-div">
        <p>Fecha 3 <span class="poiret">4/10/19</span></p>
        <table class="tabla" align="center" id="fecha1" border="1">
          <thead><tr><td>Local</td><td></td><td></td><td>Visitante</td></tr></thead>
          <tbody>
            <tr><td>Cachengue</td><td>3</td><td>1</td><td>Carioca</td></tr><tr><td>Cumbia</td><td>0</td><td>2</td><td>Village</td></tr>
            <tr><td>Cachengue</td><td>3</td><td>1</td><td>Carioca</td></tr><tr><td>Cumbia</td><td>0</td><td>2</td><td>Village</td></tr>
          </tbody></table>
      </div>
      <div class="fixture-div">
      <p>Fecha 4 <span class="poiret">4/10/19</span></p>
      <table class="tabla" border="1"><thead><tr><td>Hora</td><td>Local</td><td>Visitante</td></tr></thead>
        <tbody>
          <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
          <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
        </tbody></table>
    </div>
    <div class="fixture-div">
    <p>Fecha 5 <span class="poiret">4/10/19</span></p>
    <table class="tabla" border="1"><thead><tr><td>Hora</td><td>Local</td><td>Visitante</td></tr></thead>
      <tbody>
        <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
        <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
      </tbody></table>
  </div>
  <div class="fixture-div">
  <p>Fecha 6 <span class="poiret">4/10/19</span></p>
  <table class="tabla" border="1"><thead><tr><td>Hora</td><td>Local</td><td>Visitante</td></tr></thead>
    <tbody>
      <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
      <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
    </tbody></table>
</div>
<div class="fixture-div">
<p>Fecha 7 <span class="poiret">4/10/19</span></p>
<table class="tabla" border="1"><thead><tr><td>Hora</td><td>Local</td><td>Visitante</td></tr></thead>
  <tbody>
    <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
    <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
  </tbody></table>
</div>
<div class="fixture-div">
<p>Fecha 8 <span class="poiret">4/10/19</span></p>
<table class="tabla" border="1"><thead><tr><td>Hora</td><td>Local</td><td>Visitante</td></tr></thead>
  <tbody>
    <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
    <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
  </tbody></table>
</div>

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
              <p class="proxima-title">Fecha 3 <span class="poiret">4/17/19</span></p>
              <table class="tabla" border="1"><thead><tr><td>Hora</td><td>Local</td><td>Visitante</td></tr></thead>
                <tbody>
                  <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
                  <tr><td></td><td>Village</td><td>Carioca</td></tr><tr><td></td><td>Cumbia</td><td>Cachengue</td></tr>
                </tbody></table>
              </div>
              </div>
            </div>



            




                              <?php snippet('footer') ?>
