<?php snippet('header') ?>

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

<?php snippet('footer') ?>
