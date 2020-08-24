<?php

//NOTE  array_unshift — 一つ以上の要素を配列の最初に加える
(function () {
  $scores01 = [30, 40, 50];
  array_unshift($scores01, 10, 20); //　複数指定できる。
  print_r($scores01);

  /* 
  //output 
  Array
  (
      [0] => 10
      [1] => 20
      [2] => 30
      [3] => 40
      [4] => 50
  )
  */
})();


//NOTE  array_push — 一つ以上の要素を配列の最後に加える
(function () {
  $scores = [30, 40, 50];
  array_push($scores, 10, 20); //　複数指定できる。
  print_r($scores);

  /* 
  //output 
  Array
  (
      [0] => 30
      [1] => 40
      [2] => 50
      [3] => 10
      [4] => 20
  )
  */
})();

//NOTE  array_push — 一つ以上の要素を配列の最後に加える
(function () {
  $scores = [30, 40, 50];
  array_pop($scores); //　複数指定できる。
  print_r($scores);

  /* 
  //output 
  Array
  (
      [0] => 30
      [1] => 40
  )
  */
})();

//NOTE  METHODを使わずに一つずつ後ろに追加
(function () {
  $scores[] = 10;
  $scores[] = 20;
  $scores[] = 30;
  print_r($scores);

  /* 
  //output 
  Array
  (
      [0] => 10
      [1] => 20
      [2] => 30
  )
  */
})();


//NOTE  METHODを使わずに一つずつ後ろに追加
(function () {
  $input = array("a", "b", "c", "d", "e");
  $output01 = array_slice($input, 2);
  print_r($output01); // OUTPUT "c", "d", "e" を返す
  $output02 = array_slice($input, -1);
  print_r($output02); // OUTPUT "e" を返す
  $output03 = array_slice($input, 0, 3);   // OUTPUT "a", "b", "c" を返す
  print_r($output03); // OUTPUT "d" を返す

  // 配列キーの違いに注意
  // print_r(array_slice($input, 2, -1));
  // print_r(array_slice($input, 2, -1, true));
})();
