<?php



(function () {
  $mystring = 'akira_yamada';
  $findme   = '_';
  $pos = mb_strpos($mystring, $findme);

  // === を使用していることに注目しましょう。単純に == を使ったのでは
  // 期待通りに動作しません。なぜなら 'a' が 0 番目 (最初) の文字だからです。
  if ($pos === false) {
    echo "文字列 '$findme' は、文字列 '$mystring' の中で見つかりませんでした" . PHP_EOL;
  } else {
    echo "文字列 '$findme' が文字列 '$mystring' の中で見つかりました" . PHP_EOL;
    echo "見つかった位置は $pos です" . PHP_EOL;
    // 文字列 'a' が文字列 'abc' の中で見つかりました 見つかった位置は 0 です
  }
})();


(function () {
  $mystring = 'ほげ保hゲオほげ';
  $findme   = 'オ';
  $pos = mb_strpos($mystring, $findme);

  // === を使用していることに注目しましょう。単純に == を使ったのでは
  // 期待通りに動作しません。なぜなら 'a' が 0 番目 (最初) の文字だからです。
  if ($pos === false) {
    echo "文字列 '$findme' は、文字列 '$mystring' の中で見つかりませんでした" . PHP_EOL; //文字列 'a' は、文字列 'keisei' の中で見つかりませんでした
  } else {
    echo "文字列 '$findme' が文字列 '$mystring' の中で見つかりました" . PHP_EOL;
    echo "見つかった位置は $pos です" . PHP_EOL;
  }
})();
