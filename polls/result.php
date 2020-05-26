<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Poll.php');

try {
  $poll = new \MyApp\Poll();
} catch (Exception $e) {
  echo $e->getMessage();
  exit;
}

$results = $poll->getResults();
$title = "Result | Poll Result";
// 画面を表示
include (__DIR__ . "/views/result.php")
?>
