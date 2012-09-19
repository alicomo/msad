<?php slot('header') ?>
  <?php echo sprintf("%s", $header ) ?>
<?php end_slot() ?>
<?php foreach($articles as $article): ?>
<header>
    <h2><a href="/1/a-day-with-symfony2"><?php echo $article->getTitle() ?></a></h2>
</header>

<div class="snippet">
                <p><?php echo $article->getBody() ?></p>
                <p class="continue"><a href="/1/a-day-with-symfony2">Continue reading...</a></p>
</div>
<?php endforeach; ?>
