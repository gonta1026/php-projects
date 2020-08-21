<?php

(function () {
  $str = 'abcdef';
  echo strlen($str) . PHP_EOL; // 6

  $str = ' ab cd ';
  echo strlen($str) . PHP_EOL; // 7

  echo strlen(trim($str)) . PHP_EOL; // 5

  $str = 'あああああ';
  echo strlen(trim($str)) . PHP_EOL; //   15
})();


(function () {
  $str = 'abcdef';
  echo mb_strlen($str) . PHP_EOL; // 6

  $str = ' ab cd ';
  echo mb_strlen($str) . PHP_EOL; // 7

  echo mb_strlen(trim($str)) . PHP_EOL; // 5

  $str = 'あああああ';
  echo mb_strlen(trim($str)) . PHP_EOL; // 5
})();
