<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Poll.php');
try {
  $poll = new \MyApp\Poll();
} catch (Exception $e) {
  echo $e->getMessage();
  exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $poll->post();
}

$err = $poll->getError();
$title = "Poll Result";
include (__DIR__ ."/views/index.php");
?>
