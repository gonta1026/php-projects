<?php

spl_autoload_register(function ($class) {
  $prefix = 'MyApp\\';
  if (strpos($class, $prefix) === 0) {
    $className = substr($class, strlen($prefix));
    $classFilePath = __DIR__ . '/' . $className . '.php';
    echo "<br />";
    if (file_exists($classFilePath)) {
      require $classFilePath;
    } else {
      echo 'No such class: ' . $className;
      exit;
    }
  }
});

// $class => 'MyApp\\Quiz''MyApp\\Question''MyApp\\Token'
// $prefix => ''MyApp\\''MyApp\\''MyApp\\''
// strpos => 文字列内の部分文字列が最初に現れる場所を見つける

// MyAppの名前空間にある各クラスが呼び出されている
// '/Applications/MAMP/htdocs/php/php-projects/quiz/Quiz.php'
// '/Applications/MAMP/htdocs/php/php-projects/quiz/Question.php'
// '/Applications/MAMP/htdocs/php/php-projects/quiz/Token.php'