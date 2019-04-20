<?php snippet('header') ?>

  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

<style>
p.slider-text {
    font-size: 20px;
    text-shadow: 0 0 10px #000;
}
a.nav-link {
    font-size: 8px;
}

.item1 { grid-area: header; }
.carousel { grid-area: fotos; }
.marquee { grid-area: quote; }
.torneodiv { grid-area: torneos; }
.textodiv { grid-area: contacto; }
.sponsordiv { grid-area: sponsors; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header'
    'fotos torneos'
    'fotos contacto'
    'quote sponsors';
  grid-gap: 5px;
  padding: 10px;
  grid-template-columns: 50%;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 40px 0;
  font-size:24px;
  border-radius: 5px;
  box-shadow: 0 0 10px -3px;
}
  html{
    height: 100%;
    padding: 100px;
  }
  body{
    background: url('field.jpg');
    background-size: cover;
    height: 100%;
  }
  *{
    font-family: 'Press Start 2P', monospace;
  }
  .main{
  /* background: #ffff55; */
  margin: 200px;
  border: solid #fff 10px;
  border-radius: 40px;
  padding: 50px;
  color: #fff;
  font-family: 'Press Start 2P', monospace;
  font-size: 30px;
  font-weight: bolder;
  position: relative
}
.mainbg{
  position: absolute;
  width: 100%;
  height: 100%;
  background: #fff;
  opacity: 0.3;
  top: 0;
  left: 0;
  z-index: -99;
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
  <div class="item1">
    Header
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
  <div class="marquee"><marquee scrollamount="10">Fecha suspendida por lluvia!</marquee></div>
  <div class="torneodiv">Torneos</div>
  <div class="textodiv">Contacto</div>
  <div class="sponsordiv">Sponsors</div>
</div>

<?php snippet('footer') ?>
