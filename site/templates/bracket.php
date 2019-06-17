<?php snippet('header') ?>

<?= css('assets/css/brackets.css') ?>
<?= js('assets/js/tabletop.js') ?>

<style media="screen">
.grid-container {
  grid-template-areas:
  'header header'
  'title title'
  'text text'
  ;
  grid-template-columns: 50%;
}
.page-text{
  grid-area: text;
  padding: 20px 40px;
  text-transform: none !important;

}
</style>

</head>
<body>
  <div class="grid-container">
    <?php snippet('header-grid')?>
    <h1 class="page-title"><?= $page->title() ?></h1>
    <div class="page-text poiret bitten text-justify">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>
</body>



    <section id="bracket">
      <div class="container">

    <div class="split split-one">
        <div class="round round-one current" id="semiCopaOro">
            <div class="round-details">Semifinal<br/><span class="date">March 16</span></div>
            <ul class="matchup">
                <li class="team team-top">Duke<span class="score">76</span></li>
                <li class="team team-bottom">Virginia<span class="score">82</span></li>
                <li>12 de septiembre</li>
            </ul>
            <ul class="matchup">
                <li class="team team-top">Wake Forest<span class="score">64</span></li>
                <li class="team team-bottom">Clemson<span class="score">56</span></li>
                <li>12 de septiembre</li>
            </ul>

        </div>

        <div class="round round-two" id="finalCopaOro">
            <div class="round-details">Final<br/><span class="date">March 18</span></div>
            <ul class="matchup">
                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
                <li>12 de septiembre</li>
            </ul>
        </div>
    </div>
  </div>

</section>


<?php snippet('tabletop') ?>

<?php snippet('footer') ?>
