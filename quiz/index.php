<?php

require_once(__DIR__ . '/config.php');
$quiz = new MyApp\Quiz();
if (!$quiz->isFinished()) {
  $data = $quiz->getCurrentQuiz();
}

$token = $_SESSION[$quiz::TOKEN];
$perfect_corrent_num = $_SESSION['perfect_corrent_num'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Quiz</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php if ($quiz->isFinished()) : ?>
    <div id="container">
      <div id="result">
        Your score ...
        <div><?= h($quiz->getScore()); ?> %</div>
      </div>
      <a href="">
        <div id="btn">Replay?</div>
      </a>
    </div>
    <?php $quiz->reset(); ?>
  <?php else : ?>
    <?php if ($perfect_corrent_num !== 0) : ?>
      <p>全問正解数は<?php echo $perfect_corrent_num ?>回です</p>
      <a href="/reset.php">リセット</a>
      <!-- <p>全問正解数は<?php echo $perfect_corrent_num ?>回です</p> -->
    <?php endif; ?>
    <div id="container">
      <h1>Q. <?= h($data['question']); ?></h1>
      <ul>
        <?php foreach ($data['answer'] as $a) : ?>
          <li class="answer"><?= h($a); ?></li>
        <?php endforeach; ?>
      </ul>
      <div id="btn" class="disabled"><?= $quiz->isLast() ? 'Show Result' : 'Next Question'; ?></div>
      <input type="hidden" id="token" value="<?= h($token); ?>">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="quiz.js"></script>
  <?php endif; ?>
</body>

</html>