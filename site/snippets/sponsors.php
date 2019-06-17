<div class="sponsordiv">
  <div class="row align-items-center">

    <?php foreach ($site->children()->find('sponsors')->images() as $sponsor): ?>
      <div class="col sponsorcol">
        <img class="sponsor w-100" src="<?= $sponsor->url() ?>" alt="">
      </div>
    <?php endforeach ?>

  </div>
</div>
