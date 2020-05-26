<?php

require_once(__DIR__ . '/config.php');

$quizSet = [];
$quizSet[] = [
  'q' => 'What is A?',
  'a' => ['A0', 'A1', 'A2', 'A3']
];
$quizSet[] = [
  'q' => 'What is B?',
  'a' => ['B0', 'B1', 'B2', 'B3']
];
$quizSet[] = [
  'q' => 'What is C?',
  'a' => ['C0', 'C1', 'C2', 'C3']
];
$current_num = 0;

$data = $quizSet[$current_num];
shuffle($data['a']);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Quiz</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div id="container">
    <h1>Q. <?= h($data['q']); ?></h1>
    <ul>
      <?php foreach ($data['a'] as $a) : ?>
        <li class="answer"><?= h($a); ?></li>
      <?php endforeach; ?>
    </ul>
    <div id="btn" class="disabled">Next Question</div>
  </div>
</body>

</html>