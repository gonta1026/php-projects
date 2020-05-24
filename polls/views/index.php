<!DOCTYPE html>
<html lang="ja">
<?php include(__DIR__ . "/common/head.php") ?>
<body>
  <?php if (isset($err)) : ?>
    <div class="error"><?= h($err); ?></div>
  <?php endif; ?>
  <h1>Which do you like best?</h1>
  <form action="" method="post">
    <div class="row">
      <div class="box" id="box_0" data-id="0"></div>
      <div class="box" id="box_1" data-id="1"></div>
      <div class="box" id="box_2" data-id="2"></div>
      <input type="hidden" id="answer" name="answer" value="">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </div>
    <div id="btn">Vote and See Results</div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="script.js"></script>
</body>

</html>