<?php

$input = "こんにちわ";
echo strlen($input). PHP_EOL;//strlenで文字数をカウント
echo strlen(trim($input)). PHP_EOL;//trimで空白を除去してカウント

$input = "tanaka_marukusu_tyurio";

echo strpos($input, "_"). PHP_EOL;
//output 6
echo $input =str_replace("_", "\\", $input) . PHP_EOL;//str_replaceで文字列の置き換え
//output tanaka\marukusu\tyurio

/* -----------------------
日本語を扱う時はmb_strlenを使うこと
----------------------- */


$input = " こんにちわ";
echo mb_strlen($input) . PHP_EOL; //文字数をカウント
echo mb_strlen(trim($input)) . PHP_EOL; //空白を除去してカウント
echo mb_strpos($input, "_わ_") . PHP_EOL;

echo $input = "tanaka_わ_tyurio". PHP_EOL;


/* -----------------------
固定長文字数の切り出し
----------------------- */


$input = '20200320Item-A  1200';
$input = substr_replace($input, 'Item-B', 8, 6);//指定した位置からの文字列の置き換え

$date = substr($input, 0, 8);
$product = substr($input, 8, 8);
$amount = substr($input, 16);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
// echo $amount . PHP_EOL;
$format_num = number_format($amount) . PHP_EOL; //number_formatを使うことで数字の間に『,』を入れてフォーマットしてくれる
// echo $format_num . PHP_EOL;
echo gettype($format_num) . PHP_EOL;//string



/* -----------------------
文字列の検索
preg_match()
preg_match_all()
preg_replace()
----------------------- */

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/';
// preg_match($pattern, $input, $matches);//最初に見つかったものを＄matchに代入
preg_match_all($pattern, $input, $matches);//マッチしたもの全て取得
var_export($matches);

$input = preg_replace($pattern, '**-****-****', $input);//**-****-****に全て置換する。
echo $input . PHP_EOL;