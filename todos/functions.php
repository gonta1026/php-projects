<?php

function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function pdoExecute($db, $sql, $ele = null) //executeをまとめてみた。
{
  $stmt = $db->prepare($sql);
  $stmt->execute($ele);
}
