<!DOCTYPE html>
<html lang="ja">
<?php include(__DIR__ . "/common/head.php") ?>

<body>
  <h1>Result ...</h1>
  <div class="row">
    <?php for ($i = 0; $i < 3; $i++) : ?>
      <div class="box" id="box_<?= h($i); ?>"><?= h($results[$i]); ?></div>
    <?php endfor; ?>
  </div>
  <a href="/">
    <div id="btn">Go Back</div>
  </a>
</body>

</html>